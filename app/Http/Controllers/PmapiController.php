<?php
/**
 * projectmager REST API
 * caller: projectmanager
 * call url:  https://domain/public/pmapi/sessionid/projectid
 * @retsult json str {"users":[[avatarURL, nickName], ....], "admins":[avatarURL], "loggedUser":avatarURL }
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PmapiController extends Controller {
    
    /**
     * email, username repair
     * @param UserRecord $user
     */    
    protected function userAdjust(& $user) {
        if ($user->avatarUrl == '') {
            $user->avatarUrl = 'https://www.gravatar.com/avatar/'.md5($user->email);
        }
        if ($user->username == '') {
            $user->username = 'user'.$user->id;
        }
    }
    
     /**
     * projectmanager api
     * @param object
     * @param string sessionid
     * @param integer projectid
     * @return void echo json string
     */
    public function api(Request $request, $sessionid = '', $projectid = '') {
        if (!headers_sent()) {
            header('Content-Type: json');
        }
        $result = new \stdClass();
        $result->users = array();
        $result->admins = array();
        $result->loggedUser = '';
        
        // get project members
        $memberTable = DB::table('members')->where('project_id', $projectid);
        $members = $memberTable->get();
        foreach ($members as $member) {
            $userTable = DB::table('users')->where('id', $member->user_id);
            $user = $userTable->first();
            if ($user) {
                $this->userAdjust($user);
                $result->users[] = array($user->avatarUrl, $user->username);
            }
        }
                
        // get project administrator
        $projectTable = DB::table('projects')->where('id', $projectid);
        $project = $projectTable->first();
        if ($project) {
            $userTable = DB::table('users')->where('id', $project->owner);
            $user = $userTable->first();
            if ($user) {
                $this->userAdjust($user);
                $result->admins[] = $user->avatarUrl;
                // add project administrator to members
                $result->users[] = array($user->avatarUrl, $user->username);
            }
        }
                
        // get loggedUser
        $loggedUser = 'https://www.gravatar.com/avatar/';
        $sessionTable = DB::table('sessions')->where('id', $sessionid);
        $session = $sessionTable->first();
        if ($session) {
            $userTable = DB::table('users')->where('id', $session->user_id);
            $user = $userTable->first();
            if ($user) {
                $this->userAdjust($user);
                $loggedUser = $user->avatarUrl;
            }
        }
        $result->loggedUser = $loggedUser;
        
        return JSON_encode($result);
    }
}

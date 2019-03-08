<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Str;
// use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

use app\Http\Controllers\LoginController;
use app\Http\Controllers\ProjectController;
include_once './tests/mock.php';
include_once './app/Http/Controllers/ProjectController.php';
include_once './app/Http/Controllers/LoginController.php';



class projectTest extends TestCase
{
    protected $controller;
    protected $request;

    /**
     * delete folder' contest recursive
     * @param unknown $dir
     */    
    protected function rrmdir($dir) {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (is_dir($dir."/".$object))
                        $this->rrmdir($dir."/".$object);
                        else
                            unlink($dir."/".$object);
                }
            }
            rmdir($dir);
        }
    }
    
    public function setup() {
        parent::setup();
        $this->request = new Request();
        $this->controller = new ProjectController();
    }
   
    public function test_newProject() {
        // create test rows into database
        DB::table('projects')->where(['title' => 'test_project'])->delete();
        DB::table('users')->where(['email' => 'test1@test.hu'])->delete();
        DB::table('users')->insert(["email"=>'test1@test.hu', 'psw'=>'', 'pin'=> '123']);
        
        // login test user
        $loginController = new LoginController();
        $this->request->merge(['email' => 'test1@test.hu', 'pin' => '123']);
        $res = $loginController->login($this->request);
        
        $this->request->merge(["title" => "test_project",
            "description" => "123456",
            "tags" => "aa",
            "vid_link" => "123456789"
        ]);
        
        $res = $this->controller->newProject($this->request);
        
        // $this->assertFalse($actual);
        // $this->assertTrue($actual);
        // $this->assertGreaterThan($expected, $actual);
        // $this->assertGreaterThanOrEqual()
        // $this->assertLessThan($excepted, $actual)
        // $this->assertLessThanOrEqual($excepted, $actual)
        // $this->assertEquals($excepted, $actual);
        // $this->assertRegExp($pattern, $actual);
        // $this->assertEquals($excepted, $actual);
        $this->assertRegexp('/\/project/',$res->redirect);  
    }
    
    public function test_update_newFolder() {
        
        // login test user
        $loginController = new LoginController();
        $this->request->merge(['email' => 'test1@test.hu', 'pin' => '123']);
        $res = $loginController->login($this->request);
        
        $project = DB::table('projects')->where(['title' => 'test_project'])->first();
        $project_path = public_path() . "/repo/" . $project->slug;
        $this->request->merge(["folder" => "newfolder"]);
        $res = $this->controller->update($this->request, $project->slug);
        $this->assertTrue(is_dir($project_path.'/newfolder'));
    }
    
    public function test_update_fileds() {
        
        // login test user
        $loginController = new LoginController();
        $this->request->merge(['email' => 'test1@test.hu', 'pin' => '123']);
        $res = $loginController->login($this->request);
        
        $project = DB::table('projects')->where(['title' => 'test_project'])->first();
        $project_path = public_path() . "/repo/" . $project->slug;
        $this->request->merge([
            "description" => "desc1",
            "tags" => "aa bb cc"
        ]);
        $res = $this->controller->update($this->request, $project->slug);
        $project = DB::table('projects')->where(['title' => 'test_project'])->first();
        $this->assertEquals("desc1",$project->description);
        $this->assertEquals("aa bb cc",$project->tags);
    }
    
    
    public function test_end() {
        // delete test datas from database
        $project = DB::table('projects')->where(['title' => 'test_project'])->first();
        DB::table('projects')->where(['title' => 'test_project'])->delete();
        DB::table('users')->where(['email' => 'test1@test.hu'])->delete();
        $project_path = public_path() . "/repo/" . $project->slug;
        $this->rrmdir($project_path);
        $this->assertEquals('','');
    }
}

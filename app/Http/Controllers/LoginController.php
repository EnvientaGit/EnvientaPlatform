<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Mail\LoginMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Utils;
use Socialite;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class LoginController extends Controller
{
	/**
	* if user not found create new user
	* create new pin code, send email
	* @params {email: 'xxxx'}
	* @return 'sent'
	*/
	protected function newPinMail($request) {
     	$user = User::updateOrCreate(['email' => $request->input('email')], ['pin' => Utils::random_str(6)]);
  	  	Mail::to($user->email)->send(new LoginMail($user));
     	return "sent";
	}	

	 /**
	 * if user not found create new user
	 * if mode=='pin' or user->psw == '') then
	 *   create new pin and send email return "sent"
	 * else
	 *   return "psw"
	 * @params {email:'xxx', mode:'?|pin' }
	 * @return string 'sent'|'psw'
	 */
    public function requestPin(Request $request) {
		$result = "";
     	$user = User::where('email', $request->input('email'))->first();     	
		// processing
		if ($request->mode == 'pin') {
			$result = $this->newPinMail($request);
		} else {
			if (isset($user->psw)) {
				if ($user->psw != '') {
					$result = "psw";
				} else {
					$result = $this->newPinMail($request);
				}	
			} else {
				$result = $this->newPinMail($request);
	    	}	
     	}
     	return $result;
    }

	 /**
	 * if $request->psw is set then login by password
	 * else login by pin
	 */
    public function login(Request $request) {
    	if (isset($request->psw)) {
	      $user = User::where('email', $request->input('email'))->where('psw', md5($request->input('psw')))->first();
	      if($user) {
	        Auth::login($user, true);
	        return "success";
	      } 
    	} else {
	      $user = User::where('email', $request->input('email'))->where('pin', $request->input('pin'))->first();
	      if($user) {
	        Auth::login($user, true);
	        return "success";
	      } 
   		}
      
      	// always update to prevent brute force attacs
      	User::updateOrCreate(['email' => $request->input('email')], ['pin' => Utils::random_str(6)]); 
      	return "fail";
    }
    
    public function logout() {
      Auth::logout();
      return redirect('/');
    }

    public function loginWithFacebook(Request $request)
    {
      $token = $request->input('token');
      $fb_user = Socialite::driver('facebook')->userFromToken($token);
      if($fb_user) {
        $user = User::updateOrCreate(
          ['email' => $fb_user->getEmail()], 
          [ 
            'pin' => Utils::random_str(6), 
            'avatarUrl' => $fb_user->getAvatar(), 
            'profileUrl' => 'https://www.facebook.com/' . $fb_user->getId()
          ]
        );
        Auth::login($user, true);
        return "success";
      } 
      return "fail";  
    }

}
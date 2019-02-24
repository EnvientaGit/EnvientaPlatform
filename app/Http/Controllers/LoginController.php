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
	 * if user not found create new user, create new pin, send email
	 * if user found and $user->psw == '' create new pin, send email
	 * if user found and $user->psw != '' return "psw"
	 */
    public function requestPin(Request $request) {
   	
      $user = User::where('email', $request->input('email'))->where('email', $request->input('email'))->first();
      if (!isset($user->psw)) {
        Schema::table('users', function (Blueprint $table) {
            $table->string('psw',100)->default('');
        });
        $user->psw = '';
      }     	
		if (isset($user->psw)) {
			if ($user->psw != '')	{
	      	$user = User::updateOrCreate(['email' => $request->input('email')], ['pin' => Utils::random_str(6)]);
				return "psw";
			} else {
	      	$user = User::updateOrCreate(['email' => $request->input('email')], ['pin' => Utils::random_str(6)]);
   	   	Mail::to($user->email)->send(new LoginMail($user));
      		return "sent";
			}	
		} else {
      	$user = User::updateOrCreate(['email' => $request->input('email')], ['pin' => Utils::random_str(6)]);
      	Mail::to($user->email)->send(new LoginMail($user));
      	return "sent";
      }	
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
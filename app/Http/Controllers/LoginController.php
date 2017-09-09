<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Mail\LoginMail;
use Illuminate\Support\Facades\Mail;

function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[random_int(0, $max)];
    }
    return $str;
}

class LoginController extends Controller
{

    public function register() {
      $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdznCwUAAAAAEkHGSIIWFp2MCk4hpWFu-40yYNB&response=".$_POST['captcha_token']."&remoteip=".$_SERVER['REMOTE_ADDR']));
      if(!$response->success)
	return "captcha error";
	
      $user = User::updateOrCreate(['email' => $_POST['email']], ['token' => random_str(64)]);
      Mail::to($user->email)->send(new LoginMail($user));
      return redirect('advertise');
    }

    public function login() {
      $token = $_GET['token'];
      $id = $_GET['id'];
      if($token && $id) {
	$user = User::find($id);
	if($user->token == $token) {
	  Auth::login($user);
	  return redirect('projects/3');
	} else {
	  return "fail";
	}
      }
      return "invalid params";
    }

    public function logout() {
      Auth::logout();
      return redirect('front');
    }
    
}

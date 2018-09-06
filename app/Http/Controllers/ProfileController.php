<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function show()
    {
    	return view('80_Pages.profile', array(
      		'user' => Auth::user()
      	));
	}

	public function update(Request $request) {
		$user = Auth::user();
		$user->username = $request->username;
		$user->realname = $request->realname;
		$user->profileUrl = $request->profileUrl;
		$user->twitterUrl = $request->twitterUrl;
		$user->linkedinUrl = $request->linkedinUrl;
		$user->walletAddress = $request->walletAddress;
		$user->bio = $request->bio;

		$user->isMaker = isset($request->isMaker); 
		$user->skills = $request->skills;
		$user->interests = $request->interests;
		
		$user->isCustomer = isset($request->isCustomer);
		$user->customerAddress = $request->customerAddress;
		$user->customerPhone = $request->customerPhone;
		$user->customerBillingAddress = $request->customerBillingAddress;

		$user->save();	

		return redirect('/profile');
	}

}
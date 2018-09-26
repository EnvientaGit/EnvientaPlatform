<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Grimzy\LaravelMysqlSpatial\Types\Point;

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
		if($user->isMaker) {
			$user->skills = $request->skills;
			$user->interests = $request->interests;
		}

		$user->isCustomer = isset($request->isCustomer);
		if($user->isCustomer) {
			$user->customerAddress = $request->customerAddress;
			$user->customerAddressCountry = $request->customerAddressCountry;
			$user->customerAddressZip = $request->customerAddressZip;
			$user->customerAddressCity = $request->customerAddressCity;
			$user->customerAddressStreet = $request->customerAddressStreet;
			$user->customerAddressStreetNumber = $request->customerAddressStreetNumber;
			$user->customerAddressGPS = new Point($request->customerAddressLat, $request->customerAddressLon);
			$user->customerPhone = $request->customerPhone;
			$user->customerBillingAddress = $request->customerBillingAddress;
		}

		$user->isManufacturer = isset($request->isManufacturer);
		if($user->isManufacturer) {
			$user->manufacturerAddress = $request->manufacturerAddress;
			$user->manufacturerAddressCountry = $request->manufacturerAddressCountry;
			$user->manufacturerAddressZip = $request->manufacturerAddressZip;
			$user->manufacturerAddressCity = $request->manufacturerAddressCity;
			$user->manufacturerAddressStreet = $request->manufacturerAddressStreet;
			$user->manufacturerAddressStreetNumber = $request->manufacturerAddressStreetNumber;
			$user->manufacturerAddressGPS = new Point($request->manufacturerAddressLat, $request->manufacturerAddressLon);
			
			$user->manufacturerName = $request->manufacturerName;
			$user->manufacturerWebsite = $request->manufacturerWebsite;
			$user->manufacturerBillingAddress = $request->manufacturerBillingAddress;
			$user->manufacturerWorkTime = $request->manufacturerWorkTime;
			$user->manufacturerPhoneNumber = $request->manufacturerPhoneNumber;
			$user->manufacturerTools = $request->manufacturerTools;
		}

		$user->save();	

		return redirect('/profile');
	}

}
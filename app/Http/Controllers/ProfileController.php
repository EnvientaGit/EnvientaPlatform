<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Grimzy\LaravelMysqlSpatial\Types\Point;

class ProfileController extends Controller
{

    public function show(Request $request)
    {
        $msg = $request->input('msg','');
        $msgClass = $request->input('msgclass','');
        return view('80_Pages.profile', array(
      		'user' => Auth::user(),
            'msg' => $msg,
            'msgClass' => $msgClass
      	));
	}

	public function update(Request $request) {
	    $msg = $request->input('msg','');
	    $msgClass = $request->input('msgclass','');
	    $user = Auth::user();
		$user->username = $request->username;
		$user->realname = $request->realname;
		$user->profileUrl = $request->profileUrl;
		$user->twitterUrl = $request->twitterUrl;
		$user->linkedinUrl = $request->linkedinUrl;
		$user->walletAddress = $request->walletAddress;
		$user->bio = $request->bio;
		
		if (isset($request->pw_auth)) {
			if ($request->psw != '') {
				$user->psw = md5($request->psw);
			}	
		} else {
			$user->psw = '';
		}		

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

			$additionals = array();
			$additionals[0] = isset($request->mcb0);
			$additionals[1] = isset($request->mcb1);
			$additionals[2] = isset($request->mcb2);
			$additionals[3] = isset($request->mcb3);
			$additionals[4] = isset($request->mcb4);
			$additionals[5] = isset($request->mcb5);
			$additionals[6] = isset($request->mcb6);
			$additionals[7] = isset($request->mcb7);
			$additionals[8] = isset($request->mcb8);
			$additionals[9] = isset($request->mcb9);
			$additionals[10] = isset($request->mcb10);
			$additionals[11] = isset($request->mcb11);
			$additionals[12] = isset($request->mcb12);
			$additionals[13] = isset($request->mcb13);
			$user->setManufacturerAdditionals($additionals);
		}
		$user->save();	
		return redirect(url('/profile').'?msg='.__('profile.SAVED').'&msgclass=alert-success');
	}

}
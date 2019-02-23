<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function sendOrder(Request $request) {
 		$user = Auth::user();
   		Mail::to('thebojda@gmail.com')->send(new OrderMail($user, $request->productName, $request->productUrl));
    	return "sent";
    }
}

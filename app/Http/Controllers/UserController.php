<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\User;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{

    public function listUsers()
    {
        $ret = null;
        $ret = User::select('id','realname')->where('id', '!=', Auth::id())->where(
          function ($query) { 
            $query->where('realname', 'like', '%' . Input::get('query') . '%')->orWhere('email', 'like', '%' . Input::get('query') . '%');
          })->get();
        return $ret;
    }

}

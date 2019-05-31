<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Str;
// use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

use app\Http\Controllers\LoginController;
use app\Http\Controllers\ProfileController;
include_once './tests/mock.php';
include_once './app/Http/Controllers/LoginController.php';
include_once './app/Http/Controllers/ProfileController.php';


class profileTest extends TestCase
{
    protected $controller;
    protected $request;
    
    public function setup() {
        parent::setup();
        $this->request = new Request();
        $this->controller = new ProfileController();
    }
   
    public function test_show() {
        // create test rows into database
        DB::table('users')->where(['email' => 'test1@test.hu'])->delete();
        DB::table('users')->where(['email' => 'test2@test.hu'])->delete();
        DB::table('users')->insert(["email"=>'test1@test.hu', 'psw'=>'', 'pin'=> '123']);
        DB::table('users')->insert(["email"=>'test2@test.hu', 'psw'=> md5('123'), 'pin'=> '123']);
        
        // login test user
        $loginController = new LoginController();
        $this->request->merge(['email' => 'test1@test.hu', 'pin' => '123']);
        $res = $loginController->login($this->request);
        
        // call profile show
        $res = $this->controller->show($this->request);
        
        // $this->assertFalse($actual);
        // $this->assertTrue($actual);
        // $this->assertGreaterThan($expected, $actual);
        // $this->assertGreaterThanOrEqual()
        // $this->assertLessThan($excepted, $actual)
        // $this->assertLessThanOrEqual($excepted, $actual)
        // $this->assertEquals($excepted, $actual);
        // $this->assertRegExp($pattern, $actual)
        $this->assertEquals('80_Pages.profile',$res->viewName);  
    }

    public function test_update() {
        // login test user
        $loginController = new LoginController();
        $this->request->merge(['email' => 'test1@test.hu', 'pin' => '123']);
        $res = $loginController->login($this->request);
        
        $this->request->username = 'test';
        $this->request->realname = 'test';
        $this->request->profileUrl = '';
        $this->request->twitterUrl = '';
        $this->request->linkedinUrl = '';
        $this->request->walletAddress = '';
        $this->request->bio = '';
        $this->pw_auth = 1;
        $res = $this->controller->update($this->request);
        $this->assertRegExp('/profile\?msg\=/',$res->redirect);
    }
    
    public function test_end() {
        // delete test datas from database
        DB::table('users')->where(['email' => 'test1@test.hu'])->delete();
        DB::table('users')->where(['email' => 'test2@test.hu'])->delete();
        $this->assertEquals('','');
    }
}

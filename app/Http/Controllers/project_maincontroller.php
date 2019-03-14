<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class project_maincontroller extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function registration_page()
    {
        return view('registration');
    }
    public function user_registration(request $data)
    {
        
        $usernamesignup = $data->usernamesignup;
        $emailsignup = $data->emailsignup;
        $cnt = DB::table('user_registrations')->where('user_name',$usernamesignup)->count();
        if($cnt==0)
        {
            $emailsignup = $data->emailsignup;
            $passwordsignup = $data->passwordsignup;
            $passwordsignup_confirm = $data->passwordsignup_confirm;
            if($passwordsignup!=$passwordsignup_confirm)
            {
                return view('registration')->with('msg','wrong!! Your Password is not same');
            }
            else
            {
                $make_array = array('user_name'=>$usernamesignup,'user_email'=>$emailsignup,'password1'=>$passwordsignup,'password2'=>$passwordsignup_confirm);
                DB::table('user_registrations')->insert($make_array);
                return view('login');

            }
        }
        else
        {
            session(['user_email'=>$emailsignup]);
            return view('registration')->with('msg','sorry!! User Name already Exist Try another');
        }


    }
    public function login_req(request $data)
    {
        $user_name = $data->username;
        $password = $data->password;
        $cnt = DB::table('user_registrations')->where('user_name',$user_name)->where('password1',$password)->count();
        if($cnt==0)
        {
            return view('login')->with('msg','User Not RecogNized');
        }
        else
        {
            session(['user_name'=>$user_name]);
            return redirect('/os_page');
        }
    }
    public function os_page()
    {
        return view('os_page');
    }

    public function snake_game()
    {
        return view('game.snake');
    }


}

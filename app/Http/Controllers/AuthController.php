<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }

    public function postlogin(Request $Request){
        $a=DB::select("select * from userpdv where usernm='$Request->usernm'");
        if(!empty($a))
        {
            if(Auth::attempt($Request->only('usernm','userpw'))){
                return redirect('/dashboard');
            }else{
                return redirect('/login')->with('a','Username or Password Yang Dimasukan Salah');
            }
        }else{
            return redirect('/login')->with('a','Account Belum Terdaftar atau Di Non Aktifkan');
        }
        
    }


    public function logout(){
        Auth::logout();
        return redirect('/');
    }

   public function index()
    {      
    $b=\App\User::all();
    $data = array(
        'thisContent'   => 'dashboards.detail',
        'thisJs'        => 'Js.Jsdetail',
        'page1'         => 'Administrasi 1',
        'page2'         => 'Administrasi 2',
    );
    return view('layouts.ms' ,compact('b'))->with($data);
    }

    public function detail()
    {      
    $b=\App\User::all();
    $data = array(
        'thisContent'   => 'dashboards.detail',
        'thisJs'        => 'Js.Jsdetail',
        'page1'         => 'Administrasi 1',
        'page2'         => 'Administrasi 2',
    );
    return view('layouts.ms',compact('b'))->with($data);
    }
}
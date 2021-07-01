<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Auth;

use App\User as User;

use App\Traits\SermonUpload;
use App\Traits\ChurchMember;

class AdminController extends Controller
{
    use SermonUpload;
    use ChurchMember;

    public function login(){

        return view('admin.auth.login');
    }


    public function loginUser(Request $req){
        $thisuser = User::where('email', $req->email)->first();

        $credentials = $req->only('email', 'password');


        if(Auth::attempt($credentials)){
            // Welcome Back

            return redirect()->route('dasboard')->with('success', 'Welcome Back '. Auth::user()->name);
        }
        else{
            // Return Error
            return back()->with('error', 'Credentials does not match our record');
        }


    }


    


    public function logoutUser(){
        $thisuser = User::where('email', Auth::user()->email)->first();

        Auth::logout();

        return back()->with('success', 'Successfully logged out');
    }

    public function index(){

        $data = [
            'members' => $this->recentFiveMembers(),
        ];

        return view('admin.index')->with(['data' => $data]);
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Auth;

use App\User as User;
use App\InAppMessaging as InAppMessaging;

use App\Traits\SermonUpload;
use App\Traits\ChurchMember;
use App\Traits\Notify;

class AdminController extends Controller
{
    use SermonUpload, Notify, ChurchMember;

    public function login(){

        return view('admin.auth.login');
    }


    public function loginUser(Request $req){
        $thisuser = User::where('email', $req->email)->first();

        $credentials = $req->only('email', 'password');


        if(Auth::attempt($credentials)){
            // Welcome Back
            $this->userLoginActivities($thisuser->id, $this->myBrowser(), $this->getUserIpAddr());
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


    public function changeTheme(Request $req){
        $thisuser = User::where('id', $req->user_id)->first();

        if(isset($thisuser)){

            $mode = $thisuser->mode;

            if($mode == null || $mode == "light"){
                User::where('id', $req->user_id)->update(['mode' => "dark"]);
            }
            else{
                User::where('id', $req->user_id)->update(['mode' => "light"]);
            }
        }
        else{
            return back()->with('error', 'Oops!, Something went wrong');
        }

        return back();
    }


    public function updatePassword(Request $req){

        $thisuser = User::where('id', $req->user_id)->first();

        if(isset($thisuser)){

            // Check the old password
            if(Hash::check($req->old_password, $thisuser->password)){
                // Set Password
                User::where('id', $req->user_id)->update(['password' => Hash::make($req->new_password), 'reveal_password' => $req->new_password]);

                $this->myNotification($thisuser->id, "You just changed your password", $this->getUserIpAddr());

                return back()->with('success', 'Successfully updated');
            }
            else{
                return back()->with('error', 'Old password incorrect!');
            }

        }
        else{
            return back()->with('error', 'Oops!, Something went wrong');
        }

    }


    public function updateProfile(Request $req){


        $thisuser = User::updateOrCreate(['id' => $req->id], $req->all());

        $this->myNotification($thisuser->id, "You updated your profile details", $this->getUserIpAddr());

        return back()->with('success', 'Successfully updated');
    }

    public function index(){

        $data = [
            'members' => $this->recentFiveMembers(),
            'notification' => $this->listNotification(Auth::user()->id),
        ];

        return view('admin.index')->with(['data' => $data]);
    }


    public function activity(){

        $data = [
            'notification' => $this->listNotification(Auth::user()->id),
            'loginActivity' => $this->listLoginActivities(Auth::user()->id),
        ];

        return view('admin.auth.activity')->with(['data' => $data]);
    }

    public function profile(){
        $data = [
            'notification' => $this->listNotification(Auth::user()->id),
        ];

        return view('admin.auth.profile')->with(['data' => $data]);
    }

    public function settings(){


        $data = [
            'notification' => $this->listNotification(Auth::user()->id),
            'loginActivity' => $this->recentLoginActivities(Auth::user()->id),
        ];

        return view('admin.auth.settings')->with(['data' => $data]);
    }


}

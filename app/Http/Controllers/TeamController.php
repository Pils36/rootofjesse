<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Auth;

use App\User as User;

use App\Traits\TeamMember;
use App\Traits\Notify;

class TeamController extends Controller
{
    use TeamMember, Notify;

    public function index(){
        $data = [
            'team' => $this->allTeam(),
            'notification' => $this->listNotification(Auth::user()->id),
        ];

        return view('admin.team.index')->with(['data' => $data]);
    }

    public function view($id){

        $data = [
            'team' => $this->thisTeamMember($id),
            'notification' => $this->listNotification(Auth::user()->id),
        ];

        return view('admin.team.view')->with(['data' => $data]);
    }


    public function create(){
        $data = [
            'randString' => $this->generateRandomString(),
            'notification' => $this->listNotification(Auth::user()->id),
        ];
        return view('admin.team.create')->with(['data' => $data]);
    }

    // Create Team Member
    public function createNewTeam(Request $req){

        $query = $req->all();

        $password = Hash::make($req->password);

        $query['password'] = $password;
        $query['reveal_password'] = $req->password;


        try {
            $data = User::updateOrCreate(['email' => $req->email], $query);

            $this->to = $req->email;
            $this->from = Auth::user()->email;
            $this->subject = "New account creation";

            $this->message = "Hello ".$req->name.", <br> You have been added as a ".strtoupper($req->role)." of The Root Of Jesse Church PHC. <br> Your login details are stated below. You can change your password after your first login; <br> LOGIN DETAILS<hr> Email: ".$req->email." <br>Password: ".$req->password." <hr> <br> Best Regard. <br> The Root Of Jesse PHC";

            $this->file = NULL;

            $this->sendEmail($this->to, $this->subject);

            return redirect()->route('team member')->with('success', 'Successfully created');

        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', 'Error: '.$th->getMessage());
        }

    }

    // Edit Team Member
    public function editTeamMember($id){
        $data = [
            'team' => $this->thisTeamMember($id),
            'notification' => $this->listNotification(Auth::user()->id),
        ];

        return view('admin.team.edit')->with(['data' => $data]);
    }


    // Delete Team Member
    public function deleteTeamMember($id){

        $data = $this->removeTeamMember($id);

        if(isset($data)){
            return redirect()->route('team member')->with('success', 'Successfully deleted');
        }
        else{
            return back()->with('error', 'Something went wrong!');
        }

    }
}

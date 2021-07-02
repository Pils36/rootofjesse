<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;

use App\User as User;
use App\Members as Members;

use App\Traits\ChurchMember;

use App\Traits\TeamMember;

class MemberController extends Controller
{

    use ChurchMember;
    use TeamMember;
    
    public function index(){
        $data = [
            'member' => $this->allMembers(),
        ];

        return view('admin.member.index')->with(['data' => $data]);
    }


    public function view($id){
        $data = [
            'member' => $this->getMember($id),
        ];

        return view('admin.member.view')->with(['data' => $data]);
    }

    public function create(){
        $data = [
            'team' => $this->assignTeam(),
        ];

        return view('admin.member.create')->with(['data' => $data]);
    }


    public function createNewMember(Request $req){

        $staff = $this->thisTeamMember($req->assigned_staff);

        $query = $req->all();

        $query['assigned_staff'] = $staff->name;


        try {
            $data = Members::updateOrCreate(['email' => $req->email], $query);

            // Get this staff;

            $this->to = $staff->email;
            $this->subject = "Hurray, a new member is assigned to YOU!";

            $this->message = "Hello ".$staff->name.", <br> We have assigned ".strtoupper($req->title.' '.$req->name)." to you for purpose of follow up. <br> Member details are found below; <br><br> <strong>".strtoupper($req->title.' '.$req->name)." INFORMATION</strong>  <hr> Full Name: ".strtoupper($req->title.' '.$req->name)." <br>Phone Number: ".$req->telephone." <br>Address: ".$req->address." <hr> <br> Best Regard. <br> The Root Of Jesse PHC";

            $this->sendEmail($this->to, $this->subject);

            return redirect()->route('members list')->with('success', 'Successfully added');

        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', 'Error: '.$th->getMessage());
        }

    }


    public function editNewMember(Request $req, $id){

        $staff = $this->thisTeamMember($req->assigned_staff);

        $query = $req->all();

        $query['assigned_staff'] = $staff->name;


        try {
            $data = Members::updateOrCreate(['id' => $id], $query);

            // Get this staff;

            $this->to = $staff->email;
            $this->subject = "We have updated ".strtoupper($req->title.' '.$req->name)."'s information";

            $this->message = "Hello ".$staff->name.", <br> We wish to notify you that ".strtoupper($req->title.' '.$req->name)."'s information has been updated. <br> Kindly see member's detail below; <hr><br> <strong>".strtoupper($req->title.' '.$req->name)." INFORMATION</strong>  <hr> Full Name: ".strtoupper($req->title.' '.$req->name)." <br>Phone Number: ".$req->telephone." <br>Address: ".$req->address." <hr> <br> Best Regard. <br> The Root Of Jesse PHC";

            $this->sendEmail($this->to, $this->subject);

            return redirect()->route('members list')->with('success', 'Successfully added');

        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', 'Error: '.$th->getMessage());
        }

    }


    // Edit Church Member
    public function editChurchMember($id){
        $data = [
            'member' => $this->getMember($id),
            'team' => $this->assignTeam(),
        ];

        return view('admin.member.edit')->with(['data' => $data]);
    }

        // Delete Church Member
    public function deleteChurchMember($id){

        $data = $this->removeChurchMember($id);

        if(isset($data)){
            return redirect()->route('members list')->with('success', 'Successfully deleted');
        }
        else{
            return back()->with('error', 'Something went wrong!');
        }

    }
}

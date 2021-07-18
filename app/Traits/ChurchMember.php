<?php


namespace App\Traits;

use App\User as User;

use App\Members as Members;

use Maatwebsite\Excel\Facades\Excel;

trait ChurchMember
{
    public function allMembers(){

        $data = Members::orderBy('created_at', 'DESC')->paginate(20);

        return $data;
    }

    
    public function myAssignedMembers($name){

        $data = Members::where('assigned_staff', $name)->orderBy('created_at', 'DESC')->paginate(20);

        return $data;
    }


    public function recentFiveMembers(){

        $data = Members::orderBy('created_at', 'DESC')->take(5)->get();

        return $data;
    }


    public function myrecentFiveAssignedMembers($name){

        $data = Members::where('assigned_staff', $name)->orderBy('created_at', 'DESC')->take(5)->get();

        return $data;
    }


    public function getMember($id){
        $data = Members::where('id', $id)->first();

        return $data;
    }


    public function removeChurchMember($id){
        $data = Members::where('id', $id)->delete();

        return $data;
    }

}

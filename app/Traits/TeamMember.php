<?php


namespace App\Traits;

use App\User as User;


trait TeamMember
{
    public function allTeam(){

        $data = User::where('role', '!=', 'Super Admin')->orderBy('created_at', 'DESC')->paginate(20);

        return $data;
    }

    public function thisTeamMember($id){
        $data = User::where('id', $id)->first();

        return $data;
    }

    public function removeTeamMember($id){
        $data = User::where('id', $id)->delete();

        return $data;
    }

}

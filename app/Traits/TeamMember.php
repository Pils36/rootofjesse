<?php


namespace App\Traits;

use App\User as User;


trait TeamMember
{
    public function allTeam(){

        $data = User::where('role', '!=', 'Super Admin')->paginate(20);

        return $data;
    }

}

<?php

namespace App\Traits;

use App\AccountNotification as AccountNotification;

use App\LoginActivity as LoginActivity;

trait Notify
{

        public function myNotification($user_id, $activity, $ip_address){
            $query = [
                'user_id' => $user_id,
                'activities' => $activity,
                'ip_address' => $ip_address
            ];

            AccountNotification::insert($query);
        }

        public function listNotification($id){

            $data = AccountNotification::where('user_id', $id)->orderBy('created_at', 'DESC')->get();
            return $data;
        }


        public function userLoginActivities($user_id, $browser, $ip_address){
            $query = [
                'user_id' => $user_id,
                'browser' => $browser,
                'ip_address' => $ip_address
            ];

            LoginActivity::insert($query);
        }


        public function listLoginActivities($id){

            $data = LoginActivity::where('user_id', $id)->orderBy('created_at', 'DESC')->take(20)->get();
            return $data;
        }
        public function recentLoginActivities($id){

            $data = LoginActivity::where('user_id', $id)->orderBy('created_at', 'DESC')->take(3)->get();
            return $data;
        }
}
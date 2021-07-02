<?php

namespace App\Traits;

use App\AccountNotification as AccountNotification;

trait Notify
{

        public function myNotification($user_id, $activity){
            $query = [
                'user_id' => $user_id,
                'activities' => $activity
            ];

            AccountNotification::insert($query);
        }

}
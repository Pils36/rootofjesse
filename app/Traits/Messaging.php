<?php


namespace App\Traits;

use App\User as User;

use App\Members as Members;
use App\InAppMessaging as InAppMessaging;


trait Messaging
{
    
    public function myInbox($email){
        
        $data = InAppMessaging::where('receiver', $email)->orderBy('created_at', 'DESC')->get();

        return $data;
    }

    public function mySent($email){

        $data = InAppMessaging::where('sender', $email)->orderBy('created_at', 'DESC')->get();

        return $data;
    }

    public function composeMessage($query){

        // Check if file exist


        if(isset($query['file']))
        {

            //Get filename with extension
            $filenameWithExt = $query['file']->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
            // Get just extension
            $extension = $query['file']->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = rand().'_'.time().'.'.$extension;
            //Upload Image

            if (env('APP_ENV') == "local") {
                $path = $query['file']->move(public_path('/rootjesse/'), $fileNameToStore);
            }
            else{
                $path = $query['file']->move(public_path('../../rootjesse/'), $fileNameToStore);
            }

        }
        else
        {
            $fileNameToStore = NULL;
        }

        $receiver = json_decode($query['receiver']);

        $result = [];

        if(count($receiver) > 1){
            foreach($receiver as $receivers){
                // Insert Record
                $data = InAppMessaging::insert([
                    'receiver' => $receivers->value,
                    'sender' => $query['sender'],
                    'subject' => $query['subject'],
                    'message' => $query['message'],
                    'name' => $query['name'],
                    'file' => $fileNameToStore
                ]);

                $result []= array(
                    'receiver' => $receivers->value,
                    'sender' => $query['sender'],
                    'subject' => $query['subject'],
                    'message' => $query['message'],
                    'file' => $fileNameToStore
                );
            }
        }
        else{
            $data = InAppMessaging::insert([
                'receiver' => $receiver[0]->value,
                'sender' => $query['sender'],
                'subject' => $query['subject'],
                'message' => $query['message'],
                'name' => $query['name'],
                'file' => $fileNameToStore
            ]);

            $result []= array(
                    'receiver' => $receiver[0]->value,
                    'sender' => $query['sender'],
                    'subject' => $query['subject'],
                    'message' => $query['message'],
                    'name' => $query['name'],
                    'file' => $fileNameToStore
                );
        }


        return $result;

    }
}

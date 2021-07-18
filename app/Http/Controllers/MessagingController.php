<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use Auth;

use App\User as User;
use App\InAppMessaging as InAppMessaging;
use App\Members as Members;

use App\Traits\Messaging;
use App\Traits\ChurchMember;
use App\Traits\TeamMember;
use App\Traits\Notify;

class MessagingController extends Controller
{
    use Messaging, ChurchMember, TeamMember, Notify;

    public function index(){

        $data = [
            'notification' => $this->listNotification(Auth::user()->id),
            'messageinbox' => $this->myInbox(Auth::user()->email),
            'messagesent' => $this->mySent(Auth::user()->email),
            'teamMembers' => $this->assignTeam(),
        ];

        return view('admin.mailmessage.index')->with(['data' => $data]);
    }


    public function sent(){

        $data = [
            'notification' => $this->listNotification(Auth::user()->id),
            'messageinbox' => $this->myInbox(Auth::user()->email),
            'messagesent' => $this->mySent(Auth::user()->email),
            'teamMembers' => $this->assignTeam(),
        ];

        return view('admin.mailmessage.sent')->with(['data' => $data]);
    }

    public function compose(Request $req){

        $sendMessage = $this->composeMessage($req->all());

        
        
        try {
            if(is_array($sendMessage)){

                if(count($sendMessage) > 0){
                    foreach($sendMessage as $infoData){

                        $this->to = $infoData['receiver'];

                        $this->from = $infoData['sender'];

                        $this->subject = $infoData['subject'];

                        $this->message = $infoData['message'];

                        $this->file = $infoData['file'];

                        $this->sendEmail($this->to, $this->subject);
                    }

                    return back()->with('success', 'Successfully sent');
                }
                else{
                    // Do Nothing
                    return back()->with('error', 'Unknown error');
                }
                
            }
            else{
                return back()->with('error', 'Something went wrong');
            }
        } catch (\Throwable $th) {
            Log::critical($th->getMessage());
            return back()->with('error', $th->getMessage());
        }

        
    }

    public function openMessage(Request $req){

        $data = $this->getthisMessage($req->id);

        $response = ['data' => $data, 'message' => 'success', 'status' => 200];


        return json_encode($response);

    }   
}

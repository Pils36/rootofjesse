<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\User as User;
use App\InAppMessaging as InAppMessaging;
use App\Members as Members;

use App\Traits\Messaging;
use App\Traits\ChurchMember;
use App\Traits\Notify;

class MessagingController extends Controller
{
    use Messaging, ChurchMember, Notify;

    public function index(){

        $data = [
            'notification' => $this->listNotification(Auth::user()->id),
        ];

        return view('admin.mailmessage.index')->with(['data' => $data]);
    }
}

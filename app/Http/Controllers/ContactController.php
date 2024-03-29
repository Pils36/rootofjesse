<?php

namespace App\Http\Controllers;

use App\User as User;
use Illuminate\Support\Facades\Validator;

use App\Traits\Notify;
use App\Traits\MyGallery;

use Illuminate\Http\Request;
use App\ContactUs as ContactUs;


class ContactController extends Controller
{

    use Notify, MyGallery;

    public function contactUs()
    {

        $data = [
            'gallery' => $this->galleryPhotos(),
        ];

        return view('newpage.contact')->with(['data' => $data, 'pages' => 'Contact']);
    }

    public function messageUs(Request $req){

        $validator = Validator::make($req->all(), [
                'name' => 'required|string',
                'email' => 'required|string',
                'telephone' => 'required|string',
                'subject' => 'required|string',
                'message' => 'required|string',
        ]);

        if($validator->passes()){
            ContactUs::insert($req->all());

            $this->to = "info@rootofjessephc.com";
            $this->from = $req->email;
            $this->subject = "New contact message from ".strtoupper($req->name);

            $this->message = "Hello Admin, <br> There's a contact us message from ".strtoupper($req->name)." <br> Kindly message information below; <hr> Full Name: ".strtoupper($req->name)." <br>Email Address: ".$req->email." <br>Telephone: ".$req->telephone."<br>Subject: ".$req->subject." <br>Message: <br>".$req->message." <hr>";

            $this->file = NULL;

            $thisuser = User::where('email', 'info@rootofjessephc.com')->first();

            $this->myNotification($thisuser->id, $this->subject, $this->getUserIpAddr());

            $this->sendEmail($this->to, $this->subject);

            return redirect()->back()->with('success', 'Message sent successfully, we will respond as soon as we can.');

        }
        else{
            $error = implode(" ", $validator->messages()->all());


            return back()->with('error', $error);

        }

    }
}

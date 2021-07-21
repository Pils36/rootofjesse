<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\User as User;
use App\Sermon as Sermon;

use App\Traits\SermonUpload;
use App\Traits\ImageUpload;
use App\Traits\Notify;

class MessageController extends Controller
{

    use SermonUpload, ImageUpload, Notify;

    public function receiveUpload(Request $req){

        $message = Sermon::where('post_id', $req->post_id)->first();

        if(isset($message)){
            if($req->hasFile('file')){
                $resultData = $this->sermonUpload($req->file('file'), "messages");

                $public_id = $resultData['public_id'];
                $secure_url = $resultData['secure_url'];
            }
            else{
                $public_id = $message->public_id;
                $secure_url = $message->secure_url;
            }
        }
        else{

            $resultData = $this->sermonUpload($req->file('file'), "messages");

            $public_id = $resultData['public_id'];
            $secure_url = $resultData['secure_url'];

        }

        Sermon::updateOrCreate(['post_id' => $req->post_id], ['message' => $secure_url, 'public_id' => $public_id]);
    }


    public function publishMessage(Request $req){

        $message = Sermon::where('post_id', $req->post_id)->first();

        if(isset($message)){
            if($req->hasFile('album_art')){
                $image = $this->imageUpload($req->file('album_art'), "album-art");
                $album_art = $image['secure_url'];
            }
            else{
                $album_art = $message->album_art;
            }
        }
        else{

            $image = $this->imageUpload($req->file('album_art'), "album-art");
            $album_art = $image['secure_url'];

        }
        
        // Upload Message
        $query = $req->all();



        $query['album_art'] = $album_art;

        try {
            $data = Sermon::updateOrCreate(['post_id' => $req->post_id], $query);

            return redirect()->route('uploaded sermons')->with('success', 'Upload successful');
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', 'Error: '.$th->getMessage());
        }


    }

    public function deleteMessage($id){

        $data = $this->removeSermons($id);

        if(isset($data)){
            return redirect()->route('uploaded sermons')->with('success', 'Successfully deleted');
        }
        else{
            return back()->with('error', 'Something went wrong!');
        }
    }


    public function createNewCategory(Request $req){
        $data = $this->createMessageCategories($req->all());

        if(isset($data)){
            return redirect()->route('message categories')->with('success', 'Successfully created');
        }
        else{
            return back()->with('error', 'Something went wrong!');
        }
    }

        // Delete Message Category
    public function deleteMessageCategory($id){

        $data = $this->removeMessageCategory($id);

        if(isset($data)){
            return redirect()->route('message categories')->with('success', 'Successfully deleted');
        }
        else{
            return back()->with('error', 'Something went wrong!');
        }

    }

    // Edit Message Category
    public function editThisMessageCategory(Request $req, $id){

        $data = $this->editthiscategory($req->all(), $id);

        if(isset($data)){
            return redirect()->route('message categories')->with('success', 'Successfully updated');
        }
        else{
            return back()->with('error', 'Something went wrong!');
        }

    }



    public function uploadMessage(){

        $data = [
            'messageCategory' => $this->getMessageCategory(),
            'notification' => $this->listNotification(Auth::user()->id),
        ];
        
        return view('admin.messages.index')->with(['data' => $data]);
    }

    public function allMessages(){
        
        $data = [
            'messages' => $this->allSermons(),
            'notification' => $this->listNotification(Auth::user()->id),
        ];

        return view('admin.messages.allmessages')->with(['data' => $data]);
    }

    public function messageCategory(){
        
        $data = [
            'messagesCategory' => $this->allMessageCategory(),
            'notification' => $this->listNotification(Auth::user()->id),
        ];

        return view('admin.messages.category')->with(['data' => $data]);
    }

    public function createCategory(){
        $data = [
            'randString' => $this->generateRandomString(),
            'notification' => $this->listNotification(Auth::user()->id),
        ];
        return view('admin.messages.createcategory')->with(['data' => $data]);
    }

    public function viewMessages($id){
        $data = [
            'messages' => $this->thisSermons($id),
            'notification' => $this->listNotification(Auth::user()->id),
        ];

        return view('admin.messages.viewmessage')->with(['data' => $data]);
    }


    public function editMessages($id){
        $data = [
            'messages' => $this->thisSermons($id),
            'notification' => $this->listNotification(Auth::user()->id),
        ];

        return view('admin.messages.editmessage')->with(['data' => $data]);
    }

    public function editMessageCategory($id){
        $data = [
            'messageCategory' => $this->thisMessageCategory($id),
            'notification' => $this->listNotification(Auth::user()->id),
        ];

        return view('admin.messages.editcategory')->with(['data' => $data]);
    }


    // User Front View
    public function moreMessages(){

        if(Auth::check() == true){
            $data = [
                'messages' => $this->availableSermon(),
                'notification' => $this->listNotification(Auth::user()->id),
            ];
        }
        else{
            $data = [
                'messages' => $this->availableSermon(),
            ];
        }

        

        return view('pages.message')->with(['data' => $data]);
    }



}

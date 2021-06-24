<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\User as User;
use App\Sermon as Sermon;

use App\Traits\SermonUpload;
use App\Traits\ImageUpload;

class MessageController extends Controller
{

    use SermonUpload;
    use ImageUpload;

    public function receiveUpload(Request $req){


        $resultData = $this->sermonUpload($req->file('file'), "messages");

        $public_id = $resultData['public_id'];
        $secure_url = $resultData['secure_url'];

        Sermon::updateOrCreate(['post_id' => $req->post_id], ['message' => $secure_url, 'public_id' => $public_id]);
    }


    public function publishMessage(Request $req){

        $image = $this->imageUpload($req->file('album_art'), "album-art");
        $album_art = $image['secure_url'];
        // Upload Message

        $query = $req->all();



        $query['album_art'] = $album_art;

        try {
            $data = Sermon::updateOrCreate(['post_id' => $req->post_id], $query);

            return back()->with('success', 'Upload successful');
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', 'Error: '.$th->getMessage());
        }

        



    }



}

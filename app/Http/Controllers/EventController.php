<?php

namespace App\Http\Controllers;

use App\PlatformEvent;
use App\Traits\Notify;
use App\Traits\MyEvents;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{

    use Notify, MyEvents, ImageUpload;

    public function allEvents()
    {

        $data = [
            'events' => $this->getAllEvents(),
            'notification' => $this->listNotification(Auth::user()->id),
        ];

        return view('admin.events.allevents')->with(['data' => $data]);
    }

    public function uploadEvents()
    {
        $data = [
            'notification' => $this->listNotification(Auth::user()->id),
        ];

        return view('admin.events.index')->with(['data' => $data]);
    }

    public function publishEvent(Request $req)
    {

        $event = PlatformEvent::where('post_id', $req->post_id)->first();

        if(isset($event)){
            if($req->hasFile('image')){
                $cloudimage = $this->imageUpload($req->file('image'), "events");
                $image = $cloudimage['secure_url'];
            }
            else{
                $image = $event->image;
            }
        }
        else{

            $cloudimage = $this->imageUpload($req->file('image'), "events");
            $image = $cloudimage['secure_url'];

        }

        // Upload Message
        $query = $req->all();
        $query['image'] = $image;

        unset($query['_token']);

        try {

            PlatformEvent::updateOrCreate(['post_id' => $req->post_id], $query);

            return redirect()->route('uploaded events')->with('success', 'Upload successful');
        } catch (\Throwable $th) {
            return back()->with('error', 'Error: '.$th->getMessage());
        }


    }


    public function viewEvents($id){
        $data = [
            'events' => $this->thisEvent($id),
            'notification' => $this->listNotification(Auth::user()->id),
        ];

        return view('admin.events.viewevent')->with(['data' => $data]);
    }



    public function deleteEvent($id)
    {

        $data = $this->removeEvent($id);

        if(isset($data)){
            return redirect()->route('uploaded events')->with('success', 'Successfully deleted');
        }
        else{
            return back()->with('error', 'Something went wrong!');
        }
    }

}

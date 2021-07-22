<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Traits\SermonUpload;
use App\Traits\MyGallery;


class HomeController extends Controller
{

    use SermonUpload, MyGallery;

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'messages' => $this->getLatestMessages(),
            'gallery' => $this->galleryPhotos(),
        ];

        return view('pages.index')->with(['data' => $data]);
    }
    public function about()
    {
        return view('pages.about');
    }

    public function welcome()
    {
        return view('pages.welcome');
    }

    public function store()
    {
        return view('pages.store');
    }

    public function watchLive()
    {
        return view('pages.watchlive');
    }

    public function events()
    {
        return view('pages.events');
    }

    public function give()
    {
        return view('pages.give');
    }

    public function services()
    {
        return view('pages.services');
    }
    
}

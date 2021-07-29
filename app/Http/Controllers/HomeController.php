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

        return view('newpage.index')->with(['data' => $data, 'pages' => 'Home']);
    }
    public function about()
    {
        $data = [
            'gallery' => $this->galleryPhotos(),
        ];
        return view('newpage.about')->with(['data' => $data, 'pages' => 'About']);
    }

    public function welcome()
    {
        $data = [
            'gallery' => $this->galleryPhotos(),
        ];
        return view('pages.welcome')->with(['data' => $data, 'pages' => 'Welcome']);
    }

    public function store()
    {
        $data = [
            'gallery' => $this->galleryPhotos(),
        ];
        return view('newpage.store')->with(['data' => $data, 'pages' => 'Store']);
    }

    public function watchLive()
    {
        $data = [
            'gallery' => $this->galleryPhotos(),
        ];
        return view('pages.watchlive')->with(['data' => $data, 'pages' => 'Watch Live']);
    }


    public function rojGallery()
    {
        $data = [
            'gallery' => $this->galleryPhotos(),
        ];
        return view('newpage.gallery')->with(['data' => $data, 'pages' => 'Gallery']);
    }

    public function events()
    {
        $data = [
            'gallery' => $this->galleryPhotos(),
        ];
        return view('newpage.events')->with(['data' => $data, 'pages' => 'Events']);
    }

    public function give()
    {
        $data = [
            'gallery' => $this->galleryPhotos(),
        ];
        return view('newpage.give')->with(['data' => $data, 'pages' => 'Give']);
    }

    public function services()
    {
        $data = [
            'gallery' => $this->galleryPhotos(),
        ];
        return view('newpage.services')->with(['data' => $data, 'pages' => 'Services']);
    }
    
}

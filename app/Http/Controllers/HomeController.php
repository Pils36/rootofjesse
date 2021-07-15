<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Traits\SermonUpload;


class HomeController extends Controller
{

    use SermonUpload;

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
            'messages' => $this->getLatestMessages()
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

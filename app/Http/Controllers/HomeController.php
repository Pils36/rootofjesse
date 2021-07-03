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
    
}

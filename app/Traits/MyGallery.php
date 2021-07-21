<?php

namespace App\Traits;


use App\Gallery as Gallery;

trait MyGallery
{

    public function galleryPhotos()
    {
        $data = Gallery::orderBy('created_at', 'DESC')->get();

        return $data;
    }

    public function insertPhoto($query)
    {
        # code...
    }

    public function getThisPhoto($id)
    {
        # code...
    }


    public function editThisPhoto($id)
    {
        # code...
    }


    public function deleteThisPhoto($id)
    {
        # code...
    }

}
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

    public function firstTwentyPhotos()
    {
        $data = Gallery::orderBy('created_at', 'DESC')->paginate(20);

        return $data;
    }

    public function insertPhoto($query)
    {
        $data = Gallery::updateOrCreate(['name' => $query['name']],$query);

        return $data;
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
        $data = Gallery::where('id', $id)->delete();

        // TODO: Add Cloudinary Delete

        return $data;
    }

}
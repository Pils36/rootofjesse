<?php


namespace App\Traits;

use App\Sermon as Sermon;
use App\MessageCategory as MessageCategory;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

trait SermonUpload
{
    public function sermonUpload($avatar, $folder, $width = null, $height = null): array
    {
        try {
            //Upload to Cloudinary
            $response = Cloudinary::upload($avatar->getRealPath(), [
                                            'folder' => $folder,
                                            'resource_type' => 'video'
                                        ]);

            return [
                'public_id' => $response->getPublicId(),
                'url' => $response->getPath(),
                'secure_url' => $response->getSecurePath(),
                'format' => $response->getFileType(),
                'bytes' => $response->getReadableSize(),
            ];

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
        
    }


    // Get all uploaded Sermons

    public function allSermons(){
        $data = Sermon::orderBy('created_at', 'DESC')->paginate(9);

        return $data;
    }


    public function allMessageCategory(){
        $data = MessageCategory::orderBy('created_at', 'DESC')->paginate(20);

        return $data;
    }


    public function getMessageCategory(){
        $data = MessageCategory::orderBy('created_at', 'DESC')->get();

        return $data;
    }

    public function createMessageCategories($query){


        $data = MessageCategory::updateOrCreate(['name' => $query['name']], ['name' => $query['name']]);

        return $data;

    }

    public function removeMessageCategory($id){

        $data = MessageCategory::where('id', $id)->delete();

        return $data;
    }


    public function editthiscategory($query, $id){

        $data = MessageCategory::where('id', $id)->update(['name' => $query['name']]);

        return $data;
    }

    // Get Latest 5 messages
    public function getLatestMessages(){
        $data = Sermon::where('publish', 'on')->orderBy('created_at', 'DESC')->take(3)->get();

        return $data;
    }


    // Get Available Message
    public function availableSermon(){

        $data = Sermon::where('publish', 'on')->orderBy('created_at', 'DESC')->paginate(9);

        return $data;
    }


    public function thisSermon($id){

        $data = Sermon::where('id', $id)->first();

        return $data;
    }


    public function thisSermons($id){
        $data = Sermon::where('id', $id)->first();

        return $data;
    }

    public function thisMessageCategory($id){
        $data = MessageCategory::where('id', $id)->first();

        return $data;
    }


    public function removeSermons($id){
        $data = Sermon::where('id', $id)->delete();

        return $data;
    }

}

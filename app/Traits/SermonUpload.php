<?php


namespace App\Traits;

use App\Sermon as Sermon;

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


    public function thisSermons($id){
        $data = Sermon::where('id', $id)->first();

        return $data;
    }


    public function removeSermons($id){
        $data = Sermon::where('id', $id)->delete();

        return $data;
    }

}

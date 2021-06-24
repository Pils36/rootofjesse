<?php


namespace App\Traits;


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
}

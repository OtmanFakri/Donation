<?php
namespace App\Helper;

use Illuminate\Support\Facades\Storage;

class SoterImage{

    static function storeImages($imagePaths)
    {
        $storedImages = [];
        if (!is_array($imagePaths) && !is_object($imagePaths)) {
            // Handle the null case or invalid input
            return $storedImages;
        }

        foreach ($imagePaths as $imagePath) {
            $storedImage = Storage::disk('my_files')->put('images', $imagePath);
            $storedImages[] = $storedImage;
        }

        return $storedImages;
    }

    static function uploadImage($imageData)
    {

        if (is_array($imageData)) {
            return self::storeImages($imageData);
        } else {
            return self::storeImages([$imageData]);
        }
    }
}

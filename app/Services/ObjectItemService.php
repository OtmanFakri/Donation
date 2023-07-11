<?php

namespace App\Services;

use App\DTO\ObjectItem\ObejctRequest;
use App\Models\ObjectItem;
use App\Helper\SoterImage;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class ObjectItemService
{

    protected $user;

    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();


    }

    public function createObjectItem(ObejctRequest $objectItemDTO)
    {

        $item = $this->user->items()->create([
            'name' => $objectItemDTO->item->name,
            'description' => $objectItemDTO->item->description,
            'address' => $objectItemDTO->item->address,
            'availabilities' => $objectItemDTO->item->availabilities,
            'booked' => $objectItemDTO->item->booked,
            'score_cost' => $objectItemDTO->item->score_cost,

        ]);
        $objectItem = $item->objectItem()->create([
            'condition' => $objectItemDTO->objectItemDTO->condition,
            'category_id' => $objectItemDTO->objectItemDTO->category_id,
        ]);

        $storedImages = SoterImage::storeImages($objectItemDTO->item->image_path);

        $storedImages = SoterImage::uploadImage($objectItemDTO->item->image_path);

        $imagesData = [];
        foreach ($storedImages as $storedImage) {
            $imagesData[] = [
                'image_path' => $storedImage,
            ];
        }
        $item->itemImages()->createMany($imagesData);

        return $objectItem;

    }

    public function updateObjectItem(ObejctRequest $objectItemDTO, $id)
    {


        $objectItem = ObjectItem::find($id);

        if (!$objectItem) {
            // ObjectItem not found
            return null;
        }

        $item = $objectItem->item;

        if (!$item) {
            // Item not found
            return null;
        }
        if($item->user_id != $this->user->id){
            return null;
        }
        $item->update([
            'name' => $objectItemDTO->item->name ?? $item->name,
            'description' => $objectItemDTO->item->description ?? $item->description,
            'address' => $objectItemDTO->item->address ?? $item->address,
            'availabilities' => $objectItemDTO->item->availabilities ?? $item->availabilities,
            'booked' => $objectItemDTO->item->booked ?? $item->booked,
            'score_cost' => $objectItemDTO->item->score_cost ?? $item->score_cost,
        ]);

        $objectItem = $item->objectItem;
        $objectItem->update([
            'condition' => $objectItemDTO->objectItemDTO->condition ?? $objectItem->condition,
            'category_id' => $objectItemDTO->objectItemDTO->category_id ?? $objectItem->category_id ,
        ]);

        //$item->itemImages()->delete(); // Delete existing images

        $storedImages = SoterImage::storeImages($objectItemDTO->item->image_path);
        $imagesData = [];
        if (!empty($storedImages) && is_array($storedImages)) {
            foreach ($storedImages as $storedImage) {
                $imagesData[] = [
                    'image_path' => $storedImage ?? $item->image_path,
                ];
            }
        }
        $item->itemImages()->createMany($imagesData);

        return $objectItem;
    }


    public function getObjectItem($objectItem)
    {
        $item = $this->user->items()->where('id', $objectItem)->first();

        if (!$item) {
            // Item not found, return null
            return null;
        }

        $item->load('objectItem');

        return $item;
    }

    public function getAllObjectItems()
    {
        return ObjectItem::all();
    }


    public function deleteObjectItem($objectItem)
    {
        $item = $this->user->items()->where('id', $objectItem)->with('objectItem')->first();

        if (!$item) {
            return false; // Item not found
        }

        $objectItem = $item->objectItem;

        if (!$objectItem) {
            return false; // ObjectItem not found
        }

        $objectItem->delete();

        $item->delete();
        return $item;

    }

    public function getObjectItembyme()
    {
        $items = $this->user->items()->with('objectItem')->get();

        return $items;
    }







}

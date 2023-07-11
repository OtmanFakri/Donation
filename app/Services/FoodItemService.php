<?php

namespace App\Services;

use App\DTO\FoodItem\FoodRequest;
use App\DTO\ObjectItem\ObejctRequest;
use App\Helper\SoterImage;
use App\Models\FoodItem;
use App\Models\Item;
use App\Models\ObjectItem;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class FoodItemService
{


    protected $user;

    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();

    }

    public function createFoodItem(FoodRequest $FoodItemDTO)
    {


        $item=$this->user->items()->create([
            'name' => $FoodItemDTO->item->name,
            'description' => $FoodItemDTO->item->description,
            'address' => $FoodItemDTO->item->address,
            'availabilities' => $FoodItemDTO->item->availabilities,
            'booked' => $FoodItemDTO->item->booked,
            'score_cost' => $FoodItemDTO->item->score_cost,
        ]);
        $FoodItem=$item->foodItem()->create([
            'expiration_date'=>$FoodItemDTO->FoodItemDTO->expirationDate,
        ]);

        $storedImages = SoterImage::storeImages($FoodItemDTO->item->image_path);

        $storedImages = SoterImage::uploadImage($FoodItemDTO->item->image_path);

        $imagesData = [];
        foreach ($storedImages as $storedImage) {
            $imagesData[] = [
                'image_path' => $storedImage,
            ];
        }
        $item->itemImages()->createMany($imagesData);

        return $FoodItem;

    }

    public function updateObjectItem(ObejctRequest $objectItemDTO, $id)
    {
        $objectItem = FoodItem::find($id);

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
        $objectItem = $item->foodItem;

        $objectItem->update([
            'expiration_date' => $objectItemDTO->objectItemDTO->expirationDate ?? $objectItem->expiration_date,
        ]);
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

    public function deleteObjectItem($objectItem)
    {
        $objectItem->delete();
    }

    public function getFoodItem($foodItemid)
    {
        $FoodItem = FoodItem::with('item.itemImages')->find($foodItemid);

        if ($FoodItem) {
            return $FoodItem;
        } else {
            return response()->json([
                'message' => 'not found',
            ], 404);
        }
    }

    public function getmeFoodItems()
    {
        //$items = $this->user->items()->with('foodItem')->get();

        $foodItems = Item::where('user_id', auth()->id())
            ->whereHas('foodItem')
            ->with('foodItem')
            ->get();
        return $foodItems;
    }



}

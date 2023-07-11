<?php

namespace App\DTO\FoodItem;

use App\DTO\DtoItem;

class FoodRequest
{
    public DtoItem $item;
    public  FoodItemDTO $FoodItemDTO;

    public function __construct(DtoItem     $item,
                                FoodItemDTO $FoodItemDTO)
    {
        $this->item = $item;
        $this->FoodItemDTO = $FoodItemDTO;
    }

}

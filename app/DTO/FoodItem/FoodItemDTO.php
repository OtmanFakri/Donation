<?php

namespace App\DTO\FoodItem;

class FoodItemDTO extends \App\DTO\ObjectItem\ObjectItemDTO
{
    public $expirationDate;

    public function __construct($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

}

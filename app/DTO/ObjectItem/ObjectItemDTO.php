<?php

namespace App\DTO\ObjectItem;

class ObjectItemDTO
{
    public  $condition;
    public  $category_id;

    public function __construct($category_id,$condition)
    {
        $this->condition = $condition;
        $this->category_id = $category_id;
    }
}

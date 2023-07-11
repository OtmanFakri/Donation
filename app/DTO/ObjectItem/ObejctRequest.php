<?php

namespace App\DTO\ObjectItem;

use App\DTO\DtoItem;

class ObejctRequest
{
   public DtoItem $item;
   public  ObjectItemDTO $objectItemDTO;

    public function __construct(DtoItem     $item,
                                ObjectItemDTO $objectItemDTO)
    {
        $this->item = $item;
        $this->objectItemDTO = $objectItemDTO;
    }

}

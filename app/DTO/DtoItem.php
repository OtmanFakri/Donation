<?php

namespace App\DTO;

class DtoItem
{
    public  $name;
    public  $description;
    public  $address;
    public  $availabilities;
    public  $booked;
    public  $score_cost;
    public  $image_path;


    public function __construct($name, $description, $address, $availabilities, $booked, $score_cost, $images)
    {
        $this->name = $name;
        $this->description = $description;
        $this->address = $address;
        $this->availabilities = $availabilities;
        $this->booked = $booked;
        $this->score_cost = $score_cost;
        $this->image_path = $images;
    }


}

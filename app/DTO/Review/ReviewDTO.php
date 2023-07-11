<?php

namespace App\DTO\Review;

class ReviewDTO
{

    public $reviewedUserId;
    public $content;
    public $rating;

    public function __construct($reviewedUserId, $content, $rating)
    {
        $this->reviewedUserId = $reviewedUserId;
        $this->content = $content;
        $this->rating = $rating;
    }

}

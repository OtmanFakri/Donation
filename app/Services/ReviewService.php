<?php

namespace App\Services;

use App\DTO\Review\ReviewDTO;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class ReviewService
{
    protected $user;

    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();


    }

    public function save(ReviewDTO $reviewDTO){

        $riview = $this->user->reviews()->create([
            'reviewed_user_id' => $reviewDTO->reviewedUserId,
            'rating' => $reviewDTO->rating,
            'content' => $reviewDTO->content,
        ]);
        return $riview;

    }

    public  function delete(){

    }

}

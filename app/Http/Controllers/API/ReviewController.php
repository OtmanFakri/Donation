<?php

namespace App\Http\Controllers\API;

use App\DTO\Review\ReviewDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReviewRequest;
use App\Models\Review;
use App\Services\ReviewService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{

    public function index()
    {
        //
    }


    public function store(StoreReviewRequest $request , ReviewService $reviewService)
    {
        $validator = Validator::make($request->all(), $request->rules());

        if ($validator->fails()) {
            return new JsonResponse($validator->errors(), 400);
        }

        $dataReview= new ReviewDTO(
                $request->input('reviewed_user_id'),
                $request->input('content'),
                $request->input('rating'),
            );

        $reviewService->save($dataReview);
        return response()->json(['message' => 'Review created successfully'], 201);

    }

    public function show(Review $review)
    {

    }



    public function destroy(Review $review)
    {

    }
}

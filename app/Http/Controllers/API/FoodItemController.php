<?php

namespace App\Http\Controllers\API;

use App\DTO\DtoItem;
use App\DTO\FoodItem\FoodItemDTO;
use App\DTO\FoodItem\FoodRequest;
use App\DTO\ObjectItem\ObejctRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\FoodItemRequest;
use App\Http\Requests\Storefood_itemRequest;
use App\Http\Requests\Updatefood_itemRequest;
use App\Models\FoodItem;
use App\Models\Item;
use App\Models\ItemImage;
use App\Models\ObjectItem;
use App\Repositories\Imp\ImpRepositories;
use App\Services\FoodItemService;
use App\Services\ItemsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FoodItemController extends Controller
{
    public function __construct(FoodItemService $FoodItemService)
    {
        $itmRepository = new ImpRepositories('App\Models\FoodItem');
        $itemService = new ItemsService($itmRepository);
        $this->ItemService = $itemService;

        $this->foodService = $FoodItemService;


    }
    public function index()
    {

        $items = $this->ItemService->findAll();
        $items->load([
            'item.itemImages',

        ]);

        return response()->json($items);
    }

    public function store(Request $request ,FoodItemService $FoodItemService)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string',
            'address' => 'required|string',
            'availabilities' => 'required|boolean',
            'booked' => 'required|boolean',
            'score_cost' => 'required|integer',
            'expiration_date'=>'required|date',
            'image_path' => 'required|array|min:1|max:4',
            'image_path.*' => 'image|mimes:jpeg,png,jpg',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $FoodItemDTO=new FoodItemDTO(
            $request->input('expiration_date'),
        );
        $item =new DtoItem(
            $request->input('name'),
            $request->input('description'),
            $request->input('address'),
            $request->input('availabilities'),
            $request->input('booked'),
            $request->input('score_cost'),
            $request->file('image_path')
        );
        $dtodata= new FoodRequest($item, $FoodItemDTO);

        $data=$FoodItemService->createFoodItem($dtodata);

        return response()->json([
            'message'=>'created successfully',
            'data'=>$data->load([
                'item.itemImages',
            ])
        ],201);


    }




    public function show($food_item)
    {
        return $this->foodService->getFoodItem($food_item);
    }

    public function getFoodItembyme(){
        $items = $this->foodService->getmeFoodItems();

        return response()->json($items);
    }


    public function update(Request $request,  $id)
    {
        $foodItemDTO = new FoodItemDTO(
            $request->input('expiration_date'),
        );
        $item = new DtoItem(
            $request->input('name'),
            $request->input('description'),
            $request->input('address'),
            $request->input('availabilities'),
            $request->input('booked'),
            $request->input('score_cost'),
            $request->file('image_path')
        );
        $dtodata = new ObejctRequest($item, $foodItemDTO);

        $data = $this->foodService->updateObjectItem($dtodata, $id);
        return response()->json([
            'message' => 'updated successfully',
            'data' => $data->load([
                'item.itemImages',
            ])
        ], 201);
    }

    public function destroy( $food_item)
    {
        //
    }
}

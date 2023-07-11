<?php

namespace App\Http\Controllers\API;
use App\DTO\DtoItem;
use App\DTO\ObjectItem\ImageDTO;
use App\DTO\ObjectItem\FoodRequest;
use App\DTO\ObjectItem\FoodItemDTO;
use App\DTO\ObjectItem\ObejctRequest;
use App\DTO\ObjectItem\ObjectItemDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storeobject_itemRequest;
use App\Http\Requests\UpdateitemRequest;
use App\Models\Item;
use App\Models\ObjectItem;
use App\Repositories\Imp\ImpRepositories;
use App\Services\ItemsService;
use App\Services\ObjectItemService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;


class ObjectItemController extends Controller
{
    private ItemsService $ItemService;


    public function __construct()
    {
        $itmRepository = new ImpRepositories('App\Models\ObjectItem');
        $itemService = new ItemsService($itmRepository);
        $this->ItemService = $itemService;

    }
    public function index()
    {

        return ObjectItem::with(
            'item.itemImages',
            'category:id,name')->get();
    }


    public function store(Storeobject_itemRequest $request , ObjectItemService $objectItemService)
    {

        $validator = Validator::make($request->all(), $request->rules());

        if ($validator->fails()) {
            return new JsonResponse($validator->errors(), 400);
        }


        $objectItemDTO=new ObjectItemDTO(
            $request->input('category_id'),
            $request->input('condition'),
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
        $dtodata= new ObejctRequest($item, $objectItemDTO);

        $data=$objectItemService->createObjectItem($dtodata);

        return response()->json([
            'message'=>'created successfully',
            'data'=>$data->load([
                'item.itemImages',
                'category',
            ]),
        ],201);

    }

    public function show(int $id)
    {
        $objectItem = ObjectItem::with('item.itemImages', 'category:id,name')->find($id);

        if ($objectItem) {
            return $objectItem;
        } else {
            return response()->json([
                'message' => 'not found',
            ], 404);
        }
    }



    public function update(Request $request, ObjectItemService $objectItemService, $id)
    {


        $objectItemDTO = new ObjectItemDTO(
            $request->input('category_id'),
            $request->input('condition')
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
        $dtodata = new ObejctRequest($item, $objectItemDTO);

        $data = $objectItemService->updateObjectItem($dtodata, $id);

        return response()->json([
            'message' => 'updated successfully',
            'name' =>$request->input('name'),
            'data' => $data->load([
                'item.itemImages',
                'category',
            ]),
        ], 200);
    }


    public function destroy($id)
    {
        $objectItem = ObjectItem::find($id);

        if (!$objectItem) {
            // ObjectItem not found
            return response()->json([
                'message' => 'ObjectItem with id ' . $id . ' not found',
            ], 404);
            //return null;
        }

        $item = $objectItem->item;

        if (!$item) {
            return response()->json([
                'message' => 'Item with id ' . $id . ' not found',
            ], 404);
        }


        $objectItem->delete();
        $item->delete();

        return $objectItem;

    }


    public function getObjectItembyme(ObjectItemService $objectItemService){
        $items = $objectItemService->getObjectItembyme();

        return response()->json($items);
    }

}

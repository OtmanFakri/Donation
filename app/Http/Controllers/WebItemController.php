<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreitemRequest;
use App\Http\Requests\UpdateitemRequest;
use App\Models\Category;
use App\Models\Item;
use App\Models\ObjectItem;
use App\Repositories\Imp\ImpRepositories;
use App\Services\ItemsService;

class WebItemController extends Controller
{
    private ItemsService $ItemService;


    public function __construct()
    {
        $itmRepository = new ImpRepositories('App\Models\Category');
        $itemService = new ItemsService($itmRepository);
        $this->ItemService = $itemService;
    }
    public function index()
    {
        $topLevelCategories = Category::whereNull('parent_id')->get();
        $childCategories = Category::whereNotNull('parent_id')->get();

        return view('test.index', compact('topLevelCategories', 'childCategories'));
    }


    public function store(StoreitemRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'user_id' => 'required|integer',
            'description' => 'required',
            'created_at' => 'required|date',
            'address' => 'required|integer',
            'availabilities' => 'required',
            'booked' => 'required|boolean',
            'score_cost' => 'required|integer'
        ]);

        $item = Item::create($validatedData);

        return response()->json($item, 201);
    }

    public function show(int $item)
    {
        if (!$this->ItemService->getItemByid($item)) {
            return response()->json(['error' => 'Item not found'], 404);
        }
        $items = $this->ItemService->getItemByid($item);

        return response()->json($items);
    }


    public function update(UpdateitemRequest $request, item $item)
    {
        $item = Item::find($item->id);

        if (!$item) {
            return response()->json(['message' => 'Item not found'], 404);
        }

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'user_id' => 'required|integer',
            'description' => 'required',
            'created_at' => 'required|date',
            'address' => 'required|integer',
            'availabilities' => 'required',
            'booked' => 'required|boolean',
            'score_cost' => 'required|integer'
        ]);

        $item->fill($validatedData);
        $item->save();

        return response()->json($item);
    }


    public function destroy(item $item)
    {
        $item = Item::find($item->id);

        if (!$item) {
            return response()->json(['message' => 'Item not found'], 404);
        }

        $item->delete();

        return response()->json(['message' => 'Item deleted successfully']);
    }

}

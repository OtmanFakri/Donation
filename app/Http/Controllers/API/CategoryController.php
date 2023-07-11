<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Repositories\Imp\ImpRepositories;
use App\Services\AdminService;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    private $CategoryService;

    public function __construct()
    {
        $catRepository = new ImpRepositories('App\Models\Category');
        $categoryService = new CategoryService($catRepository);
        $this->CategoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->CategoryService->findAll();
        return response()->json($categories);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:category|max:255',
            'parent_id' => 'required|integer',
        ]);

        $category = $this->CategoryService->create($validatedData);
        return response()->json($category);
    }

    public function show(int $category)
    {
        if (!$this->CategoryService->getCategoryById($category)) {
            return response()->json(['error' => 'Category not found'], 404);
        }
        $category = $this->CategoryService->getCategoryById($category);
        return response()->json($category);
    }

    public function update(Request $request,$category)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'parent_id' => 'required|integer',
        ]);

        $result = $this->CategoryService->update($category, $validatedData);

        if ($result) {
            return response()->json(['message' => 'Category updated successfully']);
        } else {
            return response()->json(['message' => 'Failed to update category'], 500);
        }
    }

    public function destroy( $category)
    {
        $result = $this->CategoryService->delete($category);

        if ($result) {
            // Deletion successful
            return response()->json(['message' => 'Category deleted successfully']);
        } else {
            // Deletion failed
            return response()->json(['message' => 'Failed to delete category'], 500);
        }
    }
}

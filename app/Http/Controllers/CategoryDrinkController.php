<?php

namespace App\Http\Controllers;

use App\Services\CategoryDrinkServices;
use Illuminate\Http\Request;

class CategoryDrinkController extends Controller
{
    public function __construct(CategoryDrinkServices $category)
    {
        $this->middleware('auth');
        $this->category = $category;
    }

    public function index() {
        $data = $this->category->listCategoryDrink();
        return view('category-drink.index', compact('data'));
    }

    public function create(Request $request)
    {

       return view('category-drink.create');
    }

    public function store(Request $request)
    {
        $this->category->storeCategoryDrink($request);
        return response()->json([

        ]);
    }

    public function edit(Request $request)
    {
        $data = $this->category->findCategoryDrink($request);
        return view('category-drink.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $this->category->updateCategoryDrink($request);
        return response()->json([

        ]);
    }

    public function destroy(Request $request)
    {
        $this->category->destroyCategoryDrink($request);
        return response()->json([

        ]);
    }
}

<?php

namespace App\Services;

use App\Repositories\CategoryDrinkRepositoryInterface;
use Illuminate\Http\Request;

class CategoryDrinkServices extends BaseServices {

    public function __construct(CategoryDrinkRepositoryInterface $category)
    {
        $this->category = $category;
    }

    public function listCategoryDrink()
    {
        return $this->category->listCategoryDrink();
    }

    public function storeCategoryDrink(Request $request)
    {
        $attributes = $request->all();
        return $this->category->storeCategoryDrink($attributes);
    }

    public function findCategoryDrink(Request $request)
    {
        $id = $request->id;
        return $this->category->findCategoryDrink($id);
    }

    public function updateCategoryDrink(Request $request)
    {
        $id = $request->id;
        $attributes = $request->all();
        return $this->category->updateCategoryDrink($id, $attributes);
    }

    public function destroyCategoryDrink(Request $request)
    {
        $id = $request->id;
        return $this->category->destroyCategoryDrink($id);
    }
}

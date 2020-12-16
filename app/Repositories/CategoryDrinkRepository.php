<?php

namespace App\Repositories;

use App\Model\CategoryDrink;

class CategoryDrinkRepository implements CategoryDrinkRepositoryInterface {

    public function __construct(CategoryDrink $model)
    {
        $this->model = $model;
    }

    public function listCategoryDrink()
    {
        return $this->model->orderBy('id', 'DESC')->get();
    }

    public function storeCategoryDrink($attributes = [])
    {
        return $this->model->create($attributes);
    }

    public function findCategoryDrink($id)
    {
        return $this->model->find($id);
    }

    public function updateCategoryDrink($id, $attributes = [])
    {
        $categoryDrinkId = $this->model->find($id);
        $categoryDrinkId->update($attributes);
        return $categoryDrinkId;
    }

    public function destroyCategoryDrink($id)
    {
        $categoryDrinkId = $this->model->find($id);
        $categoryDrinkId->delete();
        return $categoryDrinkId;
    }
}

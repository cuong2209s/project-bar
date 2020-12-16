<?php

namespace App\Repositories;

use App\Model\Drink;

class DrinkRepository implements DrinkRepositoryInterface {

    public function __construct(Drink $model)
    {
        $this->model = $model;
    }

    public function listDrink()
    {
        return $this->model
        ->join('category_drinks', 'drinks.category_id','=','category_drinks.id')
        ->select('drinks.*','category_drinks.id as cate_id','category_drinks.name as name_cate')
        ->orderBy('drinks.id', 'DESC')->get();
    }

    public function storeDrink($attributes = [])
    {
        return $this->model->create($attributes);
    }

    public function findDrink($id)
    {
        return $this->model
        ->join('category_drinks', 'drinks.category_id','=','category_drinks.id')
        ->select('drinks.*','category_drinks.id as cate_id','category_drinks.name as name_cate')->find($id);
    }

    public function updateDrink($id, $attributes = [])
    {
        $drinkId = $this->model->find($id);
        $drinkId->update($attributes);
        return $drinkId;
    }

    public function destroyDrink($id)
    {
        $drinkId = $this->model->find($id);
        $drinkId->delete();
        return $drinkId;
    }
}

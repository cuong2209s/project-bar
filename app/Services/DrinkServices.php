<?php

namespace App\Services;

use App\Repositories\DrinkRepositoryInterface;
use Illuminate\Http\Request;

class DrinkServices extends BaseServices {

    public function __construct(DrinkRepositoryInterface $drink)
    {
        $this->drink = $drink;
    }

    public function listDrink()
    {
        return $this->drink->listDrink();
    }

    public function storeDrink(Request $request)
    {
        $attributes = $request->all();
        return $this->drink->storeDrink($attributes);
    }

    public function findDrink(Request $request)
    {
        $id = $request->id;
        return $this->drink->findDrink($id);
    }

    public function updateDrink(Request $request)
    {
        $id = $request->id;
        $attributes = $request->all();
        return $this->drink->updateDrink($id, $attributes);
    }

    public function destroyDrink(Request $request)
    {
        $id = $request->id;
        return $this->drink->destroyDrink($id);
    }
}

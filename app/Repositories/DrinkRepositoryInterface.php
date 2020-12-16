<?php

namespace App\Repositories;


interface DrinkRepositoryInterface {

    public function listDrink();

    public function storeDrink($attributes = []);

    public function findDrink($id);

    public function updateDrink($id, $attributes = []);

    public function destroyDrink($id);

}

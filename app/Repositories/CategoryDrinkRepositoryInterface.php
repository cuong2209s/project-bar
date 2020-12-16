<?php

namespace App\Repositories;


interface CategoryDrinkRepositoryInterface {

    public function listCategoryDrink();

    public function storeCategoryDrink($attributes = []);

    public function findCategoryDrink($id);

    public function updateCategoryDrink($id, $attributes = []);

    public function destroyCategoryDrink($id);

}

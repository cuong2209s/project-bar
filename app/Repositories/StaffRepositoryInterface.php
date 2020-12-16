<?php

namespace App\Repositories;


interface StaffRepositoryInterface {

    public function listStaff();

    public function storeStaff($attributes = []);

    public function findStaff($id);

    public function updateStaff($id, $attributes = []);

    public function destroyStaff($id);

}

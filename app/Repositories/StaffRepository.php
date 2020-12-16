<?php

namespace App\Repositories;

use App\Model\Staff;

class StaffRepository implements StaffRepositoryInterface {

    public function __construct(Staff $model)
    {
        $this->model = $model;
    }

    public function listStaff()
    {
        return $this->model->orderBy('id', 'DESC')->get();
    }

    public function storeStaff($attributes = [])
    {
        return $this->model->create($attributes);
    }

    public function findStaff($id)
    {
        return $this->model->find($id);
    }

    public function updateStaff($id, $attributes = [])
    {
        $staffId = $this->model->find($id);
        $staffId->update($attributes);
        return $staffId;
    }

    public function destroyStaff($id)
    {
        $staffId = $this->model->find($id);
        $staffId->delete();
        return $staffId;
    }
}

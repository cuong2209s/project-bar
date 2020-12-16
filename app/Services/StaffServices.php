<?php

namespace App\Services;

use App\Repositories\StaffRepositoryInterface;
use Illuminate\Http\Request;

class StaffServices extends BaseServices {

    public function __construct(StaffRepositoryInterface $staff)
    {
        $this->staff = $staff;
    }

    public function listStaff()
    {
        return $this->staff->listStaff();
    }

    public function storeStaff(Request $request)
    {
        $attributes = $request->all();
        return $this->staff->storeStaff($attributes);
    }

    public function findStaff(Request $request)
    {
        $id = $request->id;
        return $this->staff->findStaff($id);
    }

    public function updateStaff(Request $request)
    {
        $id = $request->id;
        $attributes = $request->all();
        return $this->staff->updateStaff($id, $attributes);
    }

    public function destroyStaff(Request $request)
    {
        $id = $request->id;
        return $this->staff->destroyStaff($id);
    }
}

<?php

namespace App\Http\Controllers;

use App\Services\StaffServices;
use Illuminate\Http\Request;

class StaffController extends Controller
{

    public function __construct(StaffServices $staff)
    {
        $this->middleware('auth');
        $this->staff = $staff;
    }

    public function index() {
        $data = $this->staff->listStaff();
        return view('staff.index', compact('data'));
    }

    public function create(Request $request)
    {

       return view('staff.create');
    }

    public function store(Request $request)
    {
        $this->staff->storeStaff($request);
        return response()->json([

        ]);
    }

    public function edit(Request $request)
    {
        $data = $this->staff->findStaff($request);
        return view('staff.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $this->staff->updateStaff($request);
        return response()->json([

        ]);
    }

    public function destroy(Request $request)
    {
        $this->staff->destroyStaff($request);
        return response()->json([

        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Model\CategoryDrink;
use App\Services\DrinkServices;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function __construct(DrinkServices $drink)
    {   
        $this->middleware('auth');
        $this->drink = $drink;
    }

    public function index() {
        $data =$this->drink->listDrink();
        return view('drink.index', compact('data'));
    }

    public function create(Request $request)
    {
        $data = CategoryDrink::all();
        return view('drink.create', compact('data'));
    }

    public function store(Request $request)
    {
       $this->drink->storeDrink($request);
        return response()->json([

        ]);
    }

    public function edit(Request $request)
    {
        $data = $this->drink->findDrink($request);
        $cates = CategoryDrink::all();
        return view('drink.edit', compact('data','cates'));
    }

    public function update(Request $request)
    {
       $this->drink->updateDrink($request);
        return response()->json([

        ]);
    }

    public function destroy(Request $request)
    {
        $this->drink->destroyDrink($request);
        return response()->json([

        ]);
    }
}

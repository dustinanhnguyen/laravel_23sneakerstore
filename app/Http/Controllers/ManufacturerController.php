<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function index() {
        $manufacturers = Manufacturer::query()->get();
        return view('manufacturers.index', [
            'manufacturers' => $manufacturers,
        ]);
    }

    public function create() {
        return view('manufacturers.create');
    }

    public function store(Request $request) {
        $manufacturer = new Manufacturer();
        $manufacturer->name = $request->get('name');        
        $manufacturer->short_name = $request->get('short_name');        
        $manufacturer->image = $request->get('image');      
        $manufacturer->save(); 
    }
}

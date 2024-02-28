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
        $manufacturer->fill($request->except([
            '_token',
        ]));
        $manufacturer->save(); 

        // Manufacturer::create($request->except('_token'));

        return redirect()->route('manufacturer.index');
    }

    public function edit(Manufacturer $manufacturer) {
        return view('manufacturers.edit', [
            'manufacturer' => $manufacturer,
        ]);
    }

    public function update(Request $request, Manufacturer $manufacturer) {
        // Manufacturer::where('id', $manufacturer->id)
        // ->update($request
        // ->except([
        //     '_token',
        //     '_method',
        // ]));

        $manufacturer->update($request->except([
            '_token',
            '_method',
        ]));

        return redirect()->route('manufacturer.index');
    }

    public function destroy(Manufacturer $manufacturer) {
        $manufacturer->delete();
        return redirect()->route('manufacturer.index');
    }

    // public function destroy( $manufacturer) {
    //     Manufacturer::destroy($manufacturer);   //Eloquent co the truyen mang ID vao de xoa

    //     return redirect()->route('manufacturer.index');
    // }
}

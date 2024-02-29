<?php

namespace App\Http\Controllers;

use App\Http\Requests\Manufacturer\StoreRequest;
use App\Http\Requests\Manufacturer\UpdateRequest;
use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $manufacturers = Manufacturer::query()->where('name', 'like', '%' . $search . '%')->paginate(2);
        $manufacturers->appends([
            'search'=>$search
        ]);
        return view('manufacturers.index', [
            'manufacturers' => $manufacturers,
            'search' => $search,
        ]);
    }

    public function create()
    {
        return view('manufacturers.create');
    }

    public function store(StoreRequest $request)
    {
        // $manufacturer = new Manufacturer();
        // $manufacturer->fill($request->except([
        //     '_token',
        // ]));
        // $manufacturer->save();

        Manufacturer::create($request->validated());

        return redirect()->route('manufacturer.index');
    }

    public function edit(Manufacturer $manufacturer)
    {
        return view('manufacturers.edit', [
            'manufacturer' => $manufacturer,
        ]);
    }

    public function update(UpdateRequest $request, Manufacturer $manufacturer)
    {
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

    public function destroy(Manufacturer $manufacturer)
    {
        $manufacturer->delete();
        return redirect()->route('manufacturer.index');
    }

    // public function destroy( $manufacturer) {
    //     Manufacturer::destroy($manufacturer);   //Eloquent co the truyen mang ID vao de xoa

    //     return redirect()->route('manufacturer.index');
    // }
}

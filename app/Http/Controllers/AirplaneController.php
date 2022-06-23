<?php

namespace App\Http\Controllers;

use App\Models\Airplane;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateAirplaneRequest;
use App\Models\Category;
use App\Models\Service;

class AirplaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Airplane::latest();

        if (request('search')) {
            $items->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('serialnumber', 'like', '%' . request('search') . '%');
        }
        // dd(Airplane::with('category')->get());
        return view('airplane.index', [
            'title' => 'list Airplane',
            'data' => $items->paginate(3)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('airplane.create', [
            'title' => 'add plane',
            'data' => Category::all(),
            'services' => Service::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAirplaneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'serialnumber' => 'required|max:255',
            'partnumber' => 'required|max:255',
            'datemanufacture' => 'required|max:255',
            'slug' => 'required|max:255',
            'category_id' => 'required',
            'service_id' => 'required',

        ]);
        Airplane::create($validatedData);
        return redirect()->route('list-airplane.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Airplane  $airplane
     * @return \Illuminate\Http\Response
     */
    public function show(Airplane $airplane)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Airplane  $airplane
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Airplane::findOrFail($id);
        // dd($items);

        return view('airplane.edit', [
            'title' => 'Update Airplane',
            'items' => $items,
            'categories' => Category::all(),
            'services' => Service::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAirplaneRequest  $request
     * @param  \App\Models\Airplane  $airplane
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $items = Airplane::findOrFail($id);
        $rules = [
            'name' => 'required|max:255',
            'serialnumber' => 'required|max:255',
            'partnumber' => 'required|max:255',
            'datemanufacture' => 'required|max:255',
            'category_id' => 'required',
            'service_id' => 'required',

        ];
        if ($request->slug != $items->slug) {
            $rules['slug'] = 'required|max:255';
        }
        $validatedData = $request->validate($rules);
        $items->where('id', $items->id)
            ->update($validatedData);
        // $airplane->findOrFail($id);
        return redirect()->route('list-airplane.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Airplane  $airplane
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Airplane::findOrFail($id);
        $items->delete();
        return redirect()->route('list-airplane.index');
    }
}

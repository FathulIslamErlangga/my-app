<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Airplane;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::with('airplane');
        if (request('search')) {
            $items->where('name', 'like', '%' . request('search') . '%');
            // ->orWhere('airplane_id', 'like', '%' .  request('search') . '%');
        }
        // dd($a->load('airplane'));
        return view('items.index', [
            'title' => 'list Item',
            'items' => $items->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create', [
            'title' => 'add spare part',
            'items' => Airplane::all()
        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'kode' => 'required|max:255',
            'qty' => 'required|integer',
            'airplane_id' => 'required',
        ]);
        Item::create($validatedData);
        return redirect()->route('list-items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Item::with('airplane')->findOrFail($id);
        return view('items.edit', [
            'title' => 'Edit Items',
            'items' => $items,
            'airplane' => Airplane::all()
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemRequest  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $items = Item::with('airplane')->findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'kode' => 'required|max:255',
            'qty' => 'required|integer',
            'airplane_id' => 'required',
        ]);
        $items->where('id', $items->id)
            ->update($validatedData);
        return redirect()->route('list-items.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $items = Item::findOrFail($id);
        $items->delete();
        return redirect()->route('list-items.index');
    }
}

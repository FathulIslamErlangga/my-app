<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Airplane;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = Service::with(['airplane.items']);
        $fromdate = $request->input('fromdate');
        // $todate = $request->input('todate');
        $items->where('deadline', 'like', '%' . $fromdate . '%');
        // if(request('search')){
        //     $items->where('');
        // }
        return view('service.index', [
            'title' => 'list service',
            'services' => $items->paginate(3)
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('service.create', [
            'title' => 'add service',

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'description' => 'required|max:255',
            'deadline' => 'date'

        ]);
        Service::create($validatedata);
        return redirect()->route('list-service.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Service::findOrFail($id);
        return view('service.edit', [
            'title' => 'update service',
            'items' => $items
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $items = Service::findOrFail($id);
        $validatedata = $request->validate([
            'description' => 'required|max:255',
            'deadline' => 'date'
        ]);
        $items->where('id', $items->id)
            ->update($validatedata);
        return redirect()->route('list-service.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Service::findOrFail($id);
        $items->delete();
        //
        return redirect()->route('list-service.index');
    }
}

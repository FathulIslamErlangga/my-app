<?php

namespace App\Http\Controllers;

use App\Models\Airplane;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $items = Airplane::with(['category', 'items', 'service'])->latest();
        if (request('search')) {
            $items->where('name', 'like', '%' . request('search') . '%');
        }
        // dd(Airplane::select(['service_id' => Service::select('deadline')]));
        return view('dashboard', [
            'title' => 'Home Dashboard',
            'items' => $items->paginate(3)
        ]);
    }
    public function show(Airplane $airplane)
    {
        return view('detailsComponent', [
            'title' => 'Details Service',
            'items' => $airplane
        ]);
    }
}

@extends('layouts.main')
@section('content')
<section class="add-item">
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">List Service</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Airplane Name</th>
                                        <th>Sparepart</th>
                                        <th>Diagnosa</th>
                                        <th>deadline</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($services as $service)
                                    <tr>
                                           <td>{{ $service->id }}</td>
                                            @foreach ($service->airplane as $item)
                                                <td>{{ $item->name }}</td>
                                                @foreach ($item->items as $i)
                                                    <td>{{ $i->name }}</td>
                                                @endforeach
                                            @endforeach
                                           {{-- <td>{{ $service->item->name}}</td> --}}
                                           <td>{{ $service->description}}</td>
                                           <td>{{ $service->deadline }}</td>

                                           <td>
                                               {{-- <a href="{{ route('list-item.gallery') }}" class="btn btn-info btn-sm"> --}}
                                               <a href="#" class="btn btn-info btn-sm">
                                                   <i class="fa fa-picture-o"></i>
                                               </a>
                                               <a href="" class="btn btn-primary btn-sm">
                                                   <i class="fa fa-pencil"></i>
                                               </a>
                                               <form action="#" method="post" class="d-inline">
                                                   @csrf
                                                   @method('delete')
                                                   <button class="btn btn-danger btn-sm">
                                                       <i class="fa fa-trash"></i>
                                                   </button>
                                               </form>
                                           </td>
                                        </tr>
                                       @empty
                                           
                                       @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
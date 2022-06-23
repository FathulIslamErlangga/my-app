@extends('layouts.main')
@section('content')
<section class="add-item">
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Airplane Sarvice</h4>
                        <div class="d-flex justify-content-end">
                            <form action="/dashboard-admin/" 
                            class="uk-search uk-search-default">
                                <button class="btn uk-search-icon-flip" type="submit" uk-search-icon></button>
                                <input class="uk-search-input" type="text"  style="border-radius: 5px;" value="{{ request('search') }}" name="search" placeholder="Search">
                            </form>
                        </div>
                       
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Sparepart</th>
                                        <th>Deadline</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $d)
                                    <tr>
                                           <td>{{ $d->id }}</td>
                                           <td>{{ $d->name }}</td>
                                           <td>{{ $d->category->type }}</td>
                                           @foreach ($d->items as $i)
                                           <td>{{ $i->name}}</td>
                                           @endforeach
                                           <td>{{ $d->service->deadline }}</td>

                                           <td>
                                               {{-- <a href="{{ route('list-item.gallery') }}" class="btn btn-info btn-sm"> --}}
                                               <a href="/data-service/{{ $d->slug }}" class="btn btn-info btn-sm">
                                                   <i class="fa fa-picture-o"></i>
                                               </a>
                                           </td>
                                        </tr>
                                       @empty
                                        <td colspan="6" class="text-center p-5">
                                            Data Not Found
                                        </td>
                                       @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $items->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
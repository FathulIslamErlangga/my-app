@extends('layouts.main')
@section('content')
<section class="add-item">
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">List Component</h4>
                        <div class="d-flex justify-content-end">
                            <form action="{{ route('list-airplane.index') }}" 
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
                                        <th>Serial Number</th>
                                        <th>Part Number</th>
                                        <th>Date Manu facture</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $d)
                                    <tr>
                                           <td>{{ $d->id }}</td>
                                           <td>{{ $d->name }}</td>
                                           <td>{{ $d->serialnumber }}</td>
                                           <td>{{ $d->partnumber}}</td>
                                           <td>{{ $d->datemanufacture }}</td>

                                           <td>
                                               
                                               <a href="{{ route('list-airplane.edit', $d->id) }}" class="btn btn-primary btn-sm">
                                                   <i class="fa fa-pencil"></i>
                                               </a>
                                               <form
                                                action="{{ route('list-airplane.destroy',$d->id) }}" method="post" class="d-inline">
                                                   @csrf
                                                   @method('delete')
                                                   <button class="btn btn-danger btn-sm">
                                                       <i class="fa fa-trash"></i>
                                                   </button>
                                               </form>
                                           </td>
                                        </tr>
                                       @empty
                                        <td colspan="6" class="text-center p-5">
                                            Data Not Found
                                            <a href="{{ route('list-airplane.create') }}" class="d-block">Create Data</a>
                                        </td>
                                       @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
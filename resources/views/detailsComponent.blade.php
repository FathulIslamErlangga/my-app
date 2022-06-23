@extends('layouts.main')
@section('content')
    <section class="container detail-service">
        <div class="card ">
            <div class="card-header text-center">
              List Service Pesawat
            </div>
            <div class="card-body row" style="line-height: 1px;">
                <div class="col-5">

                    <h5 class="card-title"> Category Pesawat: <span class="text-muted">{{ $items->category->type }}</span></h5>
                    <h5 style="line-height: 1px;">Serial Pesawat: <span class="text-muted card-text">{{ $items->serialnumber }}</span></h5>
                    <h5 style="line-height: 1px;">Partnumber Pesawat: <span class="text-muted card-text">{{ $items->partnumber }}</span></h5>
                    <h5 style="line-height: 1px;">Nama Pesawat: <span class="text-muted card-text">{{ $items->name }}</span></h5>
                    @foreach ($items->items as $item)
                    
                    <h5>Sparepart: <span class="card-text text-muted">{{ $item->name }}</span></h5>
                    {{-- <span class="text-center">{{ $item->name }}</span> --}}
                    @endforeach
                </div>
                <div class="col-7">

                    <h5>Dianogsa: <span class="card-text text-muted">{{ $items->service->description}}</span></h5>
                </div>
              
            </div>
            <div class="card-footer text-center text-muted">
              {{ $items->service->deadline }}
            </div>
          </div>
    </section>
@endsection
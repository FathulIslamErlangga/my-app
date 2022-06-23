@extends('layouts.main')
@section('content')
<section class="create-item">
    <div class="card">
        <div class="card-header">
            <strong>Update Data Sparepart</strong>
        </div>
        <div class="card-body card-block">
            <form action="/list-items/{{ $items->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name" class="form-control-label">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name',$items->name) }}">
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-select">Airplane</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" id="form-stacked-select" name="airplane_id">
                            @foreach ($airplane as $item)
                                @if (old('airplane_id', $item->name) == $item->id)
                                    <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                @endif
                                     <option value="{{ $item->id }}">{{ $item->name }}
                                    </option>
                            @endforeach
                            
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="serialnumber" class="form-control-label">Kode Sparepart</label>
                    <input type="text" name="kode" class="form-control @error('kode') is-invalid @enderror" value="{{  old('kode',$items->kode) }}">
                </div>
                <div class="form-group">
                    <label for="partnumber" class="form-control-label">Qty</label>
                    <input type="text" name="qty" class="form-control @error('qty') is-invalid @enderror" value="{{ old( 'qty',$items->qty) }}">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Update Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
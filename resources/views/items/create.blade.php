@extends('layouts.main')
@section('content')
<section class="create-item">
    <div class="card">
        <div class="card-header">
            <strong>Tambah Sparepart</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('list-items.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-select">Airplane</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" id="form-stacked-select" name="airplane_id">
                            @foreach ($items as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kode" class="form-control-label">kode Sparepart</label>
                    <input type="text" name="kode" class="form-control @error('kode') is-invalid @enderror" value="{{ old('kode') }}">
                </div>
                <div class="form-group">
                    <label for="qty" class="form-control-label">qty</label>
                    <input type="text" name="qty" class="form-control @error('qty') is-invalid @enderror" value="{{ old('qty') }}">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Tambah Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
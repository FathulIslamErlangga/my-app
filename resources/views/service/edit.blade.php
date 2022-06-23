@extends('layouts.main')
@section('content')
<section class="create-item">
    <div class="card">
        <div class="card-header">
            <strong>Update Data Servicet</strong>
        </div>
        <div class="card-body card-block">
            <form action="/list-service/{{ $items->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name" class="form-control-label">Diagnosa</label>
                    <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description',$items->description) }}">
                </div>
                <div class="form-group">
                    <label for="partnumber" class="form-control-label">Date</label>
                    <input type="text" name="deadline" class="form-control @error('deadline') is-invalid @enderror" value="{{ old( 'deadline',$items->deadline) }}">
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
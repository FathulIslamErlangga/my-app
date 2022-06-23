@extends('layouts.main')
@section('content')
<section class="create-item">
    <div class="card">
        <div class="card-header">
            <strong>Tambah Service list</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('list-service.store') }}" method="post">
                @csrf
                
                <div class="form-group">
                    <label for="description" class="form-control-label">Diagnosa</label>
                    <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}">
                </div>
                <div class="form-group">
                    <label for="deadline" class="form-control-label">Date</label>
                    <input type="date" name="deadline" class="form-control @error('deadline') is-invalid @enderror" value="{{ old('deadline') }}">
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
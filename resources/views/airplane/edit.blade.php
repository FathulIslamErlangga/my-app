@extends('layouts.main')
@section('content')
<section class="create-item">
    <div class="card">
        <div class="card-header">
            <strong>Update Data Airplane</strong>
        </div>
        <div class="card-body card-block">
            <form action="/list-airplane/{{ $items->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name" class="form-control-label">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name',$items->name) }}">
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-select">Category</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" id="form-stacked-select" name="category_id">
                            @foreach ($categories as $item)
                             
                                    <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                            
                                     <option value="{{ $item->id }}" selected>{{ $item->type }}
                                    </option>
                            @endforeach
                            
                        </select>
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-select">Diagnosa</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" id="form-stacked-select" name="service_id">
                         
                           @foreach ($services as $item)
                               @if (old('service_id',$item->id) == $item->id)
                               <option value="{{ $item->id }}">{{ $item->description }}</option>
                               
                               @endif
                               <option value="{{ $item->id }}">{{ $item->description }}</option>
                               @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="serialnumber" class="form-control-label">serial number</label>
                    <input type="text" name="serialnumber" class="form-control @error('serialnumber') is-invalid @enderror" value="{{  old('serialnumber',$items->serialnumber) }}">
                </div>
                <div class="form-group">
                    <label for="partnumber" class="form-control-label">partnumber</label>
                    <input type="text" name="partnumber" class="form-control @error('partnumber') is-invalid @enderror" value="{{ old( 'partnumber',$items->partnumber) }}">
                </div>
                <div class="form-group">
                    <label for="datemanufacture" class="form-control-label">date manu facture</label>
                    <input type="text" name="datemanufacture" class="form-control @error('datemanufacture') is-invalid @enderror" value="{{ old('datemanufacture',$items->datemanufacture) }}">
                </div>
                <div class="form-group">
                    <label for="slug" class="form-control-label">slug</label>
                    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug',$items->slug) }}">
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
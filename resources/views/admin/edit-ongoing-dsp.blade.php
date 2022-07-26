@extends('layouts.admin')
@push('custom-link')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endpush
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>

        <form action="{{route('dps.update', $dsp->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-header">
                <h5 class="card-title">Edit Project</h5>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3 ">Program</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$dsp->title}}" placeholder="Input Program Name">
                    </div>
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3 ">Description</label>
                    <div class="col-md-9 col-sm-9 ">
                        <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="" cols="30" rows="10">
                        {{$dsp->description}}
                        </textarea>
                    </div>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3 ">Covered Municipality</label>
                    <div class="col-md-9 col-sm-9 ">
                    
                    <select class="selectpicker @error('municipality_id') is-invalid @enderror" name="municipality_id[]" multiple data-live-search="true">
                    @foreach($municipalities as $data)
                        <option value="{{$data->id}}">{{$data->municipality}}</option>
                    @endforeach
                    </select>
                        
                    </div>
                    @error('municipality_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-secondary">Back</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>


        </div>
    </div>
</div>


@endsection

@push('custom-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script>
$('select').selectpicker();
</script>
@endpush

@extends('layouts.admin')
@push('custom-link')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endpush
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
            <h3><small>Archive Projects</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>
        @if(session('message'))
            <div class="alert alert-success alert-dismissible">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="main">
            <div class="main-content">
                <div class="row pb-4">
                @foreach($dsp as $data)
                        <div class="col-md-4">
                                <div class="x_panel">

                                    <div class="x_title">
                                        <h2>{{$data->title}}</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <div class="x_content">
                                        <br />
                                        
                                            <div class="form-group row">
                                                    <label class="col-form-label col-md-3 col-sm-3 ">Description : 
                                                    </label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <label class="col-form-label">{{$data->description}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-3 col-sm-3 ">Covered Municipality :</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    @foreach($data->cover_municipality as $sub_data)
                                                    <label class="col-form-label"> {{$sub_data->municipality}} |
                                                    </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                            
                                            <div class="ln_solid"></div>
                                            <div class="form-group row">
                                                <a href="{{route('dspstatus.update',['id'=>$data->id,'status'=>'ongoing'])}}" class="btn btn-primary ml-auto"><i class="fa fa-retweet" aria-hidden="true"></i></a>
                                            </div>

                                    </div>
                                </div>
                
                            
                        </div>
                @endforeach
                </div>

             </div>
        </div>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{route('dps.create')}}" method="POST">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      


                                                    
     
            <div class="form-group row">
                <label class="col-form-label col-md-3 col-sm-3 ">Program</label>
                <div class="col-md-9 col-sm-9 ">
                    <input type="text" class="form-control" name="title" placeholder="Input Program Name">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-md-3 col-sm-3 ">Description</label>
                <div class="col-md-9 col-sm-9 ">
                    <textarea type="text" class="form-control" name="description" id="" cols="30" rows="10">
                    </textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-md-3 col-sm-3 ">Covered Municipality</label>
                <div class="col-md-9 col-sm-9 ">
               
                <select class="selectpicker" name="municipality_id[]" multiple data-live-search="true">
                @foreach($municipalities as $data)
                    <option value="{{$data->id}}">{{$data->municipality}}</option>
                @endforeach
                </select>
                   
                </div>
            </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
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

@extends('layouts.admin')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
            <h3>Import Z-Score File</h3>
            </div>

            <div class="title_right">
            <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                </span>
                </div>
            </div>
            </div>
        </div>
        <div class="clearfix"></div>

                
        <div class="row pb-4">
            <div class="col-md-4">
                <div class="x_panel">
                    <div class="x_title">
                        <h4 class="brief"><i>Upload 3-5 years old z-score</i> 
                            <a href="" class="btn btn-primary btn-sm"><i class="fa fa-upload" aria-hidden="true"></i></a>
                             <a href="" class="btn btn-success btn-sm"><i class="fa fa-download" aria-hidden="true"></i></a>
                         </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="x_panel">
                    <div class="x_title">
                        <h4 class="brief"><i>Upload 3-12 years old z-score</i> 
                            <a href="" class="btn btn-primary btn-sm"><i class="fa fa-upload" aria-hidden="true"></i></a>
                             <a href="" class="btn btn-success btn-sm"><i class="fa fa-download" aria-hidden="true"></i></a>
                         </h4>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
</div>
<!-- /page content -->
@endsection
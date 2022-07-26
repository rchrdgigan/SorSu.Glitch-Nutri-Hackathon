@extends('layouts.admin')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
            <h3>Admin Dashboard</h3>
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
            <!-- Render Map -->
            @include('admin.mapping.mapping')
            <div class="col-md-4">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Filter Farmers <small>with his/her Product</small></h2>
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
                        <form class="form-label-left input_mask">
                            <div class="col-md-12 col-sm-6  form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Product">
                                <span class="fa fa-search form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-12 col-sm-6  form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Categories">
                                <span class="fa fa-list form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9 col-sm-9  offset-md-3">
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Filter</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- /page content -->
@endsection
@extends('layouts.municipality')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
            <h3>Municipality Dashboard</h3>
            </div>
        </div>
        <div class="clearfix"></div>


        <div class="row pb-4">
            <!-- Render Map -->
            @include('municipality.mapping.mapping')
            <div class="col-md-4">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Filter Farmers Product</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                    <h2>Recent Ongoing Project</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                            <div class="card-box table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Project Name</th>
                                <th>Project Description</th>
                                <th>Project Location</th>
                                <th>Project Supervisor</th>
                                <th>Project Project Timeline</th>
                                <th>Projects Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Feeding Program</td>
                                <td>Project Description</td>
                                <td>Project Location</td>
                                <td>Project Supervisor</td>
                                <td>Project Project Timeline</td>
                                <td>Projects Status</td>
                                <td>
                                    <a href="" class="btn btn-secondary btn-sm"><i class="fa fa-users" aria-hidden="true"></i></a>
                                    <a href="" class="btn btn-success btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div

    </div>
</div>
<!-- /page content -->
@endsection
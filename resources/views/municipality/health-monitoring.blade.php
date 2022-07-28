@extends('layouts.municipality')

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><small>Client Management</small></h3>
            </div>

        </div>

        <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Child List</h2>

                    <div class="title_right">
                        <div class="col-md-2 col-sm-5 col-xs-12 form-group pull-right">
                            <button class="btn btn-success ml-4" type="button" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus" aria-hidden="true"></i> Add</button>
                        </div>
                    </div>

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
                            <th>Name</th>
                            <th>Address</th>
                            <th>Age</th>
                            <th>Birthday</th>
                            <th>Weight</th>
                            <th>Height</th>
                            <th>Nutritional Status</th>
                            <th>Project Inclusion</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Ramuel G. Gallon</td>
                            <td>Zone 2 Bulan</td>
                            <td>7</td>
                            <td>August 15 2015</td>
                            <td>25</td>
                            <td>100</td>
                            <td>Normal</td>
                            <td>Feeding Program</td>
                            <td>
                                <a href="" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a href="" class="btn btn-primary"><i class="fa fa-archive" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Manuel G. Gaballo</td>
                            <td>Sorsogon City</td>
                            <td>6</td>
                            <td>August 15 2016</td>
                            <td>25</td>
                            <td>120</td>
                            <td>Normal</td>
                            <td>Feeding Program</td>
                            <td>
                                <a href="" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a href="" class="btn btn-primary"><i class="fa fa-archive" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
         </div>
       </div>

    </div>
</div>
@endsection

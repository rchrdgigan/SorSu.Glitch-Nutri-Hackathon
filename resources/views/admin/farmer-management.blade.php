@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
            <h3><small>Farmers Market</small></h3>
            </div>

            <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
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

        <div class="main">
            <div class="main-content">
                <div class="row pb-4">
                    <div class="col-md-4">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Farmers <small>with his/her Product</small></h2>
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

										<div class="col-md-6 col-sm-6  form-group has-feedback">
											<input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
											<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
										</div>

										<div class="col-md-6 col-sm-6  form-group has-feedback">
											<input type="text" class="form-control" id="inputSuccess3" placeholder="Last Name">
											<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
										</div>

										<div class="col-md-6 col-sm-6  form-group has-feedback">
											<input type="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
											<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
										</div>

										<div class="col-md-6 col-sm-6  form-group has-feedback">
											<input type="tel" class="form-control" id="inputSuccess5" placeholder="Phone">
											<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
										</div>
                                        <div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Date Of Birth <span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 ">
												<input class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
												<script>
													function timeFunctionLong(input) {
														setTimeout(function() {
															input.type = 'text';
														}, 60000);
													}
												</script>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Product</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" placeholder="Input Product">
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Categories</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" placeholder="Input Categories">
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Quantiy</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" placeholder="Input Quantiy">
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Price</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" placeholder="Input Price">
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Date Of Birth <span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 ">
												<input class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
												<script>
													function timeFunctionLong(input) {
														setTimeout(function() {
															input.type = 'text';
														}, 60000);
													}
												</script>
											</div>
										</div>
										
										
										<div class="ln_solid"></div>
										<div class="form-group row">
											<div class="col-md-9 col-sm-9  offset-md-3">
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
								</div>
							</div>
               
                        
                    </div>

                    <!-- Render Map -->
                    @include('admin.mapping.mapping')
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                            <h2>Manage User</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Address</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Admin Nixon</td>
                                        <td>Admin@gmail.com</td>
                                        <td>Admin</td>
                                        <td>Bulan</td>
                                        <td>2022</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <a href="" class="btn btn-primary btn-sm"><i class="fa fa-archive" aria-hidden="true"></i></a>
                                            <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Edmen Snider</td>
                                        <td>nice@gmail.com</td>
                                        <td>Admin</td>
                                        <td>Matnog</td>
                                        <td>2022</td>
                                        <td>
                                        <a href="" class="btn btn-success btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <a href="" class="btn btn-primary btn-sm"><i class="fa fa-archive" aria-hidden="true"></i></a>
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
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

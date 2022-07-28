@extends('layouts.municipality')
@push('custom-link')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endpush
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
            <h3><small>Farmers Market</small></h3>
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
                    <div class="col-md-4">
							<div class="x_panel">
								<div class="x_title">
									<h2>Add Farmers
                                    </h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
                                    
								</div>
								<div class="x_content">
									<br />

									<form action="{{route('farmer.create')}}" method="POST">
                                        @csrf
										<div class="col-md-6 col-sm-6  form-group has-feedback">
											<input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="fname" placeholder="First Name">
											<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
										</div>

										<div class="col-md-6 col-sm-6  form-group has-feedback">
											<input type="text" class="form-control" id="inputSuccess3" name="lname" placeholder="Last Name">
											<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
										</div>

										<div class="col-md-6 col-sm-6  form-group has-feedback">
											<input type="email" class="form-control has-feedback-left" id="inputSuccess4" name="email" placeholder="Email">
											<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
										</div>

										<div class="col-md-6 col-sm-6  form-group has-feedback">
											<input type="tel" class="form-control" id="inputSuccess5" name="phone" placeholder="Phone">
											<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
										</div>

										<div class="col-md-12 col-sm-12  form-group has-feedback">
											<input type="tel" class="form-control has-feedback-left" id="inputSuccess5" name="barangay" placeholder="Barangay">
											<span class="fa fa-compass form-control-feedback left" aria-hidden="true"></span>
										</div>

										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Product</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" name="product" placeholder="Input Product">
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Description</label>
											<div class="col-md-9 col-sm-9 ">
                                                <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" cols="30" rows="5">
                                                </textarea>
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Categories</label>
                                            <select class="form-control @error('municipality_id') is-invalid @enderror" name="category">
                                                <option>Rice</option>
                                                <option>Vegetables</option>
                                                <option>Root Crops</option>
                                                <option>Fruits</option>
                                            </select>
										</div>

                                        <div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Quantity</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" name="quantity" placeholder="Input Quantiy">
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Price</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" name="price" placeholder="Input Price">
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 ">Date Of Harvest <span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 ">
												<input class="date-picker form-control" name="date_harvest" placeholder="dd-mm-yyyy" type="text" required="required" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
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
                    @include('municipality.mapping.mapping')
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                            <h2>Manage Farmers Market Info</h2>
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
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Phone</th>
                                        <th>Product</th>
                                        <th>Harvest At</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   
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

@push('custom-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script>
$('select').selectpicker();
</script>
@endpush


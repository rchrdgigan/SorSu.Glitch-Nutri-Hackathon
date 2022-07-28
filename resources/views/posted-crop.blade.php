@extends('layouts.app')

@section('content')
<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Shop</h2>
                <ul class="breadcrumb bg-secondary">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">Shop</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Shop Page  -->
<div class="shop-box-inner">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                <div class="right-product-box">
                    <div class="product-item-filter row">
                        <div class="col-12 col-sm-8 text-center text-sm-left">
                            <div class="toolbar-sorter-right">
                                <span>Sort by </span>
                                <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                                <option data-display="Select">Nothing</option>
                                <option value="1">Popularity</option>
                                <option value="2">High Price → High Price</option>
                                <option value="3">Low Price → High Price</option>
                                <option value="4">Best Selling</option>
                            </select>
                            </div>
                            <p>Showing all 4 results</p>
                        </div>
                        <div class="col-12 col-sm-4 text-center text-sm-right">
                            <ul class="nav nav-tabs ml-auto">
                                <li>
                                    <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="product-categorie-box">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="sale">Sale</p>
                                                </div>
                                                <img src="{{ asset('img/vegetables.jpg') }}" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Contact"><i class="fas fa-phone"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Cabage</h4>
                                                <h5>P 500.40 / Per Sacks</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="new">New</p>
                                                </div>
                                                <img src="{{ asset('img/rootcrops.jpg') }}" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Contact"><i class="fas fa-phone"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Sweet Potato</h4>
                                                <h5>P 550.40 / Per Sacks</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="sale">Sale</p>
                                                </div>
                                                <img src="{{ asset('img/vegetables.jpg') }}" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Contact"><i class="fas fa-phone"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Cabage</h4>
                                                <h5>P 630.00 / Per Sacks</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="new">New</p>
                                                </div>
                                                <img src="{{ asset('img/rootcrops.jpg') }}" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Contact"><i class="fas fa-phone"></i></a></li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Carots</h4>
                                                <h5>P 550.40 / Per Sacks</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="sale">Sale</p>
                                                </div>
                                                <img src="{{ asset('img/fruits.jpg') }}" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Contact"><i class="fas fa-phone"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Mango</h4>
                                                <h5>P 500.40 / Per Sacks</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="sale">Sale</p>
                                                </div>
                                                <img src="{{ asset('img/vegetables.jpg') }}" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Contact"><i class="fas fa-phone"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Cabage</h4>
                                                <h5>P 570.40 / Per Sacks</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="sale">Sale</p>
                                                </div>
                                                <img src="{{ asset('img/rootcrops.jpg') }}" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Contact"><i class="fas fa-phone"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Sweet Potato</h4>
                                                <h5>P 510.40 / Per Sacks</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="sale">Sale</p>
                                                </div>
                                                <img src="{{ asset('img/vegetables.jpg') }}" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Contact"><i class="fas fa-phone"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Lorem ipsum dolor sit amet</h4>
                                                <h5> P 520.40 / Per Sacks</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">
                                                    <p class="new">New</p>
                                                </div>
                                                <img src="{{ asset('img/fruits.jpg') }}" class="img-fluid" alt="Image">
                                                <div class="mask-icon">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Contact"><i class="fas fa-phone"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>Lorem ipsum dolor sit amet</h4>
                                                <h5> P 530.40 / Per Sack</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                <div class="product-categori">
                    <div class="search-product">
                        <form action="#">
                            <input class="form-control" placeholder="Search here..." type="text">
                            <button type="submit"> <i class="fa fa-search"></i> </button>
                        </form>
                    </div>
                    <div class="filter-sidebar-left">
                        <div class="title-left">
                            <h3>Categories</h3>
                        </div>
                        <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                            <div class="list-group-collapse sub-men">
                                <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Fruits <small class="text-muted">(5)</small>
                            </a>
                                <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action active">Apple <small class="text-muted">(2)</small></a>
                                        <a href="#" class="list-group-item list-group-item-action active">Mango <small class="text-muted">(3)</small></a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-collapse sub-men">
                                <a class="list-group-item list-group-item-action" href="#sub-men2" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men2">Vegetables 
                            <small class="text-muted">(10)</small>
                            </a>
                                <div class="collapse" id="sub-men2" data-parent="#list-group-men">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action">Carots <small class="text-muted">(6)</small></a>
                                        <a href="#" class="list-group-item list-group-item-action">Vegetables <small class="text-muted">(4)</small></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-price-left">
                        <div class="title-left">
                            <h3>Price</h3>
                        </div>
                        <div class="price-box-slider">
                                <input type="text" id="amount" style="color:#fbb714; font-weight:bold;">
                                <button class="btn hvr-hover text-white" type="submit">Filter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Shop Page -->

@endsection
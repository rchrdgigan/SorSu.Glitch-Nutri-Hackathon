<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item {{(request()->route()->getName()=='home')?'active':''}}"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                    <li class="nav-item {{(request()->route()->getName()=='about')?'active':''}}"><a class="nav-link" href="{{url('/about')}}">About Us</a></li>
                    <li class="nav-item {{(request()->route()->getName()=='posted')?'active':''}}"><a class="nav-link" href="{{url('/posted-crops')}}">Posted Crops</a></li>
                    <li class="nav-item {{(request()->route()->getName()=='gallery')?'active':''}}"><a class="nav-link" href="{{url('/gallery')}}">Gallery</a></li>
                    <li class="nav-item {{(request()->route()->getName()=='contact')?'active':''}}"><a class="nav-link" href="{{url('/contact')}}">Contact Us</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->
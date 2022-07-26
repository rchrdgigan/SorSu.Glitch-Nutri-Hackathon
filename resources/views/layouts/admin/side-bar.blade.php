<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
        <li>
            <a href="{{url('/home')}}"><i class="fa fa-home"></i> Home</a>
        </li>
        
        <li><a><i class="fa fa-users"></i> DSP Management <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{url('/dps-ongoing')}}">Ongoing Projects</a></li>
                <li><a href="#">Completed Projects</a></li>
            </ul>
        </li>
        <li>
            <a href="{{url('/mapping-crop-setting')}}"><i class="fa fa-list-alt"></i> Farmers Market</a>
        </li>
        <li>
            <a href="{{url('/account-setting')}}"><i class="fa fa-users"></i> Account Management</a>
        </li>
        <li>
            <a href="{{url('/register')}}"><i class="fa fa-users"></i> Register Account</a>
        </li>
        <li>
            <a href="{{url('/import-zscore')}}"><i class="fa fa-upload"></i> Import Z-Score Collection</a>
        </li>
    </div>

</div>
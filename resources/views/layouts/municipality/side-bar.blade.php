<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">

        <li>
        <a href="{{route('municipality.view')}}"><i class="fa fa-home"></i> Home</a>
        </li>
        <li><a><i class="fa fa-users"></i> DSP Management <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{route('municipaldsp.view')}}">Ongoing Projects</a></li>
                <li><a href="">Completed Projects</a></li>
                <li><a href="">Archive Projects</a></li>
            </ul>
        </li>
        <li>
            <a href="{{route('municipalfarmer.view')}}"><i class="fa fa-list-alt"></i> Farmers Market</a>
        </li>
        <li>
            <a href="{{route('health.view')}}"><i class="fa fa-users"></i> Client Children</a>
        </li>

    </div>

</div>
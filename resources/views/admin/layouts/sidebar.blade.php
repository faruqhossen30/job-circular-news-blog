<div class="sidebar-scroll">
    <div id="sidebar" class="nav-collapse collapse">

        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
                <input type="text" class="search-query" placeholder="Search" />
            </form>
        </div>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="sidebar-menu">
            <li class="sub-menu active">
                <a class="" href="{{route('dashboard')}}">
                    <i class="icon-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon-book"></i>
                    <span>Circular</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{route('circular.index')}}">All Circular</a></li>
                    <li><a class="" href="{{route('circular.create')}}">Add Circular</a></li>
                    <li><a class="" href="{{route('category.index')}}">Category</a></li>
                </ul>
            </li>
            <li class="sub-menu ">
                <a href="javascript:;" class="">
                    <i class="icon-book"></i>
                    <span>News</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{route('news.index')}}">All News</a></li>
                    <li><a class="" href="{{route('news.create')}}">Add News</a></li>
                </ul>
            </li>

            {{-- <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon-cogs"></i>
                    <span>Components</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="calendar.html">Calendar</a></li>
                    <li><a class="" href="grids.html">Grids</a></li>
                    <li><a class="" href="chartjs.html">Chart Js</a></li>
                    <li><a class="" href="flot_chart.html">Flot Charts</a></li>
                    <li><a class="" href="gallery.html"> Gallery</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon-tasks"></i>
                    <span>Form Stuff</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="form_layout.html">Form Layouts</a></li>
                    <li><a class="" href="form_component.html">Form Components</a></li>
                    <li><a class="" href="form_wizard.html">Form Wizard</a></li>
                    <li><a class="" href="form_validation.html">Form Validation</a></li>
                    <li><a class="" href="dropzone.html">Dropzone File Upload </a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon-th"></i>
                    <span>Data Tables</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="basic_table.html">Basic Table</a></li>
                    <li><a class="" href="dynamic_table.html">Dynamic Table</a></li>
                    <li><a class="" href="editable_table.html">Editable Table</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon-fire"></i>
                    <span>Icons</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="font_awesome.html">Font Awesome</a></li>
                    <li><a class="" href="glyphicons.html">Glyphicons</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a class="" href="javascript:;">
                    <i class="icon-trophy"></i>
                    <span>Portlets</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li><a href="general_portlet.html" class=""> General Portlet</a></li>
                    <li><a href="draggable_portlet.html" class="">Draggable Portlet</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a class="" href="javascript:;">
                    <i class="icon-map-marker"></i>
                    <span>Maps</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li><a href="vector_map.html" class="">Vector Maps</a></li>
                    <li><a href="google_map.html" class="">Google Map</a></li>
                </ul>
            </li>
            <li class="sub-menu active">
                <a href="javascript:;" class="">
                    <i class="icon-file-alt"></i>
                    <span>Sample Pages</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li class="active"><a class="" href="blank.html">Blank Page</a></li>
                    <li><a class="" href="blog.html">Blog</a></li>
                    <li><a class="" href="timeline.html">Timeline</a></li>
                    <li><a class="" href="profile.html">Profile</a></li>
                    <li><a class="" href="about_us.html">About Us</a></li>
                    <li><a class="" href="contact_us.html">Contact Us</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon-glass"></i>
                    <span>Extra</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="lock.html">Lock Screen</a></li>
                    <li><a class="" href="invoice.html">Invoice</a></li>
                    <li><a class="" href="pricing_tables.html">Pricing Tables</a></li>
                    <li><a class="" href="search_result.html">Search Result</a></li>
                    <li><a class="" href="faq.html">FAQ</a></li>
                    <li><a class="" href="404.html">404 Error</a></li>
                    <li><a class="" href="500.html">500 Error</a></li>
                </ul>
            </li>

            <li>
                <a class="" href="login.html">
                    <i class="icon-user"></i>
                    <span>Login Page</span>
                </a>
            </li> --}}
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>

<?php
use MatthiasMullie\Minify;

$sourcePath = '../css/app/app.v1.css';
$minifier = new Minify\CSS($sourcePath);

// we can even add another file, they'll then be
// joined in 1 output file
/*$sourcePath2 = '/path/to/second/source/css/file.css';
$minifier->add($sourcePath2);*/

// or we can just add plain CSS
/*$css = 'body { color: #000000; }';
$minifier->add($css);*/

// save minified file to disk
$minifiedPath = '../css/app/file.css';
dd($minifier->minify($minifiedPath));

// or just output the content
/*dd($minifier->minify());*/

?>

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Admin CMS') }}</title>

    <meta name="description" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css" />

    <!-- FontAwesome core CSS -->
    <link rel="stylesheet" href="../css/fontawesome/font-awesome.css" />

    @yield('stylesheets')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->

    <!-- Scripts -->

    <!-- Base Styling  -->
    <link rel="stylesheet" href="../css/app/app.v1.css" />

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>
<!-- Preloader -->
<div class="loading-container">
    <div class="loading">
        <div class="l1">
            <div></div>
        </div>
        <div class="l2">
            <div></div>
        </div>
        <div class="l3">
            <div></div>
        </div>
        <div class="l4">
            <div></div>
        </div>
    </div>
</div>
<!-- Preloader -->

<aside class="left-panel">

    <div class="user text-center">
        <img src="../images/avtar/user.png" class="img-circle" alt="...">
        <h4 class="user-name">{{ Auth::user()->name }}</h4>

        <div class="dropdown user-login">
            <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" aria-expanded="true">
                <i class="fa fa-circle status-icon available"></i> Available <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" href="#"><i class="fa fa-circle status-icon busy"></i> Busy</a></li>
                <li role="presentation"><a role="menuitem" href="#"><i class="fa fa-circle status-icon invisibled"></i> Invisible</a></li>
                <li role="presentation">

                    <a role="menuitem" href="{{ route('logout') }}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fa fa-circle status-icon signout"></i> Sign out
                    </a>

                </li>


                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </ul>
        </div>
    </div>



    <nav class="navigation">
        <ul class="list-unstyled">
            <li class="active"><a href="#"><i class="fa fa-bookmark-o"></i><span class="nav-label">Dashboard</span></a></li>
            <li><a href="pages-url"><i class="fa fa-bookmark-o"></i><span class="nav-label">Pages URL</span></a></li>
            <li><a href="pages"><i class="fa fa-bookmark-o"></i><span class="nav-label">Pages</span></a></li>
            <li><a href="wi"><i class="fa fa-bookmark-o"></i><span class="nav-label">Widgets</span></a></li>
            <li class="has-submenu"><a href="#"><i class="fa fa-comment-o"></i> <span class="nav-label">Widgets &amp; Apps</span></a>
                <ul class="list-unstyled">
                    <li><a href="email.html">Email</a></li>
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="calendar.html">Calendar</a></li>
                    <li><a href="notes.html">Notes</a></li>
                    <li><a href="file-browser.html">File Browser</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="#"><i class="fa fa-flag-o"></i> <span class="nav-label">UI Elements</span></a>
                <ul class="list-unstyled">
                    <li><a href="uielements-general.html">General Elements</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="grid.html">Grid</a></li>
                    <li><a href="panels.html">Panels</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="#"><i class="fa fa-file-text-o"></i> <span class="nav-label">Forms</span></a>
                <ul class="list-unstyled">
                    <li><a href="forms-element.html">General Elements</a></li>
                    <li><a href="forms-validation.html">Form Validation</a></li>
                    <li><a href="wysihtml.html">Wysihtml</a></li>
                    <li><a href="file-upload.html">File Upload</a></li>
                    <li><a href="image-crop.html">Image Crop</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="#"><i class="fa fa-heart-o"></i> <span class="nav-label">Table &amp; Grid</span></a>
                <ul class="list-unstyled">
                    <li><a href="basic-tables.html">Basic Tables</a></li>
                    <li><a href="data-tables.html">Data Table</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="#"><i class="fa fa-code"></i> <span class="nav-label">Charts</span></a>
                <ul class="list-unstyled">
                    <li><a href="chart-variants.html">Chart Variants</a></li>
                    <li><a href="gauges.html">Gauges</a></li>
                    <li><a href="vector-maps.html">Vector Maps</a></li>
                    <li><a href="range-selector.html">Range Selector</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="#"><i class="fa fa-star-o"></i> <span class="nav-label">Plugins &amp; More</span></a>
                <ul class="list-unstyled">
                    <li><a href="404.html">404 Page</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                    <li><a href="elfinder.html">File Manager</a></li>
                    <li><a href="google-maps.html">Google Maps</a></li>
                    <li><a href="signin.html">Signin</a></li>
                    <li><a href="signup.html">Signup</a></li>
                    <li><a href="search.html">Search</a></li>
                    <li><a href="full-screen.html">Full Screen</a></li>
                    <li><a href="blank.html">Blank Page</a></li>

                </ul>
            </li>
        </ul>
    </nav>

</aside>
<!-- Aside Ends-->

<section class="content">

    <header class="top-head container-fluid">
        <button type="button" class="navbar-toggle pull-left">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <form role="search" class="navbar-left app-search pull-left hidden-xs">
            <input type="text" placeholder="Enter keywords..." class="form-control form-control-circle">
        </form>

        <nav class=" navbar-default hidden-xs" role="navigation">
            <ul class="nav navbar-nav">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <ul class="nav-toolbar">
            <li class="dropdown"><a href="#" data-toggle="dropdown"><i class="fa fa-comments-o"></i> <span class="badge bg-warning">7</span></a>
                <div class="dropdown-menu md arrow pull-right panel panel-default arrow-top-right messages-dropdown">
                    <div class="panel-heading">
                        Messages
                    </div>

                    <div class="list-group">

                        <a href="#" class="list-group-item">
                            <div class="media">
                                <div class="user-status busy pull-left">
                                    <img class="media-object img-circle pull-left" src="../images/avtar/user2.png" alt="user#1" width="40">
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Lorem ipsum dolor sit consect....</h5>
                                    <small class="text-muted">23 Sec ago</small>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="media">
                                <div class="user-status offline pull-left">
                                    <img class="media-object img-circle pull-left" src="../images/avtar/user3.png" alt="user#1" width="40">
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Nunc elementum, enim vitae</h5>
                                    <small class="text-muted">23 Sec ago</small>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="media">
                                <div class="user-status invisibled pull-left">
                                    <img class="media-object img-circle pull-left" src="../images/avtar/user4.png" alt="user#1" width="40">
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Praesent lacinia, arcu eget</h5>
                                    <small class="text-muted">23 Sec ago</small>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <div class="media">
                                <div class="user-status online pull-left">
                                    <img class="media-object img-circle pull-left" src="../images/avtar/user5.png" alt="user#1" width="40">
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">In mollis blandit tempor.</h5>
                                    <small class="text-muted">23 Sec ago</small>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="btn btn-info btn-flat btn-block">View All Messages</a>

                    </div>

                </div>
            </li>
            <li class="dropdown"><a href="#" data-toggle="dropdown"><i class="fa fa-bell-o"></i><span class="badge">3</span></a>
                <div class="dropdown-menu arrow pull-right md panel panel-default arrow-top-right notifications">
                    <div class="panel-heading">
                        Notification
                    </div>

                    <div class="list-group">

                        <a href="#" class="list-group-item">
                            <p>Installing App v1.2.1<small class="pull-right text-muted">45% Done</small></p>
                            <div class="progress progress-xs no-margn progress-striped active">
                                <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                    <span class="sr-only">45% Complete</span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="list-group-item">
                            Fusce dapibus molestie tincidunt. Quisque facilisis libero eget justo iaculis
                        </a>

                        <a href="#" class="list-group-item">
                            <p>Server Status</p>
                            <div class="progress progress-xs no-margn">
                                <div class="progress-bar progress-bar-success" style="width: 35%">
                                    <span class="sr-only">35% Complete (success)</span>
                                </div>
                                <div class="progress-bar progress-bar-warning" style="width: 20%">
                                    <span class="sr-only">20% Complete (warning)</span>
                                </div>
                                <div class="progress-bar progress-bar-danger" style="width: 10%">
                                    <span class="sr-only">10% Complete (danger)</span>
                                </div>
                            </div>
                        </a>



                        <a href="#" class="list-group-item">
                            <div class="media">
                                <span class="label label-danger media-object img-circle pull-left">Danger</span>
                                <div class="media-body">
                                    <h5 class="media-heading">Lorem ipsum dolor sit consect..</h5>
                                </div>
                            </div>
                        </a>


                        <a href="#" class="list-group-item">
                            <p>Server Status</p>
                            <div class="progress progress-xs no-margn">
                                <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-info">
                                    <span class="sr-only">60% Complete (warning)</span>
                                </div>
                            </div>
                        </a>


                    </div>

                </div>
            </li>
            <li class="dropdown"><a href="#" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu lg pull-right arrow panel panel-default arrow-top-right">
                    <div class="panel-heading">
                        More Apps
                    </div>
                    <div class="panel-body text-center">
                        <div class="row">
                            <div class="col-xs-6 col-sm-4"><a href="#" class="text-green"><span class="h2"><i class="fa fa-envelope-o"></i></span><p class="text-gray no-margn">Messages</p></a></div>
                            <div class="col-xs-6 col-sm-4"><a href="#" class="text-purple"><span class="h2"><i class="fa fa-calendar-o"></i></span><p class="text-gray no-margn">Events</p></a></div>

                            <div class="col-xs-12 visible-xs-block"><hr></div>

                            <div class="col-xs-6 col-sm-4"><a href="#" class="text-red"><span class="h2"><i class="fa fa-comments-o"></i></span><p class="text-gray no-margn">Chatting</p></a></div>

                            <div class="col-lg-12 col-md-12 col-sm-12  hidden-xs"><hr></div>

                            <div class="col-xs-6 col-sm-4"><a href="#" class="text-yellow"><span class="h2"><i class="fa fa-folder-open-o"></i></span><p class="text-gray">Folders</p></a></div>

                            <div class="col-xs-12 visible-xs-block"><hr></div>

                            <div class="col-xs-6 col-sm-4"><a href="#" class="text-primary"><span class="h2"><i class="fa fa-flag-o"></i></span><p class="text-gray">Task</p></a></div>
                            <div class="col-xs-6 col-sm-4"><a href="#" class="text-info"><span class="h2"><i class="fa fa-star-o"></i></span><p class="text-gray">Favorites</p></a></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </header>
    <!-- Header Ends -->


    <div class="warper container-fluid">

        @yield('content')

    </div>
    <!-- Warper Ends Here (working area) -->


    <footer class="container-fluid footer">
        Copyright &copy; 2014 <a href="http://freakpixels.com/" target="_blank">FreakPixels</a>
        <a href="#" class="pull-right scrollToTop"><i class="fa fa-chevron-up"></i></a>
    </footer>


</section>
<!-- Content Block Ends Here (right box)-->

<!-- JQuery v1.9.1 -->
<script src="../js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="../js/plugins/underscore/underscore-min.js"></script>
<!-- Bootstrap -->
<script src="../js/bootstrap/bootstrap.min.js"></script>

@yield('scripts')

<!-- Custom JQuery -->
<script src="../js/app/custom.js" type="text/javascript"></script>
<script src="../js/app/jquery-ui.js" type="text/javascript"></script>
<script src="../js/custom/myJS.js" type="text/javascript"></script>

</body>
</html>

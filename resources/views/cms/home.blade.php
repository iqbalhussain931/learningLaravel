@extends('layouts.adminMaster')

@section('stylesheets')
    <!-- Calendar Styling  -->
    <link rel="stylesheet" href="../css/plugins/calendar/calendar.css" />

    <!-- Fonts  -->
    <!--<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>--}}

    <!-- Base Styling  -->
    <link rel="stylesheet" href="../css/app/app.v1.css" />
@endsection


@section('content')
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

            <div class="page-header"><h1>Dashboard <small>Let's get a quick overview...</small></h1></div>


            <div class="row">

                <div class="col-md-3 col-sm-6">
                    <div class="panel panel-default clearfix dashboard-stats rounded">
                        <span id="dashboard-stats-sparkline1" class="sparkline transit"></span>
                        <i class="fa fa-shopping-cart bg-danger transit stats-icon"></i>
                        <h3 class="transit">1547 <small class="text-green"><i class="fa fa-caret-up"></i> 8%</small></h3>
                        <p class="text-muted transit">Last week sales</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="panel panel-default clearfix dashboard-stats rounded">
                        <span id="dashboard-stats-sparkline2" class="sparkline transit"></span>
                        <i class="fa fa-tags bg-info transit stats-icon"></i>
                        <h3 class="transit">91% <small class="text-red"><i class="fa fa-caret-down"></i> 6%</small></h3>
                        <p class="text-muted transit">Transactions</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="panel panel-default clearfix dashboard-stats rounded">
                        <span id="dashboard-stats-sparkline3" class="sparkline transit"></span>
                        <i class="fa fa-user bg-success transit stats-icon"></i>
                        <h3 class="transit">2,014 <small class="text-green"><i class="fa fa-caret-up"></i> 9%</small></h3>
                        <p class="text-muted transit">Total Users</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="panel panel-default clearfix dashboard-stats rounded">
                        <span id="dashboard-stats-sparkline4" class="sparkline transit"></span>
                        <i class="fa fa-warning bg-warning transit stats-icon"></i>
                        <h3 class="transit">-344 <small class="text-red"><i class="fa fa-caret-down"></i> 20%</small></h3>
                        <p class="text-muted transit">Churned Users</p>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-lg-8">

                    <div class="panel panel-default">
                        <div class="panel-heading clean">
                            Statistics
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm btn-circle" data-toggle="dropdown">Monthly <span class="caret"></span></button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Daily</a></li>
                                        <li><a href="#">Weekly</a></li>
                                        <li class="active"><a href="#">Monthly</a></li>
                                        <li><a href="#">Yearly</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Specific Time</a></li>
                                    </ul>
                                </div>
                                <button type="button" class="btn btn-default btn-sm btn-circle">GO</button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div id="splineArea-chart" style="height:280px;"></div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">

                    <div class="panel panel-default" data-ng-controller="TodoCtrl">

                        <div class="panel-body">
                            <ul class="list-group no-margn nicescroll todo-list" style="height:205px; overflow:auto;">
                                <li data-ng-repeat="todo in todos" class="list-group-item">
                                    <label class="cr-styled">
                                        <input type="checkbox" data-ng-model="todo.done">
                                        <i class="fa"></i>
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <div class="panel-footer">
                            <form data-ng-submit="addTodo()" role="form">
                                <div class="input-group">
                                    <input type="text" data-ng-model="todoText" class="form-control" placeholder="add new todo here">
                                    <span class="input-group-btn">
                                <button class="btn-primary btn" type="submit" >Add</button>
                              </span>
                                </div>
                            </form>
                        </div>


                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-body text-center">
                                    <h5 class="no-margn"><strong>WoW Revenue</strong></h5>
                                    <p class="text-muted"><small>total 153,248</small></p>
                                    <div id="dashboard-stats-sparkline5"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-body text-center">
                                    <h5 class="no-margn"><strong>Sessions Count</strong></h5>
                                    <p class="text-muted"><small>total 153,248</small></p>
                                    <div id="dashboard-stats-sparkline6"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Task's in progress</div>
                                <div class="panel-body">

                                    <p><strong>Loading Server Data</strong> <small class="text-muted">45% completed</small></p>
                                    <div class="progress progress-xs progress-striped active">
                                        <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p><strong>40%</strong> Task one</p>
                                            <div class="progress progress-xs no-margn">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <p><strong>60%</strong> Task two</p>
                                            <div class="progress progress-xs no-margn">
                                                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">60% Complete (warning)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <p><strong>80%</strong> Task three</p>
                                            <div class="progress progress-xs no-margn">
                                                <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body" id="demo-map-2" style="height:280px;" >



                                </div>
                            </div>
                        </div>
                    </div>





                </div>
                <div class="col-lg-6">

                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#messages" role="tab" data-toggle="tab">Messages</a></li>
                        <li><a href="#appointments" role="tab" data-toggle="tab">Appointments</a></li>
                        <li><a href="#activities" role="tab" data-toggle="tab"><span class="hidden-xs">Recent</span> Activities</a></li>
                    </ul>

                    <div class="tab-content">

                        <div class="panel panel-default tab-pane tabs-up active" id="messages">
                            <div class="panel-body">


                                <ul class="media-list messages nicescroll">
                                    <li class="media">
                                        <a href="#" class="pull-left user-status online">
                                            <img alt="user" class="media-object" src="../images/avtar/user2.png">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>Maximo Mccall</strong></h5>
                                            <p class="text-muted no-margn">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a href="#" class="pull-right user-status offline">
                                            <img alt="user" class="media-object" src="../images/avtar/user3.png">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>Brice Rodriquez</strong></h5>
                                            <p class="text-muted no-margn">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a href="#" class="pull-left user-status invisibled">
                                            <img alt="user" class="media-object" src="../images/avtar/user4.png">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>Garfield Abbott</strong></h5>
                                            <p class="text-muted no-margn">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                            <div class="media">
                                                <a href="#" class="pull-left user-status online">
                                                    <img alt="user" class="media-object" src="../images/avtar/user5.png">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading"><strong>Wilbert Melton</strong></h5>
                                                    <p class="text-muted no-margn">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a href="#" class="pull-left user-status online">
                                                    <img alt="user" class="media-object" src="../images/avtar/user6.png">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading"><strong>Felecia Oconnell</strong></h5>
                                                    <p class="text-muted no-margn">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a href="#" class="pull-left online">
                                            <img alt="user" class="media-object" src="../images/avtar/user.png">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>Media heading</strong></h5>
                                            <p class="text-muted no-margn">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <div class="panel-footer">
                                <form role="form">
                                    <div class="input-group">
                                        <input type="text" placeholder="Message here..." class="form-control" data-ng-model="todoText">
                                        <span class="input-group-btn">
                                    <button type="submit" class=" btn-success btn">Send</button>
                                  </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Messages Tab Ends -->


                        <div class="panel panel-default padd-t-sm tab-pane tabs-up" id="appointments">

                            <div class="panel-heading clean clearfix text-center">
                                <div class="btn-group pull-left">
                                    <button class="btn btn-default btn-sm" data-calendar-nav="prev">&lt; Prev</button>
                                    <button class="btn btn-sm btn-default" data-calendar-nav="today">Today</button>
                                    <button class="btn btn-sm btn-default" data-calendar-nav="next">Next &gt;</button>
                                </div>
                                <b class="calender-title"></b>
                                <div class="btn-group pull-right">
                                    <button class="btn btn-sm btn-default" data-calendar-view="year">Year</button>
                                    <button class="btn btn-sm btn-default active" data-calendar-view="month">Month</button>
                                    <button class="btn btn-sm btn-default" data-calendar-view="week">Week</button>
                                    <button class="btn btn-sm btn-default" data-calendar-view="day">Day</button>
                                </div>
                            </div>

                            <div class="panel-body">
                                <div id="calendar"></div>
                            </div>

                        </div>
                        <!-- Calendar Tab Ends -->


                        <div class="panel panel-default tab-pane tabs-up" id="activities">
                            <div class="panel-body">
                                <ul class="activities-list list-unstyled nicescroll">
                                    <li class="default-activity">
                                        <span class="time">moments ago</span>
                                        <p><a href="#">Akshay</a> commented your post.</p>
                                        <div class="btn-group btn-group-xs activity-actions">
                                            <button type="button" class="btn btn-default btn-xs">Actions</button>
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="info-activity">
                                        <span class="time">min ago</span>
                                        <p class="text-info">Call to customer Jacob and discuss the detail.</p>
                                        <div class="btn-group btn-group-xs activity-actions">
                                            <button type="button" class="btn btn-default">Actions</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="warning-activity">
                                        <span class="time">10mins ago</span>
                                        <p class="text-warning">Jessi assign you a <span class="label label-info">task Mockup</span> Design.</p>
                                        <div class="btn-group btn-group-xs activity-actions">
                                            <button type="button" class="btn btn-default">Actions</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="default-activity">
                                        <span class="time">8hrs ago</span>
                                        <p>Integer ut consequat nulla. Etiam aliquam</p>
                                        <div class="btn-group  btn-group-xs activity-actions">
                                            <button type="button" class="btn btn-default">Actions</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="danger-activity">
                                        <span class="time">9hrs ago</span>
                                        <p>Lorem ipsum dolor sit amet, <span class="label label-success">consectetur</span> adi...</p>
                                        <div class="btn-group btn-group-xs activity-actions">
                                            <button type="button" class="btn btn-default">Actions</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="success-activity">
                                        <span class="time">Thu, 28 Jan</span>
                                        <p>Nam pretium id sem ut convallis. </p>
                                        <div class="btn-group btn-group-xs activity-actions">
                                            <button type="button" class="btn btn-default">Actions</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="primary-activity">
                                        <span class="time">Wed, 17 Jan</span>
                                        <p class="text-purple">Maecenas finibus est eget neque pharetra.</p>
                                        <div class="btn-group btn-group-xs activity-actions">
                                            <button type="button" class="btn btn-default">Actions</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="default-activity">
                                        <span class="time">Tue, 23 Jan</span>
                                        <p>Integer ut consequat nulla. Etiam aliquam...</p>
                                        <div class="btn-group btn-group-xs activity-actions">
                                            <button type="button" class="btn btn-default">Actions</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
        <!-- Warper Ends Here (working area) -->


        <footer class="container-fluid footer">
            Copyright &copy; 2014 <a href="http://freakpixels.com/" target="_blank">FreakPixels</a>
            <a href="#" class="pull-right scrollToTop"><i class="fa fa-chevron-up"></i></a>
        </footer>


    </section>
    <!-- Content Block Ends Here (right box)-->
@endsection

@section('scripts')
    <!-- Globalize -->
    <script src="../js/globalize/globalize.min.js"></script>

    <!-- NanoScroll -->
    <script src="../js/plugins/nicescroll/jquery.nicescroll.min.js"></script>

    <!-- Chart JS -->
    <script src="../js/plugins/DevExpressChartJS/dx.chartjs.js"></script>
    <script src="../js/plugins/DevExpressChartJS/world.js"></script>
    <!-- For Demo Charts -->
    <script src="../js/plugins/DevExpressChartJS/demo-charts.js"></script>
    <script src="../js/plugins/DevExpressChartJS/demo-vectorMap.js"></script>

    <!-- Sparkline JS -->
    <script src="../js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- For Demo Sparkline -->
    <script src="../js/plugins/sparkline/jquery.sparkline.demo.js"></script>

    <!-- Angular JS -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.14/angular.min.js"></script> -->

    <!-- ToDo List Plugin -->
    <script src="../js/angular/todo.js"></script>

    <!-- Calendar JS -->
    <script src="../js/plugins/calendar/calendar.js"></script>
    <!-- Calendar Conf -->
    <script src="../js/plugins/calendar/calendar-conf.js"></script>
    <!-- Custom JQuery -->
    <script src="../js/app/custom.js" type="text/javascript"></script>
@endsection

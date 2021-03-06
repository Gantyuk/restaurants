<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel | </title>

    <!-- Bootstrap -->
    <link href="/admin_asset/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin_asset/css/dropzone.min.css" rel="stylesheet">
    <link href="/admin_asset/css/check.box.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/admin_asset/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/admin_asset/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/admin_asset/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="/admin_asset/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="/admin_asset/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="/admin_asset/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="/admin_asset/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="/admin_asset/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/admin_asset/build/css/custom.min.css" rel="stylesheet">
    <script src="/admin_asset/js/jquery.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCqe3b2zbkqIgwb8CtpJfAWW1KCeiUQhGM&libraries=places"
            type="text/javascript"></script>
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/admin" class="site_title"><i class="fa fa-paw"></i> <span>Restaurants!</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{Auth::user()->path_img}}" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>John Doe</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="/admin"><i class="fa fa-home"></i>Home</a></li>

                            <li><a><i class="fa fa-cutlery"></i> Restaurant <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/admin/restaurant">Show all restaurants</a></li>
                                    <li><a href="/admin/restaurant/create">Create new restaurant</a></li>
                                    <li><a href="/admin/restaurant/category">Create new category</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-users"></i> User <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/admin/user">Show all Users</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Change profil">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="/admin/logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{Auth::user()->path_img}}" alt="">{{Auth::user()->first_name}}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="/user/{{Auth::user()->id}}">Change profile</a></li>

                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="/admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
               Created by "OurTeam" <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="/admin_asset/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/admin_asset/js/bootstrap.min.js"></script>
<!--FastClick -->
<script src="/admin_asset/js/fastclick.js"></script>
<!--NProgress -->
<script src="/admin_asset/js/nprogress.js"></script>
<!-- bootstrap-progressbar -->



<script src="/admin_asset/js/bootstrap-progressbar.min.js"></script>
<script src="/admin_asset/js/switchery.min.js"></script>

<script src="/admin_asset/js/bootstrap-wysiwyg.min.js"></script>
<script src="/admin_asset/js/jquery.hotkeys.js"></script>
<!--&lt;!&ndash; Select2 &ndash;&gt;-->
<script src="/admin_asset/js/jquery.tagsinput.js"> </script>

<script src="/admin_asset/js/custom.min.js"></script>

</body>
</html>

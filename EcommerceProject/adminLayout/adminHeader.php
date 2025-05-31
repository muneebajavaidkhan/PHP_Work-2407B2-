<?php  session_start();

if(!isset($_SESSION['Email'])) {
    header('location:../Register/login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./dist/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/modules/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="./dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

    <link rel="stylesheet" href="./dist/modules/summernote/summernote-lite.css">
    <link rel="stylesheet" href="./dist/modules/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="./dist/css/demo.css">
    <link rel="stylesheet" href="./dist/css/style.css">
</head>

<body>
    <div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="ion ion-navicon-round"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="ion ion-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn" type="submit"><i class="ion ion-search"></i></button>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link notification-toggle nav-link-lg beep"><i
                                class="ion ion-ios-bell-outline"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Notifications
                                <div class="float-right">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <img alt="image" src="./dist/img/avatar/avatar-1.jpeg"
                                        class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                        <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                        <div class="time">10 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <img alt="image" src="./dist/img/avatar/avatar-2.jpeg"
                                        class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                        <b> <?php echo $_SESSION['Name']; ?></b> has moved task <b>Fix bug footer</b> to
                                        <b>Progress</b>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img alt="image" src="./dist/img/avatar/avatar-3.jpeg"
                                        class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                        <b>Agung Ardiansyah</b> has moved task <b>Fix bug sidebar</b> to <b>Done</b>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img alt="image" src="./dist/img/avatar/avatar-4.jpeg"
                                        class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                        <b>Ardian Rahardiansyah</b> has moved task <b>Fix bug navbar</b> to <b>Done</b>
                                        <div class="time">16 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img alt="image" src="./dist/img/avatar/avatar-5.jpeg"
                                        class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                        <b>Alfa Zulkarnain</b> has moved task <b>Add logo</b> to <b>Done</b>
                                        <div class="time">Yesterday</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg">
                            <i class="ion ion-android-person d-lg-none"></i>
                            <div class="d-sm-none d-lg-inline-block">Hi,<?php echo $_SESSION['Name']?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="profile.html" class="dropdown-item has-icon">
                                <i class="ion ion-android-person"></i> Profile
                            </a>
                            <a href="../Register/logout.php" class="dropdown-item has-icon">
                                <i class="ion ion-log-out"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
    <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">Stisla Lite</a>
                    </div>
                    <div class="sidebar-user">
                        <div class="sidebar-user-picture">
                            <img alt="image" src="./dist/img/avatar/avatar-1.jpeg">
                        </div>
                        <div class="sidebar-user-details">
                            <div class="user-name"><?php echo $_SESSION['Name']?></div>
                            <div class="user-role">
                                Administrator
                            </div>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="active">
                            <a href="index.html"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
                        </li>

                        <li class="menu-header">List of Data</li>
                        <li>
                            <a href="#" class="has-dropdown"><i
                                    class="ion ion-ios-albums-outline"></i><span>Category</span></a>
                            <ul class="menu-dropdown">
                                <li><a href="CategoryAdd.php"><i class="ion ion-ios-circle-outline"></i>Add Category</a></li>
                                <li><a href="categoryView.php"><i class="ion ion-ios-circle-outline"></i> View Categories</a></li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-dropdown"><i
                                    class="ion ion-ios-albums-outline"></i><span>Products</span></a>
                            <ul class="menu-dropdown">
                                <li><a href="prodAdd.php"><i class="ion ion-ios-circle-outline"></i>Add Products</a></li>
                                <li><a href="prodView.php"><i class="ion ion-ios-circle-outline"></i> View Products</a></li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>Icons</span></a>
                            <ul class="menu-dropdown">
                                <li><a href="ion-icons.html"><i class="ion ion-ios-circle-outline"></i> Ion Icons</a>
                                </li>
                                <li><a href="fontawesome.html"><i class="ion ion-ios-circle-outline"></i> Font
                                        Awesome</a></li>
                                <li><a href="flag.html"><i class="ion ion-ios-circle-outline"></i> Flag</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="table.html"><i class="ion ion-clipboard"></i><span>Tables</span></a>
                        </li>
                        <li>
                            <a href="chartjs.html"><i class="ion ion-stats-bars"></i><span>Chart.js</span></a>
                        </li>
                        <li>
                            <a href="simple.html"><i class="ion ion-ios-location-outline"></i><span>Google
                                    Maps</span></a>
                        </li>
                        <li>
                            <a href="#" class="has-dropdown"><i
                                    class="ion ion-ios-copy-outline"></i><span>Examples</span></a>
                            <ul class="menu-dropdown">
                                <li><a href="login.html"><i class="ion ion-ios-circle-outline"></i> Login</a></li>
                                <li><a href="register.html"><i class="ion ion-ios-circle-outline"></i> Register</a></li>
                                <li><a href="forgot.html"><i class="ion ion-ios-circle-outline"></i> Forgot Password</a>
                                </li>
                                <li><a href="reset.html"><i class="ion ion-ios-circle-outline"></i> Reset Password</a>
                                </li>
                                <li><a href="404.html"><i class="ion ion-ios-circle-outline"></i> 404</a></li>
                            </ul>
                        </li>

                        <li class="menu-header">More</li>
                        <li>
                            <a href="#" class="has-dropdown"><i class="ion ion-ios-nutrition"></i> Click Me</a>
                            <ul class="menu-dropdown">
                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Menu 1</a></li>
                                <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Menu
                                        2</a>
                                    <ul class="menu-dropdown">
                                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                                        <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i>
                                                Child Menu 3</a>
                                            <ul class="menu-dropdown">
                                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu
                                                        1</a></li>
                                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu
                                                        2</a></li>
                                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu
                                                        3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="ion ion-heart"></i> Badges <div class="badge badge-primary">10</div>
                                </a>
                        </li>
                        <li>
                            <a href="credits.html"><i class="ion ion-ios-information-outline"></i> Credits</a>
                        </li>
                    </ul>
                    <div class="p-3 mt-4 mb-4">
                        <a href="http://stisla.multinity.com/"
                            class="btn btn-danger btn-shadow btn-round has-icon has-icon-nofloat btn-block">
                            <i class="ion ion-help-buoy"></i>
                            <div>Go PRO!</div>
                        </a>
                    </div>
                </aside>
            </div>


    <script src="./dist/modules/jquery.min.js"></script>
    <script src="./dist/modules/popper.js"></script>
    <script src="./dist/modules/tooltip.js"></script>
    <script src="./dist/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="./dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
    <script src="./dist/js/sa-functions.js"></script>

    <script src="./dist/modules/chart.min.js"></script>
    <script src="./dist/modules/summernote/summernote-lite.js"></script>


    <script src="./dist/js/scripts.js"></script>
    <script src="./dist/js/custom.js"></script>
    <script src="./dist/js/demo.js"></script>
</body>

</html>
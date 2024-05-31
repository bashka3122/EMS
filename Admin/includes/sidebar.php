<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>EMS System</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />

</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">EMS System</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">

                    <div class="user-info">
                        <span class="user-name">
                            <strong><?php echo $_SESSION['userEmail']; ?></strong>
                        </span>
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="index.php">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Dashboard</span>

                            </a>

                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Budgeting</span>
                                <span class="badge badge-pill badge-danger">2</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">new Budget

                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Manage Budgets</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="far fa-gem"></i>
                                <span>Accounts</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="newAccount.php">New Account</a>
                                    </li>
                                    <li>
                                        <a href="manageAccount.php">Manage Accounts</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-chart-line"></i>
                                <span>Expense </span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">New Expense</a>
                                    </li>
                                    <li>
                                        <a href="#">Manage Expense</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-globe"></i>
                                <span>Users</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">New Users</a>
                                    </li>
                                    <li>
                                        <a href="#">Manage Users</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Reports</span>
                                <span class="badge badge-pill badge-primary">Beta</span>
                            </a>
                        </li>


                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">

                <a href="includes/logout.php">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->




        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- page-wrapper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>


        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
            jQuery(function($) {

                $(".sidebar-dropdown > a").click(function() {
                    $(".sidebar-submenu").slideUp(200);
                    if (
                        $(this)
                        .parent()
                        .hasClass("active")
                    ) {
                        $(".sidebar-dropdown").removeClass("active");
                        $(this)
                            .parent()
                            .removeClass("active");
                    } else {
                        $(".sidebar-dropdown").removeClass("active");
                        $(this)
                            .next(".sidebar-submenu")
                            .slideDown(200);
                        $(this)
                            .parent()
                            .addClass("active");
                    }
                });

                $("#close-sidebar").click(function() {
                    $(".page-wrapper").removeClass("toggled");
                });
                $("#show-sidebar").click(function() {
                    $(".page-wrapper").addClass("toggled");
                });




            });
        </script>
</body>

</html>
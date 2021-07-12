<?php
session_start();
include('./scheduling/admin/db_connect.php');
if (strlen($_SESSION['company_email']) == 0) {
    header('location: ../../../login.php');
} else {


?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Ringo HR</title>
        <link rel="icon" href="../../imageFolder/1543.png">

        <!-- Custom fonts for this template -->
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">



        <!-- Custom styles for this template-->
        <link href="../../cssFolder/sb-admin-2.min.css" rel="stylesheet">
        <link href="../../cssFolder/role.css" rel="stylesheet">
        <style>
            #regForm {
                background-color: #ffffff;
                margin: 0px auto;
                font-family: Raleway;
                padding: 40px;
                border-radius: 10px
            }

            #register {
                color: #6A1B9A
            }


            input {
                padding: 10px;
                width: 100%;
                font-size: 17px;
                font-family: Raleway;
                border: 1px solid #aaaaaa;
                border-radius: 10px;
                -webkit-appearance: none
            }
        </style>
    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./scheduling/admin/index.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <img src="../../imageFolder/hrIcon.png" width="60" height="50" class="d-inline-block align-top" alt="pic">
                    </div>
                    <div class="sidebar-brand-text mx-3">RINGO HR</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item ">
                    <a class="nav-link text-white" href="./scheduling/admin/index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">



                <!-- Nav Item - Pages Collapse Menu -->

                <li class="nav-item active">
                    <a class="nav-link text-white collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-user-cog"></i>
                        <span>Employees</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item " href="employees.php">All Employees</a>
                            <a class="collapse-item " href="roleSettings .php">Roles</a>
                            <a class="collapse-item" href="BranchSettings.php">Company Branch</a>
                            <a class="collapse-item" href="deptSettings.php">Departments</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item ">
        <a class="nav-link text-white" href="./manageLeave.php">
        <i class="fab fa-artstation"></i>
          <span>Leave Mangement</span></a>
      </li>
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">


                <li class="nav-item ">
                    <a class="nav-link text-white" href="profile.php">
                        <i class="far fa-user"></i>
                        <span>Profile</span></a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link text-white" href="settings.php">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Settings</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
                <li class="nav-item ">
                    <a class="nav-link text-white" href="../login.php">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span></a>
                </li>
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>


                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">

                                        ADMIN

                                    </span>
                                    <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->


                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>


                    <!-- Logout Modal-->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                                    <form action="logout.php" method="POST">

                                        <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Begin Page Content -->
                    <div class="container">
                        <div class="col-md-12">
                            <div class="page-title">Add employee</div>
                        </div>
                        <div class="card-body">
                            <h1 class="pt-4 pb-4">Employee Info</h1>
                            <form method="post" action="../../includeFolder/regFuction.php">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Full Name</label>
                                            <input type="text" name="fname" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Password</label>
                                            <input type="password" name="epassword" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email address</label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Gender </label>
                                            <select name="gender" class="form-control">
                                                <option value="">Gender...</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Birthday</label>
                                            <input type="date" name="birthday" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Address </label>
                                            <input type="text" name="addr" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Mobile</label>
                                            <input type="text" name="mobile" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Select Department </label>
                                            <select name="dept" name="dept" class="form-control">
                                                <option value="">dept...</option>
                                                <?php
                                                $query = $conn->query("SELECT * FROM department ");
                                                while ($row = $query->fetch_array()) :
                                                ?>
                                                    <option><?php echo ucwords($row['deptname']) ?></option>
                                                <?php endwhile; ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Select Role</label>
                                            <select name="role" class="form-control">
                                                <option value="">role...</option>
                                                <?php
                                                $role = $conn->query("SELECT * FROM tbrole");
                                                while ($row = $role->fetch_array()) :
                                                ?>
                                                    <option><?php echo ucwords($row['role']) ?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Employee Picture</label>
                                            <input type="file" name="pic" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="create" class="btn mt-3 btn-primary">Create Employee</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>



                </div>

                <!-- Content Row -->


                <script src="../../vendor/jquery/jquery.min.js"></script>
                <script src="../../vendor/popper/popper.min.js"></script>
                <script src="../../vendor/bootstrap/bootstrap.min.js"></script>

                <!-- Core plugin JavaScript-->


                <!-- Custom scripts for all pages-->
                <script src="../../vendor/sb-admin-2.min.js"></script>


                <!-- <?php



                        ?> -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->


    </body>

    </html>

<?php } ?>
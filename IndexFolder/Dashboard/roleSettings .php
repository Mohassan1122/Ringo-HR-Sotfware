<?php
session_start();

include('./scheduling/admin/db_connect.php');
if (strlen($_SESSION['company_email']) == 0) {
    header('location: ../../../login.php');
} else {
    // code for Inactive  employee    
    if (isset($_GET['inid'])) {
        $id = $_GET['inid'];
        $sql = "DELETE FROM tbrole WHERE id=$id";
        mysqli_query($conn, $sql);
        header('location:./roleSettings.php');
    }

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
            .page-title {
                color: #1f1f1f;
                font-size: 26px;
                font-weight: 500;
                margin-bottom: 5px;
            }

            .page-header .breadcrumb {
                background-color: transparent;
                color: #6c757d;
                font-size: 1rem;
                font-weight: 500;
                margin-bottom: 0;
                padding: 0;
            }

            .page-header .breadcrumb a {
                color: black;
            }

            .add-btn {

                color: #fff;
                float: right;
                font-weight: 500;
                min-width: 140px;
            }

            .add-btn i {
                margin-right: 5px;
            }

            .add-btn i {
                margin-right: 5px;
            }

            .add-btn {
                font-size: 14px;
                min-width: inherit;
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
                                        <span aria-hidden="true">??</span>
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
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="page-header">
                                        <div class="row align-items-center ">
                                            <div class="col">
                                                <h3 class="page-title">Role</h3>
                                                <ul class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                                    <li class="breadcrumb-item active">Role</li>
                                                </ul>
                                            </div>
                                            <div class="col-auto float-right ml-auto">
                                                <a href="addRole.php" class="btn btn-primary add-btn"><i class="fa fa-plus"></i> Add Designation</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mt-5">

                                        <table class="table table-striped mt-5">
                                            <thead>
                                                <tr>

                                                    <th scope="col">Role</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">Date Created</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <?php
                                                $faculty = $conn->query("SELECT * FROM tbrole ");
                                                while ($result = $faculty->fetch_array()) :
                                                ?>
                                                    <tr>
                                                        <th><?php echo ucwords($result['role']) ?> </th>
                                                        <td><?php echo htmlentities($result['dept']); ?></td>
                                                        <td><?php echo htmlentities($result['created_at']); ?></td>

                                                        <td><a href="./editRoles.php?empid=<?php echo htmlentities($result['id']); ?>"><i class="fas fa-edit"></i></a>

                                                            <a href="./roleSettings.php?inid=<?php echo htmlentities($result['id']); ?>" onclick="return confirm('Are you sure you want remove department?');"" > <i class=" fas fa-trash-alt"></i>


                                                        </td>
                                                    </tr>

                                                <?php endwhile; ?>






                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                            </div>

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


                        $connection = mysqli_connect("localhost", "root", "", "adminpanel");

                        if (isset($_POST['registerbtn'])) {
                            $username = $_POST['username'];
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            $confirm_password = $_POST['confirmpassword'];

                            if ($password === $confirm_password) {
                                $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
                                $query_run = mysqli_query($connection, $query);

                                if ($query_run) {
                                    echo "done";
                                    $_SESSION['success'] =  "Admin is Added Successfully";
                                    header('Location: register.php');
                                } else {
                                    echo "not done";
                                    $_SESSION['status'] =  "Admin is Not Added";
                                    header('Location: register.php');
                                }
                            } else {
                                echo "pass no match";
                                $_SESSION['status'] =  "Password and Confirm Password Does not Match";
                                header('Location: register.php');
                            }
                        }

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
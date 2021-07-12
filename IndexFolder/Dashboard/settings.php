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
                <a class="nav-link " href="CompanySettings.php">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Company Settings</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link " href="profie.php">
                    <i class="far fa-user"></i>
                    <span>Profile Settings</span></a>
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
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">RINGO HR</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Main -->
                        <main role="main" class="col-md-9 col-lg-10 px-4">
                            <h3 class="p-3"><i class="fas fa-cog"></i> Company Settings</h3>
                            <div class=" shadow mb-4 mt-4 p-2 bg-light">
                                <p>UPDATE ORGANIZATION SETTINGS</p>
                            </div>

                            <form class="row mt-3 p-5">
                                <div class="col-md-4">
                                    <label for="validationDefault01" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="validationDefault01" value="My Company" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefault02" class="form-label">Company Email</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="validationDefault02" value="company@email.com" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefaultUsername" class="form-label">Company Phone</label>
                                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" value="07034567890" required>

                                </div>

                                <div class="col-md-9 mt-4 mb-4">
                                    <label for="validationTextarea" class="form-label">Company Address</label>
                                    <textarea class="form-control " id="validationTextarea" placeholder="Company address" required></textarea>

                                </div>

                                <div class="col-md-6">
                                    <label for="validationDefault01" class="form-label">Country</label>
                                    <input type="text" class="form-control" id="validationDefault01" placeholder="country..." required>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationDefault01" class="form-label">State</label>
                                    <input type="text" class="form-control" id="validationDefault01" placeholder="state..." required>
                                </div>
                                <div class="col-md-12 mt-4 mb-4">
                                    <div class="col-md-6">
                                        <label for="inputZip" class="form-label">City</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4 mb-4">
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">Default system language</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="col-md-6">
                                        <label for="inputState" class="form-label">Time zone</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 mt-4 mb-4">
                                    <label for="inputZip" class="form-label">Time format</label>
                                    <div class="form-check">

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                12-hour (3:00 PM)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                24-hour (15:00)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>



                        </main>
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
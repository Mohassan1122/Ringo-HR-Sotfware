<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ringo HR</title>
    <link rel="icon" href="../../imageFolder/1543.png">

    <!-- Custom fonts for this template -->
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="../../cssFolder/bootstrap-5.0.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../cssFolder/index.css" rel="stylesheet">

</head>


<body>

    <nav class="navbar navbar-dark bg-primary fixed-top flex-md-nowrap p-0 shadow">
        <!-- Navbar content -->
        <div class="container-fluid">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0">Navbar</a>
            <input class="form-control form-control-primary w-100" type="text" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link " aria-current="page" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- sidebar -->
            <div class="col-md-2 bg-light d-none d-md-block sidebar">
                <div class="left-sidebar">

                    <ul class="nav flex-column sidebar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><i class="far fa-building"></i> Company Settings</a>
                        </li>

                        </li>
                    </ul>
                </div>

            </div>

            <!-- Main -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h3 class="p-3"><i class="fas fa-cog"></i> Company Settings</h3>
                <div class=" shadow mb-4 mt-4 p-2 bg-light">
                    <p>UPDATE ORGANIZATION SETTINGS</p>
                </div>

                <form class="row g-3 mt-3 p-5">
                    <div class="col-md-4">
                        <label for="validationDefault01" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Company Email</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
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

                    <div class="col-md-6 mt-4">
                        <label for="inputCity" class="form-label">Country</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4 mt-4">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-2 mt-4 mb-4">
                        <label for="inputZip" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-md-6 mt-4 mb-4">
                        <label for="inputCity" class="form-label">Default system language</label>
                        <input type="text" class="form-control" id="inputCity">
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
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </form>

            </main>
        </div>

    </div>


    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../vendor/bootstrap/bootstrap.min.js"></script>
    <!-- Argon JS -->
    <script src="../vendor/argon.js?v=1.0.0"></script>

</body>

</html>
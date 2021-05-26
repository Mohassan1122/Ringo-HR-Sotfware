<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ringo HR</title>
    <link rel="icon" href="../imageFolder/1543.png">



    <!-- Custom fonts for this template -->
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="../cssFolder/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="../cssFolder/argon.css?v=1.0.0" rel="stylesheet">
    <link type="text/css" href="../cssFolder/argon.min.css" rel="stylesheet">
    <link href="../cssFolder/nucleo.css" rel="stylesheet">

    <!-- alart action -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>




</head>


<body>

    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-light  fixed-top" id="mainNav">
        <div class="container text-dark ">

            <div class="navbar-header">

                <a class="navbar-brand" href="index.php"><img src="../imageFolder/Capture2.PNG" width="100" height="60" class="d-inline-block align-top" alt=""></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        Already have a Ringo HR account?<a class="text-white" href="login.php"> Signin</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>


    <main>
        <section class="section section-shaped section-lg my-0">
 <div class="shape shape-style-1 bg-gradient-teal">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
       
      </div>
            <div class="container pt-lg-md">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card bg-secondary shadow border-0">

                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="text-center text-dark mb-4">
                                    <small>Sign up with credentials</small>
                                </div>
                                <form method="post" action="../function/regFuction.php">
                                    <!-- <?php include('../include/error.php'); ?>
                                    <?php include('../include/success.php'); ?> -->
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Full Name" name="name" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-envelope"></i></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Email" type="email" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative" id="show_hide_password">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                            </div>

                                            <input class="form-control pwd" placeholder="Password" type="password" name="user_password">
                                            <span class="input-group-btn">
                                                <button class="btn reveal" type="button"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-building"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Company Name" type="text" name="cname">
                                        </div>
                                    </div>


                                    <div class="row my-2">
                                        <div class="col-12">
                                            <div class="custom-control custom-control-alternative custom-checkbox">
                                                <input class="custom-control-input" name="check" id="customCheckRegister" type="checkbox">
                                                <label class="custom-control-label" for="customCheckRegister">
                                                    <span>I agree with the
                                                        <a href="#">Privacy Policy</a>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" name="button" class="btn btn-primary mt-4">Create account</button>
                                    </div>
                                </form>

                                <div class="container p-3">
                                    <div class="text-dark text-center mb-3">
                                        <small>Alternative Signup option</small>
                                    </div>
                                    <div class="row">
                                        <div class="col-5 mr-3">
                                            <a href="#" class="btn btn-neutral btn-icon">
                                                <span class="btn-inner--icon">
                                                    <img src="../imageFolder/google.svg">
                                                </span>
                                                <span class="btn-inner--text">Google</span>
                                            </a>
                                        </div>
                                        <div class="col-5 ml-3">
                                            <a href="#" class="btn btn-neutral btn-icon">
                                                <span class="btn-inner--icon">
                                                    <img src="../imageFolder/linkIN.png">
                                                </span>
                                                <span class="btn-inner--text">LinkedIn</span>
                                            </a>
                                        </div>
                                    </div>



                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
   
    </footer>

    <script>
        $(".reveal").on('click', function() {
            var $pwd = $(".pwd");
            if ($pwd.attr('type') === 'password') {
                $pwd.attr('type', 'text');
            } else {
                $pwd.attr('type', 'password');
            }
        });
    </script>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../vendor/bootstrap/bootstrap.min.js"></script>
    <script src="../vendor/headroom/headroom.min.js"></script>
    <!-- Argon JS -->
    <script src="../vendor/argon.js?v=1.0.0"></script>
</body>

</html>
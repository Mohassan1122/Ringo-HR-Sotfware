<?php include('../function/loginfunc.php') ?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ringo HR</title>
  <link rel="icon" href="../imagies/1543.png">



  <!-- Custom fonts for this template -->
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="../css/argon.css?v=1.0.0" rel="stylesheet">
  <link type="text/css" href="../css/argon.min.css" rel="stylesheet">
  <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/nucleo/css/nucleo.css" rel="stylesheet">


  <!-- alart action -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</head>


<body>

  <!-- Navigation -->
  <?php include '../include/navBar.php'; ?>

  <main>
    <section class="section section-shaped section-lg my-0">

      <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-primary pb-5">
                <div class="text-muted text-center mb-3">
                  <small>Sign in with</small>
                </div>
                <div class="btn-wrapper text-center">
                  <a href="#" class="btn btn-neutral btn-icon">
                    <span class="btn-inner--icon">
                      <img src="../imagies/github.svg">
                    </span>
                    <span class="btn-inner--text">Github</span>
                  </a>
                  <a href="#" class="btn btn-neutral btn-icon">
                    <span class="btn-inner--icon">
                      <img src="../imagies/google.svg">
                    </span>
                    <span class="btn-inner--text">Google</span>
                  </a>
                </div>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>Or sign in with credentials</small>
                </div>
                <form method="post" action="../function/loginFunc.php">
                  <?php include('../include/error.php'); ?>

                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control" placeholder="Email" type="email" name="email">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group-alternative" id="show_hide_password">
                   

                      <input class="form-control pwd" placeholder="Password" type="password" name="user_password">
                      <span class="input-group-btn">
                        <button class="btn reveal" type="button"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
                      </span>
                    </div>
                  </div>


                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                    <label class="custom-control-label" for=" customCheckLogin">
                      <span>Remember me</span>
                    </label>
                  </div>
                  <div class="text-center">
                    <button type="submit" name="login" class="btn btn-primary my-4">Sign in</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-6">
                <a href="#" class="text-primary">
                  <small>Forgot password?</small>
                </a>
              </div>
              <div class="col-6 text-right">
                <a href="register.php" class="text-primary">
                  <small>Create new account</small>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- footer -->
  <?php include '../include/footer.php'; ?>


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
  <!-- Core -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/popper/popper.min.js"></script>
  <script src="../assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="../assets/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.0.0"></script>


</body>

</html>
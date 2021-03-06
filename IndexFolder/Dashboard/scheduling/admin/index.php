<?php
session_start();
error_reporting(0);
include('./db_connect.php');
	if(strlen($_SESSION['company_email'])==0){
		header('location: ../../../login.php');
	}
else{
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ringo HR</title>
  <link rel="icon" href="../../../../imageFolder/1543.png">


  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <title>Ringo HR</title>
  <link rel="icon" href="../../../../imageFolder/1543.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="./assets/font-awesome/css/all.min.css">


  <!-- Vendor CSS Files -->
  <link href="../../../../cssFolder/bootstrap-5.0.1-dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="./assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="./assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="./assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="./assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link href="./assets/DataTables/datatables.min.css" rel="stylesheet">
  <link href="./assets/css/jquery.datetimepicker.min.css" rel="stylesheet">
  <link href="./assets/fullcalendar/main.css" rel="stylesheet">
  <link href="./assets/css/select2.min.css" rel="stylesheet">

  <link href="../../../../cssFolder//sb-admin-2.min.css" rel="stylesheet">
  
  

  <!-- Template Main CSS File -->
  <link href="./assets/css/style.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="./assets/css/jquery-te-1.4.0.css">

  <script src="./assets/vendor/jquery/jquery.min.js"></script>
  <script src="./assets/DataTables/datatables.min.js"></script>
  <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="./assets/vendor/php-email-form/validate.js"></script>
  <script src="./assets/vendor/venobox/venobox.min.js"></script>
  <script src="./assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="./assets/vendor/counterup/counterup.min.js"></script>
  <script src="./assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="./assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript" src="./assets/js/select2.min.js"></script>
  <script type="text/javascript" src="./assets/js/jquery.datetimepicker.full.min.js"></script>
  <script type="text/javascript" src="./assets/font-awesome/js/all.min.js"></script>
  <script type="text/javascript" src="./assets/fullcalendar/main.js"></script>
  <script type="text/javascript" src="./assets/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>





</head>
<style>
  body {
    background: #80808045;
  }

  .modal-dialog.large {
    width: 80% !important;
    max-width: unset;
  }

  .modal-dialog.mid-large {
    width: 50% !important;
    max-width: unset;
  }

  #viewer_modal .btn-close {
    position: absolute;
    z-index: 999999;
    /*right: -4.5em;*/
    background: unset;
    color: white;
    border: unset;
    font-size: 27px;
    top: 0;
  }

  #viewer_modal .modal-dialog {
    width: 80%;
    max-width: unset;
    height: calc(90%);
    max-height: unset;
  }

  #viewer_modal .modal-content {
    background: black;
    border: unset;
    height: calc(100%);
    display: flex;
    align-items: center;
    justify-content: center;
  }

  #viewer_modal img,
  #viewer_modal video {
    max-height: calc(100%);
    max-width: calc(100%);
  }

  .logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
  }

  .collapse a {
    text-indent: 10px;
  }

  nav#sidebar {
    background: url(./assets/uploads/<?php echo $_SESSION['system']['cover_img'] ?>) !important
  }
</style>

<script>
  $('#manage_my_account').click(function() {
    uni_modal("Manage Account", "manage_user.php?id=<?php echo $_SESSION['login_id'] ?>&mtype=own")
  })

  $('.nav_collapse').click(function() {
    console.log($(this).attr('href'))
    $($(this).attr('href')).collapse()
  })
  $('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>

<body id="page-top bg-light">


  <div id="wrapper">


    <ul class="navbar-nav bg-secondary sidebar mt-4 sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->


      <!-- Divider -->
      

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active " style="margin-top:100px;">
        <a class="nav-link mt-4" href="./index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">



      <!-- Nav Item - Pages Collapse Menu -->

      <li class="nav-item ">
        <a class="nav-link text-white collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-user-cog"></i>
          <span>Employees</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item " href="../../employees.php">All Employees</a>
            <a class="collapse-item " href="../../roleSettings .php">Roles</a>
            <a class="collapse-item" href="../../BranchSettings.php">Company Branch</a>
            <a class="collapse-item" href="../../deptSettings.php">Departments</a>
          </div>
        </div>
      </li>

      <li class="nav-item ">
        <a class="nav-link text-white" href="../../manageLeave.php">
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
        <a class="nav-link text-white" href="../../settings.php">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Settings</span></a>
      </li>
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item ">
        <a class="nav-link text-white" href="../../../Logout.php">
        <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>


    <nav class="navbar navbar-expand navbar-light mb-4 static-top fixed-top bg-white" style="padding:0;min-height: 3.5rem">
      <div class="container-fluid mt-2 mb-2">
        <div class="col-lg-12">
          <div class="col-md-1 float-left" style="display: flex;">

          </div>
          <div class="col-md-4 float-left text-darker">
            <large><b> <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                  <div class="sidebar-brand-icon rotate-n-15">
                    <img src="../../../../imageFolder/hrIcon.png" width="60" height="50" class="d-inline-block align-top" alt="pic">
                  </div>
                  <div class="sidebar-brand-text mx-3">RINGO HR</div>
                </a></b></large>
          </div>
          <div class="float-right">
            <div class=" dropdown mr-4">

            <?php 
            if (isset($_SESSION['company_email'])) {
              $company_email = $_SESSION['company_email'];
								$user = $conn->query("SELECT * FROM registration WHERE company_email = '$company_email' ");
								$row= $user->fetch_array();
							?>


              <a href="#" class="text-darker dropdown-toggle" id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $row['fullName'] ?> </a><?php } ?>
              <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
                <a class="dropdown-item" href="javascript:void(0)" id="manage_my_account"><i class="fa fa-cog"></i> Manage Account</a>
                <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> Logout</a>
              </div>
            </div>
          </div>
        </div>

    </nav>
  <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body text-white">
    </div>
  </div>
  <main id="view-panel" >
      <div class="container">
      <?php include 'schedule.php' ?>
      </div>
  	
  	

  </main>

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>

  <script src="../../../../vendor/sb-admin-2.min.js"></script>
</body>
<script>
	 window.start_load = function(){
    $('body').prepend('<di id="preloader2"></di>')
  }
  window.end_load = function(){
    $('#preloader2').fadeOut('fast', function() {
        $(this).remove();
      })
  }
 window.viewer_modal = function($src = ''){
    start_load()
    var t = $src.split('.')
    t = t[1]
    if(t =='mp4'){
      var view = $("<video src='"+$src+"' controls autoplay></video>")
    }else{
      var view = $("<img src='"+$src+"' />")
    }
    $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
    $('#viewer_modal .modal-content').append(view)
    $('#viewer_modal').modal({
            show:true,
            backdrop:'static',
            keyboard:false,
            focus:true
          })
          end_load()  

}
  window.uni_modal = function($title = '' , $url='',$size=""){
    start_load()
    $.ajax({
        url:$url,
        error:err=>{
            console.log()
            alert("An error occured")
        },
        success:function(resp){
            if(resp){
                $('#uni_modal .modal-title').html($title)
                $('#uni_modal .modal-body').html(resp)
                if($size != ''){
                    $('#uni_modal .modal-dialog').addClass($size)
                }else{
                    $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md")
                }
                $('#uni_modal').modal({
                  show:true,
                  backdrop:'static',
                  keyboard:false,
                  focus:true
                })
                end_load()
            }
        }
    })
}
window._conf = function($msg='',$func='',$params = []){
     $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
     $('#confirm_modal .modal-body').html($msg)
     $('#confirm_modal').modal('show')
  }
   window.alert_toast= function($msg = 'TEST',$bg = 'success'){
      $('#alert_toast').removeClass('bg-success')
      $('#alert_toast').removeClass('bg-danger')
      $('#alert_toast').removeClass('bg-info')
      $('#alert_toast').removeClass('bg-warning')

    if($bg == 'success')
      $('#alert_toast').addClass('bg-success')
    if($bg == 'danger')
      $('#alert_toast').addClass('bg-danger')
    if($bg == 'info')
      $('#alert_toast').addClass('bg-info')
    if($bg == 'warning')
      $('#alert_toast').addClass('bg-warning')
    $('#alert_toast .toast-body').html($msg)
    $('#alert_toast').toast({delay:3000}).toast('show');
  }
  $(document).ready(function(){
    $('#preloader').fadeOut('fast', function() {
        $(this).remove();
      })
  })
  $('.datetimepicker').datetimepicker({
      format:'Y/m/d H:i',
      startDate: '+3d'
  })
  $('.select2').select2({
    placeholder:"Please select here",
    width: "100%"
  })
</script>	
</html>
<?php }  ?>
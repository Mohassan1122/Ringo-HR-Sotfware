<?php
session_start();
require_once('../IndexFolder/Dashboard/scheduling/admin/db_connect.php');

$erorr = "";
$errorCount = 0;

// REGISTER USER
if (isset($_POST['button'])) {
    // receive all input values from the form
    $fullName = mysqli_real_escape_string($conn, $_POST['fullName']);
    $company_email = mysqli_real_escape_string($conn, $_POST['company_email']);
    $company_password = mysqli_real_escape_string($conn, $_POST['company_password']);
    $company_name = mysqli_real_escape_string($conn, $_POST['company_name']);
    $company_logo = mysqli_real_escape_string($conn, $_POST['company_logo']);


    // form validation: ensure that the form is correctly filled ...
    if (empty($_POST['fullName']) || empty($_POST['company_email']) || empty($_POST['company_password']) || empty($_POST['company_name']) || empty($_POST['company_logo'])){
        $error .= "<li>fill all fields</li>";
        $errorCount++;
    }
   
    if (!$_POST['check']) {
        $error .= "<li>You Must Agree to Terms and Condition</li>";
        $errorCount++;
    }

    // first check the database to make sure 
    // a user does not already exist with the same username and/or company_email
    $user_check_query = "SELECT * FROM registration WHERE fullName='$fullName' OR company_email='$company_email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['fullName'] === $fullName) {
            $error .= "<li>Full Name already exists</li>";
            $errorCount++;
        }


        if ($user['company_email'] === $company_email) {
            $error .= "<li>Company Email already exists</li>";
            $errorCount++;
        }
    } 
    if ($errorCount == 0) {
        $company_password = md5($company_password); //encrypt the password before saving in the database
        // Finally, register user if there are no errors in the form
        $query = "INSERT INTO registration (fullName, company_email, company_password, company_name, company_logo) 
  			  VALUES('$fullName', '$company_email', '$company_password', '$company_name', '$company_logo')";
        mysqli_query($conn, $query);
        header('location: ../indexFolder/register.php?success=' .$success);
    }
    if ($errorCount !== 0) {
        header("Location: ../indexFolder/register.php?error=" .$error);
        die();
    }
}


if (isset($_POST['create'])) {
    // receive all input values from the form
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $password = mysqli_real_escape_string($conn, $_POST['epassword']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
    $addr = mysqli_real_escape_string($conn, $_POST['addr']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $dept = mysqli_real_escape_string($conn, $_POST['dept']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $pic = mysqli_real_escape_string($conn, $_POST['pic']);

    

    // form validation: ensure that the form is correctly filled ...
    if (empty($_POST['fname']) || empty($_POST['epassword']) || empty($_POST['email']) || empty($_POST['gender']) || empty($_POST['birthday']) || empty($_POST['addr']) || empty($_POST['mobile']) || empty($_POST['dept']) || empty($_POST['role']) || empty($_POST['pic'])) {
        echo "<script>alert('fill all fields');</script>";
    }
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $check_query = "SELECT * FROM employee WHERE fname='$fname' OR email='$email' LIMIT 1";
    $result = mysqli_query($conn, $check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['fname'] === $fname) {
            echo "<script>alert('Full name already exists');</script>";
            
        }


        if ($user['email'] === $email) {
            echo "<script>alert('Email already exists');</script>";
           
        }
    }
    if ($errorCount == 0) {
        $password = md5($password); //encrypt the password before saving in the database
        // Finally, register user if there are no errors in the form
        
        $query = "INSERT INTO employee (fname, epassword, email, gender, birthday, addr, mobile, dept, role, pic) VALUES('$fname', '$password', '$email', '$gender', '$birthday', '$addr', '$mobile', '$dept', '$role', '$pic')";

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Asset Has Been Added');</script>";
        echo "<script>window.location.href='../indexFolder/Dashboard/employees.php';</script>";
        }else {
            echo mysqli_error($conn);
        }
    }

    if ($errorCount !== 0) {
        echo "<script>alert('Something Went Wrong Please try Again.');</script>";
        die();
    }
}



if (isset($_POST['ADD'])) {
    // receive all input values from the form
    $deptname = mysqli_real_escape_string($conn, $_POST['deptname']);
    $deptsht = mysqli_real_escape_string($conn, $_POST['deptsht']);
   
// echo $deptname;
// exit;
    

    // form validation: ensure that the form is correctly filled ...
    if (empty($_POST['deptname']) || empty($_POST['deptsht']) ) {
        echo "<script>alert('fill all fields');</script>";
    }
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $check_query = "SELECT * FROM department WHERE deptname='$deptname'";
    $result = mysqli_query($conn, $check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['deptname'] === $deptname) {
            echo "<script>alert('Department already exists');</script>";
            
        }
    }
        $query = "INSERT INTO department (deptname, deptsht) VALUES('$deptname', '$deptsht')";

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Asset Has Been Added');</script>";
        echo "<script>window.location.href='../indexFolder/Dashboard/deptSettings.php';</script>";
        }else {
            echo mysqli_error($conn);
        }
    }


    
    
if (isset($_POST['add'])) {
    // receive all input values from the form
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $dept = mysqli_real_escape_string($conn, $_POST['dept']);
   
// echo $role;
// exit;
    

    // form validation: ensure that the form is correctly filled ...
    if (empty($_POST['role']) || empty($_POST['dept']) ) {
        echo "<script>alert('fill all fields');</script>";
    }
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $check_query = "SELECT * FROM tbrole WHERE role='$role'";
    $result = mysqli_query($conn, $check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['role'] === $role) {
            echo "<script>alert('Role already exists');</script>";
            
        }
    }
        $query = "INSERT INTO tbrole (role, dept) VALUES('$role', '$dept')";

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Asset Has Been Added');</script>";
        echo "<script>window.location.href='../indexFolder/Dashboard/roleSettings.php';</script>";
        }else {
            echo mysqli_error($conn);
        }
    }







    if (isset($_POST['submit'])) {
        // receive all input values from the form
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
       
    // echo $city;
    // exit;
        
    
        // form validation: ensure that the form is correctly filled ...
        if (empty($_POST['city']) || empty($_POST['address']) ) {
            echo "<script>alert('fill all fields');</script>";
        }
        // first check the database to make sure 
        // a user does not already exist with the same username and/or email
        $check_query = "SELECT * FROM branch WHERE city='$city'";
        $result = mysqli_query($conn, $check_query);
        $user = mysqli_fetch_assoc($result);
    
        if ($user) { // if user exists
            if ($user['city'] === $city) {
                echo "<script>alert('city already exists');</script>";
                
            }
        }
            $query = "INSERT INTO branch (city, address) VALUES('$city', '$address')";
    
            $result = mysqli_query($conn, $query);
    
            if ($result) {
                echo "<script>alert('Asset Has Been Added');</script>";
            echo "<script>window.location.href='../indexFolder/Dashboard/BranchSettings.php';</script>";
            }else {
                echo mysqli_error($conn);
            }
        }
    








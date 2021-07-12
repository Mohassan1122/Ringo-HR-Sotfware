
<?php
session_start();
require_once('../IndexFolder/Dashboard/scheduling/admin/db_connect.php');

$error = "";
$errorCount = 0;

if (isset($_POST['login'])) {

    $company_email = mysqli_real_escape_string($conn, $_POST['company_email']);
    $password = mysqli_real_escape_string($conn, $_POST['company_password']);

    if (empty($_POST['company_email']) || empty($_POST['company_password'])) {
        $error .= "<li>fill all fields</li>";
        $errorCount++;
    }

    $query = "SELECT company_password FROM registration WHERE company_email='$company_email'";
    $results = mysqli_query($conn, $query);


    if (mysqli_error($conn)) {
        $error .= "connection failed";
        $errorCount++;
    }
    if (mysqli_num_rows($results) === 0) {
        $error .= "<li> Account does not Exist </li> ";
        $errorCount++;
    }

    $password = md5($password);
    $row = mysqli_fetch_array($results);
 

    if ($password == $row['company_password']) {

        $query2 = "SELECT * FROM registration WHERE company_email='$company_email' AND company_password='$password'";

        $result = mysqli_query($conn, $query2);

        if (mysqli_fetch_array($result)) {
            $_SESSION['company_email'] = $company_email;
            header("location: ../IndexFolder/Dashboard/scheduling/admin/index.php");
        }
        mysqli_close($conn);
    } else {
        $error .= "<li> password does not match    </li> ";
        $errorCount++;
    }
    if ($errorCount !== 0) {
        header('location: ../IndexFolder/login.php?error=' . $error);
        die();
    }
}


?>
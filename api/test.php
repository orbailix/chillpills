<?php

include("auth-register.php");
$cuser= new registration();




if (isset($_POST['register'])) {
    if ($cuser->validation($_POST['firstName'], 'name')) {
        $firstName = ucwords($cuser->test_input($_POST['firstName']));
    } else {
        header("Location: ../register.php?alert=FirstName");
        exit();
    };
    if ($cuser->validation($_POST['lastName'], 'name')) {
        $lastName = ucwords($cuser->test_input($_POST['lastName']));
    } else {
        header("Location: ../register.php?alert=lastName");
        exit();
    };
    if ($cuser->validation($_POST['email'], 'email')) {
        $email = $cuser->test_input($_POST['email']);
    } else {
        header("Location: ../register.php?alert=E-mail");
        exit();
    };
    if ($cuser->validation($_POST['password'], 'password')) {
        $password = $cuser->test_input($_POST['password']);
    } else {
        header("Location: ../   register.php?alert=Password");
        exit();
    };
    if ($cuser->validation($_POST['day'], 'day')) {
        $day = $cuser->test_input($_POST['day']);
    } else {
        echo $_POST['day'];
        header("Location: ../register.php?alert=Day");
        exit();
    };
    if ($cuser->validation($_POST['cPassword'], 'password')) {
        $cpassword = $cuser->test_input($_POST['cPassword']);
        if ($password === $cpassword) {
            $password2 = $cuser->hash_Password($cpassword);
        } else {
            header('location: ../register.php?alert=Password');
            exit();
        }
    } else {
        header("Location: ../register.php?alert=Confirm-password");
        exit();
    }
    if ($cuser->validation($_POST['month'], 'month')) {
        $month = $cuser->test_input($_POST['month']);
    } else {
        header("Location: ../register.php?alert=month");
        exit();
    };
    if ($cuser->validation($_POST['year'], 'year')) {
        $year = $cuser->test_input($_POST['year']);
    } else {
        header("Location: ../register.php?alert=Year");
        exit();
    };
    if ($cuser->validation($_POST['gender'], 'gender')) {
        $gender = $cuser->test_input($_POST['gender']);
    } else {
        header("Location: ../register.php?alert=Gender");
        exit();
    };


    $dob = $year . "-" . $month . "-" . $day;
    if ($cuser->userExists($email)==0) {
        if ($cuser->register($firstName, $lastName, $email, $password2, $phone, $dob, $gender)) {
            header("Location: ../index.php");
            exit();
        } else {
            header("Location: register.php?alert=error");
            exit();
        }
    } else {
        header("Location: register.php?user-already-exist");
        exit();
    }
}


?>
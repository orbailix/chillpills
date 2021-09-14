<?php
include "auth-register.php";
$cuser = new registration();

if (isset($_POST['register'])) {

    if ($cuser->validation($_POST['firstName'], 'name')) {
        $firstName = ucwords($cuser->test_input($_POST['firstName']));
    } else {
        header("Location: ../register.php?action=FirstName");
        exit();
    };
    if ($cuser->validation($_POST['lastName'], 'name')) {
        $lastName = ucwords($cuser->test_input($_POST['lastName']));
    } else {
        header("Location: ../register.php?action=lastName");
        exit();
    };
    if ($cuser->validation($_POST['email'], 'email')) {
        $email = $cuser->test_input($_POST['email']);
    } else {
        header("Location: ../register.php?action=E-mail");
        exit();
    };
    if ($cuser->validation($_POST['password'], 'password')) {
        $password = $cuser->test_input($_POST['password']);
    } else {
        header("Location: ../register.php?action=Password");
        exit();
    };
    if ($cuser->validation($_POST['day'], 'day')) {
        $day = $cuser->test_input($_POST['day']);
    } else {
        header("Location: ../register.php?action=Day");
        exit();
    };
    if ($cuser->validation($_POST['cpassword'], 'password')) {
        $cpassword = $cuser->test_input($_POST['cpassword']);
    } else {
        header("Location: ../register.php?action=Confirm-password");
        exit();
    };
    if ($cuser->validation($_POST['month'], 'month')) {
        $month = $cuser->test_input($_POST['month']);
    } else {
        header("Location: ../register.php?action=month");
        exit();
    };
    if ($cuser->validation($_POST['year'], 'year')) {
        $year = $cuser->test_input($_POST['year']);
    } else {
        header("Location: ../register.php?action=Year");
        exit();
    };
    if ($cuser->validation($_POST['gender'], 'gender')) {
        $gender = $cuser->test_input($_POST['gender']);
    } else {
        header("Location: ../register.php?action=Gender");
        exit();
    };

    $dob = $year . "-" . $month . "-" . $day;
    if ($cuser->register($firstName, $lastName, $email, $password, $phone, $dob, $gender)) {
        echo "done";
    } else {
        echo "not done";
    }
}


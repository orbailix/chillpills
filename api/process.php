<?php
session_start();    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
include "db-config.php";
include "auth-register.php";
include "auth-post.php";
include "auth-signin.php";
include "auth-friends.php";
$cuser = new registration();
$signin = new signin();

$post = new post();
$friends=new friends();


//Kindly Pass it as current timestamp to have date and time according to our Country
date_default_timezone_set("Asia/Karachi");
$date =  date("Y-m-d h:i:s \G\M\T");


if (isset($_POST['register'])) {
    if ($cuser->validation($_POST['firstName'], 'name')) {
        $firstName = ucwords($cuser->test_input($_POST['firstName']));
    } else {
        header("Location: ../registration.php?alert=FirstName");
        exit();
    };
    if ($cuser->validation($_POST['lastName'], 'name')) {
        $lastName = ucwords($cuser->test_input($_POST['lastName']));
    } else {
        header("Location: ../registration.php?alert=lastName");
        exit();
    };
    if ($cuser->validation($_POST['email'], 'email')) {
        $email = $cuser->test_input($_POST['email']);
    } else {
        header("Location: ../registration.php?alert=E-mail");
        exit();
    };
    if ($cuser->validation($_POST['password'], 'password')) {
        $password = $cuser->test_input($_POST['password']);
    } else {
        header("Location: ../   registration.php?alert=Password");
        exit();
    };
    if ($cuser->validation($_POST['day'], 'day')) {
        $day = $cuser->test_input($_POST['day']);
    } else {
        header("Location: ../registration.php?alert=Day");
        exit();
    };
    if ($cuser->validation($_POST['cPassword'], 'password')) {
        $cpassword = $cuser->test_input($_POST['cPassword']);
        if ($password === $cpassword) {
            $password2 = $signin->hash_Password($cpassword);
        } else {
            header('location: ../registration.php?alert=Password');
            exit();
        }
    } else {
        header("Location: ../registration.php?alert=Confirm-password");
        exit();
    }
    if ($cuser->validation($_POST['month'], 'month')) {
        $month = $cuser->test_input($_POST['month']);
    } else {
        header("Location: ../registration.php?alert=month");
        exit();
    };
    if ($cuser->validation($_POST['year'], 'year')) {
        $year = $cuser->test_input($_POST['year']);
    } else {
        header("Location: ../registration.php?alert=Year");
        exit();
    };
    if ($cuser->validation($_POST['gender'], 'gender')) {
        $gender = $cuser->test_input($_POST['gender']);
    } else {
        header("Location: ../registration.php?alert=Gender");
        exit();
    };

    $dob = $year . "-" . $month . "-" . $day;
    if ($cuser->userExists($email)==0) {
        if ($cuser->register($firstName, $lastName, $email, $password2, $phone, $dob, $gender)) {
            header("Location: ../index.php");
            exit();
        } else {
            header("Location: ../registration.php?alert=error");
            exit();
        }
    } else {
        header("Location: ../registration.php?user-already-exist");
        exit();
    }
}



    if(isset($_POST['signin']))
    {
        if ($signin->signinValidation($_POST['email'], 'email')) {
            $email =$signin->test_input($_POST['email']);
        } else {
            header("Location: ../index.php?action=Email");
            exit();
        }; 


        if ($signin->signinValidation($_POST['password'], 'password')) {        
            $password =$signin->test_input($_POST['password']);
            $password = $signin->hash_Password($password);
        } else {
            header("Location: ../signin.php?action=Password");
            exit();
        }; 

        
      if( $signin->signin($email , $password)>0){
          $_SESSION['email']=$email;
          header("Location: ../information.php");
      }else{
          header("Location: index.php?alert=passwordoremailnotmatched");
      };
     
        
    }

    //For Adding POST
    if(isset($_POST['MODE']) && $_POST['MODE'] =="add_post"){
        $caption = $sigin->test_input($_POST['caption']);
        $image = '';
        $post_add = $post->addPost(1, $caption, $image, 0 , $date);
        return $post_add;
    }

   // for adding profile pic
    if (isset($_POST['MODE']) && $_POST['MODE']=="profile-pic") {
        $caption=$cuser->test_input($_POST['caption']);
        $image="";
        if (isset($_FILES)) {
            $image=$post->addSingalImage($_FILES['image']);
        };
        if ($post->addPost($_SESSION['id'], $caption, $image, '0', $date)) {
            echo "hye";
        } else {
            echo "bye";
        };
    }
    // for adding cover pic
    if (isset($_POST['MODE']) && $_POST['MODE']=="cover-pic") {
        $caption=$cuser->test_input($_POST['caption']);
        $image="";
        if (isset($_FILES)) {
            $image=$post->addSingalImage($_FILES['image']);
        };
        if ($post->addPost($_SESSION['id'], $caption, $image, '1', $date)) {
            echo "hye";
        } else {
            echo "bye";
        };
    

}
//personal information form submission
if (isset($_POST['informationForm'])) {
    
        $website=$cuser->test_input($_POST['website']);
    
    $country=$cuser->test_input($_POST['country']);
    $occupation=$cuser->test_input($_POST['occupation']);
    $province=$cuser->test_input($_POST['province']);
    $city=$cuser->test_input($_POST['city']);
    $status=$cuser->test_input($_POST['status']);
    $belief=$cuser->test_input($_POST['belief']);
    $politicalIntrest=$cuser->test_input($_POST['political']);
    $bio=$cuser->test_input($_POST['bio']);
    $phone=$cuser->test_input($_POST['phone']);

  if ($cuser->countPersonalinformation($_SESSION['userId'])==0) {
      if ($cuser->addPersonalInformation($_SESSION['userId'], $website, $occupation, $province, $city, $status, $country, $belief, $politicalIntrest, $bio,$phone)) {
          header("Location: home.php");
          exit();
      } else {
          header("Location: information.php?alert=error");
          exit();
      };
  }else{
      header("Location: ../home.php");
      exit();
  }


}
//forgot password
if(isset($_POST['forgotPassword'])){
    $email=$cuser->test_input($_POST['email']);
    if($cuser->userExists($email)>0){
        $token = uniqid();
        $token = str_shuffle($token);
        if($signin->forgotPassword($token,$email)){
            try{
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   =  'testkhan8281@gmail.com';                 //SMTP username
                $mail->Password   =    'Ak1730186043591';                                      //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;
     
                $mail->setFrom('testkhan8281@gmail.com','AK47');
                $mail->addAddress($email);
     
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'RESET PASSWORD';
                $mail->Body    = '<h3>click the below link to reset your password. <br><a href="http://localhost/chillpills/reset-password.php?email='.$email.'&token='.$token.'">http://localhost/user_management_system/reset_password.php?email='.$email.'&token='.$token.'</a><br>regards<br>AK47!</h3>';
              
                $mail->send();
                header("Location: ../index.php");
                exit();
             }catch(exception $e){
                   echo $e;               
               
     
             }
        };
       

    
    }else{
        header("Location: ../forgot-password.php?alert=user-not-found");
        exit();
    }
    

    
    }
    // reset forward
    if(isset($_POST['resetPassword'])){
        $email=$cuser->test_input($_POST['email']);
        if ($cuser->validation($_POST['password'], 'password')) {
            $password = $cuser->test_input($_POST['password']);
        } else {
            header("Location: ../reset-password.php?alert=Password");
            exit();
        };
        if ($cuser->validation($_POST['cPassword'], 'password')) {
            $cpassword = $cuser->test_input($_POST['cPassword']);
            if ($password === $cpassword) {
                $password2 = $signin->hash_Password($cpassword);
            } else {
                header('location: ../reset-password?alert=Password');
                exit();
            }
        }
        if($signin->updateNewpassword($password2,$email)){
            header("Location: ../logout.php");
            exit();
        }else{
            header("Location: ../logout.php?alert=error");
        }

    }
 
   // add post 
    if(isset($_POST['action']) && $_POST['action']=="addPost"){
       $caption=$cuser->test_input($_POST['caption']);
       if(isset($_FILES['image'])){
       
          $image= $post->multipleImage($_FILES['image']);
         
       }

      if($post->addPost($_SESSION['userId'], $caption, $image, '2', $date)){
          echo "hi";
           
      }else{
          echo "bye";   
      }

     
    }
    if (isset($_POST['action']) && $_POST['action']=="addfriend") {
        $toUserid=$_POST['toUserid'];
        if ($friends->insertFriendrequest($_SESSION['userId'], $toUserid)) {
            echo "hi";
        } else {
            echo'bye';
        }
    }
    if (isset($_POST['action']) && $_POST['action']=="cancelrequest") {
        $toUserid=$_POST['toUserid'];
        if ($friends->cancelFriendrequest($_SESSION['userId'], $toUserid)) {
            echo "hi";
        } else {
            echo'bye';
        }
    }
    if (isset($_POST['action']) && $_POST['action']=="acceptrequest") {
        $toUserid=$_POST['toUserid'];
        if ($friends->acceptFriendrequest($_SESSION['userId'], $toUserid)) {
            echo "hi";
        } else {
            echo'bye';
        }
    }
    if (isset($_POST['action']) && $_POST['action']=="unfriend") {
        $toUserid=$_POST['toUserid'];
        if ($friends->unFriend($_SESSION['userId'], $toUserid)) {
            echo "hi";
        } else {
            echo'bye';
        }
    }


    
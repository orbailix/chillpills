<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Forgot Password</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>
    <div class="main-wrapper row align-items-center">
        <!-- == login Form Parent div start here ==-->
        <div class="wrapper col-4 ms-auto px-3 py-4">
            <h4>Forgot Password</h4>
            <form action="api/process.php" method="POST"class="login-form mb-3">
                <div class="form-group mb-3">
                    <label for="email"> Email:</label>
                    <input type="email"  class="form-control valid_mail" id="email"
                        placeholder="Enter email or Phone Number" name="email">
                </div>
               
                
                <div class="from-buttons d-flex justify-content-between">
                    <input type="submit" name="forgotPassword" class=" form control btn" value="Send E-mail">
                    <a href="registration.php" class="sign-up-btn"> don't have Account</a>
                </div>
                
            </form>
            <div class="text-center">
                <a href="index.php" class="forgetPassword "> Signin</a>
            </div>
        </div>
         <!-- == login Form Parent div end here ==-->
        <!-- == login Form logo & description start here ==-->
        <div class="logo-section col-6 me-auto ms-4">
            <h2> Welocme to <span>Chillpill</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi numquam mollitia veritatis
                consequatur natus. Veniam modi ipsa expedita et odio aliquam facilis reiciendis numquam.</p>
        </div>
        <!-- == login Form logo & description end here ==-->
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>

</html>

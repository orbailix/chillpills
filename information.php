 <?php
 include("session.php");
 include("api/auth-register.php");
 $cuser=new registration();



 if($cuser->userExistsbyId($_SESSION['userId'])==0){
  
 

 ?>
 <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal information</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/information.css">
  </head>

  <body>
    <div class="main-wrapper row">

      <div class="wrapper col-md-8 col-lg-5 mx-auto ">

        <h4 class="fw-bold py-4">Persnonal information</h4>
      <!--personal information-->
        <form action="api/process.php" method="POST" class=" form row mb-3">

          <div class="form-group col-sm-7 col-md-7 col-lg-12 mb-3">
            <input type="text" class="form-control" name="website" id="yourWebsite" placeholder="Your Website(optional)" >
          </div>
          <div class="form-group col-sm-7 clo-md-8 col-lg-6 mb-3 ">
              <select class="form-control" name="occupation" required>
                <option selected>Your Occupation</option>
                <option value="Designer">Designer</option>
                <option value="Front-End">Fornt End</option>
                <option value="Back-End">Back End</option>
              </select>
            </div>
            <div class="form-group col-sm-7 clo-md-8 col-lg-6 mb-3">
              <select class="form-control" name="province" required>
                <option selected>State/Province</option>
                <option value="KPK">KPK</option>
                <option value="balochistan">Balochistan</option>
                <option value="sindh">Sindh</option>
              </select>
            </div>
            <div class="form-group col-sm-7 clo-md-8 col-lg-6 mb-3 ">
              <select class="form-control" name="city" required>
                <option selected>City</option>
                <option value="Peshawar">Peshawar</option>
                <option value="karachi">karachi</option>
                <option value="Islamabad">Islamabad</option>
              </select>
            </div>
            
            <div class="form-group col-sm-7 clo-md-8 col-lg-6 mb-3 ">
              <select class="form-control" name="status" required>
                <option selected>Status</option>
                <option value="1">Married</option>
                <option value="2">Un-married</option>
                <option value="3">Living relationship</option>
              </select>
            </div>
            <div class="form-group col-sm-7 clo-md-8 col-lg-6 mb-3 ">
              <select class="form-control" name="country"required>
                <option selected>Country</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Turkey">Turkey</option>
                <option value="Canada">Canada</option>
              </select>
            </div>
            
            <div class="form-group col-sm-7 clo-md-12 col-lg-6 mb-3">
              <input type="text" class="form-control" id="religiousbelif"  name="belief"  placeholder="Religious belif" required>
            </div>
            <div class="form-group col-sm-7 clo-md-8 col-lg-6 mb-3">
              <input type="text" class="form-control" id="politicalincline"  name="political" placeholder="Political incline" required>
            </div>
            <div class="form-group col-sm-7 clo-md-8 col-lg-6 mb-3">
              <input type="text" class="form-control" id="phone"  name="phone" placeholder="Enter your phone number" required>
            </div>
            <textarea name="bio" id="bio" cols="5" rows="5"  name="bio"  placeholder="Write  about yourself"></textarea>
            <div class="d-flex mx-auto">

              <input type="submit" name="informationForm" class="btn button my-2" value="Save all changes">
            </div>
          </form>
      </div>
    </div>
          <script src="./assets/js/bootstrap.min.js"></script>

  </body>

  </html>
  <?php
  
 }else{
  header("Location: news-feed.php");
exit();
 }
  ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <title>Registerr Account</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <div class="main-wrapper row align-items-center">

    <div class="wrapper col-6 mx-auto ">

      <h4 class="fw-bold py-4">Register Here</h4>

      <form action="api/process.php" method="POST" class="login-form row mb-3">

        <div class="form-group col-6 mb-3">
          <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First name" required>
        </div>

        <div class="form-group col-6 mb-3">
          <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last name" required>
        </div>

        <div class="form-group col-12 mb-3">
          <input type="email" class="form-control Email" id="email" name="email"placeholder="Email address" required>
        </div>
        <div class="form-group col-12 mb-3">
          <input type="number" class="form-control password" id="PhoneNumber" name="phoneNumber"placeholder="Phone number" required>
        </div>
        <div class="form-group col-6 mb-3">
          <input type="password" class="form-control" id="newpassword" name="password" placeholder="New password" required>
        </div>
        <div class="form-group col-6 mb-3">
          <input type="password" class="form-control" id="confirmpassword" name="cPassword" placeholder="confirm password" required>
        </div>
        <div class="form-group col-4 mb-3">
          <select  name="day" class="form-control" required>
            <option selected>Date</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
        </div>
        <div class="form-group col-4 mb-3">
          <select name="month" class="form-control" required>
            <option selected>Month</option>
            <option value="1">jan</option>
            <option value="2">feb</option>
            <option value="3">march</option>
          </select>
        </div>
        <div class="form-group col-4 mb-3">
          <select name="year" class="form-control" required>
            <option selected>Year</option>
            <option value="1999">1999</option>
            <option value="1999">1999</option>
            <option value="1999">1999</option>
          </select>
        </div>

        <div class="col-12 mt-1 mb-2 d-flex registration_checkbox">

          <div class="form-check">
            <input class="form-check-input" value="1" type="radio" name="gender">
            <label class="form-check-label"  for="male">
              Male
            </label>
          </div>
          <div class="form-check ms-3">
            <input class="form-check-input" value="2" type="radio" name="gender">
            <label class="form-check-label" for="female">
              Female
            </label>
          </div>
          <div class="form-check ms-3">
            <input class="form-check-input" value="3" type="radio" name="gender">
            <label class="form-check-label" for="other">
              Other
            </label>  
          </div>
        </div>
        <div class="d-flex">
          <input type="submit" name ="register" class=" form control btn ms-auto" value="Register">
        </div>
      </form>
      
  </div>   
  </div>

      <script src="./assets/js/bootstrap.min.js"></script>

</body>

</html>
<?php

class signin extends database
{
    public function signinValidation($var, $case)
    {
        switch ($case)
        {
          
            case "email":
                if (empty($var) || !preg_match("/^[a-zA-Z0-9_.-]{5,64}+@[a-zA-Z0-9-]{5,255}+.[a-zA-Z0-9-.]{2,4}+$/", $var) || !filter_var($var, FILTER_VALIDATE_EMAIL))
                {
                    return false;
                }
                else
                {
                    return $this->test_input($var);
                };
            break;


            case "password":
                if (empty($var) || strlen($var) < 8)
                {
                    return false;
                }
                else
                {
                    return true;
                };
            break;

        }

    }

   
    public function check_pass($email, $password)
    {
        $sql = "SELECT * from user WHERE email =:email && password=:password";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':password',$password);
        $stmt->execute();
        $count =  $stmt->rowCount();
        return $count;
    }

    //hash_password
    public function hash_Password($password)
    {
        $salt = ")(*&^%$#(*&^%$#*&^%$#";
        $hpassword = md5($password . $salt);
        return $hpassword;
    }


    public function test_input($input)
    {

        $input = htmlspecialchars($input);
        $input = trim($input);
        $input = stripslashes($input);
        return $input;

    }
    
    public function signin($email , $password)
    {      $sql="SELECT * FROM user WHERE email=:email AND password=:password";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password',$password);
        if($stmt->execute()){
            $result =$stmt->rowCount();
            return $result;
        }{
            header("Location: ../index.php?errorsql");
        };
      
    }
    public function sessionUser($email){
        $sql="SELECT * FROM user where email=:email";
         $stmt=$this->conn->prepare($sql);
         $stmt->bindParam(":email", $email);
         if($stmt->execute()){
             return  $stmt->fetch(PDO::FETCH_ASSOC);
         }else{
             return false;
         }
    }
    public function forgotPassword($token,$email){
        $sql="UPDATE user SET 	forgotPasswordtoken =:forgotPasswordtoken, forgotPasswordtokenExpiry= DATE_ADD(NOW(), INTERVAL 10 MINUTE) where email=:email";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(":forgotPasswordtoken",$token);
        $stmt->bindParam(":email",$email);
        if($stmt->execute()){
            return true;

        }else{
            return false;
        }
        }
        public function resetPasswordauthentication($email, $token)
    {
        $sql="SELECT user_id from user where email=:email AND forgotPasswordtoken=:token AND forgotPasswordtoken !='' AND forgotPasswordtokenExpiry>NOW()";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(":token",$token);
        $stmt->bindParam(":email",$email);
        $stmt->execute();
        if($stmt->execute()){
            return $stmt->rowCount();

        }else{
            return false;
        }
    }
    public function updateNewpassword($pass,$email){
        $sql="UPDATE user set forgotPasswordtoken=null,password=:pass,forgotPasswordtokenExpiry=null where email=:email";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(":pass",$pass);
        $stmt->bindParam(":email",$email);
        if($stmt->execute()){
            return true;

        }else{
            return false;
        }
    }
}

?>

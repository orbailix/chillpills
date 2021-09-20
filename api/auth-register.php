<?php

class registration extends database
{
    public function validation($var, $case)
    {
        switch ($case) {
            case "gender":
                if (empty($var) || strlen($var) != 1) {
                    return false;
                } else {
                    return true;
                };
            break;
            case "email":
                if (empty($var) || !preg_match("/^[a-zA-Z0-9_.-]{5,64}+@[a-zA-Z0-9-]{5,255}+.[a-zA-Z0-9-.]{2,4}+$/", $var) || !filter_var($var, FILTER_VALIDATE_EMAIL)) {
                    return false;
                } else {
                    return true;
                };
            break;
            case "phone":
                $filtered_phone_number = filter_var($var, FILTER_SANITIZE_NUMBER_INT);
                // Remove "-" from number
                $phone_to_check = str_replace("-", "", $filtered_phone_number);
                // Check the lenght of number
                // This can be customized if you want phone number from a specific country
                if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
                    return false;
                } else {
                    return true;
                };
            break;
            case "name":
                if (empty($var) || !preg_match('/[a-zA-Z]/', $var) || strlen($var) > 30) {
                    return false;
                } else {
                    return true;
                };
            break;
            case "day":
                if (empty($var) || !filter_var($var, FILTER_VALIDATE_INT) || strlen($var) > 2 || $var > 31) {
                    return false;
                } else {
                    return true;
                };
            break;
            case "month": //2 integer
                if (empty($var) || !filter_var($var, FILTER_VALIDATE_INT) || strlen($var) > 2 || $var > 12) {
                    return false;
                } else {
                    return true;
                };
            break;
            case "year":
                if (empty($var) || !filter_var($var, FILTER_VALIDATE_INT) || strlen($var) > 4 || $var > 2015) {
                    return false;
                } else {
                    return true;
                };
            break;
            case "password":
                if (empty($var) || strlen($var) < 8) {
                    return false;
                } else {
                    return true;
                };
            break;

        }
    }

    public function register($firstName, $lastName, $email, $password, $phone, $dob, $gender)
    {
        $sql = "INSERT INTO user (firstName,lastName,phone,email,password,gender,dob) VALUES (:firstName,:lastName,:phone,:email,:password,:gender,:dob)";
        $stmt = $this
            ->conn
            ->prepare($sql);
        $stmt->bindParam(':firstName', $firstName);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':dob', $dob);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
   
    public function test_input($input)
    {
        $input = htmlspecialchars($input);
        $input = trim($input);
        $input = stripslashes($input);
        return $input;
    }
    public function insertBio($userId, $website, $country, $city, $province, $bio, $occupation, $belief, $status)
    {
        $sql = "INSERT into profile (userId,website,country,city,province,bio,occupation,belief,status) VALUES (:userId,:website,:country,:city,:province,:bio,:occupation,:belief,:status) ";
        $stmt = $this
            ->conn
            ->prepare($sql);
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':website', $website);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':province', $province);
        $stmt->bindParam(':bio', $bio);
        $stmt->bindParam(':occupation', $occupation);
        $stmt->bindParam(':belief', $belief);
        $stmt->bindParam(':status', $status);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function userExists($email)
    {
        $sql = "SELECT user_Id from user where email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->rowCount();
        return $result;
    }
    public function userExistsbyId($id)
    {
        $sql = "SELECT id from profile where userId = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        if( $stmt->execute()){
            $result = $stmt->rowCount();
            return $result;
        }else{
            return false;
        }
       
       
    }
    public function hash_Password($password)
    {
        $salt = ")(*&^%$#(*&^%$#*&^%$#";
        $hpassword = md5($password . $salt);
        return $hpassword;
    }

    public function addPersonalInformation($userId, $website=null, $occupation, $province, $city, $status, $country, $belief, $politicalIntrest, $bio,)
    {
        $sql="INSERT INTO profile (userId,website,occupation,province,city,status,country,belief,politicalIntrest,bio) values(:userId,:website,:occupation,:province,:city,:status,:country,:belief,:politicalIntrest,:bio)";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':website', $website);
        $stmt->bindParam(':occupation', $occupation);
        $stmt->bindParam(':province', $province);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':belief', $belief);
        $stmt->bindParam(':politicalIntrest', $politicalIntrest);
        $stmt->bindParam(':bio', $bio);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function countPersonalinformation($userId)
    {
        $sql="SELECT id from profile where id=:userId";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(":userId", $userId);
        if ($stmt->execute()) {
            return$stmt->rowCount();
        }
    }
    
}

?>

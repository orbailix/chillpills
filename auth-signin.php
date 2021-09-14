<?php
include "db-config.php";
class signin extends database
{
    public function validation($var, $case)
    {
        switch ($case)
        {
          
            case "username":
                if (empty($var) || !preg_match('/[a-zA-Z]/', $var) || strlen($var) > 30)
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

   
    public function check_pass($username, $password)
    {
        $sql = "SELECT * from users WHERE username =:username && password=:password";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':password' => $password,':username' => $username]);
        $count =  $stmt->rowCount();
        return $count;
    }


    public function test_input($input)
    {

        $input = htmlspecialchars($input);
        $input = trim($input);
        $input = stripslashes($input);
        return $input;

    }
    

}

?>

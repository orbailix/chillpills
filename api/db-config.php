<?php

class database {
    // $dsn  = "mysql:host=localhost; dbname=db_user_system";
// $dbuser = "root";
// dbpassword = "";

// $conn = new PDO($dsn, $dbuser, $dbpassword);

// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
  private $dsn = "mysql:host=localhost; dbname=chillpills";
  private $dbuser="root";
  private $dbpass= "";
  
  public $conn;
  
  public function __construct(){
              try {
            $this->conn = new PDO($this->dsn, $this->dbuser, $this->dbpass);
            
    //  echo "successful";
              }catch(PDOException $e) {
                  echo "Error : ".$e->getmessage();
              }
              return $this->conn;
  }
  

  }




// check gender


?>

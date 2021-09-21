<?php 

class notification extends database{

    public function countNotification($userId){
        $sql="SELECT notificationId FROM notification where userId=:userId and status='0'";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(":userId", $userId);
        if($stmt->execute()){
            return $stmt->rowCount();
        }else{
            return false;
        }
    }
    public function showNotification($userId){
        $sql="SELECT notification.*,user.firstName,user.lastName,user.image FROM notification inner join user on notification.userId= user.user_id where notification.userId=:userId";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(":userId", $userId);
        if($stmt->execute()){
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }
 
}




?>
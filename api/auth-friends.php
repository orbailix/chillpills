<?php 

class friends extends database{

    public function fetchProfiles($id){
        $sql="SELECT user_Id,firstName,lastName,image FROM user where user_id!='$id'";
        $stmt=$this->conn->prepare($sql);
        if($stmt->execute()){
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }
    public function checkFriend($userId,$toUserid){
        $sql="SELECT status FROM friends where (userId=:userId AND toUserid=:toUserid ) or (toUserId=:userId AND userId=:toUserid)";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(":userId", $userId);
        $stmt->bindParam(":toUserid", $toUserid);
        if($stmt->execute()){

            return $stmt->rowCount();
        }else{
            return false;
        }
    }
    public function checkFriendrequest($userId,$toUserid){
        $sql="SELECT status FROM friends where (userId=:userId AND toUserid=:toUserId)";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(":userId", $userId);
        $stmt->bindParam(":toUserId", $toUserid);
        if($stmt->execute()){
            return $stmt->rowCount();
        }else{
            return false;
        }
    }

    public function insertFriendrequest($userId,$toUserid){
        $sql="INSERT INTO friends (userId,toUserid,status) VALUES (:userId,:toUserid,'0')";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(":userId", $userId);
        $stmt->bindParam(":toUserid", $toUserid);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function cancelFriendrequest($userId,$toUserid){
        $sql="DELETE from friends where (userId=:userId AND toUserid=:toUserid)";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(":userId", $userId);
        $stmt->bindParam(":toUserid", $toUserid);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function acceptFriendrequest($userId,$toUserid){
        $sql="INSERT INTO friends (userId,toUserid,status) VALUES (:userId,:toUserid,'0')";
        $sql1="UPDATE friends SET status='1' WHERE (userId=:userId AND toUserid=:toUserid ) or (toUserId=:userId AND userId=:toUserid)";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(":userId", $userId);
        $stmt->bindParam(":toUserid", $toUserid);
        $stmt1=$this->conn->prepare($sql1);
        $stmt1->bindParam(":userId", $userId);
        $stmt1->bindParam(":toUserid", $toUserid);
        if($stmt->execute()){
            if($stmt1->execute()){
                return true;

            }else{
                return false;

            }
        }else{
            return false;
        }
    }
    public function unFriend($userId,$toUserid){
        $sql="DELETE from friends where (userId=:userId AND toUserid=:toUserid) or (toUserId=:userId AND userId=:toUserid)";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(":userId", $userId);
        $stmt->bindParam(":toUserid", $toUserid);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
 
}




?>
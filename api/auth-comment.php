<?php 

class comment extends database{



  public function addComment($userId,$uniqueId,$comment,$image,$date){
    $sql="INSERT INTO comment (userId,uniqueId,comment,image,created_on)VALUES(:userId,:uniqueId,:comment,:image,:date)";
    $stmt=$this->conn->prepare($sql);
    $stmt->bindParam(":userId", $userId);
    $stmt->bindParam(":uniqueId", $uniqueId);
    $stmt->bindParam(":comment", $comment);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":date", $date);
    if($stmt->execute()){
      return true;
    }else{
      return false;
    }



  }

  public function addSingalImage($file)
  {
      $img_name = $file['name'];
  $img_size =$file['size'];
  $img_tmp =$file['tmp_name'];
  $img_type=$file['type'];

  $tmp = explode('.',$file['name']);
  $img_ext=strtolower(end($tmp));
  
  $extensions= array("jpeg","jpg","png");
  
  if(in_array($img_ext,$extensions)=== false){
return false;  }
  
  if($img_size > 5 * 1024 * 1024){
return false;  }
  
  if(empty($errors)==true){
    $img = "../uploads/".uniqid("img_").".".$img_ext;
    move_uploaded_file($img_tmp,$img);
     
  }
  return $img;
  }
 
public function mentionSuggestion($userId)
{
$sql="SELECT user.user_id,user.firstName,user.lastName from user inner join friends on (friends.userId=:userId or friends.toUserid=:userId)"



}

 
}




?>
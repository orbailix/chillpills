<?php 

class post extends database{
    public function add_post($userId, $caption, $image, $post_type, $created_on)
    {
        $sql = "INSERT INTO posts (userId,caption,image,post_type,created_on) VALUES (:userId, :caption, :image, :post_type, :created_on)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':caption', $caption);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':post_type', $post_type);
        $stmt->bindParam(':created_on', $created_on);
        if ($stmt->execute())
        {
            // return true;
            return true;

        }
        else
        {
          return false;
        }
    }
    public function fetch_profile_post($userId)
    {
        $sql = "SELECT * from posts where userId = :userId";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':userId', $userId);
        if($stmt->execute()){
            return $stmt->fetchAll();
        }else{
            return false;
        }
    }

    public function addSingalImage($file)
    {
        $img_name = $file['img']['name'];
    $img_size =$file['img']['size'];
    $img_tmp =$file['img']['tmp_name'];
    $img_type=$file['img']['type'];

    $tmp = explode('.',$file['img']['name']);
    $img_ext=strtolower(end($tmp));
    
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($img_ext,$extensions)=== false){
       header("Location: add_blog.php?alert=invalid_type");
    }
    
    if($img_size > 5 * 1024 * 1024){
        header("Location: add_blog.php?alert=Too_Big_img");
    }
    
    if(empty($errors)==true){
      $img = "../uploads/".uniqid("img_").".".$img_ext;
      move_uploaded_file($img_tmp,$img);
       
    }
    return $img;
    }
}



?>
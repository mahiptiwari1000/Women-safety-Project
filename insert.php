<?php

  $con = mysqli_connect('127.0.0.1','root','');
 
  if(!$con)
  {
      echo 'Not connected to server';
  }
  if (!mysqli_select_db($con,'Womensafety'))
  {
      echo 'Database not selected';
  }
  $Firstname = $_POST['fname'];
  $Lastname = $_POST['lname'];
  $Email = $_POST['email'];
  $Mobile = $_POST['mobile'];
  $Username = $_POST['uname'];
  $Password = $_POST['pword'];

  $sql = "INSERT INTO tablename(First Name,Last Name, Email, Mobile, Username, Password) VALUES('$Firstname','$Lastname','$Email','$Mobile','$Username','$Password')";

if(!mysqli_query($con,$sql))
{
   echo 'Not inserted';
}
else
{
    echo 'Thank you for registering with us!';
}

header("refresh:2; url = index.html");
?>
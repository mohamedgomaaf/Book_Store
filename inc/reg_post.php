<?php
include('config.php');


if(isset($_POST['register'])){

  $filter_name = filter_var($_POST['name']);
  $name = mysqli_real_escape_string($conn, $filter_name);
  $filter_email = filter_var($_POST['email']);
  $email = mysqli_real_escape_string($conn, $filter_email);
  $filter_pass = filter_var($_POST['pass']);
  $pass = mysqli_real_escape_string($conn, md5($filter_pass));

  $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die('query failed');

  if(mysqli_num_rows($select_users) > 0){
      $message[] = '<p style="color:red;" >user already exist!';
  }else{
   if(strlen(trim($pass)) < 6)
   {
      $message[] ='Password must be #6 characters';
  }else{
        mysqli_query($conn, "INSERT INTO `users`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
        $message[] = 'registered successfully!';
        header('location:login.php');
     }
  }

}






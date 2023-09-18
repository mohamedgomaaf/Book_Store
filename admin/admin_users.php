<?php
include ('../inc/config.php');
session_start();
 $adimn_id = $_SESSION['admin_id'];
 if(!isset($adimn_id)){
   header('location:login.php');
 }
if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM`users`WHERE id='$delete_id'")or die ('query failed');
   header('location:admin_users.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- main template css file -->
    <link rel="stylesheet" href="../css/admin/admin_page.css" />
    <link rel="stylesheet" href="../css/admin/admin_users.css">
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="../css/normalize.css" />
    <!-- font Awesome Library -->
    <link rel="stylesheet" href="../css/all.min.css" />
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <title>admin_users</title>
  </head>
  <body>
    <!-- Start header -->
    <?php include("header_admin.php");

?>
  <!-- End header -->
  <!-- Start users  -->
  <div class="users">
    <h1 class="title">USER ACCOUNTS</h1>
    <div class="container">
      <?php
      $select_users = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
      while($fetch_users = mysqli_fetch_assoc($select_users)){
   ?>
      <div class="box">
        <p> user id : <span><?php echo $fetch_users['id']; ?></span> </p>
        <p> username : <span><?php echo $fetch_users['name']; ?></span> </p>
        <p> email : <span><?php echo $fetch_users['email']; ?></span> </p>
        <p> user type : <span style="color:<?php if($fetch_users['user_type'] == 'admin'){ echo 'var(--orange)'; } ?>"><?php echo $fetch_users['user_type']; ?></span> </p>
        <a href="admin_users.php?delete=<?php echo $fetch_users['id']; ?>" onclick="return confirm('delete this user?');" class="delete-btn">delete user</a>
     </div>
     <?php
      };
   ?>
    </div>
  </div>
  <!-- End users  -->
  </body>
</html>

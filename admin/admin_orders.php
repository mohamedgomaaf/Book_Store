<?php

include ("../inc/config.php");
?>
<?php
session_start();

 $admin_id = $_SESSION['admin_id'];

 if(!isset($admin_id)){
    header('location:login.php');
 }

if(isset($_POST['update_order'])){

   $order_update_id = $_POST['order_id'];
   $update_payment = $_POST['update_payment'];
   mysqli_query($conn, "UPDATE `orders` SET payment_status = '$update_payment' WHERE id = '$order_update_id'") or die('query failed');
   $message[] = 'payment status has been updated!';

}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `orders` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_orders.php');
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
    <link rel="stylesheet" href="../css/admin/admin_orders.css" />
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
    <title>admin_orders</title>
  </head>
  <body>
    <!-- Start header -->
    <?php include("header_admin.php");

   ?>
  <!-- End header -->
  <section class="orders">

    <h1 class="title">Placed Orders</h1>
 
    <div class="container">
       <?php
       $select_orders = mysqli_query($conn, "SELECT * FROM `orders`") or die('query failed');
       if(mysqli_num_rows($select_orders) > 0){
          while($fetch_orders = mysqli_fetch_assoc($select_orders)){
       ?>
       <div class="box">
          <p>Admin ID : <span><?php echo $fetch_orders['user_id']; ?></span> </p>
          <p> Name : <span><?php echo $fetch_orders['name']; ?></span> </p>
          <p> Number : <span><?php echo $fetch_orders['number']; ?></span> </p>
          <p> Email : <span><?php echo $fetch_orders['email']; ?></span> </p>
          <p> Address : <span><?php echo $fetch_orders['flat']; ?></span> </p>
          <p> Total Products : <span><?php echo $fetch_orders['total_products']; ?></span> </p>
          <p> Total Price : <span>$<?php echo $fetch_orders['total_price']; ?></span> </p>
          <p> Placed On : <span><?php echo $fetch_orders['placed_on']; ?></span> </p>
          <p> Payment Method : <span><?php echo $fetch_orders['method']; ?></span> </p>
          <form action="" method="post">
             <input type="hidden" name="order_id" value="<?php echo $fetch_orders['id']; ?>">
             <select name="update_payment">
                <option value="" selected disabled><?php echo $fetch_orders['payment_status']; ?></option>
                <option value="pending">pending</option>
                <option value="completed">completed</option>
             </select>
             <input type="submit" value="Update" name="update_order" class="option-btn">
             <a href="admin_orders.php?delete=<?php echo $fetch_orders['id']; ?>" onclick="return confirm('delete this order?');" class="delete-btn">delete</a>
          </form>
       </div>
       <?php
          }
       }else{
          echo '<p class="empty">no orders placed yet!</p>';
       }
       ?>
    </div>
 
 </section>
  </body>
</html>
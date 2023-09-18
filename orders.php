<?php
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/normalize.css">
   <link rel="stylesheet" href="css/AllPages.css">
   <link rel="stylesheet" href="css/orders.css">
   <title>Orders</title>
</head>

<body>
   <!-- Start header -->
   <?php include("inc/header.php") ?>
   <!-- end header_2 -->
   <div class="heading">
      <h3>Your Orders</h3>
      <p><a href="Index.php">Home</a> <span>/ Orders</span></p>
   </div>
   <section class="products">
      <h1 class="title_1">Placed Orders</h1>
      <div class="box-container" >
         <?php
         include('inc/config.php');
         $order_query = mysqli_query($conn, "SELECT * FROM orders") or die('query failed');
         if (mysqli_num_rows($order_query) > 0) {
            while ($fetch_orders = mysqli_fetch_assoc($order_query)) {
         ?>
         
               <div class="boxy"style="grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
          border: 2px solid purple;
          gap:1.5rem;
          text-align: center;">
                  <p> ID : <span><?php echo $fetch_orders['user_id']; ?></span></p>
                  <p> Placed on : <span><?php echo $fetch_orders['placed_on']; ?></span></p>
                  <p> Name : <span><?php echo $fetch_orders['name']; ?></span></p>
                  <p> Number : <span><?php echo $fetch_orders['number']; ?></span></p>
                  <p> Email : <span><?php echo $fetch_orders['email']; ?></span></p>
                  <p> Address : <span><?php echo $fetch_orders['flat']; ?></span></p>
                  <p> Payment Method : <span><?php echo $fetch_orders['method']; ?></span></p>
                  <p> Your Orders : <span><?php echo $fetch_orders['total_products']; ?></span></p>
                  <p> Total Price : <span>$<?php echo $fetch_orders['total_price']; ?>/-</span></p>
                  <p> Payment Status : <span style="color:<?php if ($fetch_orders['payment_status'] == 'pending') {
                    echo 'red';
                    } else {
                     echo 'green';
                     } ?>;"><?php echo $fetch_orders['payment_status']; ?></span></p>
               </div>
         <?php
            }
         } else {
            echo '<p class="empty">no orders placed yet!</p>';
         }
         ?>
      </div>
   </section>
   <!-- start footer -->
   <?php include("inc/footer.php") ?>
   <!-- end footer -->
   <style>
        /* Edit header */
        @media (max-width: 767px) {
      .footer .box-container .box {
        margin-left:20px ;
      }
      .footer .box-container .box:nth-child(4) {
        margin-bottom: 20px;
      }
    }
        /* Edit header */
    </style>
</body>
</html>
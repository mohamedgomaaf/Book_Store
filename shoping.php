<?php

include 'inc/config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <!-- Render All Elements Normally -->
        <link rel="stylesheet" href="css/normalize.css" />
        <!-- Font Awesome Library -->
        <link rel="stylesheet" href="css/all.min.css" />
        <!-- Main Template CSS File -->
        <link rel="stylesheet" href="css/shoping.css" />
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <title>Shop</title>
    </head>
<body>
   <!-- start php -->
<?php
include('inc/config.php');
?>
<!-- end php -->
<?php include("inc/header.php");
?>   
<!-- stat heading -->
<div class="heading">
            <h3>Shop</h3>
            <!-- <p><a href="index.php">Home</a> <a href="shoping.php">/ Shoping</span></p> -->
        </div>

<section class="shop">
 <div class="container">
        <h1 class="headliine">Latest Products</h1>
        <div class="container-card">
           <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
               ?>
               <div class="card">
              <form class = "content" action="#" method="post" class="box">
              <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
                <h6 class="name"><?php echo $fetch_products['name']; ?></h6>
                <span class="discount">$<?php echo $fetch_products['price']; ?>/-</span>
                <input type="number" min="1" name="product_quantity" value="1" class="qty">
                <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
     </div>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
          </div>
</div>
</div>
</section>
<?php include("inc/footer.php"); ?>
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
    .footer .box-container {
    padding: 36px 0;
}

        /* Edit header */
    </style>
</body>
</html>

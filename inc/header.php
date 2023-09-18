<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
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
    <link rel="stylesheet" href="../css/normalize.css" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="../css/all.min.css" />
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="../css/AllPages.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- start php -->
    <?php
    include('config.php');
    ?>
    <!-- end php -->

    <!-- Start header_2 -->
    <div class="header">
        <div class="container">
            <a href="index.php" class="logo"><img src="image/logo.png" alt="Home"></a>
            <nav class="navbar">
                <a href="index.php">home</a>
                <a href="shoping.php">shop</a>
                <a class="icon_4" href="orders.php">orders</a>
                <a href="contact.php">contact</a>
                <a href="about.php">about</a>
            </nav>
            <ul>
                <li class="barn"><i class="fa-solid fa-bars bari"></i></li>
                <li class="user-btn">  <i class="fa-solid fa-arrow-right-from-bracket"></i>  
                    <a class="logout" href="logout.php">logout</a>  
                </li>
                <li><a href="search.php"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                <!-- <input type="search"> -->
                <!-- <li><i class="fa-solid fa-user"></i></li> -->
                <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
                <?php
                $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
                $cart_rows_number = mysqli_num_rows($select_cart_number);
                ?>
                <span>(<?php echo $cart_rows_number; ?>)</span>
            </ul>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>
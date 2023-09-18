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
        <title>home</title>
        <!-- Render All Elements Normally -->
        <link rel="stylesheet" href="css/normalize.css" />
        <!-- Font Awesome Library -->
        <link rel="stylesheet" href="css/all.min.css" />
        <!-- Main Template CSS File -->
        <link rel="stylesheet" href="css/home.css" />
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <title>Home</title>
    </head>
<body>
   
<!-- start php -->
<?php
include('inc/config.php');
?>
<!-- end php -->
<?php include("inc/header.php");

?>    <!-- end header_2 -->
    <!-- start home -->
    <div class="home">
        <div class="contact">
            <h3>Hand Picked Book to your door.</h3>
            <p>We offer a tremendous gathering of books in the various classifications of Fiction, Non-fiction, Biographies, History, Religions, Self – Help, and Children. We likewise move in immense accumulation of Investments and Management, Computers, Engineering, Medical, College, and School content references books proposed by various foundations as scheduled the nation over. Besides this, we offer an expansive gathering of E-Books at a reasonable value.</p>
            <a href="shoping.php">Go To Shopping</a>
        </div>
    </div>

    <section class="about">
        <div class="container">
           <div class="image">
              <img src="image/background.jpg" alt="">
           </div>
           <div class="content">
              <h3>About us</h3>
              <p>The wide scope of books offered by us incorporates fantasies, moral stories, showed storybooks, reference books, general learning books, sentence structure books, shading books, action books, sticker books, and more. Every one of these books is accessible in both English and Hindi.</p>
                            <a href="about.php" class="btn"><details> <summary>read more</summary> <p>With our you have access to all kind of educational, motivation and career book to keep you going in any areas.</p></details>
                          </a>

           </div>
        </div>
     </section> 
     <!-- end about -->

     <!-- start home-contact -->
     <section class="home-contact">
        <div class="content">
           <h3>have any questions?</h3>
           <p>If you have any questions, please feel free to contact us any time.</p>
           <a href="contact.php" class="white-btn">Contact us</a>
        </div>    
     </section>
     <!-- end home-contact -->
     <!-- start footer -->
   <?php include("inc/footer.php")?>
     <!-- end footer -->
     <script src="main.js"></script>
</body>
</html>
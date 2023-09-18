<!-- start php -->
<?php
 include('inc/config.php');
 session_start();
 $user_id = $_SESSION['user_id'];
 if(!isset($user_id)){
     header('location:login.php');
 }

 if(isset($_POST['send'])){
     $name = mysqli_real_escape_string($conn, $_POST['name']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
     $number = $_POST['number'];
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

     $select_message = mysqli_query($conn, "SELECT * FROM message WHERE name = '$name'
     AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query fail');

     if(mysqli_num_rows($select_message) > 0){
       $message[] = '<p>Message have already sent</p>';
     }else{
         mysqli_query($conn, "INSERT INTO message(user_id, name, email, number, message) VALUE(
             '$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
             $message[] = '<p>message send successfully!</p>';
     }
 }
?>
<!-- end php -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/pagecontact.css">
    <link rel="stylesheet" href="css/AllPages.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
    <title>Contact</title>
</head>

<body>
    <?php include("inc/header.php") ?>

    <section class="contact">
        <div class="content">
            <h2><span> B</span>ook-<span>S</span>tore</h2>
            <p>A message can be sent and answered as soon as possible </p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-house"></i></ion-icon></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>BNS/HTI</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-phone"></i></ion-icon></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+020-1117162245</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-envelope"></i></ion-icon></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>BNS_HTI@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="#" method="post">
                    <h2>contact!</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span>enter your name..</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" required="required">
                        <span>enter your Email</span>

                        <div class="inputBox">
                            <input type="text" name="number" required="required">
                            <span>enter your number</span>
                        </div>
                        <div class="inputBox">
                            <textarea name="message"></textarea>
                            <span>message...</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="send" value="Send">
                        </div>
                </form>
            </div>
        </div>
    </section>
    <?php include("inc/footer.php"); ?>
    <style>
        /* Edit header */
        .header {
            margin-top: -38px;
        }
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

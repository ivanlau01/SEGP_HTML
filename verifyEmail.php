<?php include_once ("controller.php"); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>OTP Verification Form</title>
        <link rel="stylesheet" href="styles.css">
        <script src="main.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <section class="login-header">
        <body style="display: flex; text-align: center">
            <div style="padding: 5em;">
                <img src="images/frontpagelogo.png">
            </div>
        </body>
    </section>

    <div class="center">
        <h1>Email</h1>
       
        <div id="line"></div>
        <form action="verifyEmail.php" method="POST" autocomplete="off">
             <?php
            if(isset($_SESSION['message'])){
                ?>
                    <i style ='color: green'><?php echo $_SESSION['message']; ?></style>
                <?php
            }
            ?>

            <?php
            if($errors > 0){
                foreach($errors AS $displayErrors){
                ?>
                    <i style ='color: red'><?php echo $displayErrors; ?></style>
                <?php
                }
            }
            ?> 
            <div class="txt_field">
                <input type="number" name="OTPverify" placeholder="Verification Code" required><br>
            </div>  

            <input type="submit" name="verifyEmail" value="Verify">
            
        </form>
    </div>
</body>
</html>


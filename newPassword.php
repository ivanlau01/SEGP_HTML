<?php include_once ("controller.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Change Password</title>
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
    <div id="container">
        <div class="center">

        
        <div id="line"></div>
        <form action="newPassword.php" method="POST" autocomplete="off">
            <?php
            if ($errors > 0) {
                foreach ($errors as $displayErrors) {
            ?>
                    <i style ='color: red'><?php echo $displayErrors; ?></style>
            <?php
                }
            }
            ?>
            <h1>Enter your new password<h1>
            <div class="txt_field">
                <input type="password" name="password" placeholder="Password" required><br>
            </div>
            <div class="txt_field">
                <input type="password" name="confirmPassword" placeholder="Confirm Password" required><br>
            </div>
            
            <input type="submit" name="changePassword" value="Save">
        </form>
    </div>
    </div>
</body>
</html>
<?php include_once ("controller.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Forgot your Password page</title>
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
            <h1>Forgot Password</h1>

            <div id="line"></div>
            <form action="forgot-passpage.php" method="POST" autocomplete="off">
            <?php
            if ($errors > 0) {
                foreach ($errors as $displayErrors) {
            ?>
                    <div id="alert"><?php echo $displayErrors; ?></div>
            <?php
                }
            }
            ?>

            <div class="txt_field">
                <input type="email" name="email" placeholder="Email"><br>
                <label>Enter your Email</label>
            </div>
                <input type="submit" name="forgot_password" value="Check">
            </form>
    </div>
</html>
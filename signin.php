<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Millennium | 2000</title>
        <link rel="stylesheet" type="text/css" href="style-desktop.css">
        <link rel="stylesheet" type="text/css" href="style-mobile.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=500" />
    </head>
    <a href="https://m2krealty.org" class="header-logo-sign"
    ><span>Click Here</span> for home Millennium 2000.</a
    >
        <body>  
             <div class="signup-grid">
                 <div class="signup-intro">
                <h1>Log In</h1>

                 </div>
                 <div class="signup-clients">
                        

            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p><font color="red"><center>Fields below are required.</center></font></p>';

                }
                else if ($_GET['error'] == "wrongpwd") {
                    echo '<p><font color="red"><center>Some of your info is not correct.</center></font></p>';

                }
                else if ($_GET['error'] == "nousermatches") {
                    echo '<p><font color="red"><center>Some of your info is not correct.</center></font></p>';
                }
            }
        ?>


    <form class = "contact-form" action="login.inc.php" method="post">
        <input type="text" class="contact-form-text" placeholder="Email or username" name="mailuid">
        <input type="password" class="contact-form-text" placeholder="Password" name="pwd">
        <button class="login-button" type="submit" name="login-submit">Log In</button>
    </form>

    </div>    
         
            <div class="footer-copyright">
                LetsTalkDevelop &copy; 2019 | All rights reserved.
              </div>
        </div>
        </body>
</html>
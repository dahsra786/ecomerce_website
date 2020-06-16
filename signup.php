<?php
require "include/common.php";

if(isset($_SESSION['email'])){
    header('location: products.php');
}
?>

<html>
    <head>
        <title>SignUp</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' type="text/css" href="indexstyle.css">
    </head>
    <body>
       <?php
        include "include/header.php";
       ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                
                    <form method="POST"  action="signup_script.php">
                        <h1>SIGN UP</h1>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                            <?php if(isset($_GET['email_error'])){
                                echo $_GET['email_error'];
                            }
                            ?>
                            <?php if(isset($_GET['error'])){
                                echo $_GET['error'];
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" pattern=".{8,}" required>
                        </div>
                        <div class="form-group">
                            <input type="phone" class="form-control" name="contact" placeholder="Contact" pattern="[0-9]{10}" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>
                        <button value="Submit" class="btn btn-primary" >Submit</button>
                        
                        
                    </form>
                </div>
            </div>
        </div>
        <?php
        include "include/footer.php";
        ?>
    </body>
</html>
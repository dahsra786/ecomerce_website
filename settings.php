<?php
require "include/common.php";
if(!isset($_SESSION['email'])){
    header('location: products.php');
}
?>

<html>
    <head>
        <title>Settings</title>
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
        <section>
            <div class="container">
                <div class="col-md-6">
                    <form method="POST" action="settings_script.php">
                        <h2>Change Password</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" name="oldpwd" placeholder="Old Password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="newpwd" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="Retypenewpwd" placeholder="Re-type New Password">
                            <?php 
                            if(isset($_GET['password_error'])){
                                echo $_GET['password_error'];
                            }
                            
                            if(isset($_GET['error'])){
                                echo $_GET['error'];
                            }
                            if(isset($_GET['success'])){
                                echo $_GET['success'];
                            }
                            ?>
                        </div>
                        <button type="submit" class="btn btn-primary">change</button>
                    </form>
                </div>
            </div>
        </section>
       <?php
        include "include/footer.php";
       ?>
    </body>
</html>
<?php
require "include/common.php";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' type="text/css" href="indexstyle.css">
        <style>
            form{
                margin-bottom: 150px;
            }
        </style>
    </head>
    <body>
        <div class="navbar navbar-inverse">
            <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a href="" class="navbar-brand">LifeStyle Store</a>    
            </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                </ul>
                </div>    
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h2>Login</h2></div>
                    <div class="panel-body">
                        <p class="text-warning"><i>Login to make a purchase</i></p>
                        <form method="POST" action="login_submit.php">
                            <input type="email" class="form-control" name="email" placeholder="email"> <br>
                            <input type="password" class="form-control" name="password" placeholder="password"> <br>
                            <input type="submit" value="Login" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="panel-footer">
                        <p>Don't have an account? <a href="signup.php">Register</a></p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <?php
        include "include/footer.php";
        ?>
    </body>
</html>
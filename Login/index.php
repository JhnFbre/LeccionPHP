<?php
    session_start();
?>
<DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body>
        <?php 
            if (isset($_SESSION['MiSession'])) {
                echo "<p> Hola usuario:(" . $_SESSION['MiSession']. ")
                [<a href='salir.php'> Salir </a>] </p>";
            }
            else{
                ?>
                <div class="container center-block">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <img class="profile-img" src="http://14aiks37fljp6kgn2vf63fz7s.wpengine.netdna-cdn.com/wp-content/uploads/sites/3/2014/04/user1.jpg"
                    alt="">
                <form class="form-signin" method="post" action="home.php">
                    <input type="text" class="form-control" placeholder="user" name="nombre" required autofocus>
                    <input type="password" name="clave" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Sign in</button>               
                    <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
                <style type="text/css">
                        .form-signin{
                            max-width: 330px;
                            padding: 15px;
                            margin: 0 auto;
                        }
                        .form-signin .form-signin-heading, .form-signin .checkbox
                        {
                            margin-bottom: 10px;
                        }
                        .form-signin .checkbox
                        {
                            font-weight: normal;
                        }
                        .form-signin .form-control
                        {
                            position: relative;
                            font-size: 16px;
                            height: auto;
                            padding: 10px;
                            -webkit-box-sizing: border-box;
                            -moz-box-sizing: border-box;
                            box-sizing: border-box;
                        }
                        .form-signin .form-control:focus
                        {
                            z-index: 2;
                        }
                        .form-signin input[type="text"]
                        {
                            margin-bottom: -1px;
                            border-bottom-left-radius: 0;
                            border-bottom-right-radius: 0;
                        }
                        .form-signin input[type="password"]
                        {
                            margin-bottom: 10px;
                            border-top-left-radius: 0;
                            border-top-right-radius: 0;
                        }
                        .account-wall
                        {
                            margin-top: 20px;
                            padding: 40px 0px 20px 0px;
                            background-color: #f7f7f7;
                            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                        }
                        .login-title
                        {
                            color: #555;
                            font-size: 18px;
                            font-weight: 400;
                            display: block;
                        }
                        .profile-img
                        {
                            width: 96px;
                            height: 96px;
                            margin: 0 auto 10px;
                            display: block;
                            -moz-border-radius: 50%;
                            -webkit-border-radius: 50%;
                            border-radius: 50%;
                        }
                        .need-help
                        {
                            margin-top: 10px;
                        }
                        .new-account
                        {
                            display: block;
                            margin-top: 10px;
                        }
                </style>
            </div>            
        </div>
    </div>
</div>
           
        <?php }?>
        
    </body>
</html>
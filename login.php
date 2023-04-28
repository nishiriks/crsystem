<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/crsystem/resource/php/class/core/init.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Portal</title>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="resource/css/styles.css">
</head>
<body>
  <nav class="barnav navbar navbar-dark shadow navbar-expand-md ">
        <div class="container-fluid">
          <div class="logo center">
            <a href="#">
              <img src="resource/img/logo2.png" height="115" class="d-inline-block align-top alt="alt="mdb logo"><h3 class="ib">
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link navitem" href="login.php">Home</a>
              <a class="nav-item nav-link navitem" href="changepassword.php">Change Password</a>
              <a class="nav-item nav-link navitem" href="updateprofile.php">Update Profile</a>
              <a class="nav-item nav-link navitem" href="logout.php">Log out</a>
            </div>
          </div>
        </div>
          </nav>
           <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-8 ">



                    <form class="text-center border border-light p-5 shadow puff-in-center" action="" method="post" >
                    <p class="h4 mb-4">Sign in</p>
                    <?php logd();?>
                    <input type="text" id="username" class="form-control mb-4" name="username" placeholder="Enter Username" required>
                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Enter Password" name ="password" required>
                    <div class="d-flex justify-content-around">
                    </div>
                    <input type =hidden name="token" value="<?php echo Token::generate(); ?>">
                    <input  type="submit"  class="btn btn-dark btn-block my-4"value="Login"/>
                    </form>


                    <footer id="sticky-footer" class="py-4 bg-dark text-white-50 fixed-bottom slide-in-right">
                      <div class="container text-center">
                          <div class="row">
                              <div class="col col-sm-5 text-left">
                                  <small>Copyright &copy;Westview University     All Rights Reserved 2023</small>
                              </div>
                              <div class="col text-right">
                                  <small>Created by: Marcus Bustos, Ralph Cruz, Angelique Gabriel, Krizia Lleva, Roderick Nucup, Emman Siva.</small>
                              </div>
                          </div>
                      </div>
                </div>
            </div>
          </div>
        </footer>
        <script src="vendor/js/jquery.js"></script>
        <script src="vendor/js/popper.js"></script>
        <script src="vendor/js/bootstrap.min.js"></script>
    </body>
    </html>

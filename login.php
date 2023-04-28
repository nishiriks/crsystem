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
  <link rel="stylesheet" type="text/css"  href="resource/css/login.css">
  <script src="https://kit.fontawesome.com/9622798f89.js"></script>
</head>
<body>


             <div class="container-fluid mt-5">
              <div class="row justify-content-center">
                <div class="text-center head-count border border-dark">
                  <h2 class="mb-4 text-center register">Register</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <input class="btn btn-submit" type="submit" value="Register">
                  <?php //logd();?>
                </div>

                <form class="text-center head-count border border-dark p-5 puff-in-center" action="" method="post" >
                  <h2>Log in </h2>
                  <?php logd();?>
                  <a href="#"><i class="fa-brands fa-facebook"></i></a>
                  <a href="#"><i class="fa-brands fa-google"></i></a>
                  <h6 class="mb-3">or use your account</h6>
                  <input type="text" id="username" class="form-control mb-4" name="username" placeholder="Enter Username" required>
                  <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Enter Password" name ="password" required>
                  <div class="d-flex justify-content-around">
                  </div>
                  <h6>Forgot your password?</h6>
                  <input type =hidden name="token" value="<?php echo Token::generate(); ?>">
                  <input  type="submit"  class="btn btn-submit my-4"value="Login"/>
                </form>

                <footer id="sticky-footer" class="py-3 bg-dark text-white-50 fixed-bottom slide-in-right">
                  <div class="container text-center">
                    <div class="row">
                      <div class="col col-sm-5 text-left">
                        <small>Copyright &copy;Centro Escolar University     Office of the Registrar 2019</small>
                      </div>
                      <div class="col text-right">
                        <small>Created by: Reymart Bolasoc, Amelia Valencia , James Mangalile, Kenneth De Leon , Pamela Reyes , Ellen Mijares</small>
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

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/crsystem/resource/php/class/core/init.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class Record Portal</title>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="resource/css/login.css">
  <script src="https://kit.fontawesome.com/9622798f89.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Jua&family=Lexend+Deca:wght@300;400&family=Raleway:ital,wght@0,100;0,200;1,100&family=Roboto+Slab:wght@100;500;600&family=Roboto:ital,wght@0,500;0,700;1,500&family=Rubik&family=Ruda:wght@800;900&family=Sen&family=Sigmar&family=Tilt+Warp&family=Ubuntu:ital,wght@0,500;0,700;1,700&family=Work+Sans&display=swap" rel="stylesheet">
</head>
<body>
        <section>
           <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="log-form log text-center head-count border">
                  <h2 class="head mb-4 text-center register">Register Now</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a href="register.php">
                  <button type="button" class="btn btn-submit">Register</button>
                  </a>
                  <?php //logd();?>
                </div>

                <form class="log-form text-center head-count bg-white border border-white p-5 puff-in-center" action="" method="post" >
                  <h2 class="head">Log in </h2>
                  <?php logd();?>
                  <a href="#"><i class="fa-brands fa-facebook"></i></a>
                  <a href="#"><i class="fa-brands fa-google"></i></a>
                  <h6 class="mb-3">or use your account</h6>
                  <input type="text" id="username" class="user-name form-control mb-4" name="username" placeholder="Enter Username" required>
                  <input type="password" id="defaultLoginFormPassword" class="user-name form-control mb-4" placeholder="Enter Password" name ="password" required>
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
                        <small>Copyright &copy;Westview University     All Rights Reserved 2023</small>
                      </div>
                      <div class="col text-right">
                         <small>Group4: Marcus Bustos, Ralph Cruz, Angelique Gabriel, Krizia Lleva, Roderick Nucup, Emman Siva.</small>
                      </div>
                    </div>
                  </div>
                  <div class="ocean">
             <div class="wave"></div>
             <div class="wave"></div>
             </div>
              </div>
            </div>
          </footer>
          </section>
        <script src="vendor/js/jquery.js"></script>
        <script src="vendor/js/popper.js"></script>
        <script src="vendor/js/bootstrap.min.js"></script>
    </body>
    </html>

             

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/crsystem/resource/php/class/core/init.php';
$accounts = new viewTable();
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
    <header>
        <nav class="navbar navbar-dark bg-white shadow-sm">
          <a class="navbar-brand" href="https://malolos.ceu.edu.ph/">
            <img src="resource/img/logo.jpg" height="70" class="d-inline-block align-top "
              alt="mdb logo"><h3 class="ib">
          </a>
             <a href="https:/www.facebook.com/theCEUofficial/"><i class="fab fa-facebook-f ceucolor"></i></a>
             <a href="https://www.instagram.com/ceuofficial/"><i class="fab fa-instagram ceucolor"></i></a>
             <a href="https://twitter.com/ceumalolos"><i class="fab fa-twitter ceucolor"></i></a>
        </nav>
    </header>
    <main class="container-fluid">
        <div>
          <div class="row">
            <div class="col-6">
              <div class="row">
                <div class="card mt-3 h-100">
                  <div class="card-header text-center">
                      <span class="h3">Class Record System</span>
                  </div>
                  <div class="card-body">
                      <div class="container">
                        <p class="lead text-center">This Portal is for Teachers only. If you have an account, then proceed to Login. If the opposite has occured, proceed to Register.</p>
                      </div>
                      <form class="text-center" method="post">
                          <a class="btn btn-primary w-25" href="register.php" role="button">Register</a>
                          <?php
                            $user = new user();
                            if ($user->isLoggedIn()) {
                              echo '<button class="btn btn-primary w-25" name="logout">Logout</button>';
                                if (isset($_POST['logout'])) {
                                  $user->logout();
                                }
                            } else {
                              echo '<a class="btn btn-primary w-25" href="login.php" role="button">Login</a>';

                            }
                          ?>
                      </form>
                  </div>
                </div>
                <div class="row">
                  <div class="card mt-3 h-100">
                    <div class="card-header text-center">
                      <span class="h3">Profile</span>
                    </div>
                    <div class="card-body">
                      <?php 
                        $user = new user();
                        if ($user->isLoggedIn()) {
                          echo '<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sunt quam reiciendis optio ex, aliquid in cum quibusdam deleniti earum. Reiciendis, nisi. Consequuntur itaque odio aspernatur tempora odit delectus a!</p>';
                          echo '<div class="container d-flex">';
                          profilePic();
                          echo '
                              <div class="container">
                                <p><strong>Name: </strong>'.($user->data()->name).'</p>
                                <p><strong>Username: </strong>'.($user->data()->username).'</p>
                                <p><strong>Email: </strong>'.($user->data()->email).'</p>
                              </div>
                          ';
                          echo '</div>';
                        } else {
                          echo '
                          <div class="container">
                              <p class="lead text-center">
                                The user&#39;s profile will only be visible if they have logged in to their own account. If you have any questions/problems feel free to
                                <a href="#">contact us here.</a> 
                              </p>
                          </div>
                          ';
                        }
                      ?>
                    </div>
                  </div>
                </div>
            </div>
            </div>
            <div class="col-6">
              <div class="card mt-3 h-100 list-main">
                <div class="card-header text-center">
                    <span class="h3">List of Accounts</span>
                </div>
                <div class="card-body text-center inner-list">
                    <?php $accounts->viewAccounts() ?>      
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50 fixed-bottom">
      <div class="container text-center">
          <div class="row">
              <div class="col col-sm-5 text-left">
                  <small>Copyright &copy;Centro Escolar University     Office of the Registrar 2019</small>
              </div>
              <div class="col text-right">
                  <small>Created by: Krizia Lleva, Angelique Gabriel, Emman Siva, Roderick Nucup Jr., Marcus Bustos, Ralph Cruz</small>
              </div>
          </div>
      </div>
    </footer>
    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
</body>
</html>

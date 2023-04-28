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
  <link rel="stylesheet" type="text/css"  href="resource/css/tables.css">
  <link rel="stylesheet" type="text/css"  href="resource/css/register.css">
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
        </nav>
        
    <main class="container-fluid">
        <div>
          <div class="row">
            <div class="col-6">
              <div class="row">
                <div class="ccard card mt-3 h-100">
                  <div class="chead card-header text-center">
                      <span class="h3">Class Record System</span>
                  </div>
                  <div class="card-body">
                      <div class="container">
                        <p class="lead text-center">This Portal is for Teachers only. If you have an account, then proceed to Login. If the opposite has occured, proceed to Register.</p>
                      </div>
                      <form class="text-center" method="post">
                          <a class="btn btn-info w-25" href="register.php" role="button">Register</a>
                          <?php
                            $user = new user();
                            if ($user->isLoggedIn()) {
                              echo '<button class="btn btn-info w-25" name="logout">Logout</button>';
                                if (isset($_POST['logout'])) {
                                  $user->logout();
                                }
                            } else {
                              echo '<a class="btn btn-info w-25" href="login.php" role="button">Login</a>';

                            }
                          ?>
                      </form>
                  </div>
                </div>
                <div class="row">
                  <div class="ccard card mt-5 h-100">
                    <div class="chead card-header text-center">
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
                                <a class="text-white" href="#">contact us here.</a> 
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
              <div class="ccard card mt-3 h-100 list-main">
                <div class="chead card-header text-center">
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
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50 fixed-bottom  slide-in-right">
   <div class="container text-center">
       <div class="row">
           <div class="col col-sm-5 text-left">
               <small>Copyright &copy;Westview University     All Rights Reserve 2023</small>
           </div>
           <div class="col text-right">
               <small>Created by: Marcus Bustos, Ralph Cruz, Angelique Gabriel, Krizia Lleva, Roderick Nucup, Emman Siva.</small>
           </div>
       </div>
   </div>
 </footer>
    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
</body>
</html>

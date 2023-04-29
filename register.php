<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/crsystem/resource/php/class/core/init.php';
$view = new view;
?>



 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registrar Portal</title>
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
   <link href="vendor/css/all.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css"  href="resource/css/register.css">
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">

 </head>
 <body>
         <!-- <nav class="navbar navbar-dark  shadow-sm slide-in-left">
           <a class="navbar-brand" href="https://malolos.ceu.edu.ph/">
             <img src="resource/img/logo2.png" height="115" class="ml-5 d-inline-block align-top"
               alt="mdb logo"><h3 class="ib">
           </a> -->

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
           <!-- <a href="exportTableAdmin.php"><i class="fas fa-table ceucolor"></i></a>
           <a href="statsAdmin.php"><i class="fas fa-chart-line ceucolor"></i></a>
           <a href="userVerificationAdmin.php"><i class="fas fa-user-plus ceucolor"></i></a>
           <a href="verificationAdmin.php"><i class="fas fa-user-graduate ceucolor"></i></a>
           <a href="viewAlumniAdmin.php"><i class="fa fa-graduation-cap ceucolor"></i></a>
           <a href="nTransactionAdmin.php"><i class="fas fa-file-upload ceucolor"></i></a> -->
           <!-- <a href="view_pending_requests.php"><i class="fas fa-home ceucolor"></i></a>
           <a href="https:/www.facebook.com/theCEUofficial/"><i class="fab fa-facebook ceucolor"></i></a>
           <a href="https://www.instagram.com/ceuofficial/"><i class="fab fa-instagram ceucolor"></i></a>
           <a href="https://twitter.com/ceumalolos"><i class="fab fa-twitter ceucolor"></i></a> -->


         </nav>

         <div class="container mt-5 puff-in-center">
             <div class="row">
                 <div class="col-12">
                     <h1 class="updateinfo text-center pt-5 pb-5 text-light">Register New Student Records Assistant</h1>
                 </div>
            </div>
            <?php
                vald();
            ?>
            <form action="" method="post">
                <table class="table ">
                    <tr>
                        <td>
                            <div class="row justify-content-center">
                                <div class="form-group col-4 text-light">
                                 <label for = "username" class="nameuser font-italic"> Username:</label>
                                 <input class="form-control"  type = "text" name="username" id="username" value ="<?php echo input::get('username');?>" autocomplete="off" required />
                                </div>
                                <div class="form-group col-4 text-light">
                                 <label for = "password" class="nameuser font-italic"> Password:</label>
                                 <input type="password" class="form-control" name="password" id="password" value ="<?php echo input::get('password');?>" autocomplete="off"required/>
                                </div>
                                <div class="form-group col-4 text-light">
                                 <label for = "ConfirmPassword" class="nameuser font-italic"> Confirm Password:</label>
                                 <input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword" value ="<?php echo input::get('ConfirmPassword');?>" autocomplete="off"required/>
                                </div>
                             </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row justify-content-center">
                                <div class="form-group col-4 text-light">
                                 <label for = "fullName" class="nameuser font-italic"> Full Name:</label>
                                 <input class="form-control"  type = "text" name="fullName" id="fullName" value ="<?php echo input::get('fullName');?>"/required>
                                </div>
                                <div class="form-group col-4 text-light">
                                  <label for="College" class="nameuser font-italic" >College/s to handle</label>
                                      <select id="College" name="College[]" class="selectpicker form-control" data-live-search="true" multiple required>
                                        <?php $view->collegeSP2();?>
                                      </select>
                                </div>
                                <div class="form-group col-4 text-light">
                                 <label for = "email" class="nameuser font-italic">Email Address:</label>
                                 <input class="form-control"  type = "text" name="email" id="email" value ="<?php echo input::get('email');?>"/required>
                                </div>
                             </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row justify-content-center">
                                <div class="form-group col-7">
                                    <label  >&nbsp;</label>
                                <input type="hidden" name ="Token" value="<?php echo Token::generate();?>" />
                                 <input class="wave1" type="submit" value="Register New SRA" class=" form-control btn btn-primary" />
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
             </form>
         </div>
       </body>
       <div class="ocean">
             <div class="wave"></div>
             <div class="wave"></div>
             </div>
 </div>
 <footer id="sticky-footer" class="py-4 bg-dark text-white-50 fixed-bottom  slide-in-right">
   <div class="container text-center">
       <div class="row">
           <div class="col col-sm-5 text-left">
               <small>Copyright &copy;Westview University     All Rights Reserved 2023</small>
           </div>
           <div class="col text-right">
               <small>Created by: Marcus Bustos, Ralph Cruz, Angelique Gabriel, Krizia Lleva, Roderick Nucup, Wiliam Wyler.</small>
           </div>
       </div>
   </div>
 </footer>
     <script src="vendor/js/jquery.js"></script>
     <script src="vendor/js/popper.js"></script>
     <script src="vendor/js/bootstrap.min.js"></script>
     <script src="vendor/js/bootstrap-select.min.js"></script>
 </body>
 </html>

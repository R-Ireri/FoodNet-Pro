<?php
require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['Email']) && !isset($_SESSION['rq'])) {
    header("Location: recover_u_1.php");
}else{
  $answer = $_SESSION['ra'];
  $query=mysqli_query($conn,"SELECT * FROM `admin` WHERE `Recovery_Answer`='$answer'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Food Distribution System ~ Reset Password Page</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <div class="full_bg">
         <!-- header -->
         <header class="header-area">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class=" col-md-2 col-sm-3">
                     <div class="logo">
                        <a href="index.html">Food<span>Distribution</span></a>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-9">
                     <div class="navbar-area">
                        <nav class="site-navbar">
                           <ul>
                              <li><a href="index.html">Home</a></li>
                              <li><a href="index.html">About</a></li>
                              <li><a href="index.html">Service</a></li>
                              <li><a href="index.html">Contact</a></li>
                           </ul>
                           <button class="nav-toggler">
                           <span></span>
                           </button>
                        </nav>
                     </div>
                  </div>
                  <div class="col-md-2 padd_0 d_none">
                     <ul class="email text_align_right">
                        <li><a class="active" href="login.html">Login</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </header>
         <!-- end header inner -->
      </div>
      <!-- contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage text_align_center">
                     <span>Reset Password</span>
                     <h2>Area Administrator Set New Password</h2>
                  </div>
               </div>
               <div class="col-md-8 offset-md-2">
                  <form id="request" class="main_form" method="POST" action="insertnewpass_a.php">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="form_control" id="pass" required placeholder="Enter New Password" type="password" name="pass"> 
                           <input class="input-group-password" type="checkbox" onclick="myFunction()">Show Password   
                        </div>
                        <div class="col-md-12 ">
                           <input class="form_control" required id="pass1" placeholder="Enter New Password" type="password" name="cpass"> 
                           <input class="input-group-password" type="checkbox" onclick="myFunction1()">Show Password   
                        </div>
                        <div class="col-md-12">
                           <div class="group_btn">
                            <button type="submit" name="submit" class="send_btn">Submit</button>
                         </div>
                     </div>
                  </form>
               </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
                <br>
               <br>
               <br>
               <br>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                        <div class="col-lg-3 col-md-6">
                           <div class="hedingh3 text_align_left">
                              <h3> Explore</h3>
                              <ul class="menu_footer">
                                 <li><a href="index.html">Home</a></li>
                                 <li><a href="index.html">About</a></li>
                                 <li><a href="index.html">Service</a></li>
                              </ul>
                           </div>
                        </div>
                         <div class="col-lg-3 col-md-6">
                           <div class="hedingh3  flot_right text_align_left">
                              <h3>Contact</h3>
                              <ul class="top_infomation">
                                 <li><i class="fa fa-phone" aria-hidden="true"></i>
                                     0765432122
                                 </li>
                                 <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                    <a href="mailto:rita.Ireri2021@strathmore.edu" style="font-size: 12px;">rita.Ireri2021@strathmore.edu</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
             
            <div class="copyright" style="text-align: center;">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-8">
                        <p>© 2022 All Rights Reserved. Design by Rita Ireri145900.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/custom.js"></script>

       <script >
    function myFunction() {
          var x =
          document.getElementById('pass');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }

            function myFunction1() {
          var x =
          document.getElementById('pass1');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }


  </script>

   </body>
</html>
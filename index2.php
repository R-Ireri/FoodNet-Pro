<?php
require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['Email']) && !isset($_SESSION['Fname'])) {
    header("Location: login.html");
}else{
  $email = $_SESSION['Email'];
  $first = $_SESSION['Fname'];
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `Email_Address`='$email'")or die(mysqli_error());
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
      <title>Food Distibution System - Area Administrator Homepage</title>
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

       <style type="text/css">
        
          table{
    border: solid 1px black;
    align-items: center;
  }

   th, tr, td{
    border: solid 1px black;
    padding: 0px 0px;
  }

    </style>

   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <div class="full_bg">
         <!-- header -->
         <header class="header-area" style="background-color: rgb(87, 202, 162);">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class=" col-md-2 col-sm-3">
                     <div class="logo">
                        <a href="index2.php">Food<span>Distibution</span></a>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-9">
                     <div class="navbar-area">
                        <nav class="site-navbar">
                           <ul>
                              <li><a class="active" href="index2.php">Home</a></li>
                              <li><a href="#about">My Details</a></li>
                              <li><a href="#service">Commodities</a></li>
                                <li><a href="#good">My Donated Goods</a></li>
                              <li><a href="#contact">Contact</a></li>
                           </ul>
                           <button class="nav-toggler">
                           <span></span>
                           </button>
                        </nav>
                     </div>
                  </div>
                  <div class="col-md-2 padd_0 d_none">
                     <ul class="email text_align_right">
                        <li><a href="logout.php">Logout</a>
                        </li>

                     </ul>
                  </div>
               </div>
            </div>
         </header>
         <!-- end header inner -->
         <!-- top -->
         <div class="slider_main">
            <!-- carousel code -->
             <div id="banner1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
                              <ol class="carousel-indicators">
                                 <li data-target="#banner" data-slide-to="0" class="active"></li>
                                 <li data-target="#banner1" data-slide-to="1"></li>
                                 <li data-target="#banner2" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner" role="listbox">
                                 <div class="carousel-item active">
                                    <picture>
                                       <source srcset="images/banner.jpeg" >
                                     
                                       <img srcset="images/banner1.jpeg" alt="responsive image" class="d-block img-fluid">
                                    </picture>
                                    <div class="carousel-caption relative">
                                       
                                    </div>
                                 </div>
                                 <!-- /.carousel-item -->
                                 <div class="carousel-item">
                                    <picture>
                                     
                                       <img srcset="images/banner2.jpeg" alt="responsive image" class="d-block img-fluid">
                                    </picture>
                                    <div class="carousel-caption relative">
                                       
                                    </div>
                                 </div>
                                 <!-- /.carousel-item -->
                                 <div class="carousel-item">
                                    <picture>
                                       <source srcset="images/banner.jpeg" >
                                       <source srcset="images/banner1.jpeg" >
                                       <source srcset="images/banner2.jpeg" >
                                       <img srcset="images/banner.jpg" alt="responsive image" class="d-block img-fluid">
                                    </picture>
                                    <div class="carousel-caption relative">
                                       
                                    </div>
                                 </div>
                                 <!-- /.carousel-item -->
                              </div>
                              <!-- /.carousel-inner -->
                              <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                              <i class="fa fa-angle-left" aria-hidden="true"></i>
                              <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                              <i class="fa fa-angle-right" aria-hidden="true"></i>
                              <span class="sr-only">Next</span>
                              </a>
                           </div>
                           <div class="container-fluid">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="willom">
                                      <h1>Welcome <?php echo $row['Fullname']; ?></h1>
                                    </div>
                                 </div>
                              </div>
                           </div>
         </div>
      </div>
      <!-- end banner -->
      <!-- about -->
      <div class="about" id="about">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-lg-6 col-md-12">
                  <div class="titlepage text_align_left">
                     <h1>Update My User Details:</h1>
                   </div>
                  <br>
                  <br>
                                    <div class="col-md-8 offset-md-2">
                  <form id="request" class="main_form" method="POST" action="update_u.php">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="form_control" required value="<?php echo $row['Fullname']; ?>" placeholder="Your Fullname" type="text" name="fname"> 
                           <input class="form_control" required hidden value="<?php echo $row['User_ID']; ?>" type="text" name="did"> 
                        </div>
                        <div class="col-md-12 ">
                           <input class="form_control" required value="<?php echo $row['Phone_Number']; ?>" placeholder="Your Phone Number" type="text" name="email"> 
                        </div>
                        <div class="col-md-12">
                           <div class="group_btn">
                            <button type="submit" name="reg" class="send_btn">Update</button>
                         </div>
                     </div>
                  </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- services -->
      <div class="services" id="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                                    <div class="titlepage text_align_left">
                     <h1>List of Commodities</h1>
                  </div>
                     <table id="printTable1">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Commodity ID</th>
<th style="text-align: left;
  padding: 8px;">Area Administrator</th>
  <th style="text-align: left;
  padding: 8px;">Commodity</th>
<th style="text-align: left;
  padding: 8px;">Quantity</th>
  <th style="text-align: left;
  padding: 8px;">Date Added</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "food_distribution");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 $email = $_SESSION['Email'];
$sql = "SELECT * FROM `commodity`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Commodity_ID"] . "</td><td>" . $row["Area_Administrator"] . "</td><td>" . $row["Commodity"] . "</td><td>"
. $row["Quantity"]. "</td><td>"
. $row["Date_Added"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>
<br>
<br>
<button onclick="printData1()" style="width: 30%; margin-left: 30%; color: black;">Print the List of Commodities</button>
<br>
<br>
<div style="width: 45%; margin-left: 30%;">
<label style="text-align: center;">To Donate, kindly input the Commodity ID and Quantity in the fields below:</label>
<br>
<br>
<form method="POST" action="delete.php">
<input type="text" required name="id4" style="color: black;" placeholder="Commodity ID...">
<input type="text" required hidden name="id5" value="<?php echo $first; ?>" style="color: black;" placeholder="Commodity ID...">
<input type="number" required name="quan" placeholder="Commodity Quantity...">
<input type="text" id="today" required hidden name="date"> 
<button type="submit" name="add" class="send_btn">Submit Donation</button>
            </div>
         </form>
      </div>
   </div>
</div>
</div>
</div>
        <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

<script type="text/javascript">
   n =  new Date();
  y = n.getFullYear();
  m = n.getMonth() + 1;
  d = n.getDate();
  document.getElementById("today").value = m + "/" + d + "/" + y;
</script>
      <!-- end services -->
      <!-- customers -->
      <div class="customers" id="good">
         <div class="clients_bg">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                                       <div class="titlepage text_align_left">
                     <h1>List of My Donated Goods</h1>
                  </div>
                     <table id="printTable2">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Donation ID</th>
<th style="text-align: left;
  padding: 8px;">Commodity ID</th>
  <th style="text-align: left;
  padding: 8px;">User ID</th>
  <th style="text-align: left;
  padding: 8px;">Quantity</th>
<th style="text-align: left;
  padding: 8px;">Date Donated</th>
  <th style="text-align: left;
  padding: 8px;">Location</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "food_distribution");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 $email = $_SESSION['Email'];
$sql = "SELECT `Dontation_ID`, `Commodity_ID`, `User_ID`, `Quantity`, `Date_Donated`, `Location` FROM `goods_donated` WHERE `User_ID` = '$first'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Dontation_ID"] . "</td><td>" . $row["Commodity_ID"] . "</td><td>" . $row["User_ID"] . "</td><td>"
. $row["Quantity"]. "</td><td>" . $row["Date_Donated"]. "</td><td>" . $row["Location"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>
<br>
<br>
<button onclick="printData2()" style="width: 30%; margin-left: 30%; color: black;">Print the List of My Donated Goods</button>
<br>
<br>
</div>
</div>
</div>
</div>
</div>

        <script type="text/javascript">
function printData2()
{
   var divToPrint=document.getElementById("printTable2");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>
<br>
<br>
      <!-- end customers -->
      <!-- contact -->
      <div class="contact" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage text_align_center">
                     <span>Our Contact</span>
                     <h2>Get In Touch!</h2>
                  </div>
               </div>
               <div class="col-md-8 offset-md-2" style="text-align: center; font-size: 32px;">
            <label>Call Us:</label>
            <a href="">0765432122</a>
            <br>
            <label>Email Us:</label>
            <a href="mailto:Rita.ireri2021@strathmore.edu">Rita.ireri2021@strathmore.edu</a>
            <br>
               </div>
            </div>
         </div>
      </div>
      <br>
      <br>
      <br>
      <br>
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
                                 <li><a class="active" href="index2.php">Home</a></li>
                              <li><a href="#service">Commodities</a></li>
                                <li><a href="#good">My Donated Goods</a></li>
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
                                    <a href="mailto:Rita.ireri2021@strathmore.edu" style="font-size: 12px;">Rita.ireri2021@strathmore.edu</a>
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
                        <p>© 2022 All Rights Reserved. Design by Rita Ireri 145900.</p>
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
   </body>
</html>
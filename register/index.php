<?php include('../include/server.php') ?>
<!DOCTYPE html>
 <html lang="en">

     <head>
         <title>Mero Pasal</title>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <!--===============================================================================================-->
         <link rel="icon" type="image/png" href="../images/icons/favicon.ico" />
         <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="../Login/vendor/bootstrap/css/bootstrap.min.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="../Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="../Login/vendor/animate/animate.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="../Login/vendor/css-hamburgers/hamburgers.min.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="../Login/vendor/select2/select2.min.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" href="../home/style.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" href="../retailerHome/style.css">
          <!--===============================================================================================-->


     </head>

     <body>
         <!--============================================= 
            Header 
        ================================================-->

         <div class="header">
             <h1>MERO PASAL</h1>
             <p>Find your ideal Product and compare prices from <br>different shops</p>
        </div>

<!-- CUSTOMER INFOS -->

<!-- DATA INSERTION FROM HERE -->

<div class="container insertData">
<h2 class="text-center">Enter Details to SignUp</h2>
<form method="post" action="index.php">
	  <?php include('../include/errors.php'); ?>

	  <div class="row">
	  <div class="col">
    <select class="form-control" name="usertype" id="exampleFormControlSelect1">
      <option>Customer</option>
      <option>Retailer</option>
    </select>
    </div>
	</div>

  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="username" placeholder="UserName">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input type="email" class="form-control" name="email" placeholder="Email Address">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input type="password" class="form-control" name="password_1" placeholder="Password">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input type="password" class="form-control" name="password_2" placeholder="Confirm Password">
    </div>
  </div>
  <div class="row justify-content-center">
	  <div class="col">
	  <button type="submit" name="reg_user" class="btn btn-outline-primary">SignUp</button>
	  </div>
 
  </div>
  <p>
  		Already a member? <a href="../">Sign in</a>
	  </p>
	  <style>
		  button{
			  text-align: center;
			  width: 100%;
		  }
	 p{
		 font-size: 1.3em;
		 text-align: center;
	 } 
	 a{
		 text-decoration: none;
		 color: #ff5e62;
	 }
	 a:hover{
		 color: #ff5e62;
	 }
	  </style>
</form>
</div>

              <!--====================================================== 
            Footer Area 
        ============================================================-->
         <footer id="footer" class="footer text-center">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <h4>MERO PASAL</h4>
                         <div class="footer-social">
                             <ul>
                                 <li><a target="_blank" href="https://www.facebook.com"><i
                                             class="fa fa-facebook"></i></a></li>
                                 <li><a href="callto:"><i class="fa fa-phone"></i></a></li>
                                 <li><a href="mailto:"><i class="fa fa-envelope"></i></a></li>
                                 <li><a target="_blank" href="#"><i class="fa fa-globe"></i></a></li>
                             </ul>
                         </div><!-- Footer social end -->

                         <div class="footer-menu">
                             <ul class="nav unstyled justify-content-center">
                                 <li><a href="#">About</a></li>
                                 <li><a href="Login/index.html">Login</a></li>
                                 <li><a href="#">SignUp</a></li>
                                 <li><a href="#">Products</a></li>
                                 <li><a href="#">Contact</a></li>
                             </ul>
                         </div><!-- Footer menu end -->

                         <div class="copyright-info">
                             <span>Copyright &copy2019 <a href="#">Mero Pasal</a>.All
                                 Rights
                                 Reserved.</span>
                         </div><!-- Copyright info end -->

                     </div><!-- Content col end -->
                 </div><!-- Content row end -->
             </div><!-- Container end -->

             <div class="footer-pattern"></div> <!-- Footer pattern image -->


         </footer><!-- Footer end -->

         <!--===============================================================================================-->
         <script src="../Login/vendor/jquery/jquery-3.2.1.min.js"></script>
         <!--===============================================================================================-->
         <script src="../Login/vendor/bootstrap/js/popper.js"></script>
         <script src="../Login/vendor/bootstrap/js/bootstrap.min.js"></script>
         <!--===============================================================================================-->
         <script src="../Login/vendor/select2/select2.min.js"></script>
         <!--===============================================================================================-->
         <script src="../Login/vendor/tilt/tilt.jquery.min.js"></script>
         <!--===============================================================================================-->
         <script src="../js/locationListHandler.js"></script>
         <!--===============================================================================================-->
     </body>
 </html>
<?php
include_once('../include/connection.php');
$sql= "SELECT * FROM PRODUCT WHERE remarks='Featured Product';";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
?>

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
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="style.css">
        <!--===============================================================================================-->

    </head>

    <body>
        <nav id="nav" class="navbar navbar-expand-lg bg-light fixed-top">
            <!-- AAVISKAR LOGO HERE -->
            <div class="container wave">
                <span>
                    <a class="navbar-brand" href="index.html">
                        <img id="logo" src="img/logo.png" class="d-inline-block align-top" alt="L O G O">
                    </a>
                </span>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="collapse_target">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a id="navItems" href="../" class="nav-link button"><button
                                    type="button" class="btn btn-outline-success">Login</button></a></li>
                        <li class="nav-item"><a id="navItems" href="../register/" class="nav-link button"><button
                                    type="button" class="btn btn-outline-success">SignUp</button></a></li>
                        <li class="nav-item"><a id="navItems" href="../search/" class="nav-link button"><button
                                    type="button" class="btn btn-outline-success">Search</button></a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="header">
            <h1>MERO PASAL</h1>
            <p>Find your ideal Product and compare prices from <br>different shops</p>
        </div>

        <div class="about">
            <div class="row justify-content-center">
                <div class="col-md-3 column">
                    <i class="fa fa-search"></i>
                    <h4>Search</h4>
                    <p>Search your Favourite Products in just a Click.</p>
                </div>
                <div class="col-md-3 column">
                    <i class="fa fa-users"></i>
                    <h4>Compare</h4>
                    <p>Compare the Prices of Same products.</p>
                </div>
                <div class="col-md-3 column">
                    <i class="fa fa-money"></i>
                    <h4>Buy</h4>
                    <p>Find the best Price and Location of Shop and Buy the Product at Shop.</p>
                </div>
            </div>
        </div>
        
        
        <div class="locationBased container" id='nearYou'>
             <h2><span> Featured</span> Products </h2>  
             <div class="row justify-content-center">  
<?php
        if($resultCheck>0){
    while($row=mysqli_fetch_assoc($result)){
        echo ('
             <div class="col-md-2">
            <img class= "img-fluid" src="../img/products/product.png" alt="">
                <h4>'. $row["productName"].'</h4>
             <p>NRs.'. $row["price"].' </p>
            </div>
        ');
    }}
    ?>
     </div>
         </div>
         <style>
         .locationBased img{
             height: 10em !important;
             width: auto;
         }
         </style>

        <!-- FIND HOTELS INFORMATION -->
        <div class="information container-fluid">
            <div class="container">
                <div class="row justify-content-around text-center">
                    <div class="col-md-5 inform">
                        <h3>Find Cheap and Quality Products on Mero Pasal</h3>
                        <div class="border-bottom"></div>
                        <p>Here in our website, you can find the cheap and quality goods. We offer you the service to compare the prices of same products in the shops of any particular location. So, you can choose your preferred location and can get the products at lowest possible price.</p>
                    </div>
                    <!-- HOW TO FIND-->
                    <div class="col-md-5 howToFind">
                        <h3>How to Find your Product</h3>
                        <div class="border-bottom"></div>
                        <p> Just Search what is your need with your preferred location. We will provide you with all the information we have. You can have the sorted price range in Ascending order, which leads you to choose the cheapest good at a particular shop. Its easy than you thought. Just give it a try.


                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area -->
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
        <script src="home/js/featuredContent.js"></script>
        <!--===============================================================================================-->
        <script src="../js/script.js"></script>
        <!--===============================================================================================-->
    </body>

</html>

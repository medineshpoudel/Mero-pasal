<?php
include_once('../include/connection.php');
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
        <link rel="stylesheet" href="style.css">
        <!--===============================================================================================-->

    </head>

    <body>
        <nav id="nav" class="navbar navbar-expand-lg bg-light fixed-top">
            <!-- AAVISKAR LOGO HERE -->
            <div class="container-fluid wave">
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
                        <li class="nav-item"><a id="navItems" href="/Login/" class="nav-link button"> <i
                                    class="fa fa-user"></i> Login or SignUp</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <div class="header">
            <h1>MERO PASAL</h1>
            <p>Find your ideal Product and compare prices from <br>different shops</p>
            <!--==================================================
             Search Bar
============================================================ -->
            <div class="searchBar container">
                <form action="index.php" method="POST">
                    <div class="form-row justify-content-center">
                        <div class="col-md-5">
                        <select id="category" name= "category" class="form-control">
                                <!-- category from JS File -->
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <select id="inputState" name= "location" class="form-control">
                                <!-- Locations from JS File -->
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
       

        <!--===================================================
Search DETAILS
===================================================== -->
        <div class="container-fluid productDetail" id="product">

        <?php
            $category = $_POST['category'];
            $location = $_POST['location'];
$sql = "SELECT * FROM Product WHERE category= '$category' && location = '$location' ORDER BY price ASC;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck>0){
    while($row=mysqli_fetch_assoc($result)){
?>

            <div class="row justify-content-center">
                <div class="col-md-3 imgColumn">
                    <img src="../img/products/product.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 detailColumn">
                    <h3><?php echo $row['productName'];?></h3>
                    <h6>NRs. <?php echo $row['price'];?></h6>
                    <p>Sold by:</p>
                    <a href="" data-toggle="modal" data-target="#<?php echo $row["shopName"];?>">
                    <h4><?php echo $row['shopName'];?></h4></a>
                    <h5><i class="fa fa-map-marker"></i> <?php echo $row['location'];?></h5>
                </div>
            </div>
       

<?php 
$query = "SELECT * FROM ShopInfo;";
$results = mysqli_query($conn,$query);


    while($data=mysqli_fetch_assoc($results)){

?>

    <div class="modal fade" id="<?php echo $row["shopName"];?>">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3><?php echo $data["shopName"];?></h3>
            <div class="border-bottom"></div>
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <h6>PAN NO/Reg No.</h6>
                    <h5><?php echo $data["regNo"];?></h5>
                    <h6>Contact Number</h6>
                    <h5><?php echo $data["contact"];?></h5>
                    <h6>Category</h6>
                    <h5><?php echo $data["category"];?></h5>
                </div>
                <div class="col-md-6">
                    <h6>Email</h6>
                    <h5><?php echo $data["email"];?></h5>
                    <h6>Website</h6>
                    <h5><?php echo $data["website"];?></h5>
                </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
    <?php
    } 
    }}
    else{
echo '<h2 class="text-center">No Items Found!!!</h2>';
    }
    ?>
     </div>


<style>
    h2{
        font-family: poppins;
        font-weight: bold;
        padding: 5em 0em;
    }
    </style>



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
        <script src="../js/locationListHandler.js"></script>
        <script src="../js/categoryHandler.js"></script>
        <!--===============================================================================================-->
        <script src="contentHandler.js"></script>
        <!--===============================================================================================-->
        <script src="specsHandler.js"></script>
        <!--===============================================================================================-->
    </body>

</html>

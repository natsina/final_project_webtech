<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "PayInCredit_94712023";

//connection
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

//check connection
if(!$conn){
	die("connection failed");
}

?>

<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KASTA</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">



<!--NavBar-->

<div class="bg-main">
    <div class="mid-header container">
        <a href="index.html" class="logo">Dashboard</a>
        <div class="search">
            <input type="text" placeholder="Search">
            <i class='bx bx-search-alt'></i>
        </div>
    </div>


    <div class="bg-second">
        <div class="bottom-header container">
            <ul class="main-menu">
                <li><a href="adminpage.html">Home</a></li>
                <li><a href="balances.php">Balances</a></li>
                <li><a href="paymentspage.php">Payments</a></li>
                <li><a href="merchants.php">Merchants</a></li>

            </ul>
        </div>
    </div>

</div>

</head>

<br><br>


                    <div class="container">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-2"> <h2> Payments for Delivered Items </h2>
                            <br><br>

                        </div>
                        <div class="card-body">
                          <?php 
                          $sql = "SELECT * FROM Payment";
                          $result = mysqli_query($conn, $sql);
                          if (mysqli_num_rows($result)>0){
                            echo '<div class="table-responsive">';
                               echo '<table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">';
                                    echo '<thead>';
                                        echo '<tr>';
                                            
                                           echo '<th data-field>Payment ID</th>';
                                           echo '<th >Amount</th>'; 
                                           echo '<th > Date of Payment</th>';
                                           echo '<th >Item Name</th>'; 
                                              
                                        echo '</tr>';
                                    echo '</thead>';
                                    echo '</tbody>';

                                    while($row = mysqli_fetch_assoc($result)){
                                      echo '<tr>';
                                            echo "<td>" .$row['PaymentID']. "</td>"; 
                                            echo "<td>" .$row['Amount']. "</td>";
                                            echo "<td>" .$row['Date_Of_Payment']. "</td>";
                                            echo "<td>" .$row['Item_Name']. "</td>";
                                           
                                            
                                    }
                                
                                    
                               echo '</table>';
                                }
                                    ?>
                                
                            </div>
                        </div>
                      </div>

                      <div class="container">


    <br><br>
    <br><br>
    <br><br>
    <br><br>

      
   </body>



<!-- footer -->
<footer class="bg-second">
    <div class="container">
        <div class="row">
            <div class="col-3 col-md-6">
                <h3 class="footer-head">Products</h3>
                <ul class="menu">
                    <li><a href="#">Help center</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">product help</a></li>
                    <li><a href="#">warranty</a></li>
                    <li><a href="#">order status</a></li>
                </ul>
            </div>
            <div class="col-3 col-md-6">
                <h3 class="footer-head">services</h3>
                <ul class="menu">
                    <li><a href="#">Help center</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">product help</a></li>
                    <li><a href="#">warranty</a></li>
                    <li><a href="#">order status</a></li>
                </ul>
            </div>
            <div class="col-3 col-md-6">
                <h3 class="footer-head">support</h3>
                <ul class="menu">
                    <li><a href="#">Help center</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">product help</a></li>
                    <li><a href="#">warranty</a></li>
                    <li><a href="#">order status</a></li>
                </ul>
            </div>
            <div class="col-3 col-md-6 col-sm-12">
                <div class="contact">
                    <h3 class="contact-header">
                        KASTA
                    </h3>
                    <ul class="contact-socials">
                        <li><a href="#">
                                <i class='bx bxl-facebook-circle'></i>
                            </a></li>
                        <li><a href="#">
                                <i class='bx bxl-instagram-alt'></i>
                            </a></li>
                        <li><a href="#">
                                <i class='bx bxl-youtube'></i>
                            </a></li>
                        <li><a href="#">
                                <i class='bx bxl-twitter'></i>
                            </a></li>
                    </ul>
                </div>
                <div class="subscribe">
                    <input type="email" placeholder="ENTER YOUR EMAIL">
                    <button>subscribe</button>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->



</html>
<?php
require 'db_conn.php';
$Flight_No = $_POST['cancel_flight'];
if (isset($_POST['cancel'])){
    $sql="DELETE FROM  booking WHERE TicketID='".$Flight_No."'";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo '<script type="text/javascript">alert("'.mysqli_error($conn).'");history.go(-1);</script>';
    }
    else
    {
        echo '<script type="text/javascript">alert("Flight Successfully Cancelled and Your Money will be sent to your account in 24 Hours");</script>';	
    }
}
?>
<html>
<head>
    <link rel="stylesheet" href="Front with CSS.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-orange.min.css" />
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>

<body background="max.jpg">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header"style= "background-color:#4F5356">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Search Results</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="home.php">Home</a>
                    <a class="mdl-navigation__link" href="form.php">Signup</a>
                    <a class="mdl-navigation__link" href="front.php">Login</a>
                    <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                    <a class="mdl-navigation__link" href="Admin_login.php">Administrators</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Success</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="home.php">Home</a>
                <a class="mdl-navigation__link" href="form.php">Signup</a>
                <a class="mdl-navigation__link" href="front.php">Login</a>
                <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                <a class="mdl-navigation__link" href="Admin_login.php">Administrators</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
        <center>
        <br><br><br><br>
        <div class="demo-card-wide mdl-card mdl-shadow--16dp">
                        <div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Search for Flights:</div>
                        <br>
                        </div>
        <br><br><br>
        <Img Src="confirm.png" align="center" height="25%" ALT="confirmation tick">
        <br><br><br>
        <div class="mdl-typography--title">Flight Has been Cancelled</div>
        <br><br>
        <div class="mdl-shadow--16dp" style="background-color:#212121"><br>
<div class="mdl-shadow--16dp" style="background-color:#4F5356"><br>
                        <a class="mdl-navigation__link" href="home.php"><div class="mdl-typography--title" style="color:white;font-size:15px;background-color:#4F5356"><b>Book Another</b></div></a>
                        <br>
                        </div>
                
                    </button>
                    <br><br>
                    </div>
                    </div>
        </div>


        </div>
        
        </main>
        </body>
        </html>
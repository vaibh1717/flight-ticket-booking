<?php
session_start();
session_destroy();
?>
<Html>
<Head>
    <Title>Flight Booking System</Title>
    <link rel="stylesheet" href="Front with CSS.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-orange.min.css" />
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</Head>

<Body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header"style="background-color:#4F5356 ">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Login</span>
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
            <span class="mdl-layout-title">Login</span>
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
                <!-- Your content goes here -->
                <div class="container"style="background-color:white">
                    <div class="header"style="background-color:white">
                       

                        <br>
                        <div class="mdl-typography--display-1" style="color:black">𝘽𝙡𝙪𝙚𝙒𝙞𝙣𝙜 𝘼𝙞𝙧𝙡𝙞𝙣𝙚𝙨</div><br>
						
                        <div class="mdl-typography--title"style="color:black"></div><br><br>
                    </div>
                    <div class="section">
                        <Img Src="rr.avif" height="80%" width="110%" ALT="Plane" align="left">
                    </div>
                    <br>
                    <br><br>
					
                    <form action="logged.php" method="POST" >
                    <div class="login"align="center">
                    <div class="mdl-shadow--16dp" style="background-color:#4F5356">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff;background-color:#4F5356"><center>Log In</center></div>
                        <br>
                        </div><br><br>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="Loginid" name="Loginid">
                            <label class="mdl-textfield__label" for="Loginid">Email Id</label>
                        </div>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="password" id="Password" name="Password">
                            <label class="mdl-textfield__label" for="Password">Password</label>
                        </div><br><br>
                        <input style="background-color:#4F5356;color:white; "type="submit" name="login" value="Login" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"/>

                    </div>
                    <br><br><br><br><br><br><br><br>

                    
                </div>
            </div>
            <
        </main>
</Body>

</Html>
<?php
?>
<html>
<head>
        <meta charset="utf-8"/>
         <link rel="shortcut icon" href="img/logo.jpg" type="image/png">
        <title>SU Live Music Society</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Stirling University Live Music Society</h1>
        </header>
        <nav>
            <hr width="50%"/>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="events.php">Events</a>
            <a href="roomBooking.php"><strong>Room Booking</strong></strongRoom></a>
            <a href="contact.php">Contact</a>
        </nav>
        <body>
            <br></br>
            <br></br>
            <form id='login' action='inc/login.php' method='POST' accept-charset='UTF-8'>
                <fieldset>
                    <legend>Login</legend>
                    <input type='hidden' name='submitted' id='submitted' value='1'/>
                    <label for='username'>Username*:</label>
                    <input type="text" name='username' id='username' maxLength="50" required/>
                    <br></br>
                    <label for='password'>Password*:</label>
                    <input type="text" name='password' id='password' maxLength="50" required/>
                    <input type='submit' name='Submit' value='Submit'/>                </fieldset>
            </form>
            <br></br>
         </body>
         <footer>
            <br></br>
            <a href="https://twitter.com/SULiveMusic" style="color:white; font-size:25px;"><i class="fa fa-twitter"></i></a>
            <a href="https://www.facebook.com/StirlingLiveMusic/" style="color:white; font-size:25px;"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/stirlinglivemusic/?hl=en"style="color:white; font-size:25px;"><i class="fa fa-instagram"></i></a>
            
            <h3>Live Music Society - University of Stirling</h3>
            <br></br>
        </footer>
        
    
</html>
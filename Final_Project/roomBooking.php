<?php
?>
<html>
<head>
        <meta charset="utf-8"/>
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
            <a href="committee.php">Committee</a>
            <a href="roomBooking.php"><strong>Room Booking</strong></strongRoom></a>
            <a href="contact.php">Contact</a>
        </nav>
        <body>
            <br></br>
            <br></br>
            <form id='login' action='login.php' method='post' accept-charset='UTF-8'>
                <fieldset>
                    <legend>Login</legend>
                    <input type='hidden' name='submitted' id='submitted' value='1'/>
                    <label for='username'>Username*:</label>
                    <input type="text" name='username' id='username' maxLength="50"/>
                    <br></br>
                    <label for='password'>Password*:</label>
                    <input type="text" name='password' id='password' maxLength="50"/>
                    <input type='submit' name='Submit' value='Submit'/>                </fieldset>
            </form>
            <br></br>
        </body>
        <footer>
            <h3>Live Music Society - University of Stirling</h3>
            <figure id ="music_notes">
                <img src="img/musical_notes.jpg" alt="Musical Notes"/>
            </figure>
            
        </footer>
        
    </body>
</html>
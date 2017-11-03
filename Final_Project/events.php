<?php
//Include the event calendar functions file
include_once('inc/calendar.php');
?>
<html>
<head>
        <meta charset="utf-8"/>
        <title>SU Live Music Society</title>
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <script src="jquery.min.js"></script>
        </head>
    <body>
        <header>
            <h1>Stirling University Live Music Society</h1>
        </header>
        <nav>
            <hr width="50%"/>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="events.php"><strong>Events</strong></a>
            <a href="committee.php">Committee</a>
            <a href="roomBooking.php">Room Booking</a>
            <a href="contact.php">Contact</a>
        </nav>
        <body>
            <div id="calendar_div">
        <?php echo getCalender(); ?>
    </div>
        </body>
        <footer>
            <h3>Live Music Society - University of Stirling</h3>
            <figure id ="music_notes">
                <img src="img/musical_notes.jpg" alt="Musical Notes"/>
            </figure>
            
        </footer>
        
    </body>
</html>
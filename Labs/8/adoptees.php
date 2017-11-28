<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CSUMB Adoption Shelter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 50%;
      margin: auto;
  }
  </style>
  </head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
      <li class="active"><a href="#">Adoptions</a></li>
      
      <li><a href="#">About Us</a></li>
    </ul>
  </div>
</nav>
 <center>
    <h1><b>CSUMB Adoption Shelter</b></h1>
    <h2>The official Adoption site of CSUMB</h2>
    </center>
    <script>
            // Document Ready: 
            // $(function() {

            // })

            $(function() {
                $(".loading").hide()

                // Show spinner
                $(".loading").show()

                $.ajax({
                        // The URL for the request
                        url: "adoptees.sql",
                        //url: "https://erikberg.com/mlb/standings.json",

                        // Whether this is a POST or GET request
                        type: "GET",

                        // The type of data we expect back
                        dataType: "json",

                        //jsonpCallback: 'callback',
                    })
                    // Code to run if the request succeeds (is done);
                    // The response is passed to the function
                    .done(function(data) {
                        console.log("Baseball Data:", data);

                        // Do not do anything if there is no data
                        if (!data || data.length == 0) return;

                        // format the date
                        // var asOfDate = new Date(data.standings_date);
                        // var asOfDateFormatted = (asOfDate.getMonth() + 1) + '/' + asOfDate.getDate() + '/' + asOfDate.getFullYear();

                        // Better way, easier way to format?
                        // Try https://github.com/phstc/jquery-dateFormat
                        var asOfDateFormatted = $.format.date(data.standings_date, "d-MMM-yy");

                        // Insert the date
                        $('h1 > span').html(asOfDateFormatted);

                        // Print the standings
                        for (var i in data.standing) {
                            var standing = data.standing[i];

                            $('#results > tbody')
                                .append($('<td>')
                                    .append($('<tr>')
                                        .html(standing.conference)
                                    )
                                    
                                );
                        }
                    })
                    // Code to run if the request fails; the raw request and
                    // status codes are passed to the function
                    .fail(function(xhr, status, errorThrown) {
                        console.log("Sorry, there was a problem!");
                        console.log("Error: " + errorThrown);
                        console.log("Status: " + status);
                        console.dir(xhr);
                    })
                    // Code to run regardless of success or failure;
                    .always(function(xhr, status) {
                        console.log("The request is complete!");
                        $(".loading").hide()
                    });
            })
            </script>
            
    
</body>
</html>
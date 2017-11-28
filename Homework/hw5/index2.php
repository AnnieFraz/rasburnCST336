
<!DOCTYPE html>

<html>

    <head>
        <title>Dogs</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional bootstrap theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<style>
    img{
        width:200px;
    }
</style>
        
    </head>

    <body>
        <div class="container">
            <h1>Homework 5: dogs<span></span></h1>
            <h2></h2>
            <div class="breed-image">
    
                </div>
<form action="index2.php", type="post"></form>
            Select a Breed (e.g. Hound): <input type="text" id = "breedId" </select>
            <a href="javascript:void(0);" class="button">Next</a><br>
            Select a Sub Breed (please note not all breeds have subreeds): <select id = "subBreedId"></select>
            <a href="javascript:void(0);" class="button2">Display</a><br>
            </form>

            <div class="table-responsive">
                <table id="results" class="table table-hover">
                    <thead>
                        <th>Image</th>
                        <th>Breed</th>
                        <th>Sub-Breed</th>
                    </thead>
                    <tbody></tbody>
                    <tbody></tbody>
                </table>
                <img class="loading" src="loading_spinner.gif" />
            </div>
        </div>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-dateFormat/1.0/jquery.dateFormat.min.js"></script>

        <!-- Bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <script>
        
    
    function getSubBreed(){
        
        var select2 = $("#breedId").val();
        var selectBreed = select2.toLowerCase();
        var select3 = $("#subBreedId").val();
        console.log("lol2" +select3);
        console.log("slect " +select2);
        console.log("slect " +select3);
        $.ajax({
            type: "GET",
        
        dataType: "json",
        //data: { "subBreed": $("#breedId").val()},
        url: "https://dog.ceo/api/breed/"+selectBreed+"/list",
        })
        .done(function(data) {
         console.log("lol" + data.message)
         $("#subBreedId").html("<option> Select One </option>");
         for (var i in data.message){
             //console.log("sub breed "+data[1]);
             var dog = data[i];
             console.log("sub breed " + data.message[i]);
         $("#subBreedId").append("<option>"+data.message[i]+"</option>");
         }
        });
    
   
    }
    
            $(".button").click(function(){
                //getDogs();
                getSubBreed();
                console.log("select" + $("#subBreed").val())
                console.log("select" + $("#breedId").val())
                //getSubBreed();
            });
            $(".button2").click(function(){
                getDogs();
            });
    
    function getDogs(){
        /*
                $.getJSON( "https://dog.ceo/api/breeds/image/random", function( result ) {
                    $(".breed-image").html("<img src='" + result.message + "'>");
                });*/
    
            

            
            //var lol = $("#subBreed").val();

            $(function() {
                var lol2 = "english";
                var lol3 = "hound";
                var select1 = $("#breedId").val();
                var selectBreed = select1.toLowerCase();
                var select2 = $("#subBreedId").val();
                
                
                $(".loading").hide()

                // Show spinner
                $(".loading").show()

                $.ajax({
                    
                        // The URL for the request
                        url: "https://dog.ceo/api/breed/"+selectBreed+"/"+select2+"/images",

                        // Whether this is a POST or GET request
                        type: "GET",

                        // The type of data we expect back
                        dataType: "json",
                        //data: { "subBreed": $("#subBreed").val() },
                        //jsonpCallback: 'callback',
                    })
                    // Code to run if the request succeeds (is done);
                    // The response is passed to the function
                    .done(function(data) {
                        console.log("Dogs:", data);
                        console.log("dog https",data.message);

                        for (var i in data.message) {
                            var dog = data.message[i];

                            $('#results > tbody')
                                .append($('<tr>')
                                    .append($('<td>')
                                        .append($('<img>')
                                            .attr('src', dog)
                                        //.html('<img src='+dog+'>')
                                                                            )
                                    )
                                )
                                .append($('<td>')
                                        .html($("#breed").val())
                                    )
                                    
                                    .append($('<td>')
                                        .html($("#subBreed").val())
                                        
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
                    
                     $(document).ready(  function(){
                         getSubBreed(); 
                         
            
        });
                     });
    }
            function database(){
                var select1 = $("#breedId").val();
                var selectBreed2 = select1.toLowerCase();
                var select2 = $("#subBreedId").val();
                var sql = "INSERT INTO counter(selectBreed, selectSubBreed) VALUES ("+selectBreed2+","+select2+")";
                
            }

           
        </script>

       
        
        
    </body>
            <?php
        include 'connection.php';
        $dbConn = getDatabaseConnection();
        $select1 = $_POST['breedId'];
        echo "<body><h2>Help".$select1."</h2></body>";
        
        $sql = "INSERT INTO `counter`(`selectBreed`) VALUES(:breed) ";
        
         $stmt = $dbConn->prepare($sql);
         $stmt -> execute (array(':breed' => $select1));
        
          
        $sql2 = "SELECT COUNT(`selectBreed`)FROM `counter` WHERE `selectBreed`=:breed";
        $statement = $dbConn->prepare($sql2);
        $statement -> execute (array(':breed' => $select1));
        $result = $statement->fetch();
        echo "You have typed that ".$result ." many times";
        ?>
    
     

</html>
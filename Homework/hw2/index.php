<!DOCTYPE html>
<html>
    <head>
        
        <title> Homework 2: Lottery Numbers generator</title>
        <link href="https://fonts.googleapis.com/css?family=Wendy+One" rel="stylesheet">
    <style>
        @import url("css/styles.css"); 
        /*@import url('https://fonts.googleapis.com/css?family=Wendy+One');*/
    </style>
    </head>
    <body>
        <h1> Lottery Numbers Generator</h1>
        <img src = "img/lottery.jpg" alt="neon lottery" width='100' height='80'/>
        <div id="main">
        <?php
         
         //echo $luckyNumber. "\n";
         echo "<h2>Your lottery numbers are:</h2>";
         $luckyArray = array();
         $arraySize = 6;
         for ($i =0; $i<$arraySize; $i++)
         {
             $luckyNumber = rand(1, 49);
             array_push($luckyArray,$luckyNumber);
              
         }
         for($j=0; $j < sizeof($luckyArray); $j++){
                 echo"<h2> $luckyArray[$j]\n </h2>";
                 if ($luckyArray[$j] == 7){
             echo "<p> You have the Luckiest number</p> ";
             echo "<img id='jackpot' src='img/jackpot.jpg' width='100'/>";
                 }
                elseif ($luckyArray[$j] == 22) {
                    echo "<p> 2 little ducks</p> ";
                }
                 }
        ?>
        
        
        </div>
       <footer>
        
            <hr>
            336: Internet Programming. 2017; Rasburn <br/>
            <p>It is used for academic purposes only.</p>
      </footer>

    </body>
</html>

<html>
    <head>
        <title>Lab 4: LED Board </title>
        <link href="css/styles.css" rel="stylesheet">
        <style>
            table {
                display: inline-block; 
                padding-right:5px;   
            }
            
            td {
                height: 20px;
                width: 20px;
                border: 1px solid gray;
                border-collapse:collapse;
                border-radius:20px;
            }
            
            main {
                text-align:center;
                border: 1px solid gray;
            }
            
            
            .error {
            	color: red;
            	font-weight:bold;
            }
        </style>
    </head>
    <body>
       <main>
        <h1> Custom LED Board</h1>
   
          <?php
    include 'inc/board.php';
?>
<div id="content">    
            <?php 
                if(sizeof($_POST) == 0 || $_POST[displayagain] == "yes"){
                    drawForm();
                }
                if(isset($_POST['submitbtn'])) 
                {
                
                    $message = $_POST[message];
                    if (strlen($_POST[color1])+strlen($_POST[color2])+strlen($_POST[color3]) > 0){
                        $colors = [];
                        if(strlen($_POST[color1]) > 0){
                            array_push($colors, $_POST[color1]);
                        }
                        if(strlen($_POST[color2]) > 0){
                            array_push($colors, $_POST[color2]);
                        }
                        if(strlen($_POST[color3]) > 0){
                            array_push($colors, $_POST[color3]);
                        }
                        drawMessage($message, $colors);
                    }
                    
                    else{
                        drawMessage($message, array($_POST[color]));
                    }
                }
            ?>
          
           <br />
           
           <div class='error'>'Display a different color per cell' must be answered </div>           
            <br />
            
        </main>

    </body>
</html>

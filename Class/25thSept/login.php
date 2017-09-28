<?php
        //ho "Congratulations ". $_POST["Username"] . " you have been logged in";
        session_start();
        
        $isPostBack = $_SERVER['REQUEST_METHOD'] == 'POST';
        
        if ($isPostBack){
            $report = "Username: ". $_POST["Username"];
            $_SESSION["Report"] = $report;
        }
        else{
            $_SESSION["Report"] = ""; 
        }
        ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <?php
          if ($isPostBack){
              include "inc.report.php";
          }
          else{
              header("Special-Header: Anna is here");
              include "inc.form.php";
          }
        ?>
        
    </body>
</html>
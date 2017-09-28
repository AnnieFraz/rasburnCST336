<?php
    session_start();
    $report = $_SESSION["report"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Report</title>
    </head>
    <body>
        <?php
        include "inc.report.php";
        ?>
    </body>
</html>
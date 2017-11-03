<?php
include 'connection.php';
 $conn = getDatabaseConnection();
 
 /*$dbHost = getenv('IP');
        $dbPort = 3306;
        $dbName = "lab6";
        $username = "anniefraz";
        $password = "";
        
        $dbConn = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName", $username, $password);
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
 
if (isset($_GET['deleteForm'])) {  
      global $conn;
    $sql = "DELETE FROM members
            WHERE member_id = :id";
    $namedParameters = array();
    $namedParameters[':id'] = $_GET['member_id'];
    $conn = getDatabaseConnection();    
    $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);    
    
    header("Location: deleteConfirmation.php");  
}
?>
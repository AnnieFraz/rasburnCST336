<?php

?>

<html>
        <head>
                <title>Lab 6</title>
                <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
                 <link href="css/styles.css" rel="stylesheet">
                 </head>
        <body>
            
        <h2>Administrator Form</h2>
        <h3>Current Members</h3>
<?php
include 'connection.php';
 $conn = getDatabaseConnection();
if (isset($_GET['firstNameForm'])) {  
      global $conn;
    $sql = "SELECT * 
FROM  `members` 
WHERE  `member_id` = :id";
    $namedParameters = array();
    $namedParameters[':id'] = $_GET['member_id'];
    //$conn = getDatabaseConnection();    
    $statement = $conn->prepare($sql);    
    $statement->execute($namedParameters);
    $record = $statement->fetch();  
    //header("Location: deleteConfirmation.php");  
		
//$stmt = $dbConn->query($sql);	
//$results = $stmt->fetchAll();
echo "<table border=1><tr><td><strong>ID</strong></td><td><Strong>First Name</strong></td><td><strong>Last Name</strong></td></tr>";
//foreach ($results as $record) {
    echo "</td><td>";
	echo $record['member_id'];
    echo "</td><td>";
	echo $record['member_firstName'];
	echo "</td><td>";
	echo $record['member_lastName'];
	echo "</td><td>";
	echo $record['member_email'];
	echo "</td></tr>";
//}
echo "</table>";
}
if (isset($_GET['lastNameForm'])) {  
      global $conn;
    $sql = "SELECT * 
FROM  `members` 
WHERE  `member_id` = :id";
    $namedParameters = array();
    $namedParameters[':id'] = $_GET['member_id'];
    //$conn = getDatabaseConnection();    
    $statement = $conn->prepare($sql);    
    $statement->execute($namedParameters);
    $record = $statement->fetch();  
    //header("Location: deleteConfirmation.php");  
		
//$stmt = $dbConn->query($sql);	
//$results = $stmt->fetchAll();
echo "<table border=1><tr><td><strong>ID</strong></td><td><Strong>First Name</strong></td><td><strong>Last Name</strong></td></tr>";
//foreach ($results as $record) {
    echo "</td><td>";
	echo $record['member_id'];
    echo "</td><td>";
	echo $record['member_firstName'];
	echo "</td><td>";
	echo $record['member_lastName'];
	echo "</td><td>";
	echo $record['member_email'];
	echo "</td></tr>";
//}
echo "</table>";
}

	?>
<?php
$servername = getenv('DATABASE_HOST');
$username   = getenv('USERNAME');
$password   = getenv('DATABASE_PASSWORD');
$dbname     = getenv('DATABASE_NAME');;
$dbport     = getenv('DATABASE_PORT');
        
        $dbConn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<html>
        <head>
                <title>Admin</title>
                <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
                 <link href="css/styles.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
        </head>
        <body>
            
        <h2>Administrator Form</h2>
        <h3>Current Members</h3>
<?php
$sql = "SELECT * FROM members";
		
$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
echo "<table border=1><tr><td><Strong>First Name</strong></td><td><strong>Last Name</strong></td></tr>";
foreach ($results as $record) {
   // echo "</td><td>";
	//echo $record['member_id'];
    echo "</td><td>";
	echo "<form action=memberInfo.php>";
          echo "<input type='hidden' name='member_id' value='".$record['member_id'] . "'/>";
          echo "<input type='submit' value={$record['member_firstName']} name='firstNameForm'/></form>";
	echo "</td><td>";
	echo "<form action=memberInfo.php>";
          echo "<input type='hidden' name='member_id' value='".$record['member_id'] . "'/>";
          echo "<input type='submit' value={$record['member_lastName']} name='lastNameForm'/></form>";
	echo "</td><td>";
	echo " <form action=update.php>";
          echo "<input type='hidden' name='member_id' value='".$record['member_id'] . "'/>";
          echo "<input type='submit' value='Update'/></form> ";
	echo "<form action='delete.php'";
          echo "onsubmit=\"return confirmDelete('".$record['member_firstName']."')\">";
          echo "<input type='hidden' name='member_id' value='".$record['member_id'] . "'/>";
          echo "<input type='submit' value='Delete' name='deleteForm'/></form>";
	echo "</td></tr>";
}
echo "</table>";

	?>

<h3>Add User:</h3>
<form action="logout.php">
           <input type="submit" value="Sign out" />
      </form> 
<form method="POST" name="signIn">
First Name: <input type="text" name="firstName"  placeholder="Enter First Name" required><br>
Last Name: <input type="text" name="lastName"  placeholder="Enter Last Name" required><br>
Email: <input type="text" name="email"  placeholder="Enter Email" required><br>


<input type="submit" name="loginForm" /><br>
</form>

<?php

session_start();
session_start();

//print_r($_SESSION);

if (!isset($_SESSION['username'])) { //if not set, it means that admin hasn't logged in
    
    header("Location: index.php"); //redirects users to login page
    exit;
    
}


    //include 'connection.php';
    $firstName = $_POST['firstName'];
         $lastName = $_POST['lastName'];
         $email =$_POST['email'];
    $sql = "INSERT INTO members(member_firstName, member_lastName,member_email) VALUES (:1stName,:2ndName,:emails)";

   $stmt = $dbConn->prepare($sql);
    $stmt -> execute (array(':1stName' => $firstName,
                            ':2ndName'=> $lastName,
                            ':emails'=> $email));
   //$record = $stmt->fetch();

?>

</form>


</body>
</html>


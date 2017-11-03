<?php
$dbHost = getenv('IP');
        $dbPort = 3306;
        $dbName = "lab6";
        $username = "anniefraz";
        $password = "";
        
        $dbConn = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName", $username, $password);
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<html>
        <head>
                <title>Lab 6</title>
                <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
                 <link href="css/styles.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
        </head>
        <body>
            <center>
        <h2>Signup Form</h2>


<form method="post">
Username: <input type="text" name="username" placeholder="Enter Username" required> <br >
Password: <input type="password" name="password"  placeholder="Enter Password" required><br>
<span class="psw">Forgot <a href="#">password?</a></span><br>

<?php

session_start();

if (isset($_POST['loginForm'])) {  //login form has been submitted
    //include 'connection.php';
    
    $username = $_POST['username'];
    $password = sha1($POST['password']);
    
    $sql = "SELECT * FROM admin 
            WHERE username = :username
            AND password = :password";
            
            $paras= array();
            $paras[':username'] = $username;
            $paras[':password'] = $password;
            
   $statement = $connection->prepare($sql);  
    $statement->execute($paras); 
    $record = $statement->fetch(PDO::FETCH_ASSOC);
}
 
  if (!empty($record)) { //if record with username and password was found
        $_SESSION['username'] = $record['username'];
        $_SESSION['adminName'] = $record['firstName'] . " " . $record['lastName'];
        header("Location: main.php");
    } else {
        $errorArray = array("Wrong username/password");  
    }

?>

<form action="login.php">
           <input type="submit" value="Log in" />
      </form>  


<div>
       <form action="logout.php">
           <input type="submit" value="Sign out" />
      </form>   
 </div>
 </center>
</body>
</html>


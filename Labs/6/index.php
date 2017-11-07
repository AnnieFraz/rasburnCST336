<?php
include 'connection.php';
$conn = getDatabaseConnection();
?>
<html>
        <head>
    <title>Lab 6</title>
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
        </head>
        <body>
            <center>
        <h2>Signup Form</h2>
        <form method="POST" action="loginProcess.php">
            Username: <input type="text" name="username" placeholder="Enter Username" required /> <br >
            Password: <input type="password" name="password1"  placeholder="Enter Password" required /><br>
            <input type="submit" value="Log in" name="LoginForm"/>
        </form>
<?php
/*
    $username = $_POST['username'];
    $password = sha1($POST['password1']);
    print_r($_POST);
    
    echo $password;
    
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    
    $stmt = $conn -> prepare($sql);
    $stmt ->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    
    print_r($record);
    
    if (empty($record)){
        
        echo " <br> wrong credintials";
    }else{
        header("Location: adminstrator.php");;
    }
    
    function verifyPassword(){
        
    }
    */


?>



<div>
       <form action="logout.php">
           <input type="submit" value="Sign out" />
      </form>   
 </div>
 </center>
</body>
</html>


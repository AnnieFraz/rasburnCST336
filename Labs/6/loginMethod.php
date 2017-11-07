<?PHP
session_start();
include 'connection.php';
$conn = getDatabaseConnection();

$sql = "SELECT * FROM admin WHERE username LIKE :id";

$uname = strtoupper($_POST['username']);
$passw = password_hash($_POST['pw'], PASSWORD_DEFAULT);

$stmt = $dbConn -> prepare ($sql);
$stmt -> execute (  array ( ':id' => $uname)  );

//var_dump($passw);
while ($row = $stmt -> fetch())  {
//echo $row['username'] . " test " . $row['password'];
    $hash = $row['password'];
    $temp = $row['username'];
}

if(password_verify( $_POST['pw'] , $hash ))
{
    $_SESSION['user'] = $temp;
    //var_dump($_session['user']);
    header("Location: ../index.php");
    exit();
}

?>
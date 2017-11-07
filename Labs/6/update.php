
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update</title>
  <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
                 <link href="css/styles.css" rel="stylesheet">
    </head>
</head>

<body>
  <div class = 'container'>
    <header>
      <h1>Update Product</h1>
    </header>

    <div>
        <?$record= getMemberById()?>
        

      <form>
          
          First Name: <input type="text" name="firstName" value="<?=$record['firstName']?>" /><br>
Last Name: <input type="text" name="lastName"  placeholder="Enter Last Name" ><br>
          Email: <input type="text" name="email" /> <br />
          
         
          <?php
 include 'connection.php';
 $conn = getDatabaseConnection();
 
 //function getMemberById(){
 /*
     global $conn;
    $sql = "SELECT * FROM members WHERE member_id = :id";
    $namedParameters = array();
    $namedParameters[':id'] = $_GET['memberId'];
    $statement = $conn->prepare($sql);    
    $statement->execute($namedParameters);
    $record = $statement->fetch();
    print ($record);
    return $record;
    */
 
 
 if (isset($_GET['updateForm'])){
     global $conn;
     $sql = " UPDATE  `members` SET  `member_firstName` =  :firstName,
`member_lastName` =  :lastName,
`member_email` =  :email WHERE  `member_id` =:id";
 
 $namedParameters = array();
 $namedParameters[':firstName'] = $_GET['firstName'];
 $namedParameters[':lastName'] = $_GET['lastName'];
 $namedParameters[':email'] = $_GET['email'];
 $namedParameters[':id'] = $_GET['member_id'];
 
  $conn = getDatabaseConnection();    
    $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);    
      echo "Record has been updated!";
 }
 
 ?>
    
      </form>
      </body>
      </html>
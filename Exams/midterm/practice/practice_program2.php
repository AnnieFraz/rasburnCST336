<?php
$servername = getenv('IP');
    $username = getenv('anniefraz');
    $password = "";
    $dbname = "midterm";
    $dbport = 3306;
    
    $dbConn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<?php
$stmt = $dbConn->prepare($sql);
$stmt->execute();
while($row=$stmt->fetch()){
    echo "<tr>
        <td>{$row['town_name']}</td>
        <td>{$row['county_name']}</td>
        <td>{$row['population']}</td>
        <td>{$row['price']}</td>
        </tr>";
}
?>
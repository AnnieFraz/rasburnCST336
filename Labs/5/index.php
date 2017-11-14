<?php
$dbHost = getenv('IP');
        $dbPort = 3306;
        $dbName = "lab6";
        $username = "anniefraz";
        $password = "";
        
        $dbConn = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName", $username, $password);
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//echo "<p> $servername, $username, $password, $dbname, $dbport</p>";
?>
<html>
        <head>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        </head>
        
        <body>
            <h1>Device Database</h1>
            <form action="index.php" method="POST">
                <h2>Filter by:</h2>
                <div>
                    <label name = "filter_type">Type</label>
                    <input type="checkbox" value="filter_type" name="filter_type" >
                </div>
                <div>
                    <label name = "filter_type">Name</label>
                    <input type="checkbox" value="filter_name" name="filter_name" >
                </div>
                <div>
                    <label name = "filter_type">Avaliability</label>
                    <input type="checkbox" value="filter_status" name="filter_status" >
                </div>
                <h2>Organise By:</h2>
                <div>
            <input type = "radio" VALUE ="sort_name" name = "sort_name"> name<br>
            <input type = "radio" value ="sort_price" name = "sort_price"> price
        </div>
            <input type = "submit" VALUE ="Submit">
        </div>
        <div>
            <input type="hidden" value="REAL_REQUEST" />
        </div>
            </form>
            
                                       </select>
            <br>
            <table>
                <tr>
                    <th>Type</th>
                    <th>Name</th>
                    <th>Avaliability</th>
                    <th>Price</th>
                </tr>
                <tbody>
            
            <?php
$sql  = " SELECT * FROM `device` ORDER BY `deviceName` ASC ";
if($_POST['sort_price'] == 'sort_price')
{
        $sql = "SELECT * FROM `device`  ORDER BY 'price' ASC";     
}
$stmt = $dbConn->prepare($sql);
$stmt->execute();
while($row=$stmt->fetch()){
    echo "<tr>
        <td>{$row['deviceType']}</td>
        <td>{$row['deviceName']}</td>
        <td>{$row['status']}</td>
        <td>{$row['price']}</td>
        </tr>";
}

while ($row = $stmt->fetch()) {
    
    if ($_POST['filter_type'] == 'filter_type') {
        
        echo "<tr>
        <td>{$row['deviceType']}</td>
        </tr>";
    }
    if ($_POST['filter_name'] == 'filter_name') {
        
        echo "<tr>
        <td></td>
        <td>{$row['deviceName']}</td>.
        </tr>";
    }
    if ($_POST['filter_status'] == 'filter_status') {
        echo "<tr>
        <td></td>.
        <td></td>.
        <td>{$row['status']}</td>
        </tr>";
    }
}
?>
       </body>
    </html>
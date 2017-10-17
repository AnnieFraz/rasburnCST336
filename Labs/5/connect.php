<?php
    // A simple PHP script demonstrating how to connect to MySQL.
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console.

    $servername = getenv('IP');
    $username = getenv('anniefraz');
    $password = "";
    $database = "lab5";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    echo "Connected successfully (".$db->host_info.")";
    ?>
    
    <html>
        <head>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        </head>
        
        <body>
            <?php
            $query = "SELECT * FROM device";
            
            $queryfilterName = "SELECT * FROM device WHERE name = ''";
            $queryfilterType = "SELECT * FROM device WHERE type = ''";
            $queryfilterAvaliability = "SELECT * FROM device WHERE avaliability = ''";
            
            $queryName = "SELECT * FROM device ORDER BY name ASC";
            $queryPrice = "SELECT * FROM device ORDER BY price ASC";
            
            mysqli_query($db, $query) or die('Error querying database.');
            
            $result = mysqli_query($db, $query);
            $row=mysqli_fetch_array($result);
            $result->sort_by('name');
            ?>
            
            <table>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Avaliability</th>
                    <th>Price</th>
                </tr>
                <tbody>
                    
                                <?php
                while ($row = mysqli_fetch_array($result))
            echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['type']}</td>
            <td>{$row['avaliability']}</td>
            <td>{$row['price']}</td>
            </tr>";
            ?>
            </tbody>
            </table>
            
        </body>
    </html>
    <?php
            mysqli_close($db);
            ?>
    
    
    
<?php
        $dbHost = getenv('IP');
        $dbPort = 3306;
        $dbName = "midterm";
        $username = "anniefraz";
        $password = "";
        
        $dbConn = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName", $username, $password);
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        
?>
<!DOCTYPE html>
<html>
<head>
<title>Program 1:Midterm</title>
<link href="css/styles2.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
</head>

<body>
                
 <?php
 //Question 1
  echo "Name and country of birth of female actresses who were NOT born in the USA, ordered by last name: <br/ >";
$sql = "SELECT  `firstName` ,  `lastName` ,  `country_of_birth` 
FROM  `celebrity` 
WHERE  `country_of_birth` !=  'USA'
AND  `gender` =  'F'
ORDER BY  `lastName` 
LIMIT 0 , 30";
		
$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo "<table>";
        echo "<tr>
        <td>{$record['firstName']} </td>
        <td>{$record['lastName']} </td>
        <td>{$record['country_of_birth'] }</td>
        </tr> <br>";
        echo "</table>";
        
    }
    
    //Question 2
     echo "Number of movies per category and their average duration: <br/ >";
$sql = "SELECT  `movie_category` , COUNT(  `movie_title` ) AS movieTotal, AVG(  `duration` ) AS average_Duration
FROM  `movie` m
WHERE  `movie_category` =  'Romance'";
		
$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo "<table>";
        echo "<tr>
        <td>{$record['movie_category']} </td> 
        <td>{$record['movieTotal']} </td>
        <td>{$record['average_Duration'] }</td>
        </tr> <br>";
        echo "</table>";
        
    }
    $sql = "SELECT  `movie_category` , COUNT(  `movie_title` ) AS movieTotal, AVG(  `duration` ) AS average_Duration
FROM  `movie` m
WHERE  `movie_category` =  'Fantasy'";
		
$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
 echo "<table>";
        echo "<tr>
        <td>{$record['movie_category']} </td>
        <td>{$record['movieTotal']} </td>
        <td>{$record['average_Duration'] }</td>
        </tr> <br>";
        echo "</table>";
        
    }
    $sql = "SELECT  `movie_category` , COUNT(  `movie_title` ) AS movieTotal, AVG(  `duration` ) AS average_Duration
FROM  `movie` m
WHERE  `movie_category` =  'Drama'";
		
$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
echo"<table>";
foreach ($results as $record) {
        echo "<tr>
        <td>{$record['movie_category']} </td>
        <td>{$record['movieTotal']} </td>
        <td>{$record['average_Duration'] }</td>
        </tr> <br>";
        
    }
    echo"</table>";
    //Question 3
    echo "Top three longest movies released after 2000 <br>";
    $sql = "SELECT * 
FROM  `movie` 
WHERE  `release_year` >=2000
ORDER BY  `duration` DESC 
LIMIT 3";
		
$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
echo "<table>";
echo "<th>Title</th>";
echo "<th>genre</th>";
echo "<th>duration</th>";
echo "<th>company</th>";
echo "<th>year</th>";
foreach ($results as $record) {
        echo "<tr>
        <td>{$record['movie_title']} </td>
        <td>{$record['movie_category']} </td>
        <td>{$record['duration'] }</td>
        <td>{$record['company']} </td>
        <td>{$record['release_year'] }</td>
        </tr> <br>";
        
    }
//     echo "</table>";
//     //Question 4
// 	     echo "List of actors and actresses who have not won an academy award, ordered by last name <br>";
// 	    $sql = "SELECT c.`firstName` , c.`lastName` , oscar.`celebrity_id` 
// FROM  `oscar` o,  `celebrity` c
// INNER JOIN oscar ON c.`celebrityId` = oscar.`celebrity_id` 
// WHERE oscar.`celebrity_id` IS NULL 
// ORDER BY c.`lastName` 
// LIMIT 0 , 30";
		
// $stmt = $dbConn->query($sql);	
// $results = $stmt->fetchAll();
// echo"<table>";
// foreach ($results as $record) {
//         echo "<tr>
//         <td>{$record['c.firstName']} </td>
//         <td>{$record['c.lastName']} </td>
//         </tr> <br>";
        
//     }
//     //Question 5
// 	     echo "List of celebrities who have won an oscar, ordered by 'award_year'. Include full name, movie title, oscar year, and award category. <br>";
// 	    $sql = "SELECT c.`firstName` , c.`lastName` , o.`celebrity_id`, m.`award_category`,m.`award_year` 
// FROM  `oscar` o,  `celebrity` c, `movie`
//  JOIN `movie` ON m.`moveId` = o.`moveId` 
//  JOIN `oscar` ON c.`celebrityId` = o.`celebrity_id`
// WHERE oscar.`celebrity_id` IS NOT NULL 
// ORDER BY m.`award_year` 
// LIMIT 0 , 30";
		
// $stmt = $dbConn->query($sql);	
// $results = $stmt->fetchAll();
// echo"<table>";
// foreach ($results as $record) {
//         echo "<tr>
//         <td>{$record['firstName']} </td>
//         <td>{$record['lastName']} </td>
//         <td>{$record['celebrity_id']} </td>
//         <td>{$record['award_category']} </td>
        
//         <td>{$record['award_year']} </td>
//         </tr> <br>";
        
//     }
    
 ?>
 
 echo "Jason I am so sorry but I could not get Q4 and Q5 to work. The code is there but I get a PDO error, I am so sorry";
 <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#99E999">
      <td>1</td>
      <td>Name and country of birth of female actresses who were NOT born in the USA, ordered by last name</td>
      <td width="20" align="center">10</td>
    </tr>  
    <tr style="background-color:#99E999">
      <td>2</td>
      <td>Number of movies per category and their average duration</td>
      <td width="20" align="center">10</td>
    </tr>  
    <tr style="background-color:#99E999">
      <td>3</td>
      <td>All info about the top three longest movies released after 2000</td>
      <td width="20" align="center">15</td>
    </tr>     
     <tr style="background-color:#FFC0C0">
       <td>4</td>
       <td>List of  actors and actresses who have not won an academy award, ordered by last name </td>
       <td align="center">15</td>
     </tr>
     <tr style="background-color:#FFC0C0">
      <td>5</td>
      <td>List of celebrities who have won an oscar, ordered by "award_year". Include full name, movie title, oscar year, and award category.</td>
      <td width="20" align="center">15</td>
    </tr>     
     <tr style="background-color:#99E999">
      <td>6</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
    </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b></b></td>
    </tr> 
  </tbody></table>
    


</body>
<footer>
<p>Anna Rasburn<br>
336-Internet Programming<br>
Program 2<br>
Midterm 23rd October</p>
  
  
</footer>
</html>
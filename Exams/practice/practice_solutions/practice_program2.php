<?php
    $dbHost = getenv('IP');
        $dbPort = 3306;
        $dbName = "midterm_practice";
        $username = "anniefraz";
        $password = "";
        
        $dbConn = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName", $username, $password);
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<?php


echo "Report 1: Towns with population between 50K and 80K: <br/ >";
$sql = "SELECT town_name, population
		FROM  mp_town 
		WHERE population
		BETWEEN 50000 
		AND 80000";
		
$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['town_name']  . "<br />";
}	 


echo "Report 2: Towns with County Names: <br/ >";
$sql = "SELECT town_name, county_name
		FROM mp_town t
		JOIN mp_county c ON t.county_id = c.county_id
		ORDER BY population DESC ";
		
$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['town_name']  . " - " . $record['county_name'] .  "<br />";
}	


echo "<br />Report 3:Population by County: <br/ >";
$sql = "SELECT county_name, SUM( population ) total
		FROM mp_town t
		JOIN mp_county c ON t.county_id = c.county_id
		GROUP BY county_name ";
		
		//
		
$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['county_name']  . " - " . $record['total'] .  "<br />";
}	

echo "<br />Report 4:Population by State: <br/ >";
$sql = "SELECT state_name, SUM( population ) AS populationTotal
		FROM mp_town t
		JOIN mp_county c ON t.county_id = c.county_id
		JOIN mp_state s ON s.state_id = c.state_id
		GROUP BY mp_state.state_name ";
		
		//"SELECT DISTINCT mp_state,state_name, SUM(population) FROM mp_county etc WHERE mp_county.state_ID = mp_state.state_id AND mp_county.county_id = mp_town GROUP_BY mp_county.county_name"
		
$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['state_name']  . " - " . $record['populationTotal'] .  "<br />";
}	

echo "<br />Report 5:Three least populated cities: <br/ >";
$sql = "SELECT town_name, population
		FROM mp_town 
		ORDER BY population
		LIMIT 3";
		
$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
foreach ($results as $record) {
	echo $record['town_name']  . " - " . $record['population'] .  "<br />";
}

echo "<br />Report 6:Counties without a town: <br/ >";
$sql = " SELECT * FROM mp_county c
LEFT JOIN mp_town t 
ON c.county_id = t.county_id
WHERE t.county_id IS NULL";

//"SELECT DISTINCT mp_county, county_name FROM mp_county, mp_town WHERE mp_county.county_id NOT IN(SELECT county_id FROM mp_town)"

?>

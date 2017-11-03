<?php
         $searchkey = $_POST['fil_term'];
         $choice = $_POST['choice'];
         $order =$_POST['order'];
         
        $sql = "SELECT songs.song_title, artist.name, albums.album_name, genre.genre_name
		FROM  albums
		INNER JOIN genre on albums.genre_id=genre.genre_id
		INNER JOIN artist ON albums.artist_id=artist.artist_id
		INNER JOIN songs ON albums.album_id=songs.album_id
		WHERE $choice LIKE '$searchkey'
		ORDER BY song_title $order";
		
$stmt = $dbConn->query($sql);	
$results = $stmt->fetchAll();
echo "
    <table border='1'><tr><td>Add</td><td>Title</td><td>Artist</td><td>Album</td><td>Genre</td></tr>";
foreach ($results as $record) {
    echo "<tr><td></td><td>";
	echo $record['song_title'];
	echo "</td> <td>";
	echo "<a href='desc/".$record['name'].".html'>".$record['name']."</a>";
	echo "</td><td>";
	echo $record['album_name'];
	echo "</td><td>";
	echo  $record['genre_name'];
	echo "</td></tr>";
}	 
echo '</table><br>';
$go = 1;
         ?>
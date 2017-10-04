<!DOCTYPE html>
<html>
    <head>
        <title>Lab 4: LED Board </title>
        <style>
            @import url("css/style.css");
        </style>
    </head>
    <body>
        <?php
    include 'inc/board.php';
?>
<?php
    hardcodedLetters();
?>

<?php
	if (isset($_POST["submit"])) {
		$text = $_POST['text'];
    }
		$result= buildLED($message);


?>
       <main>
        <h1> Custom LED Board</h1>
   
          <form method="get">
          	  Message: <input type="text" name="message" maxlength="15" value="CST336 is cool!"/> <br /><br />
          	  Select a color: 
          	   <select name="color">
          	   	  <option value="red"> Red </option>
          	   	  <option value="green"> Green </option>
          	   	  <option value="blue"> Blue </option>
          	   	  <option value="yellow" selected> Yellow </option>
          	   </select>
          	   <br /><br />
          	  Display Different Color per Cell: 
          	  Yes <input type="radio" name="colorPerCell" value="yes">
          	  No <input type="radio" name="colorPerCell" value="no">
          	  <br /><br />
          	 <input type="checkbox" name="displayForm" value="yes" checked> Display Form Again
          	  <br />
          	   <br />
          	   Display custom colors per word:<br />
          	   (Enter colors names or hexadecimal values)<br />
          	    <input type="text" name="wordColor[]" value = ""/> 
          	    <input type="text" name="wordColor[]"  value = ""/>
          	    <input type="text" name="wordColor[]" value = ""/>
          	    <br /><br />
          	  <input type="submit" value="Display!!" name="submit" />
          </form>
          <div class="display">
		        
		        
	        </div>
          <br />
           
           
          
           <br />
           
           <div class='error'>'Display a different color per cell' must be answered </div>           
            <br />
            
            
            
        </main>
        <?php echo $result; ?>

    </body>
</html>

<!DOCTYPE html>
<html>
    <html>
    <head>
        <title> Winter Vacation Planner</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <style>
        	@import url("css/styles.css");
        </style>
    </head>
    <body>

        <div class="jumbotron">
            <h1> Winter Vacation Planner </h1>
        </div>
        <div id="wrapper"></div>

                <script src="js/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <form>Select Month:&nbsp;
    <select name="month">
        <option value="">Select</option>
        <option>November</option>
        <option>December</option>
        <option>January</option>
        <option>February</option>
        </select>
        <a href="#" data-toggle="tooltip" title="There are 4 months listed, from November to February. No month selected by default."><img src="info.png" width="15"></a><br>
        <br>Number of locations:&nbsp;<input type="radio" name="locationsNumber" value="3" id="l3">
        <label for="l3">Three</label>&nbsp;
        <input type="radio" name="locationsNumber" value="4" id="l4">
        <label for="l4">Four</label>&nbsp;<input type="radio" name="locationsNumber" value="5" id="l5">
        <label for="l5">Five</label><a href="#" data-toggle="tooltip" title="No number selected by default.">
            <img src="info.png" width="15"></a><br>
            <br>Select Country:&nbsp;<select name="country"><option>USA</option>
            <option>Mexico</option>
            <option>Norway</option>
            </select>
            <a href="#" data-toggle="tooltip" title="USA is selected by default.">
                <img src="info.png" width="15"></a><br>
                <br>Visit locations in alphabetical order:&nbsp;
                <input type="radio" name="order" value="asc" id="order_asc">
                <label for="order_asc">A-Z</label>&nbsp;<input type="radio" name="order" value="desc" id="order_desc">
                <label for="order_desc">Z-A</label>&nbsp;<a href="#" data-toggle="tooltip" title="Users can leave it blank. If checked, the random locations should be ordered alphabetically">
                    <img src="info.png" width="15"></a><br><br><input type="submit" value="Create Itinerary">
                    <a href="#" data-toggle="tooltip" title="Errors displayed if no month and number of locations submitted.">
                        <img src="info.png" width="15"></a></form>
    
    <?php
    function isFormValid()
{
    if((empty($_GET['order_asc'])||$_GET['order_asc']==0)&&isset($_GET['submitted'])){
        echo "<div class='error'>Must select a way to order</div>";
        return false;
    }
    if((empty($_GET['order_desc'])||$_GET['order_desc']==0)&&isset($_GET['submitted'])){
        echo "<div class='error'>Must select a way to order</div>";
        return false;
    }
    
    return true;
}
    function draw_calendar($month,$year){
        if ($month == 11){
        echo "<h1> November  " + "$year" + "</h2>";
        }
        if ($month == 12){
        echo "December " + "$year";
        }
        if ($month == 1){
        echo "January " + "$year";
        }
        if ($month == 2){
        echo "February " + "$year";
        }
	$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

	$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();

	$calendar.= '<tr class="calendar-row">';

	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np"> </td>';
		$days_in_this_week++;
	endfor;
	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		$calendar.= '<td class="calendar-day">';

			$calendar.= '<div class="day-number">'.$list_day.'</div>';

			$calendar.= str_repeat('<p> </p>',2);
			
		$calendar.= '</td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;

	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
		endfor;
	endif;

	$calendar.= '</tr>';

	$calendar.= '</table>';
	
	return $calendar;
}
//if ($_POST['month']=='November' ){
echo draw_calendar(11,2017);
//}
//if ($_POST['month']=='December' ){
echo draw_calendar(12,2017);
//}
//if ($_POST['month']=='January' ){
echo draw_calendar(1,2018);
//}
//if ($_POST['month']=='February' ){
echo draw_calendar(2,2018);
//}


    ?>
    
    </body>

    <footer>
        <p> Anna Rasburn <br> 336-Internet Programming <br> Program 1 <br> Midterm 23rd October</p>
          
    <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#99E999">
      <td>1</td>
      <td>The page includes the form elements as the Program Sample: dropdown menu, radio buttons, etc.</td>
      <td width="20" align="center">3</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>2</td>
      <td>Errors are displayed if country or number of locations are not submitted.</td>
      <td width="20" align="center">5</td>
    </tr> 
    <tr style="background-color:#FFC0C0">
      <td>3</td>
      <td>Header and Subheader are displayed when submitting the form with all data. </td>
      <td align="center">5</td>
    </tr>    
	<tr style="background-color:#FFC0C0">
      <td>4</td>
      <td>A table with days and weeks is displayed when submitting the form</td>
      <td align="center">5</td>
    </tr> 
    <tr style="background-color:#99E999">
      <td>5</td>
      <td>The number of days in the table correspond to the month selected</td>
      <td align="center">10</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>6</td>
      <td>Random images are displayed in random days</td>
      <td align="center">5</td>
    </tr>       
    <tr style="background-color:#FFC0C0">
      <td>7</td>
      <td>The number of random images correspond to the number of locations and country submitted</td>
      <td align="center">10</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>8</td>
      <td>The proper name of the location is displayed below the image 
      		(e.g. "New York", "Las Vegas")</td>
      <td align="center">10</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>9</td>
      <td>The list of months submitted along with the country and number of locations is displayed below the table (using Sessions)</td>
      <td align="center">15</td>
    </tr>    
    <tr style="background-color:#FFC0C0">
      <td>10</td>
      <td>Random locations should be ordered alphabetically, if user checks corresponding radio button (A-Z or Z-A). </td>
      <td align="center">15</td>
    </tr>        
    <tr style="background-color:#99E999">
      <td>11</td>
      <td>The web page uses Bootstrap and has a nice look. </td>
      <td align="center">5</td>
    </tr>        
    <tr style="background-color:#99E999">
      <td>12</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
    </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b></b></td>
    </tr> 
  </tbody></table>

    </footer>
</html>
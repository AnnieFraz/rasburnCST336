<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Assignment 3</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <h1> Student Complaints Center</h1>
    <figure id="csumb">
        <img src="img/csumb.png" alt="CSUMB Logo"/>
    </figure>
    
    <?php
    $status = "";
    $today = date("mm/dd/yy");
    $firstName = (isset($_POST['firstName']) ? $_POST['firstName'] : null);
    $lastName = (isset($_POST['lastName']) ? $_POST['lastName'] : null);
    $email = (isset($_POST['email']) ? $_POST['email'] : null);
    $phone = (isset($_POST['phone']) ? $_POST['phone'] : null);
    $major = (isset($_POST['major']) ? $_POST['major'] : null);
    $complaint = (isset($_POST['complaint']) ? $_POST['complaint'] : null);
    
    $invalidFirstName= "";
    $invalidLastName = "";
    $invalidEmail = ""; 
    $invalidPhone = "";
    $invalidMajor = "";
    $invalidComplaint = "";
    
    function validator(){
        global $status, $today, $firstName, $lastName, $email, $phone, $major, $complaint;
        global $invaidFirstName, $invalidLastName, $invalidEmail, $invalidPhone, $invalidMajor, $invalidComplaint;
        
        if (!$firstName || !preg_match("/^([a-zA-Z]{2,}(?: [a-zA-Z]{0,})*)$/",$firstName)){
            $status .= "<span style=\"color:red\">Error you have not entered a valid last name. </span><br/ >";
            $invalidFirstName = "id='req'";
        }
        if (!$lastName || !preg_match("/^([a-zA-Z]{2,}(?: [a-zA-Z]{0,})*)$/",$lastName)){
            $status .= "<span style=\"color:red\">Error you have not entered a valid first name. </span><br/ >";
            $invalidLastName = "id='req'";
        }
        if (!$email || !preg_match("^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/",$email)){
            $status .= "<span style=\"color:red\">Error you have not entered a valid email. </span><br/ >";
            $invalidEmail = "id='req'";
        }
        if (!$phone || !preg_match("\(\d{3}\) ?)|(\d{3}-))?\d{3}-\d{4}",$phone)){
            $status .= "<span style=\"color:red\">Error you have not entered a valid phone number. </span><br/ >";
            $invalidPhone = "id='req'";
        }
        if (!$major || !preg_match("/^([a-zA-Z]{2,}(?: [a-zA-Z]{0,})*)$/",$major)){
            $status .= "<span style=\"color:red\">Error you have not entered a major. </span><br/ >";
            $invalidMajor = "id='req'";
        }
        if (!$complaint || !preg_match("/^([a-zA-Z]{2,}(?: [a-zA-Z]{0,})*)$/",$complaint)){
            $status .= "<span style=\"color:red\">Error you have not entered a valid phone number. </span><br/ >";
            $invalidComplaint = "id='req'";
        }
    }
    
    if (!status){
        if ((isset($_POST["submit"])) == "Next"){
            $status = "<span> Please verify your information </span>";
            print "<div class='contain_all'>
            
            <form name = 'assignment3' action='index.php' method='post'>
            <input type='hidden' name='firstName' value '$firstName'>
            <input type='hidden' name='lastName' value '$lastName'>
            <input type='hidden' name='phone' value '$phone'>
            <input type='hidden' name='email' value '$email'>
            <input type='hidden' name='major' value '$major'>
            <input type='hidden' name='complaint' value '$complaint'>
            
            <table class = 'contain' align='center' style='color:black'>
            <tr bgcolor = 'white'>
            <td align='center' colspan='2'>Contact information </td>
            </tr>
            <tr>
            <td>First Name:</td>
            <td>$firstName</td>
            <td>Last Name:</td>
            <td>$lastName</td>
            </tr>
            <tr>
            <td>Phone:</td>
            <td>$phone</td>
            <td>Email:</td>
            <td>$email</td>
            </tr>
            <tr>
            <td>Major</td>
            <td>$major</td>
            <tr>
            <td>Complaint:</td>
            <td>$complaint</td>
            </tr>
            </table>
            
            <br>
            <center><input type='submit' value='Back' name='back'/><input type='submit' value='Send' name='submit'</center>
            </form>
            </body>
</html>";
die();

        }elseif((isset($_POST["submit"])) == "Send"){
            $status = "<span> Your complaint has been sent </span>";
            $firstName = "";
            $lastName="";
            $phone="";
            $email="";
            $major="";
            $complaint="";
        }
        return $status;
    }
    
    if ((isset($_POST["submit"]))== "submit"){
        $status = validator();
    }
    else{
        $status = " Please provide the following information ";
    }
    ?>
    <div class="contain_all">
        <table class = "contain">
            <tr>
                <td>
                    <form name="Assignment3" action="index.php" method="post">
                        <center>Student Complaints</center>
                        
                        <?php print $status; ?>
                        <fieldset>
                            <legend>
                                <t>Contact Information</t>
                            </legend>
                            
                            <table align="center">
                                <tr>
                                    <td>
                                        <label for="firstName">
                                            First Name:
                                        </label>
                                    </td>
                                    <td>
                                        <input type="text" class="textbox" <?php print $firstName;?> name="firstName" value="">
                                    </td>
                                     <td>
                                        <label for="lastName">
                                            Last Name:
                                        </label>
                                    </td>
                                    <td>
                                        <input type="text" class="textbox" <?php print $invalidLastName;?> name="lastName" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="phone">
                                            Phone:
                                        </label>
                                    </td>
                                    <td>
                                        <input type="text" class="textbox" <?php print $invalidPhone;?> name="phone" value="">
                                    </td>
                                     <td>
                                        <label for="email">
                                            Email:
                                        </label>
                                    </td>
                                    <td>
                                        <input type="text" class="textbox" <?php print $invalidemail;?> name="email" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="major">
                                            <b>Select your major</b>
                                            
                                        </label>
                                        
                                    </td>
                                    <td>
                                        <select name="major">
                                            <?php
                                            $majorArray = array("Majors", "Biology", "Business", "Computer Science");
                                            foreach ($majorArray as $element){
                                                print"<option value='$element'";
                                                if ($element == $major){
                                                    print "selected";
                                                }
                                                print "<option>$element</option>";
                                                 } 
                                                 ?>
                                        </select>
                                    </td>
                                    <td>
                                        <label name = "Student">
                                            Are you a Student?
                                        </label>
                                    <td>
                                        <input type="checkbox"  name="student" value="Yes">
                                        <?php
                                        if (isset($_POST['student']) && $_POST['student']=='Yes')
                                        {
                                            echo $firstName . "is a student";
                                        }
                                        
                                        ?>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <label for="complaint">
                                            Complaint:
                                        </label>
                                        </td>
                                    <td>
                                        <input type="textarea" name="complaint" rows="25" cols="40"/>
                                    </tr>
                            </table>
                            </fieldset>
                            <br></br>
                            <input type="submit" name="Next" value="Next">
                            <input type="submit" name="Send" value="Send">
                        
                    </form>
                    <?php
                    echo "<strong>First Name </strong>" . $firstName;
                    echo "<br>";
                    echo "<strong> Last Name </strong>" . $firstName;
                    echo "<br>";
                    echo "<strong>Phone </strong>" . $phone;
                    echo "<br>";
                    echo "<strong>Email </strong>" . $email;
                    echo "<br>";
                    echo "<strong>Major </strong>" . $major;
                    echo "<br>";
                    echo "<strong>Complaint </strong>" . $complaint;
                    echo "<br>";
                    ?>
                
        </table>
    </div>
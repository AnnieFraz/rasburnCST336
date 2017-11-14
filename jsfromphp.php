<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <?php
        echo "div id='result'></div>"
        ?>
        <script type="type/javascript">
        
        
        var firstName; //Declare
        firstName = "Anna"; //Initialise 
        
        var lastName="Rasburn";
        
        var now = new Date(); //Dates: doubles to the right of the decimal. Double of seconds since 1st January 1970. if you want before 1969  it is negative
        //Date is a function(^). No classes/consructors. New instructs interepreter to do extra work. 
        
        
        var age = 20; //initialise an int
        
        var grade = 45.87; //Initialise a real
        
        var students = [];
        var classes = new Array();
        
        console.log("Running");
        
        students.push('Bob');
        
        console.log("Students:", students)
        
        students.splice(0, 1); //Deleting from an array
        //Start at 0, delete 1 from there
        //if you put an assignment inside a conditional, then it is always true. There should never be only 1 equals = in a conditional
        //Comma instead of
        console.log("Students: (after delete)",  students);
        
        students.splice(0,0,"Billy", "Sally");
        
        console.log("Students: (after insert)",  students);
        
        print("working")
        
        function print(arg1, arg2, arg3){
            console.log("printing", arg1, arg2, arg3)
        }
        
        
        
        var printer = function(){
            console.log("print this!")
        }
        
            
        </script>

    </body>
</html>
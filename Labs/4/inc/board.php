<!DOCTYPE html>
<html>
    <head>
      <?php
             $letters["0"] =array(
                array(1,1,1,1,1,1,1,1),
                array(1,1,0,0,0,0,0,1),
                array(1,0,1,0,0,0,0,1),
                array(1,0,0,1,0,0,0,1),
                array(1,0,0,0,1,0,0,1),
                array(1,0,0,0,0,1,0,1),
                array(1,0,0,0,0,0,1,1),
                array(1,1,1,1,1,1,1,1)
            );
            $letters["1"] =array(
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0)
            );
            $letters["2"] =array(
                array(1,1,1,1,1,1,1,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,0),
                array(1,1,1,1,1,1,1,1)
            );
            $letters["3"] =array(
                array(1,1,1,1,1,1,1,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,1,1,1,1,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,1)
            );
            $letters["4"] =array(
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1)
            );
            $letters["5"] =array(
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,1,1,1,1,1,1,1),
                array(0,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,1)
            );
            $letters["6"] =array(
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,0),
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,1)
            );
            $letters["7"] =array(
                array(1,1,1,1,1,1,1,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1)
            );
            $letters["8"] =array(
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,1),
                array(0,1,1,1,1,1,1,0),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,1)
            );
            
            $letters["9"] =array(
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1)
            );
         
            
            //Defining letters
            $letters["A"] =array(
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1)
            );
            $letters["B"] =array(
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,1,0),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,1)
            );
            $letters["C"] =array(
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,1,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,1,1,1,1,1,1,1)
            );
            $letters["D"] =array(
                array(1,1,1,1,1,1,1,0),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,1,0),
                array(1,1,1,1,1,1,0,0)
            );
            $letters["E"] =array(
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,0),
                array(1,1,1,1,1,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,1,1,1,1,1,1,1)
            );
            $letters["F"] =array(
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,0),
                array(1,1,1,1,1,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0)
            );
            $letters["G"] =array(
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,0),
                array(1,0,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,1)
            );
            $letters["H"] =array(
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
            );
            $letters["I"] =array(
                array(1,1,1,1,1,1,1,1),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(1,1,1,1,1,1,1,1)
            );
            $letters["J"] =array(
                array(1,1,1,1,1,1,1,1),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(1,1,1,1,1,0,0,0)
            );
            $letters["K"] =array(
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,0),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1)
            );
            $letters["L"] =array(
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,1,1,1,1,1,1,1)
            );
            $letters["M"] =array(
                array(1,0,0,0,0,0,0,1),
                array(1,1,0,0,0,0,0,1),
                array(1,0,1,0,0,0,1,1),
                array(1,0,0,1,0,1,0,1),
                array(1,0,0,0,1,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1)
            );
            $letters["N"] =array(
                array(1,0,0,0,0,0,0,1),
                array(1,1,0,0,0,0,0,1),
                array(1,0,1,0,0,0,0,1),
                array(1,0,0,1,0,0,0,1),
                array(1,0,0,0,1,0,0,1),
                array(1,0,0,0,0,1,0,1),
                array(1,0,0,0,0,0,1,1),
                array(1,0,0,0,0,0,0,1)
            );
            $letters["O"] =array(
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,1)
            );
            $letters["P"] =array(
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0)
            );
            $letters["Q"] =array(
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,1,0,0,1),
                array(1,0,0,0,0,1,0,1),
                array(1,0,0,0,0,0,1,1),
                array(1,1,1,1,1,1,1,1)
            );
            $letters["R"] =array(     //s
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,0),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1)
            );
            $letters["S"] =array(
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,0),
                array(1,1,1,1,1,1,1,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,1)
            );
            $letters["T"] =array(
                array(1,1,1,1,1,1,1,1),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0),
                array(0,0,0,0,1,0,0,0)
            );
            $letters["U"] =array(
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,1)
            );
            $letters["V"] =array(
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(0,1,0,0,0,0,1,0),
                array(0,0,1,0,0,1,0,0),
                array(0,0,0,1,1,0,0,0)
            );
             $letters["W"] =array(
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,1,0,0,1),
                array(1,0,0,1,0,1,0,1),
                array(1,0,1,0,0,0,1,1),
                array(1,1,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1)
            );
             $letters["X"] =array(
                array(1,0,0,0,0,0,0,1),
                array(0,1,0,0,0,0,1,0),
                array(0,0,1,0,0,1,0,0),
                array(0,0,0,1,1,0,0,0),
                array(0,0,0,1,1,0,0,0),
                array(0,0,1,0,0,1,0,0),
                array(0,1,0,0,0,0,1,0),
                array(1,0,0,0,0,0,0,1)
            );
            $letters["Y"] =array(
                array(1,0,0,0,0,0,0,1),
                array(1,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(0,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,1)
            );
            $letters["Z"] =array(
                array(1,1,1,1,1,1,1,1),
                array(0,0,0,0,0,0,0,1),
                array(1,1,1,1,1,1,1,1),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,0,0,0,0,0,0,0),
                array(1,1,1,1,1,1,1,1)
            );
            function drawLetter($letter, $color){
                global $letters;
                echo "<table>";
                for($i = 0; $i < 8; $i++){
                    echo "<tr>";
                    for($j = 0; $j < 8; $j++){
                        if($letters[$letter][$i][$j] == 1){
                            
                                echo "<td class='pixel' style='background-color: $color; '>$letter</td>";
                            
                        }
                        else{
                            echo "<td class='empty'></td>";
                        }
                        
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
            function drawMessage($Message, $colour){
                $Message = strtoupper($Message);
                $validchars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ! 0123456789";
                if(strspn($Message, $validchars) != strlen($Message) || strlen($Message) > 16){
                    echo "Invalid input";
                }
                else{
                    $j = 0;
                    for($i = 0; $i < strlen($Message); $i++){
                        if($Message[$i] == " "){
                            echo "</br>";
                            $j++;
                            if($j == sizeof($colour)){
                                $j = 0;
                            }
                        }
                        else{
                            drawLetter($Message[$i], $colour[$j]);
                          
                        }
                    }
                }
            }
            
            function drawForm(){
                echo "
                    <form action='' method='post'>
                        <input type='text' name='message' placeholder='Enter a message'>
                        <select name='color'>
                        <option value='blue'>blue</option>
                            <option value='red'>Red</option>
                            <option value='yellow'>Yellow</option>
                            
                            
                            <option value='green'>Green</option>
                        </select>
                        
                        </br> </br>
                        
                        <input type='text' name='color1' placeholder='Enter a color'>
                        <input type='text' name='color2' placeholder='Enter a color'>
                        <input type='text' name='color3' placeholder='Enter a color'>
                        
                        </br> </br>
                        <input type='checkbox' name='reset' value='yes' checked>Display Form<br>
                        </br>
                        <input type='submit' name='submitbtn'/>
                    </form>
                ";
            
            }
        ?>
    </head>
    <body>

    </body>
</html>
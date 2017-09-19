<?php
#php sees the entire page as the scope
#Functions run on their own
#$message="this is a message";
#Make sure code is properly aligned. sloppy code loses marks

                        for($i =0; $i < 9; $i++)
{
    $num = (rand(1, 10));
    echo $num;


    if ($num %2 ==0){
        echo " The number is even";
    }
    else{
        echo " The number is odd";
    }
    $sum = $sum + $num;
    $average = $sum/9;
}

    echo "The sum is:";
    echo $sum;
    echo "The average is:";
    echo $average;
?>
<!DOCTYPE-html>
<html>
    <head>
        <title></title>
        </head>
        <body>
            <div>
                <table>
                    <tr>
                        <th>Random Number</th>
                    </tr>
                    <tr>
                        <td>
                            <?php

                    ?>
                    </td>
                    </tr>
                    
                </table>
            </div>
            
        </body>
    
</html>
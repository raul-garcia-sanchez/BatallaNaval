<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batalla</title>
</head>
<body>

    <table border="1">
            <?php

                $n = 10;
                $m = 10;

                $a = [[[5,3],[6,3]]];
                
                for($j=0;$j<$m;$j++){
                    echo "<tr>";
                    for($i=0;$i<$n;$i++){
                        if (($j==0) && ($i!=0)){
                            echo "<td>$i</td>";
                        }
                        else if(($i==0) && ($j!=0)){
                            echo "<td>".chr($j+64)."</td>";
                        }
                        else{
                            $existe = false;
                            foreach ($a as $index){
                                foreach($index as $posBarco){
                                    if (count($index) == 1 && $j == $posBarco[0] && $i == $posBarco[1]){
                                        $existe = true;
                                        echo "<td bgcolor='green'>".'X'."</td>";
                                    }
                                    else if (count($index) == 2 && $j == $posBarco[0] && $i == $posBarco[1]){
                                        $existe = true;
                                        echo "<td bgcolor='red'>".'X'."</td>";
                                    }
                                    else if (count($index) == 3 && $j == $posBarco[0] && $i == $posBarco[1]){
                                        $existe = true;
                                        echo "<td bgcolor='blue'>".'X'."</td>";
                                    }
                                    else if (count($index) == 4 && $j == $posBarco[0] && $i == $posBarco[1]){
                                        $existe = true;
                                        echo "<td bgcolor='yellow'>".'X'."</td>";
                                    }
                                }
                            }
                            if ($existe == false){
                                echo "<td></td>";
                            }
                            
                        }
                        

                        }
                        echo "</tr>";
                }
                
            ?>
        
    </table>




    
</body>
</html>
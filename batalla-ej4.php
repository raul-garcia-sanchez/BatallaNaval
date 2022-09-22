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

                $n = 15;
                $m = 15;

                $vaixells = [];

                for ($i = 0; $i <4; $i++){
                    $altura = rand(1,$m);
                    $anchura = rand(1,$n);
                    $array = [[$altura,$anchura]];
                    $vaixells[] = $array;
                }

                $altura = rand(1,$m);
                $anchura = rand(1,$n);
                for ($i = 0; $i <3; $i++){
                    $random = rand(1,2);
                    $random2 = rand(1,2);
                    if ($random == 1){
                        if($random2 == 1){
                            $array = [[$altura,$anchura],[$altura+1,$anchura]];
                        }
                        else{
                            $array = [[$altura,$anchura],[$altura-1,$anchura]];
                        }
                        
                    }
                    else{
                        if ($random2 == 1){
                            $array = [[$altura,$anchura],[$altura,$anchura+1]];
                        }
                        else{
                            $array = [[$altura,$anchura],[$altura,$anchura-1]];
                        }
                        
                    }
                    $vaixells[] = $array;
                    $altura = rand(1,$m);
                    $anchura = rand(1,$n);
                }

                $altura = rand(1,$m);
                $anchura = rand(1,$n);
                for ($i = 0; $i <2; $i++){
                    $random = rand(1,2);
                    $random2 = rand(1,2);
                    if ($random == 1){
                        if ($random2 == 1){
                            $array = [[$altura,$anchura],[$altura+1,$anchura],[$altura+2,$anchura]];
                        }
                        else{
                            $array = [[$altura,$anchura],[$altura-1,$anchura],[$altura-2,$anchura]];
                        }
                        
                    }
                    else{
                        if ($random2 == 1){
                            $array = [[$altura,$anchura],[$altura,$anchura+1],[$altura,$anchura+2]];
                        }
                        else{
                            $array = [[$altura,$anchura],[$altura,$anchura-1],[$altura,$anchura-2]];
                        }
                        
                    }
                    $vaixells[] = $array;
                    $altura = rand(1,$m);
                    $anchura = rand(1,$n);
                }

                $altura = rand(1,$m);
                $anchura = rand(1,$n);
                for ($i = 0; $i <1; $i++){
                    $random = rand(1,2);
                    $random2 = rand(1,2);
                    if ($random == 1){
                        if ($random2 == 1){
                            $array = [[$altura,$anchura],[$altura+1,$anchura],[$altura+2,$anchura],[$altura+3,$anchura]];
                        }
                        else{
                            $array = [[$altura,$anchura],[$altura-1,$anchura],[$altura-2,$anchura],[$altura-3,$anchura]];
                        }
                        
                    }
                    else{
                        if ($random2 == 1){
                            $array = [[$altura,$anchura],[$altura,$anchura+1],[$altura,$anchura+2],[$altura,$anchura+3]];
                        }
                        else{
                            $array = [[$altura,$anchura],[$altura,$anchura-1],[$altura,$anchura-2],[$altura,$anchura-3]];
                        }
                        
                    }
                    $vaixells[] = $array;
                }

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
                            foreach ($vaixells as $index){
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
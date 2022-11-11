<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tauler</title>
</head>
<body>
    
<table border="1">
        <?php

            for($j=0;$j<11;$j++){
                echo "<tr>";
                for($i=0;$i<11;$i++){
                    if (($j==0) && ($i!=0)){
                        echo "<td>$i</td>";
                    }
                    else if(($i==0) && ($j!=0)){
                        echo "<td>".chr($j+64)."</td>";
                    }
                    else{
                        echo "<td></td>";
                    }
                    }
                    echo "</tr>";
            }
            
        ?>
    
</table>

</body>
</html>





 
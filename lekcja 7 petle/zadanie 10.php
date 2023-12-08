<table>
<caption>Tabliczka mnożenia</caption>
<?php

    for($x=0; $x<=10; $x++){
        if($x==0){
            echo "<th>&times</th>";
        }
        else {
            echo "<th>$x</th>";
        }
        
    }
    for($x=1; $x<=10; $x++) {
        echo "<tr><th>$x</th>";
        for($y=1; $y<=10; $y++){
            echo ($x==$y ? "<td class='xd'>":"<td>").($x*$y)."</td>";
        }
        
    }
    ?>

</table>



<style>
    table{
        border: 1px solid black;
        font-family: Verdana,sans-serif; 
        font-size: large;
        border-collapse: collapse;
    }

    th,td{
        border: 1px dashed black;
        padding: 5px;
    }

    th{
        background-color: burlywood;
    }


    td{
        background-color: beige;
        text-align: center;
        vertical-align: middle;
    }

    .xd{
        background-color: bisque;
    }
</style>
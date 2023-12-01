<p>
<?php 
$suma=0;
    for($xd=10; $xd<100; $xd++){
        if($xd%2 == 0){
        echo "$xd|";
        $suma += $xd;
        }
    }
    
?>
</p>   
<p>Suma powyższych liczb jest równa <?=$suma?></p>

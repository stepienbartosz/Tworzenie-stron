<style>
    h1{
        color: brown;
        border: 2px solid black;
        padding: 10px;
    }

    h3{
        color: indigo;
    }
</style>

<?php $wiek=rand(0,100)?>
<h1>Mam <?=$wiek?>lat</h1>
<h2>
<?php
    if($wiek<18){
        echo "Jeszcze nie możesz głosować";}
    elseif($wiek<21){
        echo "Możesz tylko głosować";}
    elseif($wiek<30){
        echo "Możesz głosować i kandydować do Sejmu.";}
    elseif($wiek<35){
        echo "Możesz głosować i kandydować do Sejmu i Senatu";}
    elseif($wiek>=35){
        echo "Możesz głosować, kandydować do Sejmu i Senatu oraz na Prezydenta.";}
?>
</h3>

    
<table>
    
        
    <?php 
    $n=1;
    while($n<=5){
        echo "<tr><td>To jest wiersz numer $n</td></tr>";
        $n++;

    }
?>

        
</table>


<style>
    td{
        background-color: lightgray;
        border: gray solid;
        padding: 10px;
    }
    table{
        border-collapse: collapse;
    }
</style>
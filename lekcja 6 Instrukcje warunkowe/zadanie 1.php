<link rel="stylesheet" href="zadanie1.css">
<?php $losowa = rand(1,30)?>
<h2 class="xd"><?= $losowa ?></h2>
<?php if ($losowa>=20)
{
  echo "<h4 class='xd1'>Wylosowana liczba jest większa lub równa 20</h4>";
} ?>
<?php if ($losowa % 2 ==0)
        {
            echo "<h4 class='xd2'>jest parzysta</h4>";
        }
        else
        {
            echo "<h4 class='xd2'>nie jest parzysta</h4>";
        }
?>

<?php if ($losowa < 10)
    {
        echo "<h4 class='xd3'>Pierwsza dziesiatka</h4>";
    }
    elseif ($losowa < 20)
    {
        echo "<h4 class='xd3'>Druga dziesiatka</h4>";
    }
    else
    {
        echo "<h4 class='xd3'>Trzecia dziesiatka</h4>";
    }
    ?>
        

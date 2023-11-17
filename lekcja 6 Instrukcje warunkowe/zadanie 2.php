<?php $miesiac = rand(1,15)?>
<h1 style="border:pink dotted;border-width: 4px 0;text-align:center"><?= $miesiac ?></h1>
<h3 style="border: dashed pink;border-width: 2px 0;text-align: center; font-family: cursive">
<?php 
    switch ($miesiac)
        {
          case 1;
          case 2;
          case 3;
            echo "I Kwartał";
            break;
          case 4;
          case 5;
          case 6;
            echo "II Kwartał";
            break;
          case 7;
          case 8;
          case 9;
            echo "III Kwartał";
            break;
          case 10;
          case 11;
          case 12;
            echo "IV Kwartał";
            break;
          default:
            echo "Bledny numer miesiaca";
        }
        ?>
</h3>
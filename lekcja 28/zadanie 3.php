<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $conn = mysqli_connect('127.0.0.1', 'stepien', 'dupa123', 'stepien');
    if (!$conn) {
        die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: "
            . mysqli_connect_error());
    }

    $query ='select tytul, imie, nazwisko, wydawnictwo, rok_wyd, cena from ksiazki where (wydawnictwo = "PWN" or wydawnictwo = "Helion") and rok_wyd between 1990 and 2011 order by rok_wyd;';


    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
         
                
                echo $row["imie"];
            // $tytul = $row["Tytul"];
            // $imie = $row["Imie"];
            // $nazwisko = $row["Nazwisko"];
            // $wydawnictwo = $row["Wydawnictwo"];
            // $miejsce = $row["Miejsce_wyd"];
            // $rok = $row["Rok_wyd"];
            // $strony = $row["Objetosc_ks"];
            // $cena = $row["Cena"];
            // $dzial = $row["nazwa_dzialu"];
            // echo "\"$tytul\" $imie $nazwisko, wydawnictwo $wydawnictwo ($miejsce $rok), $strony str. Cena: $cena zł (dział: $dzial) <br>";
       
       // TU TABELKA !
        }
    }
    
    ?>
</body>
</html>
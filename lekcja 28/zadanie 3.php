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

    $query ='select sygnatura, tytul, imie, nazwisko, wydawnictwo, rok_wyd, cena from ksiazki where (wydawnictwo = "PWN" or wydawnictwo = "Helion") and rok_wyd between 1990 and 2011 order by rok_wyd;';


    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
         
                echo $row["sygnatura"];
                echo $row["tytul"];
                echo $row["imie"];
                echo $row["nazi"];
                echo $row["wydawnictwo"];
                echo $row["rok_wyd"];
                echo $row["cena"];
            
             
            
       
       // TU TABELKA !
        }
    }
    
    ?>
</body>

<table>
    <tr>
        <th>Sygnatura</th>
        <th>Tytul</th>
    </tr>
</table>
</html>
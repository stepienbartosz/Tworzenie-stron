<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $conn = mysqli_connect('127.0.0.1', 'stepien', 'dupacyce123', 'stepien');
    if (!$conn) {
        die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: "
            . mysqli_connect_error());
    }

    $query = 'SELECT Tytul, Nazwisko, Imie from ksiazki;';

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $tytul = $row["Tytul"];
            $imie = $row["Imie"];
            $nazwisko = $row["Nazwisko"];
            echo "Książka \"$tytul\" została napisana przez $imie $nazwisko. <br>";
        }
    }
    ?>
</body>

</html>
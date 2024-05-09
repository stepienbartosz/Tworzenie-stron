<?php
    $conn = new mysqli("127.0.0.1", "sakra", "supermocnehaslo", "sakra");
    if ($conn->connect_error) {
        die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM Czytelnicy;");

    echo "<h4>Liczba wierszy: ".$result->num_rows."</h4>"
?>
    <table>
        <tr>
            <th>Nr_czytelnika</th>
            <th>Nazwisko</th>
            <th>Imie</th>
            <th>Data_ur</th>
            <th>Ulica</th>
            <th>Kod</th>
            <th>Miasto</th>
            <th>Data_zapisania</th>
            <th>Data_skreslenia</th>
            <th>Nr_legitymacji</th>
            <th>Funkcja</th>
            <th>Plec</th>
        </tr>

        <?php
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>".$row['Nr_czytelnika']."</td>
                    <td>".$row['Nazwisko']."</td>
                    <td>".$row['Imie']."</td>
                    <td>".$row['Data_ur']."</td>
                    <td>".$row['Ulica']."</td>
                    <td>".$row['Kod']."</td>
                    <td>".$row['Miasto']."</td>
                    <td>".$row['Data_zapisania']."</td>
                    <td>".$row['Data_skreslenia']."</td>
                    <td>".$row['Nr_legitymacji']."</td>
                    <td>".$row['Funkcja']."</td>
                    <td>".$row['Plec']."</td>
                    </tr>";
                }
        ?>
    </table>
    


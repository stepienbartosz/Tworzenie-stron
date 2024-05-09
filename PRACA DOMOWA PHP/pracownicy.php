<?php
    $conn = new mysqli("127.0.0.1", "sakra", "supermocnehaslo", "sakra");
    if ($conn->connect_error) {
        die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM Pracownicy;");

    echo "<h4>Liczba wierszy: ".$result->num_rows."</h4>"
?>
    <table>
        <tr>
            <th>Id_pracownika</th>
            <th>Nazwisko</th>
            <th>Imie</th>
            <th>Id_stanowisko</th>
            <th>Miasto</th>
            <th>Data_zatrudnienia</th>
            <th>Wynagrodzenie</th>
        </tr>

        <?php
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>".$row['Id_pracownika']."</td>
                    <td>".$row['Nazwisko']."</td>
                    <td>".$row['Imie']."</td>
                    <td>".$row['Id_stanowisko']."</td>
                    <td>".$row['Miasto']."</td>
                    <td>".$row['Data_zatrudnienia']."</td>
                    <td>".$row['Wynagrodzenie']."</td>
                    </tr>";
                }
        ?>
    </table>
    


<?php
    $conn = new mysqli("127.0.0.1", "sakra", "supermocnehaslo", "sakra");
    if ($conn->connect_error) {
        die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM Ksiazki;");

    echo "<h4>Liczba wierszy: ".$result->num_rows."</h4>"
?>
    <table>
        <tr>
            <th>Sygnatura</th>
            <th>Tytul</th>
            <th>Nazwisko</th>
            <th>Imie</th>
            <th>Wydawnictwo</th>
            <th>Miejsce_wyd</th>
            <th>Rok_wyd</th>
            <th>Objetosc_ks</th>
            <th>Cena</th>
            <th>Id_dzial</th>
        </tr>

        <?php
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>".$row['Sygnatura']."</td>
                    <td>".$row['Tytul']."</td>
                    <td>".$row['Nazwisko']."</td>
                    <td>".$row['Imie']."</td>
                    <td>".$row['Wydawnictwo']."</td>
                    <td>".$row['Miejsce_wyd']."</td>
                    <td>".$row['Rok_wyd']."</td>
                    <td>".$row['Objetosc_ks']."</td>
                    <td>".$row['Cena']."</td>
                    <td>".$row['Id_dzial']."</td>
                    </tr>";
                }
        ?>
    </table>
    


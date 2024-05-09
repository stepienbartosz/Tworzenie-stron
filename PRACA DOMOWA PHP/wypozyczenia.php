<?php
    $conn = new mysqli('127.0.0.1', 'stepien', 'dupa123', 'stepien');
    if ($conn->connect_error) {
        die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM Wypozyczenia;");

    echo "<h4>Liczba wierszy: ".$result->num_rows."</h4>"
?>
    <table>
        <tr>
            <th>Nr_transakcji</th>
            <th>Sygnatura</th>
            <th>Id_pracownika</th>
            <th>Nr_czytelnika</th>
            <th>Data_Wypozyczenia</th>
            <th>Data_zwrotu</th>
        </tr>

        <?php
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>".$row['Nr_transakcji']."</td>
                    <td>".$row['Sygnatura']."</td>
                    <td>".$row['Id_pracownika']."</td>
                    <td>".$row['Nr_czytelnika']."</td>
                    <td>".$row['Data_Wypozyczenia']."</td>
                    <td>".$row['Data_zwrotu']."</td>
                    </tr>";
                }
        ?>
    </table>
    


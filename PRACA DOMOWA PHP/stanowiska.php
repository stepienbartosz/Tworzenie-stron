<?php
    $conn = new mysqli('127.0.0.1', 'stepien', 'dupa123', 'stepien');
    if ($conn->connect_error) {
        die("Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM Stanowiska;");

    echo "<h4>Liczba wierszy: ".$result->num_rows."</h4>"
?>
    <table>
        <tr>
            <th>Id_stanowisko</th>
            <th>Nazwa</th>
        </tr>

        <?php
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>".$row['Id_stanowisko']."</td>
                    <td>".$row['Nazwa']."</td>
                    </tr>";
                }
        ?>
    </table>
    


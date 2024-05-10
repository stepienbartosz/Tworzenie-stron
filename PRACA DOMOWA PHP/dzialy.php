<?php
    $conn= new mysqli('127.0.0.1', 'stepien', 'dupa123', 'stepien');
    if ($conn->connect_error){
        die("Coś nie działa. Błąd: " . $conn->connect_error);
    }

    $result = $conn->query("select * from Dzialy;");

    echo "<h4>Liczba wierszy: ".$result->num_rows."</h4>"
?>

    <table>
        <tr>
            <th>Id_dzial</th>
            <th>Nazwa</th>
            <th><a href="?page=dzialy_dodaj">xd</a></th>
        </tr>

        <?php
            while($row = $result->fetch_assoc()){
                
                echo "<tr>
                    <td>".$row['Id_dzial']."</td>
                    <td>".$row['Nazwa']."</td>
                    <td><a href='?page=dzialy_edycja'>edycja</a></td>
                </tr>";
            }
        ?>
    </table>


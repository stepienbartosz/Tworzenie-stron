<?php
    $conn= new mysqli("127.0.0.1", "sakra", "supermocnehaslo", "sakra");
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
        </tr>

        <?php
            while($row = $result->fetch_assoc()){
                
                echo "<tr>
                    <td>".$row['Id_dzial']."</td>
                    <td>".$row['Nazwa']."</td>
                </tr>";
            }
        ?>
    </table>


<form action="" method="POST">
    <table class="edycja">
        <tr>
            <td>Id_dzial</td>
            <td><input type="number" name="id_dzial"></td>
        </tr>
        <tr>
            <td>Nazwa</td>
            <td><input type="text" name="nazwa_dzial"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Zapisz" class="button"></td>
        </tr>

    </table>
</form>

<?php
    $conn= new mysqli('127.0.0.1', 'stepien', 'dupa123', 'stepien');
    if ($conn->connect_error){
        die("Coś nie działa. Błąd: " . $conn->connect_error);
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $id = $_POST['id_dzial'];
        if($id == ""){
            $id="NULL";
        }
        
        $nazwa_dzialu = $_POST['nazwa_dzial'];

        $result = $conn->query("INSERT INTO dzialy VALUES ($id, '$nazwa_dzialu')");

        if ($result) {
            echo "Pomyślnie dodano wiersz!";
        } else {
            echo "Błąd przy dodawaniu wiersza!";
        }
    }
    
?>
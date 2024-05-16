<?php
     $conn= new mysqli('127.0.0.1', 'stepien', 'dupa123', 'stepien');
     if ($conn->connect_error){
         die("Coś nie działa. Błąd: " . $conn->connect_error);
     }

    $id = $_GET['row'];

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $id2 = $_POST['id_dzial'];
        
        $nazwa_dzialu = $_POST['nazwa_dzial'];

        $result = $conn->query("UPDATE dzialy SET id_dzial=$id2, nazwa='$nazwa_dzialu' WHERE Id_dzial='$id'");

        $id = $id2;

        if ($result) {
            echo "Pomyślnie edytowano wiersz!";
        } else {
            echo "Błąd przy edytowaniu wiersza!";
        }
    }
    
    $result = $conn->query("SELECT * FROM dzialy where id_dzial='$id';")->fetch_assoc();
     $nazwa = $result['Nazwa']
?>

<form action="" method="POST">
    <table class="edycja">
        <tr>
            <td>Id_dzial</td>
            <td><input type="number" name="id_dzial" value="<?=$id?>"></td>
        </tr>
        <tr>
            <td>Nazwa</td>
            <td><input type="text" name="nazwa_dzial" value="<?=$nazwa?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Zapisz" class="button"></td>
        </tr>

    </table>
</form>

<?php
    
?>
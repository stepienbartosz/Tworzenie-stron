<table class="edycja">
    <tr>
        <td>Id_dzial</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>Nazwa</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="Zapisz" class="button"></td>
    </tr>

</table>

<?php
      $conn= new mysqli('127.0.0.1', 'stepien', 'dupa123', 'stepien');
      if ($conn->connect_error){
          die("Coś nie działa. Błąd: " . $conn->connect_error);
      }

      $result = $conn->query("...;");
?>
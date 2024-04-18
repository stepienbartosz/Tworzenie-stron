<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $login = $_POST["login"]?? "";  // ustaw do zmiennej login to co bylo w formularzy w polu login a jak nie ma to ustaw na nic
        $haslo = $_POST["haslo"]?? "";
        $rola = $_POST["rola"]?? "";
        $sosiwo = $_POST["sosiwo"]?? [];


        
        
    ?>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend>rejstsARTAC</legend>

            <label for="login"><span class="error">*</span>login</label>
            <input type="text" name="login" id="login" value="<?=$login?>">
            <br>
            <br>
            <label for="haslo">haslo</label>
            <input type="password" name="haslo" id="haslo" value="<?=$haslo?>"> <!-- value ustawia wartosc an to co bylo zapisane z wyslanego forma -->
            <br>
            <br>
            role
            <br>
            <input type="radio" name="rola" id="urzytkownik" value="urzytkownik" <?= $rola=="urzytkownik" ? "checked" : "" ?>>  <label for="urzytkownik">urzytkownik</label>
            <br>
            <input type="radio" name="rola" id="autor" value="autor"  <?= $rola=="autor" ? "checked" : "" ?>>  <label for="autor">autor</label>
            <br>
            <br>
            sosiwo<br>                  <!-- kwadrat zeby to byla tablica dla php -->
            <input type="checkbox" name="sosiwo[]" id="keczup"  <?= in_array("sosiwo", $role) ? "checked" : "" ?>>      <label for="keczup">keczup</label><br>
            <input type="checkbox" name="sosiwo[]" id="serowy"> <label for="serowy">serowy</label><br>
            <input type="checkbox" name="sosiwo[]" id="czosnkowy"> <label for="czosnkowy">czosnkowy</label><br>
            <input type="submit" name="" id="" value="zarejestruj">
        </fieldset>
    </form>
</body>
</html>
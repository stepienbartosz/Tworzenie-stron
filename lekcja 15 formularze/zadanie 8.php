<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        fieldset{
            border: solid 5px green;
        }

        input[type="checkbox"] {
        }

        label{
            margin-right: 10px;
        }
        .xd{
            color: red;
        }
    </style>

    <?php
        $name = "";
        $surname = "";
        $function= "";

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(empty($_POST['name'])){
                echo "Imie jest wymagane";
            }
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(empty($_POST['surname'])){
                echo "Nazwisko jest wymagane";
            }
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(empty($_POST['radjo'])){
                echo "Imie jest wymagane";
            }
        }
    ?>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend>Ankieta</legend>
            <label for="imie">Imię <span class="xd">*</span></label>
            <br>
            <input type="text" id="name" name="tekst" value="<?=$name?>">
            <br>
            <label for="nazwisko">Nazwisko <span class="xd">*</span></label>
            <br>
            <input type="text" id="surname" name="tekst" value="<?=$surname?>">
            <br>
            <label for="Wybierz jedna opcje">Wybierz jedna opcje <span class="xd">*</span></label>
            <br>
            <input type="radio" id="uczen" name="radjo" value="uczen">
            <label for="uczen">uczen</label>
            <br>
            <input type="radio" id="absolwent" name="radjo" value="absolwent">
            <label for="absolwent">absolwent</label>
            <br>
            <input type="radio" id="nauczyciel" name="radjo" value="nauczyciel">
            <label for="nauczyciel">nauczyciel</label>
            <br>
            <input type="radio" id="pracownikadministacji" name="radjo" value="pracownikadministacji">
            <label for="pracownikadministacji">pracownik administracji</label>
    
    <br>
    <br>
    <input type="submit" value="Wybierz">
    <br>
    <br>
    
        </fieldset>
    </form>
</body>
</html>


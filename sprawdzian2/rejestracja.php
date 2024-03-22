<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        fieldset{
            border: solid navy 4px;
        }

        span{
            color: red;
        }
        
    </style>

    <?php
        $login = true;
        $haslo = true;
        $rola = true;

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(empty($_POST['login'])){
                $login = false;
            }
            if(empty($_POST['haslo'])){
                $haslo = false;
            }
       
            if(empty($_POST['login'])){
                $rola = false;
            }
        }
    ?>
</head>
<body>


    <form action="" method="POST">
        <fieldset>
        <legend>Rejestracja</legend>
        <label for="login">Login:<span class = "error">*</span></label>
        <?php
            if(!$login){
                echo "<span class='error'>Login jest wymagany</span>";
            }
        ?>
        <br>
        <input type="text" id="login" name="login">
        
        <br>
        <label for="haslo">Hasło:<span class = "error">*</span></label>
        <?php
            if(!$haslo){
                echo "<span class='error'>Hasło jest wymagane</span>";
            }
        ?>
        <br>
        <input type="text" id="haslo" name="haslo">
        <br>
        <label for="Wybierz_jedna_role">Wybierz jedną rolę:<span class="xd">*</span></label>
        <?php
            if(!$login){
                echo "<span class='error'>Wybierz jedną rolę</span>";
            }
        ?>
            <br>
            <input type="radio" id="Urzytkownik" name="radjo" value="Urzytkownik">
            <label for="Urzytkownik">Urzytkownik</label>
            <br>
            <input type="radio" id="Autor" name="radjo" value="Autor">
            <label for="Autor">Autor</label>
            <br>
            <input type="radio" id="Redaktor" name="radjo" value="Redaktor">
            <label for="Redaktor">Redaktor</label>
            <br>
            <input type="radio" id="Administrator" name="radjo" value="Administrator">
            <label for="Administrator">Administrator</label>
            <br>
            <br>
            <input type="submit" value="Zarejestruj">
        </fieldset>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>
            label{
                margin-right: 20px;
            }

            fieldset{
                border: 3px solid green;
            }
        </style>
</head>
<body>
            <form action="" method="POST">
<fieldset>
        <legend>Liczby</legend>
    <?php 
        foreach(range(0, 100, 10)as $xd){
            echo "<input type='checkbox' name='xd[]' id='$xd' value='$xd' ";
            if($_SERVER['REQUEST_METHOD'] == "POST" && in_array($xd, $_POST["xd"])){
                echo "checked";
            }

            echo "><label for='$xd'>$xd</label>";
        }
        
    ?>
    <br>
    <br>
    <input type="submit" value="Wybierz">
    <br>
    <br>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            echo "Te liczby zostały wybrane: ".implode(', ',$_POST["xd"]);
        }
    ?>

    </fieldset>
    </form>
</body>
</html>
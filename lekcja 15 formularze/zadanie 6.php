<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        fieldset{
            border: solid 2px blue;
        }

        input[type="checkbox"] {
            
        }
    </style>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend>Alfabet</legend>
    <?php
        foreach (range("a","z") as $key => $value) {
            $xdd="";
            if(isset($_POST["asdf"])&& in_array($value, $_POST["asdf"])){$xdd="checked";}
            echo '<input type="checkbox" name="asdf[]" id="'.$value.'" value="'.$value.'" '.$xdd.'>';
            echo "<label for='$value'>$value</label>";
            }
    ?>
    <br>
    <input type="submit" value="Wybierz">
    <br>
    <?php
        if (isset($_POST["asdf"])&& count($_POST["asdf"])!=0){
            echo "Te litery zostały wybrane: ". implode(", ",$_POST["asdf"]);
            }
        else{
            echo "Żadna litera nie została wybrana.";
        }
    ?>
        </fieldset>
    </form>
</body>
</html>


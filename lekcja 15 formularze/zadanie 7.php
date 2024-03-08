<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        fieldset{
            border: solid 3px pink;
        }

        input[type="checkbox"] {
        }

        label{
            margin-right: 10px;
        }
    </style>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend>miesiace</legend>
    <?php
        $miesiace = [
            "Styczeń",
            "Luty",
            "Marzec",
            "Kwiecie",
            "Maj",
            "Czerwiec",
            "Lipiec",
            "Sierpień",
            "Wrzesień",
            "Październik",
            "Listopad",
            "Grudzien",
        ];  
        foreach ($miesiace as $key => $value) {
            $xdd="";
            
            if(isset($_POST["asdf"])&& in_array($value, $_POST["asdf"])){$xdd="checked";}
            echo '<input type="checkbox" name="asdf[]" id="'.$value.'" value="'.$value.'" '.$xdd.'>';
            echo "<label for='$value'>$value</label>";
        }
    ?>
    <br>
    <br>
    <input type="submit" value="Wybierz">
    <br>
    <br>
    <?php
        if (isset($_POST["asdf"])&& count($_POST["asdf"])!=0){
            echo "Te miesiace zostały wybrane: ". implode(", ",$_POST["asdf"]);
            }
        else{
            echo "Żaden miesiac nie został wybrany.";
        }
    ?>
        </fieldset>
    </form>
</body>
</html>


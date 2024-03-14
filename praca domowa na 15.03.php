<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        fieldset{
            border: solid 3px red;
        }

        input[type="checkbox"] {
        }

        label{
            margin-right: 10px;
        }

        .dx{
             border-style: solid;
             border-color: red;
             border-width: 0 0 2px 2px;
        }
    </style>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend class="dx">Ulubione sale koncertowe</legend>
    <?php
        $miasta = [
            "Częstochowa",
            "Gdańsk",
            "Łódz",
            "Poznań",
            "Rzeszów",
            "Szczecin",
            "Wrocław",
        ];  
        foreach ($miasta as $key => $value) {
            $xdd="";
            
            if(isset($_POST["asdf"])&& in_array($value, $_POST["asdf"])){$xdd="checked";}
            echo '<input type="checkbox" name="asdf[]" id="'.$value.'" value="'.$value.'" '.$xdd.'>';
            echo "<label for='$value'>$value</label>";
            echo "<br>";
        }
    ?>
    <br>
    <br>
    <input type="submit" value="Wybierz">
    <br>
    <br>
    <?php
        if (isset($_POST["asdf"])&& count($_POST["asdf"])!=0){
            echo "Twoje ulubione sale koncertowe znajdują sie w miastach: ". implode(", ",$_POST["asdf"]);
            }
        else{
            echo "Nie wybrałeś ulubionej sali.";
        }
    ?>
        </fieldset>
    </form>
</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        fieldset {
            border: 2px solid black;
        }
    </style>
    
</head>


<body>
    <fieldset>
        <legend>Roczniki</legend>
        <?php
            for ($xd = 2010; $xd <= 2025; $xd++) {
                echo "<input type='radio' name='rok' id='rok$xd' value='$xd'><label for='rok$xd'>$xd</label><br>";
            }
        ?>
    </fieldset>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select>
        <?php 
            $xd = [
                'styczen',
                'luty',
                'marzec',
                'kwiecien',
                'maj',
                'czerwiec',
                'lipiec',
                'sierpien',
                'wrzesien',
                'pazdziernik',
                'listopad',
                'grudzien',
            ];

            foreach ($xd as $i => $xd2) {
                echo "<option value='$xd2'".(date("n") == $i + 1 ? "selected" : "").">$xd2</option>";
            }
        ?>
    </select>
</body>
</html>
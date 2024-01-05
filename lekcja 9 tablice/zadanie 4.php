<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table{
            width: 100%;
            background-color: aliceblue;
            border-collapse: collapse;
        }

        td{
            border: dodgerblue solid 1px;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <?php
            $xd = range(0, 10);
            shuffle($xd);

            foreach ($xd as $xdd) {
                echo "<td>$xdd</td>";
            }
            ?>
        </tr>
    </table>
</body>

</html>
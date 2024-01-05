<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
       table{
        border-collapse: collapse;
       }

        td, th{
            border: 1px dotted black ;
            padding: 3px;
           
        }
    </style>
</head>

<body>
    <?php
    $xd = array(
        "Skazani na Shawshank" => "dramat",
        "Nietykalni" => "biograficzny",
        "Władca Pierścieni: Powrót króla" => " fantasy",
        "Pulp Fiction" => " gangsterski",
        "Siedem" => " kryminał",
        "Podziemny krąg" => " thriller",
        "Django" => " western",
        "Król Lew" => " animacja",
        "Avengers: Wojna bez granic" => " akcja",
        "Dobry, zły i brzydki" => " western"
    );

    print_r($xd);
    ?>

    <table>
        <caption>rosnąco według wartości</caption>
        <tr>
            <th>klucz</th>
            <th>wartosc</th>
        </tr>

        <?php
            asort($xd);
            foreach($xd as $key => $value) {
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
        ?>

    </table> <br>
    <table>
        <caption>rosnąco według kluczy</caption>
        <tr>
            <th>klucz</th>
            <th>wartosc</th>
        </tr>

        <?php
            ksort($xd);
            foreach($xd as $key => $value) {
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
        ?>

    </table> <br>
    <table>
        <caption>malejąco według wartości</caption>
        <tr>
            <th>klucz</th>
            <th>wartosc</th>
        </tr>

        <?php
            arsort($xd);
            foreach($xd as $key => $value) {
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
        ?>

    </table> <br>
    <table>
        <caption>malejąco według kluczy</caption>
        <tr>
            <th>klucz</th>
            <th>wartosc</th>
        </tr>

        <?php
            krsort($xd);
            foreach($xd as $key => $value) {
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
        ?>

    </table>

</body>

</html>

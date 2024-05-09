<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

    <?php
        $strona = $_GET["page"] ?? "home";
    ?>

<body>
    <div class="left">
        <a class="<?= $strona == "home" ? "wybrane" : "" ?>" href="?page=home">Strona Główna</a>
        <a class="<?= $strona == "czytelnicy" ? "wybrane" : "" ?>" href="?page=czytelnicy">Tabela Czytelnicy</a>
        <a class="<?= $strona == "dzialy" ? "wybrane" : "" ?>" href="?page=dzialy">Tabela Działy</a>
        <a class="<?= $strona == "ksiazki" ? "wybrane" : "" ?>" href="?page=ksiazki">Tabela Książki</a>
        <a class="<?= $strona == "pracownicy" ? "wybrane" : "" ?>" href="?page=pracownicy">Tabela Pracownicy</a>
        <a class="<?= $strona == "stanowiska" ? "wybrane" : "" ?>" href="?page=stanowiska">Tabela Stanowiska</a>
        <a class="<?= $strona == "wypozyczenia" ? "wybrane" : "" ?>" href="?page=wypozyczenia">Tabela Wypożyczenia</a>
    </div>

    <div class="right">
        <?php
            if(isset($_GET["page"])){
                if(file_exists($_GET["page"].".php")){
                    include($_GET["page"].".php");
                } else {
                    echo "ERROR";
                }
            } else {

                include('home.php');
            }
        ?>
    </div>


        


</body>
</html>

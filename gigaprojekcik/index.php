<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="left">
        <a href="index.php">Strona Główna</a>
        <a href="">Tabela Czytelnicy</a>
        <a href="">Tabela Działy</a>
        <a href="">Tabela Książki</a>
        <a href="">Tabela Pracownicy</a>
        <a href="">Tabela Stanowiska</a>
        <a href="">Tabela Wypożyczenia</a>
    </div>

    <div class="right">
        <header>
        Strona główna
        </header>
    </div>  

        <?php
            if(isset($get["PAGE"]))
                if(file_exists($page))
                    include($page)
                else
                echo "ERROR"
            else
            include('index.php')
        ?>

    
</body>
</html>
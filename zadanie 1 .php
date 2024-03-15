<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        form{
            background-color: #98fb98;
        }

        input[type="checkbox"] {
        }

        label{
            margin-right: 10px;
        }
        .xd{
            color: red;
        }
    </style>

    <?php
        $name = "";
        $surname = "";
        $function= "";

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(empty($_POST['name'])){
                echo "Imie jest wymagane";
            }
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(empty($_POST['surname'])){
                echo "Nazwisko jest wymagane";
            }
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(empty($_POST['radjo'])){
                echo "Imie jest wymagane";
            }
        }
    ?>
<body>
    <form action="" method="POST">

            <label for="Nazwa_towaru">Nazwa towaru <span class="xd">*</span></label>
            <br>
            <input type="text" id="name" name="tekst" value="<?=$name?>">
            <br>
            
            <br>
            <label for="Wybierz opcje pakowania">Wybierz opcje pakowania:<span class="xd">*</span></label>
            <br>
            <input type="radio" id="koperta" name="radjo" value="koperta">
            <label for="koperta">koperta</label>
            <br>
            <input type="radio" id="" name="radjo" value="folia">
            <label for="folia">folia</label>
            <br>
            <input type="radio" id="folia_bąbelkowa" name="radjo" value="folia bąbelkowa">
            <label for="folia_bąbelkowa">folia bąbelkowa</label>
            <br>
            <input type="radio" id="karton" name="radjo" value="karton">
            <label for="karton">karton</label>
            <br>
            <input type="radio" id="karton_z_usztywnieniem" name="radjo" value="karton z usztywnieniem">
            <label for="usztywnieniem">karton z usztywnieniem</label>
            <br>
            <br>
            <label for="Podaj wage paczki">Podaj wage paczki:<span class="xd">*</span></label>
            <br>
            <input type="radio" id="do_2_kg" name="radjo" value="do 2 kg">
            <label for="do_2_kg">do 2 kg</label>
            <br>
            <input type="radio" id="od_2_do_5_kg" name="radjo" value="od 2 do 5 kg">
            <label for="od_2_do_5_kg">od 2 do 5 kg</label>
            <br>
            <input type="radio" id="od_5_do_10_kg" name="radjo" value="od 5 do 10 kg">
            <label for="od_5_do_10_kg">od 5 do 10 kg</label>
            <br>
            <input type="radio" id="od_10_do_15_kg" name="radjo" value="od 10 do 15 kg">
            <label for="od_10_do_15_kg">od 10 do 15 kg</label>
            <br>
            <br>
            <label for="email_kontaktowy">Email kontaktowy <span class="xd">*</span></label>
            <br>
            <input type="text" id="name" name="tekst" value="<?=$name?>">
            <br>
            <label for="dodatkowe_informacje">Dodatkowe informacje <span class="xd">*</span></label>
            <br>
            <textarea id="name" name="tekst" value="<?=$name?>"></textarea>
            <br>
            <br>
            
            <input type="checkbox" id="zgoda" name="zgoda">
            <label for="zgoda">Zgoda na przetwarzanie danych<span class="xd">*</span></label>
    <br>
    <br>
    <input type="submit" value="Wyślij">
    <br>
    <br>
    
    </form>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        form{
            background-color: #;
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
        $nazwa = true;
        $opcje_pakowania = true;
        $radjo= true;
        $email= true;
        $inf= true;
        $zgoda= true;

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(empty($_POST['nazwa'])){
                $nazwa = false;
            }
            if(empty($_POST['opcja_pakowania'])){
                $opcje_pakowania = false;
            }
            if(empty($_POST['radjo'])){
                $radjo = false;
            }
            if(empty($_POST['email'])){
                $email = false;
            }
            if(empty($_POST['inf'])){
                $inf = false;
            }
            if(empty($_POST['zgoda'])){
                $zgoda = false;
            }
        }
    ?>
<body>
    <form action="" method="POST">

            <label for="Nazwa_towaru">Nazwa towaru <span class="xd">*</span></label>
            <br>
            <input type="text" id="nazwa" name="nazwa" value="<?=$nazwa?>">
            <?php
                if(!$nazwa){
                    echo "Podaj nazwe produktu";
                }
            ?>
            <br>
            
            <br>
            <label for="Wybierz opcje pakowania">Wybierz opcje pakowania:<span class="xd">*</span></label>
            <br>
            <input type="checkbox" id="koperta" name="opcja_pakowania[]" value="koperta">
            <label for="koperta">koperta</label>
            <br>
            <input type="checkbox" id="" name="opcja_pakowania[]" value="folia">
            <label for="folia">folia</label>
            <br>
            <input type="checkbox" id="folia_babelkowa" name="opcja_pakowania[]" value="folia bąbelkowa">
            <label for="folia_babelkowa">folia bąbelkowa</label>
            <br>
            <input type="checkbox" id="karton" name="opcja_pakowania[]" value="karton">
            <label for="karton">karton</label>
            <br>
            <input type="checkbox" id="karton_z_usztywnieniem" name="opcja_pakowania[]" value="karton z usztywnieniem">
            <label for="usztywnieniem">karton z usztywnieniem</label>
            <?php
                if(!$opcje_pakowania){
                    echo "Wybierz opcje pakowania";
                }
            ?>
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
            <?php
                if(!$radjo){
                    echo "Określ przybliżoną wagę paczki";
                }
            ?>
            <br>




            <br>
            <label for="email_kontaktowy">Email kontaktowy <span class="xd">*</span></label>
            <br>
            <input type="text" id="email" name="email" value="<?=$email?>">
            <?php
                if(!$email){
                    echo "Podaj poprawny adres email";
                }
            ?>
            <br>


            <label for="dodatkowe_informacje">Dodatkowe informacje <span class="xd">*</span></label>
            <br>
            <textarea id="name" name="inf" value="<?=$inf?>"></textarea>
            <?php
                if(!$inf){
                    echo "Wiadomość musie mieć conajmniej 15 znaków";
                }
            ?>
            <br>




            <br>            
            <input type="checkbox" id="zgoda" name="zgoda">
            <label for="zgoda">Zgoda na przetwarzanie danych<span class="xd">*</span></label>
            <?php
                if(!$zgoda){
                    echo "Potwierdz swoją zgodę";
                }
            ?>
    <br>
    <br>
    <input type="submit" value="Wyślij">
    <br>
    <br>
    
    </form>
</body>
</html>


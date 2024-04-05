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
        $nazwa = true;
        $opcje_pakowania = true;
        $radjo= true;
        $email= true;
        $inf= true;
        $zgoda= true;

        $nazwa_value = '';
        $opcje_pakowania_value = [];
        $radjo_value= '';
        $email_value= '';
        $inf_value= '';
        $zgoda_value= false;

        $FORMISVALID = true;

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(empty($_POST['nazwa'])){
                $nazwa = false;
                $FORMISVALID=false;
            }else{
                $nazwa_value = $_POST['nazwa'];
            }
            if(empty($_POST['opcja_pakowania'])){
                $opcje_pakowania = false;
                $FORMISVALID=false;
            }else{
                $opcja_pakowania_value = $_POST['opcja_pakowania'];
            }
            if(empty($_POST['radjo'])){
                $radjo = false;
                $FORMISVALID=false;
            }else{
                $radjo_value = $_POST['radjo'];
            }
            if(empty($_POST['email'])){
                $email = false;
                $FORMISVALID=false;
            }else{
                $email_value = $_POST['email'];
            }
            if(empty($_POST['inf'])){
                $inf = false;
                $FORMISVALID=false;
            }else{
                $inf_value = $_POST['inf'];
            }
            if(empty($_POST['zgoda'])){
                $zgoda = false;
                $FORMISVALID=false;
            }else{
                $zgoda_value = $_POST['zgoda'] == "on";
            }
        }

            $FILENAME='formularz.txt';

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($FORMISVALID){
                if(file_exists($FILENAME)){
                    $MYFILE=fopen($FILENAME,'a');
                } 
                else{
                    $MYFILE = fopen($FILENAME,'w');
                }
                $MYDATA = date('Y-m-d H:i:s')."\n".print_r($_POST, true);
                fwrite($MYFILE, $MYDATA);
                fclose($MYFILE);
                $validmessage = 'dane z formularza zostały zapisane do pliku'.$FILENAME;
            }
    }
    ?>
<body>
    <form action="" method="POST">

            <label for="Nazwa_towaru">Nazwa towaru <span class="xd">*</span></label>
            <br>
            <input type="text" id="nazwa" name="nazwa" value="<?=$nazwa_value?>">
            <br>
            <?php
                if(!$nazwa){
                    echo '<span class="xd">Podaj nazwe produktu</span>';
                }
            ?>
            <br>
            
            <br>
            <label for="Wybierz opcje pakowania">Wybierz opcje pakowania:<span class="xd">*</span></label>
            <br>
            <input type="checkbox" id="koperta" name="opcja_pakowania[]" value="koperta" <?php if(in_array("koperta", $opcja_pakowania_value)){echo "checked";} ?>>
            <label for="koperta">koperta</label>
            <br>
            <input type="checkbox" id="folia" name="opcja_pakowania[]" value="folia" <?php if(in_array("folia", $opcja_pakowania_value)){echo "checked";} ?>>
            <label for="folia">folia</label>
            <br>
            <input type="checkbox" id="folia_babelkowa" name="opcja_pakowania[]" value="folia bąbelkowa" <?php if(in_array("folia bąbelkowa", $opcja_pakowania_value)){echo "checked";} ?>>
            <label for="folia_babelkowa">folia bąbelkowa</label>
            <br>
            <input type="checkbox" id="karton" name="opcja_pakowania[]" value="karton" <?php if(in_array("karton", $opcja_pakowania_value)){echo "checked";} ?>>
            <label for="karton">karton</label>
            <br>
            <input type="checkbox" id="karton_z_usztywnieniem" name="opcja_pakowania[]" value="karton z usztywnieniem" <?php if(in_array("karton z usztywnieniem", $opcja_pakowania_value)){echo "checked";} ?>>
            <label for="usztywnieniem">karton z usztywnieniem</label>
            <br>
            <?php
                if(!$opcje_pakowania){
                    echo '<span class="xd">Wybierz opcje pakowania</span>';
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
            <br>
            <?php
                if(!$radjo){
                    echo '<span class="xd">Określ przybliżoną wagę paczki</span>';
                }
            ?>
            <br>




            <br>
            <label for="email_kontaktowy">Email kontaktowy <span class="xd">*</span></label>
            <br>
            <input type="text" id="email" name="email" value="<?=$email_value?>">
            <br>
            <?php
                if(!$email){
                    echo '<span class="xd">Podaj poprawny adres email</span>';
                }
            ?>
            <br>


            <label for="dodatkowe_informacje">Dodatkowe informacje <span class="xd">*</span></label>
            <br>
            <textarea id="name" name="inf"></textarea>
            <br>
            <?php
                if(!$inf){
                    echo '<span class="xd">Wiadomość musie mieć conajmniej 15 znaków</span>';
                }
            ?>
            <br>




            <br>            
            <input type="checkbox" id="zgoda" name="zgoda">
            <label for="zgoda">Zgoda na przetwarzanie danych<span class="xd">*</span></label>
            <br>
            <?php
                if(!$zgoda){
                    echo '<span class="xd">Potwierdz swoją zgodę</span>';
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


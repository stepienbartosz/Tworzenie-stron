<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="trim">usun biale</label>
        <input type="text" name="trim" id="trim"><br>
        <label for="stripslashes">usun \</label>
        <input type="text" name="stripslashes" id="stripslashes"><br>
        <label for="htmlspecialchars">html na encje</label>
        <input type="text" name="htmlspecialchars" id="htmlspecialchars"><br>
        <input type="submit">
    </form>

    <?php 
        if($_SERVER['REQUEST_METHOD']=='POST'){
            var_dump(trim($_POST['trim']));
            var_dump(stripslashes($_POST['stripslashes']));
            var_dump(htmlspecialchars($_POST['htmlspecialchars']));
            
        }

        
    ?>
</body>
</html>
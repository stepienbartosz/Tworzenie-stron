<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .xddd{
            color: red;
            font-style: italic;
        }
        fieldset{
            border: 2px solid black;
        }

    </style>
</head>
<body>
    <form action="", method="post">
        <fieldset>
            <legend>lorem50</legend>
            
            <?php
                
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    echo '<p>Oto wpisany tekst:</p><p class="xddd">'.$_POST["xd"].'</p>';
                }

                else{
                    echo '<textarea name="xd" id="xdd" cols="50" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem aut eaque est aliquid excepturi dolore voluptas soluta error architecto corrupti accusantium, laborum commodi nulla tempore fugiat dignissimos accusamus quam labore harum exercitationem eius illum dolor, possimus natus! Consectetur ex doloremque ut. Eligendi velit animi obcaecati minus sunt nulla nemo impedit!</textarea>';
                    echo '<input type="submit">';
                }
            ?>

            

           

        </fieldset>
    </form>
</body>
</html>








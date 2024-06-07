<h1>Autoryzacja</h1>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if ($_POST['login'] == 'Maciej' && $_POST['haslo'] == 'Boryna')
    {
        echo '<h4 class="success">Udane logowanie</h4>';
        $_SESSION['login_status'] = 'zalogowany';
        $_SESSION['login'] = 'Maciej';
    }
    else
    {
        echo "nieudane logowanie";
    }

        ?>
        <form action="?page=logowanie" method="post">
            <table style="margin: 0 auto">
                <tr>
                    <td><label for="login">Login</label></td>
                    <td><input id="login" name="login" placeholder="login" type="text"
                    value="<?= isset($_POST['login']) ? $_POST['login']: '' ?>"> </td>
                </tr>
                <tr>
                    <td><label for="Haslo">Haslo</label></td>
                    <td><input id="Haslo" name="Haslo" placeholder="Haslo" type="password"></td>
                </tr>
                <tr>
                    <td cospan="2" style="text-align: center;"><input type="submit" value="Zaloguj"></td>
                </tr>
            </table>
 <?php           
}
?>
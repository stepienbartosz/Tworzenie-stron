<h3 style="color: tomato;">Aktualna godzina</h3>
    <p style="color: tomato;"><?=date("H:i:s")?></p>
<h3 style="color: green;">Osiem godzin pozniej</h3>
    <p style="color: green;"><?=date("H:i:s", time()+28800)?></P>
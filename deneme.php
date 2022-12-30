<?php
if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}
?>
<form action="" method="post">
    Name:  <input type="text" name="personal[isim]" /><br />
    Email: <input type="text" name="personal[eposta]" /><br />
    Travel Options: <br />
    <select multiple name="Travel Options">
        <option value="Only">Efes</option>
        <option value="Two People">Tuborg</option>
        <option value="Three or More">Venüs</option>
    </select><br />
    <input type="submit" value="Send!" />
</form>
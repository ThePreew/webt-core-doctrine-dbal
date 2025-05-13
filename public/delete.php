<?php
require_once '../db/config.php';
require_once "../vendor/autoload.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $conn->delete('game_rounds', ['id' => $id]);

    echo "Spielrunde erfolgreich gelöscht!";
}
?>

<form method="post">
    ID der zu löschenden Spielrunde: <input type="text" name="id" required><br>
    <input type="submit" value="Spielrunde löschen">
</form>

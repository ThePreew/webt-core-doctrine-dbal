<?php
require_once '../db/config.php';
require_once "../vendor/autoload.php";

use Doctrine\DBAL\DriverManager;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $player1Name = $_POST['player1_name'];
    $player1Symbol = $_POST['player1_symbol'];
    $player2Name = $_POST['player2_name'];
    $player2Symbol = $_POST['player2_symbol'];
    $datetime = $_POST['datetime'];

    $conn->insert('game_rounds', [
        'player_1_name' => $player1Name,
        'player_1_symbol' => $player1Symbol,
        'player_2_name' => $player2Name,
        'player_2_symbol' => $player2Symbol,
        'round_datetime' => $datetime
    ]);

    echo "Spielrunde erfolgreich hinzugefügt!";
}
?>

<form method="post">
    Spieler 1 Name: <input type="text" name="player1_name" required><br>
    Symbol von Spieler 1: 
    <select name="player1_symbol" required>
        <option value="Rock">Rock</option>
        <option value="Paper">Paper</option>
        <option value="Scissors">Scissors</option>
    </select><br>
    Spieler 2 Name: <input type="text" name="player2_name" required><br>
    Symbol von Spieler 2: 
    <select name="player2_symbol" required>
        <option value="Rock">Rock</option>
        <option value="Paper">Paper</option>
        <option value="Scissors">Scissors</option>
    </select><br>
    Datum und Uhrzeit: <input type="datetime-local" name="datetime" required><br>
    <input type="submit" value="Spielrunde hinzufügen">
</form>

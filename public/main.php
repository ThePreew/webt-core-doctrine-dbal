<?php
require_once '../db/config.php';

$sql = "SELECT * FROM game_rounds";
$statement = $conn->query($sql);

$results = $statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USARPS Championship</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1>USARPS Championship</h1>
            <p class="date">14. Mai 2025</p>
        </div>
    </header>

    <main>
        <section class="game-rounds container">
            <h2>Spielrunden</h2>
            <?php
            if (count($results) > 0) {
                foreach ($results as $row) {
                    echo "<div class='round'>";
                    echo "<p><strong>Spieler 1:</strong> " . $row["player_1_name"] . " - Symbol: " . $row["player_1_symbol"] . "</p>";
                    echo "<p><strong>Spieler 2:</strong> " . $row["player_2_name"] . " - Symbol: " . $row["player_2_symbol"] . "</p>";
                    echo "<p><strong>Datum und Uhrzeit:</strong> " . $row["round_datetime"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>Keine Spielrunden gefunden.</p>";
            }
            ?>
        </section>
    </main>
</body>
</html>

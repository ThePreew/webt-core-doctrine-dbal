CREATE TABLE game_rounds (
    id INT AUTO_INCREMENT PRIMARY KEY,
    player_1_name VARCHAR(100),
    player_1_symbol ENUM('Rock', 'Paper', 'Scissors'),
    player_2_name VARCHAR(100),
    player_2_symbol ENUM('Rock', 'Paper', 'Scissors'),
    round_datetime DATETIME
);

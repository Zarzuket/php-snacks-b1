<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
$teams = [
    [
    "team1" => "Virtus Bologna",
    "team2" => "Olimpia Milano",
    "score1" => rand(1,100),
    "score2" => rand(1,100),
    ],
    [
    "team1" => "Brindisi",
    "team2" => "Trieste",
    "score1" => rand(1,100),
    "score2" => rand(1,100),
    ],
    [
    "team1" => "Dinamo Sassari",
    "team2" => "Universo Treviso",
    "score1" => rand(1,100),
    "score2" => rand(1,100),
    ],
    [
    "team1" => "Reggiana",
    "team2" => "Venezia",
    "score1" => rand(1,100),
    "score2" => rand(1,100),
    ]
];

// echo $teams[0]["team1"] . " vs " . $teams[0]["team2"] . " || " . $score1 . "-" . $score2 ;

for ($i = 0; $i < count($teams); $i++)
    echo  "<strong> <span style='color: green;'>" . $teams[$i]["team1"] . "</span></strong>" .
    " vs " .
    "<span style='color: red;'>" .$teams[$i]["team2"] . "</span>" . 
    " || " .
    "<span style='color: green;'>" . $teams[$i]["score1"] . "</span>" .
    "-" . 
    "<span style='color: red;'>" . $teams[$i]["score2"] . "</span>" .  
    "<br>" ;
?>
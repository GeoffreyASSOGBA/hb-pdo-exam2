<?php

include 'includes/connect.php';


$data = [
    [
        'composer' => 'Joseph-François Garnier',
        'name'     => "Air d'Echo et Narcis",
        'year'     => 1789,
    ],
    [
        'composer' => 'Vincenzo Manfredini',
        'name'     => "La musica trionfante",
        'year'     => 1761,
    ],
    [
        'composer' => 'Antonio Tozzi',
        'name'     => "Il Rinaldo... da rappresentarsi nel teatro dell'eccellentissima Casa Vendramin",
        'year'     => 1775,
    ],
    [
        'composer' => 'Joseph-François Garnier',
        'name'     => "Blaise et Babet ou la suite des trois fermiers",
        'year'     => 1810,
    ],
    [
        'composer' => 'Vincenzo Manfredini',
        'name'     => "La pace degli eroi",
        'year'     => 1762,
    ],
];

// préparer la requête
$sqlMusic = "INSERT INTO music (name, year, composer_id) VALUES (:name, :year, :composer_id)";
$statement = $connection->prepare($sqlMusic);
if ($statement === false) {
    exit("Erreur lors de l'insertion de la donnée :");
}
foreach ($data as $music) {
    $composerName = $music['composer'];
    $sqlComposer = "SELECT id FROM composer WHERE name LIKE '$composerName'";
    // exécuter la requête pour le composer et récupérer le champ id
    $rep = $connection->query($sqlComposer);
    $donnees = $rep->fetch();

    echo $donnees['id'];
    // Utiliser la méthode bindParam pour donner des valeurs aux 3 champs
    $statement->bindParam(':name', $music['name'], PDO::PARAM_STR);
    $statement->bindParam(':year', $music['year'], PDO::PARAM_INT);
    $statement->bindParam(':composer_id', $donnees['id'], PDO::PARAM_INT);
    // exécuter la requête pour la music
    $statement->execute();
}

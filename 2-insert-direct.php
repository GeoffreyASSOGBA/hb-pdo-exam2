<?php

include 'includes/connect.php';

$sql = "INSERT INTO `composer`(`name`, `birth`, `death`, `description`, `country`) VALUES ('Antonio Tozzi', 1736, 1812, 'Antonio Tozzi (né en 1736 à Bologne, en Émilie-Romagne, alors dans les États pontificaux, et mort le 13 janvier 1819 à Madrid) est un compositeur italien de la fin du XVIIIe et du début du XIXe siècle.', 'Italie' )";
$count = $connection->exec($sql);

$sql = "INSERT INTO `composer`(`name`, `birth`, `death`, `description`, `country`) VALUES ('Vincenzo Manfredini', 1737, 1799, 'Vincenzo Manfredini (né le 22 octobre 1737 à Pistoia près de Florence et mort le 16 août 17992 à Saint-Pétersbourg) est un compositeur, théoricien de la musique et claveciniste italien du XVIIIe siècle, et enseigna par ailleurs le clavecin et le chant.', 'Italie' )";
$count = $connection->exec($sql);


$sql = "INSERT INTO `composer`(`name`, `birth`, `death`, `description`, `country`) VALUES ('Joseph-François Garnier', 1755, 1825, 'Joseph-François Garnier, né le 18 juin 1755 à Lauris, Vaucluse, et mort le 31 mars 1825 à Neuilly-sur-Seine, est un hautboïste et compositeur français.', 'France' )";


$countAffected = $connection->exec($sql);

if ($countAffected === false) {
    exit('Erreur lors de l\'insertion des données');
}

var_dump($countAffected);

$data = [
    [
        'name'        => 'Antonio Tozzi',
        'birth'       => 1736,
        'death'       => 1812,
        'description' => 'Antonio Tozzi (né en 1736 à Bologne, en Émilie-Romagne, alors dans les États pontificaux, et mort le 13 janvier 1819 à Madrid) est un compositeur italien de la fin du XVIIIe et du début du XIXe siècle.',
        'country'     => 'Italie',
    ],
    [
        'name'        => 'Vincenzo Manfredini',
        'birth'       => 1737,
        'death'       => 1799,
        'description' => 'Vincenzo Manfredini (né le 22 octobre 1737 à Pistoia près de Florence et mort le 16 août 17992 à Saint-Pétersbourg) est un compositeur, théoricien de la musique et claveciniste italien du XVIIIe siècle, et enseigna par ailleurs le clavecin et le chant.',
        'country'     => 'Italie',
    ],
    [
        'name'        => 'Joseph-François Garnier',
        'birth'       => 1755,
        'death'       => 1825,
        'description' => 'Joseph-François Garnier, né le 18 juin 1755 à Lauris, Vaucluse, et mort le 31 mars 1825 à Neuilly-sur-Seine, est un hautboïste et compositeur français.',
    ],
];

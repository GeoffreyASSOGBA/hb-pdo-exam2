<?php

include 'includes/connect.php';

$data = [];
$sql = "SELECT * FROM composer ORDER BY id ASC";
$results = $connection->query($sql);

?>

<table>
    <tr>
        <th>Nom</th>
        <th>Année de naissance</th>
        <th>Année de décès</th>
        <th>Description</th>
        <th>Pays</th>
    </tr>
    <?php

    foreach ($results->fetchAll(PDO::FETCH_ASSOC) as $data) {
        echo '<tr>
            <td> 
            ' . $data['name'] . ' 
            </td>
            <td>
             ' . $data['birth'] . ' 
            </td>
            <td> 
            ' . $data['death'] . ' 
            </td>
            <td> 
            ' . $data['description'] . ' 
            </td>
            <td> 
            ' . $data['country'] . ' 
            </td>
        </tr>';
    }

    ?>
</table>
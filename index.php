<?php
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];//hotels
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Hotel</title>
    </head>
    <body>
        <h1>PHP Hotel</h1>

        <ul>
            <?php
                foreach ($hotels as $hotel) {
                    echo '<li>';
                        echo $hotel['name'];
                        echo '<ul>';
                            echo "<li> Descrizione: $hotel[description] </li>";
                            $parking = ($hotel['parking']) ? 'si' : 'no';
                            echo "<li>Ha parcheggio: $parking</li>";
                            echo "<li> Voto: $hotel[vote] </li>";
                            echo "<li> Distanza dal centro: $hotel[distance_to_center] </li>";
                        echo '</ul>';
                    echo '</li>';
                }
            ?>
        </ul>
        
    </body>
</html>
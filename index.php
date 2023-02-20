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

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <title>PHP Hotel</title>
    </head>
    <body>

        <header class="py-3 bg-primary text-white">
            <div class="container-lg">
                <h1>PHP Hotel</h1>
            </div>
        </header>

        <main class="py-5">
            <div class="container-lg">
                <div class="row">
                <?php
                    foreach ($hotels as $hotel) {
                        echo '<div class="col-4">';
                            echo '<div class="card mb-5">';
                                echo '<div class="card-header">';
                                    echo "<h4 class=\"card-title\"> $hotel[name] </h4>";
                                echo '</div>';//chiusura card header
                                echo '<div class="card-body">';

                                    echo '<h6 class="m-0 fw-bold"> Descrizione: </h6>';
                                    echo "<p class=\"card-text\">  $hotel[description] </p>";
                                    
                                    $parking = ($hotel['parking']) ? 'si' : 'no';
                                    echo "<p class=\"card-text m-0\">
                                        <span class=\"fw-bold\">
                                            L'hotel offre parcheggio:
                                        </span>    
                                        $parking
                                    </p>";

                                    echo "<p class=\"card-text m-0\">
                                        <span class=\"fw-bold\">
                                                Valutazione: 
                                        </span>
                                        $hotel[vote]
                                    </p>";

                                    echo "<p class=\"card-text m-0\">
                                        <span class=\"fw-bold\">
                                                Distanza dal centro: 
                                        </span>
                                        $hotel[distance_to_center] km
                                    </p>";

                                echo '</div>';//chiusura card body 
                            echo '</div>';//chiusura card
                        echo '</div>';//chiusura col
                    };
                ?>
                </div><!-- CHIUSURA ROW -->
            </div><!-- CHIUSURA CONTAINER -->
        </main>
    </body>
</html>


<!-- echo '<ul>';
    echo "<li> Descrizione: $hotel[description] </li>";
    
    echo "<li>Ha parcheggio: $parking</li>";
    echo "<li> Voto: $hotel[vote] </li>";
    echo "<li> Distanza dal centro: $hotel[distance_to_center] </li>";
echo '</ul>'; -->
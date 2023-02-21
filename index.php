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

    $filteredHotels = $hotels;

    if ($_GET['park'] != '' ) {
        $filteredHotels = array_filter($filteredHotels, function ($hotel) {
            $park = $hotel['parking'] ? 'true' : 'false';
            return ($park == $_GET['park']) ;
        });
    };

    if ($_GET['vote'] != '' ) {
        $filteredHotels = array_filter($filteredHotels, function ($hotel) {
            $intVote = strval($hotel['vote']);
            return ($intVote >= $_GET['vote']);
        });
    };
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

            <section class="pb-5">
                <div class="container-lg">
                    <h3>Filtra la tua ricerca</h3>
                    <form method="get">
                        <div class="mb-3">
                            <label for="park-select" class="form-label">
                                Filtra per parcheggio:
                            </label>
                            <select name="park" id="park-select" class="form-control w-25">
                                <option value="" selected>Seleziona un opzione</option>
                                <option value="true">SI</option>
                                <option value="false">NO</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="vote-select" class="form-label">
                                Filtra per valutazione:
                            </label>
                            <select name="vote" id="vote-select" class="form-control w-25">
                                <option value="" selected>Seleziona un opzione</option>
                                <?php
                                    for ($i = 1; $i <= 5; $i++) {
                                        echo "<option value=\"$i\">$i</option>";
                                    }                                    
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Filtra
                        </button>
                    </form>
                </div><!-- CHIUSURA CONTAINER -->
            </section>
            <div class="container-lg">
                <div class="row">
                <?php foreach ($filteredHotels as $hotel) { ?>
                    <div class="col-4">
                        <div class="card mb-5">
                            <div class="card-header">
                                <h4 class="card-title"> <?php echo $hotel['name'];?></h4>
                            </div><!-- CHIUSURA CARD HEADER -->
                            <div class="card-body">
                                <!-- DESCRIZIONE -->
                                <h6 class="m-0 fw-bold"> Descrizione: </h6>
                                <p class="card-text">
                                    <?php echo $hotel['description'];?>
                                </p>
                                <!-- PARCHEGGIO -->
                                <p class="card-text m-0">
                                    <span class="fw-bold">
                                        L'hotel offre parcheggio:
                                    </span>
                                    <?php    
                                        echo ($hotel['parking']) ? 'si' : 'no';
                                    ?>
                                </p>
                                <!-- VALUTAZIONE -->
                                <p class="card-text m-0">
                                    <span class="fw-bold">
                                        Valutazione: 
                                    </span>
                                    <?php 
                                        echo $hotel['vote'];
                                    ?>
                                </p>
                                <!-- DISTANZA -->
                                <p class="card-text m-0">
                                    <span class="fw-bold">
                                        Distanza dal centro: 
                                    </span>
                                    <?php 
                                        echo $hotel['distance_to_center'].' km'
                                    ?>
                                </p>

                            </div><!-- CHIUSURA CARD BODY --> 
                        </div><!-- CHIUSURA CARD -->
                    </div><!-- CHIUSURA COL -->
                <?php }; ?>
                </div><!-- CHIUSURA ROW -->
            </div><!-- CHIUSURA CONTAINER -->
        </main>
    </body>
</html>
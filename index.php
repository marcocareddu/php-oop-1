<?php
// Import Classes
include __DIR__ . './models/classes.php';

// Import Actors
include __DIR__ . './data/actors.php';

// Import Movies
include __DIR__ . './data/movies.php';

// Import database
include __DIR__ . './data/db.php';

?>



<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<!-- Include Head -->
<?php include __DIR__ . './includes/head.inc'; ?>

<body>
    <div class="container d-flex justify-content-center">
        <div class="mt-3">

            <h1>PHP Movie</h1>
            <div class="pt-3">

                <!-- Display list items from array of objects -->
                <?php foreach ($movies as $data) : ?>

                    <h3 class="mt-4"><?= $data->name ?></h3>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action">Nome: <?= $data->name ?> </li>
                        <li class="list-group-item list-group-item-action">Genere: <?= $data->genre ?> </li>
                        <li class="list-group-item list-group-item-action">Voto: <?= $data->vote ?> </li>
                        <ul>
                            <li class="list-group-item list-group-item-action">Nome Protagonista: <?= $data->actor->getName() ?></li>
                            <li class="list-group-item list-group-item-action">Età Attore: <?= $data->actor->getAge() ?></li>
                        </ul>
                    </ul>

                <?php endforeach ?>


            </div>
        </div>
    </div>
</body>

</html>
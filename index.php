<?php

// Create class Movie

class Movie
{
    // Class properties
    public $name;
    public $genre;
    public $vote;
    public $id;

    // Class Constructor
    function __construct($name, $genre, $vote, $id)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->vote = $vote;
        $this->id = $id;
    }

    // Class methods
    public function getId()
    {
        return $this->id;
    }
}

?>



<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous'>

    <!-- Vue JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css" type="text/css">

    <title>PHP Movie</title>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="mt-3">

            <h1>PHP Movie</h1>
            <div class="pt-3">
            </div>
        </div>
    </div>
</body>

</html>
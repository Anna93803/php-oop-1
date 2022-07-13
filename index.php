<?php

require_once './classi/movie.php';

$movie1 = new Movie("Top Gun", "https://www.cinematographe.it/wp-content/uploads/2022/05/top-gun-2.jpeg","Azione" , 2022);
$movie2 = new Movie("Ciao Alberto", "https://www.cinematographe.it/wp-content/uploads/2021/11/Ciao-Alberto-1.jpg", "Animazione", 2021);
$movie3 = new Movie("Matrix","https://othersouls.it/wp-content/uploads/2022/01/the-matrix-resurrections-review_egpc.jpg","Fantascienza" , 2021);
$movie4 = new Movie("Tolo Tolo", "https://movieplayer.net-cdn.it/t/images/2022/01/09/tolo-tolo-stasera-canale-5_jpg_1280x720_crop_q85.jpg", "Commedia", 2020);
$movie5 = new Movie("Aquaman", "https://pad.mymovies.it/filmclub/2015/11/202/coverlg_home.jpg","Fantasy", 2018);
$movie6 = new Movie("Steve Jobs", "https://www.macitynet.it/wp-content/uploads/2017/10/jobsfoto.jpg", "Biografico" ,2015);

// $movie1->printMovie();
// $movie2->printMovie();

// var_dump($movie1);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body class="bg-danger">
        <div class="container py-5 d-flex justify-content-center">
            <div class="row text-center">
                <h1 class="text-light text-uppercase fw-bold">Movies</h1>
                <div class="col">
                    <div><?php echo $movie1->printMovie() ?></div>
                    <div><?php echo $movie2->printMovie() ?></div>
                </div>
                <div class="col">
                    <div><?php echo $movie3->printMovie() ?></div>
                    <div><?php echo $movie4->printMovie() ?></div>
                </div>
                <div class="col">
                    <div><?php echo $movie5->printMovie() ?></div>
                    <div><?php echo $movie6->printMovie() ?></div>
                </div>
            </div>
        </div>
    </body>
</html>
<!DOCTYPE html>
<?php
$data = array(
    array(
        "title" => "Frieren : Beyond Journey's End",
        "studio" => "MADHOUSE",
        "type" => "TV Series",
        "Score on MyAnimeList" => "9.39",
        "images" => "assets/images/frieren.jpg",
    ),
    array(
        "title" => "Sword Art Online : Alicization",
        "studio" => "A-1 Pictures",
        "type" => "TV Series",
        "Score on MyAnimeList" => "7.57",
        "images" => "assets/images/sao.jpg"
    ),
    array(
        "title" => "Mobile Suit Gundam UC RE:0096",
        "studio" => "Sunrise",
        "type" => "TV Series",
        "Score on MyAnimeList" => "7.64",
        "images" => "assets/images/gundam.jpg",
    ),
    array(
        "title" => "Saenai Kanojo no Sodate-kata",
        "studio" => "A-1 Pictures",
        "type" => "TV Series",
        "Score on MyAnimeList" => "7.48",
        "images" => "assets/images/saekano.jpg",
    ),
);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1" href="welcome.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#" target="_blank">Github</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank">API Docs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container-fluid bg-primary-subtle" style="height: 100vh">

            <h2 class="d-flex justify-content-center pt-4">Product With Array</h2>

            <div class="d-flex justify-content-md-center gap-5 pt-3">
            <?php
            foreach ($data as $row) {
                $images = $row["images"];
                $card_html = '<div class="card" style="width: 20rem; min-height : 410px">';
                $card_html .= '<div class = "overflow-hidden" style="height: 200px">';
                $card_html .= '<img src="' . $images . '" class="card-img-top img-fluid h-100 object-fit-cover" alt="...">';
                $card_html .= '</div>';
                $card_html .=  '<div class="card-body">';
                $card_html .= '<h5 class="card-title">'. $row["title"] .'</h5>';
                $card_html .= '<p class="card-text">'.$row["studio"].'</p>';
                $card_html .= '<a href="#" class="btn btn-primary">MyAnimeList Link</a>';
                $card_html .= '</div>';
                $card_html .= '</div>';

                echo $card_html;
            }
            ?>
            </div>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
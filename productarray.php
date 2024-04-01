<!DOCTYPE html>
<?php
$data = array(
    array(
        "title" => "Frieren : Beyond Journey's End",
        "studio" => "MADHOUSE",
        "type" => "TV Series",
        "mal_score" => "9.39",
        "images" => "assets/images/frieren.jpg",
        "mal_link" => "https://myanimelist.net/anime/52991/Sousou_no_Frieren",
    ),
    array(
        "title" => "Sword Art Online : Alicization",
        "studio" => "A-1 Pictures",
        "type" => "TV Series",
        "mal_score" => "7.57",
        "images" => "assets/images/sao.jpg",
        "mal_link" => "https://myanimelist.net/anime/36474/Sword_Art_Online__Alicization",
    ),
    array(
        "title" => "Mobile Suit Gundam UC RE:0096",
        "studio" => "Sunrise",
        "type" => "TV Series",
        "mal_score" => "7.64",
        "images" => "assets/images/gundam.jpg",
        "mal_link" => "https://myanimelist.net/anime/32792/Kidou_Senshi_Gundam_Unicorn_RE_0096",
    ),
    array(
        "title" => "Saenai Kanojo no Sodate-kata",
        "studio" => "A-1 Pictures",
        "type" => "TV Series",
        "mal_score" => "7.48",
        "images" => "assets/images/saekano.jpg",
        "mal_link" => "https://myanimelist.net/anime/23277/Saenai_Heroine_no_Sodatekata",
    ),
    array(
        "title" => "Fate Stay Night : UBW",
        "studio" => "ufotable",
        "type" => "TV Series",
        "mal_score" => "81.8",
        "images" => "assets/images/ubw.jpg",
        "mal_link" => "https://myanimelist.net/anime/22297/Fate_stay_night__Unlimited_Blade_Works",
    ),
    array(
        "title" => "Fate Apocrypha",
        "studio" => "A-1 Pictures",
        "type" => "TV Series",
        "mal_score" => "7.19",
        "images" => "assets/images/apo.jpg",
        "mal_link" => "https://myanimelist.net/anime/34662/Fate_Apocrypha",
    ),
    array(
        "title" => "Kara No Kyoukai 7: Satsujin Kousatsu",
        "studio" => "ufotable",
        "type" => "Movie",
        "mal_score" => "8.38",
        "images" => "assets/images/kara.jpg",
        "mal_link" => "https://myanimelist.net/anime/5205/Kara_no_Kyoukai_Movie_7__Satsujin_Kousatsu_Go",
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
            <a class="navbar-brand mb-0 h1" href="welcome.php">Back to Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="https://github.com/aldinpramudya/belajar-php.git" target="_blank">Github Repository</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container-fluid">
            <h2 class="d-flex justify-content-center pt-4">Product With Array</h2>
            <div class="d-flex flex-wrap justify-content-md-center gap-5 pt-3">
                <?php
                foreach ($data as $row) {
                    $images = $row["images"];
                    $card_html = '<div class="card d-flex" style="width: 20rem; min-height : 410px">';
                    $card_html .= '<div class = "overflow-hidden" style="height: 200px">';
                    $card_html .= '<img src="' . $images . '" class="card-img-top img-fluid h-100 object-fit-cover" alt="...">';
                    $card_html .= '</div>';
                    $card_html .= '<div class="card-body">';
                    $card_html .= '<ul class="list-group list-group-flush">';
                    $card_html .= '<li class="list-group-item">';
                    $card_html .= '<h5 class="card-title">' . $row["title"] . '</h5>';
                    $card_html .= '</li>';
                    $card_html .= '<li class="list-group-item">';
                    $card_html .= '<h6 class="card-subtitle mb-2 text-body-secondary">' . $row["studio"] . '</h6>';
                    $card_html .= '</li>';
                    $card_html .= '<li class="list-group-item">';
                    $card_html .= '<class="card-text">' . $row["type"] . '';
                    $card_html .= ' rated ' . $row["mal_score"] . ' on MyAnimeList ';
                    $card_html .= '</li>';
                    $card_html .= '</p>';
                    $card_html .= '<a href="' . $row["mal_link"] . '" target="_blank" class="btn btn-primary">MAL Profile</a>';
                    $card_html .= '</ul>';
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
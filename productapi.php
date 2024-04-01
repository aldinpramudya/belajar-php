<!DOCTYPE html>

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://660add56ccda4cbc75dbf4dd.mockapi.io/user',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Accept: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);

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
        <div class="container-fluid" style="height: 100dvh">
            <h2 class="d-flex justify-content-center pt-4">Product With API</h2>
            <div class="d-flex justify-content-center pt-3">
                <a href="https://660add56ccda4cbc75dbf4dd.mockapi.io/user" target="_blank">
                    <button type="button" class="btn btn-outline-primary ">API Documentation</button>
                </a>
            </div>
            <div class="d-flex flex-wrap justify-content-md-center gap-3 pt-3">
                <?php
                foreach (json_decode($response, true) as $key => $value) {
                    $card = '<div class="card" style="max-width: 540px;">';
                    $card .= '<div class="row g-0">';
                    $card .= '<div class="col-md-4">';
                    $card .= '<img src="' . $value["avatar"] . '" class="img-fluid rounded-start" alt="Avatar">';
                    $card .= '</div>';
                    $card .= '<div class="col-md-8">';
                    $card .= '<div class="card-body">';
                    $card .= '<h5 class="card-title">Hello !</h5>';
                    $card .= '<p class="card-text">Nice to meet you !</p>';
                    $card .= '<p class="card-text">My Name is ' . $value['name'] . '</p>';
                    $card .= '</div>';
                    $card .= '</div>';
                    $card .= '</div>';
                    $card .= '</div>';

                    echo $card;
                }
                ?>

            </div>
        </div>
    </main>

    <footer class="bg-body-tertiary text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright:
            <a class="text-body" href="https://github.com/aldinpramudya">riel</a>
        </div>
        <!-- Copyright -->
    </footer>


    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
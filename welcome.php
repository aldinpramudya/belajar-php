<!DOCTYPE html>
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
            <a class="navbar-brand mb-0 h1" href="welcome.php">Tugas 11</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="https://github.com/aldinpramudya/belajar-php.git" target="_blank">Github Repository</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.html">Login Page</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container-fluid bg-primary-subtle" style="height: 100dvh">
            <div class="image-container d-flex justify-content-center pt-5">
                <img src="assets/images/data.png" alt="Logo" class="rounded-circle" width="300" height="300">
            </div>
            <h2 class="d-flex justify-content-center pt-4">Welcome to PHP Product Example</h2>
            <div class="container d-flex justify-content-center pt-4 gap-3">
                <button type="button" class="btn btn-outline-primary" id="productArrayButton">Product With Array</button>
                <button type="button" class="btn btn-outline-primary" id="productApiButton">Product With API</button>
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
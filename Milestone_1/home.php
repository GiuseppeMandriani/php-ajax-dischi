<?php //database
    require_once __DIR__ . '/database.php';
    var_dump($database);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- CSS STYLE -->
    <link rel="stylesheet" href="./css/main.css">
    <title>PHP Dischi</title>
</head>

<body>
    <div class="app">

        <header class="container">
            <!-- Logo -->
            <div class="logo">
                <img src="./img/logo.png" alt="logoSpotify">
                <h2>Dischi del Mese</h>
            </div>
        </header>

        <main>

            <section class="container">
                <div class="row">
                    <div class="card">

                        <!-- Card -->
                        <div class="card-content">
                            <div class="card-img">
                                <img src="" alt="">
                            </div>
                            <div class="content-details">
                            </div>
                        </div>

                    </div>


                </div>

            </section>

        </main>
    </div>

</body>

</html>
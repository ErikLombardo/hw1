<!DOCTYPE html>
<html>
<head>
    <title> Gnomo Muscoloso, allenatori </title>
    <link rel="stylesheet" href="mhw3.css">
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Permanent+Marker&family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="header.css">
    <?php include_once('autoload.php') ?>
    <script src="mhw3.js" defer></script>
    <script src="login.js" defer></script>
    <link rel="stylesheet" href="login.css">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
</head>

<body>
    <header>

        <div id="logo">
            <img src="immagini/logo gnomo.png" />
        </div>

        <span id="titolo">
            Muscolandia
        </span>


        <div id="container_barra">

            <a href="index.php" class="elementi_barra">
                Home
            </a>
            <a href="mhw2.php" class="elementi_barra">
                Allenatori
            </a>
            <a href="mhw3.php" class="elementi_barra">
                Esercizi
            </a>
            <a href="" class="elementi_barra">
                Consigli
            </a>
        </div>
        <div id="container_barra_cell">
            <div>
                <a href="index.php">
                    <img src="immagini/collegamenti/home.png">
                </a>
                <a href="mhw2.php">
                    <img src="immagini/collegamenti/coach.png">
                </a>
            </div>
            <div>
                <a href="mhw3.php">
                    <img src="immagini/collegamenti/esercizi.png">
                </a>
                <a href="">
                    <img src="immagini/collegamenti/domande.png">
                </a>
            </div>
        </div>

        <div id="container_accesso">


        </div>

    </header>
    <div class="spaziointro"></div>
    <article>
        <div class="centra">

            <div class="bord" id="scegli">
                <span id="choose"> scegli il tuo muscolo target! </span>
                <img src="immagini/dumbell.png">
                <input type="image" src="immagini/freccia.png">

                <div class="hidden" id="target">
                    <span class="bodypart" data-id='back'> schiena </span>
                    <span class="bodypart" data-id='chest'> petto</span>
                    <span class="bodypart" data-id='lower%20arms'> avambracci</span>
                    <span class="bodypart" data-id='lower%20legs'> polpacci</span>
                    <span class="bodypart" data-id='shoulders'> spalle</span>
                    <span class="bodypart" data-id='upper%20arms'> braccia</span>
                    <span class="bodypart" data-id='upper%20legs'> gambe</span>
                    <span class="bodypart" data-id='cardio'> cardio</span>
                </div>
            </div>

        </div>
        <div class="flex-container-esercizi">

        </div>



        <footer>
            <div id="info_allenatori">
                <span class="allenatore"> BLA BLA BLA </span>
                <span class="cellulare">  BLA BLA BLA</span> <br>
                <span class="allenatore"> BLA BLA BLA</span>
                <span class="cellulare"> BLA BLA BLA</span> <br>
            </div>
        </footer>
    </article>
</body>
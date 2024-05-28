<!DOCTYPE html>

<html>
<head>
    <title> Gnomo Muscoloso, allenatori </title>
    <link rel="stylesheet" href="mhw2.css">
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Permanent+Marker&family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="header.css">
    <?php include_once('autoload.php') ?>
    <script src="mhw2.js" defer></script>
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
          <a href="index.php" >
                <img src="immagini/collegamenti/home.png">
            </a>
            <a href="mhw2.php" >
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

            <navbar id="border">
                <img  src="immagini/dumbell.png">
                <form method="get" name="Ricerca" >
                <input type="text" name="WhatToSearch" placeholder="Inserisci il nome o la città dell'allenatore da cercare"> 
                </form>
            </navbar>
            <div id="aggiungi">   
            </div>
        </div>
        <div class="modal-view hidden" data-id="creazione">
            <section class="nogrow">

                <div class="NewAllenatore">

                    <form method="post" name="NuovoAllenatore" enctype="multipart/form-data">
                        <div class="immaginedacaricare">
                            inserisci il logo o l'immagine dell'allenatore <input type="file" name="logo" id="logo_img" accept=".png"> </br > </br> </br> <span id="info">il file deve essere di 200x200, altrimenti sara' ridimensionato.</span>
                        </div>
                        <input type="text" placeholder="inserisci il nome dell'allenatore" class="nomeallenatore intestazione" name="nomeallenatore">   <button class="contatta"> Contatta </button>
                        <input type="text" placeholder="inserisci le discipline trattate dell'allenatore" class="disciplineallenatore discipline" name="discipline">
                        <textarea placeholder="inserisci la descrizione" class="descrizione" name="descrizione"> </textarea>

                        <div class="tariffe">
                            <span class="cadenza"> trimestre:       </span><input type="text" placeholder="prezzo" class="tariffa" name="trimestre"> </br ></br >
                            <span class="cadenza">semestre:     </span> <input type="text" placeholder="prezzo" class="tariffa" name="semestre"></br ></br >
                            <span class="cadenza"> annuale:     </span> <input type="text" placeholder="prezzo" class="tariffa" name="annuale"></br >

                        </div>

                        <div class="info">
                            <div>
                                <span> Email: <input type="text" placeholder="Es. Farlocco@gmail.com" id="email" name="email"> </br></span>
                                <span>Cellulare:<input type="text" placeholder="Es. 3285894756" id="cellulare" name="cellulare"></br></span>
                                <span> Sede: <input type="text" placeholder="Es. Via dei polli 18, Catanzaro, Calabria" id="sede" name="sede"> </br></span>
                                <textarea placeholder="altre informazioni utili" class="other_info" name="info"></textarea>
                            </div>
                        </div>
                        <div id="submit"><input type="image" id="enter" src="immagini/submit.png"></div>
                    </form>

                    <div id="delete">  <input type="image" id="remove" src="immagini/x.png"></div>
                    <div id="no_values" class="hidden"> <span id="alert">Inserisci tutti i dati!</span> </div>
                </div>

            </section>
        </div>
        <section>

            <div class="NewAllenatore withspace">
                <img src="immagini/white gnomo.png">
                <div class="intestazione"> <span class="nomeallenatore">Gnomo Muscoloso</span>  </div> <button class="contatta"> Contatta </button> <button class="contattacell"> Contatta </button>
                <div class="discipline"> <span class="disciplineallenatore">Bodybuilding, Streetlifting, Powerlifting </span></div>
                <div class="descrizione">Sono Coltivo e le mucche mi fanno paura </br> </div>
                <div class="tariffe">
                    <span class="cadenza"> trimestre:       </span><span class="tariffa"> 20 mucche  </span></br ></br >
                    <span class="cadenza">semestre:     </span> <span class="tariffa">  60 cammelli </span></br ></br >
                    <span class="cadenza"> annuale:     </span>  <span class="tariffa"> 2 unicorni </span></br >
                </div>
                <div class="info hidden">
                    <div>
                        <span> Email: Cipolloto23@istrice.coda </span></br>
                        <span>Cellulare: 0398712578</span></br >
                        <span> Sede: Panca piana da gara </span></br>
                        <div class="other_info">
                            mi alleno da 7 anni, tuttavia ho fatto schifo i primi 4.

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section data-id="contenuto" id="nospace">
            </section>
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
</html>
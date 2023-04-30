<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PRATICANDO 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <?php
     $cond = filter_input(INPUT_GET, "cond", FILTER_SANITIZE_SPECIAL_CHARS);

        if($cond == 0){
          echo'<h1 class="border-bottom p-3">Praticando 2 - Animais:</h1>
          <div class="container-fluid">
              <div class="row">
                  <div class="col-3">
                      <a href="animais.php?cond=1">
                          <img src="img/arroba-768x576.jpg" class="img-thumbnail">
                      </a>
                    </div>
                  <div class="col-3">
                      <a href="animais.php?cond=2">
                          <img src="img/capivara-119654188.jpg" class="img-thumbnail">
                      </a>
                  </div>    
                  <div class="col-3">
                      <a href="animais.php?cond=3">
                          <img src="img/cavalo.webp" class="img-thumbnail">
                      </a>
                  </div>
                  <div class="col-3">
                      <a href="animais.php?cond=4">
                          <img src="img/pragas_5_66_1538744895.jpg" class="img-thumbnail">
                      </a>
                  </div>
                </div>
          </div>';
        } elseif ($cond == 1) {
          echo'<h1 class="border-bottom p-3">Praticando 2 - Animais:</h1>
          <p>Você escolher o <b>boi</b>.</p>
          <p>Gado-bovino-doméstico é uma espécie de bovino do gênero Bos e da ordem Artiodactyla. É um mamífero ungulado e apresenta dois dígitos em cada membro.</p>
          <div class="container">
          <img src="img/arroba-768x576.jpg">
          </div>
          <a href="animais.php?cond=0">Voltar</a>';
        } elseif ($cond == 2) {
          echo'<h1 class="border-bottom p-3">Praticando 2 - Animais:</h1>
          <p>Você escolher a <b>capivara</b>.</p>
          <p>A capivara ou capincho é uma espécie de mamífero roedor da família Caviidae e subfamília Hydrochoerinae</p>
          <div class="container">
          <img src="img/capivara-119654188.jpg" class="img-thumbnail">
          </div>
          <a href="animais.php?cond=0">Voltar</a>';
        } elseif ($cond == 3) {
          echo'<h1 class="border-bottom p-3">Praticando 2 - Animais:</h1>
          <p>Você escolher o <b>cavalo</b>.</p>
          <p>O cavalo é uma das duas subespécies existentes de Equus ferus. É um mamífero perissodáctilo pertencente à família taxonômica Equidae</p>
          <div class="container">
          <img src="img/cavalo.webp">
          </div>
          <a href="animais.php?cond=0">Voltar</a>';
        } elseif($cond == 4) {
          echo'<h1 class="border-bottom p-3">Praticando 2 - Animais:</h1>
          <p>Você escolher o <b>rato</b>.</p>
          <p>Rato é uma designação comum para diversos pequenos mamíferos pertencentes à ordem dos roedores</p>
          <div class="container">
          <img src="img/pragas_5_66_1538744895.jpg">
          </div>
          <a href="animais.php?cond=0">Voltar</a>';
          } 
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
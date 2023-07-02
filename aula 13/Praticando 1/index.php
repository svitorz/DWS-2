<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<style>
.color-verde{
    color: green;
    padding: 10px;
}
.color-vermelho{
    color: red;
    padding: 10px;
}

.verde-clicado {
    background-color: green;
    color:white;
    padding: 10px;
}

.vermelho-clicado {
    background-color: red;
    color:white;
    padding: 10px;
}
.azul-clicado {
    background-color: blue;
    color:white;
    padding: 10px;
}
</style>

  </head>
  <body>
    <?php 
    $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);
    ?> 

    <h1 class="text-center border-bottom py-4">Praticando 1 - Revisão:</h1>
    <div class="d-flex justify-content-center align-items-center">
    <?php    
    if(isset ($cor) && empty($cor)|| $cor == 0){
        echo "<a href='index.php?cor=1' class='color-verde display-1 m-5'>Verde</a>
        <a href='index.php?cor=2' class='color-vermelho display-1 m-5'>Vermelho</a>
        <a href='index.php?cor=3' class='display-1 m-5'>Azul</a>";
    } else if($cor == 1){
        echo "<a href='index.ph?cor=1' class='verde-clicado display-1 m-5'>Verde</a>
        <a href='index.php?cor=2' class='color-vermelho display-1 m-5'>Vermelho</a>
        <a href='index.php?cor=3' class='display-1 m-5'>Azul</a>";
    } else if($cor == 2){
        echo "<a href='index.php?cor=1' class='color-verde display-1 m-5'>Verde</a>
        <a href='index.php?cor=2' class='vermelho-clicado display-1 m-5'>Vermelho</a>
        <a href='index.php?cor=3' class='display-1 m-5'>Azul</a>";
    } else if($cor == 3){
        echo "<a href='index.php?cor=1' class='color-verde display-1 m-5'>Verde</a>
        <a href='index.php?cor=2' class='color-vermelho display-1 m-5'>Vermelho</a>
        <a href='index.php?cor=3' class='azul-clicado display-1 m-5'>Azul</a>";
    }
    ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
<?php
$cor = filter_input(INPUT_GET, 'cor', FILTER_SANITIZE_SPECIAL_CHARS);
$paragrafo = filter_input(INPUT_GET, 'paragrafo', FILTER_SANITIZE_SPECIAL_CHARS);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prova bimestral</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <style>
    .vermelho {
        background-color: coral;
        color: red;
    }
    .azul {
        background-color: lightblue;
        color: blue;
    }
    .verde {
        background-color: lightgreen;
        color: green;
    }
  </style>
<?php 
if($cor==1){
    echo '<body class="vermelho">';
}elseif($cor==2){
    echo "<body class='verde'>";
}elseif($cor==3){
    echo "<body class='azul'>";
}
?>
  <div class='container-fluid'>
  <a href='index.php?paragrafo=0&cor=0' class='display-3 streched-link float-end text-center py-5'>Limpar</a>
  <h1 class='text-center border-bottom py-5'>Praticando 2</h1>
  
  
  <h2>Perfil de cores:</h2>
  <a href='index.php?cor=1&paragrafo=<?=$paragrafo?>' class='display-4 px-4'>Vermelho</a>
  <a href='index.php?cor=2&paragrafo=<?=$paragrafo?>' class='display-4 px-4'>Verde</a>
  <a href='index.php?cor=3&paragrafo=<?=$paragrafo?>' class='display-4 px-4'>Azul</a>
  
  <h3 class='border-bottom'> Número de parágrafos: </h3>
  <a href='index.php?paragrafo=1&cor=<?=$cor?>' class='streched-link display-4 px-4'>#1</a>
  <a href='index.php?paragrafo=2&cor=<?=$cor?>' class='streched-link display-4 px-4'>#2</a>
  <a href='index.php?paragrafo=3&cor=<?=$cor?>' class='streched-link display-4 px-4'>#3</a>
  <a href='index.php?paragrafo=12&cor=<?=$cor?>' class='streched-link display-4 px-4'>#12</a>
  <a href='index.php?paragrafo=32&cor=<?=$cor?>' class='streched-link display-4 px-4'>#32</a>
    <?php
     for($i=$paragrafo; $i>=1; $i--){
        echo "<p>Lorem ipsun $i</p>";
    }
    include "../pages/menu.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>


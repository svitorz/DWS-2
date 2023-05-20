<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
</head>

<body>
    <h1 class="border-bottom p-3">Exercício 4 - Números primos:</h1>
    <div class="container-fluid border-bottom py-2">
        <div class="row">
            <p class="col-2 display-5"><a href="index.php?num=1" class="link-underline-primary">1</a></p>
            <p class="col-2 display-5"><a href="index.php?num=2" class="link-underline-primary">2</a></p>
            <p class="col-2 display-5"><a href="index.php?num=5" class="link-underline-primary">5</a></p>
            <p class="col-2 display-5"><a href="index.php?num=11" class="link-underline-primary">11</a></p>
            <p class="col-2 display-5"><a href="index.php?num=23" class="link-underline-primary">23</a></p>
            <p class="col-2 display-5"><a href="index.php?num=32" class="link-underline-primary">32</a></p>
        </div>
    </div>
    <div class="container-fluid">
        <?php
        $num = filter_input(INPUT_GET, "num", FILTER_SANITIZE_SPECIAL_CHARS);
        // assume o número como primo, evitando um else.
        $boolean = true;
        
        if($num <= 1){
            //evitando números negativos e o proprio 1 que nao é primo
            $boolean = false;
        }elseif($num == 2){
            // especificando o número dois pois ele nao se encaixaria no 'for'
            $boolean = true;
        }else{
            for($i=2; $i<=$num/2; $i++){
                //num foi dividido por dois pq nenhum número pode ser dividido por um número maior que a sua metade e resultando em 0 
                if($num%$i==0){
                    $boolean = false;
                    break;
                    // break necessario pq se ele continuar alguma hora ele ia assumir o valor true incorretamente
                }
            }
        }

        // usar  os echos dentro do for fariam que eles fossem impressos varias vezes devido ao for
        if($boolean == true){
            echo"O número $num é primo";
        }elseif($boolean == false){
            echo"O número $num não é primo";
        }

        ?>
    </div>
    <script src="../../bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
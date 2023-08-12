<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
</head>
    <style>
        .azul {
            color: blue;
        }
        .vermelho {
            color: red;
        }
        .verde {
            color: green;
        }
    </style>
<body>
    <?php
     $texto = filter_input(INPUT_GET, "texto", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>
    <h1 class="text-center p-1 border-bottom">Praticando 1 - Funções Built-in e Arrays:</h1>
    <form action="principal.php" method="get">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="input-group border-right">
                    <label for="texto" class="input-group-text">Texto:</label>
                    <textarea name="texto" id="texto" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="input-group p-1">
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
                </div>
            </div>
    </form>
            <div class="col-6"> 
                <?php
                $dia = date('d/m/y');
                $hora = date('h:i:s');
                $findme = "web";
                $teste = stripos($texto, $findme);
                $pos = strlen($texto);
                // Reorganizando o texto 
                $antiga = array("azul", "vermelho", "verde");
                $nova   = array("<span class='azul'>azul</span>", "<span class='vermelho'>vermelho</span>", "<span class='verde'>verde</span>");
                $novafrase = str_replace($antiga, $nova, $texto);
                //Criação de arquivo txt após cada inserção do usuário
                $fp = fopen('data.txt', 'a');
                fwrite($fp, 'Texto: '. PHP_EOL);
                fwrite($fp, $texto . PHP_EOL);
                fwrite($fp, 'Hoje é ' . $dia . ' e agora são ' . $hora . PHP_EOL);
                fwrite($fp, '-----------------------------' . PHP_EOL);
                fclose($fp);
            
                  if(isset ($texto) && !empty($texto)){
                      echo "<p class='float-end'> Hoje é <b>$dia</b> e agora são <b> $hora </b>!</p> <br>";
                      echo "<b>O texto digitado em  foi:</b> <br> $novafrase <br>";
                      $texto = strtoupper($texto);
                      echo "<b>O texto digitado em  foi:</b> <br> $texto <br>";
                      echo '<b>Há a palavra "web" neste texto?</b> <br>';
                if ($teste === false){
                    echo "NÃO";
                } elseif($teste !== false) {
                    echo "SIM";
                }
                echo "<br><b> O texto informado tem </b> <br>";
                echo "$pos caracteres <br>";
                    }   
                ?>
            </div>
        </div>
    </div>
</body>
</html>
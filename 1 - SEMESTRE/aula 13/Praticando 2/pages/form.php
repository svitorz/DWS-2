<?php include_once 'header.php'; ?>
    <form action="destino.php" method="POST">
        <div class="form-control">
            <div class="input-group">
                <label for="texto" class="input-group-text">Texto:</label>
                    <input type="text" name="texto" id="texto" class=" form-control">
                 <label for="qtd" class="input-group-text">Quantidade:</label>
                    <input type="number" min="1" name="qtd" id="qtd" class="form-control">
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-success m-3">Enviar</button>
                <button type="reset" class="btn btn-warning m-3 text-white">Limpar</button>
        </div>
    </form>
<?php include_once 'footer.php'; ?>    
<?php
$titulo_pagina = "Listagem dos itens inseridos";
require_once 'header.php';
?>

<table class="table table-striped table-hover">
    <thead>
        <tr>
          <th scope="col" style="width: 5%;">ID</th>
          <th scope="col" style="width: 15%;">Nome do Produto</th>
          <th scope="col" style="width: 25%;">Descrição</th>
          <th scope="col" style="width: 15%;">Link da imagem do produto</th>
          <th scope="col" style="width:20%;"></th><th scope="col" style="width:20%;"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea a fuga, aspernatur repellendus pariatur provident totam rerum, nemo inventore fugit incidunt molestiae nesciunt natus tenetur? Eveniet doloremque ab hic velit?</td>
          <td>
            <a href="">
              link
            </a>
          </td>
          <td>
            <a href="#" class=" btn btn-sm btn-danger">
              <span data-feather="trash-2"></span>
                Excluir 
            </a>
          </td>
          <td>
            <a href="#" class="btn btn-sm btn-primary">
                <span data-feather="edit"></span>
                Editar
            </a>
          </td>
        </tr>
    </tbody>
</table>

<?php
require_once 'footer.php';
?>            
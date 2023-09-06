<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/LivroController.php";
?>

<main>
<main class="container mt-3 mb-3">
    <h1>Lista de Livros</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Número de Páginas</th>
                <th>Preço</th>
                <th>Ano de Publicação</th>
                <th>ISBN</th>
                <th style="width: 200px;">Ação</th>
            </tr>
        </thead>
        <tbody>

        <?php

            $livroController = new LivroController();

            $livros = $livroController->listarLivro();
           // var_dump($livros);
           foreach($livros as $livro):

        ?>
            <tr>
                <td><?=$livro->id_Livro ?></td>
                <td><?=$livro->titulo?></td>
                <td><?=$livro->autor ?></td>
                <td><?=$livro->numero_pagina ?></td>
                <td><?=$livro->preco?></td>
                <td><?=$livro->ano_publicacao?></td>
                <td><?=$livro->isbn?></td>
                <td>
                    <a href="#" class="btn btn-primary">Editar</a>
                    
                    <a href="#" class="btn btn-danger">excluir</a>
                </td>
            </tr>

        <?php endforeach; ?>
        </tbody>
    </table>

  </main>

</main>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";?>
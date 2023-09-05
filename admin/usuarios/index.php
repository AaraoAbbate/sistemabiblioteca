<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
  require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/UsuarioController.php";

?>


  <main class="container mt-3 mb-3">
    <h1>Lista de Usuarios</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Perfil</th>
                <th style="width: 200px;">Ação</th>
            </tr>
        </thead>
        <tbody>

        <?php

            $usuarioController = new UsuarioController();

            $usuarios = $usuarioController->listarUsuario();

           // var_dump($usuarios);

           foreach($usuarios as $user):

        ?>
            <tr>
                <td><?=$user->id_usuario ?></td>
                <td><?=$user->nome ?></td>
                <td><?=$user->email ?></td>
                <td><?=$user->perfil ?></td>
               
                <td>
                    <a href="#" class="btn btn-primary">Editar</a>
                    
                    <a href="#" class="btn btn-danger">excluir</a>
                </td>
            </tr>

        <?php endforeach; ?>
        </tbody>
    </table>

  </main>

<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";
?>
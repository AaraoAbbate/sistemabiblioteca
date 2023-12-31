<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
  require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/AlunoController.php"

?>

  <main class="container mt-3 mb-3">
    <h1>Lista de Alunos</h1>

    <table class="table table-striped">
          <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>Data Nascimento</th>
                <th style="width: 200px;">Ação</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $alunoController = new AlunoController();

              $alunos = $alunoController->listarAluno();

              foreach($alunos as $user):


            ?>

            <tr>
              <td><?=$user->id_aluno ?></td>
              <td><?=$user->nome ?></td>
              <td><?=$user->cpf ?></td>
              <td><?=$user->email ?></td>
              <td><?=$user->telefone ?></td>
              <td><?=$user->celular ?></td>
              <td><?=$user->data_nascimento ?></td>

              <td>
                <a href="#" class="btn btn-primary">Editar</a>

                <a href="#" class="btn btn-danger">Excluir</a>

              </td>
            </tr>
            
            <?php endforeach; ?>

          </tbody>
    </table>
  </main>

<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";
?>
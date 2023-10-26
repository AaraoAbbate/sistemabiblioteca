<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";

  require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/LivroController.php";

  $livroController = new livroController();

  $livros = $livroController->editarLivro();
?>


  <main class="container mt-3 mb-3">
    <h1>Editar Usuario</h1>

    <form action="editar.php?id_livro=<?=$livros->id_livro?>" method="post" class="row g-3">
        <div class="col-md-12">
            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required value="<?=$livros->titulo?>">
        </div>

        <div class="col-md-6">
            <label for="autor" class="form-label">Autor</label>
            <input type="autor" name="autor" id="autor" class="form-control" required value="<?=$livros->autor?>">
        </div>

        <div class="col-md-6">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control">
            <p class="text-secondary">Caso queira manter a senha, deixe o campo em branco</p>
        </div>

        <div class="col-md-8">
        <label for="perfil" class="form-label">Perfil</label>
        <select name="perfil" class="form-select" id="perfil" required>
            <option value="perfil">Selecione o perfil</option>
            <option value="usuario" <?=($usuario->perfil == "usuario")?"selected" : ""; ?>>Usuario</option>
            <option value="administrador"<?=($usuario->perfil == "administrador")?"selected" : "";?>>Administrador</option>
        </select>
      
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </div>


    </form>
  </main>

<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";
?>
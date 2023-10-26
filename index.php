<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Biblioteca</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <header id="cabecalho" class="container">
        <div id="logotipo">
           <h1> <img src="assets/img/logotipo.png" alt="BookMeNow"></h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Categorias</a></li>
                <li><a href="#">Sobre Nós</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
        <div id="botaoTopo">
            <a href="#">Login</a>
            <a href="#">registrar</a>
        </div>

    </header>

    <div id="banner">
        <div class="container">
            <h2>Explorando mundos ideais</h2>
            <p>Descubra os tesouros de conhecimentos e Imaginação em nossa biblioteca</p>

            <div id="formProcurar">

                <form action="buscar.php" method="get">
                <i class="fa-solid fa-magnifying-glass"></i>

                <input type="search" name="q" placeholder="O que você está procurando ?"> 

                <button type="submit">Procurar</button>

                </form>
               
            </div>
        </div>
    </div>

    <main class="container">
        <section id="livrosPopulares">
            <div class="bloco-titulo">
                <div class="titulo">
                    <h2>Livros Populares</h2>

                    <a href="#">Ver todos</a>
                </div>

                    <p>Descubra nossos livros mais populares</p>
            </div>

            <div class="lista-livros">
                <div class="card-livro">
                    <img src="assets/img/livro-css.png" alt="CSS">
                    <h3>CSS Grid layout: Criando layouts profissionais</h3>
                </div>
            </div>

            
            <div class="card-livro">
                <img src="assets/img/livro-html.png" alt="Html e CSS">
                <h3>HTML e CSS Grid: Guia Prático</h3>
            </div>
            

            <div class="lista-livros">
                <div class="card-livro">
                    <img src="assets/img/livro-css.png" alt="CSS">
                    <h3>CSS Grid layout: Criando layouts profissionais</h3>
                </div>
            </div>

            
            <div class="card-livro">
                <img src="assets/img/livro-html.png" alt="Html e CSS">
                <h3>HTML e CSS Grid: Guia Prático</h3>
            </div>
            

            <div class="lista-livros">
                <div class="card-livro">
                    <img src="assets/img/livro-css.png" alt="CSS">
                    <h3>CSS Grid layout: Criando layouts profissionais</h3>
                </div>
            </div>

            
            <div class="card-livro">
                <img src="assets/img/livro-html.png" alt="Html e CSS">
                <h3>HTML e CSS Grid: Guia Prático</h3>
            </div>
            

            <div class="lista-livros">
                <div class="card-livro">
                    <img src="assets/img/livro-css.png" alt="CSS">
                    <h3>CSS Grid layout: Criando layouts profissionais</h3>
                </div>
            </div>

            
            <div class="card-livro">
                <img src="assets/img/livro-html.png" alt="Html e CSS">
                <h3>HTML e CSS Grid: Guia Prático</h3>
            </div>
            

        </section>
    </main>

    <footer id="rodape">
        <div class="container">
            <div class="bloco-rodape">
                <h2>BookMeNow</h2>
                <ul>
                    <li><a href="#">Sobre nós</a></li>
                    <li><a href="#">Contatos</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Política de privacidade</a></li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="bloco-rodape">
                <h2>Contatos</h2>
                <ul>
                    <li><a href="#"></a>Paraiba, 125</li>
                    <li><a href="#"></a>(14) 9999-9999</li>
                    <li><a href="#"></a>contato@bookmenow.com.br</li>
                    
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="bloco-rodape">
                <h2>Redes Sociais</h2>
                <ul>
                    <li><a href="#"></a>Facebook</li>
                    <li><a href="#"></a>Instagram</li>
                    
                </ul>
            </div>
        </div>

        <div id="copyright">
            &copy; 2023 - Todos os direitos são reservados - Desenvolvido por Aarão
        </div>
    </footer>
        
    <script src="assets/js/main.js"></script>
    
</body>
</html>
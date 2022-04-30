<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Plataforma Web de cursos">
    <link rel="shortcut icon" href="img/usCodersIcon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Us Coders | Home</title>

    <style>
        /* fonte do site*/
        @import url('https://fonts.googleapis.com/css2?family=Sarala&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            color: rgb(61, 3, 61);
            font-family: 'sarala';
        }

        body {
            font-size: 100%;
            background: linear-gradient(68.15deg, rgb(61, 3, 61), rgb(9, 9, 126));
            display: flex;
            flex-direction: column;
            width: 100vw;
            height: 100vh;
        }

        header {
            align-self: flex-start;
            margin: 0;
            padding: 0;
            top: 0;
            position: fixed;
            width: 100%;
            height: 100%;
        }

        .cabecalho-imagem {
            height: 80%;
            border-radius: 9px;
            align-items: left;
        }

        .cabecalho-navegacao {
            display: flex;
            gap: 100px;
            font-weight: 75px;
            font-size: 20px;
        }

        .cabecalho {
            background-color: whitesmoke;
            align-items: center;
            display: flex;
            justify-content: start;
            flex-direction: row;
            padding: 15px;
            width: 100vw;
            height: 15vh;
        }

        /* Início da estilização do MENU RESPONSIVO classe: topnav */
        /* Remove as margens, define tamanho do menu para 100%, e adiciona uma cor de fundo */
        ul.topnav {
            background-color: whitesmoke;
            position: absolute;
            right: 0;
            top: 0;
            line-height: 4em;
            width: 65vw;
            padding: 15px;
            height: 15vh;
            display: flex;
            align-items: center;
            align-content: flex-end;
            justify-content: flex-end;
            /*align-content:flex-end;
        align-items: center;
        justify-content: space-around;*/
        }

        /* Coloca os itens da lista do Menu lado a lado, e flutua os itens para a esquerda */
        ul.topnav li {
            display: inline-block;
            margin-left: 0.5em;
            font-size: 0.9em;
            float: left;
        }

        /* Estilo dos links dentro da lista */
        ul.topnav li a {
            display: block;
            color: dodgerblue;
            text-decoration: none;
            height: 3em;
            line-height: 3em;
            padding: 0 0.3em 0 0.3em;
            outline: 0;
        }

        /* Altera a cor do link quando passa o mouse em cima*/
        ul.topnav li a:hover {
            color: dodgerblue;
        }

        /* Esconde os itens da lista quando a resolução da tela for pequena */
        ul.topnav li.icon {
            display: none;

        }

        /* Quando a tela é menor do que 680 pixels de largura, ocultar todos os itens da lista. 
    Mostra o item da lista que contém o link para abrir e fechar a nav superior (li.icon) */
        @media screen and (max-width:680px) {
            ul.topnav li {
                display: none;
            }

            ul.topnav li.icon {
                float: right;
                /*O ícone será exibido ao lado direito*/
                display: inline-block;
            }
        }

        /*A classe responsiva é adicionada à ul superior com o JavaScript quando o usuário clica no ícone. 
    Esta classe faz com que os itens principais do menu fiquem ok em telas menores */
        @media screen and (max-width:680px) {
            ul.topnav.responsive {
                position: absolute;
                background: rgba(0, 0, 0, 0.95);
                /*Fundo cinza*/
                height: auto;
                padding: 5px;
                padding-top: 15px;
                padding-bottom: 10px;
                line-height: 5px;
                width: 100%;
                align-content: flex-end;
                align-items: center;
                justify-content: space-around;
            }

            ul.topnav.responsive li.icon {
                align-items: right;
                position: relative;
                right: 0;
                top: 0;
            }

            ul.topnav.responsive li {
                text-align: center;
                float: none;
                padding: 0;
                display: inline;
            }

            ul.topnav.responsive li a {
                display: block;
                padding: 0;
                line-height: 30px;
                text-align: center;
            }
        }

        /*FIM DO MENU RESPONSIVO*/

        main {}

        .conteudo {
            background-color: whitesmoke;
            display: flex;
            border-radius: 20px;
            flex-direction: column;
            justify-content: center;
        }

        .conteudo-box {
            overflow: auto;
            border-radius: 20px;
            padding: 15px;
            background-color: whitesmoke;
            position: fixed;
            width: 98vw;
            height: 60vh;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        footer {
            align-self: flex-end;
            margin: 0;
            padding: 0;
            bottom: 0;
            position: fixed;
            width: 100%;
            height: 100%;
        }

        .rodape {
            background-color: whitesmoke;
            align-items: center;
            display: flex;
            justify-content: space-around;
            flex-direction: row;
            position: fixed;
            flex-direction: row;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100vw;
            height: 15vh;
            padding: 15px;
        }

        /*CSS para diminuir o tamanho do carrossel*/
        #CarrosselCursos {
            width: 700px;
            height: 500px;
        }

        .btnViewCursos {
            background: linear-gradient(68.15deg, rgb(61, 3, 61), rgb(9, 9, 126));
            border-radius: 5px;
            color: white;
            padding: 10px;
            margin: 5px;
            text-decoration: none;
        }

        .btnViewCursos:hover {
            opacity: 75%;
            color: white;
        }
    </style>
</head>

<body>
    <!--cabecalho do site-->
    <header class="cabecalho">
        <img class="cabecalho-imagem" src="img/UsCodeLogo.png" alt="Logo da plataforma">
        <nav class="cabecalho-navegacao">
            <!-- Criar barra sanduíche CSS/JS para resposividade do site -->
            <ul class="topnav">
                <li><a class="navegacao-item" href="#cursos">Cursos</a></li>
                <li><a class="navegacao-item" href="#sobre">Sobre</a></li>
                <li><a class="navegacao-item" href="#contato">Contato</a></li>

                <li><a class="navegacao-item" href="login.php">Login</a></li>
                <li><a class="navegacao-item" href="formCadastro.php">Cadastre-se</a></li>

                <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
            </ul>
        </nav>
    </header>
    <!-- conteudo principal do site (cursos e sobre)-->
    <main class="conteudo">
        <div class="conteudo-box">
            <!--cursos-->
            <section class="conteudo-cursos" id="cursos">
                <h2>Nossos Cursos</a></h2>

                <!-- carrossel -->
                <div id="CarrosselCursos" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#CarrosselCursos" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#CarrosselCursos" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#CarrosselCursos" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/imghtml.jpg" class="d-block w-100" alt="curso HTML">
                        </div>
                        <div class="carousel-item">
                            <img src="img/imgcss.jpg" class="d-block w-100" alt="curso CSS">
                        </div>
                        <div class="carousel-item">
                            <img src="img/imgjava.jpg" class="d-block w-100" alt="curso JAVA">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#CarrosselCursos" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#CarrosselCursos" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- carrossel -->
                <br>
                <a class="btnViewCursos" href="ViewCursos.php">Veja todos os cursos</a>
            </section>

            <br>
            <hr>
            <br>

            <!--sobre-->
            <section class="conteudo-sobre" id="sobre">
                <h2>Sobre nós</h2>
                Aqui vamos colocar o texto "sobre" a Us Coders ex:
                A Us Coders foi fundada em 2022 com objtivo de...
                tipo isso aí kkk A Us Coders foi fundada em 2022 com objetivo de...
                tipo isso aí kkk
                Aqui vamos colocar o texto "sobre" a Us Coders ex:
                A Us Coders foi fundada em 2022 com objtivo de...
                tipo isso aí kkk A Us Coders foi fundada em 2022 com objetivo de...
                tipo isso aí kkk
                Aqui vamos colocar o texto "sobre" a Us Coders ex:
                A Us Coders foi fundada em 2022 com objtivo de...
                tipo isso aí kkk A Us Coders foi fundada em 2022 com objetivo de...
                tipo isso aí kkk
                Aqui vamos colocar o texto "sobre" a Us Coders ex:
                A Us Coders foi fundada em 2022 com objtivo de...
                tipo isso aí kkk A Us Coders foi fundada em 2022 com objetivo de...
                tipo isso aí kkk
                Aqui vamos colocar o texto "sobre" a Us Coders ex:
                A Us Coders foi fundada em 2022 com objtivo de...
                tipo isso aí kkk A Us Coders foi fundada em 2022 com objetivo de...
                tipo isso aí kkk
                Aqui vamos colocar o texto "sobre" a Us Coders ex:
                A Us Coders foi fundada em 2022 com objtivo de...
                tipo isso aí kkk A Us Coders foi fundada em 2022 com objetivo de...
                tipo isso aí kkk
                Aqui vamos colocar o texto "sobre" a Us Coders ex:
                A Us Coders foi fundada em 2022 com objtivo de...
                tipo isso aí kkk A Us Coders foi fundada em 2022 com objetivo de...
                tipo isso aí kkk
                Aqui vamos colocar o texto "sobre" a Us Coders ex:
                A Us Coders foi fundada em 2022 com objtivo de...
                tipo isso aí kkk A Us Coders foi fundada em 2022 com objetivo de...
                tipo isso aí kkk
                Aqui vamos colocar o texto "sobre" a Us Coders ex:
                A Us Coders foi fundada em 2022 com objtivo de...
                tipo isso aí kkk A Us Coders foi fundada em 2022 com objetivo de...
                tipo isso aí kkk
                Aqui vamos colocar o texto "sobre" a Us Coders ex:
                A Us Coders foi fundada em 2022 com objtivo de...
                tipo isso aí kkk A Us Coders foi fundada em 2022 com objetivo de...
                tipo isso aí kkk
                Aqui vamos colocar o texto "sobre" a Us Coders ex:
                A Us Coders foi fundada em 2022 com objtivo de...
                tipo isso aí kkk A Us Coders foi fundada em 2022 com objetivo de...
                tipo isso aí kkk
            </section>
        </div>
    </main>
    <!--rodapé do site (parte do contato)-->
    <footer class="rodape" id="contato">
        <h2>Contate-nos</h2>
        <h3>&copy Uscoders</h3>
        <h4>Acrescentar depois (apena estética mesmo pro rodapé)</h4>
    </footer>
    <script>
        /* Quando o usuário clica no Ícone, 
        abre novamente o Menu só que desta vez com a formatação que definimos no media screen */
        function myFunction() {
            document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
        }
        /*OBS: Esta função deverá ser adicionada dentro de um Script na sua página HTML, 
        ou dentro de uma chama de arquivo .js*/
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./assets/img/favicon.png">
        <title>Portfólio | Marcelo Cavalcanti</title>

        <!-- Boxicons -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/96d065429f.js" crossorigin="anonymous"></script>
        <!-- custom css -->
        <link rel="stylesheet" href="./assets/css/style.css">
        
    </head>
    <body>

        <!-- Cabeçalho -->
        <header class="header">
            <h4 class="logo" disabled>MC<span>i</span>NDev</h4>

            <i class='bx bx-menu' id="menu-icon"></i>

            <nav class="navbar">
                <a href="#home" class="active">Início</a>
                <a href="#about">Sobre</a>
                <a href="#tech">Tecnologias</a>
                <a href="#projects">Projetos</a>
            </nav>
        </header>

        <!-- Página inicial -->
        <section class="home" id="home">
            <div class="home-content">
                <h3>Olá, Meu nome é</h3>
                <h1>Marcelo Cavalcanti do Nascimento</h1>
                <h3>Eu sou <span class="multiple-text"></span></h3>
                <p>Sempre em busca de ser um profissional cada vez mais completo 
                e almejado pelas grandes empresas da área da Tecnologia.</p>
                <div class="social-media">
                    <!-- <a href="#"><i class='bx bxl-whatsapp'></i></a> -->
                    <a href="https://www.linkedin.com/in/marcelo-cavalcanti-7b1137253"><i class='bx bxl-linkedin' ></i></a>
                    <a href="https://github.com/mcindevbr"><i class='bx bxl-github'></i></a>
                </div>
                <a href="curriculo.php" class="btn">Currículo</a>
            </div>

            <div class="home-img">
                <img src="./assets/img/my_photo.png" alt="foto de marcelo da página inicial">
            </div>
        </section>

        <!-- Sobre mim -->

        <section class="about" id="about">
            <div class="about-img">
                <img src="./assets/img/my_photo.png" alt="foto de marcelo da seção sobre">
            </div>

            <div class="about-content">
                <h2 class="heading">Sobre <span>mim</span></h2>
                <h3>Desenvolvedor FrontEnd / Analista de Sistemas</h3>
                <p>Tenho 25 anos, sou de São Gonçalo do Amarante, Rio Grande do Norte, Brasil.<br>
                Militar Temporário do Exército (2017 - Hoje) - seção de Tecnologia e <span id="pontos">...</span><span id="mais">Informática.<br> 
                Estudante de Análise e Desenvolvimento de Sistemas na Universidade Estácio de Sá, Natal-RN.<br>
                Cursando Desenvolvimento FullStack Avançado - Programador Br na Hotmart | Desenvolvimento Web Completo - Udemy.<br>
                Sou iniciante na programação, apaixonando-me cada vez mais por essa área.<br>
                Meu objetivo é ser um Desenvolvedor completo, e futuramente estar entre os melhores.</p>
                <button id="btnLeiaMais" class="btn" onclick="leiaMais()">Leia mais</button>
            </div>
        </section>

        <!-- seção Tecnologias -->
        <section class="tech" id="tech">
            <h2 class="heading">Tecno<span>logias</span></h2>

            <div class="tech-container">
                <div class="tech-box">
                    <i class="fa-brands fa-html5"></i>
                    <h3>HTML5</h3>
                </div>

                <div class="tech-box">
                    <i class="fa-brands fa-css3-alt"></i>
                    <h3>CSS3</h3>
                </div>
                
                <div class="tech-box">
                    <i class="fa-brands fa-bootstrap"></i>
                    <h3>Bootstrap</h3>
                </div>

                <div class="tech-box">
                    <i class="fa-brands fa-js"></i>
                    <h3>JavaScript</h3>
                </div>

                <div class="tech-box">
                    <i class="fa-brands fa-php"></i>
                    <h3>PHP</h3>
                </div>

                <div class="tech-box">
                    <i class="fa-solid fa-code"></i>
                    <h3>Em breve!</h3>
                </div>
                
            </div>

        </section>

        <!-- seção projetos -->

        <section class="projects" id="projects">
            <h2 class="heading">Meus <span>Projetos</span></h2>

            <div class="projects-container">
                <div class="projects-box">
                    <img src="./assets/img/portifolio1.png" alt="projeto um">
                    <div class="projects-layer">
                        <h4>Projeto 1</h4>
                        <p>Em breve!</p>
                        <a href="#"><i class='bx bx-link-external' ></i></a>
                    </div>
                </div>

                <div class="projects-box">
                    <img src="./assets/img/portifolio1.png" alt="projeto dois">
                    <div class="projects-layer">
                        <h4>Projeto 2</h4>
                        <p>Em breve!</p>
                        <a href="#"><i class='bx bx-link-external' ></i></a>
                    </div>
                </div>

                <div class="projects-box">
                    <img src="./assets/img/portifolio1.png" alt="projeto três">
                    <div class="projects-layer">
                        <h4>Projeto 3</h4>
                        <p>Em breve!</p>
                        <a href="#"><i class='bx bx-link-external' ></i></a>
                    </div>
                </div>

                <div class="projects-box">
                    <img src="./assets/img/portifolio1.png" alt="projeto quatro">
                    <div class="projects-layer">
                        <h4>Projeto 4</h4>
                        <p>Em breve!</p>
                        <a href="#"><i class='bx bx-link-external' ></i></a>
                    </div>
                </div>

                <div class="projects-box">
                    <img src="./assets/img/portifolio1.png" alt="projeto cinco">
                    <div class="projects-layer">
                        <h4>Projeto 5</h4>
                        <p>Em breve!</p>
                        <a href="#"><i class='bx bx-link-external' ></i></a>
                    </div>
                </div>

                <div class="projects-box">
                    <img src="./assets/img/portifolio1.png" alt="projeto seis">
                    <div class="projects-layer">
                        <h4>Projeto 6</h4>
                        <p>Em breve!</p>
                        <a href="#"><i class='bx bx-link-external' ></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- rodape -->
        <footer class="footer">
            <div class="footer-text">
                <p>MC<span>i</span>NDev</p>
            </div>

            <div class="footer-iconTop">
                <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
            </div>
        </footer>

        <!-- Scroll reveal -->
        <script src="https://unpkg.com/scrollreveal"></script>
        <!-- typed js // tem no git -->
        <script src="https://unpkg.com/typed.js@2.0.14/dist/typed.umd.js"></script>
        <!-- custom js -->
        <script src="./assets/js/script.js"></script>
        <!-- leiaMais -->
        <script src="./assets/js/leiaMais.js"></script>
    </body>
</html>
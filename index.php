<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Renan Delmonico</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body id="topo">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Renan Delmonico</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll">
                        <a href="#topo">Início</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#sobre">Sobre</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contato">Contato</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#links">Links úteis</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="container" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive img-circle center-block" src="img/renan.png" alt="">
                    <div>
                        <h1>Renan Delmonico</h1>
                        <hr class="divisor">
                        <h4>Desenvolvedor web</h4>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="sobre">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Sobre</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Profissional apaixonado por desenvolvimento web. Trabalha com programação PHP desde fevereiro de 2013, ano em que iniciou seus estudos em Sistemas de Informação na Unipar.</p>
                </div>
                <div class="col-lg-4">
                    <p>Atualmente cursa pós-graduação em desenvolvimento para web e dispositivos móveis na Faculdade Alfa e inglês no CNA.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contato">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Entre em contato</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="contato" method="post" action="https://formspree.io/renandelmonico@gmail.com">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Nome</label>
                                <input type="text" name="name" placeholder="Digite seu nome completo" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">E-mail</label>
                                <input type="email" name="_replyto" placeholder="Digite seu e-mail" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="message">Mensagem</label>
                                <textarea name="mensagem" placeholder="Digite sua mensagem" required="required" class="form-control" rows="5"></textarea>
                            </div>
                        </div
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg pull-right">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="links">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Links úteis</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/php.png" alt="PHP" title="PHP">
                        <div class="caption">
                            <h3>Site oficial do PHP</h3>
                            <p class="texto">O PHP é uma linguagem de script open source de uso geral, muito utilizada, e especialmente adequada para o desenvolvimento web e que pode ser embutida dentro do HTML.</p>
                            <p>
                                <a href="http://php.net" class="btn btn-primary pull-right" role="button" target="_blank">Visitar</a>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/github.png" alt="GitHub" title="GitHub">
                        <div class="caption">
                            <h3>GitHub</h3>
                            <p class="texto">GitHub é uma plataforma de hospedagem de código com controle de versão e colaboração. Ele permite que pessoas trabalhem juntas em projetos de qualquer lugar.</p>
                            <p>
                                <a href="http://github.com" class="btn btn-primary pull-right" role="button" target="_blank">Visitar</a>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/composer.png" alt="Composer" title="Composer">
                        <div class="caption">
                            <h3>Composer</h3>
                            <p class="texto">Composer é uma ferramenta para gerenciamento de dependências para o PHP que vem ganhando espaço e se tornando cada vez mais indispensável.</p>
                            <p>
                                <a href="https://getcomposer.org/" class="btn btn-primary pull-right" role="button" target="_blank">Visitar</a>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/docker.png" alt="Docker" title="Docker">
                        <div class="caption">
                            <h3>Docker</h3>
                            <p class="texto">Docker é um projeto de código aberto que automatiza a implantação de aplicativos dentro de recipientes de software, fornecendo uma camada adicional de abstração e automação de virtualização de sistema de nível operacional em Linux, Mac OS e Windows.</p>
                            <p>
                                <a href="http://docker.com" class="btn btn-primary pull-right" role="button" target="_blank">Visitar</a>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/vscode.png" alt="Visual Studio Code" title="Visual Studio Code">
                        <div class="caption">
                            <h3>Visual Studio Code</h3>
                            <p class="texto">O Visual Studio Code é um editor de código-fonte desenvolvido pela Microsoft para Windows, Linux e macOS. Ele inclui suporte para depuração, controle Git incorporado, realce de sintaxe, complementação inteligente de código, snippets e refatoração de código. Ele é um software livre e de código aberto.</p>
                            <p>
                                <a href="https://code.visualstudio.com/" class="btn btn-primary pull-right" role="button" target="_blank">Visitar</a>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/phptrw.png" alt="PHP The Right Way" title="PHP The Right Way">
                        <div class="caption">
                            <h3>PHP The Right Way</h3>
                            <p class="texto">O PHP: Do Jeito Certo é uma referência rápida e fácil de ler, introduzindo desenvolvedores às melhores práticas, renomados padrões de código e links para tutoriais competentes pela Web.</p>
                            <p>
                                <a href="http://br.phptherightway.com/" class="btn btn-primary pull-right" role="button" target="_blank">Visitar</a>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/phppr.png" alt="PHP PR" title="PHP PR">
                        <div class="caption">
                            <h3>PHP Paraná</h3>
                            <p class="texto">O PHP PR é um grupo de desenvolvedores PHP do estado do Paraná. No site pode ser encontrados artigos da comunidade, participar das discussões no fórum e até encontrar vagas de emprego no estado.</p>
                            <p>
                                <a href="https://phppr.org" class="btn btn-primary pull-right" role="button" target="_blank">Visitar</a>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/imasters.png" alt="iMasters" title="iMasters">
                        <div class="caption">
                            <h3>iMasters</h3>
                            <p class="texto">Desde 2001, o iMasters congrega uma comunidade segmentada formada por mais de 450 mil desenvolvedores e profissionais de web, com publicação diária de conteúdo.</p>
                            <p>
                                <a href="https://imasters.com.br/" class="btn btn-primary pull-right" role="button" target="_blank">Visitar</a>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/abraphp.png" alt="ABRAPHP" title="ABRAPHP">
                        <div class="caption">
                            <h3>ABRAPHP</h3>
                            <p class="texto">A ABRAPHP, Associação Brasileira de Profissionais de PHP, é uma associação sem fins lucrativos que visa promover, expandir e profissionalizar o mercado de PHP no Brasil.</p>
                            <p>
                                <a href="https://abraphp.org/" class="btn btn-primary pull-right" role="button" target="_blank">Visitar</a>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4"></div>
                <div class="footer-col col-md-4">
                    <ul class="list-inline">
                        <li>
                            <a href="http://facebook.com/renandelmonico" class="btn-social btn-outline" target="_blank">
                                <span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://twitter.com/renandelmonico" class="btn-social btn-outline" target="_blank">
                                <span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://linkedin.com/in/renan-henrique-delmonico-98640a13b/" class="btn-social btn-outline" target="_blank">
                                <span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://github.com/renandelmonico" class="btn-social btn-outline" target="_blank">
                                <span class="sr-only">GitHub</span><i class="fa fa-fw fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 copyrights">
                    <?php echo (new DateTime('now'))->format('Y'); ?> &copy; Todos os direitos reservados
                </div>
            </div>
        </div>
    </footer>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/home.js"></script>

</body>

</html>

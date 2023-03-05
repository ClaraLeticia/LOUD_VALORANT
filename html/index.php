<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>LOUD VALORANT</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/index.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal({
            duration: 900
        })
    </script>
</head>

<body>
    <header>
        <div id="container">
            <img id="img" src="../img/image.png">
            <div id="nossa_historia">
                <h1 class="titulo">Nossa Historia</h1>
                <h5 class="subtitulo">De "pancada e amigos" a campeões mundiais. Conheça a história do time mais vitorioso
                    do VALORANT brasileiro.</h5>
                <a href="#historia"><button class="botao">Saiba mais</button></a>
            </div>
        </div>
    </header>

    <div id="gambiarra"></div>

    <div id="conheca_mais">
        <div id="blocos">
            <div class="playersXconfrontos">
                <img class="fotocard" src="../img/time1.jpg">
                <h1 class="titulo1">Conheça os players</h1>
                <h2 class="subtitulo"> Conheça os jogadores que defendem a camisa da LOUD e vem ganhando diversos
                    títulos no Brasil e no mundo</h2>
                <a href="#carousel"><button class="botao">Saiba mais</button></a>
            </div>
            <div class="playersXconfrontos">
                <img class="fotocard" src="../img/time.png">
                <h1 class="titulo1">Próximos Confrontos</h1>
                <h2 class="subtitulo"> Descubra quais são os próximos adversários e nao perca mas nenhum confronto</h2>
                <a href="#confronto"><button class="botao">Saiba mais</button></a>
            </div>
        </div>
    </div>

    <div id="historia">
        <div id="caminhada">
            <img id="campeoes" src="../img/caminhada.jpg">
            <div class="descricao">
                <h1 class="titulo1">A caminhada do loud valorant</h1>
                <h3 class="subtitulo">A primeira lineup da LOUD no Valorant foi inteiramente montada por Sacy e Saadhak, os jogadores mais experientes do time. Os dois jogadores estiveram juntos em 2021 em outra equipe, a Team Vikings (VKS), que chegou a ser campeã do VCT Brasil naquela temporada. O time era composto por Sacy, Pancada, Saadhack, Less e Aspas. Por ter sido campeã do VCT Brasil, a LOUD foi classificada direto para os playoffs do primeiro Masters de 2022, disputado em Reykjavík, na Islândia. Chegando até a final, em seu primeiro campeonato internacional mostrando a potência daquele time. Mas ficou em segundo lugar, perdendo para o time norte-americano OpTic Gaming. Já no campeonato mundial a LOUD novamente enfrentou a OpTic e dessa vez saiu com a vitória e com o título de campeâo mundial, sendo o primeiro time brasileiro a conquistar esse título. Já no fim do ano de 2022, Pancada e Sacy optaram por sair da LOUD e integrar o time do NA, Sentinels. E assim os jogadores Tuyz e Cauanzin entraram na LOUD e já ganharm os corações dos torcedores. Atualmente a LOUD é composta por três integrantes iniciais Saadhack, Less e Aspas mais os dois novatos Cauanzin e Tuyz.</h3>
            </div>
        </div>
    </div>
    <div id="carousel">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/saadhack.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../img/aspas.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../img/less.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../img/cauanzin.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../img/tuyz.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div id="confronto">
        <h1 class="titulo1">Próximo confronto</h1>
        <img src="../img/loudlogo.png">
        <p class="m-item-team-tag">LOUD</p>
        <?php

        $url = "https://www.vlr.gg/team/6961/loud";
        $dados = file_get_contents($url);
        $var1 = explode('<div class="m-item-logo mod-right">', $dados);
        $var2 = explode("</span>", $var1[1]);
        $var3 = explode('<div class="m-item-date">', $dados);
        $var4 = explode('</div>', $var3[1]);
        echo "<div id='data'>" . $var4[0] . "</div>";
        echo "<div id='logo'>" . $var2[0] . "</div>";

        ?>
    </div>
    <footer>
        <div id="redes">
            <a href="https://www.linkedin.com/in/claralet/"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
            <a href="https://github.com/ClaraLeticia"><i class="fa-brands fa-square-github fa-2xl"></i></a>
        </div>

        <div id="desenvolvido">
            <p>Desenvolvido por &copy; Clara Lopes</p>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/b8d7b2c5d0.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        ScrollReveal().reveal('#nossa_historia')
        ScrollReveal().reveal('#conheca_mais')
        ScrollReveal().reveal('#historia')
        ScrollReveal().reveal('#carousel')
        ScrollReveal().reveal('#confronto')
    </script>


</body>

</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>

    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>Acervo musical do seu Zé</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>

    <body>
        <div id="wrap">
            <!--HEADER-->
            <div id="header">
                <div class="p2">Acervo musical do seu Zé</div>
                <div class="p">Acervo musical do seu Zé</div>
            </div>

            <!--MAIN-->
            <div id="main">
                <!--MENU-->
                <div id="menu">
                    <div id="shortcuts">
                    <p class="home"><a href="?page=home.php">
                            <img src="img/home.png" width="50px"></a></p>
                    <p class="date">
                        <?php echo date('H:i'); ?>h <?php echo date('d/m/Y'); ?>
                    </p>
                    </div>
                    <ul>
                        <p>Menu administrativo</p>
                        <li><a href="?page=adduser.php">Cadastrar usuário</a></li>
                        <li><a href="?page=rmuser.php">Remover usuário</a></li>
                        <li><a href="?page=addsong.php">Cadastrar música</a></li>
                        <li><a href="?page=editsong.php">Editar música</a></li>
                        <li><a href="?page=rmsong.php">Remover música</a></li>
                    </ul>
                    <ul>
                        <p>Pesquisar no acervo</p>
                        <li><a href="?page=searchartist.php">Por artista</a></li>
                        <li><a href="?page=searchmusic.php">Por música</a></li>
                    </ul>
                    <ul>
                        <p></p>
                        <li><a href="logout.php">Sair</a></li>
                    </ul>
                </div>

                <!--CONTENT-->
                <div id="content">
                    <p>asd</p>
                </div>
            </div>
        </div><!--END WRAP-->

        <!--FOOTER PAGE-->
        <div id="footer">
            <p>Sistema desenvolvido por <a href="mailto:leandrogs@ieee.org">
                    Leandro Gomes da Silva</a> para o processo de seleção
                de iniciação científica.</p>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css" />

 <?php
    $titulo = "Projeto Udemy";
    global $tituloPagina;

    if ($tituloPagina != '') {
    $titulo .= ' | ' . $tituloPagina;
    
    }
?>

    <title><?php echo $titulo ?></title>
</head>

<body>
    <header class="cabecalho">
        <div class="container">

            <a href="index.php" class="logo"></a>

            <nav class="opcoes-menu opcoes-menu-fechado">
                <button class="opcoes-menu-botao ">Abrir/fechar opcoes</button>
                <ul class="opcoes-menu-lista">
                    <li>
                        <a href="index.php" class="opcoes-menu-item <?php echo $tituloPagina == '' ? 'opcoes-menu-item-atual' : '' ?> ">Home</a>
                    </li>

                    <li>
                        <a href="sobre.php" class="opcoes-menu-item <?php echo $tituloPagina == 'Sobre nós' ? 'opcoes-menu-item-atual' : '' ?> ">Sobre nós</a>
                    </li>

                    <li>
                        <a href="portfolio.php" class="opcoes-menu-item <?php echo $tituloPagina == 'Portfolio' ? 'opcoes-menu-item-atual' : '' ?> ">Portifolio</a>
                    </li>

                    <li>
                        <a href="contato.php" class="opcoes-menu-item <?php echo $tituloPagina == 'Contato' ? 'opcoes-menu-item-atual' : '' ?> ">Contato</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>


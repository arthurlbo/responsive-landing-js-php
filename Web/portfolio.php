<?php
global $tituloPagina;
$tituloPagina = 'Portfolio';
include 'src/cabecalho.php';

?>
        <header class="titulo-principal">
            <h1 class="titulo">Portfolio</h1>
        </header>

        <section class="pagina-conteudo">
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Cum nobis perspiciatis accusantium odit?<br />
                quas laborum corrupti architecto eligendi esse eveniet
                <br />neque ad odit totam. Officiis odit debitis at
                perspiciatis.
            </p>

            <nav>
                <ul class="lista-trabalhos">
                    <li class="lista-trabalhos-item">
                        <a data-fancybox="gallery" href="../Assets/img/portfolio/aircraft-2806035_1280.jpg" target="_blank">
                            <img class="lista-trabalhos-img"
                                src="../Assets/img/portfolio/miniaturas/aircraft-2806035_min.jpg" alt="Imagem (1)" />

                            <h2 class="lista-trabalhos-titulo">
                                Nome do trabalho
                            </h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos-item">
                        <a data-fancybox="gallery" href="../Assets/img/portfolio/gear-2291916_1280.jpg" target="_blank">
                            <img class="lista-trabalhos-img" src="../Assets/img/portfolio/miniaturas/gear-2291916_min.jpg"
                                alt="Imagem (2)" />

                            <h2 class="lista-trabalhos-titulo">
                                Nome do trabalho
                            </h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos-item">
                        <a data-fancybox="gallery" href="../Assets/img/portfolio/hong-kong-1990268_1280.jpg" target="_blank">
                            <img class="lista-trabalhos-img"
                                src="../Assets/img/portfolio/miniaturas/hong-kong-1990268_min.jpg" alt="Imagem (3)" />

                            <h2 class="lista-trabalhos-titulo">
                                Nome do trabalho
                            </h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos-item">
                        <a data-fancybox="gallery" href="../Assets/img/portfolio/landscape-2268775_1280.jpg" target="_blank">
                            <img class="lista-trabalhos-img"
                                src="../Assets/img/portfolio/miniaturas/landscape-2268775_min.jpg" alt="Imagem (4)" />

                            <h2 class="lista-trabalhos-titulo">
                                Nome do trabalho
                            </h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos-item">
                        <a data-fancybox="gallery" href="../Assets/img/portfolio/saddle-2614038_1280.jpg" target="_blank">
                            <img class="lista-trabalhos-img"
                                src="../Assets/img/portfolio/miniaturas/saddle-2614038_min.jpg" alt="Imagem (5)" />

                            <h2 class="lista-trabalhos-titulo">
                                Nome do trabalho
                            </h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos-item">
                        <a data-fancybox="gallery" href="../Assets/img/portfolio/town-2430571_1920.jpg" target="_blank">
                            <img class="lista-trabalhos-img" src="../Assets/img/portfolio/miniaturas/town-2430571_min.jpg"
                                alt="Imagem (6)" />

                            <h2 class="lista-trabalhos-titulo">
                                Nome do trabalho
                            </h2>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>

 <?php include 'src/rodape.php';?>

<?php include 'src/cabecalho.php'; ?>


        <header class="titulo-principal">
            <h1 class="titulo">Contato</h1>
        </header>

        <section class="pagina-conteudo container">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis iure odio illo</p>

            <form class="formulario" action="#">
                <div class="formulario-grupo formulario-grupo-coluna-esq">

                    <label class="formulario-label" for="nome">Nome: </label><br>
                    <input class="formulario-campo" type="text" name="nome" id="nome" required>
                </div>

                <div class="formulario-grupo formulario-grupo-coluna-dir">

                    <label class="formulario-label" for="email">E-mail: </label><br>
                    <input class="formulario-campo" type="email" name="email" id="email" required>
                </div>

                <div class="formulario-grupo">

                    <label class="formulario-label" for="mensagem">Mensagem: </label><br>
                    <textarea class="formulario-campo" name="mensagem" id="mensagem" cols="30" rows="10"
                        required></textarea>
                </div>

                <input class="formulario-botao" type="submit" value="enviar" id="enviar">

            </form>

            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias ipsa rem <br> Vero aliquam voluptates
                facilis earum ducimus, accusantium, qui at nulla totam reprehenderit
            </p>

        </section>

        <div class="mapa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.3176546653995!2d-49.2495232854909!3d-25.461066440354667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce4fde860fb43%3A0xa59bdb32148a9686!2sAdam%20Robo!5e0!3m2!1spt-BR!2sbr!4v1650462932746!5m2!1spt-BR!2sbr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

     <?php include 'src/rodape.php';?>

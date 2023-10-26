<?php
    include 'Includes/header.php'

?>
        <section class="hero__container container">
            <h1 class="hero__title">Bienvenido a mi portafolio</h1>
            <p class="hero__paragraph">Hola!<br>Soy Michell Eduardo Forero Herrera
            <br>Tengo pasión por el desarrollo web.</p>

            
        </section>
    </header>

    <main>
        <section class="container about">
            <h2 class="subtitle">¿Quien soy?</h2>
            <p class="about__paragraph">Hola, soy Michell Herrera, tengo 24 años 
                y soy originario de Bogotá, Colombia. Me apasiona la programación 
                y he estado inmerso en este mundo durante los últimos 4 años, 
                comenzando con C# y posteriormente enamorándome de Python debido
                 a su versatilidad y sus bibliotecas. Además de la programación, 
                 mis intereses incluyen el deporte, los videojuegos y las películas. 
                 Estoy emocionado por lo que el futuro de la programación me depara 
                 y estoy ansioso por seguir aprendiendo y creando.</p>

            <div class="about__main">
                <article class="about__icons">
                    <img src="./img/iconos/programation.svg" class="about__icon">
                    <h3 class="about__title">Programación</h3>
                    <p class="about__paragrah">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae tempore
                        porro eius facilis?</p>
                </article>

                <article class="about__icons">
                    <img src="./img/iconos/videogames.svg" class="about__icon">
                    <h3 class="about__title">Video Juegos</h3>
                    <p class="about__paragrah">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae tempore
                        porro eius facilis?</p>
                </article>

                <article class="about__icons">
                    <img src="./img/iconos/sports.svg" class="about__icon">
                    <h3 class="about__title">Deporte</h3>
                    <p class="about__paragrah">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae tempore
                        porro eius facilis?</p>
                </article>
            </div>
            <br>
            <a href="quienSoy.php" class="cta_yo">Mas sobre mi</a>
        </section>

        
        
        <section class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledege__texts">
                    <h2 class="subtitle">Mis Proyectos!</h2>
                    <p class="knowledge__paragraph">Durante mi trayecto, he tenido la oportunidad de 
                        implementar soluciones para IPS y EPS en Colombia. Uno de mis proyectos más 
                        destacados fue la creación de un sistema que consultaba bases de datos,
                         realizaba cruces de datos y generaba automáticamente hojas de cálculo 
                         de Excel con los campos requeridos, todo basado en los requisitos 
                         específicos de estas instituciones de salud. Estoy emocionado por 
                         seguir aprendiendo y aplicando mis habilidades en futuros proyectos.</p>
                         <br>
                    <a href="misProyectos.php" class="cta_yo"> Mas de mi trabajo</a>
                </div>

                <figure class="knowledge__picture">
                    <img src="./img/img3.png" class="knowledge__img">
                </figure>
            </div>
        </section>
    
        <section class="questions__container">
            <h2 class="subtitle">Contactame Ahora</h2>
            <p class="questions__copy"> Estoy emocionado por la posibilidad de colaborar contigo en tu próximo proyecto. 
                    Si tienes alguna pregunta, sugerencia o simplemente deseas charlar sobre una idea, no dudes en ponerte 
                    en contacto conmigo. Estoy aquí para ayudarte a convertir tu visión en realidad. ¡Hablemos de tu próximo
                     proyecto y trabajemos juntos para hacerlo realidad. <br>
                     !Contactame ahora y hablame de tu idea de negocio¡.</p>
            <a href="contacto.php" class="cta">Contactar</a>
        </section>
    
    </main>
    <?php include 'includes/footer.php'; ?>

    



<?php
    include 'Includes/header.php'

?>
        
        <section class="hero__container container">
            <h1 class="hero__title">Contactame Ahora!</h1>
            <p class="hero__paragraph">Empezemos a trabajar juntos<br>
            Si tienes alguna pregunta, sugerencia o simplemente deseas charlar sobre una idea, no dudes en ponerte 
            en contacto conmigo. Estoy aquí para ayudarte a convertir tu visión en realidad. ¡Hablemos de tu próximo
            proyecto y trabajemos juntos para hacerlo realidad!.</p>

            
        </section>
    </header>
    <main>
        <section class="questions container">
            <h2 class="subtitle">Contactame.</h2>
        </section>
        <section class="questions__container">
            <section class="me_container">
                <div class="me__texts">
                    <h2 class="subtitle" >Detalle de contacto:</h2>
                    
                    <form class="contact_items">
                        <label for="ubicacion" > <strong>Ubicación:</strong> </label> <br>
                        <label for="bogota" >Bogotá-Colombia</label> <br>
                        <label for="correo" ><strong>Correo:</strong> </label> <br>
                        <label for="micorreo" >mjuniorblue@gmail.com</label> <br>
                        <label for="telefono" ><strong>Telefono:</strong> </label> <br>
                        <label for="mitelefono" >+57 3192947737</label> <br>
                        <label for="Horario" ><strong>Horario de atención:</strong>  </label> <br>
                        <label for="atencion" ></label>Lunes - Viernes <br>
                        <label for="atencion" >8:00AM - 5:00PM</label><br>
                    </form>
                </div>
                <div class="me__texts">
                    <h2 class="subtitle" >Contactame ahora:</h2>
                    <form class="footer__form" action="https://formspree.io/f/mknkkrkj" method="POST">
                        <label for="nombre"><strong>Nombre:</strong> </label> <br>
                        <input class="items_input" type="text" id = "nombre" placeholder="aqui va tu nombre" required="true"> <br>
                        <label for="email"><strong>Email:</strong> </label> <br>
                        <input class="items_input" type="email" name="email" id="email" required="true" placeholder="email"> <br>
                        <label for="mensaje"><strong>Escribe un mensaje:</strong> </label> <br/>
                        <textarea class="items_input" name="mensaje" id="mensaje" cols="50" rows="4" placeholder="Mensaje" required="true"></textarea> <br>
                        <input type="submit" value="Enviar" class="footer__submit">
                    </form>
                        
                    
                </div>
            </section>
        </section>


<?php include 'includes/footer.php'; ?>
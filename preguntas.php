<?php 
include "templates/header.php";
?>
    <main>
        <section id="FrequentQuestions" class="FrequentQuestions">
            <div class="contenedor">
                <div class="FrequentQuestions_title">
                    <p>Preguntas Frecuentes</p>
                </div>
                <div class="pregunta_frecuente">
                    <div class="orderQuestions">
                        <p class="Onequestion">Me interesa tener una pagina ¿Cómo procedemos?</p>
                        <i class="fas fa-plus" class="btn_pregunta_frecuente"></i>  
                    </div> 
                    <hr>
                    <div class="cardInstructions hidden-description">
                        <div class="cardsInstructions_card1">
                            <div class="cardsInstructions_card__imgArea"></div>
                            <p class="cardsInstructions_card__p">¡Contanos tu idea!</p>
                            <p class="cardsInstructions_card__description">Una vez que te contactes con nosotros, te realizaremos una serie de preguntas para conocer más sobre tus ideas, proyecto y objetivos. Esto lo hacemos con la finalidad poder armarte un presupuesto acorde y, a la vez, tener toda la información necesaria para plasmarla en el proceso de diseño web.</p>
                        </div>
                        <div class="cardsInstructions_card2">
                            <div class="cardsInstructions_card__imgArea"></div>
                            <p class="cardsInstructions_card__p">¡Analisis del proyecto!</p>
                            <p class="cardsInstructions_card__description">En esta etapa el equipo de desarrollo de Koya Web se encarga de analizar la propuesta del cliente y a partir de ello elabora desde el tiempo estimado que costará la realización del proyecto hasta el presupuesto total del mismo.</p>
                        </div>
                        <div class="cardsInstructions_card3">
                            <div class="cardsInstructions_card__imgArea"></div>
                            <p class="cardsInstructions_card__p">¡A trabajar!</p>
                            <p class="cardsInstructions_card__description">Una vez aceptada la propuesta el equipo de Koya Web llevará a cabo la realización del proyecto. <br>Nos manejamos con entregas parciales y nos comunicamos con el cliente durante todo el proceso, para que esté al tanto de cómo avanzamos y pueda aportar ideas y mejoras, en caso de que se considere necesario. </p>
                        </div>
                        <div class="cardsInstructions_card4">
                            <div class="cardsInstructions_card__imgArea"></div>
                            <p class="cardsInstructions_card__p">¡Entrega Final!</p>
                            <p class="cardsInstructions_card__description">Finalmente luego de la finalización del proyecto, se le presentará al cliente el resultado final. En esta última etapa el cliente puede optar por aceptar el mantenimiento arancelado de Koya Web sobre el mismo trabajo realizado.</p>
                        </div>
                    </div>
                </div>
                <br>

                <div class="pregunta_frecuente">
                    <div class="orderQuestions">
                        <p class="Onequestion">¿Por qué debo tener una página web?</p>
                        <i class="fas fa-plus" class="btn_pregunta_frecuente"></i>
                    </div>                  
                    <hr>
                    <p class="response hidden-description">Tener tu propia página web asegura tu presencia en línea. Esto te da ventajas competitivas, y te permite conectarte con personas a las que de otro modo no podrías llegar. No importa el “rubro” en que trabajes: contar con una página web te ayuda a dar visibilidad a tu trabajo, a tu empresa, a tu perfil profesional. Nosotros te ayudaremos a lograrlo. </p> 
                </div>
                <br>
                <div class="pregunta_frecuente">
                    <div class="orderQuestions">
                        <p class="Onequestion"> ¿Cuál es el costo de realizar una página web?</p>
                        <i class="fas fa-plus" class="btn_pregunta_frecuente"></i>
                    </div>           
                    <hr>  
                    <p class="response hidden-description" >Ya que cada proyecto web es diferente, los tiempos de desarrollo varían, y por ende el costo también. Podes ponerte en contacto con nosotros para contarnos sobre tu proyecto o idea, de esta manera podemos armarte una propuesta que se adapte a lo que necesitas. Una vez que entendamos cuáles son tus requerimientos podremos darte un presupuesto acorde. </p> 
                </div>
                <br>
                <div class="pregunta_frecuente">
                    <div class="orderQuestions">
                        <p class="Onequestion">¿Cuánto tiempo demora?</p>
                        <i class="fas fa-plus" class="btn_pregunta_frecuente"></i>
                    </div>       
                    <hr>
                    <p class="response hidden-description"> El tiempo que demoremos en crear tu página web depende de la complejidad de la misma. Cada proyecto es único y diferente, por lo que los tiempos varían. No es lo mismo una landing page que un eccomerce, aun así,  la mayoría de nuestros proyectos se realizan en un plazo no mayor a 30 días desde la confirmación del trabajo. El tiempo que tardes en disponer de tu pagina web será pautado con antelación. </p> 
                </div>
                <br>
                <div class="pregunta_frecuente">
                    <div class="orderQuestions">
                        <p class="Onequestion">¿Las paginas web que realizan, funcionan correctamente en dispositivos móviles?</p>
                        <i class="fas fa-plus" class="btn_pregunta_frecuente"></i>
                    </div>
                    <hr>
                    <p class="response hidden-description">En koya web utilizamos tecnología responsive (“adaptativa”), la cual está incluida en todos nuestros proyectos. A través de esta tecnología adaptamos la apariencia de tu página web al tamaño del dispositivo que se esté utilizando para visitarla( ordenadores de escritorio a tablets y móviles).</p> 
                </div>

                <article class="more_questions">
                    <p>Si tenes más dudas ... <a href="contacto.php">Contactate con nosotros</a></p>
                </article>
                
            </div>
        </section>
        <?php
            include "templates/wpp.php";
            include "templates/footer.php";
        ?>
    </main>
    <script src="https://kit.fontawesome.com/2d78e61024.js" crossorigin="anonymous"></script>
    <script src="js/preguntas.js"></script>
</body>
</html>
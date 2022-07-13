<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css">

        <!-- Estilo del Formulario-->
        <!-- Esto lo puse en otro css y que no esta en la carpeta css porque cuando el php 
            iba a buscar el estilo css en otro lado que no fuera donde estaba el mismo php no me 
            funcionaba -->
        <link rel="stylesheet" type="text/css" href="estilo.css">
        
        <!-- Incorporar Favicon-->
        <link rel="icon" type="image/png" sizes="16x16" href="../imagenes/favicon_io/favicon-16x16.png">

        <!-- Incorporar las funtes de Google FONTS-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">    
        <title>Mixcoria + Maxbel CONTACTOS</title>
    </head>

    <body>  
        
        <div id="contenedor">

            <div id="contactos__padre">
            
                <header class="claseHeader">  

                    <div class="posicionlogo">
                        <img class="estiloLogo" src="../imagenes/logomm.png" >
                    </div>

                </header>   
        
                <!-- Menu para el escritorio -->
                <nav class="claseNav">
 
                    <div id="botones" > 
                        <div class="btn1"> <a href="../index.html">Inicio</a> </div>
                        <div class="btn2"> <a href="sets.html">SETs</a> </div>
                        <div class="btn3"> <a href="biografia.html">Biografia</a> </div>
                        <div class="btn4"> <a href="videos.html">Videos</a> </div>
                        <div class="btn5"> <a href="fotos.html">Fotos</a> </div>
                        <div class="btn6"> <a href="contacto.php">Contacto</a> </div>
                    </div>

                </nav>
                <!-- Menu para el escritorio -->


                <!-- Menu para el Celular -->
                <nav class="nav">

                    <div class="nav__container">
                        
                        <div class="posicionlogo">
                            <img class="estiloLogo" src="../imagenes/logomm.png" >
                        </div>
                        
                        <label for="menu" class="nav__label">
                            <img src="../assets/menu.svg" class="nav_img">
                        </label>
            
                        <!-- Estos Elementos tiene que estar juntos -->
                        <input type="checkbox" id="menu" class="nav__input">   <!-- Este impo tiene que ser el hermano adyacente del class__menu -->
                        <div class="nav__menu">
                             <a href="../index.html" class="nav__item"> Inicio</a>   
                             <a href="sets.html" class="nav__item"> Sets</a>   
                             <a href="biografia.html" class="nav__item"> Biografia</a>   
                             <a href="videos.html" class="nav__item"> Videos</a>   
                             <a href="fotos.html" class="nav__item"> Fotos</a>  
                             <a href="contacto.php" class="nav__item"> Contacto</a>   
                       </div>
                        <!-- Estos Elementos tiene que estar juntos -->
            
                    </div>
            
                </nav>
                <!-- Menu para el Celular -->
                    
                <!--        Section central       -->
                <section class="contactos__claseSection" >

                <form method="post">

                    <h1>¡Suscribete!</h1>
                    <input type="text" name="name" placeholder="Nombre Completo">
                    <input type="text" name="instagram" placeholder="Instagram">
                    <input type="email" name="email" placeholder="Email">
                    <input type="text" name="celular" placeholder="N° Celular">
                    <input class="input__submit" type="submit" name="register">

                </form>

                <?php 
                    include("registrar.php");
                ?>   

                </section>  <!--        section central       -->



                <!-- Footer Escritorio-->
                <footer class="footerestiloinicio">
                <a href="https://www.instagram.com/dj.mm.arg" target="_blank">Instagram</a>
                    |
                    <a href="https://www.facebook.com/mm.mixcoriamaxbel" target="_blank">Facebook</a>
                    |
                    <a href="https://www.youtube.com/channel/UCoOrQQc5RlgG_dLWsmzmt0A" target="_blank">You To Be</a>
                    |
                    <a href="mailto:mixcoriamaxbel@gmail.com">mixcoriamaxbel@gmail.com</a>
                </footer>
                <!-- Footer Escritorio-->


                <!-- Footer Celular-->
                <footer class="footerCelular">

                    <div class="footerCelular__facebook">

                        <a href="https://www.facebook.com/mm.mixcoriamaxbel" target="_blank">
                            <img src="../assets/facebook.svg" class="footerCelular__facebook__img">
                        </a>

                    </div>

                    <div class="footerCelular__intagram">

                        <a href="https://www.instagram.com/dj.mm.arg/" target="_blank">
                            <img src="../assets/instagram.svg" class="footerCelular__instagram__img">
                        </a>

                    </div>

                    <div class="footerCelular__ytb">

                        <a href="https://www.youtube.com/channel/UCoOrQQc5RlgG_dLWsmzmt0A" target="_blank">
                            <img src="../assets/ytb.svg" class="footerCelular__ytb__img">
                        </a>

                    </div>
                    
                </footer>
                <!-- Footer Celular-->

            </div> <!-- id="padre" -->

        </div>  <!-- id="contenedor" -->

    </body>
</html>
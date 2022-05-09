<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gorgory - Músico/banda</title>
    <link rel="icon" href="img/logo-rostro.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Fira+Sans+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4efa3e7bb5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php">
                    <img src="img/logo-rostro.png"/>
                    <h1>Gorgory</h1>
                </a>
                <div class="icon-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="menu">
                    <nav class="navegacion">
                        <a href="biografia.php">Biografía</a>
                        <a href="index.php" class="activo">Productos</a>
                        <a href="index.php#contacto" class="especial">Contacto</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main id="productos">
        <div class="contenedor contenido-productos">
            <h2>Productos</h2>
            <div class="productos">
                <div class="producto">
                    <img src="img/pack-memos.jpeg" alt="">
                    <div class="contenido-producto">
                        <div class="info">
                            <h3>Pack Memos</h3>
                            <p>S/. 75.00</p>
                        </div>
                        <div>
                            <a href="#" class="boton buyButton" data-producto="Pack Memos" data-precio=7500>Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="producto">
                    <img src="img/pack-alaska.jpeg" alt="">
                    <div class="contenido-producto">
                        <div class="info">
                            <h3>Pack Alaska</h3>
                            <p>S/. 70.00</p>
                        </div>
                        <div>
                            <a href="#" class="boton buyButton" data-producto="Pack Alaska" data-precio=7000>Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="producto">
                    <img src="img/pack-kafei.jpeg" alt="">
                    <div class="contenido-producto">
                        <div class="info">
                            <h3>Pack Kafei</h3>
                            <p>S/. 65.00</p>
                        </div>
                        <div>
                            <a href="#" class="boton buyButton" data-producto="Pack Kafei" data-precio=6500>Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="producto">
                    <img src="img/disco-memos.jpeg" alt="">
                    <div class="contenido-producto">
                        <div class="info">
                            <h3>Disco Memos</h3>
                            <p>S/. 20.00</p>
                        </div>
                        <div>
                            <a href="#" class="boton buyButton" data-producto="Disco Memos" data-precio=2000>Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="producto">
                    <img src="img/poster-memos.jpeg" alt="">
                    <div class="contenido-producto">
                        <div class="info">
                            <h3>Poster Memos</h3>
                            <p>S/. 8.00</p>
                        </div>
                        <div>
                            <a href="#" class="boton buyButton" data-producto="Poster Memos" data-precio=800>Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="producto">
                    <img src="img/pines-memos.jpeg" alt="">
                    <div class="contenido-producto">
                        <div class="info">
                            <h3>Pines Memos</h3>
                            <p>S/. 3.00 c/u</p>
                        </div>
                        <div>
                            <a href="#" class="boton buyButton" data-producto="Pines Memos" data-precio=300>Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="producto">
                    <img src="img/polos-1.jpeg" alt="">
                    <div class="contenido-producto">
                        <div class="info">
                            <h3>Polo Escapar</h3>
                            <p>S/. 35.00</p>
                        </div>
                        <div>
                            <a href="#" class="boton buyButton" data-producto="Polo Escapar" data-precio=3500>Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="producto">
                    <img src="img/polos-2.jpeg" alt="">
                    <div class="contenido-producto">
                        <div class="info">
                            <h3>Polo Kafei</h3>
                            <p>S/. 35.00</p>
                        </div>
                        <div>
                            <a href="#" class="boton buyButton" data-producto="Polo Kafei" data-precio=3500>Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section id="contacto" class="contacto">
        <div class="contenedor contenido-contacto">
            <h2>Contacto</h2>
            <form action="#">
                <div class="campos">
                    <div class="campos-fila">
                        <input type="text" name="" id="" placeholder="Nombre">
                        <input type="email" name="" id="" placeholder="Email">
                    </div>
                    <input type="text" name="" id="" placeholder="Asunto">
                    <textarea name="" id="" placeholder="Cuentame"></textarea>
                </div>
                <input type="submit" value="Enviar" class="boton">
            </form>
        </div>
    </section>
    <footer class="footer">
        <div class="contenedor contenido-footer">
            <div class="logo-footer">
                <a href="index.php">
                    <img src="img/logo-luna.png"/>
                </a>
            </div>
            <div class="info-social">
                <h3>Social</h3>
                <ul class="social-icons">
                    <li>
                        <a href="https://www.instagram.com/gor_gory/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://open.spotify.com/artist/7A5uTlrdo26IvPnrjXEukN" target="_blank">
                            <i class="fab fa-spotify"></i>
                        </a>
                    </li>
                    <li class="ph">
                        <a href="https://www.instagram.com/aaron_shrike/" target="_blank">
                            PH
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCqyvIqXIRJrecMb2xUtlFow" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/gorgorymusic/" target="_blank">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="logo-footer">
                <a href="index.php">
                    <img src="img/logo-rostro.png"/>
                </a>
            </div>
        </div>
        <div class="copy">
            <p>&copy 2021, Gorgory <small>by</small> <a href="https://www.instagram.com/aaron_shrike/" target="_blank">Sh</a></p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="https://checkout.culqi.com/js/v3"></script>
    <script src="js/main.js"></script>
</body>
</html>
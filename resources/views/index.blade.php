<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title>Landing-1</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
</head>
<body>
    <div class="contain">
        
        <div class="main__intro">
            <div class="box-contain">
                <div class="intro__text">Un like es un seguidor<br><span class="intro__span-1">un lead es un</span><br><span class="intro__span-2">cliente potencial</span></div>
                <div class="intro__question">¿Qué prefieres para tu marca?</div>
                <img src="{{ asset('img/intro-img.png') }}" alt="">
            </div>
        </div>
        <div class="main__form">
            <div class="box-contain">
                <form class="form" action="#">
                    <h2 class="form__title">¡Contáctanos</h2>
                    <h4 class="form__text">e inicia las conversiones<br> en tus plataformas digitales!</h4>
                        <input  class="form__input" type="text" placeholder="Tú nombre" required> <br>
                        <input  class="form__input" type="text" placeholder="Nombre de tu empresa" required><br>
                        <input  class="form__input" type="email" placeholder="Email" required><br>
                        <input  class="form__input" type="number" placeholder="Teléfono de contacto" required><br>
                        <textarea name="cotizacion" id="" cols="30" rows="10" placeholder="¿Qué necesitas cotizar?" required></textarea><br>
                        <div class="box-declarations">
                            <div class="declaration">
                            <input type="checkbox" name="check" id="check" required/>
                            <label for="check"><p class="declaration__text">Declaras que aceptas de manera previa, expresa e informada que el tratamiento de tus datos personales se realice de acuerdo a nuestra política de privacidad que puedes consultar <a href="{{url('https://xignacv.com/terminos')}}">aquí</a></p></label>
                            </div>
                        </div>
                        <br>
                        <button type="submit">Enviar</button>
                </form>
            </div>
        </div>
        <div class="main__info"> 
            <div class="box-contain">
                <a href="https://xignacv.com">   
                    <div class="info__logo">
                        <img src="{{ asset('img/lg_xigna.png') }}" alt="">
                    </div>
                </a>
                <a href="https://www.facebook.com/XignaCV">
                    <div class="info__network">
                        <div class="social">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                    </div>
                </a>
                <div class="info__phones">
                    <a href="#">
                        <span>Cel:3128518887</span>
                    </a><br>
                    <span>Tel:3951604</span>
                </div>
                <div class="info__copy">
                    <p>Xigna 2018. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>    
        <nav class="up">
            <a href="#intro">
                <i class="fas fa-angle-up"></i>
            </a>
        </nav>
       
    </div>
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/scroll.js')}}"></script>
</body>
</html>
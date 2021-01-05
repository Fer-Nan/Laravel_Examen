<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #FFFACD;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
 
            <div class="content">
            <img src="{{asset('https://reinspirit.com/wp-content/uploads/2016/09/james.jpg')}}"  width="300" height="200">
                <div class="title m-b-md">
                    VENTA DE ZAPATOS
                </div>

                <div class="links">
                    <a href="https://www.revistagq.com/moda/relojes-y-accesorios/articulos/zapatillas-basicas-para-hombre-moda-tendencias/27755"> Hombres</a>
                    <a href="https://www.pinterest.com/edujust86/zapatillas-de-mujer/">Mujeres</a>
                    <a href="https://co.pinterest.com/mariacmunoz5/zapatos-deni%C3%B1o/"> Niños</a>
                    <a href="https://goo.gl/maps/UCMiSHzZopPWKQVSA/">Ubicacion</a>
                    <a href="https://www.deichmann.com/ES/es/shop/deportes/deportes-zapatos.cat">Deportes</a>
                    <a href="https://www.deichmann.com/ES/es/shop/marcas-de-zapatos.cat">Marcas</a>
                    <a href="https://www.deichmann.com/ES/es/shop/rebajas.cat?filter-sale=true">Ofertas</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>

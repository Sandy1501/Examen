@extends('layout.plantilla');
@section('titulo','Laravel')
@section('contenido')

<header class="container-fluid">
    <div class="row" style="height: 450px; background: -webkit-radial-gradient(#ffa372, #ff6c3e, #b10005);">
        <div class="col-12 align-self-center text-center">
            <img src="{{ asset('img/codigo.jpg')}}" class="img-fliud" width="500"  alt="500">
                <h1 class="mt-4">"Aprendamos juntos laravel 8 paso a paso"</h1>
                <h4>Men Backend</h4>
        </div>
    </div>
</header>

<div class="container mt-3" style="background-color: black">
    <div class="row">
        <div class="col-sm-12 mt-4">
            <h4 class="display-4 text-white text-center">¿Qué es?</h4>
                <p class="text-white text-justify">Laravel es el nombre de uno de los frameworks de desarrollo web PHP más populares. 
                    Se destaca por ser simple, intuitivo y poseer una sintaxis elegante.
                    El cuidado con la calidad del código es uno de los principales pilares de su arquitectura. Esto es incluso lo 
                    que lo hace equivalente al trabajo de un artesano por su comunidad de usuarios. De ahí viene el eslogan 
                    “el framework PHP para artesanos de la web”, muy utilizado para describirlo.
                </p>
            <br>
            <h3 class="display-5 text-white">Conozcamos un poco de su historia...</h3>
            <br>
            <p class="text-white text-justify">Laravel fue creado por Taylor Otwell en 2011, pero solo en 2014 comenzó a atraer la atención de los desarrolladores. Eso porque este mismo año el framework fue rediseñado.
                Taylor decidió reescribirlo completamente, distribuyendo sus diversos componentes a través del Composer y reutilizando paquetes de terceros en el proyecto. El punto más destacado es el uso de componentes de Symfony, otro framework de PHP muy conocido.
                Esta repaginación fue una decisión inteligente. Al utilizar paquetes de terceros, no se pierde tiempo en crear lo que ya está en el mercado. Incluso, esta estrategia funciona bien con muchas tecnologías, porque optimiza el trabajo de todos.
                Con esto, fue posible centrarse en áreas más cruciales, lo que acabaría dando a Laravel la identidad que tiene hoy.</p>
            <br>
            <h3 class="display-5 text-white">¿Cómo es la estructura de laravel?</h3>
            <br>
            <p class="text-white text-justify">Como la mayoría de los frameworks PHP, Laravel también tiene su estructura basada en el estándar MVC. Es un patrón de arquitectura que divide la aplicación en 3 capas:
                <br>
                    -> M de model: Representa la capa de la base de datos.
                <br>
                    -> V de view: Representa la capa de presentación, visible para los usuarios.
                <br>
                    -> C de controller: Es básicamente la lógica que tendrá tu aplicación con la base de datos y la información que envía el usuario..
                <br>
                Además de la arquitectura MVC, Laravel facilita y acelera el desarrollo de aplicaciones. Aporta muchas soluciones ya preparadas, fáciles de configurar y adaptar a los problemas que todos los desarrolladores web sufren en el proceso de creación, entre ellas:
                <br>
                * Ruta.
                <br>
                * Autentificación.
                <br>
                * Permiso.
                <br>
                * Control de secciones.
                <br>
                * Manipulación de la base de datos.
                <br>
                * Validación.
                <br>
                Es decir, Laravel es un poderoso framework lleno de soluciones que te librarán de muchos dolores de cabeza.
                <br>
            </p>
        </div>
    </div>
</div>
    
@endsection

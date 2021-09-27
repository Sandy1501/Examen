@extends('layout.plantilla');
@section('titulo','Vistas con blade')
@section('contenido')

<div class="container" style="background-color: black">
    <div class="row mt-4">
        <div class="col">
            <br>
            <h2 class="text-white text-center">¿Qué es una ruta?</h2>
            <br>
            <p class="text-white text-justify">Las rutas en Laravel son el componente más importantes y poderoso del 
                Framework, se encarga de manejar el flujo de solicitudes HTTP, desde y hacia el cliente; las peticiones realizadas 
                por el navegador son en lo general get, post, put, delete, patch de HTTP hacia una URL concreta.<br></p>
            <br>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Nomeclatura de una ruta</h3>
            </p>
            <p class="text-white text-justify">
                Para poder crear una ruta, de la clase Route mandamos a llamar esteticamente alguno de los verbos http permidos como son:
            <br>
            Get
            <br>
            Post
            <br>
            Put
            </p>
            <br>
            <img src="{{asset('img/rutas.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h4 class="text-white text-center">Rutas con vistas</h4>
            </p>
            <p class="text-white text-justify">
                El método view acepta una URI como primer parámetro y un nombre de vista como segundo. 
                Además, se le puede pasar un array de datos a la vista como tercer parámetro opcional: 
            </p>
            <br>
            <br>
            <br>
            <img src="{{asset('img/rutas2.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Rutas con parametros</h3>
            </p>
            <p class="text-white text-justify">
                Los parámetros de ruta se definen siempre dentro de llaves {} y deben contener únicamente caracteres alfabéticos 
                y nunca contener - (guiones). Instead of using the - character, use an underscore (_). Los parámetros de rutas 
                se inyectan directamente en los callback/controladores en orden – los nombres de los argumentos no afectan.  
            </p>
            <br>
            <img src="{{asset('img/rutas3.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Ejemplo de rutas</h3>
            </p>
            <p class="text-white text-justify">
                En la imagen se puede observar de que manera se hace la referencia con ayuda de las rutas para cada una de las vistas 
                creadas en la pagina.   
            </p>
            <br>
            <br>
            <br>
            <br>
            <img src="{{asset('img/ruta4.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
    </div>
    <br>
    <br>
    <br>
</div>

@endsection
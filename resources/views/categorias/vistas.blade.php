@extends('layout.plantilla');
@section('titulo','Vistas')
@section('contenido')

<div class="container" style="background-color: black">
    <div class="row mt-4">
        <div class="col">
            <br>
            <h2 class="text-white text-center">¿Qué es una vista?</h2>
            <br>
            <p class="text-white text-justify">Laravel nos permite separar las vistas de presentación al usuario final de la lógica de la aplicación, las vistas pueden contener código HTML, CSS y PHP.</p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-sm-6">
            <br>
            <p>
            <h3 class="text-white text-center">Carpeta resources</h3>
            </p>
            <p class="text-white text-justify">
                En la carpeta de resources, podemos encontrar una carpeta llamada views en la cual se situaran
                todas las vistas que nosotros queramos crear, o más bien todas aquellas vistas que nuestra pagina necesite, en 
                primer instancia encontramos una vista por defecto la cual pertenece a la vista principal de nuestro laravel, 
                es decir la vista que muestra una vez que cargamos la pagina.                          
            </p>
            <br>
            <img src="{{asset('img/resources.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
        <div class="col-sm-6">
            <br>
            <p>
            <h3 class="text-white text-center">Creacion de una nueva vista</h3>
            </p>
            <p class="text-white text-justify">
                    1. Nos dirigimos al path de vistas que esta en: resources/views.
                <br>
                    2. Creamos un archivo nuevo con la extension blade y php de la siguiente manera: nuevavista.blade.php
                <br>
                    Blade: Es un motor de plantilla de laravel, el cual sirve para poder extender estilos y plantillas, a pesar de que nos 
                    se ocupa una herencia se recomienda que se use blade en la vista creada.   
            </p>
            <br>
            <img src="{{asset('img/vista2.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Vistas multiples</h3>
            </p>
            <p class="text-white text-justify">
                Existe la manera de poder asociar multiples vistas, en una sola ruta y para eso ocuparemos las siguientes lineas de comnado
                la cual indica que estamos haciendo la referencia hacia dos vistas a la misma vez.
            </p>
            <br>
            <br>
            <img src="{{asset('img/vista3.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Pasar la informacion a una vista</h3>
            </p>
            <p class="text-white text-justify">
                Ahora bien en la imagen podemos observar la manera correcta en la que podemos enviar información a una vista con la 
                ayuda de parametros, es muy importate ya tener creadas la vista en donde se van a mostrar los resultados.
            </p>
            <br>
            <img src="{{asset('img/vista4.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
    </div>
    <br>
    <br>
    <br>
</div>

@endsection
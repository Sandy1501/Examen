@extends('layout.plantilla');
@section('titulo','Controladores')
@section('contenido')

<div class="container" style="background-color: black">
    <div class="row mt-4">
        <div class="col">
            <br>
            <h2 class="text-white text-center">¿Qué es un controlador?</h2>
            <br>
            <p class="text-white text-justify text-center">Son un mecanismo que nos permite agrupar la lógica de peticiones HTTP relacionadas y de esta forma organizar mejor nuestro código.<br></p>
            <br>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Creacion de controladores</h3>
            </p>
            <p class="text-white text-justify">
                Para esto tenemos que abrir la terminal en nustro visual estudio, una vez abirto vamos a escribir el siguiente comando:
                php artisan make:controller InicioController una vez que le damos enter veremos que en nuestra carpeta de controladores 
                se agrego este nuevo controlador.   
            </p>
            <img src="{{asset('img/controlador1.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Trabajar con controladores</h3>
            </p>
            <p class="text-white text-justify">
                Para poder crear nuestro controlador existe un constructor llamado invoke el cual te permite poder retornar la vista principal 
                de nuestra pagina   
            </p>
            <br>
            <br>
            <img src="{{asset('img/controladores2.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Asociar controladores</h3>
            </p>
            <p class="text-white text-justify">
                Nos dirigimos al archivo web.php y en el nombre de la ruta queda igual, en el vamos a andar a trear a la clase, una vez que mostros
                agregamos el nombre del controlador visual estudio te brinda una ayuda la cual consta en que te hace la referencia especifica, 
                para poder saber hacia que controlador lo estas referenciando.  
            </p>
            <br>
            <br>
            <img src="{{asset('img/controladores3.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Asociar controladores con las vistas</h3>
            </p>
            <p class="text-white text-justify">
                   Para poder hacer la refencia, lo primero que tenemos que hacer es crear el controlador de las categorias para eso ocuparemos 
                   el siguiente comando: php artisan make:controller CategoriasController , posteriormente hacemos la refencia en el 
                   archivo web.php para que de esta manera podamos asociar las vistas a un controlador y de esta manera se observen
                   los cambios en la pagina.   
            </p>
            <br>
            <img src="{{asset('img/controladores4.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
    </div>
    <br>
    <br>
    <br>
</div>

@endsection
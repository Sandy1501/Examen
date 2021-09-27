@extends('layout.plantilla');
@section('titulo','Instalacion')
@section('contenido')

<div class="container" style="background-color: black">
    <div class="row mt-4">
        <div class="col">
            <br>
            <h2 class="text-white">¿Qué necesitamos tener?</h2>
            <br>
            <p class="text-white text-justify">Debemos de tener nuestro paquete de heramientas para poder instalar y posteriormente poder comenzar a trabajar.
                <br>
                    -- Tener instalado XAMPP.
                <br>
                    -- Tener instalado Git.
                <br>
                    -- Tener instalado composer.
                <br>
            </p>
            <br>
            <h3 class="display-5 text-white text-center">Comencemos la instalación</h3>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Descarga de xampp..</h3>
            </p>
                <p class="text-white text-justify">
                    1. Nos dirigimos hacia nuestro buscador y googleamos xamppp.
                <br>
                    2. Seleccionamos la opción de descarga.
                <br>
                    3. Seleccionamos tanto el sistema operativo, como el tamaño. 
                <br>
                    4. Esperemamos a que descarge.    
            </p>
            <br>
            <img src="{{asset('img/xampp1.png')}}" alt="" class="rounded mx-auto d-block" height="250xp" width="250xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Instalación de xampp..</h3>
            </p>
            <p class="text-white text-justify">
                    1. Nos dirigimos a nuestras descargas.
                <br>
                    2. Seleccionamos el archivo que se descargo.
                <br>
                    3. Damos paso a comenzar la instalacion. 
                <br>
                    4. Esperamos a que nos muestre la interfaz del xampp.   
            </p>
            <br>
            <img src="{{asset('img/xampp2.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Descarga de Git</h3>
            </p>
            <p class="text-white text-justify">
                    1. Nos dirigimos a nuestro buscador y googleamos a git.
                <br>
                    2. Seleccionamos la opcion de descarga.
                <br>
                    3. Seleccionamos tanto el sistema operativo, como el tamaño. 
                <br>
                    4. Esperemamos a que descarge.    
            </p>
            <br>
            <img src="{{asset('img/git.png')}}" alt="" class="rounded mx-auto d-block" height="180xp" width="250xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Instalación de Git</h3>
            </p>
            <p class="text-white text-justify">
                    1. Nos dirigimos a nuestras descargas.
                <br>
                    2. Seleccionamos el archivo que se descargo.
                <br>
                    3. Damos paso a comenzar la instalacion. 
                <br>
                    4. Esperamos a que nos muestre la interfaz del git.   
            </p>
            <br>
            <img src="{{asset('img/cmd.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
                <h3 class="text-white text-center">Desgarga de composer</h3>
            </p>
            <p class="text-white text-justify">
                    1. Escribimos en el navegador composer, damos clic en donde indica composer y entramos a getcomposer.org.
                <br>
                    2. Seleccionamos la opcion de descarga.
                <br>
                    3. Una vez que entramos a la pagina damo clic en donde dice composer-setup.exe. 
                <br>
                    4. Esperemamos a que descarge.    
            </p>
            <br>
            <img src="{{asset('img/composer.gif')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="250xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Instalacion de composer</h3>
            </p>
            <p class="text-white text-justify">
                    1. Nos dirigimos a nuestras descargas.
                <br>
                    2. Seleccionamos el archivo que se descargo.
                <br>
                    3. Damos paso a comenzar la instalacion. 
                <br>
                    4. Esperamos a que nos muestre la interfaz del git.   
            </p>
            <br>
            <br>
            <br>
            <img src="{{asset('img/comp.jpg')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
                <h3 class="text-white text-center">Comprobar la intalacion de composer</h3>
            </p>
            <p class="text-white text-justify">
                Abrimos una nueva terminal y escribimos composer si esta bien intalado tiene que mostrar en letras grandes composer, 
                en seguida le damos enter una vez realizada esta tarea, nos dirigimos hacia el lugar donde se encuentra localizada nuestra
                carpeta de xampp, abrimos la carpeta de htdocs y dentro de ella creamos una nueva carpeta llamada Backend, dentro de ella
                agregamos una carpeta mas llamada unidad 1.
            </p>
            <br>
            <br>
            <img src="{{asset('img/terminal.png')}}" alt="" class="rounded mx-auto d-block" height="250xp" width="450xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Crear un nuevo proyecto en laravel</h3>
            </p>
            <p class="text-white text-justify">
                Para crear un nuvo proyecto seguimos la ruta especifica con la se crearon las carpeta en donde estara situado nuestro
                primer proyecto, una vez situados en esta ruta abrimos nuestra consola y escribiremos el siguiente comando: 
                composer create-project laravel/laravel practica1 de esta manera se comenzara a crear el nuevo proyecto, para comprobar 
                que si se creo el proyecto en la misma terminal escribimos php artisan serve y en seguida nos da la direccion.     
            </p>
            <br>
            <img src="{{asset('img/proyecto.png')}}" alt="" class="rounded mx-auto d-block" height="250xp" width="450xp">
        </div>
    </div>
    <br>
    <br>
    <br>
</div>

@endsection
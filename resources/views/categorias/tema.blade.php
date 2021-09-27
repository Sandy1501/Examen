@extends('layout.plantilla');
@section('titulo','Modelos y Eloquent ORM')
@section('contenido')

<div class="container" style="background-color: black">
    <div class="row mt-4">
        <div class="col">
            <br>
            <h2 class="text-white text-center">Modelos y Eloquent ORM</h2>
            <br>
            <p class="text-white text-justify"><br>
                Los modelos son uno de los componentes más importante de Laravel que  interactúa con nuestra base de datos para realizar 
                cualquier consulta sql, como mostrar, insertar, editar y  borrar.Laravel utiliza Eloquent ORM (Mapeo Objeto Relacional) 
                para manejar base de datos de una manera más sencilla; se corresponde una tabla es una clase modelo que interactúa con 
                ella y cada campo de la tabla corresponde a una instancia de la clase.
            </p>
            <br>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Crear un modelo</h3>
            </p>
            <p class="text-white text-justify">
                Para crear un modelo utilizaremos Artisan, el modelo debe llevar el mismo nombre que nuestra tabla en la base de datos 
                en singular y la primera letra en mayúscula, en nuestro ejemplo crearemos el modelo Alumno.
            <br>
                php artisan make:model Alumno
            </p>
            <br>
            <img src="{{asset('img/modelo1.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Creacion de registros</h3>
            </p>
            <p class="text-white text-justify">
                En la versión 8 de Laravel viene por defecto incluido el directorio models, que en las versiones anteriores no estaba 
                incluido, se guardaban directamente en el directorio app.El modelo también extiendo por defecto de Factory que nos permite 
                crear registros de prueba en nuestra base de datos.   
            </p>
            <img src="{{asset('img/modelo2.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-sm-12">
            <p>
            <h3 class="text-white text-center">Creacion de Eloquent ORM</h3>
            </p>
            <p class="text-white text-justify">
                1. Ahora introducimos código a nuestro modelo, la primera línea es  donde determinamos la tabla dónde está relacionada el modelo.
            <br>
            <br>
                2. La propiedad fillable es para visualizar los campos de la tabla en las consultas sql, la propiedad hidden en cambio son para ocultar los campos de la tabla en las consultas sql.
            <br>
            <br>
                3. La función “Obteneralumnos” utiliza el método all() para obtener todo el listado de los alumnos de la tabla.
            <br>
            <br>
                4. La función “ObtenerAlumnoPorId” utiliza el método find() pasando un parámetro Id para obtener a un determinado alumno.
            </p>
            <br>
            <br>
            <img src="{{asset('img/modelo3.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
    </div>
    <br>
    <br>
    <br>
</div>

@endsection
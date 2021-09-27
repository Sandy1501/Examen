@extends('layout.plantilla');
@section('titulo','Vistas con blade')
@section('contenido')

<div class="container" style="background-color: black">
    <div class="row mt-4">
        <div class="col">
            <br>
            <h2 class="text-white text-center">¿Qué es un vista con blade?</h2>
            <br>
            <p class="text-white text-justify">Laravel cuenta con plantillas Blade para introducir código PHP en nuestro código HTML de 
                una manera sencilla y segura, puedes crear y separar vistas en trozos de código que luego puedes aprovechar en distintas 
                vistas de la aplicación.<br></p>
            <br>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Creacion de plantillas</h3>
            </p>
            <p class="text-white text-justify">
                Existe una manera de poder evitar codigo, en las vistas de las paginas y es por ello que Blade también nos permite la 
                creación de layouts que nos permite crear una estructura HTML base con secciones que serán rellenadas por otras plantillas o vistas 
                hijas. Este layout puede ser utilizado para todas las pantallas de nuestro sitio web, lo que nos permite que en el resto de plantillas 
                no tengamos que repetir todo este código.
            </p>
            <br>
            <img src="{{asset('img/plantilla.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Creacion de vistas con blade</h3>
            </p>
            <p class="text-white text-justify">
                Lo que tenemos que hacer es crar una carpeta en de views, en mi caso yo la llamare categorias una ves creda agregaremos 
                un nuevo archivo el cual este va a contener todas nuestras vistas necesarias para nuestra pagina. 
            </p>
            <br>
            <br>
            <br>
            <br>
            <img src="{{asset('img/plantilla2.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Referencia de vistas con la plantilla</h3>
            </p>
            <p class="text-white text-justify">
                Para poder ver los cambios agrgar la plantilla echa para nuestras vistas lo unico que tenemos que hacer es escribir 
                los siguientes comandos y de esta manera estaremos reciclando lineas de codigo.  
            </p>
            <br>
            <br>
            <img src="{{asset('img/plantilla3.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
        <div class="col-sm-6">
            <p>
            <h3 class="text-white text-center">Asociar las vistas</h3>
            </p>
            <p class="text-white text-justify">
                Una vez que se hizo la referencia de plantilla, ahora pasaremos a hacer la asocion de las vistas es decir vamos agregar la ruta 
                especifica de nuestras bistas para que se pueden obserar los cambios echos con ayuda de nuestra plantilla, esta refencia estara 
                situada en el archiv web.php.   
            </p>
            <br>
            <img src="{{asset('img/plantilla4.png')}}" alt="" class="rounded mx-auto d-block" height="200xp" width="350xp">
        </div>
    </div>
    <br>
    <br>
    <br>
</div>

@endsection
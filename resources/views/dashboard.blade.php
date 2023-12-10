<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/estilos2.css">
    <title>Tienda</title>
</head>
<body class="main">
    <x-app-layout> 
        <br>           
        <div class="contenedor"> 
                <br>
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Welcome to the Store') }} 
                </h1>
                <br>
                <h2>{{ __("You're logged in!") }}</h2>
                <br>     
            <div class="image">
                <div class="parrafo1">
                    <h2>Administre su negocio</h2>
                    <p>Desde esta pagina puede administrar su negocio infresando toda la informacion referente a el.</p>         
                </div>
            <img id="ImagenTienda" src="imagenes/Tienda.png" alt="Logo CECEP" width="300">  
                <div class="parrafo2">
                    <h2>Modernice su negocio</h2>                        
                    <p>Controle ingresos, egresos y ventas en este sitio el cual llevara todas sus cuentas por usted.</p> 
                </div>                                 
            </div>           
                <div class="productos">                
                    <img src="imagenes/carne.png" alt="" id="carne">
                    <img src="imagenes/Lacteos2.png" alt="" id="carne">
                    <img src="imagenes/Legumbres.png" alt="" id="carne">                                  
            </div>
       </div>      
       <div id="slogan"><h3>¡Esta es tu tienda!</h3></div> 
    </x-app-layout>   
    
</body>
</html>

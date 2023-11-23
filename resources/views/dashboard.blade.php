<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/estilos2.css">
    <title>Tienda</title>
</head>
<body class="dash">

    <x-app-layout>            
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Tienda') }}
                </h2>
            </x-slot>
       
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>

        <div class="image">
          <h2><img src="imagenes/Tienda.png" alt="Logo CECEP" width="100"> </h2>   
        </div>
    </x-app-layout>
    
</body>
</html>

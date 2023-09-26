<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listado de productos</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ $css }}">

    </head>
    <body>
        <div style="height: 100vh; background: linear-gradient(to bottom, #013253, #010846);">
            <section class="intro my-auto h-100">
                <div class="gradient-custom-1 h-100">
                    <div class="mask d-flex align-items-center h-100">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="table-responsive bg-white">
                                        <div style="display: flex; justify-content: center;">
                                            <h1 class="titulo">Productos</h1>
                                        </div>  
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">NOMBRE</th>
                                                <th scope="col">PRECIO</th>
                                                <th scope="col">MARCA</th>
                                                <th scope="col">UNIDADES</th>
                                                <th scope="col">CATEGORÍA</th>
                                                <th scope="col">DESCRIPCIÓN</th>
                                                <th scope="col">CREATED_AT</th>
                                                <th scope="col">UPDATED_AT</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($productos as $producto)   
                                                    <tr>
                                                        <th scope="row" style="color: #666666;">{{ $producto->id }}</th>
                                                        <td><a href="{{route('producto.show',$producto)}}">{{ $producto->nombre }}</a></td>
                                                        <td>${{ $producto->precio }}</td>
                                                        <td>{{ $producto->marca }}</td>
                                                        <td>{{ $producto->unidades }}</td>
                                                        <td>{{ $producto->categoria }}</td>
                                                        <td>{{ $producto->descripcion }}</td>
                                                        <td>{{ $producto->created_at }}</td>
                                                        <td>{{ $producto->updated_at }}</td>
                                                        <td><a href="{{route('producto.edit',$producto)}}">EDITAR</a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
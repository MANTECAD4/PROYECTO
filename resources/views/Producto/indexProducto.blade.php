<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('tabla/css/owl.carousel.min.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('tabla/css/bootstrap.min.css')}}">
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('tabla/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('navbar/style.css')}}">

    <title>Tabla productos</title>
  </head>
  <body>

    <div class="content">
      <div class="container">
        <h2 class="mb-5">PRODUCTOS</h2>
        <div class="table-responsive">
          <table class="table table-striped custom-table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">PRECIO</th>
                <th scope="col">UNIDADES</th>
                <th scope="col">MARCA</th>
                <th scope="col">CATEGORÍA</th>
                <th scope="col">CREATED_AT</th>
                <th scope="col">UPDATED_AT</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>

                @foreach ($productos as $producto)   
                    <tr>
                        <td scope="row">{{ $producto->id }}</td>
                        <td>
                            <a class="more" href="{{route('producto.show',$producto)}}">
                                {{ $producto->nombre }}
                            </a>
                            <small class="d-block">{{ $producto->descripcion }}</small>
                        </td>
                        <td>${{ $producto->precio }}</td>
                        <td>{{ $producto->unidades }}</td>
                        <td>{{ $producto->marca }}</td>                        
                        <td>{{ $producto->categoria }}</td>
                        <td>{{ $producto->created_at }}</td>
                        <td>{{ $producto->updated_at }}</td>
                        <td><a href="{{route('producto.edit',$producto)}} " class="more">EDITAR</a></td>
                        <td>
                          <form action="{{route('producto.destroy',$producto)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="more2" >ELIMINAR</button>
                          </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
          <div class="text-center">
            <a href="{{route('producto.create')}}" class="btn  btn-lg shadow-sm" style="background-color: #013253; color:beige">Nuevo producto</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<!--https://mdbootstrap.com/docs/standard/forms/search-->

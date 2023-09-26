<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario de Productos</title>
        <!-- Agrega los enlaces a los archivos CSS de Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    </head>
    <body>  
        <div class="bg-dark" style="height: 100vh; background: linear-gradient(to bottom, #013253, #010846);">
            <form action="/producto" method="POST" class="my-auto h-100">
                @csrf <!-- Agrega el token CSRF -->
                <div class="container h-100 my-auto">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col">
                            <div class="card card-registration my-4 p-4">
                                <div class="row g-0">
                                    <div class="col-xl-6 d-none d-xl-block">
                                    <img src="https://i.pinimg.com/564x/49/b3/a8/49b3a836a56f28cadbe2e171a42b5e2e.jpg"
                                        alt="Sample photo" class="img-fluid"
                                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card-body p-md-5 text-black">
                                            <h3 class="mb-5 text-uppercase">Registro Productos</h3>
                            
                                            <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                <input type="text" id="nombre" name="nombre" class="form-control form-control-lg" required/>
                                                <label class="form-label" for="nombre">Nombre</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                <input type="text" id="marca" name="marca" class="form-control form-control-lg" required />
                                                <label class="form-label" for="marca">Marca</label>
                                                </div>
                                            </div>
                                            </div>
                            
                                            <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                <input type="text" id="categoria" name="categoria" class="form-control form-control-lg" required/>
                                                <label class="form-label" for="categoria">Categoría</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                <input type="number" id="precio" name="precio" class="form-control form-control-lg" required/>
                                                <label class="form-label" for="precio">Precio</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                <input type="number" step="1" min="1" id="unidades" name="unidades" class="form-control form-control-lg" />
                                                <label class="form-label" for="unidades">Unidades existentes</label>
                                                </div>
                                            </div>
                                            </div>
                            
                                            <div class="form-outline mb-4">
                                                <textarea type="text" id="descripcion" name="descripcion" class="form-control form-control-lg" rows="4"></textarea>
                                                <label class="form-label" for="descripcion">Descripción</label>
                                            </div>

                                            <div class="d-flex justify-content-left pt-3">
                                                <!--<button type="button" class="btn btn-light btn-lg">Reset all</button> -->
                                                <button type=" submit" class="btn btn-warning btn-lg shadow-sm">Enviar formulario</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div> 
    </body>
</html>
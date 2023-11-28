<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Satisfaccion de requisitos
Como algunas de las funcionalidades estan algo escondidas, mencionare donde o bajo que condiciones se pueden encontrar.

- Restringir, permitir o modificar el comportamiento, opciones o acciones en función del tipo de usuario o condiciones (Gates, Policies, Middleware). - Use policies para indicar a que rutas pueden entrar los usuarios, ya que hay de tipo administrador, vendedor y cliente. Su rol es asignado por defecto al registrar cada uno de ellos en si respectivo formulario (admin - form default de jetstream, cliente - form de registro ruta raiz, vendedor form dar de alta empleado sistema de admin).

- Uno a muchos (1:m). - la relacion entre productos y categorias es de este tipo
- Muchos a muchos (m:n). - existe la relacion entre los productos y las ventas, esto para saber que productos pertenecen a que venta, ademas existe otra relacion de este tipo entre productos y empleados, la cual funciona como una especie de log para indicar que operaciones se han hecho sobre los productos (creacion, mod, eliminacion y restauracion). Ambas tienen datos adicionales en la tabla pivote.

- Envio de correo personalizado. - ademas del correo cuando se crea un usuario de tipo admin, tambien al hacer una compra en la interfaz del cliente se envia un correo con los detalles de dicha transaccion.

- extras - datos en tabla pivote, notificaciones al hacer operaciones de crud, reemplazo de archivos al modificar la imagen del producto.

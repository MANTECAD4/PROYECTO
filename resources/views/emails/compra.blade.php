<x-mail::message>
# Gracias por tu compra, {{$user->name}}!

Tu orden ha sido confirmada 😎🤩. Los detalles de tu compra son los siguientes:
<x-mail::table>
    | Producto                        | Unidades | Subtotal |
    | :------------------------------ | :------: | :------: |
    @foreach ($venta->productos as $producto_venta)
    | {{ $producto_venta->producto->name }} | {{ $producto_venta->cantidad }} | ${{ $producto_venta->subtotal }} |
    @endforeach
    |  |  |  |
    |                               | **Total** | ${{ $venta->total }} |
</x-mail::table>

Gracias c: ~ 
{{ config('app.name') }}
</x-mail::message>
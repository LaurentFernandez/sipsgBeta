<!DOCTYPE html>
<html>
<head>
    <title>{{ __('Alerta de Stock') }}</title>
</head>
<body>
    <p>{{ 'Los siguientes productos están a punto de quedarse sin stock: ' }}</p>
    @foreach ($listProducts as $product)
        <p>{{ __('Nombre del Producto: ' . $product->name ) }}</p>
        <p>{{ __('Stock Actual: ' . $product->quantity ) }}</p>
        <p>{{ __('Alerta Si Es Menor A: ' . $product->quantity_alert ) }}</p>
        <hr>
    @endforeach

</body>
</html>

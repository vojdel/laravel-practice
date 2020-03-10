<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varios</title>
</head>
<body>

@foreach ($info as $infoitem)

    @if ($infoitem->nombre == 'Dan')
        <hr>
        <p>{{$infoitem->id}} - {{$infoitem->nombre}} - {{$infoitem->descripcion}} : este es el usuario</p>
    @else
        <p>{{$infoitem->id}} - {{$infoitem->nombre}} - {{$infoitem->descripcion}}</p>
    @endif

    @empty($infoitem->descripcion)
        <p>La descripción esta en blanco</p>
    @endempty

@endforeach
    
</body>
</html>
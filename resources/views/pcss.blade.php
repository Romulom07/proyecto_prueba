<!DOCTYPE html>
<html>
<head>
	<title>Cafeteria</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
</head>
<body> 
@include('layouts.menu')

 @for ($i = 0; $i < 5; $i++)
    The current value is {{ $i }}
        <p> {{ $animales[$i] }} </p>
@endfor

@if ($edad >= 18)
    <p>Eres un adulto puedes entrar.</p>
@else
    <p>Eres un niño no estás autorizado</p>
@endif

<h1>{{ $titulo }}</h1>
<img src="https://www.consumoteca.com/wp-content/uploads/Restaurante-cafeter%C3%ADa.jpeg" >
<img src="https://www.elindependiente.com/wp-content/uploads/2019/07/cafeteriasantader.jpg" >	
    <footer>
        <h3>Romulo Martinez Todo los derechos reservados 2021</h3>
    </footer>
</body>
</html>
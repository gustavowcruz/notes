<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    @extends('layout.main_layout')
    @section('content')
        <h1>Wellcome!</h1>
        <hr>
        <h3>O valor é {{$valor=3}}</h3>
    @endsection

    {{-- vantagem: passar todos os comandos/códigos para as views com o memso layout  --}}
</body>
</html>

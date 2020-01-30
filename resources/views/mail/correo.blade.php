<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CORREO</title>
</head>
<body>
    {!! Form::open(['url' => 'mail', "method"=>"post"]) !!}
    {!! Form::token() !!}
    {!! Form::label("name", "Nombre", [null]) !!}<br>
    {!! Form::text("name", null, [null]) !!} <br>
    {!! Form::label("email", "Email", [null]) !!}<br>
    {!! Form::email("email", null, [null]) !!} <br>
    {!! Form::label("subject", "Asunto", [null]) !!}<br>
    {!! Form::text("subject", null, [null]) !!} <br>
    {!! Form::label("content", "Contenido", [null]) !!}<br>
    {!! Form::textarea("content", null, [null]) !!}<br>
    {!! Form::submit("Enviado", [null]) !!}
    {!! Form::close() !!}
<br>
    {!! Form::open(['url' => 'verifimail', "method"=>"post"]) !!}
    {!! Form::token() !!}
    {!! Form::label("mail", "Verificación Correo", [null]) !!}<br>
    {!! Form::email("usermail", null, ["placeholder"=>"Email Address"]) !!} <br>
    {!! Form::submit("Enviado", [null]) !!}
    {!! Form::close() !!}
</body>
</html>

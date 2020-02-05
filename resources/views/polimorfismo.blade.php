
{!! Form::open(["route"=>['polimorfismo.store'],"method"=>"post","class"=>"card"]) !!}
{!! Form::token() !!}
{{-- {!! Form::label("name", "Post", ["class"=>"label label-info"]) !!}
{!! Form::text("name", null, ["class"=>"form-control"]) !!}<br> --}}
{!! Form::label("url", "URL", ["class"=>"label label-danger"]) !!}
{!! Form::text("url", null, ["class"=>"form-control"]) !!}<br>
{!! Form::submit("Enviar", ["class"=>"btn btn-success"]) !!}
{!! Form::close() !!}

<br>
<table border="3">
    <figcaption>WELCOME</figcaption>
    <thead>
        <tr>
            <th>nombre</th>
            <th>url</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>{{$post->name}}</td>
            <td>{{@$post->image->url}}</td>
        </tr>
    </tbody>
</table>

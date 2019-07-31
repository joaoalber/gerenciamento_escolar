<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <form method="POST" action="{{url('/')}}">

        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        
        <label for="email">E-mail</label>
        <input type="text" name="email"><br>

        <label for="data_nascimento">Data de Nascimento</label>
        <input type="text" name="data_nascimento"><br>


        <input type="submit" value="Enviar">

        <select name="nivel_id">
            @foreach ($niveis as $nivel)
                <option value="{{$nivel->id}}">{{$nivel->nome}}</option>
            @endforeach
        </select>

    </form>
    
</body>
</html>
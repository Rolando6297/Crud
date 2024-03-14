<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hola ,undo crate</h1>
    <form action="{{route('post.store')}}" method="post">
        @csrf
            <label for="">Titulo</label>
            <input type="text" name="title" id="">
            <label for="">Slug</label>
            <input type="text" name="slug" id="">
            <label for="">Contenido</label>
            <textarea type="text" name="content" id=""></textarea>

  


            <button type="submit">Enviar</button>
    </form>
</body>
</html>
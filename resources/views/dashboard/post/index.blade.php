@extends('dashboard.layout')

@section('content')
    <a href="{{route("post.create")}}">Crear Nuevo</a>
   <table>
    <thead>
    <tr>
        <th>
            Titulo
        </th>
        <th>
            Categoria
        </th>
        <th>
            Posted
        </th>
        <th>
            Acciones
        </th>
      
    </tr>
    </thead>
    <tbody>
        @foreach ($posts as $p)
        <tr>
            <td>
                {{$p->title}}
            </td>
            <td>
                {{$p->category->title}}
            </td>
            <td>
                {{$p->posted}}
            </td>
            <td>
                <div>
                <form action="{{route("post.edit", $p)}}" method="post">
                    @method("GET")
                    @csrf
                    <button class="btn" type="submit">Editar</button>
                </form>
                <form action="{{route("post.show", $p)}}" method="post">
                    @method("GET")
                    @csrf
                    <button class="btn" type="submit">Ver</button>
                </form>
                <form action="{{route("post.destroy", $p)}}" method="post">
                    @method("DELETE")
                    @csrf
                    <button class="btn" type="submit">Borrar</button>
                </form>
            </div>
        
            </td>
          
        </tr>
        @endforeach
    </tbody>
   </table>
   {{$posts->links()}}
@endsection
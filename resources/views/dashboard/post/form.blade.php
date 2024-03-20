@csrf
<label for="">Titulo</label>
<input type="text" name="title" id="" value="{{ old('title', $post->title) }}">
<label for="">Slug</label>
<input type="text" name="slug" id="" value="{{ old('slug', $post->slug) }}">
<label for="">Categoria</label>
<select name="category_id">
    <option value=""></option>
    @foreach ($categories as $title => $id)
        <option {{ old('category_id', $post->category_id) == $id ? 'selected' : '' }} value="{{ $id }}">
            {{ $title }}</option>
    @endforeach
</select>
<label for="">Posteado</label>
<select name="posted">

    <option {{ old('posted', $post->posted) == 'not' ? 'selected' : '' }} value="not">No</option>
    <option {{ old('posted', $post->posted) == 'yes' ? 'selected' : '' }} value="yes">Si</option>
</select>

<label for="">Contenido</label>
<textarea type="text" name="content" id="">{{ old('content', $post->content) }}</textarea>

@if (isset($task) && $task == 'edit')
    <label for="">Imagen</label>
    <input type="file" name="image" id="">
@endif




<button type="submit">Enviar</button>

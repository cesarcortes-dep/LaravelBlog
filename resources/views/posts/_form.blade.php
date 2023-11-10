@csrf


<label class="uppercase text-xs">Titulo</label>
<span class="text-xs text-red-600">@error ('title'){{$message}} @enderror</span>
<input type="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('title', $post->title)}}">

<label class="uppercase text-xs">Slug</label>
<span class="text-xs text-red-600">@error ('slug'){{$message}} @enderror</span>
<input type="text" name="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('slug', $post->slug)}}">




<label class="uppercase text-xs">Contenido</label>
<span class="text-xs text-red-600">@error ('body'){{$message}} @enderror</span>
<textarea name="body" rows="5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
{{old('body', $post->body)}} </textarea>

<div class="flex justify-between items-center">
    <a href="{{route('posts.index')}}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="bg-gray-500 text-white rounded px-4 py-2">
</div>
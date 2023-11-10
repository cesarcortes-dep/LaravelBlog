@extends('template')


@section('content')
<div  class="bg-blue-700 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
    <span class="text-xs uppercase text-gray-700 bg-gray-1000 rounded-full px-2 py-1">Pogramacion</span>
    <h1 class="text-3xl text-white mt-4">Blog</h1>
    <p class="text-sm text-gray-400 mt-2">Proyecto WEB para profesionales</p>
    <img src="{{asset('images/dev.png')}}" class="absolute -right-5 -top-20 opacity-20">
</div>

<div class="px4">
    <h1 class="text-2xl mb-8 text-gray-800">Contenido tecnico</h1>
    <div class="grid grid-cols-1 gap-4 mb-4">
        @foreach($posts as $post)
        <a href="{{route('post', $post->slug)}}" class="bg-gray-100 rounded-lg px-6 py-4">
            <p class="text-xl flex items-center gap-2">
                <span class="uppercase text-gray-700 bg-gray-400 rounded-full px-2 py-1">Tutorial</span>
                <span>{{$post->created_at->format('d/m/Y')}}</span>
            </p>
            <h2 class="text-lg text-gray-900 mt-2">{{ $post->title}}</h2>
        </a>
        @endforeach
    </div>

    {{$posts->links()}}
</div>
@endsection
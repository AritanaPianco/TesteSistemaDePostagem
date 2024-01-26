@extends('layouts.main')

@section('title', 'Posts')

@section('content')

<div class="w-full flex flex-col items-center">

    @if(count($posts) === 0)
       <h2 class="mt-10 mb-10 font-bold text-xl uppercase">Não há postagens</h2>           
    @elseif(count($posts) > 0)
       <h2 class="mt-10 mb-10 font-bold text-xl uppercase">Postagens</h2>    
    @endif
    
    <div class="w-full max-w-5xl grid grid-cols-1 md:grid-cols-2 gap-5 py-10">

      @foreach($posts as $post)
        <article class="w-full bg-sky-300 flex flex-col gap-2 rounded py-5 px-2 shadow-md">
             <!-- title -->
            <div class="w-full flex flex-col px-4 py-2 gap-4">

                <div class="w-full bg-sky-200 px-4 py-2">
                    <h3 class="font-bold text-lg">{{$post->title}}</h3>                   
                </div>
                
                <!-- descricao -->
                <div>
                    <p class="font-medium text-base">{{$post->description}}</p>  
                </div>
                
                <!-- autor e data -->
                <div class="flex justify-between">
                    <span class="font-medium">
                        autor: {{$post->author}}    
                    </span>
                    <span>
                        {{date('d/m/Y', strtotime($post->created_at))}} 
                    </span> 
                </div>                  
                
                <form class="flex"  action="/posts/{{$post->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" value="{{$post->id}}">
                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">
                        Deletar
                    </button> 
                </form>  
            </div> 
            </article>
     @endforeach 

    </div>

</div>  



@endsection

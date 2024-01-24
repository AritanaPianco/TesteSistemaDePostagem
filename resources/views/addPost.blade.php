@extends('layouts.main')

@section('title', 'New Post')

@section('content')


 <div id="tudo" class="w-full flex justify-center items-center bg-sky-200 min-h-screen">
     
     <div class="w-full max-w-5xl flex flex-col gap-2">

         <form class="flex flex-col gap-2" action="/postar" method="POST">
                @csrf
                <label class="font-bold">Titulo:</label>  
                <input class="border-0" type="text" name="title" placeholder="digite o titulo">
                 
                 <label class="font-bold">Descrição:</label> 
                <textarea class="border-0" name="description" cols="30" rows="10" placeholder="digite o conteúdo"></textarea>
                
                 <label class="font-bold">Autor:</label> 
                 <input  class="border-0" type="text" name="author" placeholder="nome do autor..">

                 <button class="bg-blue-400 w-full mt-4 font-lg font-bold py-2 outline outline-white" type="submit">Adicionar</button>
         </form> 
             
     </div>

 </div> 



@endsection
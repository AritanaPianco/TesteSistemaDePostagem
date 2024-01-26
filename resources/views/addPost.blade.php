@extends('layouts.main')

@section('title', 'New Post')

@section('content')


 <div id="tudo" class="w-full flex justify-center items-center">
     
     <div class="w-full max-w-5xl flex flex-col gap-2 mt-10 px-10 py-7 bg-sky-200 rounded-md shadow-md"">

         <form class="flex flex-col gap-2" action="/post/create" method="POST">
                @csrf
                <label class="font-bold">Titulo:</label>  
                <input class="border-0 rounded-md" type="text" name="title" placeholder="digite o titulo">
                 
                 <label class="font-bold">Descrição:</label> 
                <textarea class="border-0 rounded-md" name="description" cols="30" rows="10" placeholder="digite o conteúdo"></textarea>
                
                 <label class="font-bold">Autor:</label> 
                 <input  class="border-0 rounded-md" type="text" name="author" placeholder="nome do autor..">

                 <button class="bg-blue-400 w-full mt-4 font-lg font-bold py-2 outline outline-white" type="submit">Adicionar</button>
         </form> 
             
     </div>

 </div> 



@endsection
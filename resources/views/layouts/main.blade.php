<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <!--adicionando Tailwind-->
    <script src="https://cdn.tailwindcss.com"></script> 
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> 

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
    
    <title>@yield('title')</title>

</head>
<body>
  
    
     <header class="w-full bg-blue-400 py-5 flex items-center justify-center">
         <div class="w-full flex max-w-7xl justify-between">
             <h2 class="font-bold text-lg tracking-wide uppercase">ProjetoPostagens</h2>
             
             <nav class="flex justify-evenly gap-10 font-medium text-slate-200 items-center uppercase">

                    @auth
                        <a href="/">Posts</a>
                        <a class="bg-sky-700 px-3 py-2 font-bold rounded-lg" href="/addpost">Criar Post</a>

                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" 
                            onclick="event.preventDefault();
                            this.closest('form').submit();"

                            >
                            Logout
                            </a>

                        </form>
                    @endauth
                        
                        
                    @guest
                        <a href="/login">Entrar</a>
                        <a href="/register">Cadastrar</a>             
                    @endguest            
            </nav>
         </div>
            
     </header>   
  
     @yield('content')


</body>
</html>
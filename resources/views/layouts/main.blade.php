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
             <h2 class="font-bold text-lg tracking-wide">ProjetoPostagens</h2>
             
             <nav class="flex justify-evenly font-medium text-slate-200">
                <a class="mr-10" href="/">Posts</a>              
                <a href="/addpost">Criar Post</a>              
            </nav>
         </div>
            
     </header>   
  
     @yield('content')


</body>
</html>
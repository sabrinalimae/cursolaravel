<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>
<body>


<nav class="navbar navbar-expand-lg bg-danger" data-bs-theme="dark">
  <div class="container-fluid">

    <!-- Links à esquerda -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
<li class=" dropdown">
<a href="" class=" nav-link active dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
          <ul class="dropdown-menu ">
          @foreach ($categoriasMenu as $categoriaM)
            <li><a class="dropdown-item" href="{{route('site.categoria', $categoriaM->id )}}">{{$categoriaM->nome}}</a></li>
          @endforeach
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    </div>

    <!-- Logo + botão centralizados -->
    <div class="d-flex position-absolute start-50 translate-middle-x">
      <a class="navbar-brand" href="#">CursoLaravel</a>
      <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" 
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
              aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

  </div>
</nav>



@yield('conteudo')

   
            
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>
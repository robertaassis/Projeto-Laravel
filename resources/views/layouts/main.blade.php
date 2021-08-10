<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title') </title>
        {{-- Fonte do googleapis --}}

        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        {{-- css bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        {{-- css do programa --}}
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
        <script src="{{asset('js/script.js')}}"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="{{route('home')}}" class="narvar-brand">
                        <img src="{{asset('img/hdcevents_logo.svg')}}" >
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('products')}}" class="nav-link">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('contact')}}" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('create')}}" class="nav-link">Criar evento</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')
      <footer> 
          <p>LARAVEL TESTE &copy; 2021</p>
      </footer>
    </body>
</html>

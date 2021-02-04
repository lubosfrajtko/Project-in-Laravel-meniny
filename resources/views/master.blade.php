<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Namedays</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Mrs+Saint+Delafield&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Miss+Fajardose&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">

    </head>
   <body>
        <div>
            <header class="header row">
                <div class="logo col-12 col-lg-7 text-lg-right">
                    <h1><a href="{{ url('/') }}">Nameday</a></h1>
                </div>
                <nav class="menu col-12 col-lg-5 text-lg-right">
                    <a href="{{ url('/') }}">Home</a>
                    <form autocomplete="off" action="{{ url('name')}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input id="myInput" name="name" class="search" type="text" id="myInput" placeholder="Search for names..">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </nav>
            </header>
            <main class="content">
                <div class="container">
                    @yield('content')
                </div>
            </main>
            <footer class="footer text-right">
                <a href=""> 2021. <span>Vytvoril Ľuboš Frajtko.</span></a>
            </footer>
        </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/09fb3fd06b.js" crossorigin="anonymous"></script>
        <script src="{{ URL::asset('js/script.js')}}"></script>
        <script>
            autocomplete(document.getElementById("myInput"), names);
        </script>

   </body>
</html>

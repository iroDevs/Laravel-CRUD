<!DOCTYPE html>
<html>
<head>
    <title>Localmente Local Games List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather-icons.min.css">


</head>
<body>
    
<header>
    <nav>
        <div class="nav-bar-toggle">
        <i data-feather="menu"></i>
        </div>
        <ul class="nav-bar-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#create">Criar</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#reason">Motivo</a></li>
        </ul>
    </nav>
</header>


    <main>
        @yield('content')
    </main>

    <footer>
        <!-- código para o rodapé -->
    </footer>
</body>
</html>

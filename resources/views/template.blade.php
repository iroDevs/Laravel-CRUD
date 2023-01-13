<!DOCTYPE html>
<html>
<head>
    <title>Localmente Local Games List</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>
<body>
    
<header>
    <nav>
        <div class="nav-bar-toggle">
        <i data-feather="menu"></i>
        </div>
        <ul class="nav-bar-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a  href="{{ route('criar') }}">Criar</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#reason">Motivo</a></li>
        </ul>
    </nav>
</header>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script>
      feather.replace()
    </script>

    <main>
        @yield('content')
    </main>
  
    <footer>
        <!-- código para o rodapé -->
    </footer>
</body>
</html>

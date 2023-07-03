<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('./css/navbar.css')}}">

</head>
<body class='body'>
    <nav class="una navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="text-white navbar-brand" href="{{route('welcome')}}">Unabomber</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="text-white nav-link active" aria-current="page" href="{{route('form')}}">Cadastro Lutador</a>
              </li>
              <li class="nav-item">
                <a class="text-white nav-link" href="{{route('login')}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="text-white nav-link" href="{{route('register')}}">Cadastra-se</a>
              </li>

              
              <li class='nav-item'>
              <a class='text-white  nav-link' href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </li>




              </li>
            </ul>
          </div>
        </div>
      </nav>
    
      @yield('content')
</body>
</html>
    



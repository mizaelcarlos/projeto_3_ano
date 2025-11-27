<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistema de controle Acadêmico')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   

    <style>
        body {
            display: flex;
            flex-direction: column;
        }

        footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 15px 0;
            border-top: 1px solid #dee2e6;
        }
    </style>
</head>
<body>

    <main>
        <div class="container">
            <div>
                @auth
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('settings') }}">Configurações</a>
                    </li>
                    <li class="nav-item ml-auto d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <span class="mr-2 font-weight-bold text-primary">{{ Auth::user()->name }}</span>
                            <form method="POST" action="{{ route('logout') }}" class="m-0">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link text-danger p-0" style="font-weight: 500;">
                                    Sair
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
                @endauth
            </div>
             @yield('content')
        </div>
    </main>

    <footer>
        <p>&copy; 2025 - Todos os direitos reservados</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

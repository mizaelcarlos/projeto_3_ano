<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
      font-family: "Segoe UI", sans-serif;
    }

    .login-container {
      max-width: 420px;
      margin: 80px auto;
      background: #fff;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #0d6efd;
      margin-bottom: 30px;
      font-weight: 600;
    }

    .form-label {
      font-weight: 500;
    }

    .btn-primary {
      background-color: #0d6efd;
      border-color: #0d6efd;
    }

    .btn-primary:hover {
      background-color: #0b5ed7;
    }

    footer {
      text-align: center;
      margin-top: 60px;
      color: #6c757d;
      font-size: 0.9rem;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="login-container">
      <h2>Login</h2>
      <form method="POST" action="{{ route('login') }}">
<x-guest-layout >
    <!-- Session Status -->
    <x-auth-session-status  class="mb-4" :status="session('status')" />

    <form  method="POST"  action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required autofocus>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Entrar</button>

        <div class="text-center mt-3">
          <a href="{{ route('password.request') }}" class="text-decoration-none text-primary">Esqueci minha senha</a>
        </div>
      </form>
    </div>

    <footer>
      © 2025 - Todos os direitos reservados
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





<!-- <x-guest-layout> -->
    <!-- Session Status -->
    <!-- <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf -->

        <!-- Email Address -->
<<<<<<< HEAD
        <!-- <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
=======
        <div>
            <x-input-label  for="email" :value="__('Email')" />
            <x-text-input  id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
>>>>>>> f6e56d9550cbaa8db0f09e9ad96715ac0892ae2e
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> -->

        <!-- Password -->
<<<<<<< HEAD
        <!-- <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
=======
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />
>>>>>>> f6e56d9550cbaa8db0f09e9ad96715ac0892ae2e

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div> -->

        <!-- Remember Me -->
        <!-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Sempre Lembrar') }}</span>
            </label>
        </div> -->

        <!-- <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Esqueceu sua senha?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Logar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> -->

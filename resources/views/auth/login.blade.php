<x-guest-layout>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: "Segoe UI", sans-serif;
        }

        .login-card {
            max-width: 420px;
            margin: 80px auto;
            background: #ffffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 0 12px #1b76ff7b;
        }

        .login-title {
            text-align: center;
            color: #0d6efd;
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .text-link {
            color: #0d6efd;
            text-decoration: none;
        }

        .text-link:hover {
            text-decoration: underline;
        }

        footer {
            text-align: center;
            margin-top: 60px;
            color: #6c757d;
            font-size: 0.9rem;
        }

        /* x-primary-button {
            background-color: #0d6efd ;
        } */
        .ms-3{
            background-color: #0d6efd 
        }
    </style>

    <div class="login-card">
        <h2 class="login-title">Login</h2>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email"
                              class="block mt-1 w-full"
                              type="email"
                              name="email"
                              :value="old('email')"
                              required
                              autofocus
                              autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

    
            <div class="mt-4">
                <x-input-label for="password" :value="__('Senha')" />
                <x-text-input id="password"
                              class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required
                              autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-between mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-link" href="{{ route('password.request') }}">
                        {{ __('Esqueci minha senha') }}
                    </a>
                @endif

                <x-primary-button class="ms-3">
                    {{ __('Entrar') }}
                </x-primary-button>
            </div>
        </form>
    </div>

    <footer>
        © 2025 - Todos os direitos reservados
    </footer>
</x-guest-layout>

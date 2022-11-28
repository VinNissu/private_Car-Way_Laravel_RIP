{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="pt-BR">

    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Login/Register Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
 
</head>

<body>
    
</body>
<div class="corpo"> <img src="imagens/logo.png" alt=""> 
    <div id="logreg-forms" >
        <form class="form-signin" >
            <h1 class="h3 mb-3 font-weight-normal fw-bold"style="text-align: center"> Entrar</h1>


            <input type="email" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">
            <input type="password" id="inputPassword" class="form-control mt-2" placeholder="Senha" required="">

            <button class="btn btn-success btn-block mt-2 colorbuton border-0" type="submit"><i
                    class="fas fa-sign-in-alt"></i> {{ __('Log in') }} </button>
                





        </form>

        <form action="/reset/password/" class="form-reset">
            <input type="email" id="resetEmail" class="form-control mt-3" placeholder="Email " required="" autofocus="">
            <button class="btn btn-primary btn-block" type="submit">Trocar a senha</button>
        </form>

        <hr>
        </form>
        <br>
        <div class="social-login">
            <h1 class="h3 mb-3 font-weight-normal fw-bold 2" style="text-align: center"> Entre com</h1>
            <button class="btn facebook-btn social-btn mt-1 border 2" type="button"><span><i
                        class="fab fa-facebook-f "></i> Login com Facebook</span> </button>
            <button class="btn google-btn social-btn mt-1 mb-3 border 10" type="button"><span><i
                        class="fab fa-google-plus-g"></i> Login com Google+</span> </button>

        </div>
        <hr>

        <button class="btn btn-white btn-block  colorbuton textcolor border-1" type="button">
            <a href="{{ route('cadastro')}}"><i class="fas fa-user-plus mb-3" id="textcolor">Criar uma nova conta</i></a>
            <hr class="hrpersonalizado">

        <a href="{{route ('feed')}}">Feed</a>
        </button>
    </div>

    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="/js/costumer.js"></script>

</div>


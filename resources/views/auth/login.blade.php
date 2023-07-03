<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('./css/login.css')}}">
    <link rel="stylesheet" href="{{asset('./css/navbar.css')}}">
        
</head>
<body class='ba'>
    <div>
        <div class="centralizar">
            <img src="{{asset('./img/logo.png')}}" class="logo">
            <div class="fundo" class="container">
                <a class='voltara' href="{{route('welcome')}}" ><h7 class='voltar'>Voltar</h7></a>

                <div>
                   
                </div>
                <div style="margin-top: 4rem;">
        
       
        
    
            <form method="POST" action="{{ route('register') }}">
                @csrf
        
                <!-- Email Address -->
                <div>


                    <br>
                    <br>

                    <h3>Email: </h3>
                    <x-text-input class="branco"  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>
        
                <!-- Password -->
                <div>
                    <h3>Senha: </h3>
                    <x-text-input  id="password" class="branco" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')"  />
                </div>
        
                <!-- Remember Me -->
                
                
                <div class="checkbox-wrapper-7" class='checkbox'>
                    <input class="tgl tgl-ios" id="cb2-7" type="checkbox"/> {{ __('Lembrar me') }}
                    <label class="tgl-btn" for="cb2-7">
                </div>
  

  <!-- Remember Me 
                    <label for="remember_me" >
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400"></span>
                    </label> -->
                
        
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <br>
        
                    <input class="azul" class="badge" type="submit" {{ __('Log in') }}>
                        
                </input>
                </div>
            </form>
    </div>
    
</body>
</html>
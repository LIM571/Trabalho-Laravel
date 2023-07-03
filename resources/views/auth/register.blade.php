<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadatrar-se</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Roboto&family=Roboto+Mono:wght@300&display=swap');
        
        
        
        
        .ba {
            background-color: #FFB515;
        }
        
        
        input {
            box-shadow: 2px 2px 4px rgb(255, 255, 255);
            box-shadow: none;
          }
         
        
        
        .fundo {
           
            width: 32rem;
            height: 44rem;
            background: #505153;
            border-radius: 1rem;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 41rem;
            padding-top: 1rem;
            padding-bottom: 2rem;
        }
        
        
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100rem;
        }
        
        
        .branco {
            margin-top: 3rem;
            box-sizing: border-box;
            height: 2.3rem;
            width: 24rem;
            margin-bottom: 2rem;
            background: #FBFBF8;
            border-radius: 0.7rem;
        }
        
        
        .azul {
            width: 8rem;
            height: 3rem;
            margin-top: 2rem;
            margin-left: 2rem;
            background-color: #005C8A;
            border-radius: 2rem;
        }
        
        
        .logo {
            height: 15rem;
            position:center;
            margin-top: 2rem;
            display: inline-block;
            margin-bottom: -7rem;
           
        }
        
        
        .centralizar {
            text-align: center;
            height: 100%;
            width: 50rem;
            margin-left: auto;
            margin-right: auto;
            margin-top: 4rem;
            margin-bottom: 2rem;
           
        }
        
        
        input {
            font-size: large;
            font-family: 'Roboto', sans-serif;
           
        }

        h3 {margin-bottom:-1.2rem;
            margin-top: -1.2rem;
            color:#FBFBF8;
            text-align:left;
            margin-left: 4rem;
            text-decoration: none;
            height: rem;
        }

        .voltar {
            color: #FBFBF8;
            text-align: left;
            height: 4rem;
            
        }

        .voltara {margin-left: -18rem; }

        h7 {height: 1rem; width: 1rem;}
         
    </style>
</head>
<body>
    
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <body class='ba'>
                <div>
                    <div class="centralizar">
                        <img src="{{asset('./img/logo.png')}}" class="logo">
                        <div class="fundo" class="container">
            
                            <div>
                               
                            </div>
                            <div style="margin-top: 4rem;">
                    
                   
                    
                
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                    
                            <!-- Email Address -->
                            <div>
            
            
                                <br>
                                <br>
    
            <!-- Name -->
            <div>
                <x-input-label for="name" />
                <x-text-input class='branco'  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder='Digete seu Nome:' />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
    
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email"  />
                <x-text-input class='branco' type="email" name="email" :value="old('email')" required autocomplete="username" placeholder='Digete seu Email:' />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password"  />
    
                <x-text-input class="branco" type="password" name="password" required autocomplete="new-password" placeholder='Digete Uma Senha:' />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
           

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-labefor=l "password_confirmation" :value="__('Confirm Password')" />
    
                <x-text-input id="password_confirmation" class="branco"
                placeholder='Redigete Sua Senha:'
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
    
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Possui Cadastro?') }}
                </a>
    
                <x-primary-button class="azul">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>

    
</body>
</html>
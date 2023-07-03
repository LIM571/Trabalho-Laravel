<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recuperação de Senha</title>
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
           
            width: 22rem;
            height: 28rem;
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
            width: 14rem;
            margin-bottom: 2rem;
            background: #FBFBF8;
            border-radius: 0.7rem;
        }
        
        
        .azul {
            width: 16rem;
            height: 3rem;
            margin-top: 2rem;
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

        .b {color: #FBFBF8}
         
    </style>
</head>
<body class='ba'>
<div>
    <div>
        <div class="centralizar">
            <img src="{{asset('./img/logo.png')}}" class="logo">
            <div class="fundo" class="container">
                <a class='voltara' href="{{route('dashboard')}}" ><h7 class='voltar'>Voltar</h7></a>

                <div>
                   
                </div>
                <div style="margin-top: 4rem;">
        
    <div>
        <p class='b'>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status  :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email"  />
            <x-text-input id="email" class="branco" type="email" name="email" placeholder="E-mail" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div  >
            <x-primary-button class='azul'>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/e706368421.js" crossorigin="anonymous"></script>
    <title>Login</title>
  </head>
  <body class="bg-gradient-to-r from-[#201A30] to-[#0DD0C4]">
    
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>

    <div class="bg-[#201A30] sm:rounded-none md:rounded-3xl mx-auto h-auto sm:h-screen md:h-auto" style="width: 500px;">
        <img src="{{ asset('images/undraw_pair_programming.svg') }}" class="w-60  mx-auto py-2 lg:py-6" alt="">
        <div class="px-8">
            <span class="text-white text-2xl font-semibold block">Login</span>
            <span class="text-slate-500 block">Please sign in to continue.</span>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="flex flex-col items-center my-6">
            <div class="flex flex-col w-11/12">
                <label for="email" class="text-gray-500 text-sm px-2">EMAIL</label>
                <div class="flex flex-row items-center bg-[#38304C] p-2 my-2 rounded-lg space-x-4">
                    <i class="fa-solid fa-envelope text-white text-lg ml-4"></i>
                    <input type="text" name="email" id="email" class="flex-1 focus:outline-none focus:font-semibold bg-[#38304C] h-12 ml-2 text-white" value="{{ old('email')}}" placeholder="example@mail.com" autocomplete="off" required title="ingrese un correo">
                </div>
            </div>
            <div class="flex flex-col w-11/12">
                <label for="password" class="text-gray-500 text-sm px-2">PASSWORD</label>
                <div class="flex flex-row items-center bg-[#38304C] p-2 my-2 rounded-lg space-x-4">
                    <i class="fa-solid fa-lock text-white text-lg ml-4"></i>
                    <input type="password" name="password" id="password" class="flex-1 focus:outline-none bg-[#38304C] h-12 ml-2 text-white" placeholder="*****" required>
                </div>
            </div>

            @if ($errors->has('email'))
            <div class="text-red-700 my-2 text-right">
                <span>{{$errors->first('email')}}</span>
            </div>
            @endif

        </div>
        
        <div class="flex flex-col items-center space-y-2 p-3">
            <button class="text-lg font-semibold rounded-3xl bg-[#0DF5E3] p-2" style="width: 200px; height: 50px;" type="submit">LOGIN</button>
            <a class="text-[#0DD0C4]" href="">Forgot Password?</a>
            <span class="text-slate-500 pt-2 sm:pt-2 md:pt-2 lg:pt-10">Don't have an account? <a href="{{ route('register') }}" class="text-[#0DD0C4]">Sign up</a></span>
        </div>
    </form>
    </div>
  </body>
</html>

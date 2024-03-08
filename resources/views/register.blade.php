<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/e706368421.js" crossorigin="anonymous"></script>
    <title>Register</title>
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
        <div class="px-8 my-4 space-y-2">
            <span class="text-white text-2xl font-semibold block">Create Account</span>
            <span class="text-slate-500 block">Please fill the input blow here</span>
        </div>

        <form method="post" action="{{ route('register') }}">
            @csrf
        <div class="flex flex-col items-center my-6">
            <div class="flex flex-col w-11/12">
                <label for="username" class="text-gray-500 text-sm px-2">USERNAME</label>
                <div class="flex flex-row items-center bg-[#38304C] p-2 my-2 rounded-lg space-x-4">
                    <i class="fa-solid fa-user text-white text-lg ml-4"></i>
                    <input type="text" name="username" id="username" class="flex-1 focus:outline-none focus:font-semibold bg-[#38304C] h-12 ml-2 text-white" placeholder="Your full name" autocomplete="off" required title="ingrese un correo">
                </div>
            </div>
            <div class="flex flex-col w-11/12">
                <label for="email" class="text-gray-500 text-sm px-2">EMAIL</label>
                <div class="flex flex-row items-center bg-[#38304C] p-2 my-2 rounded-lg space-x-4">
                    <i class="fa-solid fa-envelope text-white text-lg ml-4"></i>
                    <input type="email" name="email" id="email" class="flex-1 focus:outline-none focus:font-semibold bg-[#38304C] h-12 ml-2 text-white" placeholder="example@mail.com" autocomplete="off" required title="ingrese un correo">
                </div>
            </div>
            <div class="flex flex-col w-11/12">
                <label for="password" class="text-gray-500 text-sm px-2">PASSWORD</label>
                <div class="flex flex-row items-center bg-[#38304C] p-2 my-2 rounded-lg space-x-4">
                    <i class="fa-solid fa-lock text-white text-lg ml-4"></i>
                    <input type="password" name="password" id="password" class="flex-1 focus:outline-none bg-[#38304C] h-12 ml-2 text-white" placeholder="*****" required>
                </div>
            </div>

            <div class="flex flex-col w-11/12">
                <label for="passwordConfirm" class="text-gray-500 text-sm px-2">CONFIRM PASSWORD</label>
                <div class="flex flex-row items-center bg-[#38304C] p-2 my-2 rounded-lg space-x-4">
                    <i class="fa-solid fa-lock text-white text-lg ml-4"></i>
                    <input type="password" name="passwordConfirm" id="passwordConfirm" class="flex-1 focus:outline-none bg-[#38304C] h-12 ml-2 text-white" placeholder="*****" required>
                </div>
            </div>

          @if ($errors->has('password'))
          <div class="text-red-700 my-2">
            <span>{{ $errors->first('password') }}</span>
        </div>
          @endif

          @if (session()->has('message'))
                <script>
                    alert('Se ha registrado correctamente.');
                </script>
          @endif

        </div>
        
        <div class="flex flex-col items-center space-y-2 p-3">
            <button class="text-lg font-semibold rounded-3xl bg-[#0DF5E3] p-2" style="width: 200px; height: 50px;" type="submit">SIGN UP</button>
            <span class="text-slate-500 pt-2 sm:pt-2 md:pt-2 lg:pt-10">Already have an account? <a href="{{ route('login') }}" class="text-[#0DD0C4]">Sign in</a></span>
        </div>
    </form>

    </div>


  </body>
</html>
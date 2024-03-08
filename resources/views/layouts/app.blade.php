<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/e706368421.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ asset('images/dragon-solid.svg') }}" type="image/png">
    @vite('resources/css/app.css')
    <title>@yield('title', 'Inicio')</title>
</head>

<body>
    @include('components.navbar')
    <!-- Wrapper -->
    <div class="flex">
        @include('components.sidebar')

        {{-- Main content --}}
        <div class="flex-1 ml-14 sm:ml-14 md:ml-14 lg:ml-52 p-4" id="content">
            @yield('content')
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            let menu = document.querySelector(".fa-list");
            let sidebar = document.getElementById("sidebar");
            let content = document.getElementById("content");

            menu.addEventListener("click", () => {
                sidebar.classList.toggle("hidden");
                content.classList.toggle("ml-14");
                content.classList.toggle("p-4");
            });
        });

        document.getElementById('logout').addEventListener('click', (event) => {
            event.preventDefault()
            document.getElementById('logout-form').submit();
        })


        document.getElementById('userDropdownBtn').addEventListener('click', function() {
            var dropdown = document.getElementById('userDropdown');
            dropdown.classList.toggle('hidden');
        });
    </script>
</body>

</html>

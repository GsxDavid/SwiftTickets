<!-- Navbar -->

<div class="bg-[#151720] h-1/5 flex flex-row justify-between sticky top-0 left-0 items-center">
    <i class="fa-solid fa-list sm:block md:block lg:hidden text-white p-4 text-2xl"></i>

    <div class="flex flex-row space-x-3 items-center p-3">
        <i class="text-2xl text-[#F03D30] fa-solid fa-dragon"></i>
        <span class="font-[Poppins] text-xl text-white">Swift Tickets</span>
    </div>
    <div class="flex flex-row my-2 items-center space-x-3 pr-2">
        <button id="userDropdownBtn" class="text-white text-xl focus:outline-none">
            <img src="https://ui-avatars.com/api?name=Jonathan Mancera" alt="user" class="rounded-full w-10 h-10" />
        </button>
    </div>

    <div id="userDropdown" class="font-[Poppins] hidden absolute right-2 top-12 text-white w-96 -mr-2">
        <div class="bg-[#151720] text-white w-96 my-2 rounded-b-sm shadow-md">
            <div class="flex flex-row space-x-2  justify-between p-2 items-center">
                <span class="text-sm px-4"> <i class="fa-solid fa-code"></i> Desarrollador</span>
                <a href=" {{ route('logout') }} " class="text-sm hover:bg-gray-400 p-2" id="logout"> <i
                        class="fa-solid fa-right-from-bracket"></i> Cerrar
                    sesión</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700" />
            <!-- Image section -->
            <div class="flex flex-row space-x-3  px-4 py-4">
                <img src="https://ui-avatars.com/api?name=Jonathan Mancera" alt="profile photo"
                    class="rounded-full w-16 h-16">
                <div class="flex flex-col space-y-1 items-center w-full">
                    <span class="text-xl font-bold"> @ {{ $user['name'] }} </span>
                    <span class="text-sm">{{ $user['email'] }}</span>
                    <a href="" class="text-[#0DF5E3] text-sm">Ver cuenta</a>
                </div>
            </div>
        </div>
    </div>

</div>

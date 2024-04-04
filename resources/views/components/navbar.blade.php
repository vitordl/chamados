{{-- LAYOUT NORMAL  --}}
<div class="bg-zinc-800 p-6 hidden md:block">
    <div class="flex text-white justify-between">
        
        <div class="flex items-center gap-8">
            <div class="text-lg uppercase font-light">
                <a href="{{route('index')}}" class="flex gap-1 items-center">
                <x-icon-menu/>
                {{env('APP_NAME')}}
                </a>
            </div>

            <div>
                <ul class="flex gap-8">
                    <li><a href="" class="hover:text-emerald-500">Lorem</a></li>
                    <li><a href="" class="hover:text-emerald-500">Ipsun</a></li>
                    <li><a href="" class="hover:text-emerald-500">Sit</a></li>
                    <li><a href="" class="hover:text-emerald-500">Amet</a></li>
                </ul>
            </div>
        </div>

        <div>
            <a href="" class="text-sm flex items-center border rounded border-gray-200 px-2 py-1">
                <x-icon-user/>
                User
            </a>
        </div>
    </div>
</div>
{{-- FIM LAYOUT NORMAL  --}}


{{-- LAYOUT MOBILE  --}}
{{-- <div class="md:hidden bg-zinc-800 p-6 ">
    
    <div class="flex items-center gap-8 text-white justify-between">
        <div class="text-lg uppercase font-light">
            <a href="{{route('index')}}" class="flex gap-1 items-center">
            <x-icon-menu/>
            Chamados Aqui
            </a>
        </div>

        <div class="flex items-center">
            <button>
                <x-icon-hamburger/>
            </button>
        </div>

    </div>
</div> --}}

<div class="flex items-center justify-between flex-wrap  bg-zinc-900 text-white p-6 md:hidden  w-full">
    <div class="flex items-center flex-shrink-0 text-white">
        <span class=" text-base uppercase font-light ">
            <a href="{{route('index')}}" class="flex gap-1 items-center">
            <x-icon-menu/>
            {{env('APP_NAME')}}
            </a>
        </span>
    </div>
    <div>
        <button id="menuHamburger" class="flex items-center px-3 py-2 border rounded text-gray-200 border-gray-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div class="w-full hidden" id="menu">
        <div class="text-sm">
            <a href="#" class="block mt-4 text-gray-200 hover:text-white ">
                Lorem
            </a>
            <a href="#" class="block mt-4 text-gray-200 hover:text-white">
                Ipsun
            </a>
            <a href="#" class="block mt-4 text-gray-200 hover:text-white">
                Sit
            </a>
            <a href="#" class="flex  items-center block mt-4 text-red-500 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                </svg>
                Logout
            </a>
        </div>
    </div>
</div>


<script>
    document.getElementById("menuHamburger").addEventListener("click", function() {
        var menu = document.getElementById("menu");
        menu.classList.toggle("hidden");
    });
</script>

{{-- FIM LAYOUT MOBILE  --}}
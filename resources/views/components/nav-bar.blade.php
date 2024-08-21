<header class="glassEffect text-white">
    <nav class="flex items-center justify-between px-12 h-16 lg:gap-8 py-12">
        <img src="{{asset('logo.svg')}}" alt="logo" class="w-20 invert-color">

        <div class="dropdownMenu absolute top-24 left-0 max-lg:bg-gradient-to-br max-lg:from-[rgba(255,255,255,0.1)] max-lg:to-[rgba(255,255,255,0)] max-lg:backdrop-blur-[5px] max-lg:backdrop-filter max-lg:rounded-[5px] max-lg:border max-lg:border-[rgba(255,255,255,0.18)] max-lg:shadow-[0_8px_32px_0_rgba(0,0,0,0.37)] w-full flex flex-col gap-6 items-center py-2 text-lg font-bold lg:static lg:flex-row lg:justify-around">
            <ul class="flex flex-col items-center gap-6 lg:flex-row lg:gap-8">
                <li class="whitespace-nowrap">Strona główna</li>
                <li class="whitespace-nowrap">Wszystkie przedmioty</li>
                <li class="whitespace-nowrap">Edytuj przedmioty</li>
                <li>Konto</li>
            </ul>

            <div class="flex flex-col items-center gap-6 lg:flex-row lg:gap-8 ">
                <button class="whitespace-nowrap">Zaloguj się</button>
                <button class="whitespace-nowrap">Stwórz konto</button>
            </div>
        </div>

        <div class="toggleButton cursor-pointer lg:hidden ">
            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
            </svg>
        </div>
    </nav>
</header>

<script>
    document.querySelector('.toggleButton').addEventListener('click', function() {
        document.querySelector('.dropdownMenu').classList.toggle('hidden');
    });

</script>

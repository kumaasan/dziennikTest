<header class="bg-[#DCDCE1] text-gray-700">
    <nav class="flex justify-between items-center w-[92%] mx-auto">
        <div>
            <a href="/">
                <img class="w-20 cursor-pointer" src="{{asset('logo.svg')}}" alt="logo">
            </a>
        </div>
        <div
            class="nav-links duration-500 md:static absolute bg-[#DCDCE1] md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
            <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 font-bold ">
                <li>
                    <a class="hover:text-gray-900" href="#">Strona głowna</a>
                </li>
                <li>
                    <a class="hover:text-gray-900" href="#">Wszystkie przedmioty</a>
                </li>
                <li>
                    <a class="hover:text-gray-900" href="#">Edytuj przedmioty</a>
                </li>
                <li>
                    <a class="hover:text-gray-900" href="#">Konto</a>
                </li>
            </ul>
        </div>
        <div class="flex items-center gap-6">
            <button class="w-full text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                Zaloguj się
            </button>
            <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
        </div>
    </nav>
</header>

<script>
    const navLinks = document.querySelector('.nav-links');

    function onToggleMenu(e) {
        e.name = e.name === 'menu' ? 'close' : 'menu';
        navLinks.classList.toggle('top-[9%]');
    }
</script>

<header id="header" class="bg-white fixed w-full top-0 z-50">
<nav class="mx-auto flex container items-end justify-between p-4" aria-label="Global">
    <div class="flex lg:flex-1">
    <a href="/" class="-m-1.5 p-1.5">
        <img class="h-24 w-auto" src="/images/logo.png" alt="">
    </a>
    </div>
    <div class="flex lg:hidden">
    <button id="btn-menu" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12 pb-[2px]">
    <div class="relative">
        <button id="lineas-investigacion" type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900" aria-expanded="false">
        Lineas de investigación
        <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
        </svg>
        </button>

        <!--
        'Product' flyout menu, show/hide based on flyout menu state.

        Entering: "transition ease-out duration-200"
            From: "opacity-0 translate-y-1"
            To: "opacity-100 translate-y-0"
        Leaving: "transition ease-in duration-150"
            From: "opacity-100 translate-y-0"
            To: "opacity-0 translate-y-1"
        -->
        <div id="menu-lineas-investigacion" class="hidden absolute -left-8 top-full z-10 mt-5 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
        <div class="p-4">
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
            <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 3.75a1.5 1.5 0 00-1.5 1.5v14a1.5 1.5 0 001.5 1.5h15a1.5 1.5 0 001.5-1.5V5.25a1.5 1.5 0 00-1.5-1.5H4.5zM6 6h12v12H6V6zm4.5 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zm-2 6h8v2H8v-2z"/>
                </svg>
            </div>
            <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900">
                Artes, Humanidades y Desarrollo Cultural
                <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Get a better understanding of your traffic</p>
            </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
            <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 10l9-6 9 6v9H3v-9zm0 0l9-6 9 6M3 19h18v2H3v-2z"/>
                </svg>
            </div>
            <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900">
                Identidad Cultural y Comunicación
                <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Speak directly to your customers</p>
            </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
            <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <svg class="h-6 w-6 text-gray-600 group-hover:text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </div>
            <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900">
                Procesos Socioculturales y Desarrollo Comunitario
                <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Your customers’ data will be safe and secure</p>
            </div>
            </div>
        </div>
        </div>
    </div>

    <a href="/productos" class="text-sm font-semibold leading-6 text-gray-900">Productos</a>
    <a href="/difusion" class="text-sm font-semibold leading-6 text-gray-900">Difusión</a>
    <a href="/equipo" class="text-sm font-semibold leading-6 text-gray-900">Equipo</a>
    </div>
</nav>
<!-- Mobile menu, show/hide based on menu open state. -->
<div id="collapsing-menu" class="lg:hidden hidden" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
    <a href="/">
        <img class="absolute bottom-4 w-40 right-1/2 translate-x-1/2" src="/images/logo.png" alt="">
    </a>
    <div class="flex items-center justify-end">
        <button id="close-collapsing-menu" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
        </button>
    </div>
    <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
        <div class="space-y-2 py-6">
            <div class="-mx-3">
            <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                Lineas de investigación
                <!--
                Expand/collapse icon, toggle classes based on menu open state.

                Open: "rotate-180", Closed: ""
                -->
                <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
            </button>
            <!-- 'Product' sub-menu, show/hide based on menu state. -->
            <div class="mt-2 space-y-2" id="disclosure-1">
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Artes, Humanidades y Desarrollo Cultural</a>
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Identidad Cultural y Comunicación</a>
                <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Procesos Socioculturales y Desarrollo Comunitario</a>
            </div>
            </div>
            <a href="/productos" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Productos</a>
            <a href="/difusion" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Difusión</a>
            <a href="/equipo" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Equipo</a>
        </div>
        
        </div>
    </div>
    </div>
</div>
</header>
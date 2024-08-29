<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CIARTEHC | Admin</title>
    @vite(['resources/css/app.css', 'resources/js/admin.js'])
</head>
<body>
    <header class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-end justify-between p-6 lg:px-8" aria-label="Global">
          <div class="flex lg:flex-1">
            @auth
            <a href="/admin" class="-m-1.5 p-1.5">
            @else
            <a href="/" class="-m-1.5 p-1.5">
            @endauth
              <span class="sr-only">Your Company</span>
              <img class="w-[100px]" src="/images/logo.png" alt="">
            </a>
          </div>
          @auth            
          <div class="flex lg:hidden">
            <button id="btn-menu" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
              <span class="sr-only">Open main menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>
          </div>
          @endauth
          <div class="hidden lg:flex lg:gap-x-12">
            @auth  
            <a href="/eventos" class="{{request()->is('eventos*') ? 'text-red-800' : 'text-gray-900'}} text-sm font-semibold leading-6">Eventos</a>
            <a href="/team" class="{{request()->is('team*') ? 'text-red-800' : 'text-gray-900'}} text-sm font-semibold leading-6">Equipo</a>
            <a href="/productos-admin" class="{{request()->is('productos-admin*') ? 'text-red-800' : 'text-gray-900'}} text-sm font-semibold leading-6">Productos</a>
            <a href="/lineas-investigacion" class="{{request()->is('lineas-investigacion*') ? 'text-red-800' : 'text-gray-900'}} text-sm font-semibold leading-6">Lineas de investigación</a>
            <a href="/secciones-investigacion" class="{{request()->is('secciones-investigacion*') ? 'text-red-800' : 'text-gray-900'}} text-sm font-semibold leading-6">Secciones investigación</a>
            @endauth
          </div>
          <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            @auth              
            <form action="/logout" method="POST">
              @csrf
                <button class="text-sm font-semibold leading-6 text-gray-900">Cerrar Sesión <span aria-hidden="true">&rarr;</span></button>
            </form>
            @endauth
          </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        @auth          
        <div id="collapsing-menu" class="hidden lg:hidden" role="dialog" aria-modal="true">
          <!-- Background backdrop, show/hide based on slide-over state. -->
          <div class="fixed inset-0 z-10"></div>
          <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
              <span class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <h1>Admin</h1>
              </span>
              <button id="close-collapsing-menu" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="mt-6 flow-root">
              <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                  <a href="/eventos" class="{{request()->is('eventos*') ? 'text-red-800' : 'text-gray-900'}} -mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-gray-50">Eventos</a>
                  <a href="/team" class="{{request()->is('team*') ? 'text-red-800' : 'text-gray-900'}} -mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-gray-50">Equipo</a>
                  <a href="/productos-admin" class="{{request()->is('productos-admin*') ? 'text-red-800' : 'text-gray-900'}} -mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-gray-50">Productos</a>
                  <a href="/lineas-investigacion" class="{{request()->is('lineas-investigacion*') ? 'text-red-800' : 'text-gray-900'}} -mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-gray-50">Lineas de investigación</a>
                  <a href="/secciones-investigacion" class="{{request()->is('secciones-investigacion*') ? 'text-red-800' : 'text-gray-900'}} -mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-gray-50">Secciones investigación</a>
                </div>
                <div class="py-6">
                  <form action="/logout" method="POST">
                    @csrf
                      <button class="text-sm font-semibold leading-6 text-gray-900">Cerrar Sesión <span aria-hidden="true">&rarr;</span></button>
                  </form>                </div>
              </div>
            </div>
          </div>
        </div>
        @endauth
      </header>
      <section class="container p-4 mt-[30px] mb-[100px]">
        {{$slot}}
      </section>
    
</body>
</html>
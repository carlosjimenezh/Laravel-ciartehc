<x-app-layout>
    <section class="my-[200px] md:my-[250px] md:mb-[200px] p-4 relative container">
        <h1 class="text-3xl md:text-5xl mb-10 font-bold text-center">Productos</h1>
        <div class="flex items-center justify-center pb-4 md:pb-8 flex-wrap">
            <button type="button" class="text-xs text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">
                Todos
            </button>
            <button type="button" class="text-xs text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">
                Artes, Humanidades y Desarrollo Cultural
            </button>
            <button type="button" class="text-xs text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">
                Identidad Cultural y Comunicación
            </button>
            <button type="button" class="text-xs text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">
                Procesos Socioculturales y Desarrollo Comunitario
            </button>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @forelse ($productos as $producto)
            <div class="relative">
                <a href="/productos/{{$producto->id}}" class="block h-40 md:h-72 border border-gray-200 rounded-lg shadow">
                    <img class="object-cover w-full h-full max-w-full rounded-lg" src="{{!empty($producto->imagenes[0]) ? $producto->imagenes[0]->imagen : '/images/logo.png'}}" alt="">
                    <div class="absolute bg-white top-2 left-2 border text-gray-500 rounded-full text-xs p-1">{{$producto->seccion_investigacion->nombre}}</div>
                </a>
                <div class="text-center font-semibold px-1">
                    <a href="/productos/{{$producto->id}}">
                        {{$producto->nombre}}
                    </a>
                </div>
            </div>
            @empty
                <p>No se econtraron productos</p>
            @endforelse
            
        </div>
    </section>
</x-app-layout>

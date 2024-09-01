<x-app-layout>
    <section class="my-[200px] md:my-[250px] md:mb-[200px] p-4 relative container">
        <h1 class="text-3xl md:text-5xl mb-10 font-bold text-center">Productos</h1>
        <div class="flex items-center justify-center pb-4 md:pb-8 flex-wrap">
            <a href="/productos" type="button" class="{{request()->is('productos') ? 'text-white border-blue-600 bg-blue-700 hover:bg-blue-500' : 'bg-white hover:bg-gray-100'}} text-xs border focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full font-medium px-5 py-2.5 text-center me-3 mb-3">
                Todos
            </a>
            <a href="/productos/linea-investigacion/1" type="button" class="{{request()->is('productos/linea-investigacion/1') ? 'text-white border-blue-600 bg-blue-700 hover:bg-blue-500' : 'bg-white hover:bg-gray-100'}} text-xs border focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full font-medium px-5 py-2.5 text-center me-3 mb-3">
                Artes, Humanidades y Desarrollo Cultural
            </a>
            <a href="/productos/linea-investigacion/2" type="button" class="{{request()->is('productos/linea-investigacion/2') ? 'text-white border-blue-600 bg-blue-700 hover:bg-blue-500' : 'bg-white hover:bg-gray-100'}} text-xs border focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full font-medium px-5 py-2.5 text-center me-3 mb-3">
                Identidad Cultural y Comunicación
            </a>
            <a href="/productos/linea-investigacion/3" type="button" class="{{request()->is('productos/linea-investigacion/3') ? 'text-white border-blue-600 bg-blue-700 hover:bg-blue-500' : 'bg-white hover:bg-gray-100'}} text-xs border focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full font-medium px-5 py-2.5 text-center me-3 mb-3">
                Procesos Socioculturales y Desarrollo Comunitario
            </a>
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

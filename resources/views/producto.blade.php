<x-app-layout>
    <section class="my-[200px] md:my-[250px] p-4 relative container md:max-w-4xl">
        <img class="w-64 border border-gray-200 rounded/lg shadow rounded" src="{{!empty($producto->imagenes[0]) ? $producto->imagenes[0]->imagen : '/images/logo.png'}}" alt="">
        <h1 class="text-3xl md:text-5xl mb-10 font-bold">{{$producto->nombre}}</h1>
        <p class="mb-3 w-max bg-white top-2 left-2 border text-gray-500 rounded-full text-xs p-1">{{$producto->seccion_investigacion->nombre}}</p>
        <p class="">{{$producto->descripcion}}</p>
        <div class="swiper h-80 md:h-[550px] mt-12">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @forelse ($producto->imagenes as $imagen)
                    <div class="swiper-slide border border-gray-200 rounded-lg shadow overflow-hidden">
                        <img src="{{$imagen->imagen}}" alt="" class="h-80 md:h-[550px] object-cover block w-full object-center" loading="lazy">
                    </div>
                @empty
                    <div class="swiper-slide border border-gray-200 rounded-lg shadow overflow-hidden">
                        <h2>No hay elementos que mostrar</h2>
                    </div>    
                @endforelse
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
        <div class="swiper-pagination !-bottom-3"></div>
    </section>
</x-app-layout>


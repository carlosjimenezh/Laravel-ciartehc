<x-app-layout>
    <section class="my-[200px] md:my-[250px] md:mb-[350px] p-4 relative text-center max-w-[750px] mx-auto" id="quienes-somos">
        <h1 class="text-3xl md:text-5xl mb-10 font-bold">¿Quiénes somos?</h1>
        <p class="mb-3 text-pretty">
            Espacio diseñado para realizar <strong>investigación de alto nivel</strong>, articulando esfuerzo en el eje de docencia a nivel pregrado y posgrado, a la vez que contribuirá al fortalecimiento de actividades de <strong>divulgación, extensión, vinculación y difusión.</strong>
        </p>
        <p class="text-pretty">
            Ofrecerá de manera permanente <strong>diplomados, cursos y talleres</strong> para todas aquellas personas que deseen actualizar sus saberes y pretendan introducirse paulatinamente en las disciplinas de las <strong>artes, las humanidades y la comunicación.</strong> Dado a su carácter regional, nacional e internacional, realizará eventos donde se promueva el intercambio de experiencias, reflexiones, análisis, discusiones y aportes sobre temas esenciales que den vida a propuestas relacionadas con las <strong>artes, las humanidades y la comunicación.</strong>
        </p>
        <img src="images/1.png" alt="" class="absolute w-[45px] md:w-[60px] bottom-[-70px] md:bottom-[-100px] left-0 md:left-[-20px]">
        <img src="images/3.png" alt="" class="absolute w-[45px] md:w-[60px] bottom-[-70px] md:bottom-[-100px] left-[30%] md:left-[30%]">
        <img src="images/2.svg" alt="" class="absolute w-[45px] md:w-[60px] bottom-[-70px] md:bottom-[-100px] right-[30%] md:right-[30%]">
        <img src="images/4.svg" alt="" class="absolute w-[45px] md:w-[60px] bottom-[-70px] md:bottom-[-100px] right-0 md:right-[-20px]">
    </section>


    <section class="my-[200px] md:my-[250px] md:mb-[350px] p-4 relative text-center max-w-5xl mx-auto">
        <h1 class="text-3xl md:text-5xl mb-10 font-bold">Noticias</h1>
        <div class="swiper h-80 md:h-[550px]">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @forelse ($eventos as $evento)
                    <div class="swiper-slide border border-gray-200 rounded-lg shadow overflow-hidden">
                        @if (!empty($evento->url))
                        <a href="{{$evento->url}}" target="_blank">
                            <img src="{{$evento->imagen}}" alt="" class="h-80 md:h-[550px] object-cover block w-full object-center" loading="lazy">
                        </a>   
                        @else
                            <img src="{{$evento->imagen}}" alt="" class="h-80 md:h-[550px] object-cover block w-full object-center" loading="lazy">
                        @endif
                    </div>
                @empty
                    <div class="swiper-slide border border-gray-200 rounded-lg shadow overflow-hidden">
                        <h2>No hay elementos que mostrar</h2>
                    </div>    
                @endforelse
            </div>
            <!-- poner un recordatorio en admin diciendo que las imágenes aparecen centradas, para mostrar la información centrada -->
          
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
        <div class="swiper-pagination !-bottom-3"></div>
    </section>


    <section class="text-center mx-auto" id="difusion">
        <h1 class="text-3xl md:text-5xl mb-10 font-bold">Difusión</h1>
        <div class="max-w-[800px] mt-10 m-auto p-4 grid grid-cols-1 md:grid-cols-2 gap-5 place-items-center md:place-items-stretch">
            <div class="max-w-lg md:max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                {{-- <svg class="w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15.5v-7h2v7h-2zm-2.12-3.38c-.49.41-1.17.62-1.88.62s-1.39-.21-1.88-.62c-.7-.58-1.12-1.39-1.12-2.25s.42-1.67 1.12-2.25c.49-.41 1.17-.62 1.88-.62s1.39.21 1.88.62c.7.58 1.12 1.39 1.12 2.25s-.42 1.67-1.12 2.25zm10.24-1.03c-.7.58-1.38.87-2.12.87s-1.42-.29-2.12-.87c-.7-.58-1.12-1.39-1.12-2.25s.42-1.67 1.12-2.25c.7-.58 1.38-.87 2.12-.87s1.42.29 2.12.87c.7.58 1.12 1.39 1.12 2.25s-.42 1.67-1.12 2.25z"></path>
                </svg> --}}
                <img src="/images/logo-teatro.png" alt="" class="w-[60px]">
                <a href="https://www.facebook.com/teatrosurzapotlan" target="_blank">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Teatro</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Arte en vivo que narra historias a través de la actuación en un escenario.</p>
                <a href="https://www.facebook.com/teatrosurzapotlan" target="_blank" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                    Ver más
                    <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"/>
                    </svg>
                </a>
            </div>
            <div class="max-w-lg md:max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                {{-- <svg class="w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M4 6h16v12H4V6zm0-2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H4zm12 6h-2v2h2v-2zm-4 0h-2v2h2v-2zm-4 0H6v2h2v-2z"/>
                  </svg> --}}
                <img src="/images/logo-radio.png" alt="" class="w-[60px] opacity-70">
                <a href="https://www.facebook.com/PolicromiaRadioUDGGuzman" target="_blank">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Radio</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Radio UDG, contenido de audio, como música y noticias.</p>
                <a href="https://www.facebook.com/PolicromiaRadioUDGGuzman" target="_blank" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                    Ver más
                    <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"/>
                    </svg>
                </a>
            </div>
            <div class="max-w-lg md:max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                {{-- <svg class="w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M3 2a1 1 0 0 0-1 1v20a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H3zm1 2h16v16H4V4zm1 1h14v14H5V5zm7 14l2-2H8l2 2z"/>
                  </svg> --}}
                <img src="/images/logo-publicaciones.png" alt="" class="w-[60px] opacity-70">
                <a href="http://www.cusur.udg.mx/es/ciartehc/publicaciones" target="_blank">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Publicaciones</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Medios digitales que difunden información, literatura y noticias.</p>
                <a href="http://www.cusur.udg.mx/es/ciartehc/publicaciones" target="_blank" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                    Ver más
                    <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"/>
                    </svg>
                </a>
            </div>
            <div class="max-w-lg md:max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                {{-- <svg class="w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M21 5h-2V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v1H9V4a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1v1H3a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h2v1a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-1h8v1a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-1h2a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2zm-1 2v2l-3 1.5L12 7V5l5-2 5 2v2zm-9 6.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm2-2.5a2 2 0 1 0-4 0 2 2 0 0 0 4 0z"/>
                  </svg> --}}
                <img src="/images/logo-audiovisuales.png" alt="" class="w-[60px] opacity-70">
                <a href="https://www.youtube.com/channel/UCsl8ULmX_tJrp6LEJq4v8hg" target="_blank">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Audiovisual</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Videos que cuentan historias.</p>
                <a href="https://www.youtube.com/channel/UCsl8ULmX_tJrp6LEJq4v8hg" target="_blank" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                    Ver más
                    <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"/>
                    </svg>
                </a>
            </div>
        </div>
    </section> 


    <section id="equipo" class="text-center max-w-[1300px] mx-auto p-4 my-[200px] md:my-[250px]">
        <h1 class="text-3xl md:text-5xl mb-10 font-bold">Equipo</h1>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            @forelse ($equipo as $elemento)
            <a href="/equipo#{{strtok($elemento->nombre, ' ')}}" class="transition-transform">
                <img class="inline-block h-[250px] w-[250px] rounded-full object-contain relative" src="{{$elemento->imagen}}" alt="">
                <p class="mt-5 font-bold leading-tight text-sm">{{$elemento->nombre}}</p>
                <p class="mb-10 md:mb-0 text-sm">{{$elemento->prefijo.' '.$elemento->cargo}}</p>
            </a>
            @empty
                <p>No existen elemento por mostrar</p>
            @endforelse
        </div>
    </section>


</x-app-layout>

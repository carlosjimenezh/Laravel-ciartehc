<x-app-layout>
    <section id="equipo-page" class="my-[200px] md:my-[250px] md:mb-[200px] p-4 relative container">
        <h1 class="text-3xl md:text-5xl mb-10 font-bold text-center">Equipo</h1>
        <div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800">
            @forelse ($equipo as $elemento)
            <figure id="jorge" class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <q class="my-4 text-lg font-semibold text-gray-600 dark:text-white italic">{{$elemento->frase}}</q>
                </blockquote>
                <figcaption class="flex items-center justify-center mb-10">
                    <img class="rounded-full w-20 h-20 object-contain" src="{{$elemento->imagen}}" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                        <div>{{$elemento->prefijo.' '.$elemento->nombre}}</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 ">{{$elemento->cargo}}</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 ">{{$elemento->ubicacion}}</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 ">
                            <a href="mailto:{{$elemento->email}}">
                                {{$elemento->email}}
                            </a>
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 ">{{$elemento->telefono}}</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 ">ext. {{$elemento->extension}}</div>
                    </div>
                </figcaption> 
                <div class="flex">
                @if (!empty($elemento->semblanza))
                <button data-idequipo="{{$elemento->id}}" href="{{$elemento->cv}}" class="semblanza text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-xs md:text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    Ver Semblanza
                </button>    
                @endif
                @if (!empty($elemento->cv))
                <a href="{{$elemento->cv}}" target="_blank" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-xs md:text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    Descargar CV
                </a>    
                @endif   
                </div>
            </figure>
            @empty
                <p>No hay elemento por mostrar</p>
            @endforelse
        </div>
    </section>

    @include('partials.equipoModal')

    <script>
        document.querySelector('#equipo-page .grid').addEventListener('click', e => {
            if (e.target.dataset.idequipo) {
                document.querySelector('#default-modal')?.classList.toggle('hidden')
                const id = e.target.dataset.idequipo
                fetch(`/equipo/${id}`)
                .then(response => {
                    if (response.ok) {
                        return response.json()
                    } else {
                        console.log('Error en la solicitud')
                    }
                })
                .then(data => {
                    abrirModal(data)
                })
                .catch(error => console.log(error))
                }
        })
        document.querySelector('#cerrar-modal')?.addEventListener('click', () => {
            document.querySelector('#default-modal')?.classList.toggle('hidden')
        })
        const abrirModal = ({prefijo, nombre, imagen, semblanza}) => {
            document.querySelector('#default-modal .nombre').innerHTML = `${prefijo} ${nombre}`
            document.querySelector('#default-modal .semblanza').innerHTML = semblanza
            document.querySelector('#default-modal .imagen').src = imagen
        }
    </script>
</x-app-layout>

  
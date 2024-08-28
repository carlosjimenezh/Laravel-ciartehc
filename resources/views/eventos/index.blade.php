<x-admin.app-layout view='eventos'>
    <div>
        <h1 class="text-2xl">Eventos</h1>
        <p>Lista de eventos registrados, haga click en el título para modificarlo.</p>
        <div class="pb-10 pt-2">
            <x-admin.button href="/eventos/create" title="Agregar evento" />
        </div>
    </div>
    @if (count($eventos) > 0 )
        <table class="table-auto w-full rounded text-xs text-left">
            <thead class="bg-gray-100">
                <tr class="border-b">
                    <th class="py-3">Titulo</th>
                    <th class="py-3">Fecha</th>
                    <th class="py-3">Link evento</th>
                    <th class="py-3">Activo</th>
                    <th class="py-3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eventos as $evento)
                <tr class="border-b">
                    <td class="py-3">
                        <a href="/eventos/{{$evento->id}}/edit">
                            {{$evento->titulo}}
                        </a>
                    </td>
                    <td class="py-3">
                        {{$evento->fecha_evento ? $evento->fecha_evento->format('d-m-Y') : null}}
                    </td>
                    <td class="py-3">
                        {{$evento->link}}
                    </td>
                    <td class="py-3">
                        {{$evento->activo}}
                    </td>
                    <td class="py-3">
                        <form class="eliminar" action="/eventos/{{$evento->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else 
    <h3 class="text-center text-lg py-20">No hay eventos por mostrar</h3>
    @endif
</x-admin.app-layout>

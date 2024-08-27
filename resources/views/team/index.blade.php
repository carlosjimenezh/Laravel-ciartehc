<x-admin.app-layout>
    <div>
        <h1 class="text-2xl">Equipo</h1>
        <p>Lista de integrantes CIARTEHC, haga click en el nombre para modificarlo.</p>
        <div class="pb-10 pt-2">
            <x-admin.button href="/team/create" title="Agregar integrante" />
        </div>
    </div>
    @if (count($team) > 0 )
        <table class="table-auto w-full rounded">
            <thead class="bg-gray-100">
                <tr class="border-b">
                    <th class="py-3">Prefijo</th>
                    <th class="py-3">Nombre</th>
                    <th class="py-3">Cargo</th>
                    <th class="py-3">Ubicación</th>
                    <th class="py-3">Teléfono</th>
                    <th class="py-3">Extensión</th>
                    <th class="py-3">Email</th>
                    <th class="py-3">Semblanza</th>
                    <th class="py-3">CV</th>
                    <th class="py-3">Activo</th>
                    <th class="py-3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($team as $elemento)
                <tr class="border-b">
                    <td class="py-3">
                        {{$elemento->prefijo }}
                    </td>
                    <td class="py-3">
                        <a href="/team/{{$elemento->id}}/edit">
                            {{$elemento->nombre}}
                        </a>
                    </td>
                    <td class="py-3">
                        {{$elemento->cargo }}
                    </td>
                    <td class="py-3">
                        {{$elemento->ubicacion }}
                    </td>
                    <td class="py-3">
                        {{$elemento->telefono }}
                    </td>
                    <td class="py-3">
                        {{$elemento->extension }}
                    </td>
                    <td class="py-3">
                        {{$elemento->email }}
                    </td>
                    <td class="py-3">
                        {{$elemento->semblanza }}
                    </td>
                    <td class="py-3">
                        {{$elemento->cv }}
                    </td>
                    <td class="py-3">
                        {{$elemento->activo}}
                    </td>
                    <td class="py-3">
                        <form action="/team/{{$elemento->id}}" method="POST">
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
    <h3 class="text-center text-lg py-20">No hay elementos por mostrar</h3>
    @endif
</x-admin.app-layout>
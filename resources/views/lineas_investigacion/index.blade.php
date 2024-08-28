<x-admin.app-layout>
    <div class="pb-10">
        <h1 class="text-2xl">Lineas de investigación</h1>
    </div>
    @if (count($lineas_investigacion) > 0 )
        <table class="table-auto w-full rounded text-xs text-left">
            <thead class="bg-gray-100">
                <tr class="border-b">
                    <th class="py-3">Nombre</th>
                    <th class="py-3">Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lineas_investigacion as $investigacion)
                <tr class="border-b">
                    <td class="py-3">
                        <a href="/lineas-investigacion/{{$investigacion->id}}/edit">
                            {{$investigacion->nombre}}
                        </a>
                    </td>
                    <td class="py-3">
                        {{Str::limit($investigacion->descripcion, 50)}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else 
    <h3 class="text-center text-lg py-20">No hay elementos por mostrar</h3>
    @endif
</x-admin.app-layout>

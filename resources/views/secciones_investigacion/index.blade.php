<x-admin.app-layout>
    <div>
        <h1 class="text-2xl">Secciones de lineas de investigación</h1>
        <p>Las secciones nos servirán para categorizar los productos.</p>
        <div class="pb-10 pt-2">
            <x-admin.button href="/secciones-investigacion/create" title="Agregar sección" />
        </div>
    </div>
    @if (count($secciones_investigacion) > 0 )
        <table class="table-auto w-full rounded text-xs text-left">
            <thead class="bg-gray-100">
                <tr class="border-b">
                    <th class="py-3">Nombre</th>
                    <th class="py-3">Línea de investigación</th>
                    <th class="py-3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($secciones_investigacion as $secciones)
                <tr class="border-b">
                    <td class="py-3">
                        <a href="/secciones-investigacion/{{$secciones->id}}/edit">
                            {{$secciones->nombre}}
                        </a>
                    </td>
                    <td class="py-3">
                        {{$secciones->linea_investigacion->nombre}}
                    </td>
                    <td class="py-3">
                        <form class="eliminar" action="/secciones-investigacion/{{$secciones->id}}" method="POST">
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


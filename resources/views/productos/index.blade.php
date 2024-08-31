<x-admin.app-layout>
    <div>
        <h1 class="text-2xl">Productos</h1>
        <p>Lista de productos académicos, haga click en el título para modificarlo.</p>
        <div class="pb-10 pt-2">
            <x-admin.button href="/productos-admin/create" title="Agregar producto" />
        </div>
    </div>
    @if (count($productos) > 0 )
        <table class="table-auto w-full rounded text-xs text-left">
            <thead class="bg-gray-100">
                <tr class="border-b">
                    <th class="py-3">Título</th>
                    <th class="py-3">Descripción</th>
                    <th class="py-3">Sección</th>
                    <th class="py-3">Imágenes</th>
                    <th class="py-3">Activo</th>
                    <th class="py-3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr class="border-b">
                    <td class="py-3">
                        <a href="/productos-admin/{{$producto->id}}/edit">
                            {{$producto->nombre}}
                        </a>
                    </td>
                    <td class="py-3">
                        {{Str::limit($producto->descripcion, 50)}}
                    </td>
                    <td class="py-3">
                        {{$producto->seccion_investigacion->nombre}}
                    </td>
                    <td class="py-3">
                        <a href="/productos-admin/imagenes/{{$producto->id}}">
                            ver
                        </a>
                    </td>
                    <td class="py-3">
                        {{$producto->activo}}
                    </td>
                    <td class="py-3">
                        <form class="eliminar" action="/productos-admin/{{$producto->id}}" method="POST">
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
    <h3 class="text-center text-lg py-20">No hay productos por mostrar</h3>
    @endif
</x-admin.app-layout>

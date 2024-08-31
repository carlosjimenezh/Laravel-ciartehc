<x-admin.app-layout>
    <div>
        <h1 class="text-2xl">Imágenes {{$producto->nombre}}</h1>
        <p>Lista de imágenes del producto, haga click para modificar.</p>
        <div class="pb-10 pt-2">
            <x-admin.button href="/productos-admin/imagenes/{{$producto->id}}/create" title="Agregar imagen" />
        </div>
        @if (count($producto->imagenes) > 0)
        <table class="table-auto w-full rounded text-xs text-left">
            <thead class="bg-gray-100">
                <tr class="border-b">
                    <th class="py-3">Imagen</th>
                    <th class="py-3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($producto->imagenes as $imagen)
                <tr class="border-b">
                    <td class="py-3">
                        <a href="/productos-admin/imagenes/{{$producto->id}}/{{$imagen->id}}/edit">
                            <img src="{{$imagen->imagen}}" alt="" width="50px">
                        </a>
                    </td>
                    <td class="py-3">
                        <form class="eliminar" action="/productos-admin/imagenes/{{$producto->id}}/{{$imagen->id}}" method="POST">
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
        <h3 class="text-center text-lg py-20">No hay imágenes relacionadas con este producto</h3>
        @endif
    </div>
    

</x-admin.app-layout>

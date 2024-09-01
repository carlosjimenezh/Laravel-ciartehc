<x-admin.app-layout>
    <h1 class="text-base font-semibold leading-7 text-gray-900">Nueva imagen {{$producto->nombre}}</h1>
    <p class="mt-1 text-sm leading-6 text-gray-600">Las imágenes se muestran por fecha de creación.</p>
    <form action="/productos-admin/imagenes/{{$producto->id}}" method="POST" class="mt-8" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="producto_id" value={{$producto->id}}>
        <label for="imagen" class="block text-sm font-medium leading-6 text-gray-900 mb-5">
            Imagen
            <input accept="image/png, image/jpeg, image/jpg" type="file" name="imagen" id="imagen" accept="image" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-[200px] w-full block">
            @error('imagen')
                <p class="absolute text-xs text-red-600 dark:text-red-400">{{$message}}</p>
            @enderror
        </label>
        <input type="submit" value="Guardar" class="mr-1 rounded-md bg-[#232943] px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#C8DED3] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#C8DED3]">
        <a 
            class="rounded-md px-3.5 py-2.5 text-sm font-semibold shadow bg-red-200 hover:bg-red-300 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2" 
            href="/productos-admin/imagenes/{{$producto->id}}">
                Cancelar
        </a>
    </form>
</x-admin.app-layout>
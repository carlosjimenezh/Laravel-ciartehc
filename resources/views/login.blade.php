<x-admin.app-layout>
    @error('email')
        {{$message}}
    @enderror
    {{Auth::user()}}
    <h1 class="text-base font-semibold leading-7 text-gray-900">login</h1>
    <form action="/login" method="POST">
        @csrf
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900 mb-5">Email
            <input type="email" name="email" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">
        </label>
        <label for="password" class="block text-sm font-medium leading-6 text-gray-900 mb-5">Password
            <input type="password" name="password" class="p-1 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">
        </label>
        <input type="submit" value="Ingresar" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
    </form>
</x-admin.app-layout> 


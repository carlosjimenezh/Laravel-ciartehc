<x-admin.app-layout>
    <section class="mt-10 p-4 relative max-w-md mx-auto" id="login">
        <h1 class="text-3xl md:text-5xl mb-10 font-bold text-center">Login</h1>
        <form action="/login" method="POST">
            @csrf
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900 mb-5">Email
                <input type="email" name="email" class="p-2 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">
            </label>
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900 mb-5">Password
                <input type="password" name="password" class="p-2 rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md w-full block">
            </label>
            <input type="submit" value="Ingresar" class="mt-2 w-full cursor-pointer rounded-md bg-[#232943] px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#C8DED3] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#C8DED3]">
        </form>
    </section>
</x-admin.app-layout> 


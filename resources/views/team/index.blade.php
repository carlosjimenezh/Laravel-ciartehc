<x-admin.app-layout>
    <section class="conteiner">
        <aside>
            <ul>
                <li>
                    <a href="/team/create">Agregar nuevo miembro</a>
                </li>
            </ul>
        </aside>
        <h1>Team</h1>
        @if (count($team) > 0)
            @foreach ($team as $elemento)
            <div>
                <a href="/team/{{$elemento->id}}">{{$elemento->nombre}}</a>
            </div>
            @endforeach
        @else 
        <h3>No hay miembros por mostrar</h3>
        @endif
    </section>
</x-admin.app-layout>
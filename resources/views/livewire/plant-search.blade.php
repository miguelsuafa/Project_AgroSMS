<div>
    <input type="text" wire:model="query" placeholder="Buscar plantas...">

    @if (!empty($query))
        <div class="mt-3">
            @if ($plants->isEmpty())
                <p>No se encontraron resultados para "{{ $query }}"</p>
            @else
                <ul>
                    @foreach ($plants as $plant)
                        <li>{{ $plant->name }} - {{ $plant->disease_name }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    @endif
</div>



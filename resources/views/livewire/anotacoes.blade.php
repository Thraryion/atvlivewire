
<div>
    <h1>Anotações</h1>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="mb-3">
        <input type="text" wire:model="newNote" placeholder="Digite sua anotação..." class="form-control">
        <button wire:click="addNote" class="btn btn-primary mt-2">Adicionar Anotação</button>
    </div>

    <div>
        <ul class="list-group">
            @forelse ($notes as $note)
                <li class="list-group-item">{{ $note }}</li>
            @empty
                <li class="list-group-item">Nenhuma anotação encontrada.</li>
            @endforelse
        </ul>
    </div>

    <div class="mt-3">
        <button wire:click="clearNotes" class="btn btn-danger">Limpar Anotações</button>
        <button wire:click="saveNotes" class="btn btn-success">Salvar Anotações</button>
    </div>
</div>


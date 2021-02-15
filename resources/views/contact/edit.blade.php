<x-layout>
    <x-slot name="title">
        Cadastrar contato
    </x-slot>

    <h2>Editar contato ID {{$contact->id}}</h2>
    {{-- @foreach ($tasks as $task)
        {{ $task }}
    @endforeach --}}

    <form method="POST" action="{{route('contatos.update', $contact->id)}}">
        <input type="hidden" name="id" value="{{$contact->id}}">
        @csrf
        @method('put')
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{$contact->nome}}">
            </div>
            <div class="col-md-6">
                <label for="niver" class="form-label">Data de nascimento</label>
                <input type="date" class="form-control" id="niver" name="niver" value="{{$contact->niver}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="telefone1" class="form-label">Telefone 1</label>
                <input type="text" class="form-control" id="telefone1" name="telefone1" value="{{$contact->telefone1}}">
            </div>
            <div class="col-md-6">
                <label for="telefone2" class="form-label">Telefone 2</label>
                <input type="text" class="form-control" id="telefone2" name="telefone2" value="{{$contact->telefone2}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" value="{{$contact->estado}}">
            </div>
            <div class="col-md-6">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="{{$contact->cidade}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-5">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" value="{{$contact->bairro}}">
            </div>
            <div class="col-md-5">
                <label for="rua" class="form-label">Rua</label>
                <input type="text" class="form-control" id="rua" name="rua" value="{{$contact->rua}}">
            </div>
            <div class="col-md-2">
                <label for="numero" class="form-label">Número</label>
                <input type="text" class="form-control" id="numero" name="numero" value="{{$contact->numero}}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Atualizar</button>
        <a href="{{route('contatos.index')}}" type="button" class="btn btn-secondary mt-4">Cancelar</button>
        </form>
</x-layout>


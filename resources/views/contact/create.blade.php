<x-layout>
    <x-slot name="title">
        Cadastrar contato
    </x-slot>

    <h2>Cadastrar contatos</h2>
    {{-- @foreach ($tasks as $task)
        {{ $task }}
    @endforeach --}}

    <form method="POST" action="{{url('contatos/store')}}">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="col-md-6">
                <label for="niver" class="form-label">Data de nascimento</label>
                <input type="date" class="form-control" id="niver" name="niver">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="telefone1" class="form-label">Telefone 1</label>
                <input type="text" class="form-control" id="telefone1" name="telefone1">
            </div>
            <div class="col-md-6">
                <label for="telefone2" class="form-label">Telefone 2</label>
                <input type="text" class="form-control" id="telefone2" name="telefone2">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado">
            </div>
            <div class="col-md-6">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-5">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro">
            </div>
            <div class="col-md-5">
                <label for="rua" class="form-label">Rua</label>
                <input type="text" class="form-control" id="rua" name="rua">
            </div>
            <div class="col-md-2">
                <label for="numero" class="form-label">Número</label>
                <input type="text" class="form-control" id="numero" name="numero">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Cadastrar</button>
        </form>
</x-layout>


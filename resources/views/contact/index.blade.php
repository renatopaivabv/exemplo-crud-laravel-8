<x-layout>
    <x-slot name="title">
        Contatos
    </x-slot>

    <h2>Listando contatos cadastrados</h2>

    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Telefone 1</th>
                <th>Telefone 2</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Funções</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($contacts) && count($contacts)>0)
             @foreach ($contacts as $contact)
             <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->nome }}</td>
                <td>{{ $contact->telefone1 }}</td>
                <td>{{ $contact->telefone2 }}</td>
                <td>{{ $contact->estado }}</td>
                <td>{{ $contact->cidade }}</td>
                <td class="d-flex justify-content-around">
                    <a class="btn btn-primary" href="/contatos/{{$contact->id}}/edit"><i class="bi-pencil-fill"></i></a>
                    <form method="POST" action="/contatos/{{$contact->id}}"
                        onSubmit="if(!confirm('Tem certeza que quer apagar esse registro?')){return false;}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="bi-trash-fill"></i>
                        </button>
                    </form>
                </td>
             </tr>
            @endforeach
            @else
                <tr>
                    <td colspan="7">Nenhum registro</td>
                </tr>
            @endif
        </tbody>
    </table>
</x-layout>


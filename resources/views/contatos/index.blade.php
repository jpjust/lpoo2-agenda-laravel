<html>
    <body>
        <h1>Contatos</h1>

        <p><a href="/contatos/new">Novo Contato</a></p>
        {{-- A diretiva @foreach faz uma iteração em uma lista.
             Aqui ela é usada para exibir cada um dos contatos
             na página inicial.
        --}}
        @foreach ($contatos as $contato)
            <p>
                <a href="/contatos/show/{{ $contato->id }}">{{ $contato->nome }}</a>
                : {{ $contato->telefone }}
                <a href="/contatos/edit/{{ $contato->id }}">[ Editar ]</a>
                <a href="/contatos/delete/{{ $contato->id }}">[ Excluir ]</a>
            </p>
        @endforeach
    </body>
</html>

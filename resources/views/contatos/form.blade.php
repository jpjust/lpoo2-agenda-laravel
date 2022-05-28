<form action="/contatos/update" method="POST">
    {{-- O Laravel exige proteção CSRF em requisições POST,
            PUT, PATCH e DELETE.
    --}}
    @csrf

    @isset($contato)
        <input type="hidden" name="id" value="{{ $contato->id }}">
    @endisset
    <p>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" size="30" @isset($contato) value="{{ $contato->nome }}" @endisset>
    </p>
    <p>
        <label for="tel">Telefone:</label>
        <input type="text" id="tel" name="telefone" size="30" @isset($contato) value="{{ $contato->telefone }}" @endisset>
    </p>
    <p>
        <input type="submit" value="Cadastrar">
    </p>
</form>

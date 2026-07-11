
<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">

    @foreach ($produtos as $produto)
    <div>
        <h3>{{ $produto->nome }}</h3>
        <p>Marca: {{ $produto->marca }}</p>
        <p>Descrição: {{ $produto->descricao }}</p>
        <p>Preço: R$ {{ $produto->preco }}</p>

        @if ($produto->imagem)
            <img src="{{ asset('img/produto/' . $produto->imagem) }}"
                 width="150"
                 alt="{{ $produto->nome }}">
        @endif
    </div>
    <hr>
@endforeach
       
    </div>
</div>

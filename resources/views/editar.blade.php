

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Editando: {{ $produto->nome }}</h1>
  <form action="/update/{{ $produto->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
     
    <input type="text" name="nome" value="{{ $produto->nome }}">
    <input type="text" name="marca" value="{{ $produto->marca }}">
    <input type="number" name="preco" value="{{ $produto->preco }}">

    <input type="submit" class="btn btn-primary" value="Editar produto">
  </form>
</div>



<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie seu produto</h1>
  <form action="/criar" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="imagem">Imagem do Produto:</label>
      <input type="file" id="imagem" name="imagem" class="from-control-file">
    </div>
    <div class="form-group">
      <label for="title">Produto:</label>
      <input type="text" class="form-control" id="title" name="nome" placeholder="Nome do evento">
    </div>
    <div class="form-group">
      <label for="title">Marca:</label>
      <input type="text" class="form-control" id="date" name="marca">
    </div>
    <div class="form-group">
      <label for="title">descrição:</label>
      <input type="text" class="form-control" id="city" name="descricao" placeholder="descrição do produto">
    </div>
    <div class="form-group">
      <label for="title">preço:</label>
      <input type="numeric" class="form-control" id="preco" name="preco" placeholder="Preço do Produto">
    </div>

   
    <input type="submit" class="btn btn-primary" value="Criar Produto">
  </form>
</div>

<form action="?p=admin&acao=confirmar_adicao" method="post">
  <div class="form-group">
      <label for="identificador">Identificador da página</label>
      <input type="text" class="form-control" name="identificador" id="identificador" placeholder="home">
  </div>
  <div class="form-group">
      <label for="titulo">Título</label>
      <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Página principal">
  </div>
  <div class="form-group">
      <label for="menu">Menu</label>
      <input type="text" class="form-control" name="menu" id="menu" placeholder="Home">
  </div>
  <div class="form-group">
      <label for="conteudo">Página de conteúdo</label>
      <input type="text" class="form-control" name="conteudo" id="conteudo" placeholder="pagina1.html">
  </div>
    <div class="form-group">
      <label for="pontos">Pontos</label>
      <input type="text" class="form-control" name="pontos" id="pontos" placeholder="">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
  <a href="?p=admin&acao=listar"  class="btn btn-default">Voltar</a>
</form>
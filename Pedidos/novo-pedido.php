<h1>Realize seu pedido</h1>
<style>
  .form-container {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 10px;
  }
</style>
<div class="form-container">
  <form action ="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
      <div class="mb-3">
          <label>Escolha um pedido de 1 a 5</label>
          <select name="numero" class="form-control" value="<?php print $row->numero; ?>">
              <option value="1">1 Combo gragas</option>
              <option value="2">2 Combo zilean</option>
              <option value="3">3 Combo </option>
              <option value="4">4</option>
              <option value="5">5</option>
          </select>
      </div>

      <!-- Campo de endereço adicionado -->
      <div class="mb-3">
          <label for="endereco">Endereço</label>
          <input type="text" id="endereco" name="endereco" class="form-control">
      </div>

      <!-- Menu suspenso para as formas de pagamento adicionado -->
      <div class="mb-3">
          <label for="pagamento">Forma de Pagamento</label>
          <select id="pagamento" name="pagamento" class="form-control" value="<?php print $row->pagamento; ?>">>
              <option value="cartao">Cartão</option>
              <option value="dinheiro">Dinheiro</option>
          </select>
      </div>

      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>  
      </div>
  </form>
</div>

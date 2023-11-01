<h1>Pedidos realizados:</h1>
<?php
    $sql = "SELECT * FROM pedidosnovos";
    
    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd >0){
        print "<table class='table table-hover table-bordered'>";
        print "<tr>";
        print "<th>Numero do pedido</th>";
        print "<th>Endereço</th>";
        print "<th>Forma de Pagamento</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->numero."</td>";
        print "<td>".$row->endereco."</td>";
        print "<td>".$row->pagamento."</td>";
        print "</tr>";
        print "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->numero."';\"  class='btn btn-primary'>Editar</button>

                <button onclick=\"if(confirm('Deseja confirmar o seu pedido??')){location.href='?page=salvar&acao=confirmar&id=".$row->numero."';}else{false;}\" 
                class='btn btn-success'>Confirmar pedido</button>

                <button onclick=\"if(confirm('Deseja excluir o seu pedido??')){location.href='?page=salvar&acao=excluir&id=".$row->numero."';}else{false;}\" 
                class='btn btn-danger'>Excluir pedido</button>
                </td>";
        print "<td>
        </td>";
        print "<td>
        </td>";
        print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Nenhum pedido realizado</p>";
    }
?>

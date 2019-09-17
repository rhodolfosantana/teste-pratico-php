
  <!DOCTYPE html>
  <html>
    <head>
    </head>
    <body>
      <center>
        <h1 id="titulo_cadastro"> Vendas </h1>
          <div>
          
            <form action="view/view_search.php" method="POST">     
                                
              <input type="text" name="search"  placeholder="Pesquise uma venda..." autocomplete="off">
              <button type="submit" >Pesquisar</button><br/><br/>

            </form> 
          </div>

        <div>
          <?php 
            require "action/action_connection.php";
            $sql     = 'SELECT sales.*, product.name_product FROM sales LEFT JOIN product ON sales.sales_product = product.id_product';
            $stmt = $connection->prepare($sql);

            $result = $stmt->execute();
            $product = $stmt->fetchAll(PDO::FETCH_ASSOC);




          ?>
        
          <table border="1px">
              <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Fornecedores</th>
                <th>-</th>
                <th>-</th>
                
              </tr>
              
                <?php foreach($product as $prod): ?>
                  <tr>
                    <td><?php echo $prod['name_product']; ?></td>
                    <td><?php echo $prod['value']; ?></td>
                    <td><?php echo $prod['provider']; ?></td>
                    <td><a href="view/view_updateProd.php?id=<?=$prodo['id_product']?>">Editar</a></td>
                    <td><a href="action/action_deleteProd.php?id=<?=$prodo['id_product']?>">Excluir</a><br/></td>
                  </tr>
                <?php endforeach; ?>
    
          </table>
          <br/><br/>
          <button><a href="view/view_addProd.php">Cadastrar</a></button>
      
        </center>
      </div>
  
    </body>
  </html>
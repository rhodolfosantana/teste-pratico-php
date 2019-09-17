<?php
    require_once('../action/action_connection.php');
    $id = $_GET['id'];


    $query = $connection->prepare("SELECT * FROM product WHERE id_pŕoduct = ?");
    $query->bindParam(1, $id);
    $query->execute();


    $dados = $query->fetch();
    $name_prod = $dados['name_porduct'];
    $data = $dados['date_sale'];
    $address = $dados['address'];
    $idProd = $dados['id_product'];



    ?>




<center>
    
    <div >
       <h1> Cadastro de usuários </h1>
        <div >
            <form method="POST" action="../action/action_updateSale.php?id=<?=$id?>" enctype="multipart/form-data">
                <div>
                    <label for="text">Nome do Produto:</label>
                    <input type="text" name="nome_usuario" value="<?php echo $name_porduct?>">
                </div>

                <div>
                    
                    <label for="start">Data:</label>

                    <input type="date" id="start" name="trip-start"                                                             value="2018-07-22"
                    min="2018-01-01" max="2019-09-17">
                </div>

                <div>
                    <label for="text">Endereço:</label>
                    <input type="text" name="address" value="<?php echo $address?>">
                </div>
                <div>    
                   <input type="submit" value="Salvar" >
                    <button><a href="../index.php">Voltar</a></button>
                </div>


            </form>
        </div>
    </div>
</center>

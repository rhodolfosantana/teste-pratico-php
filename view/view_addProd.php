<?php
require_once('../action/action_connection.php');

?>

<center>
    
    <div>
	   <h1> Cadastro de Produtos </h1>
        <div >
	        <form method="POST" action="../action/action_addProd.php" enctype="multipart/form-data">
                <div>
                    <label for="text">Nome do Produto:</label>
                    <input type="text" name="nome_produto">
                </div>
                <div>
                     <label for="start">Data de Compra:</label>

                    <input type="date" id="start" name="data"                                        value="2019-09-17"
                    min="2018-01-01" max="2019-09-17">
                </div>
                <div>
                    <label for="text">CEP:</label>
                    <input type="text"  name="address">
                </div>
                <div>    
    	           <input type="submit" value="Cadastrar" >
                    <button><a href="../index.php">Voltar</a></button>
    	        </div>


	        </form>
        </div>
    </div>
</center>


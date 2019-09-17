<?php 
 	require "action_connection.php";
 	if( isset($_POST['id_produto']) && isset($_POST['nome_produto']) && isset($_POST['data']) && isset($_POST['address'])){
 		

		$idProd = $_POST['id_produto'];
 		$nome = $_POST['nome_produto'];
		$data = $_POST['data'];
		$address = $_POST['address']);
 		
 		$sql = "INSERT INTO product (name_porduct, date_sale, address, id_product) 
						VALUES( :nome, :data, :address, :idProd)";
 		$query = $connection->prepare($sql);
 		$query->bindParam(':nome', $nome);
		$query->bindParam(':data', $data);
		$query->bindParam(':address', $address);
		$query->bindParam(':idProd', $idProd);
 		$stmt = $query->execute();
		header('Location: ../index.php');
	} else {

 		echo "Não cadastrou";

 	}
	
  ?> 
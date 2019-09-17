<?php 
	$id = $_GET['id'];
 	require "action_connection.php";
 	if(isset($_POST['nome_produto']) && isset($_POST['idProd']) && isset($_POST['data'])){
 		

 		$nome = $_POST['nome_produto'];
		$data = $_POST['data'];
		$idProd = $_POST['idProd'];


 		

 		$sql = "UPDATE product SET name= :nome_produto, data= :data, id_product= :idProd WHERE id_sales= :id";
		$update = $connection->prepare($sql);
		$update->bindParam(':nome_usuario', $nome);
		$update->bindParam(':data', $data);
		$update->bindParam(':idProd', $idProd;
		$update->bindParam(':id', $id);

		$stmt = $update->execute();
		
 		var_dump($stmt);


		header('Location: ../index.php');
	} else {

 		echo "Erro ao atulizar.";

 	}

 
 	
	
  ?> 
<?php 
 	require "action_connection.php";


 	if( isset($_POST['nome_produto']) && isset($_POST['data']) && isset($_POST['address'])){
 		
 		$nome = $_POST['nome_produto'];
		$data = $_POST['data'];
		$address = $_POST['address'];

 		
 		$sql = "INSERT INTO product (name_product, date_sale, address) 
						VALUES( :nome, :data, :address)";
 		$query = $connection->prepare($sql);
 		$query->bindParam(':nome', $nome);
		$query->bindParam(':data', $data);
		$query->bindParam(':address', $address);
 		$stmt = $query->execute();
		header('Location: ../index.php');
	} else {

 		echo "Não cadastrou";

 	}
	
  ?> 
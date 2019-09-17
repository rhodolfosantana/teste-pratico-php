<?php 
require "action_connection.php";
if(isset($_GET['id'])){
	$idProd = $_GET['id'];

	$delete = $connection->prepare("DELETE FROM product WHERE id_product = :id ");
	$delete->bindParam(':id',$idProd);
	$delete->execute();

	header('location:../index.php');

}

?>
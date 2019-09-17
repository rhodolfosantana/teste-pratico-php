<center>
	
	<div>
		<h1>Todos os resultados:</h1>
		<?php
			require "../action/action_connection.php";
			if (isset($_POST["search"])){
				$dado = $_POST["search"];

				$output = '';



				$checking="SELECT sales.*, product.name_product FROM sales LEFT JOIN product ON sales.sales_product = product.id_product WHERE name LIKE :pesquisa OR data LIKE :pesquisa OR nome_produto LIKE :pesquisa OR address LIKE :pesquisa";


				$queryOne = $connection->prepare($checking);
				$queryOne->bindValue(':pesquisa', '%'.$dado.'%');
				$return = $queryOne -> execute();
			
			
				$stmt = $queryOne->fetchAll();
					if ($stmt!=null){
				
				
						for ($i = 0; $i < sizeof($stmt); $i++){
							$id = $stmt[$i]['id'];
							$output .= '<div class="container panel panel-default">';
							$output .= '<h3>'.$stmt[$i]['name']." - ". $stmt[$i]['address'].'</h3>';
							$output .= '</div></a>';
				
						}
					}
					else { 
						$output .= '<div class="container panel panel-default">';
						$output .= '<h3> Nada Encontrado</h3>';
						$output .= '</div>';
			
					}
				echo $output;
			}
		?>
		<button><a href="../index.php">Voltar</a></button>
	</div>
</center>

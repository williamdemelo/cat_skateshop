<?php
	include "templates/cabecario.php";
	include "templates/menu_horizontal.php";

	$id_produto = $_GET['id'];

	if($con) {
		$sql = "DELETE FROM produto WHERE id_produto = $id_produto";
		$rs = mysql_query($sql, $con);
		if ($rs) {
			echo ("Produto exluído com sucesso!");
		} else {
			echo ("Erro ao excluir produto ".mysql_error()."<br><b><a href='consulta_produtos.php'>Tente novamente</a></b> ou vá para a <a href='inxex.php'><b>Página inicial.</b></a>");
		}
	} else {
		echo ("Erro de conexão".mysql_error()."<br><b><a href='consulta_produtos.php'>Tente novamente</a></b> ou vá para a <a href='inxex.php'><b>Página inicial.</b></a>>");
	}
	include "templates/rodape.php";
?>
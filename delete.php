<?php
	require 'connection.php';
	
	if(isset($_GET)){
		$id = $_GET["id"];
		
		$sqlDelete = "DELETE FROM pizza WHERE ID = '$id'";	
		$delete = mysqli_query($connection, $sqlDelete);
		
		if (mysqli_affected_rows($connection) > 0)
		{
			echo '<script>alert("Remoção Realizada com Sucesso")</script>';	
		}
		else
		{
			echo '<script>alert("Infelizmente não foi possível realizar a Remoção")</script>';
		}
		
		echo '<script>location.href="listingData.php"</script>';
	}
?>
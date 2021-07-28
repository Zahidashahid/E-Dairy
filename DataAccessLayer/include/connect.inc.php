<?php 
	class DatabaseConnection
	{
		function getConnection()
		{
			$servername="localhost";
			$dBUsername="root";
			$dBPassward="";
			$dBName="ediary";

			$conn=mysqli_connect($servername,$dBUsername,$dBPassward,$dBName);
			//--error checking----------
			if(!$conn) 
			{
				die("Connection failed:".mysqli_connect_error() );   
			}
			else "connection successfull";
		}
	}
?>

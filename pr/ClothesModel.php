<?php

require ("Entities/ClothesEntity.php") 
class ClothesModel{
	function GetClothesTypes(){
		require 'Credentials.php';
		mysql_connect($host, $user, $passwd) or die (mysql_error());
		mysql_select_db($database);
		$result = mysql_query("SELECT DISTINCT type FROM clothes") or die (mysql_error());
		$types = array();

		while ($row = mysql_fetch_array($result)) {
			array_push($types, $row[0]);
		}
		mysql_close();
		return $types;
	}

	function GetClothesByType($type){
		require 'Credentials.php';
		mysql_connect($host, $user, $passwd) or die (mysql_error());
		mysql_select_db($database);
		$query = "SELECT * FROM clothes WHERE type LIKE '$type'";
		$result = mysql_query($query) or die (mysql_error());
		$clothesArray = array();

		while($row = mysql_fetch_array($result)){
			$name = $row[1];
			$type = $row[2];
			$price = $row[3];
			$image = $row[4];

			$clothes = new ClothesEntity(-1,$name, $type, $price, $image);
			array_push($clothesArray, $clothes);
		}

		mysql_close();
		return $clothesArray;
	}
	
}
?>
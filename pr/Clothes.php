<?php

require 'Controller/ClothesController.php';
$clothesController = new ClothesController();

if(isset($_POST['types'])){
		$clothesTables = $clothesController->CreateClothesTables($_POST['types']);
}
else{
	$clothesTables = $clothesController->CreateClothesTables('%');
}

$title = 'Clothes overview'
$content = $clothesController->CreateClothesDropdownList(). $clothesTables;

include 'lamoda.html'
?>
<?php

require ("Model/ClothesModel.php");
class ClothesController{
	function CreateClothesDropdownList(){
		$dressModel = new ClothesModel();
		$result = "<form action = '' method = 'post' width = '200px'>
		Please select a type:
		<select name = 'types'>
		<option value = '%' >All</option>
		".$this->CreateOptionValues($clothesModel->GetClothesTypes()).
		"</select>
		<input type = 'submit' value = 'Search' />
		</form>";

	return $result;
	}

	function CreateOptionValues(array $valueArray){
		$result = "";

		foreach ($valueArray as $value) {
			$result = $result."<option value='$value'>$value</option>";
		}

		return $result;
	}

	function CreateClothesTables($types){
		$clothesModel = new ClothesModel();
		$clothesArray = $clothesModel->GetClothesByType($types);
		$result = "";

		foreach ($array as $key => $clothes){
			$result = $result.
			"<table class = 'clothesTable'>
				<tr>
					<th rowspan='6' width = '150px'><img runat = "server" src = '$clothes->image'></th>
					<th width = '75px' >Name: </th>
					<td>$clothes->name</td>
				</tr>

				<tr>
					<th>Type</th>
					<td>$clothes->type</td>
				</tr>

				<tr>
					<th>Price</th>
					<td>$clothes->price</td>
				</tr>
			</table>";
		}
	}

}

?>
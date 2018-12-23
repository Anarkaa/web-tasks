<?php

cLass ClothesEntity{

	public $id;
	public $name;
	public $type;
	public $price;
	public $image;

	function construct($id, $name, $type, $price, $image){
		$this->id = $id;
		$this->name = $name;
		$this->type = $type;
		$this->price = $price;
		$this->image = $image;
	}
}
?>
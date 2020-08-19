<?php
function nombre_categoria($numero){
	if ($numero == 0) {
		return "Alimento";
	}
	if ($numero == 1) {
		return "Collares y correas";
	}
	if($numero == 2){
		return "Productos de higiene";
	}
	if($numero == 3){
		return "Productos de hogar";
	}
	if($numero == 4){
		return "Juguetes";
	}
	if($numero == 5){
		return "Ropa";
	}
	if($numero == 6){
		return "Productos de salud";
	}
}

function busca_categoria($numero){
	if ($numero == 0) {
		return "Alimento";
	}
	if ($numero == 1) {
		return "Collares y correas";
	}
	if($numero == 2){
		return "Higiene";
	}
	if($numero == 3){
		return "Hogar";
	}
	if($numero == 4){
		return "Juguete";
	}
	if($numero == 5){
		return "Ropa";
	}
	if($numero == 6){
		return "Salud";
	}
}
?>
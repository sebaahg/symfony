<?php
namespace AppBundle\Twig;

class HelperVistas extends \Twig_Extension{
	public function getFunctions() {
		return array(
			'generateTable'=> new \Twig_Function_Method($this,'generateTable')
		);
	}
	public function generateTable($num_rows,$num_columns){
		$table="<table class='table'>";
		for($i=0;$i<=$num_rows;$i++){
			$table.="<tr>";
			for($f=0;$f<=$num_columns;$f++){
				$table.="<td>COLUMNA</td>"; 
			}
			$table.="</tr>";
		}
		$table.="</table>";
		return $table;
	}
	
	public function getName() {
		return "app_bundle";
	}
}
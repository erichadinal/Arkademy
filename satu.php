<?php 
	function json(){
		$json->name ="erich adinal adrian";
		$json->age = 22;
		$json->addres = "Jl. merba no 13 rt 11 keel.cempaka permai kec. gading cempaka";
		$json->hobbies=array("olahraga","membaca","travelling");
		$json->is_married=false;
		$json->list_school=array(
			array("year_in"=>2012,"year_out"=>2015,"major"=>"SMAN 5 Kota Bengkulu"),
			array("year_in"=>2015,"year_out"=>2019,"major"=>"Teknik Informatika"),
			);
		$json->skills=array(
			array("programming"=>"beginner"),
			array("system analysis"=>"advanced"),
			array("developer"=>"advanced"),
			array("designer"=>"advanced"),
			);
		$json->interest_in_coding=true;

		$json_encode= json_encode($json);
		return $json_encode;
	}
	echo json();
?>
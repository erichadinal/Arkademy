<?php 	
	function hitung_vokal($string) {
		$resulta = substr_count($string, "a");
		$resulti = substr_count($string, "i");
		$resultu = substr_count($string, "u");
		$resulte = substr_count($string, "e");
		$resulto = substr_count($string, "o");

		$jumlahvokal = $resulta + $resulti + $resultu + $resulte + $resulto;
		$hurufvokal = "Jumlah huruf vokal: " .$jumlahvokal;
		return $hurufvokal;
	}

	echo hitung_vokal("Erich Adinal");
?>
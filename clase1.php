<?php
	$entero = 10;
	$float = 12.34;
	$string = "12";
	$array = array("key1","hola","key2","mundo" );
	$array2 = array("key1" => "hola","key2"=>"mundo" );
	$verdadero = true;
	$falso = false;

	class StrValTest{
		private $mivar = "clase1";
		public $mivar2 = "clase2";
		public function __toString(){
			return __CLASS__;
		}

		public function example(){
			return "esto es una prueba";
		}

	}

	//$jeje = intval($float);
	//echo $jeje."<br/>";

	echo "entero ". intval($entero)."<br/>";
	echo "float ". intval($float) ."<br/>";
	echo "string ". intval($string) ."<br/>";
	echo "boolean verdadero ". intval($verdadero) ."<br/>";
	echo "boolean falso ". intval($falso) ."<br/>";
	echo "hex-dec ".intval(0x165)."<br/>";
	echo "float string " .strval($float)."<br/>";
	$floatString = strval($float);
	echo "floatString". gettype($floatString)."<br/>";
	echo "falso string " . strval($falso)."<br/>";
	echo "verdadero string " .strval($verdadero)."<br/>";
	echo "class string " . strval(new StrValTest)."<br/>";
	echo "array int " .(int)$array."<br/>";
	echo "verdadero float " .(float)$verdadero."<br/>";
	var_dump((array) new StrValTest);
	echo "<br/>";
	var_dump((object)$float);


?>
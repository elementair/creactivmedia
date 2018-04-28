<?php
class Xml
{
	public function Deserializar($string){
		return simplexml_load_string($string);
	}
}
?>
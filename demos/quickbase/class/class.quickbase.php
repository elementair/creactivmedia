<?php
include("class.http.php");
include("class.xml.php");
include("class.session.php"); 

class QuickBase
{
	private $app = "https://hindsite.quickbase.com/db/";
	private $apptoken = "cqgf98bhfqqt5diwhm9dden3np9";
	private $username = "tony_gaitan@reactiv.com.mx";
	private $password = "hindsite2020";

	private function URL($type , $bd = "" , $token = "" , $params = ""){
		switch ($type) {
			case 'Login':
				return $this->app.'main?a=API_Authenticate&username='.$this->username.'&password='.$this->password;
				break;

			case 'FormDemo':
				return $this->app."".$bd.'/_DBID_CREACTIVMEDIADEMO?a=API_GetSchema&apptoken='.$this->apptoken."&ticket=".$token;
				break;

			case 'AddDemo' : 
				return $this->app."".$bd.'/_DBID_CREACTIVMEDIADEMO?a=API_AddRecord&apptoken='.$this->apptoken."&ticket=".$token."&".$params;
				break;

			default:
				throw new Exception("Error al construir la acción", 1);
				break;
		}
	}

	public function OAuth(){
		$http = new Http();
		$xml = new Xml();
		$response = $http->Request($this->URL("Login"));
		$login = $xml->Deserializar($response);
		return $login->ticket;
	}

	public function FormDemo($bd , $token){
		$http = new Http();
		$xml = new Xml();
		$response = $http->Request($this->URL("FormDemo" , $bd ,$token));
		$sellers = $xml->Deserializar($response);
		return json_encode($sellers);
	}

	public function AddDemo($bd , $token , $params){
		$http = new Http();
		$xml = new Xml();
		$response = $http->Request($this->URL("AddDemo", $bd , $token , $params));
		$sellers = $xml->Deserializar($response);
		return json_encode($sellers);
	}
}
?>
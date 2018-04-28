<?php
include("../class/class.quickbase.php");
include("../class/class.constants.php");

$qb = new Quickbase();
$accion = $_GET['a'];

switch ($accion) {

	case 'SchemaSellers' : 
		$token = $qb->OAuth();
		$sellers = $qb->SchemaSellers($token);
		$objFields = json_decode($sellers , true);
		$fields = $objFields['table']['fields']['field'];
		$html = "";
		$html .= '<input type="hidden" name="a" value="AddSeller"/>';
		foreach ($fields as $key) {
			$attributes = $key['@attributes'];
			$name =  "_fid_".$attributes['id'];

			if($key['appears_by_default']){
				if(isset($key['choices'])){
					$html .= '<div class="form-group">
				    			<label>'.$key['label'].'</label>';
							$html .='<select class="form-control" name='.$name.'>';
								foreach ($key['choices']['choice'] as $key) {
									$html .= "<option>".$key."</option>";
								}
							$html .='</select>';
					$html .= '</div>';
				} else {
					$html .= '<div class="form-group">
				    			<label>'.$key['label'].'</label>
				    			<input type="'.$attributes['base_type'].'" class="form-control" name="'.$name.'" required autocomplete="off">
			  		  	 	 </div>';
				}
			}
		}
		echo $html;
		break;

	case 'AddClient':
		$token = $qb->OAuth();
		$params = str_replace(HOST_APP."/controller/quickbase.php?a=AddClient&", "" , $url);
		$client = json_decode($qb->AddClient($token,$params));
		$response = HOST_APP."/form.php?status=";
		if($client->errcode == "0"){
			$response .= "success";
		} else {
			$response .= "error&mensaje=".$client->errtext;
		}
		//var_dump("Location : " . $response);
		header("Location: " . $response);
		break;
	
	default:
		throw new Exception("Accion no definida.", 1);
		break;
}
?>
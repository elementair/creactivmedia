<?php
include("../class/class.quickbase.php");
include("../class/class.constants.php");

$qb = new Quickbase();
$accion = $_GET['a'];
$bd = "bm7zbasaf";

switch ($accion) {
	
	case 'form':
		$token = $qb->OAuth();
		$sellers = $qb->FormDemo($bd , $token);
		$objFields = json_decode($sellers , true);
		$fields = $objFields['table']['fields']['field'];
		//var_dump($fields);

		$html = "";
		$html .= '<input type="hidden" name="a" value="add"/>';
		foreach ($fields as $key) {
			$attributes = $key['@attributes'];
			$name =  "_fid_".$attributes['id'];
			$type = $attributes['field_type'];


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
				} else if( $type == "date"){
					$html .= '<div class="form-group">
			    				<label>'.$key['label'].'</label>
			    				<input type="'.$attributes['field_type'].'" class="form-control" name="'.$name.'" required autocomplete="off">
		  		  	 	 	  </div>';
				} else if( $type == "checkbox") {
					$html .= '<div class="form-check">
							    <label class="form-check-label">
							      <input type="checkbox" class="form-check-input" name="'.$name.'">
							      '.$key["label"].'
							    </label>
							  </div>';
				} else{
					$html .= '<div class="form-group">
				    			<label>'.$key['label'].'</label>
				    			<input type="'.$attributes['field_type'].'" class="form-control" name="'.$name.'" required autocomplete="off">
			  		  	 	 </div>';
				}
			}
		}
		echo $html;
		break;

	case 'add':
		$token = $qb->OAuth();
		$params = str_replace("/quickbase/controller/creactiv.php?a=add&", "" ,"$_SERVER[REQUEST_URI]");
		$client = json_decode($qb->AddDemo($bd , $token , $params));
		$response = HOST_APP."/form.php?status=";
		if($client->errcode == "0"){
			$response .= "success";
		} else {
			$response .= "error&mensaje=".$client->errtext;
		}
		header("Location: " . $response);
		break;
	
	default:
		throw new Exception("Accion no definida en controlador Sellers.", 1);
		break;
}
?>
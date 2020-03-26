<?php

include("simplehtmldom_1_9_1/simple_html_dom.php");

$html = file_get_html('https://www.mohfw.gov.in/');

$result = [];

$paramValueAllowed = ['state'];

$q = null;

if(array_key_exists('q',$_GET)){
	$q = $_GET['q'];
}

if(!empty($q)){

	if(in_array($q,$paramValueAllowed)){

	if($q=="state"){
				$head = ['s_no','state','total_confirmed_case_indian_national','total_confirmed_cases_foreign_national','cured_discharge_migrated','death'];
				foreach($html->find('div#cases') as $e){
								$i = 1;
								foreach($e->find('div.table-responsive tbody tr') as $trk){
												$stateWiseData = [];
												foreach($trk->find('td') as $tdk){
																$stateWiseData[] = $tdk->innertext;
												}

												$data = [];
												foreach($stateWiseData as $stkey => $stvalue){
																$data[$head[$stkey]] = $stvalue;
												}

												$result[] = $data;

												$i++;	
								}	
				}

				$totalElement = count($result);
				unset($result[$totalElement - 1]);
				unset($result[$totalElement - 2]);

				echo json_encode($result,JSON_PRETTY_PRINT);
	}

	}else{
		echo json_encode(array('status' => 'fail','message' => "Please provide the valid value for parameter 'q'."),JSON_PRETTY_PRINT);
	}
}else{
	echo json_encode(array('status' => 'fail','message' => "Please provide the 'q' parameter."),JSON_PRETTY_PRINT);
}

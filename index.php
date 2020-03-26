<?php

include("simplehtmldom_1_9_1/simple_html_dom.php");

$html = file_get_html('https://www.mohfw.gov.in/');

$result = [];

foreach($html->find('div#cases') as $e){
		$i = 1;
		foreach($e->find('div.table-responsive tbody tr') as $trk){
				$stateWiseData = [];
				foreach($trk->find('td') as $tdk){
						$stateWiseData[] = $tdk->innertext;
				}

				if($i > 26){
					break;
				}
	
				$result[strtolower($stateWiseData[1])] = $stateWiseData;

		$i++;	
		}	
}


print_r(json_encode($result,JSON_PRETTY_PRINT));die;

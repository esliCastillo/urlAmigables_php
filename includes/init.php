<?php
function getPage(){
    $page = array();
    $REQUEST_URI = $_SERVER["REQUEST_URI"];
    $URI = explode('/', $REQUEST_URI);
    $lenght = count( $URI );

	switch ( $lenght ){
		case 3:
			$page['profundidad'] = 0;
            $page['name'] = 'inicio';
		break;
		case 4:
			$page['profundidad'] = 1;
			$page['name'] = $URI[ 2 ];
		break;
	}
	$page['complete']     = $URI;
   
	return $page;
}
$page = getPage();

/*
echo "<br>INIT <br>";
echo "<pre>";
var_dump($page);
echo "</pre>";
*/
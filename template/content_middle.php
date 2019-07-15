<?php
if ( file_exists( PATH_SITE.DS.'content'.DS.$page['name'].'.php' ) ) {
	include(PATH_SITE.DS.'content'.DS.$page['name'].'.php');
}
else {
	echo '<p>No existe el archivo \'content'.DS.$page['name'].'.php\'</p>';
}
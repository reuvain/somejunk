<?php
/////////////Meta tag to store data.///////////////////
	echo metahttp("refresh","5; URL=myfile.php")."\n";
	echo metaname("Description","NJIT,PCS,Lakewood")."\n";
	
	function metaname( $name = NULL, $content = NULL) {
			$meta ='<meta';
		if(isset($name)){
			$meta .= ' name="'.$name.'"';
		}	
		if(isset($content)){
			$meta .= ' content="' . $content . '"';
		}
		$meta .= ' />';
		return $meta;
	}
/////////Meta tag to communicate with the server. //////////
	function metahttp($http_equiv = NULL,$content = NULL ){
		$http = '<meta';
		if(isset($http_equiv)){
			$http .= ' http_equiv="' . $http_equiv . '"';
		}
		if(isset($content)){
			$http .= ' content="' . $content . '"';
		}
		$http .= ' />';
		return $http;
	}	
	
	
?>
<html>

	<body>
	<h2>Testing Meta Tags</h2>
	</body>
	
</html>

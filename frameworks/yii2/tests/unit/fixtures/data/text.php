<?php
$texts = [];
for($i=0; $i < 10000; $i++){
	$texts[] = [
		'title' => bin2hex(openssl_random_pseudo_bytes(20)),
		'content' => bin2hex(openssl_random_pseudo_bytes(200))
	];
}

return $texts;
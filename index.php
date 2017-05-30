<!DOCTYPE html>
<html>
	<head>
		<title>Hubspot Viz</title>
	</head>
	<body>
		<h1>Monthly Revenue</h1>

		<?php

$ENV = json_decode(file_get_contents('env.json'));
$req = curl_init();
curl_setopt_array($req, array(
	CURLOPT_URL => 'https://api.hubapi.com/deals/v1/deal/paged?' . http_build_query($ENV)
));
$res = curl_exec($req);
curl_close($req);
print_r($res);

		?>
	</body>
</html>

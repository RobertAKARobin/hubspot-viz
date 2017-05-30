<!DOCTYPE html>
<html>
	<head>
		<title>Hubspot Viz</title>
	</head>
	<body>
		<h1>Monthly Revenue</h1>

		<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$ENV = json_decode(file_get_contents('env.json'), true);
$req = curl_init();
$query = http_build_query($ENV + array(
	'includeAssociations' => true,
	'limit' => 250
)) . '&properties=dealname&propertiesWithHistory=monthly_allocation';
curl_setopt_array($req, array(
	CURLOPT_URL => 'https://api.hubapi.com/deals/v1/deal/paged?' . $query
));
$res = curl_exec($req);
curl_close($req);
print_r(json_decode($res, true));

		?>
	</body>
</html>

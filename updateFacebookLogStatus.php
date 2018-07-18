<?php

require_once 'vendor/autoload.php';

use ActiveCampaign\Api\Client;
$fbAudienceContactIds = []; // id

$acApi3 = new Client();
$acApi3->configureCredentials("https://[API_URL]", "API KEY");

foreach($fbAudienceContactIds as $contact) {
	$result = $acApi3->updateFbAudienceContactLog([
		"id"     => $contact, // This is the `em_fb_audience_contact_log.id` value `where subscriberserieslogid = em_subscriber_series_log.id`
		"status" => 1     // 1 means success
	]);
	var_dump($result);
}

?>

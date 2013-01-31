<?php

	$api_url = "";
	$api_key = "";
	$sso_ip_address = "127.0.0.1"; // the IP address that the user will access ActiveCampaign from
	$sso_username = "user1"; // the username of the person requesting access
	$sso_duration = "30"; // the duration of their access token (in minutes)

	define("ACTIVECAMPAIGN_URL", $api_url);
	define("ACTIVECAMPAIGN_API_KEY", $api_key);

	require_once("../../activecampaign-api-php/includes/ActiveCampaign.class.php");
	$ac = new ActiveCampaign(ACTIVECAMPAIGN_URL, ACTIVECAMPAIGN_API_KEY);

	if (!(int)$ac->credentials_test()) {
		print_r("Invalid credentials (URL and API Key).");
		exit();
	}

	$account = $ac->api("account/view");
//$ac->dbg($account);
	$account_url = "http://" . $account->account; // differs from API URL

	// get the user information (should include the access token)
	$sso_user = $ac->api("auth/singlesignon?sso_addr={$sso_ip_address}&sso_user={$sso_username}&sso_duration={$sso_duration}");
//$ac->dbg($sso_user);

	if (is_object($sso_user) && isset($sso_user->token)) {
		$sso_token = $sso_user->token;

		// use token in iframe or links
		echo "<p><a href=\"{$account_url}/admin/main.php?_ssot={$sso_token}\">Go to ActiveCampaign</a></p>";

		echo "<iframe src=\"{$account_url}/admin/main.php?_ssot={$sso_token}\" style=\"height: 500px; width: 75%;\"></iframe>";
	}

?>
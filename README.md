ActiveCampaign Custom API Script: Use SSO to link users to ActiveCampaign (bypassing the login), or embed as an iFrame.

## Requirements

1. [Our PHP API library](https://github.com/ActiveCampaign/activecampaign-api-php)
2. A web server where you can run PHP code

## Installation and Usage

You can install **example-sso_embed** by downloading (or cloning) the source.

Input your ActiveCampaign URL and API Key at the top. Example below:

<pre>
$api_url = "https://ACCOUNT.api-us1.com";
$api_key = "4f3c6d12f0.....00ca273778dc893";
</pre>

Add values for the SSO variables at the top. Example below:

<pre>
$sso_ip_address = "127.0.0.1";
$sso_username = "user1";
$sso_duration = "30";
</pre>

Make sure the path to the PHP library is correct:

<pre>
require_once("../../activecampaign-api-php/includes/ActiveCampaign.class.php");
</pre>

Refresh the page and you should see a link to ActiveCampaign, and an iFrame showing ActiveCampaign:

![Screenshot of script result](https://raw.github.com/ActiveCampaign/example-sso_embed/master/screenshot1.jpg)

## Documentation and Links

* [SSO API documentation](http://www.activecampaign.com/api/example.php?call=singlesignon)

## Reporting Issues

We'd love to help if you have questions or problems. Report issues using the [Github Issue Tracker](https://github.com/ActiveCampaign/example-sso_embed/issues) or email help@activecampaign.com.
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

Also add values for the SSO variables at the top. Example below:

<pre>
$sso_ip_address = "127.0.0.1";
$sso_username = "user1"; // can also use email address here
$sso_duration = "30";
</pre>

Make sure the path to the PHP library is correct:

<pre>
require_once("../../activecampaign-api-php/includes/ActiveCampaign.class.php");
</pre>

Refresh the page and you should see a link to ActiveCampaign, and an iFrame showing ActiveCampaign:

![Screenshot of script result](http://d226aj4ao1t61q.cloudfront.net/faeczxtlv_screenshot1.jpg)

## Documentation and Links

* [ActiveCampaign Single Sign-On](http://www.activecampaign.com/blog/activecampaign-single-sign-on/)
* [SSO API documentation](http://www.activecampaign.com/api/example.php?call=singlesignon)

## Reporting Issues

We'd love to help if you have questions or problems. Report issues using the [Github Issue Tracker](issues) or email help@activecampaign.com.
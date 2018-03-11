<?php

return (object) array(
	// First some settings for the site
	'siteUrl' => 'https://prettygoodhat.com/',			// the URL for your site - note trailing slash
	'timezone' => 'America/Phoenix',					// http://php.net/manual/en/timezones.php
	'mediaPoint' => 'https://media.prettygoodhat.com/',	// Micropub Media Endpoint
	
//	// Config Block for Twitter
	'twitterName' => '',					// your twitter account name, don't use the @
	'twAPIkey' => '',						// Create an app on dev.twitter.com for your account.
	'twAPIsecret' => '',					// APIkey & APIsecret are the APP's key & Secret
	'twUserKey' => '',					// UserKey & User Secret are under 'Your access token'
	'twUserSecret' => '',					// Generate those on dev.twitter.com

//	// Config Block for Mastodon
	'mastodonInstance' => '',			// your Mastodon Instance
	'mastodonToken' => '',				// get an auth code using Mastodon docs

	// Config for micro.blog
	'pingMicro' => True, 							// Set to False (boolean) if you don't use micro.blog
	'siteFeed' => 'https://prettgoodhat.com/index.xml',	// Set to your site's RSS/Atom Feed to notify micro.blog

	// Config for switchboard
	'pingSwitchboard' => False,

	// Config for Weather. If you do want weather feature, set to true 
    'weatherToggle' => False,
	'compass' => 'https://private.tracker.com/api',
	'compassKey' => 'PrivateAPIkey',
	'forecastKey' => 'DarkSkyApiKey',
	'defaultLat' => '51.5074',
	'defaultLong' => '0.1278',
	'defaultLoc' => 'London',

	// Set Frontmatter Format -- json or yaml
	'frontFormat' => 'yaml'
);

?>

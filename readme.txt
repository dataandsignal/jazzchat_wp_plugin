
=== Jazzchat ===
Contributors: piotrgregor
Donate link: https://jazzchat.pl
Tags: chat, audio, video, users, agents, domains
Requires at least: 4.6
Tested up to: 5.3.2
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

WordPress plugin for Jazzchat

Jazzchat allows you to connect users and agents within domains, using chat, audio and video.


== Description ==

WordPress plugin for Jazzchat

Jazzchat allows you to connect users and agents within domains, using chat, audio and video.
For more, please visit https://jazzchat.pl or https://wordpress.org/plugins/jazzchat.


== Installation ==

To display Jazzchat widget on WordPress page:

1. Unzip this WordPress plugin: https://github.com/dataandsignal/jazzchat_wp_plugin to wp-content/plugins folder.
2. Register your domain at Jazzchat. 
3. Open Jazzchat plugin's settings in WordPress and set domain setting (jazzchat_uuid) to your domain name.

To display Jazzchat widget on any web page:

1. Web page must reference Jazzchat Java Script, like this:
<script src='https://jazzchat.pl/client/js/jazzchat.js'></script>

2. Web page must tell Jazzchat the domain name that was registered/reserved for it, like this:
<script>var jazzchat_uuid = 'REGISTERED_DOMAIN_NAME';</script>

Yes, that's it.

OK... All of this may be included inside
<head>
or
<body>
tag, so complete code may look like this:

<html>
<!-- This simple example shows all that the web page must do to display Jazzchat widget. -->
<head>
<title>Every page is different</title>

<script type='text/javascript'>
var jazzchat_uuid = 'REGISTERED_DOMAIN_NAME';
</script>
<script  src='https://jazzchat.pl/client/js/jazzchat.js'></script>
</head>
<body>
<div>
This web page has Jazzchat widget displayed!
</div>
</body>
</html>

Live example is running at https://jazzchat.pl/lovely.html (and on https://jazzchat.pl of course!). You can inspect HTML source code in browser's console by pressing F12 (Chrome).
Note, there will likely be no agent logged in to this test domain, but you can engage your friends or just go ahead, log into this test domain and play the agent's role for your own entertainment (login credentials: domain=lovely, login=agent, password=password).
Note also that some features are limited or disibaled for this test domain.
Administrator role is limited - you cannot change login and password.
And by the same token, chat to email feature sends all emails to Data And Signal instead of test agent.
Please remember, for your domain, you must install SSL certificate and use https for audio and video calls.

Have a fun!


== Frequently Asked Questions ==

= Where can I find help? =

Please go to https://jazzchat.pl or https://dataandsignal.com and use Jazzchat live or send email to info@dataandsignal.com.

= How many domains can I register? =

You can register as many domains as you want.

= How many agents can I have in the single domain? =

This depends on the package you are using. In free version of Jazzchat there is a limit of 2 agents per domain.
In commercial ("advantage") package you can have as many agents as you want (pay per agent monthly).

== Screenshots ==


== Changelog ==

= 1.0 =
* Init version.


== Upgrade Notice ==

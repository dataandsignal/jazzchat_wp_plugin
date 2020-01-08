
=== Jazzchat ===
Contributors: piotrgregor
Donate link: https://jazzchat.pl
Tags: chat, audio, video, webrtc, email, livechat, users, agents, domains
Requires at least: 4.6
Tested up to: 5.3.2
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Jazzchat allows you to connect users and agents within domains, using chat, audio and video.


== Description ==

Jazzchat allows you to connect users and agents within domains, using chat, audio and video.

When you activate Jazzchat plugin, a chat widget is displayed in the right bottom corner of your web page.

When the widget is clicked, it will open new chat and attempt to notify all agents in your domain.

Therefore before you can use Jazzchat you must register your domain at https://jazzchat.pl and set "Your domain registered at Jazzchat" setting of this plugin, to that domain (via WordPress admin panel, page with Jazzchat settings will appear once you activated plugin).

All agents in your domain will have access to every chat started in your domain and can communicate with clients.

You can configure all the chat settings for your domain in agent's panel once you signed into your registered domain at Jazzchat.



In free version of Jazzchat there is a limit of 2 agents per domain.

In commercial ("advantage") package you can have as many agents as you want (paying per agent monthly).

For more info, please visit https://jazzchat.pl.


== Installation ==

To display Jazzchat widget on WordPress page:
--------------------------------------------

1. Register your domain at Jazzchat.

2. Install Jazzchat plugin from WordPress administrator panel, or unzip this WordPress plugin: https://github.com/dataandsignal/jazzchat_wp_plugin to wp-content/plugins folder.

3. Open Jazzchat plugin's settings in WordPress admin panel and set 'Your domain registered at Jazzchat' setting to your domain name.


Live example is running at https://jazzchat.pl/lovely.html (and on https://jazzchat.pl of course!).

You can inspect HTML source code in browser's console by pressing F12 (Chrome).

Note, there will likely be no agent logged in to this test domain, but you can engage your friends or just go ahead, log into this test domain and play the agent's role for your own entertainment (login credentials: domain=lovely, login=agent, password=password).

Note also that some features are limited or disabled for this test domain.

Administrator role is limited - you cannot change login and password.

And by the same token, chat to email feature sends all emails to Data And Signal instead of test agent.

Please remember that for your own domain, to be able to use audio and video calls you must install SSL certificate and use https.

Have a fun!


== Frequently Asked Questions ==

= Where can I find help? =

Please go to https://jazzchat.pl or https://dataandsignal.com and use Jazzchat live or send email to info@dataandsignal.com.

= How many domains can I register? =

You can register as many domains as you want.

= How many agents can I have in the single domain? =

This depends on the package you are using. In free version of Jazzchat there is a limit of 2 agents per domain.
In commercial ("advantage") package you can have as many agents as you want (paying per agent monthly).

== Screenshots ==
 
1. Chat widget displayed on the web page, when the domain is online (there are some agents logged into the domain).
2. Chat widget displayed on the web page, when the domain is offline and configured to offer email (there is no agents logged into the domain).
3. Domain can be configured to show various events and notifications. Here the info is displayed because agent opened this conversation in agent's panel (indicates agent's focus, configurable).
4. Here agent typing indication is displayed, as agent is typing something.
5. Conversation. Agent's details may be displayed (name, brief overview, picture) if configured.
6. Conversation with enabled audio and video call (menu).


== Changelog ==

= 1.0 =
* Init version.


== Upgrade Notice ==

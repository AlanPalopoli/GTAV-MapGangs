# GTA-V GangMap Panel
Interactive map of GTA V to indicate gang zones and other necessary resources that can be included.

Based on the interactive map of the MDC Panel. <dd><a href="https://github.com/booskit-codes/MDC-Panel">MDC Panel Repo</a></dd>

![image](https://github.com/AlanPalopoli/GTAV-MapGangs/assets/8279297/6cc584f2-2dac-4efc-a3f8-44f2683c9692)

<!-- #### Features
* Simple and fast form fill-out process for reports, threads, general paperwork.
* Dynamic site elements. (Live clock, Breadcrumb, Day & Night Mode)
* Cookies saving user details upon submission. (Officer Name, Rank, Badge, Call Signs)
* Dynamic input fields, slots, and forms.
* Automatic HTML code or BBCode generation.
* Friendly copy and paste procedure.

## Getting Started
These instructions will explain on how to obtain a working copy of the project up and running onto your local machine.

See the <b>Deployment</b> section for further instructions on how to setup the project after going through the <b>Prerequisites & Requirements</b> section.

#
### Prerequisites & Requirements
Web-development platforms (such as <b>WAMP</b>, <b>XAMP</b>) which include the following software is required in order to run the project on a local machine.
<pre>Apache2
PHP 7+</pre>

#
### Deployment
The following steps will, in brief, explain how to setup your project up and running onto your local machine for development and testing purposes.
<dl><dd>
	
#### 1. Local Respository

<dl>
  <dd>Download the project repository to your local machine under any development path. e.g. <i>X:/Your/Path/To/MDC</i></dd>
</dl>

#### 2. Virtual Hosts

<dl>
  <dd>Using your web-development platform of choice, create a new <b>VirtualHost</b>. This is usually the <code>httpd-vhosts.conf</code> file, however, filenames may vary on development platform basis and therefore you should research on how to accesss such a file if not knowledgable in this area.</dd>
<dd>
	
```
<VirtualHost *:80>
	ServerName MDC
	DocumentRoot "X:/Your/Path/To/MDC"
	<Directory  "X:/Your/Path/To/MDC/">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>
```
	
</dd>
</dl>

#### 3. Local Machine Hosts File

<dl>
	<dd>Access your machine's hosts file to override the <b>Domain Name System</b> (<b>DNS</b>) for a local machine domain to gain easier access to the website.</dd>

<dd>

##### Windows

* Open Command Prompt with Administrator Privileges
* Enter the following: <code>notepad C:\Windows\System32\drivers\etc\hosts</code>
</dd>

<dd>

##### Linux

* Open Terminal
* Enter the following: <code>sudo nano /etc/hosts</code>
</dd>

<dd>Add the following line at the bottom of the hosts file: <code>127.0.0.1 panel.local</code>
Save the hosts file.</dd>
</dl>

#### 4. Create a visitors database

<dl>
<dd>Locate the `db` folder within your MDC Panel repository and create an empty json file with the name `visitors.json`.</dd>
<dd>This is important as otherwise the website will not load properly!</dd>
</dl>

#### 5. Local Website Access

<dl>
<dd>Turn on your web-development platform and access the local website for development/testing purposes.</dd>
<dd><a href="http://panel.local">http://panel.local</a></dd>
</dl>
</dd>
</dl>

#

## Built With

* [Bootstrap](https://getbootstrap.com/) - Web Framework
* [FontAwesome](https://fontawesome.com/) - Font Icon Toolkit
* [Leaflet](https://leafletjs.com/) - Web Mapping Application

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## Contributors

* **CXDezign** - *Creator & Founder* - [CXDezign](https://github.com/CXDezign)
* **Biscuit** - *Developer & Project Manager* - [Biscuit](https://github.com/biscuitgtaw)
* **aeromantis** - *Developer* - [aeromantis](https://github.com/aeromantis)
* **Skent** - *Initial Arrest Report, Patrol Log, and Impound Report Generators* - [Skenticus](https://github.com/Skenticus)
* **Cascade** - *Base Leaflet code* - [Cascadee88](https://github.com/Cascadee88)
* **Spartan** - *Constant suggestions and interest in the project*.
* **Wedged** - *Constant suggestions and interest in the project*.
* **Brett** - *Original Penal Code creator and maintainer*.

## Donations

I am not accepting donations for this project, you can help by contributing to the project or by donating to either the original creator [CXDezign](https://github.com/CXDezign) and/or by donating to GTA:W.
 -->

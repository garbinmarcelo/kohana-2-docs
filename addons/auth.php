<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/addons/auth by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    addons:auth    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-06-10T17:36:46-0500" />
<meta name="keywords" content="addons,auth" />
<link rel="stylesheet" media="all" type="text/css" href="../lib/exe/cssbd55.css?s=all&amp;t=kohana" />
<link rel="stylesheet" media="screen" type="text/css" href="../lib/exe/css56d3.css?t=kohana" />
<link rel="stylesheet" media="print" type="text/css" href="../lib/exe/css97ef.css?s=print&amp;t=kohana" />
<script type="text/javascript" charset="utf-8" src="../lib/exe/jsb5bc.php?edit=0&amp;write=0" ></script>
<link rel="shortcut icon" href="../lib/tpl/kohana/images/favicon.ico" />
</head>
<body>
<!-- Start Header -->
<div id="header">

<!-- Start Logo -->
<a id="logo" href="/<?php echo explode('/', $_SERVER['REQUEST_URI'])[1]; ?>">
    <img src="./../lib/images/kohana-logo.png" alt="Kohana" />
</a>
<!-- End Logo -->

</div>
<!-- End Header -->




<!-- Start Body -->
<div id="body" class="dokuwiki clearfix">

<!-- wikipage start -->
<p id="version-warning"><strong>This is documentation for Kohana v2.3.x.</strong></p>

<!-- TOC START -->
<div class="toc">
<div class="tocheader toctoggle" id="toc__header">Table of Contents</div>
<div id="toc__inside">

<ul class="toc">
<li class="level1"><div class="li"><span class="li"><a href="#auth_module" class="toc">Auth Module</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#configuration" class="toc">Configuration</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#auto_login" class="toc">auto_login()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#login" class="toc">login()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#force_login" class="toc">force_login()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#get_user" class="toc">get_user()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#logout" class="toc">logout()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#logged_in" class="toc">logged_in()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#change_password" class="toc">change_password()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#hash_password" class="toc">hash_password()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#hash" class="toc">hash()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#find_salt" class="toc">find_salt()</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#examples" class="toc">Examples</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#registration" class="toc">Registration</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#protecting_controllers" class="toc">Protecting Controllers</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#login1" class="toc">Login</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#database_schema_for_orm_driver" class="toc">Database schema for ORM driver</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#mysql_schema" class="toc">Mysql schema</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#postgresql_schema" class="toc">PostgreSQL schema</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#model_definitions" class="toc">Model Definitions</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Stub</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Define what is a login &#039;role&#039; or make a link to related doc</td>
	</tr>
	<tr class="row2">
		<th class="col0">Todo</th><td class="col1">make better examples</td>
	</tr>
</table>



<h1><a name="auth_module" id="auth_module">Auth Module</a></h1>
<div class="level1">

<p>

The Kohana Auth module provides an easy-to-use <acronym title="Application Programming Interface">API</acronym> for basic website authentication (users) and authorization (roles).  It also offers built-in support for user session creation, auto-login and password encryption.  The Auth module is driver-based, which makes it possible to plugin to various authentication sources – currently Database and File drivers are provided.  It is outside of the scope of the Auth module to include fully-functional login, registration or password recovery forms – these should be implemented by the developer as per application requirements.
</p>

<p>
<strong>Note</strong>:  In order to log a user in, a user must have at least the <code>login</code> role. You may create and assign any other role to your users.
</p>

<p>
See <a href="../general/modules.php" class="wikilink1" title="general:modules">modules</a> for more information on using modules.
</p>

</div>

<h2><a name="configuration" id="configuration">Configuration</a></h2>
<div class="level2">

<p>
To use the Auth module, enable it in <code>application/config/config.php</code> by uncommenting the following line in the <code>$config[&#039;modules&#039;]</code> array.

</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'modules'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
	MODPATH<span class="sy0">.</span><span class="st0">'auth'</span><span class="sy0">,</span>      <span class="co1">// Authentication</span>
	<span class="sy0">...</span>
<span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

Although you can use the default configurations provided with the module, it is highly-recommended to create application specific copies of the following configuration files and modify them accordingly.  See <a href="../general/configuration.php" class="wikilink1" title="general:configuration">configuration</a> and <a href="../general/filesystem.php" class="wikilink1" title="general:filesystem">filesystem</a> for more information.
</p>

<p>
When setting the salt_pattern option, the number of positions must be greater than or equal to your salt length.  So if you&#039;re using a salt that is 10 characters or less, the pattern below would work.  Otherwise, your salt will not be properly stored in the password field.

</p>
<ul>
<li class="level1"><div class="li"> Copy <code>modules/auth/config/auth.php</code> to <code>application/config/auth.php</code></div>
</li>
</ul>
<pre class="code php">	<span class="coMULTI">/**
	 * Driver to use for authentication. By default, File and ORM (default) are available.
	 */</span>
	<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'driver'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'ORM'</span><span class="sy0">;</span>
	<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'hash_method'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'sha1'</span><span class="sy0">;</span>
	<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'salt_pattern'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'1, 3, 5, 9, 14, 15, 20, 21, 28, 30'</span><span class="sy0">;</span>  <span class="co1">// this should always be changed</span>
	<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'lifetime'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="nu0">1209600</span><span class="sy0">;</span>
	<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'users'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span> <span class="st0">'admin'</span> <span class="sy0">=&gt;</span> <span class="st0">'b3154acf3a344170077d11bdb5fff31532f679a1919e716a02'</span><span class="sy0">,</span><span class="br0">&#41;</span><span class="sy0">;</span></pre><ul>
<li class="level1"><div class="li"> For security reasons, you should also create copies of the <code>system/config/cookie.php</code> and <code>system/config/session.php</code> in your <code>application/config</code> directory and modify the values accordingly.  See <a href="../installation/deployment.php" class="wikilink1" title="installation:deployment">deployment</a> for more information.</div>
</li>
</ul>

</div>

<h4><a name="drivers" id="drivers">Drivers</a></h4>
<div class="level4">

<p>

<code>$config[&#039;driver&#039;]</code> sets the driver for your auth module. Kohana supports 2 drivers:
</p>
<ul>
<li class="level1"><div class="li"> File - users&#039; credentials are stored in the auth module config file.</div>
</li>
<li class="level1"><div class="li"> ORM  - users and roles are stored in database (default). All the logic is done through <a href="../libraries/orm.php" class="wikilink1" title="libraries:orm">orm</a>. Here is the database schema used by the auth module when using ORM driver:</div>
</li>
</ul>

<p>

<a href="#mysql_schema" title="addons:auth &crarr;" class="wikilink1">Database schema for MySQL</a> 
</p>

<p>
<a href="#postgresql_schema" title="addons:auth &crarr;" class="wikilink1">Database schema for PostgreSQL</a>
</p>

<p>
To store users in non-default database, set predefined <a href="../libraries/database/configuration.php" class="wikilink1" title="libraries:database:configuration">database group</a> in models. For example: <code>models/user_token.php</code> with <code>users</code> group.

</p>
<pre class="code php"><span class="kw2">class</span> User_Token_Model <span class="kw2">extends</span> Auth_User_Token_Model <span class="br0">&#123;</span>
&nbsp;
 protected <span class="re1">$db</span> <span class="sy0">=</span> <span class="st0">'users'</span><span class="sy0">;</span>
 <span class="co1">// This class can be replaced or extended</span>
&nbsp;
<span class="br0">&#125;</span> <span class="co1">// End User Token Model</span></pre>
</div>

<h4><a name="hash_methods" id="hash_methods">Hash methods</a></h4>
<div class="level4">

<p>

<code>$config[&#039;hash_method&#039;]</code> sets the type of hash to use for passwords (e.g. sha1, md5). Any algorithm supported by the hash function can be used here. Note that the length of your password is determined by the hash type and the number of salt characters defined. Default is <em>sha1</em>.
</p>

</div>

<h4><a name="salt_pattern" id="salt_pattern">Salt pattern</a></h4>
<div class="level4">

<p>

<code>$config[&#039;salt_pattern&#039;]</code> defines the hash offsets to insert the salt at. The values are to be in ascending numerical order, and that the largest number is less than the length of your chosen hash algorithm. (40 for sha1, 32 for md5). You must have at least one salt offset, and can add up to length/2 offsets (SHA1 = 40 so 40/2 = 20 maximum). The password hash length will be increased by the total number of offsets so for the default settings of SHA1 and 10 offsets, the password field will have a length of 50. <strong>This should always be changed as soon as possible. Changing your salt pattern will invalidate every existing users&#039; password!</strong>.
</p>

</div>

<h4><a name="remember_me_lifetime" id="remember_me_lifetime">Remember me lifetime</a></h4>
<div class="level4">

<p>

<code>$config[&#039;lifetime&#039;]</code> sets the auto-login (remember me) cookie lifetime, in seconds. The default lifetime is two weeks.

</p>
<ul>
<li class="level1"><div class="li"> For security reasons, you should also create copies of the <code>system/config/cookie.php</code> and <code>system/config/session.php</code> in your <code>application/config</code> directory and modify the values accordingly.  See <a href="../installation/deployment.php" class="wikilink1" title="installation:deployment">deployment</a> for more information.</div>
</li>
</ul>

</div>

<h4><a name="session_key" id="session_key">Session key</a></h4>
<div class="level4">

<p>

<code>$config[&#039;session_key&#039;]</code> sets the session key that will be used to store the current user. It allows to have several instances of Auth.
</p>

</div>

<h4><a name="static_users" id="static_users">Static users</a></h4>
<div class="level4">

<p>

<code>$config[&#039;users&#039;]</code> is only used when using the <code>File</code> driver. It contains usernames (keys) and hashed passwords (values)/
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="auto_login" id="auto_login">auto_login()</a></h3>
<div class="level3">

<p>
<code>auto_login()</code> tries to login a user automatically. Only works if the user first logged in with the $remember option.
</p>

</div>

<h3><a name="login" id="login">login()</a></h3>
<div class="level3">

<p>
<code>login($username, $password, $remember = FALSE)</code> validates a user&#039;s authentication credentials and logs a user in. It takes:

</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$username</code> username to log in</div>
</li>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$password</code> password to check against (plaintext - not hashed)</div>
</li>
<li class="level1"><div class="li"> <strong>[boolean]</strong> <code>$remember</code> enable auto-login (default FALSE). If true, it keeps the user&#039;s login information, so the user can be logged in automatically, whenever he comes back, using auto_login(). The default duration of the auto-login cookie is two weeks, and can be set in the Auth config file.</div>
</li>
</ul>

<p>

<em>Note: login() checks if the given User has the role &#039;login&#039;. So every user you want to be able to log into your system has to have at least the &#039;login&#039; role. An user can have more than one role.</em>
</p>
<pre class="code php"><span class="re1">$user</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'user'</span><span class="sy0">,</span> <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">username</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">auth</span> <span class="sy0">=</span> <span class="kw2">new</span> Auth<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">if</span> <span class="br0">&#40;</span> <span class="sy0">!</span> <span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">loaded</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
	<span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">add_error</span><span class="br0">&#40;</span><span class="st0">'username'</span><span class="sy0">,</span> <span class="st0">'not_found'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
<span class="kw1">elseif</span> <span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">auth</span><span class="sy0">-&gt;</span><span class="me1">login</span><span class="br0">&#40;</span><span class="re1">$user</span><span class="sy0">,</span> <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">password</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
	url<span class="sy0">::</span><span class="me2">redirect</span><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">get_once</span><span class="br0">&#40;</span><span class="st0">'referrer'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
<span class="kw1">else</span>
<span class="br0">&#123;</span>
	<span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">add_error</span><span class="br0">&#40;</span><span class="st0">'password'</span><span class="sy0">,</span> <span class="st0">'incorrect_password'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="force_login" id="force_login">force_login()</a></h3>
<div class="level3">

<p>
<code>force_login($username)</code> forces a specific username to be logged in, without specifying a password

</p>

</div>

<h3><a name="get_user" id="get_user">get_user()</a></h3>
<div class="level3">

<p>
<code>get_user()</code> returns the currently logged in user, or FALSE.

</p>
<pre class="code php"><span class="re1">$user_id</span> <span class="sy0">=</span> Auth<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">get_user</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">id</span><span class="sy0">;</span>
<span class="re1">$username</span> <span class="sy0">=</span> Auth<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">get_user</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">username</span><span class="sy0">;</span></pre>
<p>

Example: Displaying the username in a view

</p>
<pre class="code php"><span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">specialchars</span><span class="br0">&#40;</span>Auth<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">get_user</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">username</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="kw2">?&gt;</span></pre>
</div>

<h3><a name="logout" id="logout">logout()</a></h3>
<div class="level3">

<p>
<code>logout($destroy = FALSE))</code> logs a user out by removing the appropriate session variables.

</p>
<ul>
<li class="level1"><div class="li"> <strong>[boolean]</strong> <code>$destroy</code> If true, completely destroy the session; if false, do not delete the session, but only remove the authentication information from the session (default FALSE).</div>
</li>
</ul>
<pre class="code php"><span class="co1">// A logout function in a controller</span>
<span class="kw2">public</span> <span class="kw2">function</span> logout<span class="br0">&#40;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">auth</span> <span class="sy0">=</span> <span class="kw2">new</span> Auth<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">auth</span><span class="sy0">-&gt;</span><span class="me1">logout</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    url<span class="sy0">::</span><span class="me2">redirect</span><span class="br0">&#40;</span><span class="st0">'welcome'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="co1">// or using a a static method</span>
<span class="kw2">public</span> <span class="kw2">function</span> logout<span class="br0">&#40;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    Auth<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">logout</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    url<span class="sy0">::</span><span class="me2">redirect</span><span class="br0">&#40;</span><span class="st0">'welcome'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="logged_in" id="logged_in">logged_in()</a></h3>
<div class="level3">

<p>
<code>logged_in($role = NULL)</code> check if there is an active session. Optionally allows checking for specific roles.

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="br0">&#40;</span>Auth<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">logged_in</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
     ? <span class="st0">'logged_in'</span>
     <span class="sy0">:</span> <span class="st0">'logged_out'</span><span class="sy0">;</span></pre><ul>
<li class="level1"><div class="li"> <strong>[string|array]</strong> <code>$role</code> a role or an array of roles to check the user against(default NULL).</div>
</li>
</ul>

</div>

<h3><a name="change_password" id="change_password">change_password()</a></h3>
<div class="level3">

<p>
<code>change_password(array &amp; $array, $save = FALSE)</code> Validates an array for a matching password and password_confirm field.

</p>
<ul>
<li class="level1"><div class="li"> <strong>[array]</strong> <code>$array</code> values to check</div>
</li>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$save</code> save the user if true</div>
</li>
</ul>
<ul>
<li class="level1"><div class="li"> This functions runs validation against the password and password confirm fields only.</div>
</li>
<li class="level1"><div class="li"> $array should contain two fields &#039;password&#039; and &#039;password_confirm&#039;</div>
</li>
<li class="level1"><div class="li"> Set $save to true if you want the user object to be saved after changing the password.</div>
</li>
<li class="level1"><div class="li"> If you set $save to a string, the user will be redirected to that page on a successful save.</div>
</li>
</ul>

<p>

Example 1: Changing the password only.
Use this when you want to perform specific actions only on a sucessful password change or don&#039;t wish to save the change immediately.
</p>
<pre class="code php"><span class="re1">$post</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">post</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">change_password</span><span class="br0">&#40;</span><span class="re1">$post</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    <span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">save</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="co1">// Other tasks you want to perform</span>
<span class="br0">&#125;</span> <span class="kw1">else</span> <span class="br0">&#123;</span>
    <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">errors</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
        <span class="co1">// Handle validation errors</span>
    <span class="br0">&#125;</span> <span class="kw1">else</span> <span class="br0">&#123;</span>
        <span class="co1">// Handle non-validation errors</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
<p>
Example 2: Changing the password and saving the user object.
Use this when you want to save the change straight away. It allows you to have more concise code which only handles the error.
</p>
<pre class="code php"><span class="re1">$post</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">post</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">if</span> <span class="br0">&#40;</span><span class="sy0">!</span><span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">change_password</span><span class="br0">&#40;</span><span class="re1">$post</span><span class="sy0">,</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">errors</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
        <span class="co1">// Handle validation errors</span>
    <span class="br0">&#125;</span> <span class="kw1">else</span> <span class="br0">&#123;</span>
        <span class="co1">// Handle non-validation errors</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
<p>
Example 3: Changing the password, saving the user object and redirecting to another page.
Upon successful changing of the password, the user will be sent to a different page (in this case &#039;user/change_password_success&#039;
</p>
<pre class="code php"><span class="re1">$post</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">post</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">if</span> <span class="br0">&#40;</span><span class="sy0">!</span><span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">change_password</span><span class="br0">&#40;</span><span class="re1">$post</span><span class="sy0">,</span> <span class="st0">'user/change_password_success'</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">errors</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
        <span class="co1">// Handle validation errors</span>
    <span class="br0">&#125;</span> <span class="kw1">else</span> <span class="br0">&#123;</span>
        <span class="co1">// Handle non-validation errors</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="hash_password" id="hash_password">hash_password()</a></h3>
<div class="level3">

<p>
<code>hash_password($password, $salt = FALSE)</code> creates a hashed password from a plaintext password, inserting salt based on the configured salt pattern.

</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$password</code> plaintext password</div>
</li>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$salt</code> hashed password string</div>
</li>
</ul>
<ul>
<li class="level1"><div class="li"> NOTE: It hashes using the config value of “hash_method”, defined in the $configs array, when creating a new instance of the Auth module.</div>
</li>
</ul>

</div>

<h3><a name="hash" id="hash">hash()</a></h3>
<div class="level3">

<p>
<code>hash($str)</code> performs a hash using the hash method set in the auth config file (e.g. sha1, md5).
</p>

</div>

<h3><a name="find_salt" id="find_salt">find_salt()</a></h3>
<div class="level3">

<p>
<code>find_salt($password)</code> finds the salt from a password, based on the configured salt pattern. Needed for doing password checks yourself in situations other than login.
</p>

</div>

<h2><a name="examples" id="examples">Examples</a></h2>
<div class="level2">

<p>
To start using Auth module you have to create <code>users</code>, <code>roles</code>, <code>roles_users</code> tables with required fields in <code>users</code>: username, password, logins, last_login at the minimum (and so on with your own fields) – use the <acronym title="Structured Query Language">SQL</acronym> code in the “Database schema for ORM driver” section below.

</p>

</div>

<h3><a name="registration" id="registration">Registration</a></h3>
<div class="level3">

<p>
Example - Create User, Login, and Redirect:
 

</p>
<pre class="code php">    <span class="co1">// grab relevant $_POST data</span>
    <span class="re1">$username</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">post</span><span class="br0">&#40;</span><span class="st0">'username'</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="re1">$password</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">post</span><span class="br0">&#40;</span><span class="st0">'password'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
    <span class="co1">// instantiate User_Model and set attributes to the $_POST data</span>
    <span class="re1">$user</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'user'</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">username</span> <span class="sy0">=</span> <span class="re1">$username</span><span class="sy0">;</span>
    <span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">password</span> <span class="sy0">=</span> Auth<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">hash_password</span><span class="br0">&#40;</span><span class="re1">$password</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
    <span class="co1">// if the user was successfully created...</span>
    <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">add</span><span class="br0">&#40;</span>ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'role'</span><span class="sy0">,</span> <span class="st0">'login'</span><span class="br0">&#41;</span><span class="br0">&#41;</span> AND <span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">save</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
&nbsp;
        <span class="co1">// login using the collected data</span>
        Auth<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">login</span><span class="br0">&#40;</span><span class="re1">$username</span><span class="sy0">,</span> <span class="re1">$password</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
        <span class="co1">// redirect to somewhere         </span>
        url<span class="sy0">::</span><span class="me2">redirect</span><span class="br0">&#40;</span><span class="st0">'user/profile'</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span></pre>
</div>

<h3><a name="protecting_controllers" id="protecting_controllers">Protecting Controllers</a></h3>
<div class="level3">

<p>

To make sure that certain controllers can be accessed by the appropriate users you can do the following:

</p>
<pre class="code php">    <span class="kw2">function</span> __construct<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
        parent<span class="sy0">::</span>__construct<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">=</span> Session<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="re1">$authentic</span><span class="sy0">=</span><span class="kw2">new</span> Auth<span class="sy0">;</span>
	<span class="kw1">if</span> <span class="br0">&#40;</span><span class="sy0">!</span><span class="re1">$authentic</span><span class="sy0">-&gt;</span><span class="me1">logged_in</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
	     <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><span class="st0">&quot;requested_url&quot;</span><span class="sy0">,</span><span class="st0">&quot;/&quot;</span><span class="sy0">.</span>url<span class="sy0">::</span><a href="http://www.php.net/current"><span class="kw3">current</span></a><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// this will redirect from the login page back to this page</span>
	     url<span class="sy0">::</span><span class="me2">redirect</span><span class="br0">&#40;</span><span class="st0">'/user/login'</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
	    <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">user</span> <span class="sy0">=</span> <span class="re1">$authentic</span><span class="sy0">-&gt;</span><span class="me1">get_user</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//now you have access to user information stored in the database</span>
	<span class="br0">&#125;</span>
    <span class="br0">&#125;</span></pre>
<p>

To allow only users with a certain role (admin) to a model, change &#039;if (!$authentic→logged_in()){&#039; to if (!$authentic→logged_in(“admin”)){

</p>
<pre class="code php">    <span class="kw2">function</span> __construct<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
        parent<span class="sy0">::</span>__construct<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">=</span> Session<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="re1">$authentic</span><span class="sy0">=</span><span class="kw2">new</span> Auth<span class="sy0">;</span>
	<span class="kw1">if</span> <span class="br0">&#40;</span><span class="sy0">!</span><span class="re1">$authentic</span><span class="sy0">-&gt;</span><span class="me1">logged_in</span><span class="br0">&#40;</span><span class="st0">'admin'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
	     <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><span class="st0">&quot;requested_url&quot;</span><span class="sy0">,</span><span class="st0">&quot;/&quot;</span><span class="sy0">.</span>url<span class="sy0">::</span><a href="http://www.php.net/current"><span class="kw3">current</span></a><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// this will redirect from the login page back to this page/</span>
	     url<span class="sy0">::</span><span class="me2">redirect</span><span class="br0">&#40;</span><span class="st0">'/user/login'</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
	    <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">user</span> <span class="sy0">=</span> <span class="re1">$authentic</span><span class="sy0">-&gt;</span><span class="me1">get_user</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//now you have access to user information stored in the database</span>
	<span class="br0">&#125;</span>
    <span class="br0">&#125;</span></pre>
</div>

<h3><a name="login1" id="login1">Login</a></h3>
<div class="level3">

<p>
When you implement your login form, it is very helpful if the names of the form fields match the names of the database fields (<code>username</code> and <code>password</code>).
</p>

</div>

<h5><a name="login_example_1" id="login_example_1">Login Example 1</a></h5>
<div class="level5">

<p>
user login, redirects to a page stored in the session if a user is logged in with the proper role. If the user is logged in but does not have the role required the user will be redirected to a page explaining this. 
If the user is not logged in the user will be redirected to a login page.
If there is POST data this function is called from a login form so the data is verified and the user is logged in and again redirected to this function, but as the user is now logged in, redirected to the page stored in the session variable. Otherwise the user can try to login again.
</p>
<pre class="code php">        <span class="coMULTI">/*
	main login function, return to page if logged in with proper credentials
	*/</span>
	<span class="kw2">public</span> <span class="kw2">function</span> login<span class="br0">&#40;</span><span class="re1">$role</span><span class="sy0">=</span><span class="st0">&quot;&quot;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="kw1">if</span> <span class="br0">&#40;</span>Auth<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">logged_in</span><span class="br0">&#40;</span><span class="re1">$role</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
                <span class="br0">&#123;</span>
			url<span class="sy0">::</span><span class="me2">redirect</span><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">&quot;requested_url&quot;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//return to page where login was called</span>
		<span class="br0">&#125;</span>
		<span class="kw1">else</span>
		<span class="br0">&#123;</span>
			<span class="kw1">if</span> <span class="br0">&#40;</span>Auth<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">logged_in</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
			    <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">title</span><span class="sy0">=</span><span class="st0">&quot;No Access&quot;</span><span class="sy0">;</span>
			    <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">content</span><span class="sy0">=</span><span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'user/noaccess'</span><span class="br0">&#41;</span><span class="sy0">;</span>
			<span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
			    <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">title</span><span class="sy0">=</span><span class="st0">&quot;Please Login&quot;</span><span class="sy0">;</span>
			    <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">content</span><span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'user/login'</span><span class="br0">&#41;</span><span class="sy0">;</span>
			<span class="br0">&#125;</span>
		<span class="br0">&#125;</span>
		<span class="re1">$form</span> <span class="sy0">=</span> <span class="re1">$_POST</span><span class="sy0">;</span>
		<span class="kw1">if</span><span class="br0">&#40;</span><span class="re1">$form</span><span class="br0">&#41;</span>
		<span class="br0">&#123;</span>
			<span class="co1">// Load the user</span>
			<span class="re1">$user</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'user'</span><span class="sy0">,</span> <span class="re1">$form</span><span class="br0">&#91;</span><span class="st0">'username'</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="sy0">;</span>
			<span class="co1">// orm user object or $form['username'] could be used</span>
                        Auth<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">login</span><span class="br0">&#40;</span><span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">username</span><span class="sy0">,</span> <span class="re1">$form</span><span class="br0">&#91;</span><span class="st0">'password'</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="sy0">;</span>
			url<span class="sy0">::</span><span class="me2">redirect</span><span class="br0">&#40;</span><span class="st0">'/user/login'</span><span class="br0">&#41;</span><span class="sy0">;</span>
		<span class="br0">&#125;</span>
	<span class="br0">&#125;</span></pre>
</div>

<h5><a name="login_example_2" id="login_example_2">Login Example 2</a></h5>
<div class="level5">

<p>
This example uses the User ORM model, which provides better validation than using the “Auth::instance()→login()” method (the code from example 1 will fail if username is missing or doesn&#039;t exist in the database).

</p>
<pre class="code php"><span class="kw2">public</span> <span class="kw2">function</span> login<span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
	<span class="co1">//Check if already logged in</span>
	<span class="kw1">if</span> <span class="br0">&#40;</span>Auth<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">logged_in</span><span class="br0">&#40;</span><span class="st0">'login'</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
		url<span class="sy0">::</span><span class="me2">redirect</span><span class="br0">&#40;</span><span class="st0">'index'</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span> <span class="kw1">else</span> <span class="kw1">if</span> <span class="br0">&#40;</span>Auth<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">logged_in</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
		url<span class="sy0">::</span><span class="me2">redirect</span><span class="br0">&#40;</span><span class="st0">'accessdenied'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//User hasn't confirmed account yet</span>
	<span class="br0">&#125;</span>
&nbsp;
	<span class="co1">//Initialize template and form fields</span>
	<span class="re1">$view</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'login'</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">username</span> <span class="sy0">=</span> <span class="st0">''</span><span class="sy0">;</span>
	<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">password</span> <span class="sy0">=</span> <span class="st0">''</span><span class="sy0">;</span>
&nbsp;
	<span class="co1">//Attempt login if form was submitted</span>
	<span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$post</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">post</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
		<span class="kw1">if</span> <span class="br0">&#40;</span>ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'user'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">login</span><span class="br0">&#40;</span><span class="re1">$post</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
			url<span class="sy0">::</span><span class="me2">redirect</span><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'requested_url'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
		<span class="br0">&#125;</span> <span class="kw1">else</span> <span class="br0">&#123;</span>
			<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">username</span> <span class="sy0">=</span> <span class="re1">$post</span><span class="br0">&#91;</span><span class="st0">'username'</span><span class="br0">&#93;</span><span class="sy0">;</span> <span class="co1">//Redisplay username (but not password) when form is redisplayed.</span>
			<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">message</span> <span class="sy0">=</span> <a href="http://www.php.net/in_array"><span class="kw3">in_array</span></a><span class="br0">&#40;</span><span class="st0">'required'</span><span class="sy0">,</span> <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">errors</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> ? <span class="st0">'Username and password are required.'</span> <span class="sy0">:</span> <span class="st0">'Invalid username and/or password.'</span><span class="sy0">;</span>
		<span class="br0">&#125;</span>
	<span class="br0">&#125;</span>
&nbsp;
	<span class="co1">//Display login form</span>
	<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
And your view would look something like this:

</p>
<pre class="code php"><span class="sy0">&lt;</span>h1<span class="sy0">&gt;</span>Welcome<span class="sy0">!</span> Please <a href="http://www.php.net/log"><span class="kw3">log</span></a> in<span class="sy0">.&lt;/</span>h1<span class="sy0">&gt;</span>
&nbsp;
<span class="kw2">&lt;?php</span> <span class="kw1">if</span> <span class="br0">&#40;</span><a href="http://www.php.net/isset"><span class="kw3">isset</span></a><span class="br0">&#40;</span><span class="re1">$message</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">:</span> <span class="kw2">?&gt;</span>
	<span class="sy0">&lt;</span>div <span class="kw2">class</span><span class="sy0">=</span><span class="st0">&quot;error&quot;</span> style<span class="sy0">=</span><span class="st0">&quot;color: red;&quot;</span><span class="sy0">&gt;</span>
		<span class="kw2">&lt;?</span><span class="sy0">=</span><span class="re1">$message</span>?<span class="sy0">&gt;</span>
	<span class="sy0">&lt;/</span>div<span class="sy0">&gt;</span>
<span class="kw2">&lt;?php</span> <span class="kw1">endif</span><span class="sy0">;</span> <span class="kw2">?&gt;</span>
&nbsp;
<span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">open</span><span class="br0">&#40;</span><span class="st0">'login'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="kw2">?&gt;</span>
	<span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">label</span><span class="br0">&#40;</span><span class="st0">'username'</span><span class="sy0">,</span> <span class="st0">'Username:'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="kw2">?&gt;</span>
	<span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">input</span><span class="br0">&#40;</span><span class="st0">'username'</span><span class="sy0">,</span> <span class="re1">$username</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="kw2">?&gt;</span>
	<span class="sy0">&lt;</span>br <span class="sy0">/&gt;</span>
	<span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">label</span><span class="br0">&#40;</span><span class="st0">'password'</span><span class="sy0">,</span> <span class="st0">'Password:'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="kw2">?&gt;</span>
	<span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">password</span><span class="br0">&#40;</span><span class="st0">'password'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="kw2">?&gt;</span>
	<span class="sy0">&lt;</span>br <span class="sy0">/&gt;</span>
	<span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">submit</span><span class="br0">&#40;</span><span class="st0">'submit'</span><span class="sy0">,</span> <span class="st0">'Login'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="kw2">?&gt;</span>
<span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">close</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="kw2">?&gt;</span></pre>
</div>

<h2><a name="database_schema_for_orm_driver" id="database_schema_for_orm_driver">Database schema for ORM driver</a></h2>
<div class="level2">

</div>

<h3><a name="mysql_schema" id="mysql_schema">Mysql schema</a></h3>
<div class="level3">
<pre class="code sql"><span class="kw1">CREATE</span> <span class="kw1">TABLE</span> <span class="kw1">IF</span> <span class="kw1">NOT</span> <span class="kw1">EXISTS</span> <span class="st0">`roles`</span> <span class="br0">&#40;</span>
  <span class="st0">`id`</span> int<span class="br0">&#40;</span><span class="nu0">11</span><span class="br0">&#41;</span> <span class="kw1">UNSIGNED</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span> <span class="kw1">AUTO_INCREMENT</span>,
  <span class="st0">`name`</span> varchar<span class="br0">&#40;</span><span class="nu0">32</span><span class="br0">&#41;</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  <span class="st0">`description`</span> varchar<span class="br0">&#40;</span><span class="nu0">255</span><span class="br0">&#41;</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  <span class="kw1">PRIMARY</span> <span class="kw1">KEY</span>  <span class="br0">&#40;</span><span class="st0">`id`</span><span class="br0">&#41;</span>,
  <span class="kw1">UNIQUE</span> <span class="kw1">KEY</span> <span class="st0">`uniq_name`</span> <span class="br0">&#40;</span><span class="st0">`name`</span><span class="br0">&#41;</span>
<span class="br0">&#41;</span> ENGINE<span class="sy0">=</span>InnoDB  <span class="kw1">DEFAULT</span> CHARSET<span class="sy0">=</span>utf8;
&nbsp;
<span class="kw1">INSERT</span> <span class="kw1">INTO</span> <span class="st0">`roles`</span> <span class="br0">&#40;</span><span class="st0">`id`</span>, <span class="st0">`name`</span>, <span class="st0">`description`</span><span class="br0">&#41;</span> <span class="kw1">VALUES</span><span class="br0">&#40;</span><span class="nu0">1</span>, <span class="st0">'login'</span>, <span class="st0">'Login privileges, granted after account confirmation'</span><span class="br0">&#41;</span>;
<span class="kw1">INSERT</span> <span class="kw1">INTO</span> <span class="st0">`roles`</span> <span class="br0">&#40;</span><span class="st0">`id`</span>, <span class="st0">`name`</span>, <span class="st0">`description`</span><span class="br0">&#41;</span> <span class="kw1">VALUES</span><span class="br0">&#40;</span><span class="nu0">2</span>, <span class="st0">'admin'</span>, <span class="st0">'Administrative user, has access to everything.'</span><span class="br0">&#41;</span>;
&nbsp;
<span class="kw1">CREATE</span> <span class="kw1">TABLE</span> <span class="kw1">IF</span> <span class="kw1">NOT</span> <span class="kw1">EXISTS</span> <span class="st0">`roles_users`</span> <span class="br0">&#40;</span>
  <span class="st0">`user_id`</span> int<span class="br0">&#40;</span><span class="nu0">10</span><span class="br0">&#41;</span> <span class="kw1">UNSIGNED</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  <span class="st0">`role_id`</span> int<span class="br0">&#40;</span><span class="nu0">10</span><span class="br0">&#41;</span> <span class="kw1">UNSIGNED</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  <span class="kw1">PRIMARY</span> <span class="kw1">KEY</span>  <span class="br0">&#40;</span><span class="st0">`user_id`</span>,<span class="st0">`role_id`</span><span class="br0">&#41;</span>,
  <span class="kw1">KEY</span> <span class="st0">`fk_role_id`</span> <span class="br0">&#40;</span><span class="st0">`role_id`</span><span class="br0">&#41;</span>
<span class="br0">&#41;</span> ENGINE<span class="sy0">=</span>InnoDB <span class="kw1">DEFAULT</span> CHARSET<span class="sy0">=</span>utf8;
&nbsp;
<span class="kw1">CREATE</span> <span class="kw1">TABLE</span> <span class="kw1">IF</span> <span class="kw1">NOT</span> <span class="kw1">EXISTS</span> <span class="st0">`users`</span> <span class="br0">&#40;</span>
  <span class="st0">`id`</span> int<span class="br0">&#40;</span><span class="nu0">11</span><span class="br0">&#41;</span> <span class="kw1">UNSIGNED</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span> <span class="kw1">AUTO_INCREMENT</span>,
  <span class="st0">`email`</span> varchar<span class="br0">&#40;</span><span class="nu0">127</span><span class="br0">&#41;</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  <span class="st0">`username`</span> varchar<span class="br0">&#40;</span><span class="nu0">32</span><span class="br0">&#41;</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span> <span class="kw1">DEFAULT</span> <span class="st0">''</span>,
  <span class="st0">`password`</span> char<span class="br0">&#40;</span><span class="nu0">50</span><span class="br0">&#41;</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  <span class="st0">`logins`</span> int<span class="br0">&#40;</span><span class="nu0">10</span><span class="br0">&#41;</span> <span class="kw1">UNSIGNED</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span> <span class="kw1">DEFAULT</span> <span class="st0">'0'</span>,
  <span class="st0">`last_login`</span> int<span class="br0">&#40;</span><span class="nu0">10</span><span class="br0">&#41;</span> <span class="kw1">UNSIGNED</span>,
  <span class="kw1">PRIMARY</span> <span class="kw1">KEY</span>  <span class="br0">&#40;</span><span class="st0">`id`</span><span class="br0">&#41;</span>,
  <span class="kw1">UNIQUE</span> <span class="kw1">KEY</span> <span class="st0">`uniq_username`</span> <span class="br0">&#40;</span><span class="st0">`username`</span><span class="br0">&#41;</span>,
  <span class="kw1">UNIQUE</span> <span class="kw1">KEY</span> <span class="st0">`uniq_email`</span> <span class="br0">&#40;</span><span class="st0">`email`</span><span class="br0">&#41;</span>
<span class="br0">&#41;</span> ENGINE<span class="sy0">=</span>InnoDB  <span class="kw1">DEFAULT</span> CHARSET<span class="sy0">=</span>utf8;
&nbsp;
<span class="kw1">CREATE</span> <span class="kw1">TABLE</span> <span class="kw1">IF</span> <span class="kw1">NOT</span> <span class="kw1">EXISTS</span> <span class="st0">`user_tokens`</span> <span class="br0">&#40;</span>
  <span class="st0">`id`</span> int<span class="br0">&#40;</span><span class="nu0">11</span><span class="br0">&#41;</span> <span class="kw1">UNSIGNED</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span> <span class="kw1">AUTO_INCREMENT</span>,
  <span class="st0">`user_id`</span> int<span class="br0">&#40;</span><span class="nu0">11</span><span class="br0">&#41;</span> <span class="kw1">UNSIGNED</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  <span class="st0">`user_agent`</span> varchar<span class="br0">&#40;</span><span class="nu0">40</span><span class="br0">&#41;</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  <span class="st0">`token`</span> varchar<span class="br0">&#40;</span><span class="nu0">32</span><span class="br0">&#41;</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  <span class="st0">`created`</span> int<span class="br0">&#40;</span><span class="nu0">10</span><span class="br0">&#41;</span> <span class="kw1">UNSIGNED</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  <span class="st0">`expires`</span> int<span class="br0">&#40;</span><span class="nu0">10</span><span class="br0">&#41;</span> <span class="kw1">UNSIGNED</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  <span class="kw1">PRIMARY</span> <span class="kw1">KEY</span>  <span class="br0">&#40;</span><span class="st0">`id`</span><span class="br0">&#41;</span>,
  <span class="kw1">UNIQUE</span> <span class="kw1">KEY</span> <span class="st0">`uniq_token`</span> <span class="br0">&#40;</span><span class="st0">`token`</span><span class="br0">&#41;</span>,
  <span class="kw1">KEY</span> <span class="st0">`fk_user_id`</span> <span class="br0">&#40;</span><span class="st0">`user_id`</span><span class="br0">&#41;</span>
<span class="br0">&#41;</span> ENGINE<span class="sy0">=</span>InnoDB  <span class="kw1">DEFAULT</span> CHARSET<span class="sy0">=</span>utf8;
&nbsp;
<span class="kw1">ALTER</span> <span class="kw1">TABLE</span> <span class="st0">`roles_users`</span>
  <span class="kw1">ADD</span> CONSTRAINT <span class="st0">`roles_users_ibfk_1`</span> <span class="kw1">FOREIGN</span> <span class="kw1">KEY</span> <span class="br0">&#40;</span><span class="st0">`user_id`</span><span class="br0">&#41;</span> <span class="kw1">REFERENCES</span> <span class="st0">`users`</span> <span class="br0">&#40;</span><span class="st0">`id`</span><span class="br0">&#41;</span> <span class="kw1">ON</span> <span class="kw1">DELETE</span> CASCADE,
  <span class="kw1">ADD</span> CONSTRAINT <span class="st0">`roles_users_ibfk_2`</span> <span class="kw1">FOREIGN</span> <span class="kw1">KEY</span> <span class="br0">&#40;</span><span class="st0">`role_id`</span><span class="br0">&#41;</span> <span class="kw1">REFERENCES</span> <span class="st0">`roles`</span> <span class="br0">&#40;</span><span class="st0">`id`</span><span class="br0">&#41;</span> <span class="kw1">ON</span> <span class="kw1">DELETE</span> CASCADE;
&nbsp;
<span class="kw1">ALTER</span> <span class="kw1">TABLE</span> <span class="st0">`user_tokens`</span>
  <span class="kw1">ADD</span> CONSTRAINT <span class="st0">`user_tokens_ibfk_1`</span> <span class="kw1">FOREIGN</span> <span class="kw1">KEY</span> <span class="br0">&#40;</span><span class="st0">`user_id`</span><span class="br0">&#41;</span> <span class="kw1">REFERENCES</span> <span class="st0">`users`</span> <span class="br0">&#40;</span><span class="st0">`id`</span><span class="br0">&#41;</span> <span class="kw1">ON</span> <span class="kw1">DELETE</span> CASCADE;</pre>
</div>

<h3><a name="postgresql_schema" id="postgresql_schema">PostgreSQL schema</a></h3>
<div class="level3">
<pre class="code sql"><span class="kw1">CREATE</span> <span class="kw1">TABLE</span> roles
<span class="br0">&#40;</span>
  id serial,
  <span class="st0">&quot;name&quot;</span> varchar<span class="br0">&#40;</span><span class="nu0">32</span><span class="br0">&#41;</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  description text <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  CONSTRAINT roles_id_pkey <span class="kw1">PRIMARY</span> <span class="kw1">KEY</span> <span class="br0">&#40;</span>id<span class="br0">&#41;</span>,
  CONSTRAINT roles_name_key <span class="kw1">UNIQUE</span> <span class="br0">&#40;</span>name<span class="br0">&#41;</span>
<span class="br0">&#41;</span>;
&nbsp;
<span class="kw1">CREATE</span> <span class="kw1">TABLE</span> roles_users
<span class="br0">&#40;</span>
  user_id integer,
  role_id integer
<span class="br0">&#41;</span>;
&nbsp;
<span class="kw1">CREATE</span> <span class="kw1">TABLE</span> users
<span class="br0">&#40;</span>
  id serial,
  email varchar<span class="br0">&#40;</span><span class="nu0">127</span><span class="br0">&#41;</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  username varchar<span class="br0">&#40;</span><span class="nu0">32</span><span class="br0">&#41;</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  <span class="st0">&quot;password&quot;</span> varchar<span class="br0">&#40;</span><span class="nu0">50</span><span class="br0">&#41;</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  logins integer <span class="kw1">NOT</span> <span class="kw1">NULL</span> <span class="kw1">DEFAULT</span> <span class="nu0">0</span>,
  last_login integer,
  CONSTRAINT users_id_pkey <span class="kw1">PRIMARY</span> <span class="kw1">KEY</span> <span class="br0">&#40;</span>id<span class="br0">&#41;</span>,
  CONSTRAINT users_username_key <span class="kw1">UNIQUE</span> <span class="br0">&#40;</span>username<span class="br0">&#41;</span>,
  CONSTRAINT users_username_check <span class="kw1">CHECK</span> <span class="br0">&#40;</span>username ~* <span class="st0">'[a-zA-Z0-9_.]'</span><span class="br0">&#41;</span>,
  CONSTRAINT users_email_key <span class="kw1">UNIQUE</span> <span class="br0">&#40;</span>email<span class="br0">&#41;</span>,
  CONSTRAINT users_logins_check <span class="kw1">CHECK</span> <span class="br0">&#40;</span>logins <span class="sy0">&gt;=</span> <span class="nu0">0</span><span class="br0">&#41;</span>
<span class="br0">&#41;</span>;
&nbsp;
<span class="kw1">CREATE</span> <span class="kw1">TABLE</span> user_tokens
<span class="br0">&#40;</span>
  id serial,
  user_id integer <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  user_agent varchar<span class="br0">&#40;</span><span class="nu0">40</span><span class="br0">&#41;</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  token character varying<span class="br0">&#40;</span><span class="nu0">32</span><span class="br0">&#41;</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  created integer <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  expires integer <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  CONSTRAINT user_tokens_id_pkey <span class="kw1">PRIMARY</span> <span class="kw1">KEY</span> <span class="br0">&#40;</span>id<span class="br0">&#41;</span>,
  CONSTRAINT user_tokens_token_key <span class="kw1">UNIQUE</span> <span class="br0">&#40;</span>token<span class="br0">&#41;</span>
<span class="br0">&#41;</span>;
&nbsp;
<span class="kw1">CREATE</span> <span class="kw1">INDEX</span> user_id_idx <span class="kw1">ON</span> roles_users <span class="br0">&#40;</span>user_id<span class="br0">&#41;</span>;
<span class="kw1">CREATE</span> <span class="kw1">INDEX</span> role_id_idx <span class="kw1">ON</span> roles_users <span class="br0">&#40;</span>role_id<span class="br0">&#41;</span>;
&nbsp;
<span class="kw1">ALTER</span> <span class="kw1">TABLE</span> roles_users
  <span class="kw1">ADD</span> CONSTRAINT user_id_fkey <span class="kw1">FOREIGN</span> <span class="kw1">KEY</span> <span class="br0">&#40;</span>user_id<span class="br0">&#41;</span> <span class="kw1">REFERENCES</span> users<span class="br0">&#40;</span>id<span class="br0">&#41;</span> <span class="kw1">ON</span> <span class="kw1">DELETE</span> CASCADE,
  <span class="kw1">ADD</span> CONSTRAINT role_id_fkey <span class="kw1">FOREIGN</span> <span class="kw1">KEY</span> <span class="br0">&#40;</span>role_id<span class="br0">&#41;</span> <span class="kw1">REFERENCES</span> roles<span class="br0">&#40;</span>id<span class="br0">&#41;</span> <span class="kw1">ON</span> <span class="kw1">DELETE</span> CASCADE;
&nbsp;
<span class="kw1">ALTER</span> <span class="kw1">TABLE</span> user_tokens
  <span class="kw1">ADD</span> CONSTRAINT user_id_fkey <span class="kw1">FOREIGN</span> <span class="kw1">KEY</span> <span class="br0">&#40;</span>user_id<span class="br0">&#41;</span> <span class="kw1">REFERENCES</span> users<span class="br0">&#40;</span>id<span class="br0">&#41;</span> <span class="kw1">ON</span> <span class="kw1">DELETE</span> CASCADE;
&nbsp;
<span class="kw1">INSERT</span> <span class="kw1">INTO</span> roles <span class="br0">&#40;</span>name, description<span class="br0">&#41;</span> <span class="kw1">VALUES</span> <span class="br0">&#40;</span><span class="st0">'login'</span>, <span class="st0">'Login privileges, granted after account confirmation'</span><span class="br0">&#41;</span>;
<span class="kw1">INSERT</span> <span class="kw1">INTO</span> roles <span class="br0">&#40;</span>name, description<span class="br0">&#41;</span> <span class="kw1">VALUES</span> <span class="br0">&#40;</span><span class="st0">'admin'</span>, <span class="st0">'Administrative user, has access to everything.'</span><span class="br0">&#41;</span>;</pre>
</div>

<h2><a name="model_definitions" id="model_definitions">Model Definitions</a></h2>
<div class="level2">

<p>

Auth is dependent on alternate unique keys being defined both in your database schema (see above) and in your model definitions.  Specifically, it expects your User_Model to allow lookups on the `username` column, and Role_Model to allow lookups on the `name` column.  So:
</p>
<pre class="code php"><span class="co1">// in models/role.php</span>
<span class="kw2">class</span> Role_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
    protected <span class="re1">$has_and_belongs_to_many</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'users'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
	<span class="kw2">public</span> <span class="kw2">function</span> unique_key<span class="br0">&#40;</span><span class="re1">$id</span> <span class="sy0">=</span> <span class="kw2">NULL</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="kw1">if</span> <span class="br0">&#40;</span> <span class="sy0">!</span> <a href="http://www.php.net/empty"><span class="kw3">empty</span></a><span class="br0">&#40;</span><span class="re1">$id</span><span class="br0">&#41;</span> AND <a href="http://www.php.net/is_string"><span class="kw3">is_string</span></a><span class="br0">&#40;</span><span class="re1">$id</span><span class="br0">&#41;</span> AND <span class="sy0">!</span> <a href="http://www.php.net/ctype_digit"><span class="kw3">ctype_digit</span></a><span class="br0">&#40;</span><span class="re1">$id</span><span class="br0">&#41;</span> <span class="br0">&#41;</span>
		<span class="br0">&#123;</span>
			<span class="kw1">return</span> <span class="st0">'name'</span><span class="sy0">;</span>
		<span class="br0">&#125;</span>
&nbsp;
		<span class="kw1">return</span> parent<span class="sy0">::</span><span class="me2">unique_key</span><span class="br0">&#40;</span><span class="re1">$id</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
&nbsp;
<span class="br0">&#125;</span>
&nbsp;
<span class="co1">// and, in models/user.php</span>
<span class="kw2">class</span> User_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
	protected <span class="re1">$has_and_belongs_to_many</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'roles'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
	<span class="kw2">public</span> <span class="kw2">function</span> unique_key<span class="br0">&#40;</span><span class="re1">$id</span> <span class="sy0">=</span> <span class="kw2">NULL</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="kw1">if</span> <span class="br0">&#40;</span> <span class="sy0">!</span> <a href="http://www.php.net/empty"><span class="kw3">empty</span></a><span class="br0">&#40;</span><span class="re1">$id</span><span class="br0">&#41;</span> AND <a href="http://www.php.net/is_string"><span class="kw3">is_string</span></a><span class="br0">&#40;</span><span class="re1">$id</span><span class="br0">&#41;</span> AND <span class="sy0">!</span> <a href="http://www.php.net/ctype_digit"><span class="kw3">ctype_digit</span></a><span class="br0">&#40;</span><span class="re1">$id</span><span class="br0">&#41;</span> <span class="br0">&#41;</span>
		<span class="br0">&#123;</span>
			<span class="kw1">return</span> <span class="st0">'username'</span><span class="sy0">;</span>
		<span class="br0">&#125;</span>
&nbsp;
		<span class="kw1">return</span> parent<span class="sy0">::</span><span class="me2">unique_key</span><span class="br0">&#40;</span><span class="re1">$id</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
&nbsp;
<span class="br0">&#125;</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer3f83.gif?id=addons%3Aauth&amp;1324588196" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/addons/auth by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


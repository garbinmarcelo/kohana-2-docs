<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/session by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:session    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-04-13T08:33:36-0500" />
<meta name="keywords" content="libraries,session" />
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
<li class="level1"><div class="li"><span class="li"><a href="#session_library" class="toc">Session Library</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#what_are_sessions" class="toc">What are sessions?</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#starting_a_session" class="toc">Starting a Session</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#working_with_sessions" class="toc">Working with sessions</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#create" class="toc">create()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#id" class="toc">id()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#regenerate" class="toc">regenerate()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#destroy" class="toc">destroy()</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#working_with_session_data" class="toc">Working with session data</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#get" class="toc">get()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#get_once" class="toc">get_once()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#set" class="toc">set()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#delete" class="toc">delete()</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#flash_session_data" class="toc">&quot;Flash&quot; session Data</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#set_flash" class="toc">set_flash()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#keep_flash" class="toc">keep_flash()</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#configuring_a_session" class="toc">Configuring a Session</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#session_storage" class="toc">Session Storage</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#instance" class="toc">Instance</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#ajax" class="toc">AJAX</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Proof and perhaps a full example</td>
	</tr>
</table>



<h1><a name="session_library" id="session_library">Session Library</a></h1>
<div class="level1">

<p>

Enables applications to persist user state across pages
</p>

</div>

<h2><a name="what_are_sessions" id="what_are_sessions">What are sessions?</a></h2>
<div class="level2">

<p>

Sessions enable you to store and retrieve data between requests on a per-user basis. Typically, since each web page (or <acronym title="Asynchronous JavaScript and XML">AJAX</acronym> request, etc) is an individual request, there is no way to set a variable in one request and get its value in another. Sessions are one of several mechanisms that exist to overcome this limitation. 
</p>

<p>
Sessions are useful where a small amount of data needs to persist across multiple page requests and where the data is specific to the particular browser session. For example, if your website has a “login” page, you may wish to remember, for one specific web browser only, that a particular user has logged-in.
</p>

<p>
If you want to store more general data between requests and it is less of an issue that the data be associated with only one browser session, other mechanisms may be more appropriate:
</p>
<ul>
<li class="level1"><div class="li"> <a href="cache.php" class="wikilink1" title="libraries:cache">Kohana&#039;s Cache library</a></div>
</li>
<li class="level1"><div class="li"> <acronym title="Hypertext Preprocessor">PHP</acronym>&#039;s <a href="http://uk.php.net/manual/en/ref.sem.php" class="urlextern" title="http://uk.php.net/manual/en/ref.sem.php"  rel="nofollow">shared memory</a> facility</div>
</li>
</ul>

<p>

By default Kohana sessions are validated against the user-agent on each request. While providing some additional security, this will break any Flash-server integration which relies on access to the session, since Flash always provides its own user-agent string rather than that of the browser in which it is embedded. So if you are maintaining state during Flash-server communication, disable user-agent validation in <code>config/session.php</code>.
</p>

</div>

<h2><a name="starting_a_session" id="starting_a_session">Starting a Session</a></h2>
<div class="level2">

<p>

To load the Session library, add the following code to your controller constructor, or to a particular controller method:
Add the code:

</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span> <span class="sy0">=</span> Session<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
The above line of code has two effects:
</p>
<ul>
<li class="level1"><div class="li"> The Session library will be available via <code>$this→session</code>.</div>
</li>
<li class="level1"><div class="li"> If any current session data exists, it will become available. If no session data exists, a new session is automatically started.</div>
</li>
</ul>

</div>

<h2><a name="working_with_sessions" id="working_with_sessions">Working with sessions</a></h2>
<div class="level2">

<p>

The following methods are available in the Session library:
</p>

</div>

<h3><a name="create" id="create">create()</a></h3>
<div class="level3">

<p>

<code>$this→session→create()</code> can be called to create a new session. It will destroy any current session data.
</p>

<p>
Note that you do not need to call this method to enable sessions. Simply loading the Session library is enough to create a new session, or retrieve data from an existing session.
</p>

</div>

<h3><a name="id" id="id">id()</a></h3>
<div class="level3">

<p>

<code>$this→session→id()</code> retrieves the ID of the current session.
</p>

<p>
For example, 

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'Current session ID: '</span> <span class="sy0">.</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">id</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="regenerate" id="regenerate">regenerate()</a></h3>
<div class="level3">

<p>

<code>$this→session→regenerate()</code> causes the session ID to be regenerated whilst keeping all the current session data intact.
</p>

<p>
This can be done automatically by setting the session.regenerate config value to an integer greater than 0 (default value is 0). However, automatic session regeneration isn&#039;t recommended because it can cause a race condition when you have multiple session requests while regenerating the session id (most commonly noticed with ajax requests). For security reasons it&#039;s recommended that you manually call <em>regenerate()</em> whenever a visitor&#039;s session privileges are escalated (e.g. they logged in, accessed a restricted area, etc).
</p>

</div>

<h3><a name="destroy" id="destroy">destroy()</a></h3>
<div class="level3">

<p>

<code>$this→session→destroy()</code> destroys all session data, including the browser cookie that is used to identify it.

</p>

</div>

<h2><a name="working_with_session_data" id="working_with_session_data">Working with session data</a></h2>
<div class="level2">

<p>

The Session library arranges for PHPs inbuilt sessions array, <code>$_SESSION</code>, to use the session libraries driver. This means that accessing session data can be done in the normal way.  <strong>Note however this has been seen leading to unpredictable behavior if both $_SESSION and the session library methods are used.</strong>
</p>

<p>
For example,

</p>
<pre class="code php"><span class="co1">// get some session data</span>
<span class="re1">$data</span> <span class="sy0">=</span> <span class="re1">$_SESSION</span><span class="br0">&#91;</span><span class="st0">'fish'</span><span class="br0">&#93;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// set some session data</span>
<span class="re1">$_SESSION</span><span class="br0">&#91;</span><span class="st0">'fish'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="nu0">5</span><span class="sy0">;</span></pre>
<p>
In addition to this, the Session library also provides its own methods to deal with session data. These are:
</p>

</div>

<h3><a name="get" id="get">get()</a></h3>
<div class="level3">

<p>

<code>$this→session→get($key = FALSE, $default = FALSE)</code> retrieves a named value from the session data.
</p>
<ul>
<li class="level1"><div class="li"> <strong>[mixed]</strong> <code>$key</code> specifies the name of the data to retrieve from the session. If <code>$key</code> is <code>FALSE</code>, <code>get()</code> returns an array containing all of the data in the current session.</div>
</li>
<li class="level1"><div class="li"> <strong>[mixed]</strong> <code>$default</code> specifies a default value to be returned if the named data does not exist in the session.</div>
</li>
</ul>

<p>

For example,

</p>
<pre class="code php"><span class="co1">// returns value of foo. If it doesn't exist, returns the string 'bar' instead.</span>
<span class="re1">$value</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'foo'</span><span class="sy0">,</span><span class="st0">'bar'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="get_once" id="get_once">get_once()</a></h3>
<div class="level3">

<p>

<code>$this→session→get_once($key)</code> works the same as <code>get()</code> except that it also deletes the data from the current session afterwards.
</p>

<p>
For example,

</p>
<pre class="code php"><span class="co1">// returns value of foo and deletes foo from the session.</span>
<span class="re1">$value</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">get_once</span><span class="br0">&#40;</span><span class="st0">'foo'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">//it could also return default value 'bar' if it doesn't exists</span>
<span class="re1">$value</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">get_once</span><span class="br0">&#40;</span><span class="st0">'foo'</span><span class="sy0">,</span> <span class="st0">'bar'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="set" id="set">set()</a></h3>
<div class="level3">

<p>

<code>$this→session→set($keys, $val = FALSE)</code> is used to set data in the current session.
</p>
<ul>
<li class="level1"><div class="li"> <strong>[mixed]</strong> <code>$keys</code> can either specify the name of the data to set in the session, or it can be an array of “key ⇒ value” pairs (in which case the <code>$val</code> argument is ignored).</div>
</li>
<li class="level1"><div class="li"> <strong>[mixed]</strong> if <code>$keys</code> is the name of the data to set in the session, <code>$val</code> specifies the value of that data.</div>
</li>
</ul>

<p>

For example,

</p>
<pre class="code php"><span class="co1">// set some_var to some_val</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><span class="st0">'some_var'</span><span class="sy0">,</span> <span class="st0">'some_value'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// set several pieces of session data at once by passing an array to set()</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'fish'</span> <span class="sy0">=&gt;</span> <span class="nu0">5</span><span class="sy0">,</span> <span class="st0">'foo'</span> <span class="sy0">=&gt;</span> <span class="st0">'bar'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="delete" id="delete">delete()</a></h3>
<div class="level3">

<p>

<code>$this→session→delete($keys)</code> is used to delete a piece of data from the current session.
</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$keys</code> specifies the name of the piece of data to delete from the session. It can also be a set of keys, each as a separate argument.</div>
</li>
</ul>

<p>

For example,

</p>
<pre class="code php"><span class="co1">// delete foo</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">delete</span><span class="br0">&#40;</span><span class="st0">'foo'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// delete several pieces of data from the session by passing each key as a separate argument</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">delete</span><span class="br0">&#40;</span><span class="st0">'bar'</span><span class="sy0">,</span> <span class="st0">'bas'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="flash_session_data" id="flash_session_data">&quot;Flash&quot; session Data</a></h2>
<div class="level2">

<p>

“Flash” session data is data that persists only until the next request. It could, for example, be used to show a message to a user only once.
</p>

<p>
As with other session data, you retrieve flash data using <code>$this→session→get()</code>.
</p>

</div>

<h3><a name="set_flash" id="set_flash">set_flash()</a></h3>
<div class="level3">

<p>

<code>$this→session→set_flash($keys, $val = FALSE)</code> sets flash data in the current session.
</p>
<ul>
<li class="level1"><div class="li"> <strong>[mixed]</strong> <code>$keys</code> can either specify the name of the data to set in the session, or it can be an array of “key ⇒ value” pairs (in which case the <code>$val</code> argument is ignored).</div>
</li>
<li class="level1"><div class="li"> <strong>[mixed]</strong> if <code>$keys</code> is the name of the data to set in the session, <code>$val</code> specifies the value of that data.</div>
</li>
</ul>

<p>

For example,

</p>
<pre class="code php"><span class="co1">// set user_message flash session data</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">set_flash</span><span class="br0">&#40;</span><span class="st0">'user_message'</span><span class="sy0">,</span> <span class="st0">'Hello, how are you?'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// set several pieces of flash session data at once by passing an array</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">set_flash</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'user_message'</span> <span class="sy0">=&gt;</span> <span class="st0">'How are you?'</span><span class="sy0">,</span> <span class="st0">'fish'</span> <span class="sy0">=&gt;</span> <span class="nu0">5</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="keep_flash" id="keep_flash">keep_flash()</a></h3>
<div class="level3">

<p>

Usually, flash data is automatically deleted after the next request. Sometimes this behaviour is not desired, though. For example, the next request might be an <acronym title="Asynchronous JavaScript and XML">AJAX</acronym> request for some data. In this case, you wouldn&#039;t want to delete your <code>user_message</code> in the example above because it wouldn&#039;t have been shown to the user by the <acronym title="Asynchronous JavaScript and XML">AJAX</acronym> request.
</p>

<p>
<code>$this→session→keep_flash($keys)</code> can be used to keep flash session data for one more request (aka “freshening” flash data).
</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$keys</code> specifies the name(s) of the flash session variables to keep.</div>
</li>
</ul>
<pre class="code php"><span class="co1">// Don't delete the user_message this request</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">keep_flash</span><span class="br0">&#40;</span><span class="st0">'user_message'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Don't delete messages 1-3</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">keep_flash</span><span class="br0">&#40;</span><span class="st0">'message1'</span><span class="sy0">,</span> <span class="st0">'message2'</span><span class="sy0">,</span> <span class="st0">'message3'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
If you don&#039;t supply any arguments to the function all current flash session variables will be freshened.
</p>
<pre class="code php"><span class="co1">// Don't delete any flash variable</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">keep_flash</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="configuring_a_session" id="configuring_a_session">Configuring a Session</a></h2>
<div class="level2">

<p>

Edit the config file <code>application/config/session.php</code>

</p>
<pre class="code php"><span class="coMULTI">/*
 * File: Session
 *
 * Options:
 *  driver         - Session driver name: 'cookie','database', 'native' or 'cache'
 *  storage        - Session storage parameter, used by drivers (database and cache)
 *  name           - Default session name (alpha numeric chars only and the underscore)
 *  validate       - Session parameters to validate (user_agent, ip_address)
 *  encryption     - Encryption key, set to FALSE to disable session encryption
 *  expiration     - Number of seconds that each session will last (set to 0 for session which expires on browser exit)
 *  regenerate     - Number of page loads before the session is regenerated (set to 0 to disable automatic regeneration)
 *  gc_probability - Percentage probability that garbage collection will be executed
 */</span>
<span class="re1">$config</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
	<span class="st0">'driver'</span>         <span class="sy0">=&gt;</span> <span class="st0">'cookie'</span><span class="sy0">,</span>
	<span class="st0">'storage'</span>        <span class="sy0">=&gt;</span> <span class="st0">''</span><span class="sy0">,</span>
	<span class="st0">'name'</span>           <span class="sy0">=&gt;</span> <span class="st0">'kohanasession'</span><span class="sy0">,</span>
	<span class="st0">'validate'</span>       <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'user_agent'</span><span class="br0">&#41;</span><span class="sy0">,</span>
	<span class="st0">'encryption'</span>     <span class="sy0">=&gt;</span> <span class="kw2">FALSE</span><span class="sy0">,</span>
	<span class="st0">'expiration'</span>     <span class="sy0">=&gt;</span> <span class="nu0">7200</span><span class="sy0">,</span>
	<span class="st0">'regenerate'</span>     <span class="sy0">=&gt;</span> <span class="nu0">3</span><span class="sy0">,</span>
	<span class="st0">'gc_probability'</span> <span class="sy0">=&gt;</span> <span class="nu0">2</span>
<span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="session_storage" id="session_storage">Session Storage</a></h2>
<div class="level2">

<p>

By default session data is stored in a cookie. You can change this in the file <code>config/session.php</code>. 
</p>

<p>
The driver can be set here. Session name and other configuration options can also be set.
</p>

<p>
Available drivers and their storage containers :

</p>
<ul>
<li class="level1"><div class="li"> cookie - uses a cookie (the default)</div>
</li>
<li class="level1"><div class="li"> native - uses a file </div>
</li>
<li class="level1"><div class="li"> database - uses a database</div>
</li>
<li class="level1"><div class="li"> cache - uses different containers (file, memory, database) depending on configuration.</div>
</li>
</ul>

<p>

<strong>Note:</strong> the cookie driver limits session data to 4KB, while the database driver limits session data to 64KB. 
</p>

</div>

<h4><a name="using_the_database_driver" id="using_the_database_driver">Using the Database Driver</a></h4>
<div class="level4">

<p>

To use a database session, a Database and Table must exist.
</p>

<p>
By default, the session library will use the database you have configured in your default <a href="database/configuration.php" class="wikilink1" title="libraries:database:configuration">database group</a>.
</p>

<p>
By default, the session library will look for a table called <code>sessions</code>. (NB! The schema is changed from previous versions, see below)
</p>

<p>
You may configure your setup differently. Create a table to store the session.
</p>

</div>

<h5><a name="mysql_schema" id="mysql_schema">MySQL schema</a></h5>
<div class="level5">
<pre class="code">
CREATE TABLE sessions
(
    session_id VARCHAR(127) NOT NULL,
    last_activity INT(10) UNSIGNED NOT NULL,
    data TEXT NOT NULL,
    PRIMARY KEY (session_id)
);</pre>
</div>

<h5><a name="postgresql_schema" id="postgresql_schema">PostgreSQL schema</a></h5>
<div class="level5">
<pre class="code">
CREATE TABLE session (
    session_id varchar(127) NOT NULL,
    last_activity integer NOT NULL,
    data text NOT NULL,
    CONSTRAINT session_id_pkey PRIMARY KEY (session_id),
    CONSTRAINT last_activity_check CHECK (last_activity &#62;= 0)
);</pre>
<p>
Configure session to use database:

</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'driver'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'database'</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'storage'</span><span class="br0">&#93;</span> <span class="sy0">=</span>  <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span>
     <span class="st0">'group'</span> <span class="sy0">=&gt;</span> <span class="st0">'db_group_name'</span><span class="sy0">,</span> <span class="co1">// or use 'default'</span>
     <span class="st0">'table'</span> <span class="sy0">=&gt;</span> <span class="st0">'session_table_name'</span> <span class="co1">// or use 'sessions'</span>
 <span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h4><a name="using_the_cache_driver" id="using_the_cache_driver">Using the Cache Driver</a></h4>
<div class="level4">

<p>

Available cache storage containers are:

</p>
<ul>
<li class="level1"><div class="li"> APC</div>
</li>
<li class="level1"><div class="li"> eAccelerator</div>
</li>
<li class="level1"><div class="li"> File</div>
</li>
<li class="level1"><div class="li"> Memcache</div>
</li>
<li class="level1"><div class="li"> Sqlite</div>
</li>
<li class="level1"><div class="li"> Xcache</div>
</li>
</ul>

<p>

Configure session to use a cache driver: The selected <a href="cache.php" class="wikilink1" title="libraries:cache">Cache</a> storage container must be accessible and correctly configured.

</p>
<div class="code"><p class="codehead"><a name="cache_config">Cache config</a></p><pre class="code php"> <span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'driver'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'cache'</span><span class="sy0">;</span>
&nbsp;
 <span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'storage'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span>
     <span class="st0">'driver'</span> <span class="sy0">=&gt;</span> <span class="st0">'apc'</span><span class="sy0">,</span>
     <span class="st0">'requests'</span> <span class="sy0">=&gt;</span> <span class="nu0">10000</span>
 <span class="br0">&#41;</span><span class="sy0">;</span></pre></div>
<p>
Lifetime does not need to be set as it is  overridden by the session expiration setting.
</p>

</div>

<h4><a name="using_the_native_driver" id="using_the_native_driver">Using the native Driver</a></h4>
<div class="level4">

<p>

Native <acronym title="Hypertext Preprocessor">PHP</acronym> session mechanisms are used and you don&#039;t need anything else to make it work.
</p>

<p>
Note: if you are using <strong>Debian/Ubuntu</strong> and default storage directory /var/lib/php5, then set gc_probability to 0 and let the Debian/Ubuntu cron job clean the directory. 
</p>

</div>

<h2><a name="instance" id="instance">Instance</a></h2>
<div class="level2">

<p>
To retrieve the instantiated session library you can use the instance() method. If no instance is available, one will be created.

</p>
<pre class="code php"><span class="re1">$session</span><span class="sy0">=</span>Session<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$var</span> <span class="sy0">=</span> <span class="re1">$session</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'session_item'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Session instance methods can be called directly.

</p>
<pre class="code php"><span class="re1">$var</span> <span class="sy0">=</span> Session<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'session_item'</span><span class="br0">&#41;</span><span class="sy0">;</span>
Session<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><span class="st0">'session_item'</span><span class="sy0">,</span> <span class="st0">'item value'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="ajax" id="ajax">AJAX</a></h2>
<div class="level2">

<p>

When using <acronym title="Asynchronous JavaScript and XML">AJAX</acronym> calls and sessions in Kohana, special care must be taken in regards to the “regenerate” option, which is set to 3 by default (as of Kohana 2.3).
</p>

<p>
What can happen is, since <acronym title="Asynchronous JavaScript and XML">AJAX</acronym> calls are asynchronous, Kohana will consider certain <acronym title="Asynchronous JavaScript and XML">AJAX</acronym> requests that come “out of order” to have expired sessions, since a new session ID is generated every 3 calls.
</p>

<p>
To avoid this, include the following line in your app&#039;s config/sessions.php:
</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'regenerate'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer4215.gif?id=libraries%3Asession&amp;1324588201" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/session by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


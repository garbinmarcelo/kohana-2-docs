<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/upgrading/2.2 by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:15:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    upgrading:2.2    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2008-08-14T09:43:45-0500" />
<meta name="keywords" content="upgrading,2.2" />
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
<li class="level1"><div class="li"><span class="li"><a href="#to_2.2_upgrading" class="toc">2.1 to 2.2 Upgrading</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#core" class="toc">Core</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#configuration" class="toc">Configuration</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#controllers" class="toc">Controllers</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#libraries" class="toc">Libraries</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#library_changes" class="toc">Library Changes</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#modules" class="toc">Modules</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
</table>



<h1><a name="to_2.2_upgrading" id="to_2.2_upgrading">2.1 to 2.2 Upgrading</a></h1>
<div class="level1">

<p>

Upgrading from 2.1 to 2.2 may involve a considerable amount of work, if you have an application written using deprecated methods like <code>$this→load</code>.
</p>

<p>
Also, if your application relies on <code>Forge</code> or uses the <code>Media</code> module or controller, you need to be aware that these have been removed from 2.2
</p>

<p>
You will need to check that your <code>config/config.php</code> is up to date, that all references to <code>Config::item</code> and <code>Log::add</code> are changed in your application.
</p>

<p>
If your application makes extensive use of the old form validation class, you need to be aware that the 2.2 validation class is a completely new implementation, and will have to make the necessary changes.
</p>

</div>

<h2><a name="core" id="core">Core</a></h2>
<div class="level2">

<p>

All functionality from the <code>Config</code> and <code>Log</code> classes has moved to the core <code>Kohana</code> class. See <a href="../core/kohana.php" class="wikilink1" title="core:kohana">Kohana</a>
</p>

<p>
Replace these in your code:

</p>
<ul>
<li class="level1"><div class="li"> <code>Config::item</code> with <code>Kohana::config</code></div>
</li>
<li class="level1"><div class="li"> <code>Config::set</code> with <code>Kohana::config_set</code></div>
</li>
<li class="level1"><div class="li"> <code>Config::load</code> with <code>Kohana::config_load</code></div>
</li>
<li class="level1"><div class="li"> <code>Config::clear</code> with <code>Kohana::config_clear</code></div>
</li>
<li class="level1"><div class="li"> <code>Log::add</code> with <code>Kohana::log</code></div>
</li>
<li class="level1"><div class="li"> <code>Log::write</code> with <code>Kohana::log_save</code></div>
</li>
<li class="level1"><div class="li"> <code>Log::directory</code> with <code>Kohana::log_directory</code></div>
</li>
</ul>

</div>

<h2><a name="configuration" id="configuration">Configuration</a></h2>
<div class="level2">
<ul>
<li class="level1"><div class="li"> Changes to config/config.php:</div>
<ul>
<li class="level2"><div class="li"> <code>site_domain</code> - Changed. Defaults to <code>kohana/</code> You may need to change this to a full domain <code>localhost/kohana/</code></div>
</li>
<li class="level2"><div class="li"> <code>internal_cache</code> - New. Defaults is <code>FALSE</code> </div>
</li>
<li class="level2"><div class="li"> <code>enable_hooks</code> - New. Default is <code>FALSE</code> Moved from <code>config/hooks.php</code></div>
</li>
<li class="level2"><div class="li"> <code>log_threshold</code> - New. Default is <code>1</code> Moved from <code>config/log.php</code></div>
</li>
<li class="level2"><div class="li"> <code>log_directory</code> - New. Default is <code>APPPATH.logs</code> Moved from <code>config/log.php</code></div>
</li>
<li class="level2"><div class="li"> <code>preload</code> - Removed. You need to manually instance any libraries you had listed.</div>
</li>
</ul>
</li>
<li class="level1"><div class="li"> Changes to config/cookie.php:</div>
<ul>
<li class="level2"><div class="li"> <code>prefix</code> - Removed. </div>
</li>
</ul>
</li>
<li class="level1"><div class="li"> Changes to config/session.php:</div>
<ul>
<li class="level2"><div class="li"> <code>storage</code> - Changed. You need to pass parameters for the <code>database</code> and <code>cache</code> drivers. See <a href="../libraries/session.php" class="wikilink1" title="libraries:session">Session</a></div>
</li>
</ul>
</li>
<li class="level1"><div class="li"> Changes to config/database.php:</div>
<ul>
<li class="level2"><div class="li"> <code>connection</code> - Changed. Parameters are passed as an array with discrete entries. The old <code>DSN</code> style may still be used.</div>
</li>
<li class="level2"><div class="li"> <code>escape</code> - New. Default is <code>TRUE</code> Switch query builder automatic escaping on or off.</div>
</li>
</ul>
</li>
<li class="level1"><div class="li"> Changes to config/routes.php:</div>
<ul>
<li class="level2"><div class="li"> <code>_allowed</code> - Removed. </div>
</li>
<li class="level2"><div class="li"> Shortcuts are removed, use a regular expression. See <a href="../general/routing.php" class="wikilink1" title="general:routing">Routing</a></div>
</li>
</ul>
</li>
</ul>

<p>

Note1: Config files <code>config/log.php</code> and <code>config/hooks.php</code> are removed. Now configured in core <code>config</code>
</p>

</div>

<h2><a name="controllers" id="controllers">Controllers</a></h2>
<div class="level2">

<p>
<code>media</code> controller has been removed.
</p>

<p>
Special Methods <code>_default</code> and <code>_remap</code> are replaced by <code>__call($method, $arguments)</code> see <a href="../general/controllers.php" class="wikilink1" title="general:controllers">Controllers</a>
</p>

<p>
By default, a <code>404</code> error will be triggered if a non-existent controller method is called, and <code>__call</code> is defined. You may override this behaviour
in your method.
</p>

<p>
To simulate <code>_remap</code> Use <code>__call</code> and <code>_private</code> methods only.
</p>

<p>
<code>template</code> controller method <code>display</code> is now <code>render</code>
</p>

</div>

<h2><a name="libraries" id="libraries">Libraries</a></h2>
<div class="level2">

<p>

<code>Loader</code> library has been removed. <code>$this→load(&#039;something&#039;)</code> syntax is obsolete and invalid.
</p>

<p>
Libraries and models must now be created using the following syntax: <code>$example = new Example();</code> and <code>$example = new Example_Model();</code>
</p>

<p>
Where possible and applicable, use Factories to instance libraries, and reference library objects via their instance:

</p>
<ul>
<li class="level1"><div class="li"> <code>$template = View::factory(&#039;admin&#039;)→set(&#039;title&#039;, $title&#039;)→render();</code></div>
</li>
</ul>
<ul>
<li class="level1"><div class="li"> <code>$myname = Session::instance()→get(&#039;myname&#039;)</code></div>
</li>
</ul>

</div>

<h3><a name="library_changes" id="library_changes">Library Changes</a></h3>
<div class="level3">
<ul>
<li class="level1"><div class="li"> Pagination -  <code>create_links()</code> method has been renamed to <code>render()</code></div>
</li>
<li class="level1"><div class="li"> Validation - Completely new implementation, new docs in progress, for now see <a href="http://forum.kohanaphp.com/comments.php?DiscussionID=872&amp;page=1#Item_0" class="urlextern" title="http://forum.kohanaphp.com/comments.php?DiscussionID=872&amp;page=1#Item_0"  rel="nofollow">http://forum.kohanaphp.com/comments.php?DiscussionID=872&amp;page=1#Item_0</a></div>
</li>
<li class="level1"><div class="li"> ORM - A new implementation, new docs in progress.</div>
</li>
<li class="level1"><div class="li"> Payment - Has been moved to a module</div>
</li>
<li class="level1"><div class="li"> Archive - has been moved to a module</div>
</li>
<li class="level1"><div class="li"> Session - method <code>del</code> renamed to <code>delete</code> Default database session table name is <code>sessions</code> Table schema is slightly changed. SEE <a href="../libraries/session.php" class="wikilink1" title="libraries:session">Session</a></div>
</li>
</ul>

</div>

<h2><a name="modules" id="modules">Modules</a></h2>
<div class="level2">
<ul>
<li class="level1"><div class="li"> Forge - Has been removed.</div>
</li>
<li class="level1"><div class="li"> Media - Has been removed.</div>
</li>
</ul>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexere21d.gif?id=upgrading%3A2.2&amp;1324588234" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/upgrading/2.2 by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:15:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


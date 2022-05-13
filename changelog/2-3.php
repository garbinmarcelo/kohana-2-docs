<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/changelog/2.2 by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:15:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    changelog:2.2    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2008-09-16T09:25:24-0500" />
<meta name="keywords" content="changelog,2.2" />
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
<li class="level1"><div class="li"><span class="li"><a href="#changelog" class="toc">2.2 Changelog</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#libraries" class="toc">Libraries</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#helpers" class="toc">Helpers</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#modules" class="toc">Modules</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#config" class="toc">Config</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#controllers" class="toc">Controllers</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
</table>



<h1><a name="changelog" id="changelog">2.2 Changelog</a></h1>
<div class="level1">

<p>

Kohana is now <acronym title="Hypertext Preprocessor">PHP</acronym> 5.2+ only.

</p>

</div>

<h2><a name="libraries" id="libraries">Libraries</a></h2>
<div class="level2">

<p>

<strong>New</strong>

</p>
<ul>
<li class="level1"><div class="li"> Captcha : Generates and validates <a href="http://en.wikipedia.org/wiki/Captcha" class="interwiki iw_wp" title="http://en.wikipedia.org/wiki/Captcha">captcha</a> images</div>
</li>
<li class="level1"><div class="li"> Database : Added Mssql driver</div>
</li>
<li class="level1"><div class="li"> Payment : Added Paypal Pro driver</div>
</li>
<li class="level1"><div class="li"> Session : Added Cache driver</div>
</li>
</ul>

<p>

<strong>Removed</strong>

</p>
<ul>
<li class="level1"><div class="li"> Removed Loader : <code>$this→load</code> no longer available, see <a href="../general/loading.php" class="wikilink1" title="general:loading">loading</a></div>
</li>
</ul>

<p>

<strong>Changes</strong>

</p>
<ul>
<li class="level1"><div class="li"> User_Agent : moved functionality to <a href="../core/kohana.php#user_agent_info" class="wikilink1" title="core:kohana">Kohana::user_agent()</a></div>
</li>
<li class="level1"><div class="li"> Database : Added in() and notin()</div>
</li>
<li class="level1"><div class="li"> Database : Added config variable to turn off automatic query escaping. Defaults to TRUE</div>
</li>
<li class="level1"><div class="li"> Database : Fixed a bug in in has_operator() to correctly detect IS NOT NULL</div>
</li>
<li class="level1"><div class="li"> ORM: Rewrote ORM for better performance and better relationships support, <a href="http://learn.kohanaphp.com/2008/07/16/new-orm-overview-of-changes/" class="urlextern" title="http://learn.kohanaphp.com/2008/07/16/new-orm-overview-of-changes/"  rel="nofollow">overview of changes</a></div>
</li>
<li class="level1"><div class="li"> Cache : Configuration is now stored in groups as with Database</div>
</li>
<li class="level1"><div class="li"> Pagination : Added pagination config groups</div>
</li>
</ul>

</div>

<h2><a name="helpers" id="helpers">Helpers</a></h2>
<div class="level2">

<p>

<strong>New</strong>

</p>
<ul>
<li class="level1"><div class="li"> Added upload</div>
</li>
<li class="level1"><div class="li"> Added format</div>
</li>
</ul>

<p>

<strong>Changes</strong>

</p>
<ul>
<li class="level1"><div class="li"> Added arr::callback_string()</div>
</li>
<li class="level1"><div class="li"> Added arr::extract()</div>
</li>
<li class="level1"><div class="li"> Added arr::overwrite()</div>
</li>
<li class="level1"><div class="li"> Added arr::range()</div>
</li>
<li class="level1"><div class="li"> Added html::email()</div>
</li>
<li class="level1"><div class="li"> Removed file::extension()</div>
</li>
</ul>

</div>

<h2><a name="modules" id="modules">Modules</a></h2>
<div class="level2">

<p>

<strong>New</strong>

</p>
<ul>
<li class="level1"><div class="li"> Unit_test : Allows creating <a href="http://en.wikipedia.org/wiki/Unit_test" class="interwiki iw_wp" title="http://en.wikipedia.org/wiki/Unit_test">unit tests</a> for Kohana</div>
</li>
</ul>

<p>

<strong>Removed</strong>

</p>
<ul>
<li class="level1"><div class="li"> Forge : Moved to <a href="http://code.google.com/p/KohanaModules" class="urlextern" title="http://code.google.com/p/KohanaModules"  rel="nofollow">KohanaModules</a></div>
</li>
<li class="level1"><div class="li"> Media : Moved to <a href="http://code.google.com/p/KohanaModules" class="urlextern" title="http://code.google.com/p/KohanaModules"  rel="nofollow">KohanaModules</a></div>
</li>
</ul>

<p>

<strong>Changes</strong>

</p>
<ul>
<li class="level1"><div class="li"> Auth : Added Auth::logged_in() method</div>
</li>
<li class="level1"><div class="li"> Auth : Added Auth::force_login() method</div>
</li>
<li class="level1"><div class="li"> Auth : Autologin cookie has been renamed from &#039;autologin&#039; to &#039;authautologin&#039;</div>
</li>
<li class="level1"><div class="li"> Auth : User_Model is now stored in session rather than the id, username and roles</div>
</li>
<li class="level1"><div class="li"> Auth : &#039;auth&#039; controller has been renamed to &#039;auth_demo&#039;</div>
</li>
</ul>

</div>

<h2><a name="config" id="config">Config</a></h2>
<div class="level2">

<p>

<strong>New</strong>

</p>
<ul>
<li class="level1"><div class="li"> Added http</div>
</li>
</ul>

<p>

<strong> Changes </strong>

</p>
<ul>
<li class="level1"><div class="li"> Added core.render_stats : Enable or disable rendering strings like <code>{execution_time}</code> in rendered output</div>
</li>
<li class="level1"><div class="li"> Added log.prefix : Allows multiple applications to be logged into a single directory</div>
</li>
<li class="level1"><div class="li"> Changed log.threshold order : 1 - errors, 2 - application alert, 3 - application info, 4 - debug</div>
</li>
<li class="level1"><div class="li"> Removed core.preload : Preloading should now be done in the controller <code>__construct</code></div>
</li>
<li class="level1"><div class="li"> Removed core.allow_config_set : Config setting is always enabled</div>
</li>
<li class="level1"><div class="li"> Removed routes._allowed : All routes are allowed, but <a href="../helpers/html.php#specialchars" class="wikilink1" title="helpers:html">html::specialchars()</a> is applied</div>
</li>
<li class="level1"><div class="li"> Removed cookie.prefix : Cookies can no longer be prefixed universally</div>
</li>
</ul>

</div>

<h2><a name="controllers" id="controllers">Controllers</a></h2>
<div class="level2">
<ul>
<li class="level1"><div class="li"> Template : Changed method Template_Controller::_display to _render</div>
</li>
</ul>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer3b04.gif?id=changelog%3A2.2&amp;1324588227" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/changelog/2.2 by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:15:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


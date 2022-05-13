<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/changelog/2.1 by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:15:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    changelog:2.1    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2008-05-01T20:31:13-0500" />
<meta name="keywords" content="changelog,2.1" />
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
<li class="level1"><div class="li"><span class="li"><a href="#changelog" class="toc">2.1 Changelog</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#new_libraries" class="toc">New Libraries</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#new_helpers" class="toc">New Helpers</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#new_addons" class="toc">New Addons</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#new_other" class="toc">New Other</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#bugfixes" class="toc">Bugfixes</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#api_changes" class="toc">API Changes</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
</table>



<h1><a name="changelog" id="changelog">2.1 Changelog</a></h1>
<div class="level1">

</div>

<h2><a name="new_libraries" id="new_libraries">New Libraries</a></h2>
<div class="level2">
<ul>
<li class="level1"><div class="li"> <a href="../libraries/cache.php" class="wikilink1" title="libraries:cache">Cache</a> - Caching library with multiple drivers</div>
</li>
<li class="level1"><div class="li"> <a href="../libraries/image.php" class="wikilink1" title="libraries:image">Image</a> - Image manipulation library with GD and ImageMagick drivers</div>
</li>
<li class="level1"><div class="li"> <a href="../libraries/orm.php" class="wikilink1" title="libraries:orm">ORM</a> - Object Relational Mapping library</div>
</li>
<li class="level1"><div class="li"> <a href="../libraries/payment.php" class="wikilink2" title="libraries:payment" rel="nofollow">Payment</a> - Online payment library with multiple drivers</div>
</li>
</ul>

</div>

<h2><a name="new_helpers" id="new_helpers">New Helpers</a></h2>
<div class="level2">
<ul>
<li class="level1"><div class="li"> <a href="../helpers/num.php" class="wikilink1" title="helpers:num">num</a> - Number helper functions</div>
</li>
<li class="level1"><div class="li"> <a href="../helpers/expires.php" class="wikilink1" title="helpers:expires">expires</a> - Client side caching headers helper</div>
</li>
<li class="level1"><div class="li"> <a href="../helpers/email.php" class="wikilink1" title="helpers:email">email</a> - Helper for more easily using Swiftmailer</div>
</li>
<li class="level1"><div class="li"> <a href="../helpers/html.php" class="wikilink1" title="helpers:html">html</a>::link() - Link tag helper</div>
</li>
<li class="level1"><div class="li"> <a href="../helpers/html.php" class="wikilink1" title="helpers:html">html</a>::breadcrumb() - Breadcrumb helper</div>
</li>
<li class="level1"><div class="li"> <a href="../helpers/arr.php" class="wikilink1" title="helpers:arr">arr</a>::binary_search() - Binary search helper</div>
</li>
<li class="level1"><div class="li"> <a href="../helpers/valid.php" class="wikilink1" title="helpers:valid">valid</a>::standard_text() - Standard text helper</div>
</li>
<li class="level1"><div class="li"> <a href="../helpers/text.php" class="wikilink1" title="helpers:text">text</a>::widont() - Widow word text helper</div>
</li>
</ul>

</div>

<h2><a name="new_addons" id="new_addons">New Addons</a></h2>
<div class="level2">
<ul>
<li class="level1"><div class="li"> <a href="../addons/auth.php" class="wikilink1" title="addons:auth">Auth</a> - Authentication/Authorisation module</div>
</li>
<li class="level1"><div class="li"> <a href="../addons/forge.php" class="wikilink1" title="addons:forge">Forge</a> - <strong>FOR</strong>m <strong>GE</strong>neration module</div>
</li>
</ul>

</div>

<h2><a name="new_other" id="new_other">New Other</a></h2>
<div class="level2">
<ul>
<li class="level1"><div class="li"> PostgreSQL database driver</div>
</li>
<li class="level1"><div class="li"> MySQLi database driver</div>
</li>
<li class="level1"><div class="li"> Gzip compression</div>
</li>
<li class="level1"><div class="li"> Added View::factory(), which creates a new instance and allows chaining.</div>
</li>
<li class="level1"><div class="li"> Added Session::instance() to get the singleton</div>
</li>
<li class="level1"><div class="li"> Added <acronym title="Uniform Resource Identifier">URI</acronym>→argument(), <acronym title="Uniform Resource Identifier">URI</acronym>→argument_array() and <acronym title="Uniform Resource Identifier">URI</acronym>→total_arguments()</div>
</li>
<li class="level1"><div class="li"> Added cookie data to Profiler output</div>
</li>
</ul>

</div>

<h2><a name="bugfixes" id="bugfixes">Bugfixes</a></h2>
<div class="level2">
<ul>
<li class="level1"><div class="li"> Lots.</div>
</li>
</ul>

</div>

<h2><a name="api_changes" id="api_changes">API Changes</a></h2>
<div class="level2">
<ul>
<li class="level1"><div class="li"> <a href="../libraries/encrypt.php" class="wikilink1" title="libraries:encrypt">Encrypt library</a> has been completely rewritten</div>
</li>
<li class="level1"><div class="li"> &#039;include_paths&#039; has been renamed to &#039;modules&#039; in <code>config/config.php</code></div>
</li>
<li class="level1"><div class="li"> &#039;autoload&#039; has been renamed to &#039;preload&#039; in <code>config/config.php</code></div>
</li>
<li class="level1"><div class="li"> <code>index.php</code> is not included by default for html helpers</div>
</li>
<li class="level1"><div class="li"> Removed num_rows() from the query result object. Use count($query) instead.</div>
</li>
<li class="level1"><div class="li"> Database→join() parameters have changed</div>
</li>
</ul>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer8900.gif?id=changelog%3A2.1&amp;1324588229" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/changelog/2.1 by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:15:06 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


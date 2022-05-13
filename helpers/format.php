<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/helpers/format by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    helpers:format    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2008-08-14T10:19:48-0500" />
<meta name="keywords" content="helpers,format" />
<link rel="alternate" type="application/rss+xml" title="Current Namespace" href="../feedd6be.php?mode=list&amp;ns=helpers" />
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
<li class="level1"><div class="li"><span class="li"><a href="#format_helper" class="toc">Format Helper</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#phone" class="toc">phone()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#url" class="toc">url()</a></span></div></li></ul>
</li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">stub</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Write me</td>
	</tr>
</table>



<h1><a name="format_helper" id="format_helper">Format Helper</a></h1>
<div class="level1">

<p>

A helper designed to format useful information the right way.
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="phone" id="phone">phone()</a></h3>
<div class="level3">

<p>

<code>phone($number, $format = &#039;3-3-4&#039;)</code> formats a phone number according to the specified format. It takes:

</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$number</code> phone number</div>
</li>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$format</code> format string, default 3-3-4</div>
</li>
<li class="level1"><div class="li"> returns <strong>[string]</strong> the formated phone number or the number passed if the format string could not have been applied</div>
</li>
</ul>

<p>

<strong>Example:</strong>
</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> format<span class="sy0">::</span><span class="me2">phone</span><span class="br0">&#40;</span><span class="st0">'0123456789'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:
</p>
<pre class="code html4strict">012-345-6789</pre>
</div>

<h3><a name="url" id="url">url()</a></h3>
<div class="level3">

<p>

<code>url($str = &#039;&#039;)</code> formats a <acronym title="Uniform Resource Locator">URL</acronym> to contain a protocol at the beginning.. It takes:

</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$str</code> possibly incomplete <acronym title="Uniform Resource Locator">URL</acronym></div>
</li>
<li class="level1"><div class="li"> returns <strong>[string]</strong> the formated <acronym title="Uniform Resource Locator">URL</acronym></div>
</li>
</ul>

<p>

<strong>Example:</strong>
</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> format<span class="sy0">::</span><span class="me2">url</span><span class="br0">&#40;</span><span class="st0">'kohanaphp.com'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:
</p>
<pre class="code html4strict">http://kohanaphp.com</pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer1d7d.gif?id=helpers%3Aformat&amp;1324588205" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/helpers/format by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:36 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


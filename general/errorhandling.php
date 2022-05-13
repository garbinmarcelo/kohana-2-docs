<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/general/errorhandling by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    general:errorhandling    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-01-05T05:27:37-0600" />
<meta name="keywords" content="general,errorhandling" />
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
<li class="level1"><div class="li"><span class="li"><a href="#error_handling" class="toc">Error Handling</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#config.display_errors" class="toc">Config.display_errors</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#exceptions" class="toc">Exceptions</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#kohana_exception" class="toc">Kohana_Exception</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#kohana_user_exception" class="toc">Kohana_User_Exception</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#kohana_404_exception" class="toc">Kohana_404_Exception</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#triggering_errors" class="toc">Triggering errors</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#custom_error_pages" class="toc">Custom error pages</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#logging" class="toc">Logging</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1"> triggering errors</td>
	</tr>
</table>



<h1><a name="error_handling" id="error_handling">Error Handling</a></h1>
<div class="level1">

<p>
See <a href="../core/kohana.php" class="wikilink1" title="core:kohana">Kohana logging methods</a> for information on accessing log files.

</p>

</div>

<h2><a name="config.display_errors" id="config.display_errors">Config.display_errors</a></h2>
<div class="level2">

<p>

In the index.php file there is a setting <strong>display_errors</strong>. This determines whether errors should be outputted to the screen or not. During development you&#039;d want to set this to TRUE, but in production set this to FALSE so as to prevent users from seeing errors. This won&#039;t affect logging of errors.
</p>

</div>

<h2><a name="exceptions" id="exceptions">Exceptions</a></h2>
<div class="level2">

<p>
Exceptions in Kohana are handled by the Kohana Exception classes.  
There are three types of exceptions: <span class="curid"><a href="errorhandling.php#kohana_exception" class="wikilink1" title="general:errorhandling">Kohana_Exception</a></span>, <span class="curid"><a href="errorhandling.php#kohana_user_exception" class="wikilink1" title="general:errorhandling">Kohana_User_Exception</a></span> and <span class="curid"><a href="errorhandling.php#kohana_404_exception" class="wikilink1" title="general:errorhandling">Kohana_404_Exception</a></span>.
</p>

</div>

<h3><a name="kohana_exception" id="kohana_exception">Kohana_Exception</a></h3>
<div class="level3">

<p>
<code>Kohana_Exception</code> extends <code>Exception</code>.  To throw a <code>Kohana_Exception</code> an <a href="i18n.php" class="wikilink1" title="general:i18n">i18n language file</a> must exist.

</p>

</div>

<h4><a name="syntax" id="syntax">Syntax</a></h4>
<div class="level4">
<pre class="code php"><span class="coMULTI">/**
 * @param   string  i18n language key for the message
 * @param   array   addition line parameters
 */</span>
throw <span class="kw2">new</span> Kohana_Exception<span class="br0">&#40;</span>string <span class="re1">$i18_lang_key</span> <span class="br0">&#91;</span><span class="sy0">,</span> string <span class="re1">$message</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h4><a name="example" id="example">Example</a></h4>
<div class="level4">
<pre class="code php"><span class="co1">//...</span>
<span class="kw1">if</span><span class="br0">&#40;</span><span class="re1">$x</span> <span class="sy0">==</span> <span class="nu0">0</span><span class="br0">&#41;</span>
  throw <span class="kw2">new</span> Kohana_Exception<span class="br0">&#40;</span><span class="st0">'math.division_by_zero'</span><span class="br0">&#41;</span><span class="sy0">;</span>
  <span class="co1">// Throw a $lang['division_by_zero'] exception in ./i18n/en_US/math.php</span>
  <span class="co1">// &quot;Cannot divide by zero.&quot;</span>
<span class="kw1">else</span> <span class="kw1">if</span><span class="br0">&#40;</span><span class="re1">$x</span> <span class="sy0">&lt;</span> <span class="nu0">0</span><span class="br0">&#41;</span>
  throw <span class="kw2">new</span> Kohana_Exception<span class="br0">&#40;</span><span class="st0">'general.math.negative_number'</span><span class="sy0">,</span> <span class="re1">$x</span><span class="br0">&#41;</span><span class="sy0">;</span>
  <span class="co1">// Throw a $lang['math']['negative_number'] exception in ./i18n/en_US/general.php and pass the message $x</span>
  <span class="co1">// &quot;The number passed was negative: -5&quot;</span>
<span class="co1">//...</span></pre>
</div>

<h3><a name="kohana_user_exception" id="kohana_user_exception">Kohana_User_Exception</a></h3>
<div class="level3">

<p>
<code>Kohana_User_Exception</code> extends the <code>Kohana_Exception</code>.  This is similar to <code>Kohana_Exception</code> except that the exception messages do not have to be in the <a href="i18n.php" class="wikilink1" title="general:i18n">i18n</a> structure.

</p>

</div>

<h4><a name="syntax1" id="syntax1">Syntax</a></h4>
<div class="level4">
<pre class="code php"><span class="coMULTI">/**
 * @param   string  exception title string
 * @param   string  exception message string
 * @param   string  custom error template
 */</span>
throw <span class="kw2">new</span> Kohana_User_Exception<span class="br0">&#40;</span>string <span class="re1">$title</span><span class="sy0">,</span> string <span class="re1">$message</span> <span class="br0">&#91;</span><span class="sy0">,</span> string <span class="re1">$template</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h4><a name="example1" id="example1">Example</a></h4>
<div class="level4">
<pre class="code php"><span class="co1">//...</span>
<span class="kw1">if</span><span class="br0">&#40;</span><span class="re1">$x</span> <span class="sy0">==</span> <span class="nu0">0</span><span class="br0">&#41;</span>
  throw <span class="kw2">new</span> Kohana_User_Exception<span class="br0">&#40;</span><span class="st0">'Cannot divide by zero'</span><span class="sy0">,</span> <span class="st0">'You passed a zero'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="kw1">else</span> <span class="kw1">if</span><span class="br0">&#40;</span><span class="re1">$x</span> <span class="sy0">&lt;</span> <span class="nu0">0</span><span class="br0">&#41;</span>
  throw <span class="kw2">new</span> Kohana_User_Exception<span class="br0">&#40;</span><span class="st0">'Number Type Exception'</span><span class="sy0">,</span> <span class="st0">&quot;Cannot use a negative number $x&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">//...</span></pre>
</div>

<h3><a name="kohana_404_exception" id="kohana_404_exception">Kohana_404_Exception</a></h3>
<div class="level3">

<p>
<code>Kohana_404_Exception</code> extends <code>Kohana_Exception</code>.  This exception will display a 404 error message to the user.

</p>

</div>

<h4><a name="syntax2" id="syntax2">Syntax</a></h4>
<div class="level4">
<pre class="code php"><span class="coMULTI">/**
 * @param  string  URL of page
 * @param  string  custom error template
 */</span>
throw <span class="kw2">new</span> Kohana_404_Exception<span class="br0">&#40;</span><span class="br0">&#91;</span>string <span class="re1">$page</span> <span class="br0">&#91;</span><span class="sy0">,</span> string <span class="re1">$template</span><span class="br0">&#93;</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h4><a name="example2" id="example2">Example</a></h4>
<div class="level4">
<pre class="code php"><span class="co1">//...</span>
<span class="kw1">if</span><span class="br0">&#40;</span><span class="re1">$x</span> <span class="sy0">==</span> <span class="nu0">0</span><span class="br0">&#41;</span>
  throw <span class="kw2">new</span> Kohana_404_Exception<span class="br0">&#40;</span><span class="st0">'divide by zero'</span><span class="br0">&#41;</span><span class="sy0">;</span>
  <span class="co1">// &quot;The page you requested, Cannot divide by zero, could not be found.&quot;</span>
<span class="co1">//...</span></pre>
</div>

<h2><a name="triggering_errors" id="triggering_errors">Triggering errors</a></h2>
<div class="level2">

</div>

<h2><a name="custom_error_pages" id="custom_error_pages">Custom error pages</a></h2>
<div class="level2">

<p>
The <code>system/views/kohana_error_page.php</code> is the default error page. You can overload this one by having a <code>kohana_error_page.php</code> in your <code>application/views</code> directory or in a similar modules directory.
</p>

<p>
The default error page will show you the error as well as a stack trace if available.
</p>

</div>

<h2><a name="logging" id="logging">Logging</a></h2>
<div class="level2">

<p>

Kohana can log errors, alerts, info and debugging messages. The setting can be found in <code>application/config/config.php</code> See <a href="logging.php" class="wikilink1" title="general:logging">Logging</a> for more information.
</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer3e1d.gif?id=general%3Aerrorhandling&amp;1324588193" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/general/errorhandling by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


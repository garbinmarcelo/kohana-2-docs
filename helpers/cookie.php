<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/helpers/cookie by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    helpers:cookie    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-01-13T15:20:56-0600" />
<meta name="keywords" content="helpers,cookie" />
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
<li class="level1"><div class="li"><span class="li"><a href="#cookie_helper" class="toc">Cookie Helper</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#configuration" class="toc">Configuration</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#set" class="toc">set()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#get" class="toc">get()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#delete" class="toc">delete()</a></span></div></li></ul>
</li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Comments and corrections</td>
	</tr>
</table>



<h1><a name="cookie_helper" id="cookie_helper">Cookie Helper</a></h1>
<div class="level1">

<p>

Provides methods for working with COOKIE data.
</p>

</div>

<h2><a name="configuration" id="configuration">Configuration</a></h2>
<div class="level2">

<p>

Default settings for cookies are specified in <code>application/config/cookie.php</code>. You may override
these settings by passing parameters to the helper.

</p>
<ol>
<li class="level1"><div class="li"> <strong>domain:</strong> A valid domain, for which the cookie may be written. Default is <code>&#039;&#039;</code> (Use on <code>localhost</code>). For site-wide cookies, prefix your domain with a period <code>.example.com</code></div>
</li>
<li class="level1"><div class="li"> <strong>path:</strong> A valid path for which the cookie may be written. Default is the root directory <code>&#039;/&#039;</code></div>
</li>
<li class="level1"><div class="li"> <strong>expire:</strong> The cookie lifetime. Set the number of seconds the cookie should persist, until expired by the browser, starting from when the cookie is set. Note: Set to <code>0</code> (zero) seconds for a cookie which expires when the browser is closed.  <strong>NOTE: time() will be added to this value, so be careful not to make expire too large.</strong></div>
</li>
<li class="level1"><div class="li"> <strong>secure:</strong> The cookie will <strong>only</strong> be allowed over a secure transfer protocol (HTTPS). Default is <code>FALSE</code>.</div>
</li>
<li class="level1"><div class="li"> <strong>httponly:</strong> The cookie can be accessed via <acronym title="Hyper Text Transfer Protocol">HTTP</acronym> only, and not via client scripts. Default is <code>FALSE</code>. Note: Requires at least <acronym title="Hypertext Preprocessor">PHP</acronym> version 5.2.0</div>
</li>
</ol>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="set" id="set">set()</a></h3>
<div class="level3">

<p>
<code>cookie::set()</code> accepts multiple parameters, only the cookie name and value are required. You may pass parameters to this method as discrete values:
</p>
<pre class="code php">cookie<span class="sy0">::</span><span class="me2">set</span><span class="br0">&#40;</span><span class="re1">$name</span><span class="sy0">,</span> <span class="re1">$value</span><span class="sy0">,</span> <span class="re1">$expire</span><span class="sy0">,</span> <span class="re1">$path</span><span class="sy0">,</span> <span class="re1">$domain</span><span class="sy0">,</span> <span class="re1">$secure</span><span class="sy0">,</span> <span class="re1">$httponly</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Or you may pass an associative array of values as a parameter:
</p>
<pre class="code php"><span class="re1">$cookie_params</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span>
               <span class="st0">'name'</span>   <span class="sy0">=&gt;</span> <span class="st0">'Very_Important_Cookie'</span><span class="sy0">,</span>
               <span class="st0">'value'</span>  <span class="sy0">=&gt;</span> <span class="st0">'Choclate Flavoured Mint Delight'</span><span class="sy0">,</span>
               <span class="st0">'expire'</span> <span class="sy0">=&gt;</span> <span class="st0">'86500'</span><span class="sy0">,</span>
               <span class="st0">'domain'</span> <span class="sy0">=&gt;</span> <span class="st0">'.example.com'</span><span class="sy0">,</span>
               <span class="st0">'path'</span>   <span class="sy0">=&gt;</span> <span class="st0">'/'</span>
               <span class="br0">&#41;</span><span class="sy0">;</span>
cookie<span class="sy0">::</span><span class="me2">set</span><span class="br0">&#40;</span><span class="re1">$cookie_params</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="get" id="get">get()</a></h3>
<div class="level3">

<p>
<code>cookie::get()</code> accepts multiple parameters, Only the cookie name is required.
</p>
<pre class="code php"><span class="re1">$cookie_value</span> <span class="sy0">=</span> cookie<span class="sy0">::</span><span class="me2">get</span><span class="br0">&#40;</span><span class="re1">$cookie_name</span><span class="sy0">,</span> <span class="re1">$default_value</span> <span class="sy0">=</span> <span class="kw2">NULL</span><span class="sy0">,</span> <span class="re1">$xss_clean</span> <span class="sy0">=</span> <span class="kw2">FALSE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Setting the third parameter to <code>TRUE</code> will filter the cookie for unsafe data.
</p>

<p>
Returns <code>$default_value</code> if the cookie item does not exist.
</p>

</div>

<h3><a name="delete" id="delete">delete()</a></h3>
<div class="level3">

<p>
<code>cookie::delete()</code> accepts multiple parameters, Only the cookie name is required. This method is identical <code>cookie::set()</code> but sets the cookie value to <code>&#039;&#039;</code> effectively deleting it.
</p>
<pre class="code php">cookie<span class="sy0">::</span><span class="me2">delete</span><span class="br0">&#40;</span><span class="st0">'stale_cookie'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer8372.gif?id=helpers%3Acookie&amp;1324588202" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/helpers/cookie by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/helpers/expires by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:31 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    helpers:expires    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2008-05-01T20:31:13-0500" />
<meta name="keywords" content="helpers,expires" />
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
<li class="level1"><div class="li"><span class="li"><a href="#expires_helper" class="toc">Expires Helper</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#set" class="toc">set()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#check" class="toc">check()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#check_headers" class="toc">check_headers()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#prevent_output" class="toc">prevent_output()</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#full_example" class="toc">Full Example</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Proof read</td>
	</tr>
</table>



<h1><a name="expires_helper" id="expires_helper">Expires Helper</a></h1>
<div class="level1">

<p>
Provides methods for managing browser aware page caching. More information on client-side page caching can be found at <a href="http://www.sitepoint.com/article/caching-php-performance" class="urlextern" title="http://www.sitepoint.com/article/caching-php-performance"  rel="nofollow">caching-php-performance</a>
</p>

<p>
 Allows setting a page cache time by sending Last-Modified and Expires headers for the page.
</p>

<p>
Allows checking if the page is older than the page cache time. If so, the page is expired and a new page must be ouput. If not, a <strong>304</strong> not-modified status header and NO data is sent. The page is retrieved by the browser from it&#039;s own cache.
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="set" id="set">set()</a></h3>
<div class="level3">

<p>
<code>expires::set()</code> Sets an expiry time for a local, browser page cache.
The single parameter is:
</p>
<ul>
<li class="level1"><div class="li"> <strong>[integer]</strong> The time, in seconds, until page expires. Default is 60 seconds. </div>
</li>
</ul>

<p>

<strong>Example</strong>

</p>
<pre class="code php">expires<span class="sy0">::</span><span class="me2">set</span><span class="br0">&#40;</span><span class="nu0">300</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="check" id="check">check()</a></h3>
<div class="level3">

<p>
<code>expires::check()</code> Determines if a cached page needs to be refreshed. The single parameter is.
</p>

<p>
*  <strong>[integer]</strong> The time in seconds, to add to the last modified time. Default is 60 seconds. 
</p>

<p>
<strong>Example</strong>

</p>
<pre class="code php"><span class="kw1">if</span> <span class="br0">&#40;</span>expires<span class="sy0">::</span><span class="me2">check</span><span class="br0">&#40;</span><span class="nu0">300</span><span class="br0">&#41;</span> <span class="sy0">===</span> <span class="kw2">FALSE</span><span class="br0">&#41;</span></pre>
</div>

<h3><a name="check_headers" id="check_headers">check_headers()</a></h3>
<div class="level3">

<p>
<code>expires::check_headers()</code> Has no parameters. Called internally by <code>expires::set()</code> Returns boolean TRUE if a Last-Modified or Expires header has NOT been sent.
</p>

<p>
<strong>Example</strong>

</p>
<pre class="code php"><span class="kw1">if</span> <span class="br0">&#40;</span>expires<span class="sy0">::</span><span class="me2">check_headers</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'Safe to send Expires header'</span><span class="sy0">;</span></pre>
</div>

<h3><a name="prevent_output" id="prevent_output">prevent_output()</a></h3>
<div class="level3">

<p>
<code>expires::prevent_output()</code>  Has no parameters. Called internally by <code>expires::check()</code> You would not normally call this function directly, as it clears the Kohana output buffer.
</p>

<p>
<strong>Example</strong>

</p>
<pre class="code php">expires<span class="sy0">::</span><span class="me2">prevent_output</span><span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="co1">// will set Kohana::$output = '';</span></pre>
</div>

<h2><a name="full_example" id="full_example">Full Example</a></h2>
<div class="level2">

<p>

The controller outputs a page from a single method. The objective is to cache the page for ten seconds. If the page is reloaded within ten seconds, the cached page data should be displayed.
</p>

<p>
<strong>Controller:</strong>

</p>
<pre class="code php"><span class="kw2">&lt;?php</span> <a href="http://www.php.net/defined"><span class="kw3">defined</span></a><span class="br0">&#40;</span><span class="st0">'SYSPATH'</span><span class="br0">&#41;</span> or <a href="http://www.php.net/die"><span class="kw3">die</span></a><span class="br0">&#40;</span><span class="st0">'No direct script access.'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="coMULTI">/**
 * Default Kohana controller.
 */</span>
<span class="kw2">class</span> Welcome_Controller <span class="kw2">extends</span> Controller <span class="br0">&#123;</span>
&nbsp;
	<span class="kw2">public</span> <span class="kw2">function</span> index<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="kw1">if</span> <span class="br0">&#40;</span>expires<span class="sy0">::</span><span class="me2">check</span><span class="br0">&#40;</span><span class="nu0">10</span><span class="br0">&#41;</span> <span class="sy0">===</span> <span class="kw2">FALSE</span><span class="br0">&#41;</span> expires<span class="sy0">::</span><span class="me2">set</span><span class="br0">&#40;</span><span class="nu0">10</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
		<span class="re1">$welcome</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'welcome'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
                <span class="co1">// We should only see the time updated in the view after 10 seconds</span>
                <span class="co1">// note, it is not this data that is cached, but the browser that fetches a locally cached page</span>
		<span class="re1">$welcome</span><span class="sy0">-&gt;</span><span class="me1">now</span> <span class="sy0">=</span> <a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="br0">&#40;</span>DATE_RFC822<span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
		<span class="re1">$welcome</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
&nbsp;
<span class="br0">&#125;</span></pre>
<p>
<strong>View:</strong>

</p>
<pre class="code php"><span class="sy0">&lt;</span>h2<span class="sy0">&gt;</span>Welcome<span class="sy0">!&lt;/</span>h2<span class="sy0">&gt;</span>
<span class="sy0">&lt;</span>p<span class="sy0">&gt;</span>It is now <span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$now</span> ?<span class="sy0">&gt;&lt;/</span>p<span class="sy0">&gt;</span>
<span class="sy0">&lt;</span>hr<span class="sy0">/&gt;</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer2693.gif?id=helpers%3Aexpires&amp;1324588204" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/helpers/expires by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


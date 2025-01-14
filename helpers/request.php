<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/helpers/request by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    helpers:request    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-02-16T16:05:08-0600" />
<meta name="keywords" content="helpers,request" />
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
<li class="level1"><div class="li"><span class="li"><a href="#request_helper" class="toc">Request Helper</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#referrer" class="toc">referrer()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#is_ajax" class="toc">is_ajax()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#method" class="toc">method()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#accepts" class="toc">accepts()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#preferred_accept" class="toc">preferred_accept()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#accepts_at_quality" class="toc">accepts_at_quality()</a></span></div></li></ul>
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



<h1><a name="request_helper" id="request_helper">Request Helper</a></h1>
<div class="level1">

<p>

A helper designed to retrieve all kinds of information on the current request.
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="referrer" id="referrer">referrer()</a></h3>
<div class="level3">

<p>

<code>referrer($default = FALSE)</code> returns the <acronym title="Hyper Text Transfer Protocol">HTTP</acronym> referrer, or the default if the referrer is not set. It takes:

</p>
<ul>
<li class="level1"><div class="li"> <strong>[mixed]</strong> <code>$default</code> default to return - default FALSE</div>
</li>
<li class="level1"><div class="li"> returns <strong>[mixed]</strong> the referrer if it&#039;s set, default if passed</div>
</li>
</ul>

<p>

<strong>Example:</strong>
</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> request<span class="sy0">::</span><span class="me2">referrer</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It could result as:
</p>
<pre class="code html4strict">http://www.google.com/search?hl=en<span class="sc1">&amp;q=kohana&amp;btnG=Google+Search</span>
<span class="sc1"></span</pre>
</div>

<h3><a name="is_ajax" id="is_ajax">is_ajax()</a></h3>
<div class="level3">

<p>

<code>is_ajax()</code> tests if the current request is an <acronym title="Asynchronous JavaScript and XML">AJAX</acronym> request by checking the X-Requested-With <acronym title="Hyper Text Transfer Protocol">HTTP</acronym> request header that most popular <acronym title="JavaScript">JS</acronym> frameworks now set for <acronym title="Asynchronous JavaScript and XML">AJAX</acronym> calls.

</p>
<ul>
<li class="level1"><div class="li"> returns <strong>[bool]</strong> TRUE if the request is an <acronym title="Asynchronous JavaScript and XML">AJAX</acronym> one, FALSE otherwise</div>
</li>
</ul>

<p>

<strong>Example:</strong>
</p>

<p>
We can use this method to detect ajax requests in the controller and disable the view template so we can output a properly formatted JSON response.
</p>
<pre class="code php"><span class="re1">$animals</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'dog'</span><span class="sy0">,</span> <span class="st0">'cat'</span><span class="sy0">,</span> <span class="st0">'mouse'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="kw1">if</span> <span class="br0">&#40;</span>request<span class="sy0">::</span><span class="me2">is_ajax</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">auto_render</span> <span class="sy0">=</span> <span class="kw2">FALSE</span><span class="sy0">;</span> <span class="co1">// disable auto render</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> json_encode<span class="br0">&#40;</span><span class="re1">$animals</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="method" id="method">method()</a></h3>
<div class="level3">

<p>

<code>method()</code> returns current <acronym title="Hyper Text Transfer Protocol">HTTP</acronym> request method (GET, POST, PUT, DELETE for example)

</p>
<ul>
<li class="level1"><div class="li"> returns <strong>[string]</strong> the request method</div>
</li>
</ul>

<p>

<strong>Example:</strong>
</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> request<span class="sy0">::</span><span class="me2">method</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It could result as:
</p>
<pre class="code html4strict">get</pre>
</div>

<h3><a name="accepts" id="accepts">accepts()</a></h3>
<div class="level3">

<p>

<code>accepts($type = NULL, $explicit_check = FALSE)</code> returns boolean of whether client accepts content type. It takes:

</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$type</code> the content type</div>
</li>
<li class="level1"><div class="li"> <strong>[bool]</strong> <code>$explicit_check</code> set to TRUE to disable wildcard checking - default FALSE</div>
</li>
<li class="level1"><div class="li"> returns <strong>[bool]</strong> TRUE if the client accepts the content type passed, FALSE otherwise</div>
</li>
</ul>

<p>

<strong>Example:</strong>
</p>
<pre class="code php"><span class="kw1">if</span> <span class="br0">&#40;</span>request<span class="sy0">::</span><span class="me2">accepts</span><span class="br0">&#40;</span><span class="st0">'xhtml'</span><span class="br0">&#41;</span> <span class="sy0">&amp;&amp;</span> request<span class="sy0">::</span><span class="me2">accepts</span><span class="br0">&#40;</span><span class="st0">'xml'</span><span class="br0">&#41;</span> <span class="sy0">&amp;&amp;</span> request<span class="sy0">::</span><span class="me2">accepts</span><span class="br0">&#40;</span><span class="st0">'rss'</span><span class="br0">&#41;</span> <span class="sy0">&amp;&amp;</span> request<span class="sy0">::</span><span class="me2">accepts</span><span class="br0">&#40;</span><span class="st0">'atom'</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'Client accepts all of them'</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
<span class="kw1">else</span>
<span class="br0">&#123;</span>
   <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'Client doesn<span class="es0">\'</span>t accept one/several of xhtml, xml, rss, atom'</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
It could result in <acronym title="HyperText Markup Language">HTML</acronym> as:
</p>
<pre class="code html4strict">Client accepts all of them</pre>
</div>

<h3><a name="preferred_accept" id="preferred_accept">preferred_accept()</a></h3>
<div class="level3">

<p>

<code>preferred_accept($types, $explicit_check = FALSE)</code> compare the q values for given array of content types and return the one with the highest value. If items are found to have the same q value, the first one encountered in the given array wins. If all items in the given array have a q value of 0, FALSE is returned.

</p>
<ul>
<li class="level1"><div class="li"> <strong>[array]</strong> <code>$types</code> array of the content types</div>
</li>
<li class="level1"><div class="li"> <strong>[bool]</strong> <code>$explicit_check</code> sets to TRUE to disable wildcard checking - default FALSE</div>
</li>
<li class="level1"><div class="li"> returns <strong>[mixed]</strong> mime type with highest q value, FALSE if none of the given types are accepted</div>
</li>
</ul>

<p>

<strong>Example:</strong>
</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> request<span class="sy0">::</span><span class="me2">preferred_accept</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'xhtml'</span><span class="sy0">,</span> <span class="st0">'xml'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It could result as:
</p>
<pre class="code html4strict">xhtml</pre>
</div>

<h3><a name="accepts_at_quality" id="accepts_at_quality">accepts_at_quality()</a></h3>
<div class="level3">

<p>

<code>accepts_at_quality($type = NULL, $explicit_check = FALSE)</code> returns quality factor at which the client accepts content type.

</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$type</code> content type (e.g. “image/jpg”, “jpg”)</div>
</li>
<li class="level1"><div class="li"> <strong>[bool]</strong> <code>$explicit_check</code> sets to TRUE to disable wildcard checking - default FALSE</div>
</li>
<li class="level1"><div class="li"> returns <strong>[integer|float]</strong> the quality factor</div>
</li>
</ul>

<p>

<strong>Example:</strong>
</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> request<span class="sy0">::</span><span class="me2">accepts_at_quality</span><span class="br0">&#40;</span><span class="st0">'image/jpg'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It could result as:
</p>
<pre class="code html4strict">0.8</pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer78d3.gif?id=helpers%3Arequest&amp;1324588206" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/helpers/request by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


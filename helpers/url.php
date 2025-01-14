<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/helpers/url by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    helpers:url    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-02-11T18:34:02-0600" />
<meta name="keywords" content="helpers,url" />
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
<li class="level1"><div class="li"><span class="li"><a href="#url_helper" class="toc">URL Helper</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#current" class="toc">current()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#base" class="toc">base()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#site" class="toc">site()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#file" class="toc">file()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#title" class="toc">title()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#redirect" class="toc">redirect()</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">Proof read</td>
	</tr>
</table>



<h1><a name="url_helper" id="url_helper">URL Helper</a></h1>
<div class="level1">

<p>

Provides methods for working with <acronym title="Uniform Resource Locator">URL</acronym>(s).
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="current" id="current">current()</a></h3>
<div class="level3">

<p>

<code>url::current()</code> returns the current <acronym title="Uniform Resource Identifier">URI</acronym> string. This method accepts one optional parameter. If you set it to TRUE the query string will be included in the return value.
</p>
<pre class="code php"><span class="co1">// site_domain = 'localhost/kohana/'</span>
<span class="co1">// site_protocol = 'http'</span>
<span class="co1">// index_page = 'index.php'</span>
<span class="co1">// url_suffix = '.php'</span>
&nbsp;
<span class="co1">// Current URL: http://localhost/kohana/index.php/welcome/home.php?query=string</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> url<span class="sy0">::</span><a href="http://www.php.net/current"><span class="kw3">current</span></a><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Returns

</p>
<pre class="code">welcome/home</pre>

<p>

While
</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> url<span class="sy0">::</span><a href="http://www.php.net/current"><span class="kw3">current</span></a><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Returns

</p>
<pre class="code">welcome/home?query=string</pre>

</div>

<h3><a name="base" id="base">base()</a></h3>
<div class="level3">

<p>
<code>url::base()</code> returns the base <acronym title="Uniform Resource Locator">URL</acronym> defined by the <code>site_protocol</code> and <code>site_domain</code> in <code>config.php</code>. If your site_domain doesn&#039;t have a hostname in it, you will get a relative <acronym title="Uniform Resource Locator">URL</acronym>.
</p>
<pre class="code php"><span class="co1">// site_domain = 'localhost/kohana/'</span>
<span class="co1">// site_protocol = 'http'</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> url<span class="sy0">::</span><span class="me2">base</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Generates 

</p>
<pre class="code">http://localhost/kohana/</pre>

<p>

<code>url::base()</code> accepts two <strong>optional</strong> parameters. Set the first parameter to <code>TRUE</code> if you want to append the <code>index_page</code> defined in <code>config.php</code> to the base <acronym title="Uniform Resource Locator">URL</acronym>. Via the second parameter you can overwrite the default <code>site_protocol</code> from <code>config.php</code>.
</p>
<pre class="code php"><span class="co1">// site_domain = 'localhost/kohana/'</span>
<span class="co1">// site_protocol = 'http'</span>
<span class="co1">// index_page = 'index.php'</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> url<span class="sy0">::</span><span class="me2">base</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="sy0">,</span> <span class="st0">'https'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Generates 

</p>
<pre class="code">https://localhost/kohana/index.php</pre>

</div>

<h3><a name="site" id="site">site()</a></h3>
<div class="level3">

<p>

<code>url::site()</code> returns a <acronym title="Uniform Resource Locator">URL</acronym> based on the <code>site_protocol</code>, <code>site_domain</code>, <code>index_page</code>, <code>url_suffix</code> defined in <code>config.php</code>. If your site_domain doesn&#039;t have a hostname in it, you will get a relative <acronym title="Uniform Resource Locator">URL</acronym>.
</p>
<pre class="code php"><span class="co1">// site_domain = 'localhost/kohana/'</span>
<span class="co1">// site_protocol = 'http'</span>
<span class="co1">// index_page = 'index.php'</span>
<span class="co1">// url_suffix = '.php'</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> url<span class="sy0">::</span><span class="me2">site</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Generates

</p>
<pre class="code">http://localhost/kohana/index.php/.php</pre>

<p>

<code>url::site()</code> accepts two <strong>optional</strong> parameters. You can pass <acronym title="Uniform Resource Locator">URL</acronym> segments via the first one. The second one allows you to overwrite the default <code>site_protocol</code> from <code>config.php</code>.
</p>
<pre class="code php"><span class="co1">// site_domain = 'localhost/kohana/'</span>
<span class="co1">// site_protocol = 'http'</span>
<span class="co1">// index_page = ''</span>
<span class="co1">// url_suffix = '.php'</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> url<span class="sy0">::</span><span class="me2">site</span><span class="br0">&#40;</span><span class="st0">'admin/login'</span><span class="sy0">,</span> <span class="st0">'https'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Generates

</p>
<pre class="code">https://localhost/kohana/admin/login.php</pre>

</div>

<h3><a name="file" id="file">file()</a></h3>
<div class="level3">

<p>

<code>url::file()</code> returns the <acronym title="Uniform Resource Locator">URL</acronym> to a file. Absolute filenames and relative filenames are allowed.

</p>
<ul>
<li class="level1"><div class="li"> [string] filename</div>
</li>
<li class="level1"><div class="li"> [bool] include the index.php</div>
</li>
</ul>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> url<span class="sy0">::</span><a href="http://www.php.net/file"><span class="kw3">file</span></a><span class="br0">&#40;</span><span class="st0">'download.zip'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Produces

</p>
<pre class="code">
http://domain.tld/download.zip</pre>
</div>

<h3><a name="title" id="title">title()</a></h3>
<div class="level3">

<p>

<code>url::title()</code> returns a properly formatted title, for use in a <acronym title="Uniform Resource Identifier">URI</acronym>. The first parameter, the input title string, is <strong>mandatory</strong>. The optional second parameter is used to set the separator character. By default this is a dash. You can only change this to an underscore.
</p>
<pre class="code php"><span class="re1">$input_title</span> <span class="sy0">=</span> <span class="st0">' __Ecléçtic__ title<span class="es0">\'</span>s  entered by cràzed users- ?&gt;  '</span><span class="sy0">;</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> url<span class="sy0">::</span><span class="me2">title</span><span class="br0">&#40;</span><span class="re1">$input_title</span><span class="sy0">,</span> <span class="st0">'_'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Generates: 
</p>
<pre class="code">
eclectic_titles_entered_by_crazed_users</pre>

<p>

What happens to the input title? All non-alphanumeric characters, except for dashes or underscores (depending on the second parameter), will be deleted. However, non-ascii characters will first be <a href="../core/utf8.php#transliterate_to_ascii" class="wikilink1" title="core:utf8">transliterated</a> (for example: <code>à</code> becomes <code>a</code>) in order to keep the <acronym title="Uniform Resource Locator">URL</acronym> title as readable as possible. Finally, the <acronym title="Uniform Resource Locator">URL</acronym> title is converted to lowercase.
</p>

</div>

<h3><a name="redirect" id="redirect">redirect()</a></h3>
<div class="level3">

<p>

<code>url::redirect()</code> generates an <acronym title="Hyper Text Transfer Protocol">HTTP</acronym> Server Header (302) and runs the <strong>system.redirect</strong> event, which will redirect the browser to a specified <acronym title="Uniform Resource Locator">URL</acronym>, by default <code>site_domain</code> defined in <code>config.php</code>. 
</p>

<p>
<code>url::redirect()</code> will always call the php <code>exit</code> function to prevent further script execution.
</p>
<pre class="code php">url<span class="sy0">::</span><span class="me2">redirect</span><span class="br0">&#40;</span><span class="st0">'http://www.whitehouse.gov'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Will redirect the browser to the White House website.
</p>

<p>
The optional second parameter can be used to set the redirect method. The default is 302.
</p>
<pre class="code php"><span class="co1">// site_domain = 'localhost/kohana/'</span>
<span class="co1">// site_protocol = 'http'</span>
&nbsp;
url<span class="sy0">::</span><span class="me2">redirect</span><span class="br0">&#40;</span><span class="st0">'aboutus'</span><span class="sy0">,</span> <span class="nu0">301</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Will redirect with a 301 header to <code><a href="http://localhost/kohana/aboutus" class="urlextern" title="http://localhost/kohana/aboutus"  rel="nofollow">http://localhost/kohana/aboutus</a></code>.
</p>

<p>
If you wish to send a Multiple Choice (300) redirect, provide an array of URIs to the redirect method:

</p>
<pre class="code php">url<span class="sy0">::</span><span class="me2">redirect</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'aboutus'</span><span class="sy0">,</span><span class="st0">'http://www.kohana.php/'</span><span class="br0">&#41;</span><span class="sy0">,</span> <span class="nu0">300</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

The first <acronym title="Uniform Resource Identifier">URI</acronym> in the array is considered the preferred <acronym title="Uniform Resource Identifier">URI</acronym> and will be placed in the Location header.  All of the URIs will then be output in a <acronym title="HyperText Markup Language">HTML</acronym> unordered list.  Generally the browser will follow the location header and this list will never be seen.  However, there is no standard defined behavior for what a user agent should do upon receiving a 300 and the list could be used to present the user with the choices you have given.

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer773a.gif?id=helpers%3Aurl&amp;1324588207" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/helpers/url by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


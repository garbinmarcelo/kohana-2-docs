<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/helpers/security by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    helpers:security    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-03-04T11:37:26-0600" />
<meta name="keywords" content="helpers,security" />
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
<li class="level1"><div class="li"><span class="li"><a href="#security_helper" class="toc">Security Helper</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#xss_clean" class="toc">xss_clean()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#strip_image_tags" class="toc">strip_image_tags()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#encode_php_tags" class="toc">encode_php_tags()</a></span></div></li></ul>
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



<h1><a name="security_helper" id="security_helper">Security Helper</a></h1>
<div class="level1">

<p>
The security helper offers various methods that assist with input filtering.
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="xss_clean" id="xss_clean">xss_clean()</a></h3>
<div class="level3">

<p>
&#039;xss_clean&#039; behaves the same as <a href="../libraries/input.php#xss_clean" class="wikilink1" title="libraries:input">xss_clean</a> in the Input library. 
</p>
<ul>
<li class="level1"><div class="li"> [string] String to be cleansed</div>
</li>
</ul>

</div>

<h3><a name="strip_image_tags" id="strip_image_tags">strip_image_tags()</a></h3>
<div class="level3">

<p>
&#039;strip_image_tags()&#039; strips the image tags out of a string and returns the string trimmed without the image tags. 
</p>
<ul>
<li class="level1"><div class="li"> [string] String to be stripped</div>
</li>
</ul>
<pre class="code php"><span class="re1">$string</span> <span class="sy0">=</span> <span class="st0">'&lt;b&gt;Check this image:&lt;/b&gt; &lt;img src=&quot;http://www.example.com/example.jpg&quot; /&gt;'</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span>security<span class="sy0">::</span><span class="me2">strip_image_tags</span><span class="br0">&#40;</span><span class="re1">$string</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/b.php"><span class="kw2">&lt;b&gt;</span></a></span>Check this image:<span class="sc2"><span class="kw2">&lt;/b&gt;</span></span> http://www.example.com/example.jpg</pre>
</div>

<h3><a name="encode_php_tags" id="encode_php_tags">encode_php_tags()</a></h3>
<div class="level3">

<p>
&#039;encode_php_tags&#039; replaces <acronym title="Hypertext Preprocessor">PHP</acronym> tags in a string with their corresponding <acronym title="HyperText Markup Language">HTML</acronym> entities.
</p>
<ul>
<li class="level1"><div class="li"> [string] String to santize</div>
</li>
</ul>
<pre class="code php"><span class="re1">$string</span> <span class="sy0">=</span> <span class="st0">'&lt;?php echo &quot;&lt;b&gt;Hello World!&lt;/b&gt;&quot; ?&gt;'</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span>security<span class="sy0">::</span><span class="me2">encode_php_tags</span><span class="br0">&#40;</span><span class="re1">$string</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict"><span class="sc1">&amp;lt;</span>?php echo &quot;<span class="sc2"><a href="http://december.com/html/4/element/b.php"><span class="kw2">&lt;b&gt;</span></a></span>Hello World!<span class="sc2"><span class="kw2">&lt;/b&gt;</span></span>&quot; ?<span class="sc1">&amp;gt;</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer0b82.gif?id=helpers%3Asecurity&amp;1324588207" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/helpers/security by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/helpers/num by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    helpers:num    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2008-05-01T20:31:13-0500" />
<meta name="keywords" content="helpers,num" />
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
<li class="level1"><div class="li"><span class="li"><a href="#number_helper" class="toc">Number Helper</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#round" class="toc">round()</a></span></div></li></ul>
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



<h1><a name="number_helper" id="number_helper">Number Helper</a></h1>
<div class="level1">

<p>
Provides methods for rounding integer numbers.
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="round" id="round">round()</a></h3>
<div class="level3">

<p>
<code>num::round()</code> accepts two arguments. An integer to round, and a nearest integer number to round too, defaults to 5. 
</p>

<p>
<strong>Example</strong>

</p>
<pre class="code php"><span class="co1">// Given an input of: $numbers = array(1,3,5,9,99,999);</span>
<span class="sy0">&lt;</span>p<span class="sy0">&gt;</span>Rounding numbers to nearest <span class="nu0">5</span><span class="sy0">&lt;/</span>p<span class="sy0">&gt;</span>
<span class="kw2">&lt;?php</span> <span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$numbers</span> <span class="kw1">as</span> <span class="re1">$number</span><span class="br0">&#41;</span><span class="sy0">:</span> <span class="kw2">?&gt;</span>
	<span class="sy0">&lt;</span>p<span class="sy0">&gt;</span>Round <span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$number</span> <span class="kw2">?&gt;</span> to <span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> num<span class="sy0">::</span><a href="http://www.php.net/round"><span class="kw3">round</span></a><span class="br0">&#40;</span><span class="re1">$number</span><span class="sy0">,</span> <span class="nu0">5</span><span class="br0">&#41;</span> <span class="kw2">?&gt;</span> <span class="sy0">&lt;/</span>p<span class="sy0">&gt;</span>
<span class="kw2">&lt;?php</span> <span class="kw1">endforeach</span> <span class="kw2">?&gt;</span></pre>
<p>

This will output as <acronym title="HyperText Markup Language">HTML</acronym>

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/p.php"><span class="kw2">&lt;p&gt;</span></a></span>Rounding numbers to nearest 5<span class="sc2"><span class="kw2">&lt;/p&gt;</span></span>
	<span class="sc2"><a href="http://december.com/html/4/element/p.php"><span class="kw2">&lt;p&gt;</span></a></span>Round 1 to 0 <span class="sc2"><span class="kw2">&lt;/p&gt;</span></span>
	<span class="sc2"><a href="http://december.com/html/4/element/p.php"><span class="kw2">&lt;p&gt;</span></a></span>Round 3 to 5 <span class="sc2"><span class="kw2">&lt;/p&gt;</span></span>
	<span class="sc2"><a href="http://december.com/html/4/element/p.php"><span class="kw2">&lt;p&gt;</span></a></span>Round 5 to 5 <span class="sc2"><span class="kw2">&lt;/p&gt;</span></span>
&nbsp;
	<span class="sc2"><a href="http://december.com/html/4/element/p.php"><span class="kw2">&lt;p&gt;</span></a></span>Round 9 to 10 <span class="sc2"><span class="kw2">&lt;/p&gt;</span></span>
	<span class="sc2"><a href="http://december.com/html/4/element/p.php"><span class="kw2">&lt;p&gt;</span></a></span>Round 99 to 100 <span class="sc2"><span class="kw2">&lt;/p&gt;</span></span>
	<span class="sc2"><a href="http://december.com/html/4/element/p.php"><span class="kw2">&lt;p&gt;</span></a></span>Round 999 to 1000 <span class="sc2"><span class="kw2">&lt;/p&gt;</span></span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer5b15.gif?id=helpers%3Anum&amp;1324588206" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/helpers/num by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/helpers/inflector by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    helpers:inflector    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2008-12-01T22:53:59-0600" />
<meta name="keywords" content="helpers,inflector" />
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
<li class="level1"><div class="li"><span class="li"><a href="#inflector_helper" class="toc">Inflector Helper</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#uncountable" class="toc">uncountable()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#singular" class="toc">singular()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#plural" class="toc">plural()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#camelize" class="toc">camelize()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#underscore" class="toc">underscore()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#humanize" class="toc">humanize()</a></span></div></li></ul>
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



<h1><a name="inflector_helper" id="inflector_helper">Inflector Helper</a></h1>
<div class="level1">

<p>

Provides methods for working with the pluralization and singularization of words as well as other methods to work with phrases.
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="uncountable" id="uncountable">uncountable()</a></h3>
<div class="level3">

<p>
<code>uncountable($string)</code> checks whether the given string is an uncountable word. Returns TRUE or FALSE. This method uses a words list from the inflector.php file, located into the system/config folder 

</p>
<ul>
<li class="level1"><div class="li"> [string] word to check</div>
</li>
</ul>
<pre class="code php">inflector<span class="sy0">::</span><span class="me2">uncountable</span><span class="br0">&#40;</span><span class="st0">'money'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns TRUE</span>
inflector<span class="sy0">::</span><span class="me2">uncountable</span><span class="br0">&#40;</span><span class="st0">'book'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns FALSE</span></pre>
</div>

<h3><a name="singular" id="singular">singular()</a></h3>
<div class="level3">

<p>
<code>singular($str, $count = NULL)</code> will attempt to singularize the given string. Returns the string. If a string is uncountable it will return the string without modification. 
</p>

<p>
<em class="u">Note</em>: this function works for English words only.

</p>
<ul>
<li class="level1"><div class="li"> [string] word to singularize</div>
</li>
<li class="level1"><div class="li"> [integer] number of things - default NULL</div>
</li>
</ul>
<pre class="code php">inflector<span class="sy0">::</span><span class="me2">singular</span><span class="br0">&#40;</span><span class="st0">'books'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns 'book'</span>
inflector<span class="sy0">::</span><span class="me2">singular</span><span class="br0">&#40;</span><span class="st0">'books'</span><span class="sy0">,</span><span class="nu0">0</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns 'books'</span></pre>
</div>

<h3><a name="plural" id="plural">plural()</a></h3>
<div class="level3">

<p>
<code>plural($str, $count = NULL)</code> will attempt to pluralize the given string. Returns the string. If a string is uncountable it will return the string without modification. 
</p>

<p>
<em class="u">Note</em>: this function works for English words only.

</p>
<ul>
<li class="level1"><div class="li"> [string] word to pluralize</div>
</li>
<li class="level1"><div class="li"> [integer] number of things - default NULL</div>
</li>
</ul>
<pre class="code php">inflector<span class="sy0">::</span><span class="me2">plural</span><span class="br0">&#40;</span><span class="st0">'book'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns 'books'</span>
inflector<span class="sy0">::</span><span class="me2">plural</span><span class="br0">&#40;</span><span class="st0">'book'</span><span class="sy0">,</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns 'book'</span></pre>
</div>

<h3><a name="camelize" id="camelize">camelize()</a></h3>
<div class="level3">

<p>
<code>camelize($str)</code> will attempt to camelize the given string. Returns the string. 

</p>
<ul>
<li class="level1"><div class="li"> [string] phrase to camelize</div>
</li>
</ul>
<pre class="code php">inflector<span class="sy0">::</span><span class="me2">camelize</span><span class="br0">&#40;</span><span class="st0">'system_initialization'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns 'systemInitialization'</span>
inflector<span class="sy0">::</span><span class="me2">camelize</span><span class="br0">&#40;</span><span class="st0">'system initialization'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns 'systemInitialization'</span></pre>
</div>

<h3><a name="underscore" id="underscore">underscore()</a></h3>
<div class="level3">

<p>
<code>underscore($str)</code> makes a phrase underscored instead of spaced. Returns the string.

</p>
<ul>
<li class="level1"><div class="li"> [string] phrase to underscore</div>
</li>
</ul>
<pre class="code php">inflector<span class="sy0">::</span><span class="me2">underscore</span><span class="br0">&#40;</span><span class="st0">'Underscores a phrase.'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns Underscores_a_phrase.'</span></pre>
</div>

<h3><a name="humanize" id="humanize">humanize()</a></h3>
<div class="level3">

<p>
<code>humanize($str)</code> makes a phrase human-readable instead of dashed or underscored. Returns the string. 

</p>
<ul>
<li class="level1"><div class="li"> [string] phrase to make human-readable</div>
</li>
</ul>
<pre class="code php">inflector<span class="sy0">::</span><span class="me2">humanize</span><span class="br0">&#40;</span><span class="st0">'Remove_underscores_from_a_phrase.'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns 'Remove underscores from a phrase.'</span>
inflector<span class="sy0">::</span><span class="me2">humanize</span><span class="br0">&#40;</span><span class="st0">'Remove-dashes-from-a-phrase.'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns 'Remove dashes from a phrase.'</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer6b1d.gif?id=helpers%3Ainflector&amp;1324588205" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/helpers/inflector by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


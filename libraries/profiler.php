<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/profiler by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:profiler    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-07-13T17:47:21-0500" />
<meta name="keywords" content="libraries,profiler" />
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
<li class="level1"><div class="li"><span class="li"><a href="#profiler_library" class="toc">Profiler Library</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#how_to_use" class="toc">How to use</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#how_to_disable" class="toc">How to disable</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#getting_the_output" class="toc">Getting the output</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#configure_the_profiler" class="toc">Configure the profiler</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Needs to be expanded with examples maybe</td>
	</tr>
</table>



<h1><a name="profiler_library" id="profiler_library">Profiler Library</a></h1>
<div class="level1">

<p>

The Profiler adds useful information to the bottom of the current page for debugging and optimization purposes.

</p>
<ul>
<li class="level1"><div class="li"> <strong>Benchmarks:</strong> The times and memory usage of benchmarks run by the <a href="../core/benchmark.php" class="wikilink1" title="core:benchmark">Benchmark library</a>.</div>
</li>
</ul>
<ul>
<li class="level1"><div class="li"> <strong>Database Queries:</strong> The raw <acronym title="Structured Query Language">SQL</acronym> of queries executed through the <a href="database.php" class="wikilink1" title="libraries:database">Database library</a> as well as the time taken and number of affected rows.</div>
</li>
</ul>
<ul>
<li class="level1"><div class="li"> <strong>POST Data:</strong> The names and values of any POST data submitted to the current page.</div>
</li>
</ul>
<ul>
<li class="level1"><div class="li"> <strong>Session Data:</strong> All data stored in the current session if using the <a href="session.php" class="wikilink1" title="libraries:session">Session library</a>.</div>
</li>
</ul>
<ul>
<li class="level1"><div class="li"> <strong>Cookie Data:</strong> The names and values of any cookies found for the current domain.</div>
</li>
</ul>

</div>

<h2><a name="how_to_use" id="how_to_use">How to use</a></h2>
<div class="level2">

<p>
To enable the profiler output on your pages simply load the library:
</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">profiler</span> <span class="sy0">=</span> <span class="kw2">new</span> Profiler<span class="sy0">;</span></pre>
<p>
When loaded the profiler will add itself to the <code>system.display</code> event, calling the <code>render()</code> method when the page is being displayed and attaching the output to the bottom of the page.
</p>

</div>

<h2><a name="how_to_disable" id="how_to_disable">How to disable</a></h2>
<div class="level2">

<p>
The automatic rendering of the output can be disabled with the following code:
</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">profiler</span><span class="sy0">-&gt;</span><span class="me1">disable</span><span class="br0">&#40;</span><span class="br0">&#41;</span></pre>
<p>
This is mostly useful when autoloading the profiler to disable the output for certain pages.
</p>

</div>

<h2><a name="getting_the_output" id="getting_the_output">Getting the output</a></h2>
<div class="level2">

<p>
The rendered output may be returned as a string at any time during the page execution by passing TRUE as the first parameter in <code>render()</code>:
</p>
<pre class="code php"><span class="re1">$output</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">profiler</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span></pre>
<p>
Note: This will stop any benchmarks currently being run. Only benchmarks and queries that have been run up until this call will be shown in the output.
</p>

</div>

<h2><a name="configure_the_profiler" id="configure_the_profiler">Configure the profiler</a></h2>
<div class="level2">

<p>
Edit <code>config/profiler.php</code> to configure which items (post, cookie, session, database, benchmarks) the profiler will show.
</p>

<p>
This change is made to <code>application/config/profiler.php</code> so as to apply only to the specific application.

</p>
<pre class="code php"><span class="coMULTI">/**
 * Show everything except database queries. (Other entries are default TRUE, read from system profiler config.
 */</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'database'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="kw2">FALSE</span><span class="sy0">;</span></pre>
<p>
A complete profiler.php would look like this

</p>
<pre class="code php"><span class="kw2">&lt;?php</span> <a href="http://www.php.net/defined"><span class="kw3">defined</span></a><span class="br0">&#40;</span><span class="st0">'SYSPATH'</span><span class="br0">&#41;</span> or <a href="http://www.php.net/die"><span class="kw3">die</span></a><span class="br0">&#40;</span><span class="st0">'No direct script access.'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'post'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="kw2">FALSE</span><span class="sy0">;</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'cookie'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="kw2">FALSE</span><span class="sy0">;</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'session'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="kw2">FALSE</span><span class="sy0">;</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'database'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="kw2">FALSE</span><span class="sy0">;</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'benchmarks'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="kw2">TRUE</span><span class="sy0">;</span></pre>
<p>
Remember to set at least one of the items to TRUE otherwise the profiler will die in a trace error.
</p>

<p>
<strong>Note</strong>: To enable database benchmarking, you will also need to update the following line in your <code>config/database.php</code> file: 
</p>
<pre class="code php"><span class="st0">'benchmark'</span> <span class="sy0">=&gt;</span> <span class="kw2">TRUE</span><span class="sy0">,</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer0145.gif?id=libraries%3Aprofiler&amp;1324588201" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/profiler by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/core/benchmark by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    core:benchmark    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2008-09-29T17:36:58-0500" />
<meta name="keywords" content="core,benchmark" />
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
<li class="level1"><div class="li"><span class="li"><a href="#benchmark_class" class="toc">Benchmark Class</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#start" class="toc">start()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#stop" class="toc">stop()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#get" class="toc">get()</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">Expand on the default benchmarks (what do they measure?)</td>
	</tr>
</table>



<h1><a name="benchmark_class" id="benchmark_class">Benchmark Class</a></h1>
<div class="level1">

<p>

The benchmark class allows you to time your code. By default several benchmarks are run:

</p>
<ul>
<li class="level1"><div class="li"> Kohana Loading  	</div>
</li>
<li class="level1"><div class="li"> Environment Setup 	</div>
</li>
<li class="level1"><div class="li"> System Initialization 	</div>
</li>
<li class="level1"><div class="li"> Controller Setup 	</div>
</li>
<li class="level1"><div class="li"> Controller Execution 	</div>
</li>
<li class="level1"><div class="li"> Total Execution 	</div>
</li>
</ul>

<p>

The results of the benchmarks will be outputted by the <a href="../libraries/profiler.php" class="wikilink1" title="libraries:profiler">Profiler</a>.
</p>

<p>
If a view is rendered {execution_time} and {memory_usage} can be used in the view to be replaced by the actual execution time and memory usage.
</p>


<div class='box'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<p class='box_title'>Note:</p>
<div class='box_content'><p>
Benchmark does not have to be loaded nor instanced. It is automatically loaded during the system setup and all its methods are static.
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="start" id="start">start()</a></h3>
<div class="level3">

<p>

<code>Benchmark::start($name)</code> is used to start a new benchmark. Supply an unique name. Returns void.
</p>
<pre class="code php">Benchmark<span class="sy0">::</span><span class="me2">start</span><span class="br0">&#40;</span><span class="st0">'benchmark1'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="stop" id="stop">stop()</a></h3>
<div class="level3">

<p>

<code>Benchmark::stop($name)</code> is used to stop a benchmark. Supply the name given when the benchmark was started. Returns void.
</p>
<pre class="code php">Benchmark<span class="sy0">::</span><span class="me2">stop</span><span class="br0">&#40;</span><span class="st0">'benchmark1'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="get" id="get">get()</a></h3>
<div class="level3">

<p>

<code>Benchmark::get($name, $decimals)</code> is used to retrieve the results of a benchmark. Returns an array with the results: time is expressed in seconds, memory in bytes.
</p>
<pre class="code php"><a href="http://www.php.net/print_r"><span class="kw3">print_r</span></a><span class="br0">&#40;</span>Benchmark<span class="sy0">::</span><span class="me2">get</span><span class="br0">&#40;</span><span class="st0">'benchmark1'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// Output: Array ( [time] =&gt; 0.0078 [memory] =&gt; 472 )</span></pre>
<p>
The $decimal parameter is optional. Its default value is 4.

</p>
<pre class="code php"><a href="http://www.php.net/print_r"><span class="kw3">print_r</span></a><span class="br0">&#40;</span>Benchmark<span class="sy0">::</span><span class="me2">get</span><span class="br0">&#40;</span><span class="st0">'benchmark1'</span><span class="sy0">,</span> <span class="nu0">6</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// Output: Array ( [time] =&gt; 0.007802 [memory] =&gt; 472 )</span></pre>
<p>
If you set the $name parameter to TRUE, all benchmarks will be returned.

</p>
<pre class="code php"><a href="http://www.php.net/print_r"><span class="kw3">print_r</span></a><span class="br0">&#40;</span>Benchmark<span class="sy0">::</span><span class="me2">get</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="sy0">,</span> <span class="nu0">3</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// Output: Array ( [477f51931a33e_total_execution] =&gt; Array ( [time] =&gt; 0.023 [memory] =&gt; 618940 ) [477f51931a33e_kohana_loading] =&gt; Array ( [time] =&gt; 0.012 [memory] =&gt; 369104 ) [477f51931a33e_environment_setup] =&gt; Array ( [time] =&gt; 0.002 [memory] =&gt; 54300 ) [477f51931a33e_system_initialization] =&gt; Array ( [time] =&gt; 0.003 [memory] =&gt; 65884 ) [477f51931a33e_controller_setup] =&gt; Array ( [time] =&gt; 0.008 [memory] =&gt; 177688 ) [477f51931a33e_controller_execution] =&gt; Array ( [time] =&gt; 0.000 [memory] =&gt; 4236 ) [benchmark1] =&gt; Array ( [time] =&gt; 0.008 [memory] =&gt; 472 ) )</span></pre>

<div class='box'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<p class='box_title'>Note:</p>
<div class='box_content'><p>
If for some reason the <a href="http://php.net/memory_get_usage" class="urlextern" title="http://php.net/memory_get_usage"  rel="nofollow">memory_get_usage()</a> function is not available on your system, memory will be set to 0.
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


<p>

<p style="text-align:center">Next : <a href="event.php" class="wikilink1" title="core:event">Event</a> »</p>

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer85b1.gif?id=core%3Abenchmark&amp;1324588194" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/core/benchmark by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


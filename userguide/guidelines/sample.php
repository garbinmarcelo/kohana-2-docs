<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/userguide/guidelines/sample by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:15:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    userguide:guidelines:sample    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2008-08-12T08:12:02-0500" />
<meta name="keywords" content="userguide,guidelines,sample" />
<link rel="stylesheet" media="all" type="text/css" href="../../lib/exe/cssbd55.css?s=all&amp;t=kohana" />
<link rel="stylesheet" media="screen" type="text/css" href="../../lib/exe/css56d3.css?t=kohana" />
<link rel="stylesheet" media="print" type="text/css" href="../../lib/exe/css97ef.css?s=print&amp;t=kohana" />
<script type="text/javascript" charset="utf-8" src="../../lib/exe/jsb5bc.php?edit=0&amp;write=0" ></script>
<link rel="shortcut icon" href="../../lib/tpl/kohana/images/favicon.ico" />
</head>
<body>
<!-- Start Header -->
<div id="header">

<!-- Start Logo -->
<a id="logo" href="/<?php echo explode('/', $_SERVER['REQUEST_URI'])[1]; ?>">
    <img src="./../../lib/images/kohana-logo.png" alt="Kohana" />
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
<li class="level1"><div class="li"><span class="li"><a href="#sample_main_heading" class="toc">Sample Main Heading</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#configuration" class="toc">Configuration</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#how_to_getinstantiate_the_object" class="toc">How to get/instantiate the object</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#how_is_the_thing_used" class="toc">How is the thing used</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#setting_caches" class="toc">Setting caches</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#finding_and_getting_caches" class="toc">Finding and getting caches</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#database_table_schema" class="toc">Database Table Schema</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#full_coded_example" class="toc">Full coded example</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">current page status</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">what needs to be done next</td>
	</tr>
</table>



<h1><a name="sample_main_heading" id="sample_main_heading">Sample Main Heading</a></h1>
<div class="level1">

<p>

Introduce the topic, provide general overview of usage and any relevant info.
</p>

<p>
For the <acronym title="Application Programming Interface">API</acronym> documentation:
</p>
<ul>
<li class="level1"><div class="li"> if available</div>
</li>
</ul>

<p>

<strong>if applicable</strong> List any relevant links to information  <a href="http://forum.kohanaphp.com/" class="urlextern" title="http://forum.kohanaphp.com"  rel="nofollow">Kohana Forum</a>
</p>

</div>

<h2><a name="configuration" id="configuration">Configuration</a></h2>
<div class="level2">

<p>

Describe how to configure, if applicable. Describe the config items, what they do, how to use them.
</p>

<p>
Example from Cache Library:
</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'driver'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'file'</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'params'</span><span class="br0">&#93;</span> <span class="sy0">=</span> APPPATH <span class="sy0">.</span> <span class="st0">'cache'</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'lifetime'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="nu0">1800</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'requests'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="nu0">1000</span><span class="sy0">;</span></pre>
</div>

<h4><a name="drivers" id="drivers">Drivers</a></h4>
<div class="level4">

<p>

<code>config[&#039;driver&#039;]</code> sets the driver, which is the container for your cached files. There are 6 different drivers:
</p>
<ul>
<li class="level1"><div class="li"> File - File cache is fast and reliable, but requires many filesystem lookups.</div>
</li>
<li class="level1"><div class="li"> SQlite - Database cache can be used to cache items remotely, but is slower.</div>
</li>
<li class="level1"><div class="li"> Memcache - Memcache is very high performance, but prevents cache tags from being used.</div>
</li>
<li class="level1"><div class="li"> APC - Alternative Php Cache</div>
</li>
<li class="level1"><div class="li"> Eaccelerator</div>
</li>
<li class="level1"><div class="li"> Xcache</div>
</li>
</ul>

</div>

<h4><a name="driver_parameters" id="driver_parameters">Driver parameters</a></h4>
<div class="level4">

<p>

<code>$config[&#039;params&#039;]</code> contains driver specific parameters. (in above example - path to server writable cache dir)
</p>

</div>

<h4><a name="cache_lifetime" id="cache_lifetime">Cache Lifetime</a></h4>
<div class="level4">

<p>

<code>$config[&#039;lifetime&#039;]</code> sets the lifetime of the cache. Specific lifetime can be set when creating a new cache. 0 means it will never be deleted automatically
</p>

</div>

<h4><a name="garbage_collector" id="garbage_collector">Garbage Collector</a></h4>
<div class="level4">

<p>

<code>$config[&#039;requests&#039;]</code> average number of requests before automatic garbage collection begins. Set to a negative number will disable automatic garbage collection
</p>

</div>

<h2><a name="how_to_getinstantiate_the_object" id="how_to_getinstantiate_the_object">How to get/instantiate the object</a></h2>
<div class="level2">
<pre class="code php"> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">cache</span><span class="sy0">=</span> <span class="kw2">new</span> Cache<span class="sy0">;</span></pre>
</div>

<h2><a name="how_is_the_thing_used" id="how_is_the_thing_used">How is the thing used</a></h2>
<div class="level2">

<p>

Explain usage here. (sample from Cache library)
</p>

<p>
Give a code example:
</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">cache</span><span class="sy0">=</span> <span class="kw2">new</span> Cache<span class="sy0">;</span>
&nbsp;
<span class="re1">$table</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">cache</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'table'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">if</span> <span class="br0">&#40;</span> <span class="sy0">!</span> <span class="re1">$table</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    <span class="re1">$table</span> <span class="sy0">=</span> build_table<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">cache</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><span class="st0">'table'</span><span class="sy0">,</span> <span class="re1">$table</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'mytag1'</span><span class="sy0">,</span> <span class="st0">'mytag2'</span><span class="br0">&#41;</span><span class="sy0">,</span> <span class="nu0">3600</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$table</span><span class="sy0">;</span></pre>
<p>
Explain in detail:
</p>

<p>
There are 3 main steps:
</p>
<ul>
<li class="level1"><div class="li"> Instantiate the cache library</div>
</li>
<li class="level1"><div class="li"> Get the cache:</div>
<ul>
<li class="level2"><div class="li">  If the cache doesn&#039;t exist, we build the table by querying the database, we cache it for 1 hour (3600 seconds) for next requests and we print it.</div>
</li>
<li class="level2"><div class="li">  If the cache exists, we directly print the cached version of the table</div>
</li>
</ul>
</li>
</ul>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

<p>

List all the public methods (example from Cache library)
</p>

<p>
<strong>Use a descriptive name for the main heading</strong>, followed by the method name as sub heading.

</p>
<ul>
<li class="level1"><div class="li"> <code><span class="curid"><a href="sample.php#set" class="wikilink1" title="userguide:guidelines:sample">set</a></span>($id, $data, $tags = NULL, $lifetime = NULL)</code> is used to set caches. </div>
</li>
<li class="level1"><div class="li"> <code><span class="curid"><a href="sample.php#get" class="wikilink1" title="userguide:guidelines:sample">get</a></span>($id)</code> retrieves a cache with the given $id, returns the data or NULL</div>
</li>
<li class="level1"><div class="li"> <code><span class="curid"><a href="sample.php#find" class="wikilink1" title="userguide:guidelines:sample">find</a></span>($tag)</code> supply with a string, retrieves all caches with the given tag.</div>
</li>
<li class="level1"><div class="li"> <code><span class="curid"><a href="sample.php#delete" class="wikilink1" title="userguide:guidelines:sample">delete</a></span>($id)</code> deletes a cache item by id, returns a boolean.</div>
</li>
<li class="level1"><div class="li"> <code><span class="curid"><a href="sample.php#delete_tag" class="wikilink1" title="userguide:guidelines:sample">delete_tag</a></span>($tag)</code> deletes all cache items with a given tag, returns a boolean.</div>
</li>
<li class="level1"><div class="li"> <code><span class="curid"><a href="sample.php#delete_all" class="wikilink1" title="userguide:guidelines:sample">delete_all</a></span>()</code> deletes all cache items, returns a boolean.</div>
</li>
</ul>

</div>

<h3><a name="setting_caches" id="setting_caches">Setting caches</a></h3>
<div class="level3">

</div>

<h4><a name="set" id="set">set</a></h4>
<div class="level4">

<p>
<code>set($id,$data,$tags = NULL, $lifetime = NULL)</code> is used to set caches. 

</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$id</code> The ID of the cached data. Must be unique.</div>
</li>
<li class="level1"><div class="li"> <strong>[mixed]</strong> <code>$data</code> If $data is not a string it will be serialized for storage. </div>
</li>
<li class="level1"><div class="li"> <strong>[mixed]</strong> <code>$tags</code>defaults to none, an array should be supplied.  This is useful when grouping caches together.</div>
</li>
<li class="level1"><div class="li"> <strong>[mixed]</strong> <code>$lifetime</code> specific lifetime can be set. If none given the default lifetime from the configuration file will be used.</div>
</li>
<li class="level1"><div class="li"> returns <strong>[mixed]</strong> The cached data.</div>
</li>
</ul>
<pre class="code php"><span class="re1">$data</span><span class="sy0">=</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'Jean Paul Sartre'</span><span class="sy0">,</span> <span class="st0">'Albert Camus'</span><span class="sy0">,</span> <span class="st0">'Simone de Beauvoir'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$tags</span><span class="sy0">=</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'existentialism'</span><span class="sy0">,</span><span class="st0">'philosophy'</span><span class="sy0">,</span><span class="st0">'french'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">cache</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><span class="st0">'existentialists'</span><span class="sy0">,</span><span class="re1">$data</span><span class="sy0">,</span><span class="re1">$tags</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="finding_and_getting_caches" id="finding_and_getting_caches">Finding and getting caches</a></h3>
<div class="level3">

</div>

<h4><a name="get" id="get">get</a></h4>
<div class="level4">

<p>
<code>get($id)</code> retrieves a cache with the given $id, returns the data or NULL
</p>

</div>

<h4><a name="find" id="find">find</a></h4>
<div class="level4">

<p>
<code>find($tag)</code> supply with a string, retrieves all caches with the given tag.
</p>

<p>
Add all other methods methods here. 
</p>

</div>

<h2><a name="database_table_schema" id="database_table_schema">Database Table Schema</a></h2>
<div class="level2">

<p>
<strong>if applicable</strong>
</p>

<p>
If a database is required, list the schema here.
</p>
<pre class="code sql"><span class="kw1">CREATE</span> <span class="kw1">TABLE</span> caches<span class="br0">&#40;</span>
	id varchar<span class="br0">&#40;</span><span class="nu0">127</span><span class="br0">&#41;</span>,
	hash char<span class="br0">&#40;</span><span class="nu0">40</span><span class="br0">&#41;</span>,
	tags varchar<span class="br0">&#40;</span><span class="nu0">255</span><span class="br0">&#41;</span>,
	expiration int,
	cache blob<span class="br0">&#41;</span>;</pre>
</div>

<h2><a name="full_coded_example" id="full_coded_example">Full coded example</a></h2>
<div class="level2">

<p>

If applicable, list a full code example here. Or provide links to online examples as well.

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../../lib/exe/indexerc795.gif?id=userguide%3Aguidelines%3Asample&amp;1324588240" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/userguide/guidelines/sample by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:15:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


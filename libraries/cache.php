<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/cache by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:cache    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-03-19T07:36:16-0500" />
<meta name="keywords" content="libraries,cache" />
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
<li class="level1"><div class="li"><span class="li"><a href="#cache_library" class="toc">Cache Library</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#configuration" class="toc">Configuration</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#how_do_i_set_up_caching_in_my_application" class="toc">How do I set up caching in my application?</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#loading_the_library" class="toc">Loading the library</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#setting_caches" class="toc">Setting caches</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#finding_and_getting_caches" class="toc">Finding and getting caches</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#deleting_caches" class="toc">Deleting caches</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#sqlite_driver_schema" class="toc">SQLite Driver Schema</a></span></div></li></ul>
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



<h1><a name="cache_library" id="cache_library">Cache Library</a></h1>
<div class="level1">

<p>

Kohana lets you cache any data in order to achieve maximum performance.
</p>

<p>
The majority of web pages served today are generated dynamically, usually by an application server querying a back-end database. Caching consists in storing objects or pages in their fully rendered state so that they are directly loaded for next requests. It allows to cut response times and save server resources and memory.
</p>

<p>
<strong>What should I cache?</strong> Any objects or content requiring “heavy” dynamic generation.
</p>

<p>
Kohana&#039;s cache library can currently store caches in various containers including file and database. This is configurable by setting the driver. Cached objects or contents can be loaded using a powerful tag system or with their identifier.
</p>

<p>
For the <acronym title="Application Programming Interface">API</acronym> documentation:
</p>
<ul>
<li class="level1"><div class="li"> not available yet</div>
</li>
</ul>

</div>

<h2><a name="configuration" id="configuration">Configuration</a></h2>
<div class="level2">

<p>
Configuration is done in the <code>application/config/cache.php</code> file, if it&#039;s not there take the one from <code>system/config</code> and copy it to the application folder (see <a href="../general/filesystem.php#cascading" class="urlextern" title="http://docs.kohanaphp.com/general/filesystem#cascading"  rel="nofollow">cascading filesystem</a>):

</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'default'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span>
  <span class="st0">'driver'</span> <span class="sy0">=&gt;</span> <span class="st0">'file'</span><span class="sy0">,</span>
  <span class="st0">'params'</span> <span class="sy0">=&gt;</span> APPPATH<span class="sy0">.</span><span class="st0">'cache'</span><span class="sy0">,</span>
  <span class="st0">'lifetime'</span> <span class="sy0">=&gt;</span> <span class="nu0">1800</span><span class="sy0">,</span>
  <span class="st0">'requests'</span> <span class="sy0">=&gt;</span> <span class="nu0">1000</span>
<span class="br0">&#41;</span><span class="sy0">;</span></pre>
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

<code>$config[&#039;lifetime&#039;]</code> sets the lifetime of the cache (in seconds). Specific lifetime can be set when creating a new cache. 0 means it will never be deleted automatically
</p>

</div>

<h4><a name="garbage_collector" id="garbage_collector">Garbage Collector</a></h4>
<div class="level4">

<p>

<code>$config[&#039;requests&#039;]</code> average number of requests before automatic garbage collection begins. Set to a negative number will disable automatic garbage collection
</p>

</div>

<h2><a name="how_do_i_set_up_caching_in_my_application" id="how_do_i_set_up_caching_in_my_application">How do I set up caching in my application?</a></h2>
<div class="level2">

<p>

Suppose you want to retrieve some information from your database and build a table of the entries you get. To cache the generated content, you would use in your controller code like this:
</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">cache</span><span class="sy0">=</span> Cache<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
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

<h2><a name="loading_the_library" id="loading_the_library">Loading the library</a></h2>
<div class="level2">
<pre class="code php"> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">cache</span> <span class="sy0">=</span> Cache<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">
<ul>
<li class="level1"><div class="li"> <code>$this→cache→<span class="curid"><a href="cache.php#set" class="wikilink1" title="libraries:cache">set</a></span>($id, $data, $tags = NULL, $lifetime = NULL)</code> is used to set caches. </div>
</li>
<li class="level1"><div class="li"> <code>$this→cache→<span class="curid"><a href="cache.php#get" class="wikilink1" title="libraries:cache">get</a></span>($id)</code> retrieves a cache with the given $id, returns the data or NULL</div>
</li>
<li class="level1"><div class="li"> <code>$this→cache→<span class="curid"><a href="cache.php#find" class="wikilink1" title="libraries:cache">find</a></span>($tag)</code> supply with a string, retrieves all caches with the given tag.</div>
</li>
<li class="level1"><div class="li"> <code>$this→cache→<span class="curid"><a href="cache.php#delete" class="wikilink1" title="libraries:cache">delete</a></span>($id)</code> deletes a cache item by id, returns a boolean.</div>
</li>
<li class="level1"><div class="li"> <code>$this→cache→<span class="curid"><a href="cache.php#delete_tag" class="wikilink1" title="libraries:cache">delete_tag</a></span>($tag)</code> deletes all cache items with a given tag, returns a boolean.</div>
</li>
<li class="level1"><div class="li"> <code>$this→cache→<span class="curid"><a href="cache.php#delete_all" class="wikilink1" title="libraries:cache">delete_all</a></span>()</code> deletes all cache items, returns a boolean.</div>
</li>
</ul>

</div>

<h3><a name="setting_caches" id="setting_caches">Setting caches</a></h3>
<div class="level3">

</div>

<h4><a name="set" id="set">set</a></h4>
<div class="level4">

<p>
<code>$this→cache→set($id,$data,$tags = NULL, $lifetime = NULL)</code> is used to set caches. 

</p>
<ul>
<li class="level1"><div class="li"> <code>$id</code> The id should be unique</div>
</li>
<li class="level1"><div class="li"> <code>$data</code> If $data is not a string it will be serialized for storage. </div>
</li>
<li class="level1"><div class="li"> <code>$tags</code>defaults to none, an array should be supplied.  This is useful when grouping caches together.</div>
</li>
<li class="level1"><div class="li"> <code>$lifetime</code> specific lifetime can be set. If none given the default lifetime from the configuration file will be used.</div>
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
<code>$this→cache→get($id)</code> retrieves a cache with the given $id, returns the data or NULL
</p>
<pre class="code php"><a href="http://www.php.net/print_r"><span class="kw3">print_r</span></a><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">cache</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'existentialists'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">//returns:</span>
<span class="co1">// Array ( [0] =&gt; Jean Paul Sartre [1] =&gt; Albert Camus [2] =&gt; Simone de Beauvoir )</span></pre>
</div>

<h4><a name="find" id="find">find</a></h4>
<div class="level4">

<p>
<code>$this→cache→find($tag)</code> supply with a string, retrieves all caches with the given tag.

</p>
<pre class="code php"><span class="re1">$food</span><span class="sy0">=</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'French bread'</span><span class="sy0">,</span><span class="st0">'French wine'</span><span class="sy0">,</span><span class="st0">'French cheese'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">cache</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><span class="st0">'food'</span><span class="sy0">,</span><span class="re1">$food</span><span class="sy0">,</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'french'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<a href="http://www.php.net/print_r"><span class="kw3">print_r</span></a><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">cache</span><span class="sy0">-&gt;</span><span class="me1">find</span><span class="br0">&#40;</span><span class="st0">'french'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">//returns</span>
<span class="co1">//Array ( [existentialists] =&gt; Array ( [0] =&gt; Jean Paul Sartre [1] =&gt; Albert Camus [2] =&gt; Simone de Beauvoir ) [food] =&gt; Array ( [0] =&gt; French bread [1] =&gt; French wine [2] =&gt; French cheese) )</span></pre>
</div>

<h3><a name="deleting_caches" id="deleting_caches">Deleting caches</a></h3>
<div class="level3">

<p>

There are several methods to delete caches
</p>

</div>

<h4><a name="delete" id="delete">delete</a></h4>
<div class="level4">

<p>

<code>$this→cache→delete($id)</code> deletes a cache item by id, returns a boolean

</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">cache</span><span class="sy0">-&gt;</span><span class="me1">delete</span><span class="br0">&#40;</span><span class="st0">'food'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h4><a name="delete_tag" id="delete_tag">delete_tag</a></h4>
<div class="level4">

<p>

<code>$this→cache→delete_tag($tag)</code> deletes all cache items with a given tag, returns a boolean

</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">cache</span><span class="sy0">-&gt;</span><span class="me1">delete_tag</span><span class="br0">&#40;</span><span class="st0">'french'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h4><a name="delete_all" id="delete_all">delete_all</a></h4>
<div class="level4">

<p>

<code>$this→cache→delete_all()</code> deletes all cache items, returns a boolean

</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">cache</span><span class="sy0">-&gt;</span><span class="me1">delete_all</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="sqlite_driver_schema" id="sqlite_driver_schema">SQLite Driver Schema</a></h2>
<div class="level2">

<p>

If you use the SQlite driver to store the caches the table can be constructed with this query.
</p>
<pre class="code sql"><span class="kw1">CREATE</span> <span class="kw1">TABLE</span> caches<span class="br0">&#40;</span>
	id varchar<span class="br0">&#40;</span><span class="nu0">127</span><span class="br0">&#41;</span>,
	hash char<span class="br0">&#40;</span><span class="nu0">40</span><span class="br0">&#41;</span>,
	tags varchar<span class="br0">&#40;</span><span class="nu0">255</span><span class="br0">&#41;</span>,
	expiration int,
	cache blob<span class="br0">&#41;</span>;</pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer4f95.gif?id=libraries%3Acache&amp;1324588198" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/cache by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


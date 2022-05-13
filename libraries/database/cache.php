<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/database/cache by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:16:36 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:database:cache    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-06-20T17:39:43-0500" />
<meta name="keywords" content="libraries,database,cache" />
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

<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Needs Review</td>
	</tr>
</table>

<p>

<strong><a href="../database.php" class="wikilink1" title="libraries:database">&lt;&lt; Back to Database Main Page</a></strong>
</p>



<h1><a name="database_query_caching" id="database_query_caching">Database Query Caching</a></h1>
<div class="level1">

<p>

Query caching allows for speed improvements when multiple, identical queries are run. It caches the results of all queries, so when the next one is run, it uses that cache result instead of querying the database again. Please note that this is only useful for SELECT statements, and INSERT or UPDATE statements may corrupt your cache results.
</p>

<p>
It works automatically when you have the config option set, and only has one method associated with it.
</p>

<p>
Please note that this is not a substitute for properly designing your application. Generally this is only needed on very large applications where hundreds of queries are called and it&#039;s (nearly) impossible to properly optimize them all.
</p>

</div>

<h3><a name="clear_cache" id="clear_cache">clear_cache()</a></h3>
<div class="level3">

<p>

This method clears the database cache. If you pass an <acronym title="Structured Query Language">SQL</acronym> statement as a string parameter, it will only clear the cache for that statement. If you pass <code>TRUE</code> as a parameter, it will clear the cache for the last run statement, equivalent to <code>$db→clear_cache($db→last_query())</code>.
</p>
<pre class="code php"><span class="re1">$db</span> <span class="sy0">=</span> <span class="kw2">new</span> Database<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$query</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">from</span><span class="br0">&#40;</span><span class="st0">'records'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'title'</span> <span class="sy0">=&gt;</span> <span class="st0">'foobar'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// Work with the results...</span>
&nbsp;
<span class="sy0">...</span>
&nbsp;
<span class="co1">// Now somewhere else I need to run the same query:</span>
<span class="re1">$query2</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">from</span><span class="br0">&#40;</span><span class="st0">'records'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'title'</span> <span class="sy0">=&gt;</span> <span class="st0">'foobar'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// This will grab the results from my cache!</span>
&nbsp;
<span class="sy0">...</span>
&nbsp;
<span class="re1">$status</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">insert</span><span class="br0">&#40;</span><span class="st0">'records'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id'</span> <span class="sy0">=&gt;</span> <span class="nu0">10</span><span class="sy0">,</span> <span class="st0">'title'</span> <span class="sy0">=&gt;</span> <span class="st0">'foobar'</span><span class="sy0">,</span> <span class="st0">'content'</span> <span class="sy0">=&gt;</span> <span class="st0">'foobar'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// Now I inserted a row that has corrupted the cache. I need to clear it before I run the same query:</span>
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">clear_cache</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// Same as $db-&gt;clear_cache($db-&gt;last_query());</span>
&nbsp;
OR
&nbsp;
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">clear_cache</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// This clears the whole cache.</span>
&nbsp;
<span class="co1">//Now I can safely run my query again.</span>
<span class="re1">$query3</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">from</span><span class="br0">&#40;</span><span class="st0">'records'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'title'</span> <span class="sy0">=&gt;</span> <span class="st0">'foobar'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// New results returned and set to my cache.</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../../lib/exe/indexer60cf.gif?id=libraries%3Adatabase%3Acache&amp;1324588285" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/database/cache by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:16:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


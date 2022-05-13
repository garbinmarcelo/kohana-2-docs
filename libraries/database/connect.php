<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/database/connect by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:16:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:database:connect    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-06-20T17:34:00-0500" />
<meta name="keywords" content="libraries,database,connect" />
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
<li class="level1"><div class="li"><span class="li"><a href="#connecting_to_a_database" class="toc">Connecting to a database</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#lazy_connection" class="toc">Lazy connection</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#connection_caching" class="toc">Connection caching</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#multiple_database_support" class="toc">Multiple database support</a></span></div></li></ul>
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

<p>

<strong><a href="../database.php" class="wikilink1" title="libraries:database">&lt;&lt; Back to Database Main Page</a></strong>
</p>



<h1><a name="connecting_to_a_database" id="connecting_to_a_database">Connecting to a database</a></h1>
<div class="level1">

<p>
Connecting with the database library is very simple. Most of the time, you never need to think about it! Kohana has the following features to make your connection life much easier:
</p>

</div>

<h2><a name="lazy_connection" id="lazy_connection">Lazy connection</a></h2>
<div class="level2">

<p>
Kohana will not connect to your database until it needs to perform a query or get some table metadata. This is useful when you employ query or page caching, so you don&#039;t use a connection when it isn&#039;t needed.
</p>

</div>

<h2><a name="connection_caching" id="connection_caching">Connection caching</a></h2>
<div class="level2">

<p>
Kohana uses the default behaviors in native php database methods to cache the database connection when using the same database group with multiple database objects.
</p>

</div>

<h2><a name="multiple_database_support" id="multiple_database_support">Multiple database support</a></h2>
<div class="level2">

<p>
Kohana has the ability to connect to multiple databases at once by simply having multiple config groups, and creating new objects with them.<br/>

</p>
<pre class="code php"><span class="re1">$db1</span> <span class="sy0">=</span> <span class="kw2">new</span> Database<span class="br0">&#40;</span><span class="st0">'db1'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$db2</span> <span class="sy0">=</span> <span class="kw2">new</span> Database<span class="br0">&#40;</span><span class="st0">'db2'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
where db1 and db2 would be config groups in your database <a href="configuration.php" class="wikilink1" title="libraries:database:configuration">configuration</a>.
</p>

<p>

<strong><a href="query.php" class="wikilink1" title="libraries:database:query">Continue to the next section: Querying a database &gt;&gt;</a></strong>
</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../../lib/exe/indexer3dfe.gif?id=libraries%3Adatabase%3Aconnect&amp;1324588284" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/database/connect by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:16:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


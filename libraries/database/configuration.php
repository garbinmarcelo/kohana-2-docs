<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/database/configuration by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:15:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:database:configuration    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-06-20T17:45:22-0500" />
<meta name="keywords" content="libraries,database,configuration" />
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
		<th class="col0">Todo</th><td class="col1">Expand</td>
	</tr>
</table>

<p>

<strong><a href="../database.php" class="wikilink1" title="libraries:database">&lt;&lt; Back to Database Main Page</a></strong>
</p>



<h1><a name="database_configuration" id="database_configuration">Database Configuration</a></h1>
<div class="level1">

<p>

To configure the database there should be a file database.php in your application/config directory. If it isn&#039;t there you should copy it from the system/config directory. It will look something like this:
</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'default'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
	<span class="st0">'benchmark'</span>     <span class="sy0">=&gt;</span> <span class="kw2">TRUE</span><span class="sy0">,</span>
	<span class="st0">'persistent'</span>    <span class="sy0">=&gt;</span> <span class="kw2">FALSE</span><span class="sy0">,</span>
	<span class="st0">'connection'</span>    <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
	<span class="br0">&#40;</span>
		<span class="st0">'type'</span>     <span class="sy0">=&gt;</span> <span class="st0">'mysql'</span><span class="sy0">,</span>
		<span class="st0">'user'</span>     <span class="sy0">=&gt;</span> <span class="st0">'dbuser'</span><span class="sy0">,</span>
		<span class="st0">'pass'</span>     <span class="sy0">=&gt;</span> <span class="st0">'p@ssw0rd'</span><span class="sy0">,</span>
		<span class="st0">'host'</span>     <span class="sy0">=&gt;</span> <span class="st0">'localhost'</span><span class="sy0">,</span>
		<span class="st0">'port'</span>     <span class="sy0">=&gt;</span> <span class="kw2">FALSE</span><span class="sy0">,</span>
		<span class="st0">'socket'</span>   <span class="sy0">=&gt;</span> <span class="kw2">FALSE</span><span class="sy0">,</span>
		<span class="st0">'database'</span> <span class="sy0">=&gt;</span> <span class="st0">'kohana'</span>
	<span class="br0">&#41;</span><span class="sy0">,</span>
	<span class="st0">'character_set'</span> <span class="sy0">=&gt;</span> <span class="st0">'utf8'</span><span class="sy0">,</span>
	<span class="st0">'table_prefix'</span>  <span class="sy0">=&gt;</span> <span class="st0">''</span><span class="sy0">,</span>
	<span class="st0">'object'</span>        <span class="sy0">=&gt;</span> <span class="kw2">TRUE</span><span class="sy0">,</span>
	<span class="st0">'cache'</span>         <span class="sy0">=&gt;</span> <span class="kw2">FALSE</span><span class="sy0">,</span>
	<span class="st0">'escape'</span>        <span class="sy0">=&gt;</span> <span class="kw2">TRUE</span>
<span class="br0">&#41;</span><span class="sy0">;</span></pre><ul>
<li class="level1"><div class="li"> <code>benchmark</code> is used to enable or disable benchmarking</div>
</li>
<li class="level1"><div class="li"> <code>persistent</code> is used to enable or disable a <a href="http://us2.php.net/manual/en/features.persistent-connections.php" class="urlextern" title="http://us2.php.net/manual/en/features.persistent-connections.php"  rel="nofollow"> persistent connection</a></div>
</li>
<li class="level1"><div class="li"> <code>connection</code> array of specific parameters or supply a valid DSN identifier in the format: driver://user:password@server_or_socket/database </div>
</li>
<li class="level1"><div class="li"> <code>character_set</code> which character_set to use</div>
</li>
<li class="level1"><div class="li"> <code>table_prefix</code> the table prefix to use for your tables, if any</div>
</li>
<li class="level1"><div class="li"> <code>object</code> if set to TRUE, database <a href="result.php" class="wikilink1" title="libraries:database:result">result</a>s return objects by default, otherwise they return arrays.</div>
</li>
<li class="level1"><div class="li"> <code>cache</code> enable or disable the query <a href="cache.php" class="wikilink1" title="libraries:database:cache">cache</a></div>
</li>
<li class="level1"><div class="li"> <code>escape</code> enable or disable automatic query builder escaping</div>
</li>
</ul>

<p>
 
You can have as many $config entries as you need. Each one needs a unique group identifier. You can use multiple config groups to <a href="connect.php" class="wikilink1" title="libraries:database:connect">connect</a> to different databases in the same application.
</p>

</div>

<h1><a name="database_drivers" id="database_drivers">Database Drivers</a></h1>
<div class="level1">

<p>
The database library provides database access to your application using drivers. 
</p>

<p>
Currently we have the following drivers available:
</p>
<ol>
<li class="level1"><div class="li"> MsSQL</div>
</li>
<li class="level1"><div class="li"> MySQL</div>
</li>
<li class="level1"><div class="li"> MySQLi</div>
</li>
<li class="level1"><div class="li"> PostgreSQL</div>
</li>
<li class="level1"><div class="li"> PDOSqlite (available in SVN)</div>
</li>
</ol>

<p>
<strong><a href="connect.php" class="wikilink1" title="libraries:database:connect">Continue to the next section: Connecting to a database &gt;&gt;</a></strong>

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../../lib/exe/indexerddfe.gif?id=libraries%3Adatabase%3Aconfiguration&amp;1324588231" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/database/configuration by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:15:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


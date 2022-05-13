<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/database/metadata by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:16:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:database:metadata    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-06-20T17:39:09-0500" />
<meta name="keywords" content="libraries,database,metadata" />
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
<li class="level1"><div class="li"><span class="li"><a href="#database_metadata" class="toc">Database Metadata</a></span></div>
<ul class="toc">
<li class="clear">

<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#list_fields" class="toc">list_fields()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#field_data" class="toc">field_data()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#table_exists" class="toc">table_exists()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#list_tables" class="toc">list_tables()</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">Needs review</td>
	</tr>
</table>

<p>

<strong><a href="../database.php" class="wikilink1" title="libraries:database">&lt;&lt; Back to Database Main Page</a></strong>
</p>



<h1><a name="database_metadata" id="database_metadata">Database Metadata</a></h1>
<div class="level1">

<p>

Below are methods that provide you with information about fields and tables in the database.
</p>

<p>
The usual way to call these methods would be from a method in your model, via <code>$this→db</code>.
For example, you might do something like:

</p>
<pre class="code php">  <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">list_fields</span><span class="br0">&#40;</span><span class="st0">'some_table'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>

<div class='box'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<div class='box_content'><p>
<strong>Note:</strong> Calls to these methods will not show up in the information displayed by the <a href="../profiler.php" class="wikilink1" title="libraries:profiler">profiler library</a>.
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


</div>

<h3><a name="list_fields" id="list_fields">list_fields()</a></h3>
<div class="level3">

<p>

<code>Database::list_fields($table)</code> returns an array of the fields (columns) in the specified table.
</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> The name of the table to get information for.</div>
</li>
</ul>

</div>

<h3><a name="field_data" id="field_data">field_data()</a></h3>
<div class="level3">

<p>

<code>Database::field_data($table)</code> returns an array, with one entry per field (collumn) in the database. Each entry in this array is an associative sub-array that specifies metadata about a field.
</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> The name of the table to get information for.</div>
</li>
</ul>


<div class='box'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<div class='box_content'><p>
<strong>Note:</strong> The keys of the sub-array (and the metadata returned about each field) differ depending on the database driver in use.
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


<p>
Using the MySQL driver, each sub-array contains the following keys:

</p>
<ul>
<li class="level1"><div class="li"> Field: The name of the field/column this sub-array refers to</div>
</li>
<li class="level1"><div class="li"> Type: The field/column type, for example “int(10) unsigned”</div>
</li>
<li class="level1"><div class="li"> Null: Does the field permit NULL values? May either be &#039;YES&#039; or &#039;NO&#039;.</div>
</li>
<li class="level1"><div class="li"> Key: The field&#039;s key type. May be empty, or &#039;PRI&#039; to indicate a primary key field.</div>
</li>
<li class="level1"><div class="li"> Default: The field&#039;s default value for new records.</div>
</li>
<li class="level1"><div class="li"> Extra: May be empty, or “auto_increment”.</div>
</li>
</ul>

</div>

<h3><a name="table_exists" id="table_exists">table_exists()</a></h3>
<div class="level3">

<p>

<code>Database::table_exists($table)</code> returns TRUE or FALSE depending on whether the specified table exists in the database.
</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> The name of the table to check the existence of.</div>
</li>
</ul>

</div>

<h3><a name="list_tables" id="list_tables">list_tables()</a></h3>
<div class="level3">

<p>

<code>Database::list_tables()</code> returns an array containing the names of all the tables in the database.
</p>

<p>

<strong><a href="cache.php" class="wikilink1" title="libraries:database:cache">Continue to the next section: Database Query Caching &gt;&gt;</a></strong>

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../../lib/exe/indexerb351.gif?id=libraries%3Adatabase%3Ametadata&amp;1324588285" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/database/metadata by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:16:36 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


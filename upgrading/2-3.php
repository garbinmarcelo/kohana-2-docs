<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/upgrading/2.1 by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:15:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    upgrading:2.1    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2008-08-09T14:22:44-0500" />
<meta name="keywords" content="upgrading,2.1" />
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
<li class="level1"><div class="li"><span class="li"><a href="#to_2.1_upgrading" class="toc">2.0 to 2.1 Upgrading</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#configuration" class="toc">Configuration</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#helpers" class="toc">Helpers</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#validation" class="toc">Validation</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#database" class="toc">Database</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#deprecated_stuff" class="toc">Deprecated stuff</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
</table>



<h1><a name="to_2.1_upgrading" id="to_2.1_upgrading">2.0 to 2.1 Upgrading</a></h1>
<div class="level1">

<p>

There are a number of changes to the main <code>&#039;index.php</code>&#039; file and the <code>&#039;config.php</code>&#039; system file. The quickest way to upgrade is make a backup of your <code>&#039;index.php</code>&#039; and your application <code>&#039;config.php</code>&#039; file. Call the backups file_name_version.of.Kohana. e.g. index.php_2.0.
</p>

<p>
You could consider naming your system folder with the version number: <code>&#039;system_2.1.1</code>&#039; rather than copying the new one over the top. You can then simply revert to a previous version if there are any issues.
</p>

<p>
Install the new <code>&#039;index.php</code>&#039; and <code>&#039;application/config.php</code>&#039; files, and update any values in them to reflect the changes you made in your original files. The <code>&#039;$kohana_system</code>&#039; should point to the new versioned system folder.
</p>

<p>
Then continue with the changes in other files (if needed) stated below.
</p>

<p>
This method is more reliable than making incremental changes to existing files based on a list - and you can simple swap back to the old version if things go wrong.
</p>

</div>

<h2><a name="configuration" id="configuration">Configuration</a></h2>
<div class="level2">
<ul>
<li class="level1"><div class="li"> Changes to config/config.php:</div>
<ul>
<li class="level2"><div class="li"> <code>display_errors</code> has been added.</div>
</li>
<li class="level2"><div class="li"> <code>output_compression</code> has been added.</div>
</li>
<li class="level2"><div class="li"> <code>include_paths</code> has been renamed to <code>modules</code>.</div>
</li>
<li class="level2"><div class="li"> <code>autoload</code> has been renamed to <code>preload</code>.</div>
</li>
</ul>
</li>
<li class="level1"><div class="li"> Changes to config/session.php:</div>
<ul>
<li class="level2"><div class="li"> <code>name</code> should only contain alphanumeric characters with at least one letter.</div>
</li>
<li class="level2"><div class="li"> <code>gc_probability</code> has been added.</div>
</li>
</ul>
</li>
<li class="level1"><div class="li"> Changes to config/database.php:</div>
<ul>
<li class="level2"><div class="li"> <code>show_errors</code> has been removed.</div>
</li>
</ul>
</li>
</ul>

</div>

<h2><a name="helpers" id="helpers">Helpers</a></h2>
<div class="level2">
<ul>
<li class="level1"><div class="li"> Helpers must be renamed from <code>helper_name</code> to <code>helper_name_Core</code> if they need to be extended.</div>
</li>
<li class="level1"><div class="li"> The parameter to add <code>index.php</code> from the <acronym title="Uniform Resource Locator">URL</acronym> in html helpers now defaults to false, it needs to be specified as TRUE if you require it.</div>
</li>
</ul>

</div>

<h2><a name="validation" id="validation">Validation</a></h2>
<div class="level2">
<ul>
<li class="level1"><div class="li"> trim, md5, sha1 Validation rules must now be preceded by = (e.g. &#039;=trim&#039;).</div>
</li>
<li class="level1"><div class="li"> Validation rule &#039;regex&#039; must now specify the delimiter.</div>
</li>
</ul>

</div>

<h2><a name="database" id="database">Database</a></h2>
<div class="level2">
<ul>
<li class="level1"><div class="li"> <code>join($table, $cond, $type)</code> has changed to <code>join($table, $key, $value, $type)</code>.</div>
</li>
<li class="level1"><div class="li"> <code>$query→num_rows()</code> has been removed. Use <code>count(query)</code> instead.</div>
</li>
</ul>

</div>

<h2><a name="deprecated_stuff" id="deprecated_stuff">Deprecated stuff</a></h2>
<div class="level2">
<ul>
<li class="level1"><div class="li"> Use <code>http_build_query()</code> instead of <code>html::query_string()</code>.</div>
</li>
<li class="level1"><div class="li"> Use <code>$this→pagination→sql_offset</code> instead of <code>$this→pagination→sql_offset()</code>.</div>
</li>
<li class="level1"><div class="li"> Use <code>$this→pagination→sql_limit</code> instead of <code>$this→pagination→sql_limit()</code>.</div>
</li>
</ul>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer1ff9.gif?id=upgrading%3A2.1&amp;1324588235" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/upgrading/2.1 by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:15:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/general/filesystem by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    general:filesystem    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-02-04T08:43:54-0600" />
<meta name="keywords" content="general,filesystem" />
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
<li class="level1"><div class="li"><span class="li"><a href="#kohana_filesystem" class="toc">Kohana Filesystem</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#file_types" class="toc">File types</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#the_basics" class="toc">The Basics</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#cascading" class="toc">Cascading</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#modular" class="toc">Modular</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#exceptions" class="toc">Exceptions</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#configuration_and_i18n_files" class="toc">Configuration and i18n Files</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#built_in_directories" class="toc">Built in directories</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#cache" class="toc">cache</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#config" class="toc">config</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#controllers" class="toc">controllers</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#helpers" class="toc">helpers</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#hooks" class="toc">hooks</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#i18n" class="toc">i18n</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#libraries" class="toc">libraries</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#logs" class="toc">logs</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#models" class="toc">models</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#vendor" class="toc">vendor</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#views" class="toc">views</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">Very rough, needs expanding and rewriting to read better. Include paths especially</td>
	</tr>
</table>



<h1><a name="kohana_filesystem" id="kohana_filesystem">Kohana Filesystem</a></h1>
<div class="level1">

</div>

<h2><a name="file_types" id="file_types">File types</a></h2>
<div class="level2">

<p>
Strictly from Kohana&#039;s interpretation of MVC-Lh (MVC - Libraries helpers):

</p>
<ul>
<li class="level1"><div class="li"> Models are used to represent a specific piece of data, such as a database table, a row in a specific table, or an <acronym title="HyperText Markup Language">HTML</acronym> form.</div>
</li>
<li class="level2"><div class="li"> Views are used as data-to-<acronym title="HyperText Markup Language">HTML</acronym> rendering layers.</div>
</li>
<li class="level2"><div class="li"> Controllers are used as the “entry point”. They also direct and control the process flow of the application, and handle how a <acronym title="Uniform Resource Identifier">URI</acronym> is converted into an application function.</div>
</li>
<li class="level2"><div class="li"> Libraries are used as tools that operate on some form of pre-existing data, either in the form of an array (e.g., <a href="../libraries/session.php" class="wikilink1" title="libraries:session">Session</a>, <a href="../libraries/validation.php" class="wikilink1" title="libraries:validation">Validation</a>, <a href="../libraries/input.php" class="wikilink1" title="libraries:input">Input</a>) or some other data structure, such as <a href="../libraries/orm.php" class="wikilink1" title="libraries:orm">ORM</a> (database table) or <a href="../libraries/archive.php" class="wikilink2" title="libraries:archive" rel="nofollow">Archive</a> (filesystem).</div>
</li>
<li class="level2"><div class="li"> Helpers are used for simple, repetitive tasks, such as creating <acronym title="HyperText Markup Language">HTML</acronym> tags, making a <acronym title="Uniform Resource Identifier">URI</acronym> into a <acronym title="Uniform Resource Locator">URL</acronym>, or validating an email address.</div>
</li>
</ul>

<p>

In addition, Kohana adds the following supporting structure:

</p>
<ul>
<li class="level1"><div class="li"> Configuration files, simple static arrays that are accessed by convention (file.key)</div>
</li>
<li class="level2"><div class="li"> Language (i18n) files, access the same as config (file.key)</div>
</li>
<li class="level2"><div class="li"> Hooks, which can be used to “hook into” Kohana during very early processes</div>
</li>
</ul>

</div>

<h2><a name="the_basics" id="the_basics">The Basics</a></h2>
<div class="level2">

<p>

First of all you should get acquainted with the directory structure of a default Kohana installation.
Once you have unpacked it you will see this (note: the contents of your modules directory will vary according to the options you select on the download page):

</p>
<pre class="code">root
 +- application
 |    +- cache
 |    +- config
 |    +- controllers
 |    +- helpers
 |    +- hooks
 |    +- libraries
 |    +- logs
 |    +- models
 |    +- views
 |
 +- modules
 |    +- media
 |        +- config
 |        +- controllers
 |        +- helpers
 |        +- libraries 
 |    +- ..... 
 +- system
 |    +- config
 |    +- controllers
 |    +- core
 |    +- helpers
 |    +- i18n
 |    +- libraries
 |    +- models
 |    +- vendor
 |    +- views
 |
 +- index.php</pre>

<p>

You will notice that a lot of the directories in the <code>application</code> and <code>system</code> directories are exactly the same. This is because Kohana has a <strong>cascading</strong> filesystem. 
</p>

</div>

<h2><a name="cascading" id="cascading">Cascading</a></h2>
<div class="level2">

<p>

The Kohana filesystem is made up of a single directory structure that is mirrored in all directories along what we call the <em>include path</em>, which goes as follows:

</p>
<pre class="code">application &gt; modules &gt; system</pre>

<p>

Files that are in directories higher up the include path order take precedence over files of the same name lower down the order.
</p>

<p>
For example, if you have a <a href="views.php" class="wikilink1" title="general:views">view</a> file called <code>layout.php</code> in the <code>application/views</code> <strong>and</strong> <code>system/views</code> directories, the one in <code>application</code> will be returned when <code>layout.php</code> is searched for as it is highest in the include path order. If you then delete that file from <code>application/views</code>, the one in <code>system/views</code> will be returned when searched for.
</p>

<p>

<a href="../../upload.wikimedia.org/wikipedia/en/1/1c/Kohana-modules.php" class="media" title="http://upload.wikimedia.org/wikipedia/en/1/1c/Kohana-modules.png"  rel="nofollow"><img src="../../upload.wikimedia.org/wikipedia/en/thumb/1/1c/Kohana-modules.png/512px-Kohana-modules.php?w=&amp;h=&amp;cache=cache&amp;media=http%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fen%2Fthumb%2F1%2F1c%2FKohana-modules.png%2F512px-Kohana-modules.png" class="media" alt="" /></a>
</p>

</div>

<h2><a name="modular" id="modular">Modular</a></h2>
<div class="level2">

<p>

The Kohana filesystem is also modular. This means that custom directories can be inserted along the include path to be scanned when a file is searched for.
</p>

<p>
See <a href="modules.php" class="wikilink1" title="general:modules">Modules</a> on how to set these up.
</p>

<p>
The <code>application</code> and <code>system</code> directories can be thought of as hardcoded modules. They are treated no differently from regular modules apart from the exceptions listed below.
</p>

</div>

<h2><a name="exceptions" id="exceptions">Exceptions</a></h2>
<div class="level2">

<p>

There are 2 main exceptions in the filesystem:
</p>

<p>
<code>config.php</code> <strong>MUST</strong> reside in the <code>application/config</code> directory. It will not be read if it exists within a module or the <code>system</code> directory. The reason for this is that it contains the <code>modules</code> setting which must be read before all others so the framework knows where the rest of the config files are along the include path.
</p>

<p>
The core files as part of <code>system/core</code> are also not cascading. They are hardcoded into the Kohana startup procedures and will not be overridden by files higher up the include path.
</p>

</div>

<h2><a name="configuration_and_i18n_files" id="configuration_and_i18n_files">Configuration and i18n Files</a></h2>
<div class="level2">

<p>

These files are special as their content entries are merged when multiple files of the same name are found along the include path. Entries in files greater up the order still override those of which are in files lower down.
</p>

<p>
See <a href="configuration.php" class="wikilink1" title="general:configuration">Configuration</a> and <a href="i18n.php" class="wikilink1" title="general:i18n">Internationalization</a> for more information on this.
</p>

</div>

<h2><a name="built_in_directories" id="built_in_directories">Built in directories</a></h2>
<div class="level2">

</div>

<h3><a name="cache" id="cache">cache</a></h3>
<div class="level3">

<p>

By default, the <a href="../libraries/cache.php" class="wikilink1" title="libraries:cache">Cache library</a> uses this directory to store its caches when using the File driver. It should also be where you store any custom cached data from your application.
</p>

</div>

<h3><a name="config" id="config">config</a></h3>
<div class="level3">

<p>

All configuration files that are read by the <a href="../core/config.php" class="wikilink1" title="core:config">Config class</a> must be stored here.
</p>

</div>

<h3><a name="controllers" id="controllers">controllers</a></h3>
<div class="level3">

<p>

All <a href="controllers.php" class="wikilink1" title="general:controllers">controllers</a> to be directed to by the <a href="routing.php" class="wikilink1" title="general:routing">router</a> must go in here.
</p>

</div>

<h3><a name="helpers" id="helpers">helpers</a></h3>
<div class="level3">

<p>

See <a href="helpers.php" class="wikilink1" title="general:helpers">Helpers</a>.
</p>

</div>

<h3><a name="hooks" id="hooks">hooks</a></h3>
<div class="level3">

<p>

See <a href="hooks.php" class="wikilink1" title="general:hooks">Hooks</a>.
</p>

</div>

<h3><a name="i18n" id="i18n">i18n</a></h3>
<div class="level3">

<p>

Language files read by <a href="../core/kohana.php#kohanalang" class="wikilink1" title="core:kohana">Kohana::lang()</a> are stored here. They are split up into sub-directories using the country code and locale as the name. See <a href="i18n.php" class="wikilink1" title="general:i18n">Internationalization</a>.
</p>

</div>

<h3><a name="libraries" id="libraries">libraries</a></h3>
<div class="level3">

<p>

See <a href="libraries.php" class="wikilink1" title="general:libraries">Libraries</a>.
</p>

</div>

<h3><a name="logs" id="logs">logs</a></h3>
<div class="level3">

<p>

By default, log files generated by the <a href="../core/log.php" class="wikilink1" title="core:log">Log class</a> are stored in the <code>application/logs</code> directory.
</p>

</div>

<h3><a name="models" id="models">models</a></h3>
<div class="level3">

<p>

See <a href="models.php" class="wikilink1" title="general:models">Models</a>.
</p>

</div>

<h3><a name="vendor" id="vendor">vendor</a></h3>
<div class="level3">

<p>

3rd party libraries and scripts that are not integrated into Kohana should be stored here. See <a href="libraries.php" class="wikilink1" title="general:libraries">Libraries</a> for more information.
</p>

</div>

<h3><a name="views" id="views">views</a></h3>
<div class="level3">

<p>

See <a href="views.php" class="wikilink1" title="general:views">Views</a>.
</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer9d7b.gif?id=general%3Afilesystem&amp;1324588189" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/general/filesystem by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


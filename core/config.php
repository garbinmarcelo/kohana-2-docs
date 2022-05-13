<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/core/config by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    core:config    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-12-17T10:45:53-0600" />
<meta name="keywords" content="core,config" />
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
<li class="level1"><div class="li"><span class="li"><a href="#config_class" class="toc">Config Class</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#where_to_put_the_configuration" class="toc">Where to put the configuration?</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#retrieving_configuration_items" class="toc">Retrieving configuration items</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#setting_a_configuration_item" class="toc">Setting a configuration item</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#getting_the_include_paths" class="toc">Getting the include paths</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#load_a_configuration_file" class="toc">Load a configuration file</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">elaborate on load(), include_paths()</td>
	</tr>
</table>



<h1><a name="config_class" id="config_class">Config Class</a></h1>
<div class="level1">


<div class='box left red' style='width: 100%;'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<p class='box_title'>Note:</p>
<div class='box_content'><p>
<strong>This class is deprecated in version 2.2 or later. This methods are now in <a href="kohana.php" class="wikilink1" title="core:kohana">Kohana</a> class.</strong>
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


<p>
Provides methods for working with configuration items.
</p>

</div>

<h2><a name="where_to_put_the_configuration" id="where_to_put_the_configuration">Where to put the configuration?</a></h2>
<div class="level2">

<p>

Configuration files must be placed in a folder named config, this folder can reside in system, application or a module. Application is more important than system and will override it. Modules override system files but are overridden by application files.
</p>

<p>
The config file must be in this format:

</p>
<pre class="code php"><span class="re1">$config</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
	<span class="st0">'language'</span> <span class="sy0">=&gt;</span> <span class="st0">'en_US'</span><span class="sy0">,</span>
	<span class="st0">'timezone'</span> <span class="sy0">=&gt;</span> <span class="st0">''</span>
<span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="retrieving_configuration_items" id="retrieving_configuration_items">Retrieving configuration items</a></h3>
<div class="level3">

<p>
<code>Config::item($key, $slash = FALSE, $required = TRUE)</code> retrieves a configuration item, can return a string, array or boolean. $slash will force a forward slash at the end of the item. $required determines whether an item is required or not.
</p>
<pre class="code php">Config<span class="sy0">::</span><span class="me2">item</span><span class="br0">&#40;</span><span class="st0">'locale.language'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns the language from the **locale.php** file and returns the config['language'] item.</span></pre>
</div>

<h3><a name="setting_a_configuration_item" id="setting_a_configuration_item">Setting a configuration item</a></h3>
<div class="level3">

<p>

<strong>For setting configuration items in realtime you must enable this setting in the config.php file. (core.allow_config_set)</strong>
</p>

<p>
<code>Config::set($key, $value)</code> sets a configuration item, returns TRUE on success or FALSE when it didn&#039;t succeed.
</p>
<pre class="code php">Config<span class="sy0">::</span><span class="me2">set</span><span class="br0">&#40;</span><span class="st0">'locale.language'</span><span class="sy0">,</span><span class="st0">'nl_NL'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>

<div class='box left red' style='width: 50%;'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<p class='box_title'>Note:</p>
<div class='box_content'><p>
<strong>If you want to set a configuration in realtime make sure the config.allow_config_set is set to TRUE in application/config.php</strong>
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


</div>

<h3><a name="getting_the_include_paths" id="getting_the_include_paths">Getting the include paths</a></h3>
<div class="level3">

<p>

<code>Config::include_paths($process= FALSE)</code> gets the include paths and returns an array. First in the array is the application path, last will be the system path, other items will be include paths set in the configuration item &#039;core.include_paths&#039;. <code>$process</code>, if true, will reprocess the include_paths.
</p>
<pre class="code php">Config<span class="sy0">::</span><span class="me2">include_paths</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="load_a_configuration_file" id="load_a_configuration_file">Load a configuration file</a></h3>
<div class="level3">

<p>

<code>Config::load($name, $required = TRUE)</code> loads a configuration file. Config::item() loads them as well if they&#039;re not already loaded and retrieves the items straightaway.
</p>
<pre class="code php">Config<span class="sy0">::</span><span class="me2">load</span><span class="br0">&#40;</span><span class="st0">'locale'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer7a66.gif?id=core%3Aconfig&amp;1324588194" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/core/config by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


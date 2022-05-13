<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/general/modules by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    general:modules    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-01-18T16:35:57-0600" />
<meta name="keywords" content="general,modules" />
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
<li class="level1"><div class="li"><span class="li"><a href="#modules" class="toc">Modules</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#setting_up" class="toc">Setting up</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#configuring" class="toc">Configuring</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Expand, Proof read</td>
	</tr>
</table>



<h1><a name="modules" id="modules">Modules</a></h1>
<div class="level1">

<p>

Kohana is easily extendable using modules. Modules are reusable collections of related files that together add a particular functionality to an application. You may want to re-use some helpers or add authentication across multiple applications. Place it in a module folder and you can copy it with ease or have multiple applications use the same module directory.
</p>


<div class='box'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<div class='box_content'><p>
The <a href="filesystem.php" class="wikilink1" title="general:filesystem">Filesystem</a> page should be read before this one to understand it properly.
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


</div>

<h2><a name="setting_up" id="setting_up">Setting up</a></h2>
<div class="level2">

<p>

It is most common to have a directory called <code>modules</code> in the same directory as the <code>application</code> and <code>system</code> directories. For instance, we created a module for <acronym title="Access Control List">ACL</acronym> (access control lists) and authentication (auth) since we want to reuse it across applications.

</p>
<pre class="code">root
 +- application
 +- system
 +- modules
 |    +- acl
 |    |   +- helpers
 |    |   +- i18n
 |    |   +- libraries
 |    |   +- models
 |    |   +- vendor
 |    |   +- views
 |    |
 |    +- auth
 |        +- helpers
 |        +- i18n
 |        +- libraries
 |        +- models
 |        +- vendor
 |        +- views
 |
 +- index.php</pre>

</div>

<h2><a name="configuring" id="configuring">Configuring</a></h2>
<div class="level2">

<p>

Only placing modules in the <code>modules</code> directory won&#039;t load them, they must be configured for Kohana to use them. This can be done in the <code>application/config/config.php file</code> using the &#039;modules&#039; setting.
</p>

<p>
<strong>Example</strong>

</p>
<pre class="code php"><span class="co1">// Paths are relative to the docroot, but absolute paths are also possible</span>
<span class="co1">// Use the MODPATH constant (?)</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'modules'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
    MODPATH<span class="sy0">.</span><span class="st0">'acl'</span><span class="sy0">,</span>
    MODPATH<span class="sy0">.</span><span class="st0">'auth'</span><span class="sy0">,</span>
<span class="br0">&#41;</span></pre>
<p>
In the cascading <a href="filesystem.php" class="wikilink1" title="general:filesystem">filesystem</a>, files in modules that are higher up the list take precedence over those lower down just as files in the <code>application</code> directory do over those in modules and the <code>system</code> directory.

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer87bb.gif?id=general%3Amodules&amp;1324588193" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/general/modules by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


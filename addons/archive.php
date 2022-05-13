<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/addons/archive by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    addons:archive    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-05-29T07:53:01-0500" />
<meta name="keywords" content="addons,archive" />
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
<li class="level1"><div class="li"><span class="li"><a href="#archive_module" class="toc">Archive Module</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#overview" class="toc">Overview</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#loading_the_archive_module" class="toc">Loading the archive module</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#adding_a_filedirectory_to_the_archive" class="toc">Adding a file/directory to the archive</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#save" class="toc">save()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#download" class="toc">download()</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">Needs updating from library to module</td>
	</tr>
</table>



<h1><a name="archive_module" id="archive_module">Archive Module</a></h1>
<div class="level1">

</div>

<h2><a name="overview" id="overview">Overview</a></h2>
<div class="level2">

<p>

The Archive Module is a convenient way of constructing Archives (Zip Files, Tar Files, etc) dynamically.  It can persist them to the file system, or it can send the binary file directly to the user without saving to the hard drive.
</p>

<p>
Currently it supports Zip, GZip, BZip and Tar Archives.
</p>

</div>

<h2><a name="loading_the_archive_module" id="loading_the_archive_module">Loading the archive module</a></h2>
<div class="level2">

<p>
This can be done in the application/config/config.php file using the &#039;modules&#039; setting. 
</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'modules'</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
    MODPATH<span class="sy0">.</span><span class="st0">'auth'</span><span class="sy0">,</span>
    MODPATH<span class="sy0">.</span><span class="st0">'archive'</span>
<span class="br0">&#41;</span></pre>
<p>
Then you just have to instantiate the module to use it. For example:
</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">archive</span> <span class="sy0">=</span> <span class="kw2">new</span> Archive<span class="sy0">;</span></pre>
<p>
4 drivers are currently available: Zip, GZip, BZip and Tar. The default one is Zip but to load another one just pass it to the constructor:

</p>
<ul>
<li class="level1"><div class="li"> <code>zip</code> - default</div>
</li>
<li class="level1"><div class="li"> <code>gzip</code></div>
</li>
<li class="level1"><div class="li"> <code>bzip</code></div>
</li>
<li class="level1"><div class="li"> <code>tar</code></div>
</li>
</ul>
<pre class="code php"><span class="co1">// Load GZip driver</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">archive</span> <span class="sy0">=</span> <span class="kw2">new</span> Archive<span class="br0">&#40;</span><span class="st0">'gzip'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="adding_a_filedirectory_to_the_archive" id="adding_a_filedirectory_to_the_archive">Adding a file/directory to the archive</a></h3>
<div class="level3">

<p>

<code>add($path, $name = NULL, $recursive = NULL)</code> adds files and directories to your archive. It accepts the following parameter:

</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$path</code> the path to the file or directory to add. Relative paths must be relative to the root website dir. </div>
</li>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$name</code> name to use for the given file or directory</div>
</li>
<li class="level1"><div class="li"> <strong>[bool]</strong> <code>$recursive</code> add files recursively, used with directories - default FALSE</div>
</li>
</ul>

<p>

This will result in file.txt being added to the archive:
</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">archive</span><span class="sy0">-&gt;</span><span class="me1">add</span><span class="br0">&#40;</span><span class="st0">&quot;files/uploads/file.txt&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="save" id="save">save()</a></h3>
<div class="level3">

<p>

<code>save($filename)</code> saves the archive you&#039;ve been creating to the disk. 

</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$filename</code> path to save the archive file. Relative paths must be relative to the root website dir.</div>
</li>
</ul>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">archive</span><span class="sy0">-&gt;</span><span class="me1">save</span><span class="br0">&#40;</span><span class="st0">&quot;myarchive.zip&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="download" id="download">download()</a></h3>
<div class="level3">

<p>

<code>download($filename)</code> offers the archive as a download to the user. 

</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$filename</code> name to be given to the archive file</div>
</li>
</ul>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">archive</span><span class="sy0">-&gt;</span><span class="me1">download</span><span class="br0">&#40;</span><span class="st0">&quot;myarchive.zip&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->
<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer28ee.gif?id=addons%3Aarchive&amp;1324588196" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/addons/archive by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


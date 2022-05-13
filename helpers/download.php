<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/helpers/download by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    helpers:download    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-02-26T15:26:08-0600" />
<meta name="keywords" content="helpers,download" />
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
<li class="level1"><div class="li"><span class="li"><a href="#download_helper" class="toc">Download Helper</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#force" class="toc">force()</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">Proof read</td>
	</tr>
</table>



<h1><a name="download_helper" id="download_helper">Download Helper</a></h1>
<div class="level1">

<p>
The download helper assists in forcing downloading of files by presenting users with the “save as” dialog. 
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="force" id="force">force()</a></h3>
<div class="level3">

<p>
&#039;force&#039; forces a download of a file to the user&#039;s browser. This function is binary-safe and will work with any <acronym title="Multipurpose Internet Mail Extension">MIME</acronym> type that Kohana is aware of.
</p>
<ul>
<li class="level1"><div class="li"> $filename - [string] filename of the file to be downloaded – default = ””</div>
</li>
<li class="level1"><div class="li"> $data - [string] data to be sent if the filename does not exist – default = ””</div>
</li>
<li class="level1"><div class="li"> $nicename - [string] suggested filename to display in the download – default = ””</div>
</li>
</ul>

<p>
<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// File path is relative to the front controller</span>
download<span class="sy0">::</span><span class="me2">force</span><span class="br0">&#40;</span><span class="st0">&quot;file.txt&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// For a file located in application/downloads</span>
&nbsp;
<span class="co1">// Use relative path</span>
download<span class="sy0">::</span><span class="me2">force</span><span class="br0">&#40;</span><span class="st0">'./application/downloads/file.txt'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// OR use the defined application path</span>
download<span class="sy0">::</span><span class="me2">force</span><span class="br0">&#40;</span>APPPATH<span class="sy0">.</span><span class="st0">'downloads/file.txt'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Example usage in a controller</span>
<span class="kw2">public</span> <span class="kw2">function</span> download<span class="br0">&#40;</span><span class="re1">$file</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <span class="co1">// Keep extra page output from being added to your file</span>
    <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">auto_render</span> <span class="sy0">=</span> <span class="kw2">false</span><span class="sy0">;</span>
    <span class="co1">// Don't forget to 'return' the result otherwise nothing happens</span>
    <span class="kw1">return</span> download<span class="sy0">::</span><span class="me2">force</span><span class="br0">&#40;</span><span class="re1">$file</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="co1">// Suggesting a file name - browser will prompt to save the file as 'latest-results.xml'</span>
download<span class="sy0">::</span><span class="me2">force</span><span class="br0">&#40;</span><span class="re1">$file</span><span class="sy0">,</span> <span class="kw2">NULL</span><span class="sy0">,</span> <span class="st0">'latest-results.xml'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer25cf.gif?id=helpers%3Adownload&amp;1324588203" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/helpers/download by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


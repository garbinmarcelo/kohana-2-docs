<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/helpers/file by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    helpers:file    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-08-11T14:14:09-0500" />
<meta name="keywords" content="helpers,file" />
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
<li class="level1"><div class="li"><span class="li"><a href="#file_helper" class="toc">File Helper</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#mime" class="toc">mime()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#split" class="toc">split()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#join" class="toc">join()</a></span></div></li></ul>
</li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Final Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Proofread</td>
	</tr>
</table>



<h1><a name="file_helper" id="file_helper">File Helper</a></h1>
<div class="level1">

<p>

A helper designed to manipulate files and filenames.
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="mime" id="mime">mime()</a></h3>
<div class="level3">

<p>
&#039;mime&#039; finds the <acronym title="Multipurpose Internet Mail Extension">MIME</acronym>-type of a file first by using <acronym title="Hypertext Preprocessor">PHP</acronym>&#039;s built-in database and then Kohana&#039;s <acronym title="Multipurpose Internet Mail Extension">MIME</acronym> configuration file (system/config/mimes.php).
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> param: [string] filename to check <acronym title="Multipurpose Internet Mail Extension">MIME</acronym>-type of</div>
</li>
<li class="level1"><div class="li"> return: [mixed] string if found, FALSE if not found</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="re1">$file</span> <span class="sy0">=</span> <span class="st0">'my_movie.ogg'</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$file</span><span class="sy0">.</span><span class="st0">' ('</span><span class="sy0">.</span><a href="http://www.php.net/file"><span class="kw3">file</span></a><span class="sy0">::</span><span class="me2">mime</span><span class="br0">&#40;</span><span class="re1">$file</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="st0">')'</span><span class="sy0">;</span></pre><pre class="code html4strict">my_movie.ogg (application/ogg)</pre>
</div>

<h3><a name="split" id="split">split()</a></h3>
<div class="level3">

<p>
&#039;split&#039; splits a file into pieces matching a specific size indicated in megabytes.
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> param: [string] file to be split</div>
</li>
<li class="level1"><div class="li"> param: [string] directory to output to, defaults to the same directory as the file</div>
</li>
<li class="level1"><div class="li"> param: [integer] size, in <acronym title="Megabyte">MB</acronym>, for each chunk to be</div>
</li>
<li class="level1"><div class="li"> return: [integer] The number of pieces that were created.</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="re1">$file</span> <span class="sy0">=</span> <span class="st0">'humpty_dumpty.mp3'</span><span class="sy0">;</span> <span class="co1">// pretend it is 7.8 MB large</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="br0">&#40;</span><a href="http://www.php.net/file_exists"><span class="kw3">file_exists</span></a><span class="br0">&#40;</span><span class="re1">$file</span><span class="br0">&#41;</span><span class="br0">&#41;</span> ? <a href="http://www.php.net/file"><span class="kw3">file</span></a><span class="sy0">::</span><a href="http://www.php.net/split"><span class="kw3">split</span></a><span class="br0">&#40;</span><span class="re1">$file</span><span class="sy0">,</span><span class="kw2">FALSE</span><span class="sy0">,</span><span class="nu0">2</span><span class="br0">&#41;</span> <span class="sy0">:</span> <span class="st0">'can not find file!'</span> <span class="sy0">;</span></pre><pre class="code html4strict">4</pre>
<p>

Directory listing:

</p>
<pre class="code">
-rwxrwxrwx 1 www-data www-data 8186302 2008-05-06 20:11 humpty_dumpty.mp3
-rw-r--r-- 1 www-data www-data 2097152 2008-05-06 20:15 humpty_dumpty.mp3.001
-rw-r--r-- 1 www-data www-data 2097152 2008-05-06 20:15 humpty_dumpty.mp3.002
-rw-r--r-- 1 www-data www-data 2097152 2008-05-06 20:15 humpty_dumpty.mp3.003
-rw-r--r-- 1 www-data www-data 1894846 2008-05-06 20:15 humpty_dumpty.mp3.004</pre>
</div>

<h3><a name="join" id="join">join()</a></h3>
<div class="level3">

<p>
&#039;join&#039; joins splited files (possibly by file::split()), assuming a .### extension.
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> param: [string] split filename, without .000 extension</div>
</li>
<li class="level1"><div class="li"> param: [string] output filename, if different then an the filename</div>
</li>
<li class="level1"><div class="li"> return: [integer] The number of pieces that were joined.</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="re1">$file_in</span> <span class="sy0">=</span> <span class="st0">'humpty_dumpty.mp3'</span><span class="sy0">;</span> <span class="co1">// from our last example</span>
<span class="re1">$file_out</span> <span class="sy0">=</span> <span class="st0">'humpty_dumpty-back_together_again.mp3'</span><span class="sy0">;</span> <span class="co1">// output name</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <a href="http://www.php.net/file"><span class="kw3">file</span></a><span class="sy0">::</span><a href="http://www.php.net/join"><span class="kw3">join</span></a><span class="br0">&#40;</span><span class="re1">$file_in</span><span class="sy0">,</span><span class="re1">$file_out</span><span class="br0">&#41;</span><span class="sy0">;</span></pre><pre class="code html4strict">4</pre>
<p>

Directory listing:

</p>
<pre class="code">
-rwxrwxrwx 1 www-data www-data 8186302 2008-05-06 20:11 humpty_dumpty.mp3
-rw-r--r-- 1 www-data www-data 2097152 2008-05-06 20:15 humpty_dumpty.mp3.001
-rw-r--r-- 1 www-data www-data 2097152 2008-05-06 20:15 humpty_dumpty.mp3.002
-rw-r--r-- 1 www-data www-data 2097152 2008-05-06 20:15 humpty_dumpty.mp3.003
-rw-r--r-- 1 www-data www-data 1894846 2008-05-06 20:15 humpty_dumpty.mp3.004
-rw-r--r-- 1 www-data www-data 8186302 2008-05-06 20:17 humpty_dumpty-back_together_again.mp3</pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer8646.gif?id=helpers%3Afile&amp;1324588205" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/helpers/file by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


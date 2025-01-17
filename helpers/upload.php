<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/helpers/upload by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    helpers:upload    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-06-22T20:09:11-0500" />
<meta name="keywords" content="helpers,upload" />
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
<li class="level1"><div class="li"><span class="li"><a href="#upload_helper" class="toc">Upload Helper</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#configuration" class="toc">Configuration</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#complete_example" class="toc">Complete example</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#save" class="toc">save()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#valid" class="toc">valid()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#required" class="toc">required()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#type" class="toc">type()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#size" class="toc">size()</a></span></div></li></ul>
</li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">stub</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Write me</td>
	</tr>
</table>



<h1><a name="upload_helper" id="upload_helper">Upload Helper</a></h1>
<div class="level1">

<p>

The upload helper is designed to work with the global $_FILES array and validation library.  <a href="http://us.php.net/manual/en/features.file-upload.php" class="urlextern" title="http://us.php.net/manual/en/features.file-upload.php"  rel="nofollow">More information about PHP file uploads</a>.
</p>

</div>

<h2><a name="configuration" id="configuration">Configuration</a></h2>
<div class="level2">

<p>

Configuration is done in the <code>application/config/upload.php</code> file, if it&#039;s not there take the one from <code>system/config</code> and copy it to the application folder (see <a href="../general/filesystem.php#cascading" class="urlextern" title="http://docs.kohanaphp.com/general/filesystem#cascading"  rel="nofollow">cascading filesystem</a>):
</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'directory'</span><span class="br0">&#93;</span> <span class="sy0">=</span> DOCROOT<span class="sy0">.</span><span class="st0">'upload'</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'create_directories'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="kw2">FALSE</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'remove_spaces'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="kw2">TRUE</span><span class="sy0">;</span></pre>
</div>

<h4><a name="upload_directory" id="upload_directory">Upload directory</a></h4>
<div class="level4">

<p>

<code>$config[&#039;directory&#039;]</code> sets the path to the saved files. This path is relative to your index file. Absolute paths are also supported.
</p>

</div>

<h4><a name="directory_creation" id="directory_creation">Directory creation</a></h4>
<div class="level4">

<p>

<code>$config[&#039;create_directories&#039;]</code> enable or disable directory creation.
</p>

</div>

<h4><a name="remove_spaces" id="remove_spaces">Remove spaces</a></h4>
<div class="level4">

<p>

<code>$config[&#039;remove_spaces&#039;]</code> removes spaces from uploaded filenames.

</p>

</div>

<h2><a name="complete_example" id="complete_example">Complete example</a></h2>
<div class="level2">

<p>

The example below demonstrates how to validate a file upload (where the field name is `picture`), save it temporarily and apply some image manipulation. 

</p>
<pre class="code php"><span class="re1">$files</span> <span class="sy0">=</span> Validation<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="re1">$_FILES</span><span class="br0">&#41;</span>
	<span class="sy0">-&gt;</span><span class="me1">add_rules</span><span class="br0">&#40;</span><span class="st0">'picture'</span><span class="sy0">,</span> <span class="st0">'upload::valid'</span><span class="sy0">,</span> <span class="st0">'upload::required'</span><span class="sy0">,</span> <span class="st0">'upload::type[gif,jpg,png]'</span><span class="sy0">,</span> <span class="st0">'upload::size[1M]'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$files</span><span class="sy0">-&gt;</span><span class="me1">validate</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
	<span class="co1">// Temporary file name</span>
	<span class="re1">$filename</span> <span class="sy0">=</span> upload<span class="sy0">::</span><span class="me2">save</span><span class="br0">&#40;</span><span class="st0">'picture'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
	<span class="co1">// Resize, sharpen, and save the image</span>
	Image<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="re1">$filename</span><span class="br0">&#41;</span>
		<span class="sy0">-&gt;</span><span class="me1">resize</span><span class="br0">&#40;</span><span class="nu0">100</span><span class="sy0">,</span> <span class="nu0">100</span><span class="sy0">,</span> Image<span class="sy0">::</span><span class="me2">WIDTH</span><span class="br0">&#41;</span>
		<span class="sy0">-&gt;</span><span class="me1">save</span><span class="br0">&#40;</span>DOCROOT<span class="sy0">.</span><span class="st0">'media/pictures/'</span><span class="sy0">.</span><a href="http://www.php.net/basename"><span class="kw3">basename</span></a><span class="br0">&#40;</span><span class="re1">$filename</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
	<span class="co1">// Remove the temporary file</span>
	<a href="http://www.php.net/unlink"><span class="kw3">unlink</span></a><span class="br0">&#40;</span><span class="re1">$filename</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
The example below demonstrates how to upload several images

</p>
<pre class="code php">   <span class="kw1">foreach</span><span class="br0">&#40;</span> arr<span class="sy0">::</span><span class="me2">rotate</span><span class="br0">&#40;</span><span class="re1">$_FILES</span><span class="br0">&#91;</span><span class="st0">'image'</span><span class="br0">&#93;</span><span class="br0">&#41;</span> <span class="kw1">as</span> <span class="re1">$file</span> <span class="br0">&#41;</span>
   <span class="br0">&#123;</span>
	<span class="re1">$filename</span> <span class="sy0">=</span> upload<span class="sy0">::</span><span class="me2">save</span><span class="br0">&#40;</span><span class="re1">$file</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
	Image<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="re1">$filename</span><span class="br0">&#41;</span>
		<span class="sy0">-&gt;</span><span class="me1">resize</span><span class="br0">&#40;</span><span class="nu0">30</span><span class="sy0">,</span> <span class="nu0">30</span><span class="sy0">,</span> Image<span class="sy0">::</span><span class="me2">AUTO</span><span class="br0">&#41;</span>
		<span class="sy0">-&gt;</span><span class="me1">save</span><span class="br0">&#40;</span>DOCROOT<span class="sy0">.</span><span class="st0">'upload/'</span><span class="sy0">.</span><a href="http://www.php.net/basename"><span class="kw3">basename</span></a><span class="br0">&#40;</span><span class="re1">$filename</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <a href="http://www.php.net/unlink"><span class="kw3">unlink</span></a><span class="br0">&#40;</span><span class="re1">$filename</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span></pre>
</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="save" id="save">save()</a></h3>
<div class="level3">

<p>

<code>save($file, $filename = NULL, $directory = NULL, $chmod = 0644)</code> saves an uploaded file to a new location. It takes:

</p>
<ul>
<li class="level1"><div class="li"> <strong>[mixed]</strong> <code>$file</code> name of $_FILE input or array of upload data</div>
</li>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$filename</code> new filename, if omitted use the default filename, with a timestamp pre-pended</div>
</li>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$directory </code> new directory, if omitted uses the pre-configured upload directory</div>
</li>
<li class="level1"><div class="li"> <strong>[integer]</strong> <code>$chmod </code> chmod mask, default 0644</div>
</li>
<li class="level1"><div class="li"> returns <strong>[string]</strong> full path to the new file</div>
</li>
</ul>

</div>

<h3><a name="valid" id="valid">valid()</a></h3>
<div class="level3">

<p>

<code>valid($file)</code> tests if input data is valid file type, even if no upload is present.

</p>
<ul>
<li class="level1"><div class="li"> <strong>[array]</strong> <code>$file</code> $_FILES items</div>
</li>
<li class="level1"><div class="li"> returns <strong>[bool]</strong> TRUE if data is valid, FALSE otherwise</div>
</li>
</ul>

</div>

<h3><a name="required" id="required">required()</a></h3>
<div class="level3">

<p>

<code>required(array $file)</code> tests if input data has valid upload data.

</p>
<ul>
<li class="level1"><div class="li"> <strong>[array]</strong> <code>$file</code> $_FILES items</div>
</li>
<li class="level1"><div class="li"> returns <strong>[bool]</strong> TRUE if input data has valid upload data, FALSE otherwise</div>
</li>
</ul>

</div>

<h3><a name="type" id="type">type()</a></h3>
<div class="level3">

<p>

<code>type(array $file, array $allowed_types)</code> tests if an uploaded file is allowed by extension.

</p>
<ul>
<li class="level1"><div class="li"> <strong>[array]</strong> <code>$file</code> $_FILES items</div>
</li>
<li class="level1"><div class="li"> <strong>[array]</strong> <code>$allowed_types</code> allowed file extensions</div>
</li>
<li class="level1"><div class="li"> returns <strong>[bool]</strong> TRUE if the uploaded file has an allowed extension, FALSE otherwise</div>
</li>
</ul>

</div>

<h3><a name="size" id="size">size()</a></h3>
<div class="level3">

<p>

<code>size(array $file, array $size)</code> tests if an uploaded file is allowed by file size. File sizes are defined as: SB, where S is the size (1, 15, 300, etc) and B is the byte modifier: (B)ytes, (K)ilobytes, (M)egabytes, (G)igabytes. <em class="u">Eg</em>: to limit the size to 1MB or less, you would use “1M”.

</p>
<ul>
<li class="level1"><div class="li"> <strong>[array]</strong> <code>$file</code> $_FILES items</div>
</li>
<li class="level1"><div class="li"> <strong>[array]</strong> <code>$size</code> maximum file size</div>
</li>
<li class="level1"><div class="li"> returns <strong>[bool]</strong> TRUE if the uploaded file size is lesser that maximum allowed, FALSE otherwise</div>
</li>
</ul>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer5e2c.gif?id=helpers%3Aupload&amp;1324588207" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/helpers/upload by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


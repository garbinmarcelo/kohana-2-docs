<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/userguide by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    userguide    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-05-28T23:12:47-0500" />
<meta name="keywords" content="userguide" />
<link rel="stylesheet" media="all" type="text/css" href="lib/exe/cssbd55.css?s=all&amp;t=kohana" />
<link rel="stylesheet" media="screen" type="text/css" href="lib/exe/css56d3.css?t=kohana" />
<link rel="stylesheet" media="print" type="text/css" href="lib/exe/css97ef.css?s=print&amp;t=kohana" />
<script type="text/javascript" charset="utf-8" src="lib/exe/jsb5bc.php?edit=0&amp;write=0" ></script>
<link rel="shortcut icon" href="lib/tpl/kohana/images/favicon.ico" />
</head>
<body>
<!-- Start Header -->
<div id="header">

<!-- Start Logo -->
<a id="logo" href="/<?php echo explode('/', $_SERVER['REQUEST_URI'])[1]; ?>">
    <img src="./lib/images/kohana-logo.png" alt="Kohana" />
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
<li class="level1"><div class="li"><span class="li"><a href="#guidelines" class="toc">Guidelines</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#page_status" class="toc">Page Status</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#versions" class="toc">Versions</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#plugins" class="toc">Plugins</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#boxes" class="toc">Boxes</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#code2" class="toc">Code2</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#styling_conventions" class="toc">Styling Conventions</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#code_examples" class="toc">Code examples</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#files_and_directories" class="toc">Files and Directories</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#variable_names" class="toc">Variable names</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#exampleretrieve_a_session_item" class="toc">Example:  Retrieve a session item</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#page_layout" class="toc">Page layout</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">Pretty much everything</td>
	</tr>
</table>



<h1><a name="guidelines" id="guidelines">Guidelines</a></h1>
<div class="level1">

<p>

Anyone is free to create an account and start editing this user guide. These are the guidelines you should follow to keep it consistent and tidy. If you have ideas for these guidelines then please start a <a href="userguide/discussion.php" class="wikilink1" title="userguide:discussion">discussion</a>. Documentation is always for the latest release, currently 2.3 
</p>

</div>

<h2><a name="page_status" id="page_status">Page Status</a></h2>
<div class="level2">

<p>

At the top of most pages you will find a status box. This should be kept up to date while you are editing the pages.

</p>
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Complete this_function(), add example to that_function()</td>
	</tr>
</table>

<p>

There are 5 different values status can be:
</p>
<ul>
<li class="level1"><div class="li"> <strong>Stub:</strong> The page has been created and there is no real information yet, maybe a few headers.</div>
</li>
<li class="level1"><div class="li"> <strong>Draft:</strong> This should be used when the page is “in progress” and not feature or style complete.</div>
</li>
<li class="level1"><div class="li"> <strong>Proof:</strong> When the page is considered complete and needs to be proof read for factualness and spelling/grammar mistakes.</div>
</li>
<li class="level1"><div class="li"> <strong>Final:</strong> After it has been proof read and all information is complete and correct. The page may be edited after this to be expanded or reworded, but the status must be changed back to Draft or Proof.</div>
</li>
<li class="level1"><div class="li"> <strong>Out of date:</strong> When there is a major code change for the subject of the page making the documentation invalid. The Todo line should also be filled in with what has changed.</div>
</li>
</ul>

<p>

There is also an optional Todo line. Any information you think will be helpful to other documenters should be added here, such as functions to be completed or sections that are out of date. Once something is completed it should be removed.
</p>

</div>

<h2><a name="versions" id="versions">Versions</a></h2>
<div class="level2">

<p>

The user guide should always be written for the release version of the framework. If there are changes made in the SVN version then these should be highlighted in the user guide using a box, e.g.
</p>
<div class="code"><p class="codehead"><a name="code">Code:</a></p><pre class="code">
&#60;box red&#62;
This method only exists in version x.x
&#60;/box&#62;</pre></div>
<p>
Gives:
</p>


<div class='box red'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<div class='box_content'><p>
This method only exists in version x.x
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


</div>

<h2><a name="plugins" id="plugins">Plugins</a></h2>
<div class="level2">

<p>

There are a few extra plugins installed in this wiki for use in the user guide.

</p>
<ul>
<li class="level1"><div class="li"> <a href="http://wiki.splitbrain.org/plugin%3Aboxes" class="interwiki iw_doku" title="http://wiki.splitbrain.org/plugin%3Aboxes">Boxes</a></div>
</li>
<li class="level1"><div class="li"> <a href="http://wiki.splitbrain.org/plugin%3Acode2" class="interwiki iw_doku" title="http://wiki.splitbrain.org/plugin%3Acode2">Code2</a></div>
</li>
</ul>

</div>

<h3><a name="boxes" id="boxes">Boxes</a></h3>
<div class="level3">

<p>

These should be used to note something important. The default blue colour should be used for normal notes and red should be used when it&#039;s critical. Rounded corners should not be used.
</p>

</div>

<h3><a name="code2" id="code2">Code2</a></h3>
<div class="level3">

</div>

<h2><a name="styling_conventions" id="styling_conventions">Styling Conventions</a></h2>
<div class="level2">

</div>

<h3><a name="code_examples" id="code_examples">Code examples</a></h3>
<div class="level3">

<p>

All code examples should follow the Kohana coding standards found at <a href="http://dev.kohanaphp.com/wiki/kohana2/CodingStyle" class="urlextern" title="http://dev.kohanaphp.com/wiki/kohana2/CodingStyle"  rel="nofollow">http://dev.kohanaphp.com/wiki/kohana2/CodingStyle</a>
</p>

</div>

<h3><a name="files_and_directories" id="files_and_directories">Files and Directories</a></h3>
<div class="level3">

<p>

Files and directory paths should be styled as follows:
<code>application/config/config.php</code>
Note: there is no leading slash.
</p>

</div>

<h3><a name="variable_names" id="variable_names">Variable names</a></h3>
<div class="level3">

<p>

Variable names, files, class and method names used in the text should be styled as follows:
</p>

<p>
<code>$variable</code> is used by <code>Kohana::log</code> when writing to <code>application/logs/log.php</code> 
</p>

</div>

<h3><a name="methods" id="methods">Methods</a></h3>
<div class="level3">

<p>

The following style / layout should be used to document Methods:
</p>

<p>
Specify only the method name in descriptions. Code examples must provide the full notation, <code>Class→method</code> or <code>Class::method</code>
</p>

<p>
<code>method($arg1, $arg2 = NULL, $arg3 = &#039;default_value&#039;)</code> returns the number of items in <code>XYZ</code> given <code>arg1</code>
</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$arg1</code> The name of the field for <code>XYZ</code></div>
</li>
<li class="level1"><div class="li"> <strong>[mixed]</strong> <code>$arg2</code> An optional array of attributes.</div>
</li>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$arg3</code> The value of <code>ABC</code>, default is description of default</div>
</li>
<li class="level1"><div class="li"> returns <strong>[integer]</strong> A count of items in <code>XYZ</code></div>
</li>
</ul>

<p>

Code Example:

</p>
<pre class="code php"><span class="co1">// Preferred notation using $this-&gt;</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">class</span><span class="sy0">-&gt;</span><span class="me1">method</span><span class="br0">&#40;</span><span class="re1">$arg1</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// OR, if the class can be accessed via an instance</span>
<span class="kw2">Class</span><span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">method</span><span class="br0">&#40;</span><span class="re1">$arg1</span><span class="br0">&#41;</span>
<span class="co1">// OR, for static methods and helpers</span>
Kohana<span class="sy0">::</span><a href="http://www.php.net/log"><span class="kw3">log</span></a><span class="br0">&#40;</span><span class="st0">'type'</span><span class="sy0">,</span> <span class="st0">'message'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="exampleretrieve_a_session_item" id="exampleretrieve_a_session_item">Example:  Retrieve a session item</a></h3>
<div class="level3">

<p>

<code>get($key = FALSE, $default = FALSE)</code> retrieves a named value from the session data.
</p>
<ul>
<li class="level1"><div class="li"> <strong>[mixed]</strong> <code>$key</code> specifies the name of the data to retrieve from the session. </div>
</li>
<li class="level1"><div class="li"> <strong>[mixed]</strong> <code>$default</code> specifies a default value to be returned if the named data does not exist in the session.</div>
</li>
<li class="level1"><div class="li"> returns <strong>[mixed]</strong> The value of the session item specified by <code>$key</code>  If <code>$key</code> is <code>FALSE</code>, <code>get()</code> returns an array containing all of the data in the current session.</div>
</li>
</ul>

<p>

Code Example:

</p>
<pre class="code php"><span class="re1">$item_name</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'item_name'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="page_layout" id="page_layout">Page layout</a></h3>
<div class="level3">

<p>

An example of how a page should be structured <a href="userguide/guidelines/sample.php" class="wikilink1" title="userguide:guidelines:sample">Page layout sample</a>

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="lib/exe/indexer9349.gif?id=userguide&amp;1324588187" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/userguide by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/core/log by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    core:log    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2008-08-11T15:59:54-0500" />
<meta name="keywords" content="core,log" />
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
<li class="level1"><div class="li"><span class="li"><a href="#log_class" class="toc">Log Class</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#configuration" class="toc">Configuration</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#adding_entries_to_the_log_file" class="toc">Adding entries to the log file</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#writing_the_log_entries_to_the_file" class="toc">Writing the log entries to the file</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">Proof read!</td>
	</tr>
</table>



<h1><a name="log_class" id="log_class">Log Class</a></h1>
<div class="level1">


<div class='box left red' style='width: 50%;'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<p class='box_title'>Note:</p>
<div class='box_content'><p>
<strong>This class is deprecated in version 2.2. Its methods are now in Kohana class.</strong>
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>
<p>
Provides methods to work with logging.
</p>

</div>

<h2><a name="configuration" id="configuration">Configuration</a></h2>
<div class="level2">

<p>

The configuration file <code>Log.php</code> can be found in the <code>application/config</code> directory. If it&#039;s not there it can be copied from the <code>system/config</code> directory. See for more information on the <a href="config.php" class="wikilink1" title="core:config">Config</a> page.
</p>

<p>
There are three settings for the Log class:

</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'threshold'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="nu0">0</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'directory'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'logs'</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'format'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'Y-m-d H:i:s'</span><span class="sy0">;</span></pre>
<p>
<code>$config[&#039;threshold&#039;] </code> can be set at four levels:
</p>
<ul>
<li class="level1"><div class="li"> 0 - Logging is disabled</div>
</li>
<li class="level1"><div class="li"> 1 - Error messages including <acronym title="Hypertext Preprocessor">PHP</acronym> errors</div>
</li>
<li class="level1"><div class="li"> 2 - Debug messages</div>
</li>
<li class="level1"><div class="li"> 3 - Informational messages</div>
</li>
</ul>

<p>

When set to <code>3</code> it will also log 2 and 1. Same goes for 2. 
</p>

<p>
Level 1 is recommended in production use as it will only log errors. Level 2 is useful while debugging, it will log all libraries loaded and any errors. Nothing is logged to level 3 by Kohana by default, but can be used for custom logging by applications.
</p>

<p>
<strong>Important</strong> setting the level to 2 or 3 can slow down your application significantly.
</p>

<p>
<code>$config[&#039;directory&#039;]</code> log file directory, relative to application/, or absolute.
</p>

<p>
<code>$config[&#039;format&#039;]</code> format for the timestamps according to <a href="http://php.net/date" class="urlextern" title="http://php.net/date"  rel="nofollow">date()</a>
</p>


<div class='box red'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<div class='box_content'><p>
Kohana 2.2 makes a small change to the logging threshold order. levels 2 and 3 can be used without the overhead of debug. By default nothing is logged to level 2 or 3 by Kohana.

</p>
<ul>
<li class="level1"><div class="li"> 0 - Logging is disabled</div>
</li>
<li class="level1"><div class="li"> 1 - Error messages including <acronym title="Hypertext Preprocessor">PHP</acronym> errors</div>
</li>
<li class="level1"><div class="li"> 2 - Application Alert messages (changed level)</div>
</li>
<li class="level1"><div class="li"> 3 - Application Information messages (changed level)</div>
</li>
<li class="level1"><div class="li"> 4 - Debug messages (new level)</div>
</li>
</ul>

</div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="adding_entries_to_the_log_file" id="adding_entries_to_the_log_file">Adding entries to the log file</a></h3>
<div class="level3">

<p>

<code>Log::add($type, $message)</code> logs the message according to the type given (error,debug,info), the item will be preceded by a timestamp formatted according to <code>$config[&#039;format&#039;]</code>.
</p>
<pre class="code php"><a href="http://www.php.net/log"><span class="kw3">Log</span></a><span class="sy0">::</span><span class="me2">add</span><span class="br0">&#40;</span><span class="st0">'error'</span><span class="sy0">,</span> <span class="st0">'Query went wrong'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// returns void</span>
<a href="http://www.php.net/log"><span class="kw3">Log</span></a><span class="sy0">::</span><span class="me2">add</span><span class="br0">&#40;</span><span class="st0">'debug'</span><span class="sy0">,</span> <span class="st0">'Custom library X loaded'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// returns void</span></pre>
</div>

<h3><a name="writing_the_log_entries_to_the_file" id="writing_the_log_entries_to_the_file">Writing the log entries to the file</a></h3>
<div class="level3">

<p>

<code>Log::write()</code> is called by default on the shutdown event (event.shutdown). See for more information on events the <a href="event.php" class="wikilink1" title="core:event">Event</a> page. There is typically no need to call it manually.
</p>
<pre class="code php"><a href="http://www.php.net/log"><span class="kw3">Log</span></a><span class="sy0">::</span><span class="me2">write</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// returns void</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer46eb.gif?id=core%3Alog&amp;1324588195" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/core/log by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/general/logging by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    general:logging    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-04-27T20:51:42-0500" />
<meta name="keywords" content="general,logging" />
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




<h1><a name="logging" id="logging">Logging</a></h1>
<div class="level1">

<p>

System and <acronym title="Hypertext Preprocessor">PHP</acronym> errors are written to an application log file. For information on writing log messages or accessing log files, see <a href="../core/kohana.php" class="wikilink1" title="core:kohana">Kohana Log methods</a>.
</p>

<p>
The configuration settings for logging are accessible in the core configuration file <code>config.php</code> located in <code>application/config</code>. See <a href="configuration.php" class="wikilink1" title="general:configuration">Configuration</a> for more information.
</p>

<p>
There are only two config settings for Logging:

</p>
<pre class="code php"><span class="coMULTI">/**
 * Log thresholds:
 *  0 - Disable logging
 *  1 - Errors and exceptions
 *  2 - Warnings
 *  3 - Notices
 *  4 - Debugging
 */</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'log_threshold'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="nu0">1</span><span class="sy0">;</span>
&nbsp;
<span class="coMULTI">/**
 * Message logging directory.
 */</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'log_directory'</span><span class="br0">&#93;</span> <span class="sy0">=</span> APPPATH<span class="sy0">.</span><span class="st0">'logs'</span><span class="sy0">;</span></pre>
<p>
When <code>log_threshold</code> is set to <code>4</code> it will also log 3, 2 and 1, since lower levels are always included.

</p>
<ul>
<li class="level1"><div class="li"> Level 1 is recommended in an production environment as it will only log errors. </div>
</li>
<li class="level1"><div class="li"> Level 2 and 3 are used for custom logging by applications.</div>
</li>
<li class="level1"><div class="li"> Level 4 is useful for debugging; it will log all libraries loaded and any errors.</div>
</li>
</ul>

<p>

Kohana by default, does not log anything to level 2 or 3.
</p>

<p>
<code>$config[&#039;log_directory&#039;]</code> log file directory can be relative to <code>application/</code> or absolute.
</p>


<div class='box red'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<p class='box_title'><strong>Important</strong></p>
<div class='box_content'><p>
Setting the level to 4 can slow down your application significantly.
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


<p>
Note that these levels correspond to Kohana::log(level, message) calls as such:

</p>
<ul>
<li class="level1"><div class="li"> 1 - &#039;error&#039;  (Errors &amp; Exceptions)</div>
</li>
<li class="level1"><div class="li"> 2 - &#039;alert&#039;  (Warnings)</div>
</li>
<li class="level1"><div class="li"> 3 - &#039;info&#039;   (Notices)</div>
</li>
<li class="level1"><div class="li"> 4 - &#039;debug&#039;  (Debugging)</div>
</li>
</ul>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexerb67c.gif?id=general%3Alogging&amp;1324588193" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/general/logging by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


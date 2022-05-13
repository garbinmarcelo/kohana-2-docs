<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/overview/credits by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    overview:credits    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2008-05-01T20:31:13-0500" />
<meta name="keywords" content="overview,credits" />
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
<li class="level1"><div class="li"><span class="li"><a href="#credits" class="toc">Credits</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#codeigniter" class="toc">CodeIgniter</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#phputf8" class="toc">phputf8</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#popoon" class="toc">Popoon</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#html_purifier" class="toc">HTML Purifier</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#swiftmailer" class="toc">SwiftMailer</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#php_markdown" class="toc">PHP Markdown</a></span></div></li></ul>
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



<h1><a name="credits" id="credits">Credits</a></h1>
<div class="level1">

<p>

Most of the Kohana source code is written by the Kohana Team. There are a few notable credits, however.
</p>

</div>

<h2><a name="codeigniter" id="codeigniter">CodeIgniter</a></h2>
<div class="level2">

<p>

Kohana was originally a fork of <a href="http://codeigniter.com/" class="urlextern" title="http://codeigniter.com"  rel="nofollow">CodeIgniter</a> (CI), which is an open-source product of <a href="http://ellislab.com/" class="urlextern" title="http://ellislab.com"  rel="nofollow">EllisLab</a>. There are still many similarities between CI and Kohana, particularly in naming conventions and filesystem design, but all of the code is either new or completely rewritten.
</p>

<p>
<a href="http://codeigniter.com/user_guide/license.php" class="urlextern" title="http://codeigniter.com/user_guide/license.php"  rel="nofollow">CodeIgniter</a> is © 2006 EllisLab, Inc. 
</p>

</div>

<h2><a name="phputf8" id="phputf8">phputf8</a></h2>
<div class="level2">

<p>

All of the Kohana UTF-8 functions are ported from the <a href="http://phputf8.sourceforge.net/" class="urlextern" title="http://phputf8.sourceforge.net"  rel="nofollow">phputf8</a> project.
</p>

<p>
<a href="http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt" class="urlextern" title="http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt"  rel="nofollow">phputf8</a> is © 2005 Harry Fuecks.
</p>

</div>

<h2><a name="popoon" id="popoon">Popoon</a></h2>
<div class="level2">

<p>

The default XSS filter used by Kohana was originally created by <a href="http://www.liip.ch/" class="urlextern" title="http://www.liip.ch"  rel="nofollow">Christian Stocker</a> for the <a href="http://www.popoon.org/" class="urlextern" title="http://www.popoon.org"  rel="nofollow">popoon</a> framework. The original file is called <a href="http://svn.bitflux.ch/repos/public/popoon/trunk/classes/externalinput.php" class="urlextern" title="http://svn.bitflux.ch/repos/public/popoon/trunk/classes/externalinput.php"  rel="nofollow">externalinput.php</a>.
</p>

<p>
<a href="http://svn.bitflux.ch/repos/public/popoon/trunk/LICENSE" class="urlextern" title="http://svn.bitflux.ch/repos/public/popoon/trunk/LICENSE"  rel="nofollow">popoon</a> is © 2001-2006 Bitflux GmbH
</p>

</div>

<h2><a name="html_purifier" id="html_purifier">HTML Purifier</a></h2>
<div class="level2">

<p>

The alternative XSS filter used by Kohana is <a href="http://htmlpurifier.org/" class="urlextern" title="http://htmlpurifier.org"  rel="nofollow">HTML Purifier</a>. This is an optional download.
</p>

<p>
<a href="http://htmlpurifier.org/svnroot/htmlpurifier/trunk/LICENSE" class="urlextern" title="http://htmlpurifier.org/svnroot/htmlpurifier/trunk/LICENSE"  rel="nofollow">HTML Purifier</a> is © 2006-2007 Edward Z. Yang
</p>

</div>

<h2><a name="swiftmailer" id="swiftmailer">SwiftMailer</a></h2>
<div class="level2">

<p>

The recommended way to send emails in Kohana is using <a href="http://www.swiftmailer.org/" class="urlextern" title="http://www.swiftmailer.org"  rel="nofollow">SwiftMailer</a>. This is an optional download.
</p>

<p>
<a href="http://swiftmailer.svn.sourceforge.net/svnroot/swiftmailer/trunk/php4/LICENSE" class="urlextern" title="http://swiftmailer.svn.sourceforge.net/svnroot/swiftmailer/trunk/php4/LICENSE"  rel="nofollow">SwiftMailer</a> is © Chris Corbyn
</p>

</div>

<h2><a name="php_markdown" id="php_markdown">PHP Markdown</a></h2>
<div class="level2">

<p>

<a href="http://en.wikipedia.org/wiki/Markdown" class="interwiki iw_wp" title="http://en.wikipedia.org/wiki/Markdown">Markdown</a> is a simple text-to-<acronym title="HyperText Markup Language">HTML</acronym> formatting tool. Kohana includes <a href="http://michelf.com/projects/php-markdown" class="urlextern" title="http://michelf.com/projects/php-markdown"  rel="nofollow">PHP Markdown</a> as an optional download.
</p>

<p>
<a href="http://michelf.com/projects/php-markdown/license" class="urlextern" title="http://michelf.com/projects/php-markdown/license"  rel="nofollow">PHP Markdown</a> is © 2006 Michel Fortin
</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer0645.gif?id=overview%3Acredits&amp;1324588184" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/overview/credits by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


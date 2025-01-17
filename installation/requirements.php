<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/installation/requirements by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:18 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    installation:requirements    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2008-12-23T08:32:45-0600" />
<meta name="keywords" content="installation,requirements" />
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
<li class="level1"><div class="li"><span class="li"><a href="#basic_requirements" class="toc">Basic Requirements</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#required_extensions" class="toc">Required Extensions</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#recommended_extensions" class="toc">Recommended Extensions</a></span></div></li></ul>
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



<h1><a name="basic_requirements" id="basic_requirements">Basic Requirements</a></h1>
<div class="level1">

<p>

Kohana will run in almost any environment with minimal configuration. There are a few minimum server requirements:

</p>
<ol>
<li class="level1"><div class="li"> Server with <a href="http://unicode.org/" class="urlextern" title="http://unicode.org"  rel="nofollow">Unicode</a> support</div>
</li>
<li class="level1"><div class="li"> <acronym title="Hypertext Preprocessor">PHP</acronym> version &gt;= 5.2.3</div>
</li>
<li class="level1"><div class="li"> An <acronym title="Hyper Text Transfer Protocol">HTTP</acronym> server. Kohana is known to work with: Apache 1.3+, Apache 2.0+, lighttpd, and <acronym title="Microsoft">MS</acronym> <acronym title="Internet Information Services">IIS</acronym></div>
</li>
</ol>

<p>

Optionally, if you wish to use a database with Kohana, you will need a database server. There are <a href="../libraries/database.php" class="wikilink1" title="libraries:database">database</a> drivers for <a href="http://www.mysql.com/" class="urlextern" title="http://www.mysql.com"  rel="nofollow">MySQL</a> and <a href="http://www.postgresql.org/" class="urlextern" title="http://www.postgresql.org"  rel="nofollow">PostgreSQL</a>, with additional drivers planned.
</p>

</div>

<h2><a name="required_extensions" id="required_extensions">Required Extensions</a></h2>
<div class="level2">
<ol>
<li class="level1"><div class="li"> <a href="http://php.net/pcre" class="urlextern" title="http://php.net/pcre"  rel="nofollow">PCRE</a> must be compiled with <code>–enable-utf8</code> and <code>–enable-unicode-properties</code> for UTF-8 functions to work properly.</div>
</li>
<li class="level1"><div class="li"> <a href="http://php.net/iconv" class="urlextern" title="http://php.net/iconv"  rel="nofollow">iconv</a> is required for UTF-8 transliteration.</div>
</li>
<li class="level1"><div class="li"> <a href="http://php.net/mcrypt" class="urlextern" title="http://php.net/mcrypt"  rel="nofollow">mcrypt</a> is required for encryption.</div>
</li>
<li class="level1"><div class="li"> <a href="http://php.net/spl" class="urlextern" title="http://php.net/spl"  rel="nofollow">SPL</a> is required for several core libraries. <sup><a href="#fn__1" name="fnt__1" id="fnt__1" class="fn_top">1)</a></sup></div>
</li>
</ol>

</div>

<h2><a name="recommended_extensions" id="recommended_extensions">Recommended Extensions</a></h2>
<div class="level2">
<ol>
<li class="level1"><div class="li"> <a href="http://php.net/mbstring" class="urlextern" title="http://php.net/mbstring"  rel="nofollow">mbstring</a> will dramatically speed up Kohana&#039;s UTF-8 functions. However, note that the mbstring extension must not be overloading <acronym title="Hypertext Preprocessor">PHP</acronym>&#039;s native string functions!</div>
</li>
</ol>

</div>
<div class="footnotes">
<div class="fn"><sup><a href="#fnt__1" id="fn__1" name="fn__1" class="fn_bot">1)</a></sup> 
<acronym title="Hypertext Preprocessor">PHP</acronym> Standard Library is a set of classes and interfaces, designed to efficiently solve common problems. SPL is enabled in <acronym title="Hypertext Preprocessor">PHP</acronym> 5.1+ by default. SPL is disabled at compile time by using –disable-spl or –disable-all.</div>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexercb99.gif?id=installation%3Arequirements&amp;1324588185" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/installation/requirements by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


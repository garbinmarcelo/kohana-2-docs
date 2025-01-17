<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/general/i18n by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    general:i18n    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-03-10T11:50:31-0500" />
<meta name="keywords" content="general,i18n" />
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
<li class="level1"><div class="li"><span class="li"><a href="#internationalization" class="toc">Internationalization</a></span></div>
<ul class="toc">
<li class="clear">

<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#locale_setting" class="toc">Locale setting</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#file_structure" class="toc">File structure</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#retrieving_language_strings" class="toc">Retrieving language strings</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#setting_your_own_language_strings" class="toc">Setting your own language strings</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">Language files, file structure, loading entries</td>
	</tr>
	<tr class="row2">
		<th class="col0">Todo</th><td class="col1">Language codes, expand on extra arguments for lang()</td>
	</tr>
</table>



<h1><a name="internationalization" id="internationalization">Internationalization</a></h1>
<div class="level1">

<p>
Internationalization files can be found in the i18n directories. These directories can be found in system, application or modules directories. Kohana&#039;s own internationalization files can be found in the system directory. 
</p>

<p>
In the i18n directories the directories with the language files can be found. English files are in en_US, Dutch in nl_NL, German in de_DE etc.
</p>

</div>

<h3><a name="locale_setting" id="locale_setting">Locale setting</a></h3>
<div class="level3">

<p>
The configuration file <code>locale.php</code> sets which locale will be used. The file can be found in the application/config directory, if it&#039;s not there copy the one from the system/config directory. 
</p>

<p>
The file will look somewhat like this

</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'language'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'en_US'</span><span class="sy0">,</span> <span class="st0">'English_United States'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'timezone'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">''</span><span class="sy0">;</span></pre>
<p>
<code>$config[&#039;language&#039;]</code> sets the language that should be used. It maps to the directories in the i18n directory.
<code>$config[&#039;timezone&#039;]</code> sets the timezone, see for more information <a href="http://php.net/timezones" class="urlextern" title="http://php.net/timezones"  rel="nofollow">http://php.net/timezones</a>
</p>

</div>

<h3><a name="file_structure" id="file_structure">File structure</a></h3>
<div class="level3">
<pre class="code">root
 +- application
 |    +- i18n
 |        +- en_US
 |        |   +- coffee.php
 |        |
 |        +- de_DE
 |        |   +- coffee.php
 |        |
 |        +- zh_CN
 |        |   +- coffee.php
 |
 +- system
 |    +- i18n
 |        +- en_US
 |        |   +- cache.php
 |        |
 |        +- de_DE
 |        |   +- cache.php
 |        |
 |        +- zh_CN
 |        |   +- cache.php
 </pre>

</div>

<h3><a name="retrieving_language_strings" id="retrieving_language_strings">Retrieving language strings</a></h3>
<div class="level3">

<p>

Using Kohana::lang() languages strings can be retrieved. 
<strong>Example </strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">lang</span><span class="br0">&#40;</span><span class="st0">'cache.resources'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">//outputs is locale is set to en_US</span>
&nbsp;
<span class="co1">//  Caching of resources is impossible, because resources cannot be serialized.</span>
&nbsp;
<span class="co1">//If locale is set to de_DE</span>
&nbsp;
<span class="co1">//  Das Cachen von Ressourcen ist nicht möglich, da diese nicht serialisiert werden können.</span></pre>
<p>
In the case of <code>en_US</code>, <code>Kohana::lang(&#039;cache.resources&#039;)</code> maps to i18n/en_US/cache.php and within this file to <code>$lang[&#039;resources&#039;]</code> 
</p>

<p>
Kohana also allows to give extra arguments to <code>Kohana::lang()</code>  passing them to translated text via <acronym title="Hypertext Preprocessor">PHP</acronym> function <code>vsprintf</code> <a href="http://php.net/vsprintf" class="urlextern" title="http://php.net/vsprintf"  rel="nofollow">http://php.net/vsprintf</a>
</p>

</div>

<h3><a name="setting_your_own_language_strings" id="setting_your_own_language_strings">Setting your own language strings</a></h3>
<div class="level3">

<p>

It is possible to have your own language strings in your application/module. Simply add a directory <code>i18n</code>, add the directory of the locale and add the file with the language strings. For example, you want to have language strings for coffee and stuff related to coffee. Name the file <strong><code>coffee.php</code></strong> and place it in <code>application/i18n/en_US/</code>
</p>

<p>
<strong>Format of the file</strong>

</p>
<pre class="code php"><span class="re1">$lang</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
	<span class="st0">'cup'</span>             <span class="sy0">=&gt;</span> <span class="st0">'Coffee goes in here'</span><span class="sy0">,</span>
	<span class="st0">'beans'</span>           <span class="sy0">=&gt;</span> <span class="st0">'Coffee is created from beans.'</span><span class="sy0">,</span>
	<span class="st0">'java'</span>            <span class="sy0">=&gt;</span> <span class="st0">'Place where coffee comes from, not the programming language'</span><span class="sy0">,</span>
<span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
These language strings can now be called from your application
</p>

<p>
<strong>Example</strong>
</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">lang</span><span class="br0">&#40;</span><span class="st0">'coffee.cup'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">lang</span><span class="br0">&#40;</span><span class="st0">'coffee.beans'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">lang</span><span class="br0">&#40;</span><span class="st0">'coffee.java'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexerf7ce.gif?id=general%3Ai18n&amp;1324588193" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/general/i18n by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


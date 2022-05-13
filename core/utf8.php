<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/core/utf8 by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    core:utf8    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-01-29T06:35:56-0600" />
<meta name="keywords" content="core,utf8" />
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
<li class="level1"><div class="li"><span class="li"><a href="#unicode_functions" class="toc">Unicode Functions</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#clean" class="toc">clean</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#from_unicode" class="toc">from_unicode</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#is_ascii" class="toc">is_ascii</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#ltrim" class="toc">ltrim</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#ord" class="toc">ord</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#rtrim" class="toc">rtrim</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#str_ireplace" class="toc">str_ireplace</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#str_pad" class="toc">str_pad</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#str_split" class="toc">str_split</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#strcasecmp" class="toc">strcasecmp</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#strcspn" class="toc">strcspn</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#strip_ascii_ctrl" class="toc">strip_ascii_ctrl</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#strip_non_ascii" class="toc">strip_non_ascii</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#stristr" class="toc">stristr</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#strlen" class="toc">strlen</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#strpos" class="toc">strpos</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#strrev" class="toc">strrev</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#strrpos" class="toc">strrpos</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#strspn" class="toc">strspn</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#strtolower" class="toc">strtolower</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#strtoupper" class="toc">strtoupper</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#substr" class="toc">substr</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#substr_replace" class="toc">substr_replace</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#to_unicode" class="toc">to_unicode</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#transliterate_to_ascii" class="toc">transliterate_to_ascii</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#trim" class="toc">trim</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#ucfirst" class="toc">ucfirst</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#ucwords" class="toc">ucwords</a></span></div></li></ul>
</li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">First Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Expand, fill in missing methods</td>
	</tr>
</table>



<h1><a name="unicode_functions" id="unicode_functions">Unicode Functions</a></h1>
<div class="level1">

<p>
Provides static methods to work with UTF-8 strings as <acronym title="Hypertext Preprocessor">PHP</acronym> is not yet natively capable of doing that.
</p>

<p>
Requirements:
</p>
<ul>
<li class="level1"><div class="li"> <a href="http://php.net/pcre" class="urlextern" title="http://php.net/pcre"  rel="nofollow">PCRE</a> needs to be compiled with UTF-8 support.</div>
</li>
<li class="level1"><div class="li"> The <a href="http://php.net/iconv" class="urlextern" title="http://php.net/iconv"  rel="nofollow">iconv extension</a> needs to be loaded.</div>
</li>
<li class="level1"><div class="li"> The <a href="http://php.net/mbstring" class="urlextern" title="http://php.net/mbstring"  rel="nofollow">mbstring extension</a> is highly recommended. However, it must not be overloading string functions.</div>
</li>
</ul>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="clean" id="clean">clean</a></h3>
<div class="level3">

<p>

<code>utf8::clean()</code> recursively cleans arrays, objects, and strings. It removes <acronym title="American Standard Code for Information Interchange">ASCII</acronym> control characters (<code><span class="curid"><a href="utf8.php#strip_ascii_ctrl" class="wikilink1" title="core:utf8">strip_ascii_ctrl</a></span></code>) and converts to UTF-8 while silently discarding incompatible UTF-8 characters.
</p>


<div class='box'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<p class='box_title'>Note:</p>
<div class='box_content'><p>
The <code>clean()</code> method is automatically applied to the GET, POST, COOKIE and SERVER globals.
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


</div>

<h3><a name="from_unicode" id="from_unicode">from_unicode</a></h3>
<div class="level3">

</div>

<h3><a name="is_ascii" id="is_ascii">is_ascii</a></h3>
<div class="level3">

<p>

<code>utf8::is_ascii()</code> checks whether a string contains only 7bit <acronym title="American Standard Code for Information Interchange">ASCII</acronym> bytes. It returns TRUE if it does so, FALSE otherwise.
This method is also used internally in the utf8 class to determine when to use native functions or UTF-8 functions.
</p>

<p>
<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/var_dump"><span class="kw3">var_dump</span></a><span class="br0">&#40;</span>utf8<span class="sy0">::</span><span class="me2">is_ascii</span><span class="br0">&#40;</span><span class="st0">&quot;a<span class="es0">\0</span>b&quot;</span><span class="sy0">.</span><a href="http://www.php.net/chr"><span class="kw3">chr</span></a><span class="br0">&#40;</span><span class="nu0">127</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="st0">'c'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// bool(true)</span>
<a href="http://www.php.net/var_dump"><span class="kw3">var_dump</span></a><span class="br0">&#40;</span>utf8<span class="sy0">::</span><span class="me2">is_ascii</span><span class="br0">&#40;</span><span class="st0">&quot;a<span class="es0">\0</span>b&quot;</span><span class="sy0">.</span><a href="http://www.php.net/chr"><span class="kw3">chr</span></a><span class="br0">&#40;</span><span class="nu0">128</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="st0">'c'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// bool(false)</span></pre>
</div>

<h3><a name="ltrim" id="ltrim">ltrim</a></h3>
<div class="level3">

</div>

<h3><a name="ord" id="ord">ord</a></h3>
<div class="level3">

</div>

<h3><a name="rtrim" id="rtrim">rtrim</a></h3>
<div class="level3">

</div>

<h3><a name="str_ireplace" id="str_ireplace">str_ireplace</a></h3>
<div class="level3">

</div>

<h3><a name="str_pad" id="str_pad">str_pad</a></h3>
<div class="level3">

</div>

<h3><a name="str_split" id="str_split">str_split</a></h3>
<div class="level3">

</div>

<h3><a name="strcasecmp" id="strcasecmp">strcasecmp</a></h3>
<div class="level3">

</div>

<h3><a name="strcspn" id="strcspn">strcspn</a></h3>
<div class="level3">

</div>

<h3><a name="strip_ascii_ctrl" id="strip_ascii_ctrl">strip_ascii_ctrl</a></h3>
<div class="level3">

<p>

<code>utf8::strip_ascii_ctrl()</code> removes all <a href="http://en.wikipedia.org/wiki/ASCII%23ASCII_control_characters" class="interwiki iw_wp" title="http://en.wikipedia.org/wiki/ASCII%23ASCII_control_characters">ASCII control characters</a> from a string.
</p>

<p>
<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> utf8<span class="sy0">::</span><span class="me2">strip_ascii_ctrl</span><span class="br0">&#40;</span><span class="st0">&quot;a<span class="es0">\0</span>b&quot;</span><span class="sy0">.</span><a href="http://www.php.net/chr"><span class="kw3">chr</span></a><span class="br0">&#40;</span><span class="nu0">7</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="st0">'c'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// Output: abc</span></pre>
</div>

<h3><a name="strip_non_ascii" id="strip_non_ascii">strip_non_ascii</a></h3>
<div class="level3">

<p>

<code>utf8::strip_non_ascii()</code> removes all non-<acronym title="American Standard Code for Information Interchange">ASCII</acronym> characters from a string.
</p>

<p>
<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> utf8<span class="sy0">::</span><span class="me2">strip_non_ascii</span><span class="br0">&#40;</span><span class="st0">'Clichés'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// Output: Clichs</span></pre>
</div>

<h3><a name="stristr" id="stristr">stristr</a></h3>
<div class="level3">

</div>

<h3><a name="strlen" id="strlen">strlen</a></h3>
<div class="level3">

</div>

<h3><a name="strpos" id="strpos">strpos</a></h3>
<div class="level3">

</div>

<h3><a name="strrev" id="strrev">strrev</a></h3>
<div class="level3">

</div>

<h3><a name="strrpos" id="strrpos">strrpos</a></h3>
<div class="level3">

</div>

<h3><a name="strspn" id="strspn">strspn</a></h3>
<div class="level3">

</div>

<h3><a name="strtolower" id="strtolower">strtolower</a></h3>
<div class="level3">

</div>

<h3><a name="strtoupper" id="strtoupper">strtoupper</a></h3>
<div class="level3">

</div>

<h3><a name="substr" id="substr">substr</a></h3>
<div class="level3">

</div>

<h3><a name="substr_replace" id="substr_replace">substr_replace</a></h3>
<div class="level3">

</div>

<h3><a name="to_unicode" id="to_unicode">to_unicode</a></h3>
<div class="level3">

</div>

<h3><a name="transliterate_to_ascii" id="transliterate_to_ascii">transliterate_to_ascii</a></h3>
<div class="level3">

<p>

<code>utf8::transliterate_to_ascii()</code> replaces many (not all) special/accented characters by their <acronym title="American Standard Code for Information Interchange">ASCII</acronym> equivalents. Special characters that are unknown to this method are left untouched. You can remove them afterwards with the <code><span class="curid"><a href="utf8.php#strip_non_ascii" class="wikilink1" title="core:utf8">strip_non_ascii</a></span></code> method.
</p>

<p>
<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> utf8<span class="sy0">::</span><span class="me2">transliterate_to_ascii</span><span class="br0">&#40;</span><span class="st0">'Jérôme est un garçon.'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// Output: Jerome est un garcon.</span></pre>
<p>
Further reading: <a href="http://en.wikipedia.org/wiki/Transliteration" class="interwiki iw_wp" title="http://en.wikipedia.org/wiki/Transliteration">Wikipedia on transliteration</a>
</p>

</div>

<h3><a name="trim" id="trim">trim</a></h3>
<div class="level3">

</div>

<h3><a name="ucfirst" id="ucfirst">ucfirst</a></h3>
<div class="level3">

</div>

<h3><a name="ucwords" id="ucwords">ucwords</a></h3>
<div class="level3">

<p>

<p style="text-align:center">« <a href="kohana.php" class="wikilink1" title="core:kohana">Kohana</a> : Previous 

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer58d6.gif?id=core%3Autf8&amp;1324588195" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/core/utf8 by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


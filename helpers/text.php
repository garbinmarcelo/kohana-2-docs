<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/helpers/text by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    helpers:text    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2008-12-17T10:27:19-0600" />
<meta name="keywords" content="helpers,text" />
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
<li class="level1"><div class="li"><span class="li"><a href="#text_helper" class="toc">Text Helper</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#limit_words" class="toc">limit_words()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#limit_chars" class="toc">limit_chars()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#alternate" class="toc">alternate()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#random" class="toc">random()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#reduce_slashes" class="toc">reduce_slashes()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#censor" class="toc">censor()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#similar" class="toc">similar()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#auto_link" class="toc">auto_link()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#auto_link_urls" class="toc">auto_link_urls()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#auto_link_emails" class="toc">auto_link_emails()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#bytes" class="toc">bytes()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#widont" class="toc">widont()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#auto_p" class="toc">auto_p()</a></span></div></li></ul>
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



<h1><a name="text_helper" id="text_helper">Text Helper</a></h1>
<div class="level1">

<p>

Provides methods for working with Text.
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="limit_words" id="limit_words">limit_words()</a></h3>
<div class="level3">

<p>

<code>text::limit_words()</code> accepts multiple parameters. Only the input <strong>string</strong> is required.
The default end character is the ellipsis.
</p>
<pre class="code php"><span class="re1">$long_description</span> <span class="sy0">=</span> <span class="st0">'The rain in Spain falls mainly in the plain'</span><span class="sy0">;</span>
<span class="re1">$limit</span> <span class="sy0">=</span> <span class="nu0">4</span><span class="sy0">;</span>
<span class="re1">$end_char</span> <span class="sy0">=</span> <span class="st0">'&amp;nbsp;'</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$short_description</span> <span class="sy0">=</span> text<span class="sy0">::</span><span class="me2">limit_words</span><span class="br0">&#40;</span><span class="re1">$long_description</span><span class="sy0">,</span> <span class="re1">$limit</span><span class="sy0">,</span> <span class="re1">$end_char</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Generates:

</p>
<pre class="code">The rain in Spain</pre>

</div>

<h3><a name="limit_chars" id="limit_chars">limit_chars()</a></h3>
<div class="level3">

<p>

<code>text::limit_chars()</code> accepts multiple parameters. Only the input <strong>string</strong> is required.
The default end character is the ellipsis.
</p>
<pre class="code php"><span class="re1">$long_description</span> <span class="sy0">=</span> <span class="st0">'The rain in Spain falls mainly in the plain'</span><span class="sy0">;</span>
<span class="re1">$limit</span> <span class="sy0">=</span> <span class="nu0">4</span><span class="sy0">;</span>
<span class="re1">$end_char</span> <span class="sy0">=</span> <span class="st0">'&amp;amp;nbsp;'</span><span class="sy0">;</span>
<span class="re1">$preserve_words</span> <span class="sy0">=</span> <span class="kw2">FALSE</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$short_description</span> <span class="sy0">=</span> text<span class="sy0">::</span><span class="me2">limit_chars</span><span class="br0">&#40;</span><span class="re1">$long_description</span><span class="sy0">,</span> <span class="re1">$limit</span><span class="sy0">,</span> <span class="re1">$end_char</span><span class="sy0">,</span> <span class="re1">$preserve_words</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Generates:

</p>
<pre class="code">The r</pre>

</div>

<h3><a name="alternate" id="alternate">alternate()</a></h3>
<div class="level3">

<p>

<code>text::alternate()</code> accepts multiple parameters. The number of parameters determines the alternation. This is handy if you loop through something and you for example want to alternate the color of a table row. 
</p>
<pre class="code php"><span class="kw1">for</span><span class="br0">&#40;</span><span class="re1">$i</span><span class="sy0">=</span><span class="nu0">0</span><span class="sy0">:</span><span class="re1">$i</span><span class="sy0">&lt;</span><span class="nu0">5</span><span class="sy0">:</span><span class="re1">$i</span><span class="sy0">++</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> text<span class="sy0">::</span><span class="me2">alternate</span><span class="br0">&#40;</span><span class="st0">'1'</span><span class="sy0">,</span><span class="st0">'2'</span><span class="sy0">,</span><span class="st0">'boom'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
<span class="co1">//returns 12boom12</span></pre>
</div>

<h3><a name="random" id="random">random()</a></h3>
<div class="level3">

<p>

<code>text::random()</code> accepts multiple optional parameters.
Returns a random text string of specified length.
</p>

<p>
Possible values for $type are:
</p>
<ul>
<li class="level1"><div class="li"> <code>alnum</code> - 0-9, a-z and A-Z</div>
</li>
<li class="level1"><div class="li"> <code>alpha</code> - a-z, A-Z</div>
</li>
<li class="level1"><div class="li"> <code>numeric</code> - 0-9</div>
</li>
<li class="level1"><div class="li"> <code>nozero</code> - 1-9</div>
</li>
<li class="level1"><div class="li"> <code>distinct</code> - Only distinct characters that can&#039;t be mistaken for others.</div>
</li>
<li class="level1"><div class="li"> For values that don&#039;t match any of the above, the characters passed in will be used.</div>
</li>
</ul>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> text<span class="sy0">::</span><span class="me2">random</span><span class="br0">&#40;</span><span class="re1">$type</span> <span class="sy0">=</span> <span class="st0">'alnum'</span><span class="sy0">,</span> <span class="re1">$length</span> <span class="sy0">=</span> <span class="nu0">10</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="reduce_slashes" id="reduce_slashes">reduce_slashes()</a></h3>
<div class="level3">

<p>

<code>text::reduce_slashes()</code> reduces multiple slashes in a string to single slashes.

</p>
<pre class="code php"><span class="kw2">&lt;?php</span>
<span class="re1">$str</span> <span class="sy0">=</span> <span class="st0">&quot;path/to//something&quot;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> reduce_slashes<span class="br0">&#40;</span><span class="re1">$str</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// Outputs: path/to/something</span>
<span class="kw2">?&gt;</span></pre>
</div>

<h3><a name="censor" id="censor">censor()</a></h3>
<div class="level3">

<p>

<code>text::censor()</code> accepts multiple optional parameters. The input string and an array of marker
words is required.
Returns a string with the marker words censored by the specified replacement character.
</p>
<pre class="code php"><span class="re1">$str</span> <span class="sy0">=</span> <span class="st0">'The income tax is a three letter word, but telemarketers are scum.'</span><span class="sy0">;</span>
<span class="re1">$replacement</span> <span class="sy0">=</span> <span class="st0">'*'</span><span class="sy0">;</span>
<span class="re1">$badwords</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'tax'</span><span class="sy0">,</span> <span class="st0">'scum'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> text<span class="sy0">::</span><span class="me2">censor</span><span class="br0">&#40;</span><span class="re1">$str</span><span class="sy0">,</span> <span class="re1">$badwords</span><span class="sy0">,</span> <span class="re1">$replacement</span><span class="sy0">,</span> <span class="re1">$replace_partial_words</span> <span class="sy0">=</span> <span class="kw2">FALSE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Generates:

</p>
<pre class="code">The income *** is a three letter word, but telemarketers are ****.</pre>

</div>

<h3><a name="similar" id="similar">similar()</a></h3>
<div class="level3">

<p>

Finds the text that is similar between a set of words.
</p>

</div>

<h3><a name="auto_link" id="auto_link">auto_link()</a></h3>
<div class="level3">

<p>

Converts text email addresses and anchors into links.
</p>

</div>

<h3><a name="auto_link_urls" id="auto_link_urls">auto_link_urls()</a></h3>
<div class="level3">

<p>

Converts text anchors into links.
</p>

</div>

<h3><a name="auto_link_emails" id="auto_link_emails">auto_link_emails()</a></h3>
<div class="level3">

<p>

Converts text email addresses into links.
</p>

</div>

<h3><a name="bytes" id="bytes">bytes()</a></h3>
<div class="level3">

<p>

<code>text::bytes($bytes,$force_unit,$format,$si)</code> Returns a human readable size.
</p>
<ul>
<li class="level1"><div class="li"> $bytes - Supply the number of bites</div>
</li>
<li class="level1"><div class="li"> $force_unit - defaults to NULL when supplied the function will return in those units.</div>
</li>
<li class="level1"><div class="li"> $format - format of the return string</div>
</li>
<li class="level1"><div class="li"> $si - Defaults to TRUE, when FALSE function will return IEC prefixes (KiB, MiB etc.) else will return SI prefixes (kB, <acronym title="Megabyte">MB</acronym>, <acronym title="Gigabyte">GB</acronym> etc)</div>
</li>
</ul>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> text<span class="sy0">::</span><span class="me2">bytes</span><span class="br0">&#40;</span><span class="st0">'2048'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns 2.05 kB</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> text<span class="sy0">::</span><span class="me2">bytes</span><span class="br0">&#40;</span><span class="st0">'4194304'</span><span class="sy0">,</span><span class="st0">'kB'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns 4194.30 kB</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> text<span class="sy0">::</span><span class="me2">bytes</span><span class="br0">&#40;</span><span class="st0">'4194304'</span><span class="sy0">,</span><span class="st0">'GiB'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns 0.00 GiB</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> text<span class="sy0">::</span><span class="me2">bytes</span><span class="br0">&#40;</span><span class="st0">'4194304'</span><span class="sy0">,</span><span class="kw2">NULL</span><span class="sy0">,</span> <span class="kw2">NULL</span><span class="sy0">,</span> <span class="kw2">FALSE</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns 4.00 MiB</span></pre>
</div>

<h3><a name="widont" id="widont">widont()</a></h3>
<div class="level3">

<p>

<code>text::widont()</code> Returns a string without widow words by inserting a non-breaking space between the last two words. A widow word is a single word at the end of a paragraph on a new line. It&#039;s considered bad style.
</p>
<ul>
<li class="level1"><div class="li"> $string - String with potential widow words</div>
</li>
</ul>
<pre class="code php"><span class="re1">$paragraph</span><span class="sy0">=</span><span class="st0">'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cras id dolor. Donec ...'</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$paragraph</span><span class="sy0">=</span>text<span class="sy0">::</span><span class="me2">widont</span><span class="br0">&#40;</span><span class="re1">$paragraph</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="auto_p" id="auto_p">auto_p()</a></h3>
<div class="level3">

<p>
Automatically applies &lt;p&gt; and &lt;br /&gt; markup to text. Basically nl2br() on steroids.

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer90d4.gif?id=helpers%3Atext&amp;1324588207" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/helpers/text by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


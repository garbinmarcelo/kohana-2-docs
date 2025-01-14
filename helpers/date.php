<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/helpers/date by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    helpers:date    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-04-18T14:56:39-0500" />
<meta name="keywords" content="helpers,date" />
<link rel="alternate" type="application/rss+xml" title="Current Namespace" href="../feedd6be.php?mode=list&amp;ns=helpers" />
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
<li class="level1"><div class="li"><span class="li"><a href="#date_helper" class="toc">Date Helper</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#unix2dos" class="toc">unix2dos()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#dos2unix" class="toc">dos2unix()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#offset" class="toc">offset()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#seconds" class="toc">seconds()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#minutes" class="toc">minutes()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#hours" class="toc">hours()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#ampm" class="toc">ampm()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#days" class="toc">days()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#months" class="toc">months()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#years" class="toc">years()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#timespan" class="toc">timespan()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#adjust" class="toc">adjust()</a></span></div></li></ul>
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



<h1><a name="date_helper" id="date_helper">Date Helper</a></h1>
<div class="level1">

<p>
The Date helper assists in formating dates and times allowing for addition and conversion between different formats.
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="unix2dos" id="unix2dos">unix2dos()</a></h3>
<div class="level3">

<p>
&#039;unix2dos&#039; converts UNIX time into DOS time.
</p>

<p>
The one arguments is:
</p>
<ul>
<li class="level1"><div class="li"> [int] UNIX timestamp</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Please note that the print() statements are for display purposes only</span>
<span class="re1">$time</span> <span class="sy0">=</span> <a href="http://www.php.net/mktime"><span class="kw3">mktime</span></a><span class="br0">&#40;</span><span class="nu0">0</span><span class="sy0">,</span> <span class="nu0">0</span><span class="sy0">,</span> <span class="nu0">0</span><span class="sy0">,</span> <span class="nu0">31</span><span class="sy0">,</span> <span class="nu0">10</span><span class="sy0">,</span> <span class="nu0">1987</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> <span class="br0">&#40;</span><span class="re1">$time</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$time</span> <span class="sy0">=</span> <a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">unix2dos</span><span class="br0">&#40;</span><span class="re1">$time</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> <span class="br0">&#40;</span><span class="re1">$time</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">616046400
317325312</pre>
</div>

<h3><a name="dos2unix" id="dos2unix">dos2unix()</a></h3>
<div class="level3">

<p>
&#039;dos2unix&#039; converts DOS time into UNIX time.
</p>

<p>
The one arguments is:
</p>
<ul>
<li class="level1"><div class="li"> [int] DOS timestamp</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Please note that the print() statements are for display purposes only</span>
<span class="re1">$time</span> <span class="sy0">=</span> <span class="nu0">317325312</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> <span class="br0">&#40;</span><span class="re1">$time</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$time</span> <span class="sy0">=</span> <a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">dos2unix</span><span class="br0">&#40;</span><span class="re1">$time</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> <span class="br0">&#40;</span><span class="re1">$time</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">317325312
616046400</pre>
</div>

<h3><a name="offset" id="offset">offset()</a></h3>
<div class="level3">

<p>
&#039;offset&#039; calculates the seconds between two timezones.
</p>

<p>
The two arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [int] remote timezone</div>
</li>
<li class="level1"><div class="li"> [mixed] use local time? – default is TRUE – else enter your own </div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Please note that the print() statements are for display purposes only</span>
<span class="co1">// This example was executed in the EST timezone</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> <span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">offset</span><span class="br0">&#40;</span><span class="st0">'CST'</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="st0">'&lt;br /&gt;'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> <span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">offset</span><span class="br0">&#40;</span><span class="st0">'CST'</span><span class="sy0">,</span> <span class="st0">'MST'</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="st0">'&lt;br /&gt;'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> <span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">offset</span><span class="br0">&#40;</span><span class="st0">'UTC'</span><span class="sy0">,</span> <span class="st0">'GMT'</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="st0">'&lt;br /&gt;'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">-3600
3600
0</pre>
</div>

<h3><a name="seconds" id="seconds">seconds()</a></h3>
<div class="level3">

<p>
&#039;seconds&#039; creates an array of numbers based on your input.
</p>

<p>
The three arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [int] step (count by) – default = 1</div>
</li>
<li class="level1"><div class="li"> [int] start number – default = 0</div>
</li>
<li class="level1"><div class="li"> [int] end number – default = 60</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Please note that the print() statements are for display purposes only</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">seconds</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">seconds</span><span class="br0">&#40;</span><span class="nu0">2</span><span class="sy0">,</span><span class="nu0">1</span><span class="sy0">,</span><span class="nu0">7</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">seconds</span><span class="br0">&#40;</span><span class="nu0">100</span><span class="sy0">,</span><span class="nu0">200</span><span class="sy0">,</span><span class="nu0">400</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">Array
(
    [0] =&gt; 0
    [1] =&gt; 1
    [2] =&gt; 2
    [3] =&gt; 3
    [4] =&gt; 4
    [5] =&gt; 5
    [6] =&gt; 6
    [7] =&gt; 7
    [8] =&gt; 8
    [9] =&gt; 9
    [10] =&gt; 10
    [11] =&gt; 11
    [12] =&gt; 12
    [13] =&gt; 13
    [14] =&gt; 14
    [15] =&gt; 15
    [16] =&gt; 16
    [17] =&gt; 17
    [18] =&gt; 18
    [19] =&gt; 19
    [20] =&gt; 20
    [21] =&gt; 21
    [22] =&gt; 22
    [23] =&gt; 23
    [24] =&gt; 24
    [25] =&gt; 25
    [26] =&gt; 26
    [27] =&gt; 27
    [28] =&gt; 28
    [29] =&gt; 29
    [30] =&gt; 30
    [31] =&gt; 31
    [32] =&gt; 32
    [33] =&gt; 33
    [34] =&gt; 34
    [35] =&gt; 35
    [36] =&gt; 36
    [37] =&gt; 37
    [38] =&gt; 38
    [39] =&gt; 39
    [40] =&gt; 40
    [41] =&gt; 41
    [42] =&gt; 42
    [43] =&gt; 43
    [44] =&gt; 44
    [45] =&gt; 45
    [46] =&gt; 46
    [47] =&gt; 47
    [48] =&gt; 48
    [49] =&gt; 49
    [50] =&gt; 50
    [51] =&gt; 51
    [52] =&gt; 52
    [53] =&gt; 53
    [54] =&gt; 54
    [55] =&gt; 55
    [56] =&gt; 56
    [57] =&gt; 57
    [58] =&gt; 58
    [59] =&gt; 59
)
&nbsp;
Array
(
    [1] =&gt; 1
    [3] =&gt; 3
    [5] =&gt; 5
)
&nbsp;
Array
(
    [200] =&gt; 200
    [300] =&gt; 300
)</pre>
</div>

<h3><a name="minutes" id="minutes">minutes()</a></h3>
<div class="level3">

<p>
Please see <span class="curid"><a href="date.php#seconds" class="wikilink1" title="helpers:date">seconds</a></span>.
</p>

</div>

<h3><a name="hours" id="hours">hours()</a></h3>
<div class="level3">

<p>
&#039;hours&#039; counts the number of hours there are left in a day or from a specific start point.
</p>

<p>
The three arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [int] step (count by) – default = 1</div>
</li>
<li class="level1"><div class="li"> [boolean] 24-hour time? – default = FALSE</div>
</li>
<li class="level1"><div class="li"> [int] start hour – default = 1</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Please note that the print() statements are for display purposes only</span>
<span class="co1">// This example ran at 6:10PM EST</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">hours</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">hours</span><span class="br0">&#40;</span><span class="nu0">1</span><span class="sy0">,</span> <span class="kw2">TRUE</span><span class="sy0">,</span> <span class="nu0">9</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">hours</span><span class="br0">&#40;</span><span class="nu0">1</span><span class="sy0">,</span> <span class="kw2">TRUE</span><span class="sy0">,</span> <span class="nu0">22</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">hours</span><span class="br0">&#40;</span><span class="nu0">1</span><span class="sy0">,</span> <span class="kw2">TRUE</span><span class="sy0">,</span> <a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="br0">&#40;</span><span class="st0">'g'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// 24-hour format of an hour without leading zeros</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">Array
(
    [1] =&gt; 1
    [2] =&gt; 2
    [3] =&gt; 3
    [4] =&gt; 4
    [5] =&gt; 5
    [6] =&gt; 6
    [7] =&gt; 7
    [8] =&gt; 8
    [9] =&gt; 9
    [10] =&gt; 10
    [11] =&gt; 11
    [12] =&gt; 12
)
&nbsp;
Array
(
    [9] =&gt; 9
    [10] =&gt; 10
    [11] =&gt; 11
    [12] =&gt; 12
    [13] =&gt; 13
    [14] =&gt; 14
    [15] =&gt; 15
    [16] =&gt; 16
    [17] =&gt; 17
    [18] =&gt; 18
    [19] =&gt; 19
    [20] =&gt; 20
    [21] =&gt; 21
    [22] =&gt; 22
    [23] =&gt; 23
)
&nbsp;
Array
(
    [22] =&gt; 22
    [23] =&gt; 23
)
&nbsp;
Array
(
    [18] =&gt; 18
    [19] =&gt; 19
    [20] =&gt; 20
    [21] =&gt; 21
    [22] =&gt; 22
    [23] =&gt; 23
)</pre>
</div>

<h3><a name="ampm" id="ampm">ampm()</a></h3>
<div class="level3">

<p>
&#039;ampm&#039; calculates whether the supplied integer makes the hour AM or PM.
</p>

<p>
The one argument is:
</p>
<ul>
<li class="level1"><div class="li"> [int] hour to calculate</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Please note that the print() statements are for display only</span>
<span class="co1">// This example ran at 5:45PM EST</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">ampm</span><span class="br0">&#40;</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">ampm</span><span class="br0">&#40;</span><span class="nu0">13</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">ampm</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="br0">&#40;</span><span class="st0">'G'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// 24-hour format of an hour without leading zeros</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">AM
PM
PM</pre>
</div>

<h3><a name="days" id="days">days()</a></h3>
<div class="level3">

<p>
&#039;days&#039; counts the number of days there are in a specific month of a specific year.
</p>

<p>
The two arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [int] month (1-12)</div>
</li>
<li class="level1"><div class="li"> [int] year – default: current year</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Please note that the print() statement is for display purposes only</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">days</span><span class="br0">&#40;</span><span class="nu0">5</span><span class="sy0">,</span><span class="nu0">2007</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">Array
(
    [1] =&gt; 1
    [2] =&gt; 2
    [3] =&gt; 3
    [4] =&gt; 4
    [5] =&gt; 5
    [6] =&gt; 6
    [7] =&gt; 7
    [8] =&gt; 8
    [9] =&gt; 9
    [10] =&gt; 10
    [11] =&gt; 11
    [12] =&gt; 12
    [13] =&gt; 13
    [14] =&gt; 14
    [15] =&gt; 15
    [16] =&gt; 16
    [17] =&gt; 17
    [18] =&gt; 18
    [19] =&gt; 19
    [20] =&gt; 20
    [21] =&gt; 21
    [22] =&gt; 22
    [23] =&gt; 23
    [24] =&gt; 24
    [25] =&gt; 25
    [26] =&gt; 26
    [27] =&gt; 27
    [28] =&gt; 28
    [29] =&gt; 29
    [30] =&gt; 30
    [31] =&gt; 31
)</pre>
</div>

<h3><a name="months" id="months">months()</a></h3>
<div class="level3">

<p>
&#039;months&#039; returns an mirrored array with the month-numbers of the year.
</p>

<p>
<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Please note that the print() statement is for display purposes only</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">months</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">Array
(
    [1] =&gt; 1
    [2] =&gt; 2
    [3] =&gt; 3
    [4] =&gt; 4
    [5] =&gt; 5
    [6] =&gt; 6
    [7] =&gt; 7
    [8] =&gt; 8
    [9] =&gt; 9
    [10] =&gt; 10
    [11] =&gt; 11
    [12] =&gt; 12
)</pre>
</div>

<h3><a name="years" id="years">years()</a></h3>
<div class="level3">

<p>
&#039;years&#039; returns an array with the years between the specified years.
</p>

<p>
The two arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [int] start year– default = current year - 5</div>
</li>
<li class="level1"><div class="li"> [int] end year – default = current year + 5 </div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Please note that the print() statements are for display purposes only</span>
<span class="co1">// This example ran in 2007</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">years</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">years</span><span class="br0">&#40;</span><span class="nu0">1998</span><span class="sy0">,</span><span class="nu0">2002</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">Array
(
    [2002] =&gt; 2002
    [2003] =&gt; 2003
    [2004] =&gt; 2004
    [2005] =&gt; 2005
    [2006] =&gt; 2006
    [2007] =&gt; 2007
    [2008] =&gt; 2008
    [2009] =&gt; 2009
    [2010] =&gt; 2010
    [2011] =&gt; 2011
    [2012] =&gt; 2012
)
&nbsp;
Array
(
    [1998] =&gt; 1998
    [1999] =&gt; 1999
    [2000] =&gt; 2000
    [2001] =&gt; 2001
    [2002] =&gt; 2002
)</pre>
</div>

<h3><a name="timespan" id="timespan">timespan()</a></h3>
<div class="level3">

<p>
&#039;timespan&#039; returns the time between two timestamps in a human readable format.
</p>

<p>
The arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [int] timestamp 1 </div>
</li>
<li class="level1"><div class="li"> [int] timestamp 2 – default: current timestamp</div>
</li>
<li class="level1"><div class="li"> [string] format – default: &#039;years,months,weeks,days,hours,minutes,seconds&#039;</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Please note that the print() statements are for display purposes only</span>
<span class="co1">// This example ran in 2007</span>
<span class="re1">$timestamp</span> <span class="sy0">=</span> <a href="http://www.php.net/time"><span class="kw3">time</span></a><span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="sy0">-</span> <span class="br0">&#40;</span><span class="nu0">60</span><span class="sy0">*</span><span class="nu0">60</span><span class="sy0">*</span><span class="nu0">24</span><span class="sy0">*</span><span class="nu0">7</span><span class="sy0">*</span><span class="nu0">31</span><span class="sy0">*</span><span class="nu0">3</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// timestamp of 651 days ago</span>
<span class="re1">$timestamp2</span> <span class="sy0">=</span> <a href="http://www.php.net/time"><span class="kw3">time</span></a><span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="sy0">-</span> <span class="br0">&#40;</span><span class="nu0">60</span><span class="sy0">*</span><span class="nu0">60</span><span class="sy0">*</span><span class="nu0">24</span><span class="sy0">*</span><span class="nu0">7</span><span class="sy0">*</span><span class="nu0">50</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// timestamp of 350 days ago</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">timespan</span><span class="br0">&#40;</span><span class="re1">$timestamp</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">timespan</span><span class="br0">&#40;</span><span class="re1">$timestamp</span><span class="sy0">,</span> <a href="http://www.php.net/time"><span class="kw3">time</span></a><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">,</span> <span class="st0">'years,days'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">timespan</span><span class="br0">&#40;</span><span class="re1">$timestamp</span><span class="sy0">,</span> <span class="re1">$timestamp2</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> <span class="st0">'minutes: '</span><span class="sy0">.</span>Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">timespan</span><span class="br0">&#40;</span><span class="re1">$timestamp</span><span class="sy0">,</span> <a href="http://www.php.net/time"><span class="kw3">time</span></a><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">,</span> <span class="st0">'minutes'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">Array
(
    [years] =&gt; 1
    [months] =&gt; 9
    [weeks] =&gt; 2
    [days] =&gt; 2
    [hours] =&gt; 0
    [minutes] =&gt; 0
    [seconds] =&gt; 0
)
&nbsp;
Array
(
    [years] =&gt; 1
    [days] =&gt; 286
)
&nbsp;
Array
(
    [years] =&gt; 0
    [months] =&gt; 10
    [weeks] =&gt; 0
    [days] =&gt; 1
    [hours] =&gt; 0
    [minutes] =&gt; 0
    [seconds] =&gt; 0
)
&nbsp;
minutes:
&nbsp;
937440</pre>
</div>

<h3><a name="adjust" id="adjust">adjust()</a></h3>
<div class="level3">

<p>
&#039;adjust&#039; converts an hour integer into 24-hour format from a non-24-hour format. 
</p>

<p>
The two arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [int] hour in non-24-hour format</div>
</li>
<li class="level1"><div class="li"> [string] AM or PM</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Please note that the print() statements are for display only</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="sy0">::</span><span class="me2">adjust</span><span class="br0">&#40;</span><span class="nu0">11</span><span class="sy0">,</span> <span class="st0">'PM'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">23</pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer7a71.gif?id=helpers%3Adate&amp;1324588203" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/helpers/date by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


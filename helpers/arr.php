<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/helpers/arr by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    helpers:arr    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-02-10T16:31:31-0600" />
<meta name="keywords" content="helpers,arr" />
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
<li class="level1"><div class="li"><span class="li"><a href="#array_helper" class="toc">Array Helper</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#rotate" class="toc">rotate()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#remove" class="toc">remove()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#extract" class="toc">extract()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#binary_search" class="toc">binary_search()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#range" class="toc">range()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#merge" class="toc">merge()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#overwrite" class="toc">overwrite()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#map_recursive" class="toc">map_recursive()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#unshift_assoc" class="toc">unshift_assoc()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#to_object" class="toc">to_object()</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">Fill ending methods - verify unshift_assoc example - review to_object method </td>
	</tr>
</table>



<h1><a name="array_helper" id="array_helper">Array Helper</a></h1>
<div class="level1">

<p>

The Array helper assists in transforming arrays. 
<span style="color:red;">Warning, in order to use it, class name is 'arr' instead of 'array'.</span>
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="rotate" id="rotate">rotate()</a></h3>
<div class="level3">

<p>
&#039;rotate&#039; rotates an array (two-dimensional) matrix clockwise.
Example, turns a 2&times;3 array into a 3&times;2 array.
</p>

<p>
The two arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [array] The array you want to rotate</div>
</li>
<li class="level1"><div class="li"> [boolean] Do you want to keep the same keys in the rotated array? – TRUE by default</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Please note that the print() statements are for display only</span>
<span class="re1">$optical_discs</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
			<span class="br0">&#40;</span>
				<span class="st0">'CD'</span>  <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'700'</span><span class="sy0">,</span> <span class="st0">'780'</span><span class="br0">&#41;</span><span class="sy0">,</span>
				<span class="st0">'DVD'</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'4700'</span><span class="sy0">,</span><span class="st0">'650'</span><span class="br0">&#41;</span><span class="sy0">,</span>
				<span class="st0">'BD'</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'25000'</span><span class="sy0">,</span><span class="st0">'405'</span><span class="br0">&#41;</span>
			<span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$optical_discs</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$optical_discs</span> <span class="sy0">=</span> arr<span class="sy0">::</span><span class="me2">rotate</span><span class="br0">&#40;</span><span class="re1">$optical_discs</span><span class="sy0">,</span> <span class="kw2">FALSE</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> <span class="br0">&#40;</span><span class="st0">'&lt;br /&gt;&lt;br /&gt;'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$optical_discs</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">Array
(
    [CD] =&gt; Array
        (
            [0] =&gt; 700
            [1] =&gt; 780
        )
&nbsp;
    [DVD] =&gt; Array
        (
            [0] =&gt; 4700
            [1] =&gt; 650
        )
&nbsp;
    [BD] =&gt; Array
        (
            [0] =&gt; 25000
            [1] =&gt; 405
        )
&nbsp;
)
&nbsp;
&nbsp;
Array
(
    [0] =&gt; Array
        (
            [CD] =&gt; 700
            [DVD] =&gt; 4700
            [BD] =&gt; 25000
        )
&nbsp;
    [1] =&gt; Array
        (
            [CD] =&gt; 780
            [DVD] =&gt; 650
            [BD] =&gt; 405
        )
&nbsp;
)</pre>
</div>

<h3><a name="remove" id="remove">remove()</a></h3>
<div class="level3">

<p>
&#039;remove&#039; removes a key from an array and returns it.
</p>

<p>
The two arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [string] The key you want removed from an array</div>
</li>
<li class="level1"><div class="li"> [array] The array you want the key to be removed from</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Please note that the print() statements are for display only</span>
<span class="re1">$optical_discs</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
			<span class="br0">&#40;</span>
				<span class="st0">'CD'</span>  <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'700'</span><span class="sy0">,</span> <span class="st0">'780'</span><span class="br0">&#41;</span><span class="sy0">,</span>
				<span class="st0">'DVD'</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'4700'</span><span class="sy0">,</span><span class="st0">'650'</span><span class="br0">&#41;</span><span class="sy0">,</span>
				<span class="st0">'BD'</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'25000'</span><span class="sy0">,</span><span class="st0">'405'</span><span class="br0">&#41;</span>
			<span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$optical_discs</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$cd</span> <span class="sy0">=</span> arr<span class="sy0">::</span><span class="me2">remove</span><span class="br0">&#40;</span><span class="st0">'CD'</span><span class="sy0">,</span> <span class="re1">$optical_discs</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> <span class="br0">&#40;</span><span class="st0">'&lt;br /&gt;'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$cd</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> <span class="br0">&#40;</span><span class="st0">'&lt;br /&gt;'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$optical_discs</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">Array
(
    [CD] =&gt; Array
        (
            [0] =&gt; 700
            [1] =&gt; 780
        )
&nbsp;
    [DVD] =&gt; Array
        (
            [0] =&gt; 4700
            [1] =&gt; 650
        )
&nbsp;
    [BD] =&gt; Array
        (
            [0] =&gt; 25000
            [1] =&gt; 405
        )
&nbsp;
)
&nbsp;
&nbsp;
Array
(
    [0] =&gt; 700
    [1] =&gt; 780
)
&nbsp;
&nbsp;
Array
(
    [DVD] =&gt; Array
        (
            [0] =&gt; 4700
            [1] =&gt; 650
        )
&nbsp;
    [BD] =&gt; Array
        (
            [0] =&gt; 25000
            [1] =&gt; 405
        )
&nbsp;
)</pre>
</div>

<h3><a name="extract" id="extract">extract()</a></h3>
<div class="level3">

<p>
&#039;extract&#039; extract ones or more keys from an array. Keys that do not exist in the search array will be NULL in the extracted data.
</p>

<p>

The two arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [array] The array you want the key to be extracted from</div>
</li>
<li class="level1"><div class="li"> [string] The key you want extracted from an array</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"> <span class="re1">$optical_discs</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
			<span class="br0">&#40;</span>
				<span class="st0">'CD'</span>  <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'700'</span><span class="sy0">,</span> <span class="st0">'780'</span><span class="br0">&#41;</span><span class="sy0">,</span>
				<span class="st0">'DVD'</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'4700'</span><span class="sy0">,</span><span class="st0">'650'</span><span class="br0">&#41;</span><span class="sy0">,</span>
				<span class="st0">'BD'</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'25000'</span><span class="sy0">,</span><span class="st0">'405'</span><span class="br0">&#41;</span>
			<span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$optical_discs</span> <span class="sy0">=</span> arr<span class="sy0">::</span><a href="http://www.php.net/extract"><span class="kw3">extract</span></a><span class="br0">&#40;</span><span class="re1">$optical_discs</span><span class="sy0">,</span> <span class="st0">'DVD'</span><span class="sy0">,</span> <span class="st0">'Bluray'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$optical_discs</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

<strong>Output:</strong>

</p>
<pre class="code php"><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#41;</span> <a href="http://www.php.net/array"><span class="kw3">Array</span></a>
<span class="br0">&#40;</span>
    <span class="br0">&#91;</span>DVD<span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">Array</span></a>
        <span class="br0">&#40;</span>
            <span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="nu0">4700</span>
            <span class="br0">&#91;</span><span class="nu0">1</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="nu0">650</span>
        <span class="br0">&#41;</span>
&nbsp;
    <span class="br0">&#91;</span>Bluray<span class="br0">&#93;</span> <span class="sy0">=&gt;</span>  <span class="co1">//NULL</span>
<span class="br0">&#41;</span></pre>
</div>

<h3><a name="binary_search" id="binary_search">binary_search()</a></h3>
<div class="level3">

<p>

&#039;binary_search&#039; performs a basic binary search on an array. By default, it returns the key of the array value it finds.
The four arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [mixed] The value you want to find.</div>
</li>
<li class="level1"><div class="li"> [array] The sorted array you want to search in</div>
</li>
<li class="level1"><div class="li"> [boolean] Return the nearest value, or simply return FALSE (the default)</div>
</li>
<li class="level1"><div class="li"> [boolean] Sort the array before searching</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="re1">$my_array</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'10'</span><span class="sy0">,</span> <span class="st0">'20'</span><span class="sy0">,</span> <span class="st0">'30'</span><span class="sy0">,</span> <span class="st0">'50'</span><span class="sy0">,</span> <span class="st0">'80'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> arr<span class="sy0">::</span><span class="me2">binary_search</span><span class="br0">&#40;</span><span class="st0">'50'</span><span class="sy0">,</span> <span class="re1">$my_array</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// 3</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> arr<span class="sy0">::</span><span class="me2">binary_search</span><span class="br0">&#40;</span><span class="st0">'45'</span><span class="sy0">,</span> <span class="re1">$my_array</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// FALSE (not found)</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> arr<span class="sy0">::</span><span class="me2">binary_search</span><span class="br0">&#40;</span><span class="st0">'45'</span><span class="sy0">,</span> <span class="re1">$my_array</span><span class="sy0">,</span> <span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// 3</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> arr<span class="sy0">::</span><span class="me2">binary_search</span><span class="br0">&#40;</span><span class="st0">'35'</span><span class="sy0">,</span> <span class="re1">$my_array</span><span class="sy0">,</span> <span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// 2</span></pre>
</div>

<h3><a name="range" id="range">range()</a></h3>
<div class="level3">

<p>
&#039;range&#039; fills an array with a range of numbers.
</p>

<p>
The two arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [integer] Stepping</div>
</li>
<li class="level1"><div class="li"> [integer] Ending Number</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span>arr<span class="sy0">::</span><a href="http://www.php.net/range"><span class="kw3">range</span></a><span class="br0">&#40;</span><span class="nu0">17</span><span class="sy0">,</span> <span class="nu0">150</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
<strong>Output:</strong>

</p>
<pre class="code php"><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#41;</span> <a href="http://www.php.net/array"><span class="kw3">Array</span></a>
<span class="br0">&#40;</span>
    <span class="br0">&#91;</span><span class="nu0">17</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="nu0">17</span>
    <span class="br0">&#91;</span><span class="nu0">34</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="nu0">34</span>
    <span class="br0">&#91;</span><span class="nu0">51</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="nu0">51</span>
    <span class="br0">&#91;</span><span class="nu0">68</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="nu0">68</span>
    <span class="br0">&#91;</span><span class="nu0">85</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="nu0">85</span>
    <span class="br0">&#91;</span><span class="nu0">102</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="nu0">102</span>
    <span class="br0">&#91;</span><span class="nu0">119</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="nu0">119</span>
    <span class="br0">&#91;</span><span class="nu0">136</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="nu0">136</span>
<span class="br0">&#41;</span></pre>
</div>

<h3><a name="merge" id="merge">merge()</a></h3>
<div class="level3">

<p>

Emulates array_merge_recursive, but appends numeric keys and replaces associative keys, instead of appending all keys. It takes:

</p>
<ul>
<li class="level1"><div class="li"> <strong>[array]</strong> any number of arrays</div>
</li>
<li class="level1"><div class="li"> returns <strong>[array]</strong> the merged array</div>
</li>
</ul>

<p>

<strong> Example: </strong>
</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span>arr<span class="sy0">::</span><span class="me2">merge</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'a'</span><span class="sy0">,</span> <span class="st0">'b'</span><span class="br0">&#41;</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'c'</span><span class="sy0">,</span> <span class="st0">'d'</span><span class="br0">&#41;</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'e'</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'f'</span><span class="sy0">,</span> <span class="st0">'g'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result as:
</p>
<pre class="code php"><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#41;</span> <a href="http://www.php.net/array"><span class="kw3">Array</span></a>
<span class="br0">&#40;</span>
    <span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> a
    <span class="br0">&#91;</span><span class="nu0">1</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> b
    <span class="br0">&#91;</span><span class="nu0">2</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> c
    <span class="br0">&#91;</span><span class="nu0">3</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> d
    <span class="br0">&#91;</span>e<span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">Array</span></a>
        <span class="br0">&#40;</span>
            <span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> f
            <span class="br0">&#91;</span><span class="nu0">1</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> g
        <span class="br0">&#41;</span>
&nbsp;
<span class="br0">&#41;</span></pre>
</div>

<h3><a name="overwrite" id="overwrite">overwrite()</a></h3>
<div class="level3">

<p>
&#039;overwrite&#039; overwrites an array with values from input array(s). Note that non-existing keys will not be appended. It takes:

</p>
<ul>
<li class="level1"><div class="li"> [array] key array</div>
</li>
<li class="level1"><div class="li"> [array] input array(s) that will overwrite key array values</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="re1">$array1</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'fruit1'</span> <span class="sy0">=&gt;</span> <span class="st0">'apple'</span><span class="sy0">,</span> <span class="st0">'fruit2'</span> <span class="sy0">=&gt;</span> <span class="st0">'mango'</span><span class="sy0">,</span> <span class="st0">'fruit3'</span> <span class="sy0">=&gt;</span> <span class="st0">'pineapple'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$array2</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'fruit1'</span> <span class="sy0">=&gt;</span> <span class="st0">'strawberry'</span><span class="sy0">,</span> <span class="st0">'fruit4'</span> <span class="sy0">=&gt;</span> <span class="st0">'coconut'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span>arr<span class="sy0">::</span><span class="me2">overwrite</span><span class="br0">&#40;</span><span class="re1">$array1</span><span class="sy0">,</span> <span class="re1">$array2</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
<strong>Output:</strong>

</p>
<pre class="code php"><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#41;</span> <a href="http://www.php.net/array"><span class="kw3">Array</span></a>
<span class="br0">&#40;</span>
    <span class="br0">&#91;</span>fruit1<span class="br0">&#93;</span> <span class="sy0">=&gt;</span> strawberry
    <span class="br0">&#91;</span>fruit2<span class="br0">&#93;</span> <span class="sy0">=&gt;</span> mango
    <span class="br0">&#91;</span>fruit3<span class="br0">&#93;</span> <span class="sy0">=&gt;</span> pineapple
<span class="br0">&#41;</span></pre>
</div>

<h3><a name="map_recursive" id="map_recursive">map_recursive()</a></h3>
<div class="level3">

<p>

<code>map_recursive($callback, array $array)</code> has been created because <acronym title="Hypertext Preprocessor">PHP</acronym> does not have this function, and array_walk_recursive creates references in arrays and is not truly recursive. It takes:

</p>
<ul>
<li class="level1"><div class="li"> <strong>[array]</strong> <code>$callback</code> a valid callback to apply to each member of the array</div>
</li>
<li class="level1"><div class="li"> <strong>[array]</strong> <code>$array</code> array to map to</div>
</li>
<li class="level1"><div class="li"> returns <strong>[array]</strong> the mapped array</div>
</li>
</ul>

<p>

<strong> Example : </strong>
</p>
<pre class="code php"><span class="kw2">public</span> <span class="kw2">function</span> add<span class="br0">&#40;</span><span class="re1">$value</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
    <span class="kw1">return</span> <span class="re1">$value</span> <span class="sy0">+</span> <span class="nu0">1</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span>arr<span class="sy0">::</span><span class="me2">map_recursive</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">,</span> <span class="st0">'add'</span><span class="br0">&#41;</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'a'</span> <span class="sy0">=&gt;</span> <span class="nu0">1</span><span class="sy0">,</span> <span class="st0">'b'</span> <span class="sy0">=&gt;</span> <span class="nu0">2</span><span class="sy0">,</span> <span class="st0">'c'</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="nu0">3</span><span class="sy0">,</span> <span class="nu0">4</span><span class="br0">&#41;</span><span class="sy0">,</span> <span class="st0">'d'</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'e'</span> <span class="sy0">=&gt;</span> <span class="nu0">5</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result as:
</p>
<pre class="code php"><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#41;</span> <a href="http://www.php.net/array"><span class="kw3">Array</span></a>
<span class="br0">&#40;</span>
    <span class="br0">&#91;</span>a<span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="nu0">2</span>
    <span class="br0">&#91;</span>b<span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="nu0">3</span>
    <span class="br0">&#91;</span>c<span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">Array</span></a>
        <span class="br0">&#40;</span>
            <span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="nu0">4</span>
            <span class="br0">&#91;</span><span class="nu0">1</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="nu0">5</span>
        <span class="br0">&#41;</span>
&nbsp;
    <span class="br0">&#91;</span>d<span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">Array</span></a>
        <span class="br0">&#40;</span>
            <span class="br0">&#91;</span>e<span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="nu0">6</span>
        <span class="br0">&#41;</span>
<span class="br0">&#41;</span></pre>
</div>

<h3><a name="unshift_assoc" id="unshift_assoc">unshift_assoc()</a></h3>
<div class="level3">

<p>
<code>unshift_assoc</code> has been created because <acronym title="Hypertext Preprocessor">PHP</acronym> does not have this function. It just unshift an association in an associative array. It takes:

</p>
<ul>
<li class="level1"><div class="li"> [array] array to unshift</div>
</li>
<li class="level1"><div class="li"> [string] key to unshift</div>
</li>
<li class="level1"><div class="li"> [mixed] value to unshift</div>
</li>
</ul>

<p>

<strong>Example</strong>

</p>
<pre class="code php"><span class="re1">$fruits</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'fruit1'</span> <span class="sy0">=&gt;</span> <span class="st0">'apple'</span><span class="sy0">,</span> <span class="st0">'fruit2'</span> <span class="sy0">=&gt;</span> <span class="st0">'mango'</span><span class="sy0">,</span> <span class="st0">'fruit3'</span> <span class="sy0">=&gt;</span> <span class="st0">'pineapple'</span><span class="br0">&#41;</span><span class="sy0">;</span>
arr<span class="sy0">::</span><span class="me2">unshift_assoc</span><span class="br0">&#40;</span><span class="re1">$fruits</span><span class="sy0">,</span> <span class="st0">'fruit1'</span><span class="sy0">,</span> <span class="st0">'strawberry'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$fruits</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
<strong>Output</strong>

</p>
<pre class="code php"><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#41;</span> <a href="http://www.php.net/array"><span class="kw3">Array</span></a>
<span class="br0">&#40;</span>
    <span class="br0">&#91;</span>fruit1<span class="br0">&#93;</span> <span class="sy0">=&gt;</span> strawberry
    <span class="br0">&#91;</span>fruit2<span class="br0">&#93;</span> <span class="sy0">=&gt;</span> mango
    <span class="br0">&#91;</span>fruit3<span class="br0">&#93;</span> <span class="sy0">=&gt;</span> pineapple
<span class="br0">&#41;</span></pre>
</div>

<h3><a name="to_object" id="to_object">to_object()</a></h3>
<div class="level3">

<p>
<code>to_object(array $array, $class = &#039;stdClass&#039;) </code> converts an array to an object. This method supports multi level arrays. It takes:

</p>
<ul>
<li class="level1"><div class="li"> <strong>[array]</strong> <em>$array</em> array to convert</div>
</li>
<li class="level1"><div class="li"> <strong>[string]</strong> <em>$class</em> the base class (default &#039;stdClass&#039;)</div>
</li>
</ul>

<p>

<strong>Note</strong>: For 1-level arrays, use Typecasting <code>$object = (object) $array;</code>
</p>

<p>
<strong>Example</strong>

</p>
<pre class="code php"><span class="re1">$array</span> <span class="sy0">=</span> arr<span class="sy0">::</span><span class="me2">to_object</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'test'</span> <span class="sy0">=&gt;</span> <span class="nu0">13</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> <span class="re1">$array</span> <span class="sy0">-&gt;</span><span class="me1">test</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$array</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
<strong>Output</strong>

</p>
<pre class="code php"><span class="nu0">13</span>
<span class="br0">&#40;</span>object<span class="br0">&#41;</span> stdClass Object
<span class="br0">&#40;</span>
    <span class="br0">&#91;</span>test<span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="nu0">13</span>
<span class="br0">&#41;</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexerc40f.gif?id=helpers%3Aarr&amp;1324588202" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/helpers/arr by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


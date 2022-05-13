<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/uri by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:uri    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2008-08-11T06:48:32-0500" />
<meta name="keywords" content="libraries,uri" />
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
<li class="level1"><div class="li"><span class="li"><a href="#uri_library" class="toc">URI Library</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#segment" class="toc">segment()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#rsegment" class="toc">rsegment()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#segment_array" class="toc">segment_array()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#total_segments" class="toc">total_segments()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#string" class="toc">string()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#last_segment" class="toc">last_segment()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#argument" class="toc">argument()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#argument_array" class="toc">argument_array()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#total_arguments" class="toc">total_arguments()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#build_array" class="toc">build_array()</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">Needs work on code examples</td>
	</tr>
</table>



<h1><a name="uri_library" id="uri_library">URI Library</a></h1>
<div class="level1">

<p>

The <acronym title="Uniform Resource Identifier">URI</acronym> class provides the methods for working with <acronym title="Uniform Resource Identifier">URI</acronym>&#039;s and <acronym title="Uniform Resource Identifier">URI</acronym> segments. If you use routing it also has methods to work with rerouted <acronym title="Uniform Resource Identifier">URI</acronym>&#039;s.
</p>


<div class='box red left' style='width: 50%;'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<p class='box_title'>Note:</p>
<div class='box_content'><p>
<strong>This library is initialized automatically by Kohana. No need to do it yourself</strong>
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="segment" id="segment">segment()</a></h3>
<div class="level3">

<p>

<code>segment($index = 1, $default = FALSE)</code> retrieves a specific <acronym title="Uniform Resource Identifier">URI</acronym> segment. Returns $default when the segment does not exist.
</p>
<pre class="code php"><span class="co1">//url: http://www.example.com/index.php/article/paris/hilton/</span></pre>
<p>
The segments would be:
</p>
<ol>
<li class="level1"><div class="li"> article</div>
</li>
<li class="level1"><div class="li"> paris</div>
</li>
<li class="level1"><div class="li"> hilton</div>
</li>
</ol>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">uri</span><span class="sy0">-&gt;</span><span class="me1">segment</span><span class="br0">&#40;</span><span class="nu0">3</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// Returns 'hilton'</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">uri</span><span class="sy0">-&gt;</span><span class="me1">segment</span><span class="br0">&#40;</span><span class="nu0">4</span><span class="sy0">,</span> <span class="st0">'spears'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// Returns 'spears'</span></pre>
<p>
<strong>Note:</strong> this method also accepts strings. When a string is given as first argument, it will return the segment following the string.
</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">uri</span><span class="sy0">-&gt;</span><span class="me1">segment</span><span class="br0">&#40;</span><span class="st0">'article'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// Returns 'paris'</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">uri</span><span class="sy0">-&gt;</span><span class="me1">segment</span><span class="br0">&#40;</span><span class="st0">'paris'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// Returns 'hilton'</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">uri</span><span class="sy0">-&gt;</span><span class="me1">segment</span><span class="br0">&#40;</span><span class="st0">'hilton'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// Returns FALSE</span></pre>
</div>

<h3><a name="rsegment" id="rsegment">rsegment()</a></h3>
<div class="level3">

<p>

Identical to <code>segment()</code> except that it uses the rerouted <acronym title="Uniform Resource Identifier">URI</acronym> to retrieve the segments from.
</p>

</div>

<h3><a name="segment_array" id="segment_array">segment_array()</a></h3>
<div class="level3">

<p>

<code>segment_array($offset,$associative)</code> returns an array of all the <acronym title="Uniform Resource Identifier">URI</acronym> segments
</p>

</div>

<h3><a name="total_segments" id="total_segments">total_segments()</a></h3>
<div class="level3">

<p>

<code>total_segments()</code> returns the number of segments
</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">uri</span><span class="sy0">-&gt;</span><span class="me1">total_segments</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns 3</span></pre>
</div>

<h3><a name="string" id="string">string()</a></h3>
<div class="level3">

<p>

<code>string()</code> returns the entire <acronym title="Uniform Resource Identifier">URI</acronym> as a string
</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">uri</span><span class="sy0">-&gt;</span><span class="me1">string</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// returns: article/paris/hilton/</span></pre>
</div>

<h3><a name="last_segment" id="last_segment">last_segment()</a></h3>
<div class="level3">

<p>

<code>last_segment()</code> returns the last segment of an <acronym title="Uniform Resource Identifier">URI</acronym>
</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">uri</span><span class="sy0">-&gt;</span><span class="me1">last_segment</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// returns: hilton</span></pre>
</div>

<h3><a name="argument" id="argument">argument()</a></h3>
<div class="level3">

<p>

<code>argument()</code> returns the requested arguments. This differs from segments as it will only look at the arguments given and skip the controller and method segment.
</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">uri</span><span class="sy0">-&gt;</span><span class="me1">argument</span><span class="br0">&#40;</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// returns: hilton</span></pre>
</div>

<h3><a name="argument_array" id="argument_array">argument_array()</a></h3>
<div class="level3">

<p>

<code>argument_array()</code> returns an array containing all arguments
</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">uri</span><span class="sy0">-&gt;</span><span class="me1">argument_array</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// returns: array( 'hilton' )</span></pre>
</div>

<h3><a name="total_arguments" id="total_arguments">total_arguments()</a></h3>
<div class="level3">

<p>

<code>total_arguments()</code> returns the total number of arguments.
</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">uri</span><span class="sy0">-&gt;</span><span class="me1">total_arguments</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// returns: 1</span></pre>
</div>

<h3><a name="build_array" id="build_array">build_array()</a></h3>
<div class="level3">

<p>

<code>build_array($array, $offset = 0, $associative = FALSE)</code> creates a simple or associative array from an array and an offset. It takes

</p>
<ul>
<li class="level1"><div class="li"> [array] the array to rebuild</div>
</li>
<li class="level1"><div class="li"> [integer] offset to start from</div>
</li>
<li class="level1"><div class="li"> [boolean] create an associative array (TRUE or FALSE, defaults to FALSE)</div>
</li>
</ul>

<p>
Returns the corresponding array starting from the defined offset.
</p>

<p>
<strong> Example </strong>
</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">uri</span><span class="sy0">-&gt;</span><span class="me1">build_array</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'apple'</span><span class="sy0">,</span> <span class="st0">'mango'</span><span class="sy0">,</span> <span class="st0">'pineapple'</span><span class="br0">&#41;</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">uri</span><span class="sy0">-&gt;</span><span class="me1">build_array</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'fruit1'</span><span class="sy0">,</span> <span class="st0">'apple'</span><span class="sy0">,</span> <span class="st0">'fruit2'</span><span class="sy0">,</span> <span class="st0">'mango'</span><span class="sy0">,</span> <span class="st0">'fruit3'</span><span class="sy0">,</span> <span class="st0">'pineapple'</span><span class="br0">&#41;</span><span class="sy0">,</span> <span class="nu0">2</span><span class="sy0">,</span> <span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will return: 
</p>
<pre class="code html4strict">Array
(
    [2] =&gt; mango
    [3] =&gt; pineapple
)
&nbsp;
Array
(
    [fruit2] =&gt; mango
    [fruit3] =&gt; pineapple
)</pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexera04d.gif?id=libraries%3Auri&amp;1324588201" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/uri by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


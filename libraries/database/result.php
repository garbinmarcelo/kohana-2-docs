<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/database/result by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:15:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:database:result    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-06-20T17:38:43-0500" />
<meta name="keywords" content="libraries,database,result" />
<link rel="stylesheet" media="all" type="text/css" href="../../lib/exe/cssbd55.css?s=all&amp;t=kohana" />
<link rel="stylesheet" media="screen" type="text/css" href="../../lib/exe/css56d3.css?t=kohana" />
<link rel="stylesheet" media="print" type="text/css" href="../../lib/exe/css97ef.css?s=print&amp;t=kohana" />
<script type="text/javascript" charset="utf-8" src="../../lib/exe/jsb5bc.php?edit=0&amp;write=0" ></script>
<link rel="shortcut icon" href="../../lib/tpl/kohana/images/favicon.ico" />
</head>
<body>
<!-- Start Header -->
<div id="header">

<!-- Start Logo -->
<a id="logo" href="/<?php echo explode('/', $_SERVER['REQUEST_URI'])[1]; ?>">
    <img src="./../../lib/images/kohana-logo.png" alt="Kohana" />
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
<li class="level1"><div class="li"><span class="li"><a href="#database_query_result" class="toc">Database Query Result</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#iteration" class="toc">Iteration</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#result" class="toc">result()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#result_array" class="toc">result_array()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#insert_id" class="toc">insert_id()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#count" class="toc">count()</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#moving_the_result_pointer" class="toc">Moving the result pointer</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#next" class="toc">next()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#previous" class="toc">previous()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#rewind" class="toc">rewind()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#valid" class="toc">valid()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#current" class="toc">current()</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">Expand</td>
	</tr>
</table>

<p>

<strong><a href="../database.php" class="wikilink1" title="libraries:database">&lt;&lt; Back to Database Main Page</a></strong>
</p>



<h1><a name="database_query_result" id="database_query_result">Database Query Result</a></h1>
<div class="level1">

<p>

Provides methods for handling database query results. There are several ways to do this.
</p>

</div>

<h2><a name="iteration" id="iteration">Iteration</a></h2>
<div class="level2">

<p>

It is possible to iterate through the rows in a result set using a <code>foreach</code> loop.
</p>
<pre class="code php"><span class="re1">$res</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">query</span><span class="br0">&#40;</span><span class="st0">&quot;SELECT name, email FROM users&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$res</span> <span class="kw1">as</span> <span class="re1">$row</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
   <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;&lt;p&gt;{$row-&gt;name} = {$row-&gt;email}&lt;/p&gt;&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
By default, the rows will be returned in object format, but they can be returned in array format with the <code>$query→result()</code> method.
</p>

<p>
You can also retrieve an individual row:
</p>
<pre class="code php"><span class="re1">$res</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">query</span><span class="br0">&#40;</span><span class="st0">&quot;SELECT name, email FROM users&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$row</span> <span class="sy0">=</span> <span class="re1">$res</span><span class="br0">&#91;</span><span class="nu0">2</span><span class="br0">&#93;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;&lt;p&gt;{$row-&gt;name} = {$row-&gt;email}&lt;/p&gt;&quot;</span><span class="sy0">;</span>
<span class="co1">// third record</span></pre>
</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="result" id="result">result()</a></h3>
<div class="level3">

<p>

$query→result() is available automatically with default values when you execute a database query with <code>$this→db→get()</code> or <code> $this→db→query()</code>. As such, it is generally not needed to call this function unless you want to change the result set for your configuration defaults.
</p>

<p>
If you <strong>do</strong> need to change your defaults, simply run <code>$query→result()</code> with the following parameters:
</p>
<ul>
<li class="level1"><div class="li"> The first parameter is to use Objects (TRUE) or arrays (FALSE) in your result set.</div>
</li>
<li class="level1"><div class="li"> The second parameter is what type of object/array to use: For arrays, you can use MYSQL_ASSOC, MYSQL_NUM, or MYSQL_BOTH. For objects, you can specify a class name, and the library will create the specified object, if it exists, otherwise it will create stdObjects.</div>
</li>
</ul>
<pre class="code php"><span class="re1">$query</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">query</span><span class="br0">&#40;</span><span class="st0">&quot;SELECT `first_name`, `last_name`, `age` FROM `users`&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$query</span> <span class="kw1">as</span> <span class="re1">$row</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
   <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$row</span><span class="sy0">-&gt;</span><span class="me1">first_name</span><span class="sy0">;</span>
   <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$row</span><span class="sy0">-&gt;</span><span class="me1">last_name</span><span class="sy0">;</span>
   <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$row</span><span class="sy0">-&gt;</span><span class="me1">age</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="re1">$query</span><span class="sy0">-&gt;</span><span class="me1">result</span><span class="br0">&#40;</span><span class="kw2">FALSE</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$query</span> <span class="kw1">as</span> <span class="re1">$row</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
   <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$row</span><span class="br0">&#91;</span><span class="st0">'first_name'</span><span class="br0">&#93;</span><span class="sy0">;</span>
   <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$row</span><span class="br0">&#91;</span><span class="st0">'last_name'</span><span class="br0">&#93;</span><span class="sy0">;</span>
   <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$row</span><span class="br0">&#91;</span><span class="st0">'age'</span><span class="br0">&#93;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre><pre class="code php"><span class="kw2">class</span> CircleObject
<span class="br0">&#123;</span>
	<span class="kw2">function</span> area<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="kw1">return</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">radius</span> <span class="sy0">*</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">radius</span> <span class="sy0">*</span> <span class="nu0">3.14</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="sy0">----</span>
&nbsp;
<span class="re1">$query</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">query</span><span class="br0">&#40;</span><span class="st0">&quot;SELECT `radius` FROM `circles`&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$query</span><span class="sy0">-&gt;</span><span class="me1">result</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="sy0">,</span> <span class="st0">'CircleObject'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$query</span> <span class="kw1">as</span> <span class="re1">$row</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
   <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;p&gt;'</span><span class="sy0">.</span><span class="re1">$row</span><span class="sy0">-&gt;</span><span class="me1">area</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="st0">'&lt;/p&gt;'</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
Note that the preferred way to iterate through result sets is with the result object. This is not an array, but an object with an internal pointer to return the current row. If you need a physical array of results, you can use the following method:
</p>

</div>

<h3><a name="result_array" id="result_array">result_array()</a></h3>
<div class="level3">

<p>

<code>$query→result_array()</code> the query result is returned as an array of results. You can then loop through them.
</p>

<p>
The parameters are the same as result().
</p>
<pre class="code php"><span class="re1">$query</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">query</span><span class="br0">&#40;</span><span class="st0">&quot;SELECT `first_name`, `last_name`, `age` FROM `users`&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$query</span><span class="sy0">-&gt;</span><span class="me1">result_array</span><span class="br0">&#40;</span><span class="kw2">FALSE</span><span class="br0">&#41;</span> <span class="kw1">as</span> <span class="re1">$row</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
   <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$row</span><span class="br0">&#91;</span><span class="st0">'first_name'</span><span class="br0">&#93;</span><span class="sy0">;</span>
   <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$row</span><span class="br0">&#91;</span><span class="st0">'last_name'</span><span class="br0">&#93;</span><span class="sy0">;</span>
   <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$row</span><span class="br0">&#91;</span><span class="st0">'age'</span><span class="br0">&#93;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="insert_id" id="insert_id">insert_id()</a></h3>
<div class="level3">

<p>

<code>$query→insert_id()</code> returns the id of an INSERT statement. 
</p>
<pre class="code php"><span class="re1">$query</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">query</span><span class="br0">&#40;</span><span class="st0">&quot;INSERT&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$query</span><span class="sy0">-&gt;</span><span class="me1">insert_id</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// 15</span></pre>
</div>

<h3><a name="count" id="count">count()</a></h3>
<div class="level3">

<p>

<code>$query→count()</code> counts the number of results from a query.
</p>
<pre class="code php"><span class="re1">$query</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">query</span><span class="br0">&#40;</span><span class="st0">&quot;SELECT * FROM table&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$query</span><span class="sy0">-&gt;</span><span class="me1">count</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// 12</span></pre>
<p>
If the query does not return a result set (e.g. UPDATE and DELETE queries), the number of affected rows is returned.

</p>
<pre class="code php"><span class="re1">$query</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">query</span><span class="br0">&#40;</span><span class="st0">&quot;DELETE FROM table WHERE id = 3&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$query</span><span class="sy0">-&gt;</span><span class="me1">count</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// 1</span></pre>
</div>

<h2><a name="moving_the_result_pointer" id="moving_the_result_pointer">Moving the result pointer</a></h2>
<div class="level2">

<p>

You can also manually move the result pointer around in the result object with the following chainable <a href="http://www.php.net/~helly/php/ext/spl/interfaceIterator.php" class="urlextern" title="http://www.php.net/~helly/php/ext/spl/interfaceIterator.php"  rel="nofollow">iterator</a> methods.
</p>

</div>

<h3><a name="next" id="next">next()</a></h3>
<div class="level3">

<p>

Moves the result pointer ahead one.
</p>

</div>

<h3><a name="previous" id="previous">previous()</a></h3>
<div class="level3">

<p>

Moves the result pointer back one.
</p>

</div>

<h3><a name="rewind" id="rewind">rewind()</a></h3>
<div class="level3">

<p>

Moves the result pointer to the beginning.
</p>

</div>

<h3><a name="valid" id="valid">valid()</a></h3>
<div class="level3">

<p>

Determine if the current pointer location is a valid result pointer.
</p>

</div>

<h3><a name="current" id="current">current()</a></h3>
<div class="level3">

<p>

Returns the row of the current pointer position.
</p>
<pre class="code php"><span class="re1">$query</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">select</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">from</span><span class="br0">&#40;</span><span class="re1">$table</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'First:'</span><span class="sy0">.</span>Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$query</span><span class="sy0">-&gt;</span><span class="me1">current</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="st0">'&lt;br /&gt;'</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$query</span><span class="sy0">-&gt;</span><span class="me1">next</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'Second:'</span><span class="sy0">.</span>Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$query</span><span class="sy0">-&gt;</span><span class="me1">current</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="st0">'&lt;br /&gt;'</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$query</span><span class="sy0">-&gt;</span><span class="me1">next</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'Third:'</span><span class="sy0">.</span>Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$query</span><span class="sy0">-&gt;</span><span class="me1">current</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;h3&gt;And we can reset it to the beginning:&lt;/h3&gt;'</span><span class="sy0">;</span>
<span class="re1">$query</span><span class="sy0">-&gt;</span><span class="me1">rewind</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'Rewound:'</span><span class="sy0">.</span>Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$query</span><span class="sy0">-&gt;</span><span class="me1">current</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Chain methods</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$query</span><span class="sy0">-&gt;</span><span class="me1">next</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">next</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">next</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">current</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">title</span><span class="sy0">;</span></pre>
<p>
The above example will print out single rows according to where the result pointer is located.
</p>

<p>

<strong><a href="metadata.php" class="wikilink1" title="libraries:database:metadata">Continue to the next section: Database Metadata &gt;&gt;</a></strong>

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../../lib/exe/indexer41ec.gif?id=libraries%3Adatabase%3Aresult&amp;1324588259" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/database/result by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:15:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


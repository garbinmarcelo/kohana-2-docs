<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/core/view by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    core:view    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-05-21T01:32:13-0500" />
<meta name="keywords" content="core,view" />
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
<li class="level1"><div class="li"><span class="li"><a href="#view_class" class="toc">View Class</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#creating_an_instance" class="toc">Creating an instance</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#setting_data" class="toc">Setting data</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#set" class="toc">set()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#bind" class="toc">bind()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#set_global" class="toc">set_global()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#is_set" class="toc">is_set()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#render" class="toc">render()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#factory" class="toc">factory()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#set_filename" class="toc">set_filename()</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">Fill in empty topics, these should be proper code examples and not repeat general/views</td>
	</tr>
</table>



<h1><a name="view_class" id="view_class">View Class</a></h1>
<div class="level1">

<p>

For a more in depth overview of views see <a href="../general/views.php" class="wikilink1" title="general:views">General/Views</a>.
</p>

</div>

<h2><a name="creating_an_instance" id="creating_an_instance">Creating an instance</a></h2>
<div class="level2">

<p>
Creating an instance of the view class.
</p>
<pre class="code php"><span class="re1">$view</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'welcome'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="setting_data" id="setting_data">Setting data</a></h2>
<div class="level2">

<p>

There are several ways to pass data into your views.
</p>

<p>
Using the View as an object:
</p>
<pre class="code php"><span class="co1">// Load the view as an object</span>
<span class="re1">$view</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'yourview'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Adding variables to the object that will be displayed in the view</span>
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">title</span>   <span class="sy0">=</span> <span class="st0">&quot;Welcome to Kohana !&quot;</span><span class="sy0">;</span>
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">heading</span> <span class="sy0">=</span> <span class="st0">&quot;My Heading&quot;</span><span class="sy0">;</span>
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">content</span> <span class="sy0">=</span> <span class="st0">&quot;My content here.&quot;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">//------- or --------</span>
&nbsp;
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="sy0">,</span> <span class="st0">&quot;Welcome to Kohana !&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><span class="st0">'heading'</span><span class="sy0">,</span> <span class="st0">&quot;My Heading&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><span class="st0">'content'</span><span class="sy0">,</span> <span class="st0">&quot;My content here.&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
You can also supply an array and the keys and values will be treated as variables:
</p>
<pre class="code php"><span class="co1">// Load the view as an object</span>
<span class="re1">$view</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'yourview'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'title'</span> <span class="sy0">=&gt;</span> <span class="st0">&quot;Welcome to Kohana !&quot;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="set" id="set">set()</a></h3>
<div class="level3">

<p>

<code>set()</code> can be used to set a variable in a view. You can also supply an array and the keys and values will be treated as variables. $this→view→your_variable can be used to accomplish the same.
</p>
<pre class="code php"><span class="re1">$view</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'welcome'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="sy0">,</span> <span class="st0">'Elvis lives'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="bind" id="bind">bind()</a></h3>
<div class="level3">

<p>

<code>bind()</code> is like set only the variable is assigned by reference. 
</p>
<pre class="code php"><span class="re1">$view</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'welcome'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$var</span><span class="sy0">=</span><span class="st0">'Some value'</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">bind</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="sy0">,</span> <span class="re1">$var</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$var</span><span class="sy0">=</span><span class="st0">'Another value'</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="kw2">true</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//The 'title' variable will contain 'Another value'</span></pre>
</div>

<h3><a name="set_global" id="set_global">set_global()</a></h3>
<div class="level3">

<p>

<code>set_global()</code> is like set only that the variables set are available throughout all views. This means you can use it with views in views for example. 

</p>
<pre class="code php"><span class="co1">// loading views</span>
<span class="re1">$view</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'page'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">header</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'header'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// setting variables in all views</span>
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">set_global</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="sy0">,</span> <span class="st0">'Title of page'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// set variable $title for example in view header.php</span>
&nbsp;
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="is_set" id="is_set">is_set()</a></h3>
<div class="level3">

<p>

<code>is_set()</code> can be used to check if a variable is already set. You can also supply an array with the keys to check.
</p>
<pre class="code php"><span class="re1">$view</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'welcome'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">if</span><span class="br0">&#40;</span><span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">is_set</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="sy0">,</span> <span class="st0">'OHAI!'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="render" id="render">render()</a></h3>
<div class="level3">

<p>

<code>render()</code> renders the output of the View.
</p>
<pre class="code php"><span class="co1">// render and store, default, no browser output</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">content</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">get_once</span><span class="br0">&#40;</span><span class="st0">'message'</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="re1">$content</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// render output of view to browser</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="factory" id="factory">factory()</a></h3>
<div class="level3">

<p>

This method is static. Parameters are the same as creating a new instance.
</p>

<p>
It creates a View instance and immediately returns it so method chaining is possible. 

</p>
<pre class="code php"><span class="kw2">public</span> <span class="kw2">function</span> _add_breadcrumb<span class="br0">&#40;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <span class="re1">$crumbs</span> <span class="sy0">=</span> View<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'admin/breadcrumb'</span><span class="br0">&#41;</span>
        <span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><span class="st0">'crumbs'</span><span class="sy0">,</span> html<span class="sy0">::</span><span class="me2">breadcrumb</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
        <span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
    <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">content</span> <span class="sy0">=</span> <span class="re1">$crumbs</span><span class="sy0">.</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">content</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="set_filename" id="set_filename">set_filename()</a></h3>
<div class="level3">

<p>
<code>set_filename()</code> sets the name of the file used for the view. 

</p>
<pre class="code php"><span class="re1">$view</span><span class="sy0">=</span><span class="kw2">new</span> View<span class="sy0">;</span>
&nbsp;
<span class="kw1">if</span><span class="br0">&#40;</span>request<span class="sy0">::</span><span class="me2">is_ajax</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="co1">//request helper also exists in 2.2</span>
<span class="br0">&#123;</span>
   <span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">set_filename</span><span class="br0">&#40;</span><span class="st0">'ajax_view'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
<span class="kw1">else</span>
<span class="br0">&#123;</span>
   <span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">set_filename</span><span class="br0">&#40;</span><span class="st0">'html_view'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
<p style="text-align:center">« <a href="utf8.php" class="wikilink1" title="core:utf8">Unicode</a> : Previous</p>

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexercb42.gif?id=core%3Aview&amp;1324588196" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/core/view by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


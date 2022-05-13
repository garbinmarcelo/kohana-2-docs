<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/installation/migration by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    installation:migration    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-03-12T00:01:41-0500" />
<meta name="keywords" content="installation,migration" />
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
<li class="level1"><div class="li"><span class="li"><a href="#migration" class="toc">Migration</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#installation" class="toc">Installation</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#configuration" class="toc">Configuration</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#logging" class="toc">Logging</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#class_names" class="toc">Class Names</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#libraries" class="toc">Libraries</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#base_controllers" class="toc">Base Controllers</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#uri" class="toc">URI</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#other" class="toc">Other</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#helpers" class="toc">Helpers</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#views" class="toc">Views</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#models" class="toc">Models</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">First Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Requires more development</td>
	</tr>
</table>



<h1><a name="migration" id="migration">Migration</a></h1>
<div class="level1">

<p>

Users of Kohana version 1.x (“Blueflame”) or CodeIgniter 1.x migrating to Kohana 2.0 can follow these steps to migrate their application.
</p>

</div>

<h2><a name="installation" id="installation">Installation</a></h2>
<div class="level2">

<p>

Starting with a fresh Kohana install, delete <code>application</code> folder, and copy your existing application folder to the same location.
</p>

</div>

<h2><a name="configuration" id="configuration">Configuration</a></h2>
<div class="level2">

<p>

Remove your old <code>config</code> folder.

</p>
<ol>
<li class="level1"><div class="li"> Copy the <code>application/config</code> directory from Kohana 2.x to <code>application/config</code></div>
</li>
<li class="level1"><div class="li"> Edit <code>application/config/config.php</code>, the main configuration files for your application</div>
</li>
<li class="level1"><div class="li"> Review the <a href="../general/configuration.php" class="wikilink1" title="general:configuration">User Guide: Configuration</a> page</div>
</li>
</ol>

</div>

<h2><a name="logging" id="logging">Logging</a></h2>
<div class="level2">

<p>
The logs directory needs to be writable by the webserver or you can turn logging off.
</p>

</div>

<h2><a name="class_names" id="class_names">Class Names</a></h2>
<div class="level2">

<p>

Rename all your controllers to <code>{NAME}_Controller</code>. For example, if your old controller was <code>Page</code>, make it <code>Page_Controller</code>.
</p>

<p>
Make your Controller contructors PHP5 if needed:

</p>
<ol>
<li class="level1"><div class="li"> <code>function __construct()</code> instead of <code>function Page()</code></div>
</li>
<li class="level1"><div class="li"> <code>parent::__construct()</code> instead of <code>parent::Controller()</code></div>
</li>
<li class="level1"><div class="li"> <strong>Note:</strong> This also applies to Models!</div>
</li>
</ol>

<p>

Rename all your models to <code>{NAME}_Model</code>

</p>
<ol>
<li class="level1"><div class="li"> For example, if your old model was <code>PageModel</code>, make it <code>Page_Model</code></div>
</li>
<li class="level1"><div class="li"> Change all your model loads to just model name: <code>$this→load→model(&#039;page&#039;)</code></div>
</li>
<li class="level1"><div class="li"> If you add a <code>__construct()</code> function, be sure to call <code>parent::__construct()</code></div>
</li>
</ol>

</div>

<h2><a name="libraries" id="libraries">Libraries</a></h2>
<div class="level2">

</div>

<h3><a name="base_controllers" id="base_controllers">Base Controllers</a></h3>
<div class="level3">

<p>

If you have a base controller for your application (in the libraries folder) you will need to:

</p>
<ol>
<li class="level1"><div class="li"> Change the <code>MY_Controller extends Controller</code> to <code>Controller extends Controller_Core</code></div>
</li>
<li class="level1"><div class="li"> Change references to <code>MY_Controller</code> in your controllers to <code>Controller</code></div>
</li>
<li class="level1"><div class="li"> Use the PHP5 syntax for the constructor in your base controller</div>
</li>
</ol>

</div>

<h3><a name="uri" id="uri">URI</a></h3>
<div class="level3">

<p>

The CI function <code>uri_to_assoc($offset)</code> becomes <code>segment_array($offset,$associative)</code> with <code>$associative</code> set to <code>TRUE</code>.
</p>

</div>

<h3><a name="other" id="other">Other</a></h3>
<div class="level3">

<p>

Class names need to have <code>_Core</code> appended to them and be capitalized. The file names should also have the same caps as the class name (without the <code>core</code>).
</p>

<p>
References to those classes need to be capitalized to match the library calls (without the <code>core</code>).
</p>

<p>
<code>$this→load→</code> is deprecated. Kohana uses auto loading so you can instantiate an object (e.g. new View()) without including the class first.
</p>

</div>

<h2><a name="helpers" id="helpers">Helpers</a></h2>
<div class="level2">

<p>

Change all your helper calls to the new syntax: <code>helper::function()</code>

</p>
<ol>
<li class="level1"><div class="li"> Example: <code>html::anchor()</code> instead of <code>anchor()</code></div>
</li>
<li class="level1"><div class="li"> Example: <code>url::base()</code> instead of <code>base_url()</code></div>
</li>
<li class="level1"><div class="li"> Example: <code>form::open()</code> instead of <code>form_open()</code></div>
</li>
<li class="level1"><div class="li"> The default helpers are available in <code>system/helpers</code></div>
</li>
</ol>

<p>

If you have custom helpers they need to be changed. Assuming your helper file is <code>foo.php</code>:

</p>
<ol>
<li class="level1"><div class="li"> wrap all the functions in the file in <code>class foo {    }</code></div>
</li>
<li class="level1"><div class="li"> prepend <code>public static</code> in front of all the function names</div>
</li>
</ol>

<p>

Calls are now made via <code>foo::function()</code>. 
</p>

<p>

Note also that the CodeIgniter helpers and libraries typically have this line at the top of the script:
</p>

<p>
<code>&lt;?php  if (!defined(&#039;BASEPATH&#039;)) exit(&#039;No direct script access allowed&#039;);</code>
</p>

<p>
This is not valid for Kohana so if you have copied this line for your own helpers etc you need to change it to the following to work in Kohana:
</p>

<p>
<code>&lt;?php defined(&#039;SYSPATH&#039;) or die(&#039;No direct access allowed.&#039;);</code>
</p>

</div>

<h2><a name="views" id="views">Views</a></h2>
<div class="level2">

<p>

Views are now treated somewhat differently. Instead of being “flat” files, views are now objects. This allows much greater flexibility, and easier “view-in-view” handling.
</p>
<pre class="code php"><span class="co1">// Load the view and set the $title variable</span>
<span class="re1">$view</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'template'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'title'</span> <span class="sy0">=&gt;</span> <span class="st0">'User Details'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Sets the $username variable in the view</span>
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">username</span> <span class="sy0">=</span> <span class="st0">'JohnDoe'</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Sets the $visits variable to another view</span>
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">visits</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'user/visits'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'user_id'</span> <span class="sy0">=&gt;</span> <span class="nu0">3</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Renders the view to a string</span>
<span class="re1">$str_view</span> <span class="sy0">=</span> <span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Displays the view</span>
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
<strong>Note:</strong> Using <code>print</code> or <code>echo</code> on a View will cause it to render into a string. This is very useful in Views:
</p>
<pre class="code php"><span class="sy0">&lt;!--</span> This example is the <span class="st0">&quot;template&quot;</span> view from above <span class="sy0">--&gt;</span>
<span class="sy0">&lt;</span>h1<span class="sy0">&gt;&lt;</span>?php <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$title</span> <span class="kw2">?&gt;</span> <span class="kw1">for</span> <span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$username</span> ?<span class="sy0">&gt;&lt;/</span>h1<span class="sy0">&gt;</span>
<span class="sy0">&lt;</span>div id<span class="sy0">=</span><span class="st0">&quot;visits&quot;</span><span class="sy0">&gt;&lt;</span>?php <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$visits</span> ?<span class="sy0">&gt;&lt;/</span>div<span class="sy0">&gt;</span></pre>
<p>
In the above example, a View object, <code>$visits</code>, was used as a string. This syntax is encouraged because it is very short and readable when mixed with <acronym title="HyperText Markup Language">HTML</acronym>.
</p>

</div>

<h2><a name="models" id="models">Models</a></h2>
<div class="level2">

<p>

There is a important note, in CI you can use the $this in the model and you have the same libraries as your controller, in kohana only the db library is loaded on a model. If you need more libraries you have two options:
</p>
<pre class="code php"><span class="co1">// Create a new object with the library</span>
<span class="re1">$uri</span> <span class="sy0">=</span> <span class="kw2">new</span> Uri<span class="sy0">;</span>
<span class="re1">$value</span> <span class="sy0">=</span> <span class="re1">$uri</span><span class="sy0">-&gt;</span><span class="me1">segment</span><span class="br0">&#40;</span><span class="nu0">3</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// Can not use $this-&gt;uri-&gt;segment(3) as used in CI</span>
&nbsp;
<span class="co1">// Use the instance of your controller</span>
<span class="re1">$value</span> <span class="sy0">=</span> Kohana<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">uri</span><span class="sy0">-&gt;</span><span class="me1">segment</span><span class="br0">&#40;</span><span class="nu0">3</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer48f8.gif?id=installation%3Amigration&amp;1324588186" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/installation/migration by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


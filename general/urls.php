<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/general/urls by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    general:urls    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-08-28T15:02:21-0500" />
<meta name="keywords" content="general,urls" />
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
<li class="level1"><div class="li"><span class="li"><a href="#kohana_urls" class="toc">Kohana URLs</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#segments" class="toc">Segments</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#url_rewriting" class="toc">URL rewriting</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#suffix" class="toc">Suffix</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#query_strings_and_get_support" class="toc">Query strings and GET support</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1"> GET support</td>
	</tr>
</table>



<h1><a name="kohana_urls" id="kohana_urls">Kohana URLs</a></h1>
<div class="level1">

<p>

URLs in Kohana are composed of segments. A typical segmented <acronym title="Uniform Resource Locator">URL</acronym> is <a href="http://localhost/control/action/arg1/arg2" class="urlextern" title="http://localhost/control/action/arg1/arg2"  rel="nofollow">http://localhost/control/action/arg1/arg2</a>
</p>

<p>
The segments correspond (in order ) to a controller, a controller method, and the method arguments.
</p>

<p>
<strong>Example</strong>

</p>
<pre class="code">
http://localhost/index.php/articles/edit/1/my-first-article
// or the same URL with url rewriting on
http://localhost/articles/edit/1/my-first-article</pre>
<p>

When you segmentize this url it becomes
</p>
<ul>
<li class="level1"><div class="li"> <strong>articles</strong> (the controller)</div>
</li>
<li class="level1"><div class="li"> <strong>edit</strong> (the action)</div>
</li>
<li class="level1"><div class="li"> <strong>1</strong> (first argument)</div>
</li>
<li class="level1"><div class="li"> <strong>my-first-article</strong> (second argument)</div>
</li>
</ul>

<p>

This will correspond to the controller <strong>articles</strong> found for example in <code>application/controllers/articles.php</code> - see <a href="controllers.php" class="wikilink1" title="general:controllers">Controllers for more information</a>
</p>

<p>
The second segment maps to a method <strong>edit</strong> in the Articles_Controller class in <code>application/controllers/articles.php</code> If no second segment is set it will call the <strong>index()</strong> method. If a non-existing method is set it will try to call <strong>__call()</strong> or trigger a 404.
</p>

<p>

<a name="index"></a>Note: You cannot pass arguments to an index method, unless the <acronym title="Uniform Resource Identifier">URI</acronym> contains index in the second segment.  
</p>

<p>
The third and fourth segment refer to arguments given to the <strong>edit()</strong> method. E.g. edit(<strong>$id</strong>,<strong>$title</strong>)
</p>

<p>
An example of what a controller could look like when this url is used.
</p>

<p>
<strong>Example</strong>

</p>
<pre class="code php"><span class="kw2">class</span> Articles_Controller <span class="kw2">extends</span> Controller <span class="br0">&#123;</span>
	<span class="kw2">function</span> __construct<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
		parent<span class="sy0">::</span>__construct<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
&nbsp;
	<span class="kw2">function</span> index<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
&nbsp;
	<span class="br0">&#125;</span>
&nbsp;
	<span class="kw2">function</span> edit<span class="br0">&#40;</span><span class="re1">$id</span><span class="sy0">,</span><span class="re1">$title</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
		<span class="co1">//get the article from the database and edit it</span>
		<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$id</span><span class="sy0">;</span>
		<span class="re1">$view</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'articles/edit'</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
</div>

<h2><a name="segments" id="segments">Segments</a></h2>
<div class="level2">

<p>
As said, Kohana urls contain segments.
</p>

<p>
<strong>Example</strong>

</p>
<pre class="code">
http://localhost/articles/edit/1/my-first-article</pre>
<p>

Contains the segments
</p>
<ul>
<li class="level1"><div class="li"> articles</div>
</li>
<li class="level1"><div class="li"> edit</div>
</li>
<li class="level1"><div class="li"> 1</div>
</li>
<li class="level1"><div class="li"> my-first-article</div>
</li>
</ul>

<p>

A <a href="../libraries/uri.php" class="wikilink1" title="libraries:uri">URI</a> class and a <a href="../helpers/url.php" class="wikilink1" title="helpers:url">URL</a> helper provide methods to make working with a url easier. You can retrieve segments, determine the current url segment, and various other operations. 

</p>

</div>

<h2><a name="url_rewriting" id="url_rewriting">URL rewriting</a></h2>
<div class="level2">

<p>
By default, Kohana urls contain <code>index.php</code>. This does not look very nice and also is not optimized for search engines. See the difference between the following urls.
</p>
<pre class="code">
http://localhost/index.php/articles/edit/1/my-first-article
// or the same URL with url rewriting on
http://localhost/articles/edit/1/my-first-article</pre>
<p>

The latter looks nicer and is SEO proof.
</p>

<p>
There is an <a href="http://kohanaphp.com/tutorials/remove_index" class="urlextern" title="http://kohanaphp.com/tutorials/remove_index"  rel="nofollow">example .htaccess</a> included with Kohana, which should be part of your installation files.
</p>

</div>

<h2><a name="suffix" id="suffix">Suffix</a></h2>
<div class="level2">

<p>
Kohana allows you to set a suffix to your urls. 
</p>

<p>
<strong>Example</strong>

</p>
<pre class="code">
http://localhost/index.php?/articles/edit/1/my-first-article.php</pre>
<p>
Setting this can be done in the <code>application/config/config.php</code> file under <strong>url_suffix</strong>
</p>

</div>

<h2><a name="query_strings_and_get_support" id="query_strings_and_get_support">Query strings and GET support</a></h2>
<div class="level2">

<p>
Query strings and GET support are enabled in Kohana. You can simply append your urls with ?var=value to pass it on. The keys and values are inspected and cleansed by the Input library when global_xss is on. 

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexerba75.gif?id=general%3Aurls&amp;1324588190" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/general/urls by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


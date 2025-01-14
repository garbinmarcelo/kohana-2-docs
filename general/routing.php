<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/general/routing by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    general:routing    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2008-11-10T15:05:52-0600" />
<meta name="keywords" content="general,routing" />
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
<li class="level1"><div class="li"><span class="li"><a href="#routing" class="toc">Routing</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#kohana_s_routing_configuration" class="toc">Kohana&#039;s routing configuration</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#specifying_your_own_routes" class="toc">Specifying  your own routes</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#using_regular_expressions" class="toc">Using regular expressions</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#properties" class="toc">Properties</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#current_uri" class="toc">$current_uri</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#query_string" class="toc">$query_string</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#complete_uri" class="toc">$complete_uri</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#routed_uri" class="toc">$routed_uri</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#url_suffix" class="toc">$url_suffix</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#segments" class="toc">$segments</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#rsegments" class="toc">$rsegments</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#controller" class="toc">$controller</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#controller_path" class="toc">$controller_path</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#method" class="toc">$method</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#arguments" class="toc">$arguments</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#examples" class="toc">Examples</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Expand, add examples</td>
	</tr>
</table>



<h1><a name="routing" id="routing">Routing</a></h1>
<div class="level1">

<p>

Typically, a <acronym title="Uniform Resource Identifier">URI</acronym> will map to a controller class and method on a one-to-one basis and provide arguments where necessary. For example,

</p>
<pre class="code">
http://www.example.com/class/function/arg1/arg2</pre>
<p>
The first segment refers to the controller class, the second to a method in that class and any other segments become that method&#039;s arguments.
</p>

<p>
There are cases, however, where you might want to change this behaviour. For example, you may want to use URIs like this: <code><a href="http://www.example.com/article/22" class="urlextern" title="http://www.example.com/article/22"  rel="nofollow">www.example.com/article/22</a></code>. Here, the second segment of the <acronym title="Uniform Resource Identifier">URI</acronym> is an article number, which is an argument, not a controller method. The <strong>routing</strong> feature of Kohana allows you to change how URIs are mapped to controllers and methods.
</p>

</div>

<h2><a name="kohana_s_routing_configuration" id="kohana_s_routing_configuration">Kohana&#039;s routing configuration</a></h2>
<div class="level2">

<p>

In order to alter routing you have to have a copy of <code>routes.php</code> in your <code>application/config</code> directory. If it is not already there copy the one from the <code>system/config</code> directory.
</p>

<p>
The default <code>routes.php</code> will have one entry:
</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'_default'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'welcome'</span><span class="sy0">;</span></pre>
<p>
<code>$config[&#039;_default&#039;]</code> specifies the default route. It is used to indicate which controller should be used when a <acronym title="Uniform Resource Identifier">URI</acronym> contains no segments. For example, if your web application is at <code><a href="http://www.example.com/" class="urlextern" title="http://www.example.com"  rel="nofollow">www.example.com</a></code> and you visit this address with a web browser, the <code>welcome</code> controller would be used even though it wasn&#039;t specified in the <acronym title="Uniform Resource Identifier">URI</acronym>. The result would be the same as if the browser had gone to <code><a href="http://www.example.com/welcome" class="urlextern" title="http://www.example.com/welcome"  rel="nofollow">www.example.com/welcome</a></code>.
</p>

</div>

<h2><a name="specifying_your_own_routes" id="specifying_your_own_routes">Specifying  your own routes</a></h2>
<div class="level2">

<p>

In addition to the default route above, you can also specify your own routes. The basic format for a routing rule is:

</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'route'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'class/method'</span><span class="sy0">;</span></pre>
<p>

where <code>route</code> is the <acronym title="Uniform Resource Identifier">URI</acronym> you want to route, and <code>class/method</code> would replace it.
</p>

<p>
So, for example, if your Kohana web application were installed at <code><a href="http://www.example.com/" class="urlextern" title="http://www.example.com"  rel="nofollow">www.example.com</a></code> and you had the following routing rule:

</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'test'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'foo/bar'</span><span class="sy0">;</span></pre>
<p>

and you visited <code><a href="http://www.example.com/test" class="urlextern" title="http://www.example.com/test"  rel="nofollow">www.example.com/test</a></code> in a web browser, you would see the page at <code><a href="http://www.example.com/foo/bar" class="urlextern" title="http://www.example.com/foo/bar"  rel="nofollow">www.example.com/foo/bar</a></code>.
</p>

</div>

<h2><a name="using_regular_expressions" id="using_regular_expressions">Using regular expressions</a></h2>
<div class="level2">

<p>

The <code>route</code> part of a routing rule is actually a regular expression. If you are unfamiliar with regular expressions you can read more about them <a href="http://www.php.net/manual/en/reference.pcre.pattern.syntax.php" class="urlextern" title="http://www.php.net/manual/en/reference.pcre.pattern.syntax.php"  rel="nofollow">at the PHP website</a>. Using regular expressions, you can be more selective about which URIs will match your routing rules, and you can make use of the sub-pattern back referencing technique to re-use parts of the <acronym title="Uniform Resource Identifier">URI</acronym> in it&#039;s replacement.
</p>

<p>
This is best described with an example. Suppose we wanted to make the <acronym title="Uniform Resource Locator">URL</acronym> <code><a href="http://www.example.com/article/22" class="urlextern" title="http://www.example.com/article/22"  rel="nofollow">www.example.com/article/22</a></code> work, we might use a routing rule like this:

</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'article/([0-9]+)'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'news/show/$1'</span><span class="sy0">;</span></pre>
<p>

which would match URIs starting with “article/” followed by some numeric digits. If the <acronym title="Uniform Resource Identifier">URI</acronym> takes this form, we will use the <code>news</code> controller and call it&#039;s <code>show()</code> method passing in the article number as the first argument. In the <code><a href="http://www.example.com/article/22" class="urlextern" title="http://www.example.com/article/22"  rel="nofollow">www.example.com/article/22</a></code> example, it is as if the <acronym title="Uniform Resource Locator">URL</acronym> <code><a href="http://www.example.com/news/show/22" class="urlextern" title="http://www.example.com/news/show/22"  rel="nofollow">www.example.com/news/show/22</a></code> had been visited.
</p>

</div>

<h2><a name="properties" id="properties">Properties</a></h2>
<div class="level2">

<p>

There are several public properties of the <code>Router</code>-class, which are available after routing has occurred.
</p>

</div>

<h3><a name="current_uri" id="current_uri">$current_uri</a></h3>
<div class="level3">

<p>

Returns the part of the <acronym title="Uniform Resource Locator">URL</acronym> which is used for routing. For example, if the <acronym title="Uniform Resource Locator">URL</acronym> <code><a href="http://localhost/welcome/index/var1?var2=2" class="urlextern" title="http://localhost/welcome/index/var1?var2=2"  rel="nofollow">http://localhost/welcome/index/var1?var2=2</a></code> is requested, this property will contain 
</p>
<pre class="code">welcome/index/var1</pre>

<p>

If the <acronym title="Uniform Resource Locator">URL</acronym> <code><a href="http://localhost/" class="urlextern" title="http://localhost/"  rel="nofollow">http://localhost/</a></code> is requested, this property will contain the default route.
</p>

</div>

<h3><a name="query_string" id="query_string">$query_string</a></h3>
<div class="level3">

<p>

Returns the query part of the requested <acronym title="Uniform Resource Locator">URL</acronym>, including the question mark.
</p>

<p>
For example, for the <acronym title="Uniform Resource Locator">URL</acronym> <code><a href="http://localhost/welcome?var1=1&amp;var2=2" class="urlextern" title="http://localhost/welcome?var1=1&amp;var2=2"  rel="nofollow">http://localhost/welcome?var1=1&amp;var2=2</a></code>,
this property would contain the string 
</p>
<pre class="code">?var1=1&amp;var2=2</pre>

</div>

<h3><a name="complete_uri" id="complete_uri">$complete_uri</a></h3>
<div class="level3">

<p>

Returns <code>Router::$current_uri</code> appended with <code>Router::$query_string</code>.
</p>

</div>

<h3><a name="routed_uri" id="routed_uri">$routed_uri</a></h3>
<div class="level3">

<p>

Returns the <acronym title="Uniform Resource Identifier">URI</acronym> which is determined by routing <code>Router::$current_uri</code>.
</p>

<p>
With default routing configuration, <code>$routed_uri</code> will match <code>$current_uri</code>.
If you configure the route 
</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'test'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'foo/bar'</span><span class="sy0">;</span></pre>
<p>
 and request the <acronym title="Uniform Resource Locator">URL</acronym> <code><a href="http://localhost/test" class="urlextern" title="http://localhost/test"  rel="nofollow">http://localhost/test</a></code>, this property will contain the string 
</p>
<pre class="code">foo/bar</pre>

</div>

<h3><a name="url_suffix" id="url_suffix">$url_suffix</a></h3>
<div class="level3">

<p>

Returns the suffix of the requested <acronym title="Uniform Resource Locator">URL</acronym> if it is BOTH configured in <code>config.php</code> AND used in the current request.
</p>

<p>
For example, if you configure the url suffix <code>.php</code> and request the <acronym title="Uniform Resource Locator">URL</acronym> <code><a href="http://localhost/welcome.php" class="urlextern" title="http://localhost/welcome.php"  rel="nofollow">http://localhost/welcome.php</a></code>, this property will contain the string 
</p>
<pre class="code">.php</pre>

</div>

<h3><a name="segments" id="segments">$segments</a></h3>
<div class="level3">

<p>

Returns <code>Router::$current_uri</code> split up into segments.
</p>

<p>
For example, if <code>Router::$current_uri</code> contains 
</p>
<pre class="code">welcome/index</pre>

<p>
, this property will contain the array 
</p>
<pre class="code php"><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'welcome'</span><span class="sy0">,</span> <span class="st0">'index'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="rsegments" id="rsegments">$rsegments</a></h3>
<div class="level3">

<p>

Returns <code>Router::$routed_uri</code> split up into segments.
</p>

<p>
For example, if <code>Router::$routed_uri</code> contains 
</p>
<pre class="code">welcome/index</pre>

<p>
, this property will contain the array 
</p>
<pre class="code php"><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'welcome'</span><span class="sy0">,</span> <span class="st0">'index'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="controller" id="controller">$controller</a></h3>
<div class="level3">

<p>

Returns the name of the controller to which the request is routed.
</p>

<p>
For example, when a method of the controller <code>welcome</code> (class name: <code>Welcome_Controller</code>) is called, regardless of how the request was routed there, this property would contain the string 
</p>
<pre class="code">welcome</pre>

<p>
It does not include any subdirectories in which the controller file might reside, only the name of the controller itself.
</p>

</div>

<h3><a name="controller_path" id="controller_path">$controller_path</a></h3>
<div class="level3">

<p>

Returns the absolute path of the controller script file. For example, if a fresh Kohana-installation would be setup inside the directory <code>/var/www/</code> and a method of the controller <code>welcome</code> would be called, this property would contain the string 
</p>
<pre class="code">/var/www/application/controllers/welcome.php</pre>

</div>

<h3><a name="method" id="method">$method</a></h3>
<div class="level3">

<p>

Returns the name of the method to which the request is routed.
</p>

<p>
For example, when the method <code>index</code> of the controller <code>welcome</code> is called, regardless of how the request was routed there, this property would contain the string 
</p>
<pre class="code">index</pre>

</div>

<h3><a name="arguments" id="arguments">$arguments</a></h3>
<div class="level3">

<p>

Returns the segments of the <acronym title="Uniform Resource Locator">URL</acronym> which are not needed for determining the controller and the method. These segments are also passed to the controller method as method arguments.
</p>

<p>
For example, with default routing configuration, when the <acronym title="Uniform Resource Locator">URL</acronym> <code><a href="http://localhost/welcome/index/var1/var2?var3=3&amp;var4=4" class="urlextern" title="http://localhost/welcome/index/var1/var2?var3=3&amp;var4=4"  rel="nofollow">http://localhost/welcome/index/var1/var2?var3=3&amp;var4=4</a></code> would be requested, this property would contain the array 
</p>
<pre class="code php"><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'var1'</span><span class="sy0">,</span> <span class="st0">'var2'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="examples" id="examples">Examples</a></h2>
<div class="level2">

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexera595.gif?id=general%3Arouting&amp;1324588190" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/general/routing by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


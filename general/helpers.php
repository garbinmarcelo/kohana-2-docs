<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/general/helpers by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    general:helpers    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-03-26T04:56:55-0500" />
<meta name="keywords" content="general,helpers" />
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
<li class="level1"><div class="li"><span class="li"><a href="#helpers" class="toc">Helpers</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#adding_your_own_helpers" class="toc">Adding your own helpers</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#extending_helpers" class="toc">Extending helpers</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#replacing_kohana_s_built-in_helpers" class="toc">Replacing Kohana&#039;s built-in helpers</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Expand examples, Proof read</td>
	</tr>
</table>



<h1><a name="helpers" id="helpers">Helpers</a></h1>
<div class="level1">

<p>

Helpers are simply “handy” functions that help you with development.
</p>

<p>
Helpers are similar to library methods, but there is a subtle difference. With a library, you have to create an instance of the library&#039;s class to use its methods. Helpers are declared as static methods of a class, so there is no need to instantiate the class. You can think of them as “global functions”.
</p>

<p>
As with libraries, the helper classes are automatically loaded by the framework when they are used, so there is no need to load them yourself.
</p>

<p>
Here is an example call to a helper:

</p>
<pre class="code php"><span class="co1">// show the location of this Kohana installation</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> url<span class="sy0">::</span><span class="me2">base</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
As with most of Kohana, you can add your own helpers and replace or extend Kohana&#039;s built-in ones.
</p>

</div>

<h2><a name="adding_your_own_helpers" id="adding_your_own_helpers">Adding your own helpers</a></h2>
<div class="level2">

<p>

When creating your own helpers, these are the conventions that are suggested:
</p>
<ul>
<li class="level1"><div class="li"> Helper files should be put in <code>application/helpers</code> (or if you&#039;re creating a module, in <code>modules/helpers</code>)</div>
</li>
<li class="level1"><div class="li"> Helper files must be named the same as the helper class (but without any ”<code>_Core</code>” suffix).</div>
</li>
<li class="level1"><div class="li"> Helper class names must be all lowercase.</div>
</li>
<li class="level1"><div class="li"> For a new helper, the class name can have ”<code>_Core</code>” appended to the end to enable you to extend it in the same way you can with Kohana&#039;s built-in helpers.</div>
</li>
</ul>

<p>

For example, suppose that you wanted to create a helper to help with JavaScript, you might create the following file:
</p>

<p>
<strong>File:</strong> <code>application/helpers/javascript.php</code>

</p>
<pre class="code php"><span class="kw2">&lt;?php</span> <a href="http://www.php.net/defined"><span class="kw3">defined</span></a><span class="br0">&#40;</span><span class="st0">'SYSPATH'</span><span class="br0">&#41;</span> or <a href="http://www.php.net/die"><span class="kw3">die</span></a><span class="br0">&#40;</span><span class="st0">'No direct script access.'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw2">class</span> javascript_Core <span class="br0">&#123;</span>
&nbsp;
	<span class="kw2">public</span> <a href="http://www.php.net/static"><span class="kw3">static</span></a> <span class="kw2">function</span> alert<span class="br0">&#40;</span><span class="re1">$message</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="kw1">return</span> <span class="st0">&quot;alert('$message');<span class="es0">\n</span>&quot;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="kw2">?&gt;</span></pre>
<p>
and then to use your helper, you would do the following:
</p>
<pre class="code php">javascript<span class="sy0">::</span><span class="me2">alert</span><span class="br0">&#40;</span><span class="st0">&quot;Oh no!&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="extending_helpers" id="extending_helpers">Extending helpers</a></h2>
<div class="level2">

<p>

Kohana also allows you to extend its built-in helpers so that you can add your own functionality to them. You should <strong>never</strong> change the files in <code>system/helpers</code>! Instead, you can create a new helper that extends a built-in helper.
</p>

<p>
You can also extend your own helpers, so long as you have added ”<code>_Core</code>” to the end of their class names.
</p>

<p>
When extending a helper, the conventions are the same as for when you are creating a new helper, with a couple of exceptions:

</p>
<ul>
<li class="level1"><div class="li"> The filename must be the same as the helper you&#039;re extending, except it must have ”<code>MY_</code>” prefixed to it. This prefix is configurable; see the <a href="configuration.php" class="wikilink1" title="general:configuration">configuration</a> page.</div>
</li>
<li class="level1"><div class="li"> The class name must be the same as the class name you are extending and <strong>must not</strong> have ”<code>_Core</code>” appended to it.</div>
</li>
</ul>

<p>

For example, lets suppose that you want to extend Kohana&#039;s <a href="../helpers/html.php" class="wikilink1" title="helpers:html">HTML helper</a>. You might do the following:
</p>

<p>
<strong>File:</strong> <code>application/helpers/MY_html.php</code>

</p>
<pre class="code php"><span class="kw2">&lt;?php</span> <a href="http://www.php.net/defined"><span class="kw3">defined</span></a><span class="br0">&#40;</span><span class="st0">'SYSPATH'</span><span class="br0">&#41;</span> or <a href="http://www.php.net/die"><span class="kw3">die</span></a><span class="br0">&#40;</span><span class="st0">'No direct script access.'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw2">class</span> html <span class="kw2">extends</span> html_Core <span class="br0">&#123;</span>
&nbsp;
	<span class="kw2">public</span> <a href="http://www.php.net/static"><span class="kw3">static</span></a> <span class="kw2">function</span> your_custom_method<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
	<span class="br0">&#125;</span>
&nbsp;
<span class="br0">&#125;</span>
<span class="kw2">?&gt;</span></pre>
<p>
Extending the core classes is not only allowed in Kohana, but is expected.
</p>

</div>

<h2><a name="replacing_kohana_s_built-in_helpers" id="replacing_kohana_s_built-in_helpers">Replacing Kohana&#039;s built-in helpers</a></h2>
<div class="level2">

<p>

It is also possible (although probably less often required) to replacing one of Kohana&#039;s built-in helpers entirely. The conventions are the same as when you are adding your own helper, with one exception:

</p>
<ul>
<li class="level1"><div class="li"> Appending ”<code>_Core</code>” to the class name is not optional - you must do it!</div>
</li>
</ul>

<p>

If, for example, you want to replace the <a href="../helpers/url.php" class="wikilink1" title="helpers:url">url helper</a>, you might do something like:
</p>

<p>
<strong>File:</strong> <code>application/helpers/url.php</code>

</p>
<pre class="code php"><span class="kw2">&lt;?php</span> <a href="http://www.php.net/defined"><span class="kw3">defined</span></a><span class="br0">&#40;</span><span class="st0">'SYSPATH'</span><span class="br0">&#41;</span> or <a href="http://www.php.net/die"><span class="kw3">die</span></a><span class="br0">&#40;</span><span class="st0">'No direct script access.'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw2">class</span> url_Core <span class="br0">&#123;</span>
&nbsp;
	<span class="co1">// define your own url helper here</span>
&nbsp;
<span class="br0">&#125;</span>
&nbsp;
<span class="kw2">?&gt;</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexera3f6.gif?id=general%3Ahelpers&amp;1324588191" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/general/helpers by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


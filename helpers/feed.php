<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/helpers/feed by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    helpers:feed    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-09-23T10:18:19-0500" />
<meta name="keywords" content="helpers,feed" />
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
<li class="level1"><div class="li"><span class="li"><a href="#feed_helper" class="toc">Feed Helper</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#parse" class="toc">parse()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#create" class="toc">create()</a></span></div></li></ul>
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



<h1><a name="feed_helper" id="feed_helper">Feed Helper</a></h1>
<div class="level1">

<p>
The Feed helper assist in the parsing of remote <acronym title="Rich Site Summary">RSS</acronym> feeds. 
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="parse" id="parse">parse()</a></h3>
<div class="level3">

<p>
<code>parse($feed, $limit = 0)</code> parses a remote feed and returns it as an array.
</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$feed</code> remote feed url, or local file path</div>
</li>
<li class="level1"><div class="li"> <strong>[int]</strong> <code>$limit</code> maximum amount of items to parse – default = 0 (infinite)</div>
</li>
<li class="level1"><div class="li"> returns <strong>[array]</strong> parse feed.</div>
</li>
</ul>
<pre class="code php"><span class="re1">$feed</span> <span class="sy0">=</span> <span class="st0">&quot;feed.xml&quot;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span>feed<span class="sy0">::</span><span class="me2">parse</span><span class="br0">&#40;</span><span class="re1">$feed</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Use the code above on this <acronym title="Rich Site Summary">RSS</acronym> feed:

</p>
<pre class="code xml"><span class="sc3"><span class="re1">&lt;?xml</span> <span class="re0">version</span>=<span class="st0">&quot;1.0&quot;</span> <span class="re0">encoding</span>=<span class="st0">&quot;UTF-8&quot;</span><span class="re2">?&gt;</span></span>
<span class="sc3"><span class="re1">&lt;rss</span> <span class="re0">xmlns:content</span>=<span class="st0">&quot;http://purl.org/rss/1.0/modules/content/&quot;</span> <span class="re0">xmlns:feedburner</span>=<span class="st0">&quot;http://rssnamespace.org/feedburner/ext/1.0&quot;</span> <span class="re0">version</span>=<span class="st0">&quot;2.0&quot;</span><span class="re2">&gt;</span></span>
<span class="sc3"><span class="re1">&lt;channel<span class="re2">&gt;</span></span></span>
<span class="sc3"><span class="re1">&lt;item<span class="re2">&gt;</span></span></span>
	<span class="sc3"><span class="re1">&lt;title<span class="re2">&gt;</span></span></span>Some feed item<span class="sc3"><span class="re1">&lt;/title<span class="re2">&gt;</span></span></span>
	<span class="sc3"><span class="re1">&lt;link<span class="re2">&gt;</span></span></span>http://www.example.com/article34<span class="sc3"><span class="re1">&lt;/link<span class="re2">&gt;</span></span></span>
	<span class="sc3"><span class="re1">&lt;description<span class="re2">&gt;</span></span></span>This article is really cool!<span class="sc3"><span class="re1">&lt;/description<span class="re2">&gt;</span></span></span>
	<span class="sc3"><span class="re1">&lt;author<span class="re2">&gt;</span></span></span>Aart-Jan Boor<span class="sc3"><span class="re1">&lt;/author<span class="re2">&gt;</span></span></span>
	<span class="sc3"><span class="re1">&lt;pubDate<span class="re2">&gt;</span></span></span>Sat, 08 Dec 2007 13:28:11 GMT<span class="sc3"><span class="re1">&lt;/pubDate<span class="re2">&gt;</span></span></span>
<span class="sc3"><span class="re1">&lt;/item<span class="re2">&gt;</span></span></span>
<span class="sc3"><span class="re1">&lt;item<span class="re2">&gt;</span></span></span>
	<span class="sc3"><span class="re1">&lt;title<span class="re2">&gt;</span></span></span>Some feed item2<span class="sc3"><span class="re1">&lt;/title<span class="re2">&gt;</span></span></span>
	<span class="sc3"><span class="re1">&lt;link<span class="re2">&gt;</span></span></span>http://www.example.com/article546<span class="sc3"><span class="re1">&lt;/link<span class="re2">&gt;</span></span></span>
	<span class="sc3"><span class="re1">&lt;description<span class="re2">&gt;</span></span></span>This article is really cool too!<span class="sc3"><span class="re1">&lt;/description<span class="re2">&gt;</span></span></span>
	<span class="sc3"><span class="re1">&lt;author<span class="re2">&gt;</span></span></span>Aart-Jan Boor<span class="sc3"><span class="re1">&lt;/author<span class="re2">&gt;</span></span></span>
	<span class="sc3"><span class="re1">&lt;pubDate<span class="re2">&gt;</span></span></span>Sat, 08 Dec 2007 12:57:56 GMT<span class="sc3"><span class="re1">&lt;/pubDate<span class="re2">&gt;</span></span></span>
<span class="sc3"><span class="re1">&lt;/item<span class="re2">&gt;</span></span></span>
<span class="sc3"><span class="re1">&lt;item<span class="re2">&gt;</span></span></span>
	<span class="sc3"><span class="re1">&lt;title<span class="re2">&gt;</span></span></span>Some feed item3<span class="sc3"><span class="re1">&lt;/title<span class="re2">&gt;</span></span></span>
	<span class="sc3"><span class="re1">&lt;link<span class="re2">&gt;</span></span></span>http://www.example.com/article4523<span class="sc3"><span class="re1">&lt;/link<span class="re2">&gt;</span></span></span>
	<span class="sc3"><span class="re1">&lt;description<span class="re2">&gt;</span></span></span>This article is the best!<span class="sc3"><span class="re1">&lt;/description<span class="re2">&gt;</span></span></span>
	<span class="sc3"><span class="re1">&lt;author<span class="re2">&gt;</span></span></span>Aart-Jan Boor<span class="sc3"><span class="re1">&lt;/author<span class="re2">&gt;</span></span></span>
	<span class="sc3"><span class="re1">&lt;pubDate<span class="re2">&gt;</span></span></span>Sat, 08 Dec 2007 12:39:42 GMT<span class="sc3"><span class="re1">&lt;/pubDate<span class="re2">&gt;</span></span></span>
<span class="sc3"><span class="re1">&lt;/item<span class="re2">&gt;</span></span></span>
<span class="sc3"><span class="re1">&lt;/channel<span class="re2">&gt;</span></span></span>
<span class="sc3"><span class="re1">&lt;/rss<span class="re2">&gt;</span></span></span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">Array
(
    [0] =&gt; Array
        (
            [title] =&gt; Some feed item
            [link] =&gt; http://www.example.com/article34
            [description] =&gt; This article is really cool!
            [author] =&gt; Aart-Jan Boor
            [pubDate] =&gt; Sat, 08 Dec 2007 13:28:11 GMT
        )
&nbsp;
    [1] =&gt; Array
        (
            [title] =&gt; Some feed item2
            [link] =&gt; http://www.example.com/article546
            [description] =&gt; This article is really cool too!
            [author] =&gt; Aart-Jan Boor
            [pubDate] =&gt; Sat, 08 Dec 2007 12:57:56 GMT
        )
&nbsp;
    [2] =&gt; Array
        (
            [title] =&gt; Some feed item3
            [link] =&gt; http://www.example.com/article4523
            [description] =&gt; This article is the best!
            [author] =&gt; Aart-Jan Boor
            [pubDate] =&gt; Sat, 08 Dec 2007 12:39:42 GMT
        )
&nbsp;
)</pre>
</div>

<h3><a name="create" id="create">create()</a></h3>
<div class="level3">

<p>
<code>create($info, $items, $format = &#039;rss2&#039;)</code> creates an xml feed from a collection of items.
</p>
<ul>
<li class="level1"><div class="li"> <strong>[array]</strong> <code>$info</code> feed information</div>
</li>
<li class="level1"><div class="li"> <strong>[array]</strong> <code>$items</code> items to add to the feed</div>
</li>
<li class="level1"><div class="li"> returns <strong>[string]</strong> generated feed.</div>
</li>
</ul>
<pre class="code php"><span class="re1">$info</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'notes'</span> <span class="sy0">=&gt;</span> <span class="st0">'Foo bar'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$items</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span>
    <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span>
        <span class="st0">'title'</span> <span class="sy0">=&gt;</span> <span class="st0">'My very first feed created by KohanaPHP'</span><span class="sy0">,</span>
        <span class="st0">'link'</span> <span class="sy0">=&gt;</span> <span class="st0">'http://www.example.com/article/34'</span><span class="sy0">,</span>
        <span class="st0">'description'</span> <span class="sy0">=&gt;</span> <span class="st0">'This article is really nice!'</span><span class="sy0">,</span>
        <span class="st0">'author'</span> <span class="sy0">=&gt;</span> <span class="st0">'Flip van Rijn'</span><span class="sy0">,</span>
        <span class="st0">'pubDate'</span> <span class="sy0">=&gt;</span> <span class="st0">'Wed, 23 Sept 2009 17:13:25 GMT'</span><span class="sy0">,</span>
    <span class="br0">&#41;</span><span class="sy0">,</span>
<span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> feed<span class="sy0">::</span><span class="me2">create</span><span class="br0">&#40;</span><span class="re1">$info</span><span class="sy0">,</span> <span class="re1">$items</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

That will result in this <acronym title="Extensible Markup Language">XML</acronym> code:

</p>
<pre class="code xml"><span class="sc3"><span class="re1">&lt;?xml</span> <span class="re0">version</span>=<span class="st0">&quot;1.0&quot;</span> <span class="re0">encoding</span>=<span class="st0">&quot;UTF-8&quot;</span><span class="re2">?&gt;</span></span>
<span class="sc3"><span class="re1">&lt;rss</span> <span class="re0">version</span>=<span class="st0">&quot;2.0&quot;</span><span class="re2">&gt;</span></span>
<span class="sc3"><span class="re1">&lt;channel<span class="re2">&gt;</span></span></span>
    <span class="sc3"><span class="re1">&lt;notes<span class="re2">&gt;</span></span></span>Foo bar<span class="sc3"><span class="re1">&lt;/notes<span class="re2">&gt;</span></span></span>
    <span class="sc3"><span class="re1">&lt;title<span class="re2">&gt;</span></span></span>Generated Feed<span class="sc3"><span class="re1">&lt;/title<span class="re2">&gt;</span></span></span>
    <span class="sc3"><span class="re1">&lt;link<span class="re2">&gt;</span></span></span>http://localhost/<span class="sc3"><span class="re1">&lt;/link<span class="re2">&gt;</span></span></span>
    <span class="sc3"><span class="re1">&lt;generator<span class="re2">&gt;</span></span></span>KohanaPHP<span class="sc3"><span class="re1">&lt;/generator<span class="re2">&gt;</span></span></span>
    <span class="sc3"><span class="re1">&lt;item<span class="re2">&gt;</span></span></span>
        <span class="sc3"><span class="re1">&lt;title<span class="re2">&gt;</span></span></span>My very first feed created by KohanaPHP<span class="sc3"><span class="re1">&lt;/title<span class="re2">&gt;</span></span></span>
        <span class="sc3"><span class="re1">&lt;link<span class="re2">&gt;</span></span></span>http://www.example.com/article/34<span class="sc3"><span class="re1">&lt;/link<span class="re2">&gt;</span></span></span>
        <span class="sc3"><span class="re1">&lt;description<span class="re2">&gt;</span></span></span>This article is really nice!<span class="sc3"><span class="re1">&lt;/description<span class="re2">&gt;</span></span></span>
        <span class="sc3"><span class="re1">&lt;author<span class="re2">&gt;</span></span></span>Flip van Rijn<span class="sc3"><span class="re1">&lt;/author<span class="re2">&gt;</span></span></span>
        <span class="sc3"><span class="re1">&lt;pubDate<span class="re2">&gt;</span></span></span>Wed, 23 Sept 2009 17:13:25 GMT<span class="sc3"><span class="re1">&lt;/pubDate<span class="re2">&gt;</span></span></span>
    <span class="sc3"><span class="re1">&lt;/item<span class="re2">&gt;</span></span></span>
<span class="sc3"><span class="re1">&lt;/channel<span class="re2">&gt;</span></span></span>
<span class="sc3"><span class="re1">&lt;/rss<span class="re2">&gt;</span></span></span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer8dc5.gif?id=helpers%3Afeed&amp;1324588204" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/helpers/feed by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/addons/template by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    addons:template    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-06-15T16:54:39-0500" />
<meta name="keywords" content="addons,template" />
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
<li class="level1"><div class="li"><span class="li"><a href="#template_controller" class="toc">Template Controller</a></span></div>
<ul class="toc">
<li class="clear">

<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#template_controller1" class="toc">Template Controller</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#example_1" class="toc">Example 1</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#example_2" class="toc">Example 2</a></span></div></li></ul>
</li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Stub</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Write it!</td>
	</tr>
</table>



<h1><a name="template_controller" id="template_controller">Template Controller</a></h1>
<div class="level1">

</div>

<h3><a name="template_controller1" id="template_controller1">Template Controller</a></h3>
<div class="level3">

<p>
Using the template controller you can set a template for your site. Its workings are simple. 
</p>

<p>
<strong>Example: application/controllers/home.php</strong>

</p>
<pre class="code php"><span class="kw2">class</span> Home_Controller <span class="kw2">extends</span> Template_Controller <span class="br0">&#123;</span>
&nbsp;
 	<span class="kw2">public</span> <span class="re1">$template</span> <span class="sy0">=</span> <span class="st0">'template'</span><span class="sy0">;</span> <span class="co1">//defaults to template but you can set your own view file</span>
&nbsp;
 	<span class="kw2">public</span> <span class="re1">$auto_render</span> <span class="sy0">=</span> <span class="kw2">TRUE</span><span class="sy0">;</span> <span class="co1">//defaults to true, renders the template after the controller method is done</span>
&nbsp;
 	<span class="kw2">public</span> <span class="kw2">function</span> __construct<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		parent<span class="sy0">::</span>__construct<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//necessary</span>
	<span class="br0">&#125;</span>
&nbsp;
 	<span class="kw2">public</span> <span class="kw2">function</span> index<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">content</span><span class="sy0">=</span> <span class="st0">'index page in a template'</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
<p>

The example illustrates a file <code>application/controllers/home.php</code> which extends the template controller. The template controller can be found in <code>system/controllers/template.php</code>. You set the template file in $template. It defaults to &#039;template&#039; which is found in <code>views/template.php</code>. Auto-render renders the template during the post_controller event which is executed after the controller. This all means you can change the template and auto-render all in realtime.
</p>

<p>
For a more detailed discussion of Template <a href="http://learn.kohanaphp.com/2008/03/08/kohana-template-tutorial/" class="urlextern" title="http://learn.kohanaphp.com/2008/03/08/kohana-template-tutorial/"  rel="nofollow">Learning Kohana: Template</a>

</p>

</div>

<h3><a name="example_1" id="example_1">Example 1</a></h3>
<div class="level3">

<p>
This is a simple example that shows the magic of the Template class.
</p>

<p>
Save this as /application/controllers/test.php

</p>
<pre class="code php"><span class="kw2">class</span> Test_Controller <span class="kw2">extends</span> Template_Controller <span class="br0">&#123;</span>
&nbsp;
 	<span class="kw2">public</span> <span class="re1">$template</span> <span class="sy0">=</span> <span class="st0">'base_page'</span><span class="sy0">;</span>
&nbsp;
 	<span class="kw2">public</span> <span class="kw2">function</span> __construct<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		parent<span class="sy0">::</span>__construct<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
		<span class="co1">// the template page 'base_page' is loaded by</span>
		<span class="co1">// default, this is the same as uncommenting</span>
		<span class="co1">// the following line:</span>
		<span class="co1">// $this-&gt;template = new View('base_page');</span>
&nbsp;
		<span class="co1">// All pages have some things in common such as</span>
		<span class="co1">// the page title:</span>
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">title</span>     <span class="sy0">=</span> <span class="st0">&quot;Welcome to Kohana!&quot;</span><span class="sy0">;</span>
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">copyright</span> <span class="sy0">=</span> <span class="st0">&quot;&amp;#169; Me, 2008&quot;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
&nbsp;
	<span class="kw2">function</span> index<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="co1">//</span>
		<span class="co1">// don't forget that the __construct() is run</span>
		<span class="co1">// before this method, so the template</span>
		<span class="co1">// is set up and ready for this pages content.</span>
		<span class="co1">//</span>
&nbsp;
		<span class="co1">// Load this page (Test) view</span>
		<span class="re1">$test</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'test'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
		<span class="co1">// now create this page (Test)</span>
		<span class="re1">$test</span><span class="sy0">-&gt;</span><span class="me1">heading</span> <span class="sy0">=</span> <span class="st0">&quot;Test :: Index Heading&quot;</span><span class="sy0">;</span>
		<span class="re1">$test</span><span class="sy0">-&gt;</span><span class="me1">content</span> <span class="sy0">=</span> <span class="st0">&quot;Test :: Index :: content here.&quot;</span><span class="sy0">;</span>
		<span class="re1">$test</span><span class="sy0">-&gt;</span><span class="me1">content</span> <span class="sy0">.=</span> <span class="st0">'&lt;br&gt;&lt;a href=&quot;test_2&quot;&gt;page 2&lt;/a&gt;'</span><span class="sy0">;</span>
&nbsp;
 		<span class="co1">// add our content to the template view:</span>
 		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">content</span> <span class="sy0">=</span> <span class="re1">$test</span><span class="sy0">;</span>
&nbsp;
		<span class="co1">// the view is auto-render by default</span>
	<span class="br0">&#125;</span>
&nbsp;
	<span class="kw2">function</span> test_2<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="co1">// Load this page (Test) view</span>
		<span class="re1">$test</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'test'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
		<span class="co1">// now create this page (Test)</span>
		<span class="re1">$test</span><span class="sy0">-&gt;</span><span class="me1">heading</span> <span class="sy0">=</span> <span class="st0">&quot;Test :: test_2 :: Heading&quot;</span><span class="sy0">;</span>
		<span class="re1">$test</span><span class="sy0">-&gt;</span><span class="me1">content</span> <span class="sy0">=</span> <span class="st0">&quot;Test :: test_2 :: content here.&quot;</span><span class="sy0">;</span>
		<span class="re1">$test</span><span class="sy0">-&gt;</span><span class="me1">content</span> <span class="sy0">.=</span> <span class="st0">'&lt;br&gt;&lt;a href=&quot;index&quot;&gt;page 1&lt;/a&gt;'</span><span class="sy0">;</span>
 		<span class="co1">// add our content to the base view:</span>
 		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">content</span> <span class="sy0">=</span> <span class="re1">$test</span><span class="sy0">;</span>
&nbsp;
		<span class="co1">// the view is auto-render by default</span>
	<span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
<p>

This uses the following 2 views:
</p>

<p>
Save this as /application/views/base_page.php

</p>
<pre class="code php"><span class="sy0">&lt;</span>html<span class="sy0">&gt;</span>
  <span class="sy0">&lt;</span>head<span class="sy0">&gt;</span>
    <span class="sy0">&lt;</span>title<span class="sy0">&gt;&lt;</span>?php <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$title</span><span class="sy0">;</span> ?<span class="sy0">&gt;&lt;/</span>title<span class="sy0">&gt;</span>
  <span class="sy0">&lt;/</span>head<span class="sy0">&gt;</span>
  <span class="sy0">&lt;</span>body<span class="sy0">&gt;</span>
  <span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$content</span> <span class="kw2">?&gt;</span>
&nbsp;
  <span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$copyright</span><span class="sy0">;</span> <span class="kw2">?&gt;</span>
  <span class="sy0">&lt;/</span>body<span class="sy0">&gt;</span>
<span class="sy0">&lt;/</span>html<span class="sy0">&gt;</span></pre>
<p>
Save this as /application/views/test.php

</p>
<pre class="code php"><span class="sy0">&lt;</span>h1<span class="sy0">&gt;&lt;</span>?php <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$heading</span><span class="sy0">;</span> ?<span class="sy0">&gt;&lt;/</span>h1<span class="sy0">&gt;</span>
<span class="sy0">&lt;</span>p<span class="sy0">&gt;&lt;</span>?<span class="sy0">=</span> <span class="re1">$content</span> ?<span class="sy0">&gt;&lt;/</span>p<span class="sy0">&gt;</span></pre>
<p>
To test this browse to <a href="http://127.0.0.1/Kohana/test/" class="urlextern" title="http://127.0.0.1/Kohana/test/"  rel="nofollow">http://127.0.0.1/Kohana/test/</a> and <a href="http://127.0.0.1/Kohana/test/test_2" class="urlextern" title="http://127.0.0.1/Kohana/test/test_2"  rel="nofollow">http://127.0.0.1/Kohana/test/test_2</a>
</p>

<p>
The Template class is nice because it removes the need to split a template into two files, header and footer. Think of <code>base_page</code> as your base object, which <code>views/test.php</code> inherits from.
</p>

</div>

<h3><a name="example_2" id="example_2">Example 2</a></h3>
<div class="level3">

<p>
It is easy to extend the template concept and add something more interesting. 
For example to add a menu alter the <code>construct()</code> method as follows:
</p>
<pre class="code php">	<span class="kw2">public</span> <span class="kw2">function</span> __construct<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		parent<span class="sy0">::</span>__construct<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">title</span>     <span class="sy0">=</span> <span class="st0">&quot;Welcome to Kohana!&quot;</span><span class="sy0">;</span>
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">copyright</span> <span class="sy0">=</span> <span class="st0">&quot;&amp;#169; Me, 2008&quot;</span><span class="sy0">;</span>
&nbsp;
		<span class="co1">// Look:</span>
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">menu</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'test_menu'</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span></pre>
<p>
Create a new view and save it as /application/views/test_menu.php

</p>
<pre class="code php"><span class="sy0">&lt;</span>div style<span class="sy0">=</span><span class="st0">&quot;width: 100px; float: right; border: 1px solid lightgreen;&quot;</span><span class="sy0">&gt;</span>
<span class="sy0">&lt;</span>ul<span class="sy0">&gt;</span>
	<span class="sy0">&lt;</span>li<span class="sy0">&gt;</span>menu <span class="nu0">1</span><span class="sy0">&lt;/</span>li<span class="sy0">&gt;</span>
	<span class="sy0">&lt;</span>li<span class="sy0">&gt;</span>menu <span class="nu0">1</span><span class="sy0">&lt;/</span>li<span class="sy0">&gt;</span>
<span class="sy0">&lt;/</span>ul<span class="sy0">&gt;</span>
<span class="sy0">&lt;/</span>div<span class="sy0">&gt;</span></pre>
<p>
Alter /application/views/base_page.php to display the menu:

</p>
<pre class="code php"><span class="sy0">&lt;</span>html<span class="sy0">&gt;</span>
  <span class="sy0">&lt;</span>head<span class="sy0">&gt;</span>
    <span class="sy0">&lt;</span>title<span class="sy0">&gt;&lt;</span>?php <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$title</span><span class="sy0">;</span> ?<span class="sy0">&gt;&lt;/</span>title<span class="sy0">&gt;</span>
  <span class="sy0">&lt;/</span>head<span class="sy0">&gt;</span>
  <span class="sy0">&lt;</span>body<span class="sy0">&gt;</span>
  <span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$menu</span> <span class="kw2">?&gt;</span>
  <span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$content</span> <span class="kw2">?&gt;</span>
&nbsp;
  <span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$copyright</span><span class="sy0">;</span> <span class="kw2">?&gt;</span>
  <span class="sy0">&lt;/</span>body<span class="sy0">&gt;</span>
<span class="sy0">&lt;/</span>html<span class="sy0">&gt;</span></pre>
<p>
Obviously you&#039;ll need to add some meaningful content to the views <img src="../lib/images/smileys/icon_smile.gif" class="middle" alt=":-)" />

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexerad45.gif?id=addons%3Atemplate&amp;1324588198" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/addons/template by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


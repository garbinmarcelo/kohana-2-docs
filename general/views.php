<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/general/views by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    general:views    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-01-17T17:29:07-0600" />
<meta name="keywords" content="general,views" />
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
<li class="level1"><div class="li"><span class="li"><a href="#views" class="toc">Views</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#overview" class="toc">Overview</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#creating_views" class="toc">Creating views</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#loading_views" class="toc">Loading views</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#new_object" class="toc">New object</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#factory" class="toc">Factory</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#passing_data_into_your_views" class="toc">Passing data into your views</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#views_within_views" class="toc">Views within views</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#data_scope" class="toc">Data scope</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#rendering" class="toc">Rendering</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#complete_example" class="toc">Complete Example</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Fill in empty topics</td>
	</tr>
</table>



<h1><a name="views" id="views">Views</a></h1>
<div class="level1">

<p>

See <a href="../core/view.php" class="wikilink1" title="core:view">Core:View class</a> for more in depth information on using views in your code.
</p>

</div>

<h2><a name="overview" id="overview">Overview</a></h2>
<div class="level2">

<p>

Views are files that contain the display information for your application. This is most commonly <acronym title="HyperText Markup Language">HTML</acronym>, <acronym title="Cascading Style Sheets">CSS</acronym> and JavaScript but can be anything you require such as <acronym title="Extensible Markup Language">XML</acronym> or Json for <acronym title="Asynchronous JavaScript and XML">AJAX</acronym> output. The purpose of views is to keep this information separate from your application logic for easy reusability and cleaner code.
</p>

<p>
While this is true, views themselves can contain code used for displaying the data you pass into them. For example, looping through an array of product information and display each one on a new table row. Views are still <acronym title="Hypertext Preprocessor">PHP</acronym> files so you can use any code you normally would. Views are executed in the Controller namespace so you have access to all resources you have loaded into $this→
</p>

<p>
When this view is rendered it is executed just as any <acronym title="Hypertext Preprocessor">PHP</acronym> script would and the output from it is returned (or sent to the browser if you so wish).
</p>

</div>

<h2><a name="creating_views" id="creating_views">Creating views</a></h2>
<div class="level2">

<p>

Views need to be placed in the <code>views</code> directory. The filename minus the extension becomes the view&#039;s name. Views can be arranged in sub-directories if needed but the path must be specified when loading them.
</p>

<p>
<strong>Examples</strong>
</p>
<pre class="code php"><span class="co1">// Filename home.php</span>
<span class="re1">$view</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'home'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Filename list.php in sub-directory 'products'</span>
<span class="re1">$view</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'products/list'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="loading_views" id="loading_views">Loading views</a></h2>
<div class="level2">

<p>

There are 3 ways to load a view. It is important to note that this simply creates an instance of the View class, at this point the view file has not been read and no output is created. This only happens when it is rendered.
</p>

</div>

<h3><a name="new_object" id="new_object">New object</a></h3>
<div class="level3">

<p>

Create a new instance of the class.
</p>
<pre class="code php"><span class="re1">$view</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'welcome'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="factory" id="factory">Factory</a></h3>
<div class="level3">

<p>

Use the factory() static method. This is essentially the same as creating a new object except it is immediately returned so method chaining is possible.
</p>
<pre class="code php"><span class="re1">$view</span> <span class="sy0">=</span> View<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'welcome'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="passing_data_into_your_views" id="passing_data_into_your_views">Passing data into your views</a></h2>
<div class="level2">

<p>
Data is passed from the controller to the view by way of an an object.
</p>

<p>
<strong>Let&#039;s look at the Controller:</strong>

</p>
<pre class="code php"><span class="kw2">class</span> Welcome_Controller <span class="kw2">extends</span> Controller <span class="br0">&#123;</span>
&nbsp;
    <span class="kw2">function</span> index<span class="br0">&#40;</span><span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
        <span class="co1">// Load the view as an object</span>
        <span class="re1">$view</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'yourview'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
        <span class="co1">// Adding variables to the object that will be displayed in the view</span>
        <span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">title</span>   <span class="sy0">=</span> <span class="st0">&quot;Welcome to Kohana !&quot;</span><span class="sy0">;</span>
        <span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">heading</span> <span class="sy0">=</span> <span class="st0">&quot;My Heading&quot;</span><span class="sy0">;</span>
        <span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">content</span> <span class="sy0">=</span> <span class="st0">&quot;My content here.&quot;</span><span class="sy0">;</span>
&nbsp;
        <span class="co1">// Render the view</span>
        <span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
<p>
<strong>
Now open your view file and add variables:</strong>

</p>
<pre class="code php"><span class="sy0">&lt;</span>html<span class="sy0">&gt;</span>
    <span class="sy0">&lt;</span>head<span class="sy0">&gt;</span>
        <span class="sy0">&lt;</span>title<span class="sy0">&gt;&lt;</span>?php <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$title</span><span class="sy0">;</span>?<span class="sy0">&gt;&lt;/</span>title<span class="sy0">&gt;</span>
    <span class="sy0">&lt;/</span>head<span class="sy0">&gt;</span>
    <span class="sy0">&lt;</span>body<span class="sy0">&gt;</span>
        <span class="sy0">&lt;</span>h1<span class="sy0">&gt;&lt;</span>?php <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$heading</span><span class="sy0">;</span>?<span class="sy0">&gt;&lt;/</span>h1<span class="sy0">&gt;</span>
        <span class="sy0">&lt;</span>p<span class="sy0">&gt;&lt;</span>?php <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$content</span><span class="sy0">;</span>?<span class="sy0">&gt;&lt;/</span>p<span class="sy0">&gt;</span>
    <span class="sy0">&lt;/</span>body<span class="sy0">&gt;</span>
<span class="sy0">&lt;/</span>html<span class="sy0">&gt;</span></pre>

<div class='box'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<p class='box_title'>Note:</p>
<div class='box_content'><p>Use of arrays (CodeIgniter style) is still possible in Kohana, see more examples below</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


</div>

<h2><a name="views_within_views" id="views_within_views">Views within views</a></h2>
<div class="level2">

<p>
To load views within other views:

</p>
<pre class="code php"><span class="co1">// Example of code inside your Controller</span>
<span class="re1">$view</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'template'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">header</span>  <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'header'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">content</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'content'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">footer</span>  <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'footer'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">header</span><span class="sy0">-&gt;</span><span class="me1">title</span>     <span class="sy0">=</span> <span class="st0">'Title of page'</span><span class="sy0">;</span>     <span class="co1">// string for variable $title in view header.php</span>
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">content</span><span class="sy0">-&gt;</span><span class="me1">heading</span>  <span class="sy0">=</span> <span class="st0">'Heading of your page'</span><span class="sy0">;</span> <span class="co1">// string for variable $heading in view content.php</span>
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">footer</span><span class="sy0">-&gt;</span><span class="me1">copyright</span> <span class="sy0">=</span> <span class="st0">'Copyright'</span><span class="sy0">;</span>         <span class="co1">// string for variable $copyright in view footer.php</span>
&nbsp;
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
<strong>View:</strong> template.php
</p>
<pre class="code php"><span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$header</span><span class="sy0">;</span> <span class="kw2">?&gt;</span>
<span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$content</span><span class="sy0">;</span> <span class="kw2">?&gt;</span>
<span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$footer</span><span class="sy0">;</span> <span class="kw2">?&gt;</span></pre>
<p>
<strong>View:</strong> header.php

</p>
<pre class="code php"><span class="sy0">&lt;</span>html<span class="sy0">&gt;</span>
  <span class="sy0">&lt;</span>head<span class="sy0">&gt;</span>
    <span class="sy0">&lt;</span>title<span class="sy0">&gt;&lt;</span>?php <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$title</span><span class="sy0">;</span> ?<span class="sy0">&gt;&lt;/</span>title<span class="sy0">&gt;</span>
  <span class="sy0">&lt;/</span>head<span class="sy0">&gt;</span></pre>
<p>
<strong>View:</strong> content.php

</p>
<pre class="code php">  <span class="sy0">&lt;</span>body<span class="sy0">&gt;</span>
  <span class="sy0">&lt;</span>h1<span class="sy0">&gt;&lt;</span>?php <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$heading</span><span class="sy0">;</span> ?<span class="sy0">&gt;&lt;/</span>h1<span class="sy0">&gt;</span></pre>
<p>
<strong>View:</strong> footer.php

</p>
<pre class="code php">  <span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$copyright</span><span class="sy0">;</span> <span class="kw2">?&gt;</span>
  <span class="sy0">&lt;/</span>body<span class="sy0">&gt;</span>
<span class="sy0">&lt;/</span>html<span class="sy0">&gt;</span></pre>
<p>
<strong>Output:</strong>

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/html.php"><span class="kw2">&lt;html&gt;</span></a></span>
  <span class="sc2"><a href="http://december.com/html/4/element/head.php"><span class="kw2">&lt;head&gt;</span></a></span>
    <span class="sc2"><a href="http://december.com/html/4/element/title.php"><span class="kw2">&lt;title&gt;</span></a></span>Title of page<span class="sc2"><span class="kw2">&lt;/title&gt;</span></span>
  <span class="sc2"><span class="kw2">&lt;/head&gt;</span></span>
  <span class="sc2"><a href="http://december.com/html/4/element/body.php"><span class="kw2">&lt;body&gt;</span></a></span>
  <span class="sc2"><a href="http://december.com/html/4/element/h1.php"><span class="kw2">&lt;h1&gt;</span></a></span>Heading of your page<span class="sc2"><span class="kw2">&lt;/h1&gt;</span></span>
  Copyright
  <span class="sc2"><span class="kw2">&lt;/body&gt;</span></span>
<span class="sc2"><span class="kw2">&lt;/html&gt;</span></span></pre>
<p>
Of course, using stylesheets and applying them to divs within your layout would give the exact design you want. You may also need custom helpers to generate navigation, breadcrumbs and dynamic content (banners, customized ads) to add a professional touch.
</p>

<p>
<strong>Note:</strong> Please also consider using the <a href="../addons/template.php" class="wikilink1" title="addons:template">Template_Controller</a>, this can merge the header.php and footer.php into one file.
</p>

</div>

<h2><a name="data_scope" id="data_scope">Data scope</a></h2>
<div class="level2">

</div>

<h2><a name="rendering" id="rendering">Rendering</a></h2>
<div class="level2">

<p>
Execute the render method on the view instance.

</p>

</div>

<h4><a name="examples" id="examples">Examples</a></h4>
<div class="level4">

<p>
Example 1: Render on View instance

</p>
<pre class="code php"><span class="re1">$view</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'sample'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

Example 2: Force Render on View::factory

</p>
<pre class="code php">View<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'sample'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

Example 3: Inline in existing view

</p>
<pre class="code php"><span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> View<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'sample'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="kw2">?&gt;</span></pre>
<p>

See <a href="../core/view.php" class="wikilink1" title="core:view">Core:View class</a> for more information about Core:View→render parameters
</p>

</div>

<h2><a name="complete_example" id="complete_example">Complete Example</a></h2>
<div class="level2">

<p>

<strong>Controller:</strong> products.php

</p>
<pre class="code php"><span class="re1">$products</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span>
    <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span>
        <span class="st0">'name'</span> <span class="sy0">=&gt;</span> <span class="st0">'Product1'</span><span class="sy0">,</span>
        <span class="st0">'quantity'</span> <span class="sy0">=&gt;</span> <span class="st0">'3'</span>
    <span class="br0">&#41;</span><span class="sy0">,</span>
    <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span>
        <span class="st0">'name'</span> <span class="sy0">=&gt;</span> <span class="st0">'Product2'</span><span class="sy0">,</span>
        <span class="st0">'quantity'</span> <span class="sy0">=&gt;</span> <span class="st0">'7'</span>
    <span class="br0">&#41;</span>
<span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$view</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'products/list'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">title</span> <span class="sy0">=</span> <span class="st0">'Products'</span><span class="sy0">;</span>
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><span class="st0">'products'</span><span class="sy0">,</span> <span class="re1">$products</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$view</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
An array of product data is defined. The products list view is loaded and the variables <code>title</code> and <code>products</code> are set. The view is rendered and outputted straight to the browser.
</p>

<p>
<strong>View:</strong> products/list.php

</p>
<pre class="code php"><span class="sy0">&lt;</span>html<span class="sy0">&gt;</span>
<span class="sy0">&lt;</span>head<span class="sy0">&gt;</span>
    <span class="sy0">&lt;</span>title<span class="sy0">&gt;&lt;</span>?<span class="sy0">=</span> <span class="re1">$title</span> ?<span class="sy0">&gt;&lt;/</span>title<span class="sy0">&gt;</span>
<span class="sy0">&lt;/</span>head<span class="sy0">&gt;</span>
<span class="sy0">&lt;</span>body<span class="sy0">&gt;</span>
    <span class="sy0">&lt;</span>h1<span class="sy0">&gt;&lt;</span>?<span class="sy0">=</span> <span class="re1">$title</span> ?<span class="sy0">&gt;&lt;/</span>h1<span class="sy0">&gt;</span>
    <span class="sy0">&lt;</span>table<span class="sy0">&gt;</span>
        <span class="kw2">&lt;?php</span> <span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$products</span> <span class="kw1">as</span> <span class="re1">$product</span><span class="br0">&#41;</span><span class="sy0">:</span> <span class="kw2">?&gt;</span>
            <span class="sy0">&lt;</span>tr<span class="sy0">&gt;&lt;</span>td<span class="sy0">&gt;&lt;</span>?<span class="sy0">=</span> <span class="re1">$product</span><span class="br0">&#91;</span><span class="st0">'name'</span><span class="br0">&#93;</span> ?<span class="sy0">&gt;&lt;/</span>td<span class="sy0">&gt;&lt;</span>td<span class="sy0">&gt;&lt;</span>?<span class="sy0">=</span> <span class="re1">$product</span><span class="br0">&#91;</span><span class="st0">'quantity'</span><span class="br0">&#93;</span> ?<span class="sy0">&gt;&lt;/</span>td<span class="sy0">&gt;&lt;/</span>tr<span class="sy0">&gt;</span>
        <span class="kw2">&lt;?php</span> <span class="kw1">endforeach</span><span class="sy0">;</span> <span class="kw2">?&gt;</span>
    <span class="sy0">&lt;/</span>table<span class="sy0">&gt;</span>
<span class="sy0">&lt;/</span>body<span class="sy0">&gt;</span>
<span class="sy0">&lt;/</span>html<span class="sy0">&gt;</span></pre>
<p>
The <code>title</code> variable is echo&#039;d. The <code>products</code> array is iterated over and each product is echo&#039;d within table row and column tags.
</p>

<p>
<strong>Output:</strong>

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/html.php"><span class="kw2">&lt;html&gt;</span></a></span>
<span class="sc2"><a href="http://december.com/html/4/element/head.php"><span class="kw2">&lt;head&gt;</span></a></span>
    <span class="sc2"><a href="http://december.com/html/4/element/title.php"><span class="kw2">&lt;title&gt;</span></a></span>Products<span class="sc2"><span class="kw2">&lt;/title&gt;</span></span>
<span class="sc2"><span class="kw2">&lt;/head&gt;</span></span>
<span class="sc2"><a href="http://december.com/html/4/element/body.php"><span class="kw2">&lt;body&gt;</span></a></span>
    <span class="sc2"><a href="http://december.com/html/4/element/h1.php"><span class="kw2">&lt;h1&gt;</span></a></span>Products<span class="sc2"><span class="kw2">&lt;/h1&gt;</span></span>
    <span class="sc2"><a href="http://december.com/html/4/element/table.php"><span class="kw2">&lt;table&gt;</span></a></span>
        <span class="sc2"><a href="http://december.com/html/4/element/tr.php"><span class="kw2">&lt;tr&gt;</span></a></span><span class="sc2"><a href="http://december.com/html/4/element/td.php"><span class="kw2">&lt;td&gt;</span></a></span>Product1<span class="sc2"><span class="kw2">&lt;/td&gt;</span></span><span class="sc2"><a href="http://december.com/html/4/element/td.php"><span class="kw2">&lt;td&gt;</span></a></span>3<span class="sc2"><span class="kw2">&lt;/td&gt;</span></span><span class="sc2"><span class="kw2">&lt;/tr&gt;</span></span>
        <span class="sc2"><a href="http://december.com/html/4/element/tr.php"><span class="kw2">&lt;tr&gt;</span></a></span><span class="sc2"><a href="http://december.com/html/4/element/td.php"><span class="kw2">&lt;td&gt;</span></a></span>Product2<span class="sc2"><span class="kw2">&lt;/td&gt;</span></span><span class="sc2"><a href="http://december.com/html/4/element/td.php"><span class="kw2">&lt;td&gt;</span></a></span>7<span class="sc2"><span class="kw2">&lt;/td&gt;</span></span><span class="sc2"><span class="kw2">&lt;/tr&gt;</span></span>
    <span class="sc2"><span class="kw2">&lt;/table&gt;</span></span>
<span class="sc2"><span class="kw2">&lt;/body&gt;</span></span>
<span class="sc2"><span class="kw2">&lt;/html&gt;</span></span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer198f.gif?id=general%3Aviews&amp;1324588191" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/general/views by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


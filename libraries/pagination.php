<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/pagination by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:pagination    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-08-06T03:48:20-0500" />
<meta name="keywords" content="libraries,pagination" />
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
<li class="level1"><div class="li"><span class="li"><a href="#pagination_library" class="toc">Pagination Library</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#loading_the_pagination_library" class="toc">Loading the Pagination library</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#pagination_configuration_properties" class="toc">Pagination configuration properties</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#pagination_class_properties" class="toc">Pagination class properties</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#initialize" class="toc">initialize()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#render" class="toc">render()</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#example_one" class="toc">Example One</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#example_two" class="toc">Example Two</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#creating_customized_pagination_styles" class="toc">Creating Customized Pagination Styles</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">content needs to be reorganized, more explanation for config and class properties</td>
	</tr>
</table>



<h1><a name="pagination_library" id="pagination_library">Pagination Library</a></h1>
<div class="level1">

<p>

The Pagination library automatically generates styled links like, 

<a href="#">&laquo; First</a>&nbsp;&nbsp;
<a href="#">&lt;</a>&nbsp;
<a href="#">1</a>&nbsp;
<a href="#">2</a>&nbsp;
<b>3</b>&nbsp;
<a href="#">4</a>&nbsp;
<a href="#">5</a>&nbsp;
<a href="#">&gt;</a>&nbsp;&nbsp;
<a href="#">Last &raquo;</a>

for navigating through pages in a website.
</p>

<p>
The links refer to the <strong>Page</strong> number and <strong>Not</strong> the offset of the data.
</p>

<p>
The library is easily configurable. Default Pagination Settings are located in <code>system/config/pagination.php.</code> You can override the system settings by creating a pagination config file in your <code>application/config</code> or by passing configuration settings to the library at run time. 
</p>

<p>
Please note that the library does not interact with your data in any way, it generates links. The developer must write the code that fetches the data referred to by the links.  The <code>sql_offset</code> property automatically contains the proper row offset for you, based upon the current page and the <code>items_per_page</code> configuration property.  These values should be used in your query for <code>LIMIT</code> and <code>OFFSET</code>.
</p>

<p>
The page links are generated using a <strong>View</strong> file located in <code>system/views/pagination.</code> Four styles are provided. You may edit these to suit your needs, or you can create a new, custom pagination view. You may also override the system styles by copying the views to your <code>application/views/pagination</code> directory.
</p>

<p>
Additional information:
<a href="http://www.ninjapenguin.co.uk/blog/2008/06/21/kohana-pagination-tutorial/" class="urlextern" title="http://www.ninjapenguin.co.uk/blog/2008/06/21/kohana-pagination-tutorial/"  rel="nofollow">Pagination Tutorial</a>
</p>

</div>

<h2><a name="loading_the_pagination_library" id="loading_the_pagination_library">Loading the Pagination library</a></h2>
<div class="level2">

<p>

Load the Pagination class in your controller using the <strong>new</strong> keyword
</p>

<p>
Configuration settings are obtained from <code>config/pagination.php</code> Settings may also be passed dynamically to the class as an array.

</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">pagination</span> <span class="sy0">=</span> <span class="kw2">new</span> Pagination<span class="br0">&#40;</span><span class="re1">$config</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Access to the library is available through <code>$this→pagination</code>
</p>

</div>

<h2><a name="pagination_configuration_properties" id="pagination_configuration_properties">Pagination configuration properties</a></h2>
<div class="level2">

<p>

The following configuration properties can be passed to the pagination constructor:
</p>
<ul>
<li class="level1"><div class="li"> base_url</div>
</li>
<li class="level1"><div class="li"> directory</div>
</li>
<li class="level1"><div class="li"> style</div>
</li>
<li class="level1"><div class="li"> uri_segment</div>
</li>
<li class="level1"><div class="li"> query_string</div>
</li>
<li class="level1"><div class="li"> items_per_page</div>
</li>
<li class="level1"><div class="li"> total_items</div>
</li>
<li class="level1"><div class="li"> auto_hide</div>
</li>
</ul>

</div>

<h2><a name="pagination_class_properties" id="pagination_class_properties">Pagination class properties</a></h2>
<div class="level2">

<p>

The following pagination class properties are auto-generated and available for use in your controller:
</p>
<ul>
<li class="level1"><div class="li"> url</div>
</li>
<li class="level1"><div class="li"> current_page</div>
</li>
<li class="level1"><div class="li"> total_pages  </div>
</li>
<li class="level1"><div class="li"> current_first_item  </div>
</li>
<li class="level1"><div class="li"> current_last_item   </div>
</li>
<li class="level1"><div class="li"> first_page </div>
</li>
<li class="level1"><div class="li"> last_page </div>
</li>
<li class="level1"><div class="li"> previous_page </div>
</li>
<li class="level1"><div class="li"> next_page</div>
</li>
<li class="level1"><div class="li"> sql_offset </div>
</li>
<li class="level1"><div class="li"> sql_limit</div>
</li>
</ul>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="initialize" id="initialize">initialize()</a></h3>
<div class="level3">

<p>

<code>$this→pagination→initialize()</code> is used to dynamically set pagination configuration. It is automatically called by the library constructor, so there is no need to call this method explicitly, unless you wish to overwrite a config setting dynamically.
</p>
<pre class="code php"><span class="co1">// Will overwrite only the existing setting for this config item</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">pagination</span><span class="sy0">-&gt;</span><span class="me1">initialize</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'uri_segment'</span> <span class="sy0">=&gt;</span> <span class="st0">'pages'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="render" id="render">render()</a></h3>
<div class="level3">

<p>

<code>$this→pagination→render()</code> is used to generate the link output for display. Allows you to select the pagination style dynamically.
Please note: The links may also be output by simply echoing <code>$this→pagination</code>

</p>
<pre class="code php"><span class="co1">// Will overwrite the default 'classic' style with 'digg' style</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">pagination</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="st0">'digg'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="example_one" id="example_one">Example One</a></h2>
<div class="level2">
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">pagination</span> <span class="sy0">=</span> <span class="kw2">new</span> Pagination<span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span>
    <span class="co1">// 'base_url'    =&gt; 'welcome/pagination_example/page/', // base_url will default to current uri</span>
    <span class="st0">'uri_segment'</span>    <span class="sy0">=&gt;</span> <span class="st0">'page'</span><span class="sy0">,</span> <span class="co1">// pass a string as uri_segment to trigger former 'label' functionality</span>
    <span class="st0">'total_items'</span>    <span class="sy0">=&gt;</span> <span class="nu0">254</span><span class="sy0">,</span> <span class="co1">// use db count query here of course</span>
    <span class="st0">'items_per_page'</span> <span class="sy0">=&gt;</span> <span class="nu0">10</span><span class="sy0">,</span> <span class="co1">// it may be handy to set defaults for stuff like this in config/pagination.php</span>
    <span class="st0">'style'</span>          <span class="sy0">=&gt;</span> <span class="st0">'classic'</span> <span class="co1">// pick one from: classic (default), digg, extended, punbb, or add your own!</span>
<span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Just echoing it is enough to display the links (__toString() rocks!)</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'Classic style: '</span><span class="sy0">.</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">pagination</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// You can also use the render() method and pick a style on the fly if you want</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;hr /&gt;Digg style:     '</span><span class="sy0">.</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">pagination</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="st0">'digg'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;hr /&gt;Extended style: '</span><span class="sy0">.</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">pagination</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="st0">'extended'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;hr /&gt;PunBB style:    '</span><span class="sy0">.</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">pagination</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="st0">'punbb'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'done in {execution_time} seconds'</span><span class="sy0">;</span></pre>
<p>
This will output:
</p>
<div class='box'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<div class='box_content'><p>

Classic style: 
<p class="pagination">
<strong>1</strong>
<a href="http://localhost/controller/page/{page}">2</a>
<a href="http://localhost/controller/page/{page}">3</a>
<a href="http://localhost/controller/page/{page}">4</a>
<a href="http://localhost/controller/page/{page}">5</a>
<a href="http://localhost/controller/page/{page}">6</a>
<a href="http://localhost/controller/page/{page}">7</a>
<a href="http://localhost/controller/page/{page}">8</a>
<a href="http://localhost/controller/page/{page}">9</a>
<a href="http://localhost/controller/page/{page}">10</a>
<a href="http://localhost/controller/page/{page}">11</a>
<a href="http://localhost/controller/page/{page}">13</a>
<a href="http://localhost/controller/page/{page}">14</a>
<a href="http://localhost/controller/page/{page}">15</a>
<a href="http://localhost/controller/page/{page}">16</a>
<a href="http://localhost/controller/page/{page}">17</a>
<a href="http://localhost/controller/page/{page}">18</a>
<a href="http://localhost/controller/page/{page}">19</a>
<a href="http://localhost/controller/page/{page}">20</a>
<a href="http://localhost/controller/page/{page}">21</a>
<a href="http://localhost/controller/page/{page}">22</a>
<a href="http://localhost/controller/page/{page}">23</a>
<a href="http://localhost/controller/page/{page}">24</a>
<a href="http://localhost/controller/page/{page}">25</a>
<a href="http://localhost/controller/page/{page}">26</a>
<a href="http://localhost/controller/page/{page}">&gt;</a>
<a href="http://localhost/controller/page/{page}">last&nbsp;&rsaquo;</a>
</p>

<hr />
Digg style:     
<p class="pagination">
&laquo;&nbsp;previous	
<strong>1</strong>
<a href="http://localhost/controller/page/{page}">2</a>
<a href="http://localhost/controller/page/{page}">3</a>
<a href="http://localhost/controller/page/{page}">4</a>
<a href="http://localhost/controller/page/{page}">5</a>
<a href="http://localhost/controller/page/{page}">6</a>
<a href="http://localhost/controller/page/{page}">7</a>
<a href="http://localhost/controller/page/{page}">8</a>
<a href="http://localhost/controller/page/{page}">9</a>
<a href="http://localhost/controller/page/{page}">10</a>

&hellip;

<a href="http://localhost/controller/page/{page}">25</a>
<a href="http://localhost/controller/page/{page}">26</a>

<a href="http://localhost/controller/page/{page}">next&nbsp;&raquo;</a>
</p>

<hr />
Extended style: 
<p class="pagination">
&laquo;&nbsp;previous	
| page 1 of 26
| items 1&ndash;10 of 254
| <a href="http://localhost/controller/page/{page}">next&nbsp;&raquo;</a>
</p>

<hr />
PunBB style:    
<p class="pagination">
pages:
<strong>1</strong>
<a href="http://localhost/controller/page/{page}">2</a>
<a href="http://localhost/controller/page/{page}">3</a>
&hellip;
<a href="http://localhost/controller/page/{page}">26</a>
</p>

</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


<p>
If you are seeing “pagination.next”, this is because Pagination uses <a href="../core/kohana.php" class="wikilink1" title="core:kohana">Kohana::lang</a> to look up the text from your <a href="../core/config.php" class="wikilink1" title="core:config">locale</a>. Pagination locale text is stored in “system/i18n/[your_locale]/pagination.php”
</p>

</div>

<h2><a name="example_two" id="example_two">Example Two</a></h2>
<div class="level2">

<p>

Excerpt from the <strong>controller</strong> method 
</p>
<pre class="code php"><span class="kw2">public</span> <span class="kw2">function</span> page<span class="br0">&#40;</span><span class="re1">$page_no</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <span class="re1">$content</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'pages/items'</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="re1">$items</span> <span class="sy0">=</span> <span class="kw2">new</span> Items_Model<span class="sy0">;</span>
&nbsp;
    <span class="re1">$content</span><span class="sy0">-&gt;</span><span class="me1">items</span> <span class="sy0">=</span> <span class="re1">$items</span><span class="sy0">-&gt;</span><span class="me1">get_items</span><span class="br0">&#40;</span><span class="re1">$page_no</span><span class="sy0">,</span> <span class="nu0">10</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// page to get starting at offset, number of items to get</span>
&nbsp;
    <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">pagination</span> <span class="sy0">=</span> <span class="kw2">new</span> Pagination<span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span>
        <span class="st0">'base_url'</span>    <span class="sy0">=&gt;</span> <span class="st0">'items/page/'</span><span class="sy0">,</span> <span class="co1">// Set our base URL to controller 'items' and method 'page'</span>
        <span class="st0">'uri_segment'</span> <span class="sy0">=&gt;</span> <span class="st0">'page'</span><span class="sy0">,</span> <span class="co1">// Our URI will look something like http://domain/items/page/19</span>
        <span class="st0">'total_items'</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/count"><span class="kw3">count</span></a><span class="br0">&#40;</span><span class="re1">$items</span><span class="sy0">-&gt;</span><span class="me1">get_item_count</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="co1">// Total number of items.</span>
&nbsp;
    <span class="co1">// Note that other config items are obtained from the pagination config file.</span>
    <span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
    <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span>
        <span class="st0">'title'</span>   <span class="sy0">=&gt;</span> <span class="st0">'Items'</span><span class="sy0">,</span>
        <span class="st0">'content'</span> <span class="sy0">=&gt;</span> <span class="re1">$content</span>
    <span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
Excerpt from the <strong>View</strong>, showing how to display the links.
</p>
<pre class="code php"><span class="sy0">&lt;</span>h3<span class="sy0">&gt;</span>Items<span class="sy0">&lt;/</span>h3<span class="sy0">&gt;</span>
<span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">pagination</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="kw2">?&gt;</span></pre>
</div>

<h2><a name="creating_customized_pagination_styles" id="creating_customized_pagination_styles">Creating Customized Pagination Styles</a></h2>
<div class="level2">

<p>

The default Kohana pagination styles are located in the <code>system/views/pagination</code> directory.  To customize an existing style or create a new pagination style, do the following:
</p>
<ol>
<li class="level1"><div class="li"> Create a new directory called <code>application/views/pagination</code></div>
</li>
<li class="level1"><div class="li"> Copy one of the existing pagination styles from <code>system/views/pagination</code> (e.g classic.php) to <code>application/views/pagination</code></div>
</li>
<li class="level1"><div class="li"> You have the option to either rename the existing pagination style to create a completely new style (e.g. custom.php) or keep the same name to override one of the default styles.</div>
</li>
</ol>

<p>

<strong>Note:</strong> If you create a new pagination style (by renaming the file), you must reference the new custom filename when creating your pagination links (e.g. <code>$this→pagination→render(&#039;custom&#039;)</code>)

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer6038.gif?id=libraries%3Apagination&amp;1324588200" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/pagination by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


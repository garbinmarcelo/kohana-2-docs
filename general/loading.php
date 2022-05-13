<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/general/loading by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    general:loading    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-12-28T07:51:43-0600" />
<meta name="keywords" content="general,loading" />
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
<li class="level1"><div class="li"><span class="li"><a href="#loading_resources" class="toc">Loading resources</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#autoloading" class="toc">Autoloading</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#loading_libraries" class="toc">Loading libraries</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#loading_database" class="toc">Loading database</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#loading_helpers" class="toc">Loading helpers</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#loading_views" class="toc">Loading views</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#loading_models" class="toc">Loading models</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Expand, clarify, elaborate and more examples. Autoloading via Kohana::auto_load and naming rules.</td>
	</tr>
</table>



<h1><a name="loading_resources" id="loading_resources">Loading resources</a></h1>
<div class="level1">


<div class='box'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<p class='box_title'>Note:</p>
<div class='box_content'><p>
Some libraries are always loaded automatically: <a href="../libraries/uri.php" class="wikilink1" title="libraries:uri">URI</a>, Router and <a href="../libraries/input.php" class="wikilink1" title="libraries:input">Input</a>.
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


</div>

<h2><a name="autoloading" id="autoloading">Autoloading</a></h2>
<div class="level2">

<p>
<acronym title="Hypertext Preprocessor">PHP</acronym> has functionality to <a href="http://php.net/manual/en/language.oop5.autoload.php" class="urlextern" title="http://php.net/manual/en/language.oop5.autoload.php"  rel="nofollow">automatically load</a> files if a certain class has not been loaded yet. Kohana employs this functionality.
</p>

<p>
<strong>Example</strong>

</p>
<pre class="code php"><span class="re1">$user</span> <span class="sy0">=</span> <span class="kw2">new</span> User_Model<span class="sy0">;</span>
<span class="re1">$cache</span> <span class="sy0">=</span> <span class="kw2">new</span> Cache<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
html<span class="sy0">::</span><span class="me2">stylesheet</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">layout</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'layout'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="loading_libraries" id="loading_libraries">Loading libraries</a></h2>
<div class="level2">

<p>
Libraries can be autoloaded:

</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">cache</span><span class="sy0">=</span> <span class="kw2">new</span> Cache<span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">cache</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'mycache'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Some of the libraries (<a href="../libraries/calendar.php" class="wikilink1" title="libraries:calendar">Calendar</a>, <a href="../libraries/captcha.php" class="wikilink1" title="libraries:captcha">Captcha</a>, <a href="../libraries/image.php" class="wikilink1" title="libraries:image">Image</a>, <a href="../libraries/orm.php" class="wikilink1" title="libraries:orm">ORM</a>, <a href="../libraries/pagination.php" class="wikilink1" title="libraries:pagination">Pagination</a>, <a href="../libraries/validation.php" class="wikilink1" title="libraries:validation">Validation</a>, <a href="../core/view.php" class="wikilink1" title="core:view">View</a>) provide another method, <code>factory</code>, to load instantiate and use them. This way methods can be chained efficiently:
</p>

<p>

<strong>Examples:</strong>

</p>
<pre class="code php">View<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'some_view'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'title'</span> <span class="sy0">=&gt;</span> <span class="st0">'Welcome to Kohana !'</span><span class="sy0">,</span> <span class="st0">'breadcrumb'</span> <span class="sy0">=&gt;</span> <span class="st0">'Kohana &gt; Welcome'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="kw2">true</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$post</span> <span class="sy0">=</span> Validation<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="re1">$_POST</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">pre_filter</span><span class="br0">&#40;</span><span class="st0">'trim'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">add_rules</span><span class="br0">&#40;</span><span class="st0">'field1'</span><span class="sy0">,</span> <span class="st0">'length[2,15]'</span><span class="sy0">,</span><span class="st0">'alpha_numeric'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$page</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'page'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><span class="st0">'name'</span><span class="sy0">,</span> <span class="st0">'index'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$image</span> <span class="sy0">=</span> Image<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'moo.jpg'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">resize</span><span class="br0">&#40;</span><span class="nu0">400</span><span class="sy0">,</span> <span class="kw2">NULL</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">crop</span><span class="br0">&#40;</span><span class="nu0">400</span><span class="sy0">,</span> <span class="nu0">350</span><span class="sy0">,</span> <span class="st0">'top'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">sharpen</span><span class="br0">&#40;</span><span class="nu0">20</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">quality</span><span class="br0">&#40;</span><span class="nu0">75</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It is recommended to access the Database and Session objects via the singleton instance, rather than using <code>new</code>:
</p>

<p>
<code>$db = Database::instance()</code> and <code>$s = Session::instance()</code> Note: If the objects do not exist, they will be instantiated.
</p>

<p>
Example: Load Session and Database in a Base Controller, and access the objects in your extended controllers.

</p>
<pre class="code php"><span class="co1">// Base Controller code</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span> <span class="sy0">=</span> Database<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="re1">$db_group</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span> <span class="sy0">=</span> Session<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// Now in any controller which extends Base Controller</span>
<span class="re1">$var</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'var'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$query</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">query</span><span class="br0">&#40;</span><span class="st0">'SELECT * FROM `table`);</span></pre>
</div>

<h2><a name="loading_database" id="loading_database">Loading database</a></h2>
<div class="level2">

<p>
Loading the database can also be done like this

</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span> <span class="sy0">=</span> <span class="kw2">new</span> Database<span class="sy0">;</span></pre>
<p>
<strong><em class="u">Loading database in models</em></strong>
</p>

<p>
In models the database is loaded automatically as far as you call <code>parent::__construct();</code> in your constructor.
</p>
<pre class="code php"><span class="kw2">public</span> <span class="kw2">function</span> __construct<span class="br0">&#40;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
	<span class="co1">// load database library into $this-&gt;db (can be omitted if not required)</span>
	parent<span class="sy0">::</span>__construct<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
</div>

<h2><a name="loading_helpers" id="loading_helpers">Loading helpers</a></h2>
<div class="level2">

<p>

Using a helper is fairly simple. Just call method as a static method. The class will be loaded automatically

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> url<span class="sy0">::</span><span class="me2">base</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">breadcrumb</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="loading_views" id="loading_views">Loading views</a></h2>
<div class="level2">

<p>
Views are the final output of Kohana. They can be embedded into each other so as to help you in making your site. The actual rendering of a view is not done when you load one.  More on views can be found on the <a href="views.php" class="wikilink1" title="general:views">views page</a>. Information on the view class can be found on the <a href="../core/view.php" class="wikilink1" title="core:view">View class</a> page.
</p>

<p>
<strong>Example</strong>

</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">layout</span><span class="sy0">=</span><span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'layouts/layout'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// will load the file views/layouts/layout.php</span>
&nbsp;
<span class="co1">//will render the view</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">layout</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="loading_models" id="loading_models">Loading models</a></h2>
<div class="level2">

<p>

Loading a model is the same as loading a view except you must append &#039;_Model&#039; to your model name. More can be found on the <a href="models.php" class="wikilink1" title="general:models">Models</a> page.
</p>

<p>
For instance your model is User_Model, the filename would be <code>models/user.php</code> The loading of the model happens in the controller.
<strong>Example</strong>

</p>
<pre class="code php"><span class="re1">$user</span> <span class="sy0">=</span> <span class="kw2">new</span> User_Model<span class="sy0">;</span>
<span class="re1">$name</span> <span class="sy0">=</span> <span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">get_user_name</span><span class="br0">&#40;</span><span class="re1">$id</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//get_user_name is a method defined in User_Model</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer7f7b.gif?id=general%3Aloading&amp;1324588190" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/general/loading by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/general/libraries by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    general:libraries    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-04-18T09:40:13-0500" />
<meta name="keywords" content="general,libraries" />
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
<li class="level1"><div class="li"><span class="li"><a href="#libraries" class="toc">Libraries</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#adding_your_own_libraries" class="toc">Adding your own libraries</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#extending_libraries" class="toc">Extending libraries</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#replacing_kohana_s_built-in_libraries" class="toc">Replacing Kohana&#039;s built-in libraries</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#rd-party_libraries" class="toc">3rd-party libraries</a></span></div></li>
</ul>
</li>
<li class="level1"><div class="li"><span class="li"><a href="#zend_framework" class="toc">Zend Framework</a></span></div></li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Using Controller namespace, replacing/extending system libraries, which libs can be extended?</td>
	</tr>
</table>



<h1><a name="libraries" id="libraries">Libraries</a></h1>
<div class="level1">

<p>

The following Kohana libraries are loaded automatically by the framework and should always be available to you:
</p>
<ul>
<li class="level1"><div class="li"> <acronym title="Uniform Resource Identifier">URI</acronym></div>
</li>
<li class="level1"><div class="li"> Input</div>
</li>
</ul>

<p>

Other libraries can be loaded automatically by Kohana when they are used. For example, to load and use the <code>Profiler</code> library, you can just add the following line to your controller&#039;s constructor:
</p>
<pre class="code">  $this-&gt;profiler = new Profiler;</pre>

<p>

For more information, see the page on <a href="loading.php" class="wikilink1" title="general:loading">Loading</a>.

</p>

</div>

<h2><a name="adding_your_own_libraries" id="adding_your_own_libraries">Adding your own libraries</a></h2>
<div class="level2">

<p>

When creating your own libraries, these are the conventions that are required:

</p>
<ul>
<li class="level1"><div class="li"> Library files put into <code>application/libraries</code> (or if you&#039;re creating a module, in <code>modules/libraries</code>)</div>
</li>
<li class="level1"><div class="li"> Library files named the same as the library class (but without any ”<code>_Core</code>” suffix).</div>
</li>
<li class="level1"><div class="li"> Library class names and file names begin with a capitalized letter (eg., “Contact”)</div>
</li>
<li class="level1"><div class="li"> For a new library, the class name can have ”<code>_Core</code>” appended to the end to enable you to extend it in the same way you can with Kohana&#039;s built-in libraries.</div>
</li>
</ul>

<p>

For example, lets suppose that you wanted to create a new “book” library. You might create the following file:
</p>

<p>
<strong>File:</strong> application/libraries/Book.php

</p>
<pre class="code php"><span class="kw2">&lt;?php</span> <a href="http://www.php.net/defined"><span class="kw3">defined</span></a><span class="br0">&#40;</span><span class="st0">'SYSPATH'</span><span class="br0">&#41;</span> or <a href="http://www.php.net/die"><span class="kw3">die</span></a><span class="br0">&#40;</span><span class="st0">'No direct script access.'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw2">class</span> Book_Core <span class="br0">&#123;</span>
&nbsp;
	<span class="co1">// add constructor/methods/properties here</span>
&nbsp;
<span class="br0">&#125;</span>
&nbsp;
<span class="kw2">?&gt;</span></pre>
</div>

<h2><a name="extending_libraries" id="extending_libraries">Extending libraries</a></h2>
<div class="level2">

<p>

Kohana also allows you to extend its built-in libraries so that you can add your own functionality to them, or change the way they work. You should <strong>never</strong> change the files in <code>system/libraries</code>. Instead you can create a new library that extends a built-in library.
</p>

<p>
You can also extend your own libraries, so long as you have added ”<code>_Core</code>” to the end of their class names.
</p>

<p>
When extending a library, the conventions are the same as for when you are creating a new library, with a couple of exceptions:

</p>
<ul>
<li class="level1"><div class="li"> The filename must be prefixed with ”<code>MY_</code>”. This prefix is configurable; see the <a href="configuration.php" class="wikilink1" title="general:configuration">configuration</a> page.</div>
</li>
<li class="level1"><div class="li"> The class name must be the same as the class name you are extending and <strong>must not</strong> have ”<code>_Core</code>” appended to it.</div>
</li>
</ul>

<p>

Lets say, for example, that you want to extend Kohana&#039;s <a href="controllers.php" class="wikilink1" title="general:controllers">controller</a> class. You might do the following:
</p>

<p>
<strong>File:</strong> <code>application/libraries/MY_Controller.php</code>

</p>
<pre class="code php"><span class="kw2">&lt;?php</span> <a href="http://www.php.net/defined"><span class="kw3">defined</span></a><span class="br0">&#40;</span><span class="st0">'SYSPATH'</span><span class="br0">&#41;</span> or <a href="http://www.php.net/die"><span class="kw3">die</span></a><span class="br0">&#40;</span><span class="st0">'No direct script access.'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw2">class</span> Controller <span class="kw2">extends</span> Controller_Core <span class="br0">&#123;</span>
&nbsp;
	<span class="kw2">public</span> <span class="kw2">function</span> __construct<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="co1">// don't for get to call the parent constructor!</span>
		parent<span class="sy0">::</span>__construct<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
&nbsp;
<span class="br0">&#125;</span>
&nbsp;
<span class="kw2">?&gt;</span></pre>
<p>
Extending the core classes is not only allowed in Kohana, but is expected. If you wish to implement behaviour that should apply to a kohana class, such as site-wide behaviour, this is the preferred way to achieve it.
</p>

<p>
Here are some examples of why you might want to extend Kohana&#039;s Controller class in particular:
</p>
<ul>
<li class="level1"><div class="li"> You may wish to implement site-wide page caching.</div>
</li>
<li class="level1"><div class="li"> You may wish to implement an authentication mechanism.</div>
</li>
<li class="level1"><div class="li"> You might want to provide layout, or templating methods to a controller. These could be implemented in your extended controller and would be accessible to every controller in the application.</div>
</li>
</ul>

<p>

You may wish to autoload models and libraries, this can be achieved by extending the core Controller class and loading any libraries and models from the constructor.
</p>

</div>

<h2><a name="replacing_kohana_s_built-in_libraries" id="replacing_kohana_s_built-in_libraries">Replacing Kohana&#039;s built-in libraries</a></h2>
<div class="level2">

<p>

It is also possible (although probably less often required) to replacing one of Kohana&#039;s built-in libraries entirely. The conventions are the same as when you are adding your own library, with one exception:

</p>
<ul>
<li class="level1"><div class="li"> Appending ”<code>_Core</code>” to the class name is not optional - you must do it!</div>
</li>
</ul>

<p>

If, for example, you want to replace the <a href="../libraries/profiler.php" class="wikilink1" title="libraries:profiler">Profiler library</a>, you might create the following file:
</p>

<p>
<strong>File:</strong> <code>application/libraries/Profiler.php</code>

</p>
<pre class="code php"><span class="kw2">&lt;?php</span> <a href="http://www.php.net/defined"><span class="kw3">defined</span></a><span class="br0">&#40;</span><span class="st0">'SYSPATH'</span><span class="br0">&#41;</span> or <a href="http://www.php.net/die"><span class="kw3">die</span></a><span class="br0">&#40;</span><span class="st0">'No direct script access.'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw2">class</span> Profiler_Core <span class="br0">&#123;</span>
&nbsp;
	<span class="co1">// define your own profiler here</span>
&nbsp;
<span class="br0">&#125;</span>
&nbsp;
<span class="kw2">?&gt;</span></pre>
</div>

<h2><a name="rd-party_libraries" id="rd-party_libraries">3rd-party libraries</a></h2>
<div class="level2">

<p>

If you should require 3rd-party libraries (such as Simplepie, Zend Framework, or Pear libraries) you can place these in the <code>application/vendor</code> directory. Loading them from Kohana is simple. You might do the following:
</p>
<pre class="code">  include Kohana::find_file(&#039;vendor&#039;,&#039;some_class&#039;)</pre>

<p>

For more information, see the <a href="../core/kohana.php" class="wikilink1" title="core:kohana">Kohana class</a> page.
</p>

<p>
Note that some 3rd party libraries can be adjusted to be Kohana libraries without much effort, sometimes renaming the file and the class name is all that is necessary.
</p>

</div>

<h1><a name="zend_framework" id="zend_framework">Zend Framework</a></h1>
<div class="level1">

<p>

Zend Framework&#039;s files may struggle to load it&#039;s dependencies which will be loaded incorrectly without further configuration. If the <code>zend</code> folder is in <code>applications/vendor/zend</code> the following code can be used.
</p>
<pre class="code php"><span class="co1">// make sure you put this somewhere before loading a Zend Framework component</span>
<a href="http://www.php.net/ini_set"><span class="kw3">ini_set</span></a><span class="br0">&#40;</span><span class="st0">'include_path'</span><span class="sy0">,</span> <a href="http://www.php.net/ini_get"><span class="kw3">ini_get</span></a><span class="br0">&#40;</span><span class="st0">'include_path'</span><span class="br0">&#41;</span><span class="sy0">.</span>PATH_SEPARATOR<span class="sy0">.</span>APPPATH<span class="sy0">.</span><span class="st0">'vendor/zend/library/'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
To include a Zend Framework component, you might do the following:

</p>
<pre class="code php"><span class="co1">// example</span>
<span class="kw1">require_once</span> <span class="st0">'Zend/Service/Flickr.php'</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// or another example</span>
<span class="kw1">require_once</span> <span class="st0">'Zend/Acl.php'</span><span class="sy0">;</span>
<span class="re1">$acl</span> <span class="sy0">=</span> <span class="kw2">new</span> Zend_Acl<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
You can also delegate file loading to the Zend autoloader. The advantage of doing it this way is that the autoloader will take care of <code>requiring</code> all the file dependancies. Take a look at the following example:

</p>
<pre class="code php"><span class="co1">// assumes you have put the Zend framework in your vendor folder</span>
<span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$path</span> <span class="sy0">=</span> Kohana<span class="sy0">::</span><span class="me2">find_file</span><span class="br0">&#40;</span><span class="st0">'vendor'</span><span class="sy0">,</span> <span class="st0">'Zend/Loader'</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <a href="http://www.php.net/ini_set"><span class="kw3">ini_set</span></a><span class="br0">&#40;</span><span class="st0">'include_path'</span><span class="sy0">,</span> <a href="http://www.php.net/ini_get"><span class="kw3">ini_get</span></a><span class="br0">&#40;</span><span class="st0">'include_path'</span><span class="br0">&#41;</span><span class="sy0">.</span>PATH_SEPARATOR<span class="sy0">.</span><a href="http://www.php.net/dirname"><span class="kw3">dirname</span></a><span class="br0">&#40;</span><a href="http://www.php.net/dirname"><span class="kw3">dirname</span></a><span class="br0">&#40;</span><span class="re1">$path</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="kw1">require_once</span> <span class="st0">'Zend/Loader/Autoloader.php'</span><span class="sy0">;</span>
    Zend_Loader_Autoloader<span class="sy0">::</span><span class="me2">getInstance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="co1">// example</span>
<span class="re1">$acl</span> <span class="sy0">=</span> <span class="kw2">new</span> Zend_Acl<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Note that it also can be placed in the <strong>SYSPATH</strong> folder but it then might be overwritten by a new version of Kohana. Module folders will do as well.
In this case use

</p>
<pre class="code php"><a href="http://www.php.net/ini_set"><span class="kw3">ini_set</span></a><span class="br0">&#40;</span><span class="st0">'include_path'</span><span class="sy0">,</span><a href="http://www.php.net/ini_get"><span class="kw3">ini_get</span></a><span class="br0">&#40;</span><span class="st0">'include_path'</span><span class="br0">&#41;</span><span class="sy0">.</span>PATH_SEPARATOR<span class="sy0">.</span>SYSPATH<span class="sy0">.</span><span class="st0">'vendor/zend/library/'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexerd3f3.gif?id=general%3Alibraries&amp;1324588191" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/general/libraries by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


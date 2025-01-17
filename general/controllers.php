<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/general/controllers by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    general:controllers    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-04-02T23:19:19-0500" />
<meta name="keywords" content="general,controllers" />
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
<li class="level1"><div class="li"><span class="li"><a href="#controllers" class="toc">Controllers</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#controller_naming_and_anatomy" class="toc">Controller naming and anatomy</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#a_simple_controller" class="toc">A simple controller</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#more_advanced_controller" class="toc">More advanced controller</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#controller_with_arguments" class="toc">Controller with arguments</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#controllers_and_subdirectories" class="toc">Controllers and subdirectories</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#routing_controllers_elsewhere" class="toc">Routing controllers elsewhere</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#special_methods" class="toc">Special methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#construct" class="toc">__construct</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#index" class="toc">index</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#call" class="toc">__call</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#private_methods" class="toc">Private methods</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#special_controllers" class="toc">Special Controllers</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#using_a_base_controller_for_your_application" class="toc">Using a base controller for your application</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">sub-folders, method parameters, remapping example, Proof read</td>
	</tr>
</table>



<h1><a name="controllers" id="controllers">Controllers</a></h1>
<div class="level1">

<p>

Controllers stand in between the models and the views in an application. They pass information on to the model when data needs to be changed and they request information from the model. For example  database inserts, updates and deletes for data change and database selects for information retrieval. 
Controllers pass on the information of the model to the views, the views contain the final output for the users.
</p>

<p>
Controllers are called by a <acronym title="Uniform Resource Locator">URL</acronym>, see <a href="urls.php" class="wikilink1" title="general:urls">Urls</a> for more information.
</p>

</div>

<h2><a name="controller_naming_and_anatomy" id="controller_naming_and_anatomy">Controller naming and anatomy</a></h2>
<div class="level2">

<p>

A controller&#039;s filename can be basically anything. The name of the controller class must correspond to the filename. 
</p>

<p>
<strong>Conventions for a controller</strong>
</p>
<ul>
<li class="level1"><div class="li"> must reside in a <code>controllers</code> (sub-)directory </div>
</li>
<li class="level1"><div class="li"> controller filename must be lowercase, e.g. <code>articles.php</code></div>
</li>
<li class="level1"><div class="li"> controller class must map to filename and capitalized, and must be appended with <strong>_Controller</strong>, e.g. <strong>Articles_Controller</strong></div>
</li>
<li class="level1"><div class="li"> must have the Controller class as (grand)parent</div>
</li>
<li class="level1"><div class="li"> controller methods preceded by &#039;_&#039; (e.g. <strong>_do_something</strong>() ) cannot be called by the <acronym title="Uniform Resource Identifier">URI</acronym> mapping</div>
</li>
</ul>

</div>

<h3><a name="a_simple_controller" id="a_simple_controller">A simple controller</a></h3>
<div class="level3">

<p>
We start with a simple controller. It will show Hello World on the screen.
</p>

<p>
<strong>application/controllers/article.php</strong>

</p>
<pre class="code php"><span class="kw2">&lt;?php</span> <a href="http://www.php.net/defined"><span class="kw3">defined</span></a><span class="br0">&#40;</span><span class="st0">'SYSPATH'</span><span class="br0">&#41;</span> OR <a href="http://www.php.net/die"><span class="kw3">die</span></a><span class="br0">&#40;</span><span class="st0">'No direct access allowed.'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw2">class</span> Article_Controller <span class="kw2">extends</span> Controller
<span class="br0">&#123;</span>
    <span class="kw2">public</span> <span class="kw2">function</span> index<span class="br0">&#40;</span><span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
        <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'Hello World!'</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
<p>

Now if you enter yoursite.com/article (or yoursite.com/index.php/article without <acronym title="Uniform Resource Locator">URL</acronym> rewritting) you should see
</p>
<pre class="code">
Hello World</pre>
<p>
That&#039;s it, your first controller. You can see all conventions are applied.
</p>

</div>

<h3><a name="more_advanced_controller" id="more_advanced_controller">More advanced controller</a></h3>
<div class="level3">

<p>
In the example above the <code>index()</code> method is called by the yoursite.com/article url. If the second segment of the url is empty, the index method is called. It would also be called by the following url: yoursite.com/article/index
</p>

<p>
<em class="u">If the second segment of the url is not empty, it determines which method of the controller is called.</em> 
</p>

<p>

<strong>application/controllers/article.php</strong>

</p>
<pre class="code php"><span class="kw2">class</span> Article_Controller <span class="kw2">extends</span> Controller
<span class="br0">&#123;</span>
    <span class="kw2">public</span> <span class="kw2">function</span> index<span class="br0">&#40;</span><span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
        <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'Hello World!'</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
&nbsp;
    <span class="kw2">public</span> <span class="kw2">function</span> overview<span class="br0">&#40;</span><span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
        <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'Article list goes here!'</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
<p>

Now if you call the url yoursite.com/article/overview it will display 
</p>
<pre class="code">
Article list goes here!</pre>
</div>

<h3><a name="controller_with_arguments" id="controller_with_arguments">Controller with arguments</a></h3>
<div class="level3">

<p>
Say we want to display a specific article, for example the article with the title being <code>your-article-title</code> and the id of the article is <code>1</code>. 
</p>

<p>
The url would look like yoursite.com/article/view/<strong>your-article-title</strong>/<strong>1</strong> The last two segments of the url are passed on to the view() method. 
</p>

<p>
<strong>application/controllers/article.php</strong>

</p>
<pre class="code php"><span class="kw2">class</span> Article_Controller <span class="kw2">extends</span> Controller
<span class="br0">&#123;</span>
    <span class="kw2">public</span> <span class="kw2">function</span> index<span class="br0">&#40;</span><span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
        <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'Hello World!'</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
&nbsp;
    <span class="kw2">public</span> <span class="kw2">function</span> overview<span class="br0">&#40;</span><span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
        <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'Article list goes here!'</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
&nbsp;
    <span class="kw2">public</span> <span class="kw2">function</span> view<span class="br0">&#40;</span><span class="re1">$title</span><span class="sy0">,</span><span class="re1">$id</span><span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
        <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$id</span> <span class="sy0">.</span> <span class="st0">' - '</span> <span class="sy0">.</span> <span class="re1">$title</span><span class="sy0">;</span>
        <span class="co1">// you'd retrieve the article from the database here normally</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
<p>

When you call yoursite.com/article/view/<strong>your-article-title</strong>/<strong>1</strong> it will display 
</p>
<pre class="code">
1 - your-article-title</pre>
</div>

<h2><a name="controllers_and_subdirectories" id="controllers_and_subdirectories">Controllers and subdirectories</a></h2>
<div class="level2">

<p>
If you put a controller in a subdirectory of the /controllers/ directory, Kohana will include the subdirectory in the mapping to the controller. E.g. a file in <code>application/controllers/admin/user.php</code> will correspond to the url <a href="http://localhost/admin/user" class="urlextern" title="http://localhost/admin/user"  rel="nofollow">http://localhost/admin/user</a>
</p>

</div>

<h2><a name="routing_controllers_elsewhere" id="routing_controllers_elsewhere">Routing controllers elsewhere</a></h2>
<div class="level2">

<p>
If for some reason the mapping from the <acronym title="Uniform Resource Identifier">URI</acronym> to the controller and method is not right for you you can use routing to map a <acronym title="Uniform Resource Identifier">URI</acronym> to another controller.
E.g. have <code>localhost/about/me</code> map to <a href="http://localhost/articles/view/1" class="urlextern" title="http://localhost/articles/view/1"  rel="nofollow">http://localhost/articles/view/1</a> 
</p>

<p>
See <a href="routing.php" class="wikilink1" title="general:routing">Routing</a> for more information on this.
</p>

</div>

<h2><a name="special_methods" id="special_methods">Special methods</a></h2>
<div class="level2">

</div>

<h3><a name="construct" id="construct">__construct</a></h3>
<div class="level3">

<p>

If you declare a constructor in your controller, for example to load some resources for the entire controller, you have to call the parent constructor.
</p>

<p>
<strong>application/controllers/article.php</strong>
</p>
<pre class="code php"><span class="kw2">class</span> Article_Controller <span class="kw2">extends</span> Controller
<span class="br0">&#123;</span>
    protected <span class="re1">$db</span><span class="sy0">;</span>
    protected <span class="re1">$session</span><span class="sy0">;</span>
&nbsp;
    <span class="kw2">public</span> <span class="kw2">function</span> __construct<span class="br0">&#40;</span><span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
        parent<span class="sy0">::</span>__construct<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// This must be included</span>
&nbsp;
        <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span> <span class="sy0">=</span> Database<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span> <span class="sy0">=</span> Session<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
&nbsp;
    <span class="kw2">public</span> <span class="kw2">function</span> index<span class="br0">&#40;</span><span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
        <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'user_id'</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
&nbsp;
    <span class="kw2">public</span> <span class="kw2">function</span> view<span class="br0">&#40;</span><span class="re1">$article_id</span><span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
        <span class="re1">$article</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">getwhere</span><span class="br0">&#40;</span><span class="st0">'articles'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id'</span> <span class="sy0">=&gt;</span> <span class="br0">&#40;</span>int<span class="br0">&#41;</span> <span class="re1">$article_id</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
<p>
This example also shows how you can retrieve an article from the database using <acronym title="Uniform Resource Locator">URL</acronym> segments. If you call <code>yoursite.com/article/view/5</code>, it will retrieve the article whose <code>id</code> is <code>5</code>.
</p>

</div>

<h3><a name="index" id="index">index</a></h3>
<div class="level3">

<p>

<code>index()</code> is the method that will be called by default, when no method segment is provided in the <acronym title="Uniform Resource Locator">URL</acronym>.
E.g. if your controller is called <code>Welcome_Controller</code>, and the <acronym title="Uniform Resource Locator">URL</acronym> is <a href="http://yoursite.com/welcome" class="urlextern" title="http://yoursite.com/welcome"  rel="nofollow">http://yoursite.com/welcome</a> then the <code>index</code> method is called.
</p>

<p>
Note: You cannot pass arguments to an index method, unless the <acronym title="Uniform Resource Identifier">URI</acronym> contains <strong>index</strong> in segment two. 
</p>

</div>

<h3><a name="call" id="call">__call</a></h3>
<div class="level3">

<p>

<code>__call($method, $arguments)</code> is the method called when a method of a controller is called that doesn&#039;t exist. It is declared in the Controller class and will trigger a 404 by default. You can override this method in your own controllers for advanced functionality.
</p>

<p>
 
<strong>application/controllers/article.php</strong>

</p>
<pre class="code php"><span class="kw2">class</span> Article_Controller <span class="kw2">extends</span> Controller
<span class="br0">&#123;</span>
    <span class="kw2">public</span> <span class="kw2">function</span> __call<span class="br0">&#40;</span><span class="re1">$method</span><span class="sy0">,</span><span class="re1">$arguments</span><span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
        <span class="re1">$id</span><span class="sy0">=</span><span class="br0">&#40;</span>int<span class="br0">&#41;</span> <span class="re1">$method</span><span class="sy0">;</span>
        <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">view</span><span class="br0">&#40;</span><span class="re1">$id</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
&nbsp;
    <span class="kw2">public</span> <span class="kw2">function</span> view<span class="br0">&#40;</span><span class="re1">$id</span><span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
        <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$id</span><span class="sy0">;</span>
        <span class="co1">// you'd retrieve the article from the database here normally</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
<p>

When you call yoursite.com/article/<strong>1</strong> , it will display the article. You see that the second segment now is the <code>$id</code> instead of the controller method.
</p>

</div>

<h3><a name="private_methods" id="private_methods">Private methods</a></h3>
<div class="level3">

<p>
Sometimes you want some methods in your controller which should not be available on your website. They are only used internally. This can be done by declaring methods private and/or prepending them with <strong>_</strong>
</p>

<p>
<strong>application/controllers/article.php</strong>

</p>
<pre class="code php"><span class="kw2">class</span> Article_Controller <span class="kw2">extends</span> Controller
<span class="br0">&#123;</span>
    <span class="kw2">public</span> <span class="kw2">function</span> index<span class="br0">&#40;</span><span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
        <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'Hello World!'</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
&nbsp;
    <span class="kw2">private</span> <span class="kw2">function</span> _article_form<span class="br0">&#40;</span><span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
        <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'Article form'</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
<p>

When you call yoursite.com/article/_article_form you&#039;ll encounter a 404.
</p>

</div>

<h2><a name="special_controllers" id="special_controllers">Special Controllers</a></h2>
<div class="level2">

</div>

<h3><a name="using_a_base_controller_for_your_application" id="using_a_base_controller_for_your_application">Using a base controller for your application</a></h3>
<div class="level3">

<p>
Using a base controller for your application can be very helpful. You can execute code on every page for example, useful for authenticating and authorizing users for example or doing session magic.
</p>

<p>
<strong>Example</strong> <code>MY_Controller.php</code>

</p>
<pre class="code php"><span class="kw2">&lt;?php</span>
&nbsp;
<span class="kw2">class</span> Controller <span class="kw2">extends</span> Controller_Core
<span class="br0">&#123;</span>
    <span class="kw2">public</span> <span class="kw2">function</span> __construct<span class="br0">&#40;</span><span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
        parent<span class="sy0">::</span>__construct<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
        <span class="co1">// authentication goes here for example</span>
    <span class="br0">&#125;</span>
&nbsp;
    <span class="kw2">public</span> <span class="kw2">function</span> do_something<span class="br0">&#40;</span><span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
        <span class="co1">// method available in all controllers</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
<p>

The file should be named <code>MY_Controller.php</code> It should then be placed in <code>application/libraries</code> This class has all the methods of the original Controller plus your own. 
</p>

<p>
Note: The prefix <strong>MY_</strong> can be configured in <code>application/config/config.php</code> by changing the <strong>$config[&#039;extension_prefix&#039;]</strong>

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexerf17f.gif?id=general%3Acontrollers&amp;1324588191" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/general/controllers by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


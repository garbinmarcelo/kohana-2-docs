<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/general/models by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    general:models    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-02-03T16:46:06-0600" />
<meta name="keywords" content="general,models" />
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
<li class="level1"><div class="li"><span class="li"><a href="#models" class="toc">Models</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#what_are_models" class="toc">What are models?</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#naming_models" class="toc">Naming models</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#loading_models" class="toc">Loading models</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#usage" class="toc">Usage</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#using_a_database_in_your_model" class="toc">Using a database in your model</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#using_a_model_in_your_controller" class="toc">Using a model in your controller</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#orm" class="toc">ORM</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Clearer examples</td>
	</tr>
</table>



<h1><a name="models" id="models">Models</a></h1>
<div class="level1">

</div>

<h2><a name="what_are_models" id="what_are_models">What are models?</a></h2>
<div class="level2">

<p>
Models are classes designed to work with information given by or asked for by the controller. For example, you have a guestbook, the controller will ask the model to retrieve the last ten entries, the model returns those entries to the controller who passes them on to a view. The controller might also send new entries to the model, update existing ones or even delete some.
</p>

<p>
Note that Kohana doesn&#039;t force you to use models. If you choose not to use them, you are free to do so.
</p>

</div>

<h2><a name="naming_models" id="naming_models">Naming models</a></h2>
<div class="level2">

<p>

Kohana uses specific rules for the naming of models. These are:
</p>
<ul>
<li class="level1"><div class="li"> Models go into the <code>application/models/</code> directory.</div>
</li>
<li class="level1"><div class="li"> Model filenames are lowercase, <strong>do not</strong> have _model appended to them and should be the singular form of the name.</div>
</li>
<li class="level1"><div class="li"> The model class name is capitalized, <strong>does</strong> have _Model appended to it and should be the singular form of the name.</div>
</li>
<li class="level1"><div class="li"> For models that use <a href="../libraries/orm.php" class="wikilink1" title="libraries:orm">ORM</a>, there are other, more specific, conventions.</div>
</li>
</ul>

</div>

<h4><a name="example" id="example">Example</a></h4>
<div class="level4">

<p>

Suppose that you have a table in the database called <code>users</code> (which is a plural name). The model that represents the <code>users</code> table would reside in the file <code>application/models/user.php</code> and the class would be called <code>User_Model</code> (which are both singular names).
</p>

<p>
The file would initially look something like this:
</p>
<pre class="code php"><span class="kw2">&lt;?php</span> <a href="http://www.php.net/defined"><span class="kw3">defined</span></a><span class="br0">&#40;</span><span class="st0">'SYSPATH'</span><span class="br0">&#41;</span> or <a href="http://www.php.net/die"><span class="kw3">die</span></a><span class="br0">&#40;</span><span class="st0">'No direct script access.'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw2">class</span> User_Model <span class="kw2">extends</span> Model <span class="br0">&#123;</span>
&nbsp;
	<span class="kw2">public</span> <span class="kw2">function</span> __construct<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="co1">// load database library into $this-&gt;db (can be omitted if not required)</span>
		parent<span class="sy0">::</span>__construct<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
&nbsp;
<span class="br0">&#125;</span></pre>
</div>

<h2><a name="loading_models" id="loading_models">Loading models</a></h2>
<div class="level2">

<p>
The generally accepted way of loading a Model in Kohana is to do so within your Controller.
</p>

<p>
For instance, to load the user model (above) from <code>application/models/user.php</code> add the following to your controller:
</p>
<pre class="code php"><span class="re1">$user</span> <span class="sy0">=</span> <span class="kw2">new</span> User_Model<span class="sy0">;</span>
<span class="re1">$name</span> <span class="sy0">=</span> <span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">get_user_name</span><span class="br0">&#40;</span><span class="re1">$id</span><span class="br0">&#41;</span><span class="sy0">;</span>  <span class="co1">// get_user_name is a method defined in User_Model</span></pre>
</div>

<h4><a name="inheriting" id="inheriting">Inheriting</a></h4>
<div class="level4">

<p>
If, for example, you use the Kohana Template_Controller and need access to your model from all descendant controllers, you can add the following to the Template_Controller constructor:

</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">user</span> <span class="sy0">=</span> <span class="kw2">new</span> User_Model<span class="sy0">;</span></pre>
<p>
You can then access the user model from any controller that extends the Template_Controller, like this:

</p>
<pre class="code php"><span class="re1">$name</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">user</span><span class="sy0">-&gt;</span><span class="me1">get_user_name</span><span class="br0">&#40;</span><span class="re1">$id</span><span class="br0">&#41;</span><span class="sy0">;</span>  <span class="co1">// get_user_name is a method defined in User_Model</span></pre>
</div>

<h4><a name="deprecated" id="deprecated">Deprecated</a></h4>
<div class="level4">

<p>

The following alternative method using the Loader library is <strong>deprecated</strong> in Kohana 2.1 and will no longer be supported in Kohana 2.2.

</p>
<pre class="code php"><span class="co1">// Model name is called without _Model, case doesn't matter</span>
<span class="co1">// Deprecated as of Kohana 2.1</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">load</span><span class="sy0">-&gt;</span><span class="me1">model</span><span class="br0">&#40;</span><span class="st0">'user'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$name</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">user</span><span class="sy0">-&gt;</span><span class="me1">get_user_name</span><span class="br0">&#40;</span><span class="re1">$id</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="usage" id="usage">Usage</a></h2>
<div class="level2">

<p>

A model might look something like this:

</p>
<pre class="code php"><span class="kw2">class</span> User_Model <span class="kw2">extends</span> Model <span class="br0">&#123;</span>
&nbsp;
        <span class="kw2">public</span> <span class="kw2">function</span> __construct<span class="br0">&#40;</span><span class="re1">$id</span> <span class="sy0">=</span> <span class="kw2">NULL</span><span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
               <span class="co1">// load database library into $this-&gt;db (can be omitted if not required)</span>
               parent<span class="sy0">::</span>__construct<span class="br0">&#40;</span><span class="re1">$id</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
&nbsp;
	<span class="coMULTI">/**
	 * Get information about a user, given their user_id
	 * @param integer the user_id
	 * @return the result object
	 */</span>
	<span class="kw2">public</span> <span class="kw2">function</span> get_user<span class="br0">&#40;</span><span class="re1">$user_id</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><span class="st0">'user_id'</span><span class="sy0">,</span> <span class="re1">$user_id</span><span class="br0">&#41;</span><span class="sy0">;</span>
		<span class="kw1">return</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'users'</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
&nbsp;
	<span class="coMULTI">/**
	 * Add a new user. Assumes an auto incrementing user_id in the database.
	 * @param array user data. E.g.,
	 *	array( 'name' =&gt; 'test', 'email' =&gt; 'test@example.com' )
	 * @return void
	 */</span>
	<span class="kw2">public</span> <span class="kw2">function</span> insert_user<span class="br0">&#40;</span><span class="re1">$data</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">insert</span><span class="br0">&#40;</span><span class="st0">'users'</span><span class="sy0">,</span> <span class="re1">$data</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
&nbsp;
	<span class="coMULTI">/**
	 * Replace user details.
	 * @param array user data. E.g.,
	 *	array( 'name' =&gt; 'test', 'email' =&gt; 'test@example.com' )
	 * @return void
	 */</span>
	<span class="kw2">public</span> <span class="kw2">function</span> update_user<span class="br0">&#40;</span><span class="re1">$user_id</span><span class="sy0">,</span> <span class="re1">$data</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><span class="st0">'user_id'</span><span class="sy0">,</span> <span class="re1">$user_id</span><span class="br0">&#41;</span><span class="sy0">;</span>
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">update</span><span class="br0">&#40;</span><span class="st0">'users'</span><span class="sy0">,</span> <span class="re1">$data</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
&nbsp;
<span class="br0">&#125;</span></pre>
<p>

Note: When utilizing data from a form always use <code>$this→input→post(&#039;var_name&#039;, TRUE)</code> to ensure data is sanitized before using.
<a href="../libraries/input.php" class="wikilink1" title="libraries:input">Learn more about the Input library.</a>
</p>

</div>

<h2><a name="using_a_database_in_your_model" id="using_a_database_in_your_model">Using a database in your model</a></h2>
<div class="level2">

<p>
If your model&#039;s constructor contains the line <code>parent::__construct();</code>, the default database functionality will be loaded into <code>$this→db</code>. You can use all of the database&#039;s functions with the <code>$this→db</code> object.
</p>

<p>
You may also specify a <a href="../libraries/database/configuration.php" class="wikilink1" title="libraries:database:configuration">database group</a> by setting the protected variable <code>$db</code> in your model.

</p>
<pre class="code php">protected <span class="re1">$db</span> <span class="sy0">=</span> <span class="st0">'group_name'</span><span class="sy0">;</span></pre>
</div>

<h2><a name="using_a_model_in_your_controller" id="using_a_model_in_your_controller">Using a model in your controller</a></h2>
<div class="level2">

<p>
Using the example model above, you can integrate this model into your controller as follows:
</p>
<ol>
<li class="level1"><div class="li"> Create an instance of the model in your controller to make it accessible.  This can be done directly in a controller method as <code>$user = new User_Model</code>.  If you want the model accessible from all of your controller methods, create an instance of the model in your controller constructor:   <code>$this→user = new User_Model</code>.</div>
</li>
<li class="level1"><div class="li"> If you used the constructor method above, you can now retrieve user information from your database within any of your controller methods with: <code>$user = $this→user→get_user(1)</code>.  The <code>$user</code> variable now contains a database result set object (for the user with id = 1) that can be passed to your <a href="views.php" class="wikilink1" title="general:views">View</a>.</div>
</li>
<li class="level1"><div class="li"> If you passed the entire <code>$user</code> variable to your View, you can access specific user data elements within your View in the form <code>$user→name</code>.  See <a href="../libraries/database/result.php" class="wikilink1" title="libraries:database:result">Database Library</a> for more information.</div>
</li>
</ol>

</div>

<h2><a name="orm" id="orm">ORM</a></h2>
<div class="level2">

<p>
See for more information
</p>
<ul>
<li class="level1"><div class="li"> <a href="../libraries/orm.php" class="wikilink1" title="libraries:orm">ORM</a></div>
</li>
</ul>

<p>

<a href="../libraries/orm.php" class="wikilink1" title="libraries:orm">ORM</a> is a special kind of model. Based on its name it will derive for example the table it is a model for, it will also have some basic functions (find($id), save()…) commonly used in a model as well as support for relationships between tables (has_many, belongs_to…). Another aspect of ORM is that it turns a record from a database into an object. 

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexeree92.gif?id=general%3Amodels&amp;1324588192" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/general/models by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/orm/working by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:16:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:orm:working    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-03-09T03:48:49-0600" />
<meta name="keywords" content="libraries,orm,working" />
<link rel="stylesheet" media="all" type="text/css" href="../../lib/exe/cssbd55.css?s=all&amp;t=kohana" />
<link rel="stylesheet" media="screen" type="text/css" href="../../lib/exe/css56d3.css?t=kohana" />
<link rel="stylesheet" media="print" type="text/css" href="../../lib/exe/css97ef.css?s=print&amp;t=kohana" />
<script type="text/javascript" charset="utf-8" src="../../lib/exe/jsb5bc.php?edit=0&amp;write=0" ></script>
<link rel="shortcut icon" href="../../lib/tpl/kohana/images/favicon.ico" />
</head>
<body>
<!-- Start Header -->
<div id="header">

<!-- Start Logo -->
<a id="logo" href="/<?php echo explode('/', $_SERVER['REQUEST_URI'])[1]; ?>">
    <img src="./../../lib/images/kohana-logo.png" alt="Kohana" />
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
<li class="level1"><div class="li"><span class="li"><a href="#working_with_orm" class="toc">Working with ORM</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#loading_orm_models" class="toc">Loading ORM Models</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#accessing_data_from_orm_objects" class="toc">Accessing Data from ORM Objects</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#using_database_query_builder_methods" class="toc">Using Database Query Builder Methods</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#updating_database_records" class="toc">Updating Database Records</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#creating_new_records_and_adding_related_records_in_one-to-many_relationships" class="toc">Creating New Records and Adding Related Records in One-to-Many Relationships</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#adding_and_removing_data_from_many-to-many_relationships" class="toc">Adding and Removing Data from many-to-many Relationships</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Todo</th><td class="col1">add new content for accessing data using different relationship types, make the examples consistent</td>
	</tr>
</table>

<p>

<strong><a href="../orm.php" class="wikilink1" title="libraries:orm">&lt;&lt; Back to ORM Main Page</a></strong>
</p>



<h1><a name="working_with_orm" id="working_with_orm">Working with ORM</a></h1>
<div class="level1">

<p>
Now that your ORM models are defined and your relationships are in place, you are ready to begin accessing your data via ORM objects.  Let&#039;s see how easy it is to work with your data using ORM.
</p>

</div>

<h2><a name="loading_orm_models" id="loading_orm_models">Loading ORM Models</a></h2>
<div class="level2">

<p>
Once your ORM models are defined, you can load ORM models using standard object instantiation or via the static <code>factory</code> method.  Both work exactly the same, but the <code>factory</code> method is chainable, so it is preferred.  You can optionally pass a primary key to the constructor or <code>factory</code> to create a ORM object associated with one specific record.  <strong>Note:</strong> In order to access data in related tables, you need to define relationships in your model.
</p>
<pre class="code php"><span class="co1">// create a new ORM object</span>
<span class="re1">$user</span> <span class="sy0">=</span> <span class="kw2">new</span> User_Model<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Create a new ORM object for the primary key of 1</span>
<span class="re1">$user</span> <span class="sy0">=</span> <span class="kw2">new</span> User_Model<span class="br0">&#40;</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Using the factory method</span>
<span class="re1">$user</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'user'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Using the factory method with optional primary key</span>
<span class="re1">$user</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'user'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="accessing_data_from_orm_objects" id="accessing_data_from_orm_objects">Accessing Data from ORM Objects</a></h2>
<div class="level2">

<p>
Once your ORM models are loaded, data is accessible using standard object property notation (<code>$object→property</code>).  In a one-to-many relationship, where many rows from the child model are associated with the parent model, data within the child model is accessible via a <code>foreach</code> loop (the child model is actually an <code>ORM_Iterator</code> object, not an array).  
</p>

<p>
Here is an example that shows how to access ORM data from the user model (part of the Kohana Auth module).
</p>
<pre class="code php"><span class="co1">// accessing data for the user with the primary key of 1</span>
<span class="re1">$user</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'user'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">name</span><span class="sy0">;</span></pre>
<p>
If you have two tables in a one_to_many relationship: schools and students (a school has many students) and want to list information about each student in the school you need to use a <strong><code>foreach</code></strong> loop.  <strong>Note:</strong> As you loop through the objects using foreach, only one object exists at any given point.  Each time the loop continues, the old object is replaced by a new object. This is done to keep memory usage low when working with many objects at once.
</p>
<pre class="code php"><span class="co1">// in your School_Model</span>
protected <span class="re1">$has_many</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'students'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre><pre class="code php"><span class="co1">// in your Student_Model</span>
protected <span class="re1">$belongs_to</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'school'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre><pre class="code php"><span class="co1">// in your controller</span>
&nbsp;
<span class="co1">// create a new ORM object for school id = 1</span>
<span class="re1">$school</span> <span class="sy0">=</span> <span class="kw2">new</span> School_Model<span class="br0">&#40;</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// iterate through all of the students associated with the school and output their name</span>
<span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$school</span><span class="sy0">-&gt;</span><span class="me1">students</span> <span class="kw1">as</span> <span class="re1">$student</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$student</span><span class="sy0">-&gt;</span><span class="me1">name</span><span class="sy0">.</span><span class="st0">'&lt;br/&gt;'</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="using_database_query_builder_methods" id="using_database_query_builder_methods">Using Database Query Builder Methods</a></h3>
<div class="level3">

<p>
Most <a href="../database/builder.php" class="wikilink1" title="libraries:database:builder">query builder methods</a> can be used within ORM and are chainable, giving you a great deal of flexibility and control over the data returned by your ORM models. The only query builder methods that can not be used within ORM models are:
</p>
<ul>
<li class="level1"><div class="li"> query - Use ORM&#039;s find and find_all methods for select queries, and its save and delete methods for inserts, updates and deletes.</div>
</li>
<li class="level1"><div class="li"> get - Use ORM&#039;s find and find_all methods instead.</div>
</li>
<li class="level1"><div class="li"> insert - Use ORM&#039;s save method instead</div>
</li>
<li class="level1"><div class="li"> update - Use ORM&#039;s save method instead</div>
</li>
<li class="level1"><div class="li"> delete - Use ORM&#039;s delete and delete_all methods instead</div>
</li>
</ul>

<p>

<strong> Be sure to review the <a href="../database.php" class="wikilink1" title="libraries:database">Database</a> library and <a href="../database/builder.php" class="wikilink1" title="libraries:database:builder">query builder</a> before using ORM.</strong>
</p>
<pre class="code php"><span class="co1">// query builder methods with chaining</span>
<span class="re1">$object</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'model'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><span class="st0">'field'</span><span class="sy0">,</span> <span class="st0">'some_value'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">orwhere</span><span class="br0">&#40;</span><span class="st0">'field'</span><span class="sy0">,</span> <span class="st0">'another_value'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// retrieve a sorted list of books of the first 20 books associated with author (where id = 1)</span>
<span class="re1">$author</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'author'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$sorted_books</span> <span class="sy0">=</span> <span class="re1">$author</span><span class="sy0">-&gt;</span><span class="me1">orderby</span><span class="br0">&#40;</span><span class="st0">'date'</span><span class="sy0">,</span><span class="st0">'desc'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">limit</span><span class="br0">&#40;</span><span class="nu0">20</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">books</span><span class="sy0">;</span></pre>
</div>

<h2><a name="updating_database_records" id="updating_database_records">Updating Database Records</a></h2>
<div class="level2">

<p>
Once your ORM model is loaded it&#039;s easy to make updates.  Just remember to call <code>save()</code> when you are done with all of your changes.
</p>
<pre class="code php"><span class="re1">$user</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'user'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">name</span> <span class="sy0">=</span> <span class="st0">'New Name'</span><span class="sy0">;</span>
<span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">email</span> <span class="sy0">=</span> <span class="st0">'new_email@yourdomain.com'</span><span class="sy0">;</span>
<span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">save</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="creating_new_records_and_adding_related_records_in_one-to-many_relationships" id="creating_new_records_and_adding_related_records_in_one-to-many_relationships">Creating New Records and Adding Related Records in One-to-Many Relationships</a></h2>
<div class="level2">

<p>
When creating a database record that has related columns in a one-to-many relationship, you need to obtain the last insert id of the parent object to properly add an associated child row.  The <code>save()</code> method sets the primary key of the object (usually <code>id</code>) to the last_insert_id.
</p>

<p>
The following example shows how to create a new Page record and then create a related Keyword record for that Page. 
</p>
<pre class="code php"><span class="co1">// models/page.php</span>
<span class="kw2">class</span> Page_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
    protected <span class="re1">$has_many</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'keywords'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="co1">// models/keyword.php</span>
<span class="kw2">class</span> Keyword_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
    protected <span class="re1">$belongs_to</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'page'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="co1">// in your controller</span>
&nbsp;
<span class="co1">// create a new page record</span>
<span class="re1">$page</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'page'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$page</span><span class="sy0">-&gt;</span><span class="me1">title</span> <span class="sy0">=</span> <span class="st0">&quot;Test Page&quot;</span><span class="sy0">;</span>
<span class="re1">$page</span><span class="sy0">-&gt;</span><span class="me1">content</span> <span class="sy0">=</span> <span class="st0">&quot;This is a test page&quot;</span><span class="sy0">;</span>
<span class="re1">$page</span><span class="sy0">-&gt;</span><span class="me1">save</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// create a new keyword record for the page that was just created</span>
<span class="re1">$keyword</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'keyword'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$keyword</span><span class="sy0">-&gt;</span><span class="me1">name</span> <span class="sy0">=</span> <span class="st0">&quot;testing&quot;</span><span class="sy0">;</span>
<span class="re1">$keyword</span><span class="sy0">-&gt;</span><span class="me1">page_id</span> <span class="sy0">=</span> <span class="re1">$page</span><span class="sy0">-&gt;</span><span class="me1">id</span><span class="sy0">;</span>  <span class="co1">// $page-&gt;id has the last insert id from the above save</span>
<span class="re1">$keyword</span><span class="sy0">-&gt;</span><span class="me1">save</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="adding_and_removing_data_from_many-to-many_relationships" id="adding_and_removing_data_from_many-to-many_relationships">Adding and Removing Data from many-to-many Relationships</a></h2>
<div class="level2">

<p>
Adding and removing data from many-to-many pivot tables is done using the <strong>add()</strong> and <strong>remove()</strong> methods.  However, you can also use <strong>array(1,2,3)</strong> syntax to make multiple changes (adds, deletes) to related data in a pivot table for the current parent model.  This allows you to pass the results of a multi-selection <acronym title="HyperText Markup Language">HTML</acronym> form element (e.g. checkbox) as an array directly to your ORM model and ORM will automatically determine the appropriate values to add and remove from your pivot table upon saving.  No additional code is required!
</p>

<p>
For example, if you have a form that allows users to update categories for a blog post via checkboxes, you can use the following syntax to have ORM manage both adds and updates:
</p>
<pre class="code php"><span class="re1">$post</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'blog_post'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">categories</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="nu0">1</span><span class="sy0">,</span><span class="nu0">2</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// array should contain id's</span>
<span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">save</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// save() must always be called last</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;h4&gt;Categories of '</span><span class="sy0">.</span><span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">title</span><span class="sy0">.</span><span class="st0">'&lt;/h4&gt;'</span><span class="sy0">,</span> <span class="st0">'&lt;ul&gt;'</span><span class="sy0">;</span>
<span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">categories</span> <span class="kw1">as</span> <span class="re1">$category</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;li&gt;'</span><span class="sy0">,</span> <span class="re1">$category</span><span class="sy0">-&gt;</span><span class="me1">id</span><span class="sy0">,</span> <span class="st0">' '</span><span class="sy0">,</span> <span class="re1">$author</span><span class="sy0">-&gt;</span><span class="me1">name</span><span class="sy0">,</span> <span class="st0">'&lt;/li&gt;'</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;/ul&gt;'</span><span class="sy0">;</span></pre>
<p>
<strong><a href="examples.php" class="wikilink1" title="libraries:orm:examples">Continue to the next section: Examples &gt;&gt;</a></strong>

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../../lib/exe/indexerb05e.gif?id=libraries%3Aorm%3Aworking&amp;1324588290" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/orm/working by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:16:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


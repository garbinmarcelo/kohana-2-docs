<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/orm by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:17 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:orm    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-03-09T12:30:19-0600" />
<meta name="keywords" content="libraries,orm" />
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
<li class="level1"><div class="li"><span class="li"><a href="#object_relational_mapping_orm_library" class="toc">Object Relational Mapping (ORM) Library</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#table_of_contents" class="toc">Table of Contents</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#orm_s_relationship_to_the_database_library" class="toc">ORM&#039;s Relationship to the Database Library</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#orm_api_reference" class="toc">ORM API Reference</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#factory" class="toc">factory</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#find" class="toc">find</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#find_all" class="toc">find_all</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#where" class="toc">where</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#orwhere" class="toc">orwhere</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#save" class="toc">save</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#clear" class="toc">clear</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#reload" class="toc">reload</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#delete" class="toc">delete</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#delete_all" class="toc">delete_all</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#as_array" class="toc">as_array</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#select_list" class="toc">select_list</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#has" class="toc">has</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#add" class="toc">add</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#remove" class="toc">remove</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#with" class="toc">with</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#foreign_key" class="toc">foreign_key()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#join_table" class="toc">join_table()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#count_all" class="toc">count_all()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#count_last_query" class="toc">count_last_query()</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#properties" class="toc">Properties</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#loaded" class="toc">loaded</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#changed" class="toc">changed</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#saved" class="toc">saved</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#object_name" class="toc">object_name</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#primary_key" class="toc">primary_key</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#primary_val" class="toc">primary_val</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#table_name" class="toc">table_name</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#table_columns" class="toc">table_columns</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#sorting" class="toc">sorting</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#load_with" class="toc">load_with</a></span></div></li></ul>
</li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Todo</th><td class="col1">Fill in missing stuff on subpages, Missing methods, __get properties, clearer explanation/example of the difference between the “loaded” and “saved” properties</td>
	</tr>
</table>



<h1><a name="object_relational_mapping_orm_library" id="object_relational_mapping_orm_library">Object Relational Mapping (ORM) Library</a></h1>
<div class="level1">

<p>
Object Relational Mapping (ORM) allows manipulation and control of data within a database as though it was a <acronym title="Hypertext Preprocessor">PHP</acronym> object.  Once you define the relationships ORM allows you to pull data from your database, manipulate the data in any way you like and then save the result back to the database without the use of <acronym title="Structured Query Language">SQL</acronym>.  By creating relationships between models that follow <a href="http://en.wikipedia.org/wiki/convention%20over%20configuration" class="interwiki iw_wp" title="http://en.wikipedia.org/wiki/convention%20over%20configuration">convention over configuration</a>, much of the repetition of writing queries to <a href="http://en.wikipedia.org/wiki/create%2C%20read%2C%20update%20and%20delete" class="interwiki iw_wp" title="http://en.wikipedia.org/wiki/create%2C%20read%2C%20update%20and%20delete">create, read, update and delete</a> information from the database can be reduced or entirely removed.  All of the relationships can be handled automatically by the ORM library and you can access related data as standard object properties.
</p>

</div>

<h2><a name="table_of_contents" id="table_of_contents">Table of Contents</a></h2>
<div class="level2">
<ul>
<li class="level1"><div class="li"> <a href="orm/starting.php" class="wikilink1" title="libraries:orm:starting">Getting Started</a></div>
</li>
<li class="level1"><div class="li"> <a href="orm/working.php" class="wikilink1" title="libraries:orm:working">Working with ORM</a></div>
</li>
<li class="level1"><div class="li"> <a href="orm/examples.php" class="wikilink1" title="libraries:orm:examples">Examples</a></div>
</li>
<li class="level1"><div class="li"> <a href="orm/advanced.php" class="wikilink1" title="libraries:orm:advanced">Advanced Topics</a></div>
</li>
</ul>

<p>

<strong> *If you are new to ORM, start by reading the <a href="orm/starting.php" class="wikilink1" title="libraries:orm:starting">Getting Started</a> section.</strong>

</p>

</div>

<h2><a name="orm_s_relationship_to_the_database_library" id="orm_s_relationship_to_the_database_library">ORM&#039;s Relationship to the Database Library</a></h2>
<div class="level2">

<p>
The majority of ORM questions that get asked are to do with how the ORM library uses the <a href="database.php" class="wikilink1" title="libraries:database">Database</a> library. <strong>It is important to understand that nearly all of the <a href="database.php" class="wikilink1" title="libraries:database">Database</a> <a href="database/builder.php" class="wikilink1" title="libraries:database:builder">Query Builder</a> methods are available to use on ORM objects.</strong> The only query builder methods which cannot be used are:

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

<strong> If you do not understand the <a href="database.php" class="wikilink1" title="libraries:database">Database</a> library&#039;s query builder - you should start there before using ORM </strong>
</p>

</div>

<h2><a name="orm_api_reference" id="orm_api_reference">ORM API Reference</a></h2>
<div class="level2">

<p>
Examples of the most commonly used ORM methods and properties are listed below for quick reference.  Please refer to the <a href="http://api.kohanaphp.com/" class="urlextern" title="http://api.kohanaphp.com"  rel="nofollow">Kohana API Documentation</a> for a complete list of all available methods and properties.  
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

<p>

All of the default public and protected methods of ORM are listed here.
</p>

</div>

<h3><a name="factory" id="factory">factory</a></h3>
<div class="level3">

<p>

Static method used to load ORM objects:

</p>
<pre class="code php"><span class="re1">$object</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="re1">$model_name</span><span class="sy0">,</span> <span class="re1">$row_id</span> <span class="sy0">=</span> <span class="kw2">NULL</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="find" id="find">find</a></h3>
<div class="level3">

<p>

Find executes the database query, gets one row and sets the current object to the result.

</p>
<pre class="code php"><span class="co1">// find the article with primary key = 1</span>
<span class="re1">$object</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'article'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">find</span><span class="br0">&#40;</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$object</span><span class="sy0">-&gt;</span><span class="me1">title</span><span class="sy0">;</span></pre><pre class="code php"><span class="co1">// find an article by title</span>
<span class="re1">$object</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'article'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="sy0">,</span> <span class="re1">$title</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">find</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
An object is returned even if no row is found. To test the object to see if it contains a result use <span class="curid"><a href="orm.php#loaded" class="wikilink1" title="libraries:orm">loaded</a></span>.

</p>

</div>

<h3><a name="find_all" id="find_all">find_all</a></h3>
<div class="level3">

<p>

Find_all executes a database query and returns the multiple records using the ORM_Iterator

</p>
<pre class="code php"><span class="re1">$articles</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'article'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">find_all</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="kw1">foreach</span><span class="br0">&#40;</span><span class="re1">$articles</span> <span class="kw1">as</span> <span class="re1">$article</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$article</span><span class="sy0">-&gt;</span><span class="me1">title</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
Also you can get a range of the multiple records using additional parameters (like in <acronym title="Structured Query Language">SQL</acronym> LIMIT; note that MySQL confusingly adopts the opposite order)

</p>
<pre class="code php"><span class="re1">$limit</span> <span class="sy0">=</span> <span class="nu0">10</span><span class="sy0">;</span>
<span class="re1">$offset</span> <span class="sy0">=</span> <span class="nu0">30</span><span class="sy0">;</span>
<span class="co1">//it will return 10 records started from row #30</span>
<span class="re1">$articles</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'article'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">find_all</span><span class="br0">&#40;</span><span class="re1">$limit</span><span class="sy0">,</span><span class="re1">$offset</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="where" id="where">where</a></h3>
<div class="level3">

<p>

<a href="database/builder.php#where" class="urlextern" title="http://docs.kohanaphp.com/libraries/database/builder#where"  rel="nofollow">where() is documented here</a>.
</p>

</div>

<h3><a name="orwhere" id="orwhere">orwhere</a></h3>
<div class="level3">

<p>

<a href="database/builder.php#orwhere" class="urlextern" title="http://docs.kohanaphp.com/libraries/database/builder#orwhere"  rel="nofollow">orwhere() is documented here</a>.
</p>

</div>

<h3><a name="save" id="save">save</a></h3>
<div class="level3">

<p>

Save the current object into the database. If the object has no &#039;id&#039; set it will insert a new record, else it will update.  Note: You need to call <em>save()</em> after add() and remove() to save changes to related tables.
</p>
<pre class="code php"><span class="re1">$article</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'article'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$article</span><span class="sy0">-&gt;</span><span class="me1">title</span> <span class="sy0">=</span> <span class="st0">'New title'</span><span class="sy0">;</span>
<span class="re1">$article</span><span class="sy0">-&gt;</span><span class="me1">save</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
<em>Newly created objects will always be reloaded after they are saved, to properly account for default values of columns.</em>
</p>

</div>

<h3><a name="clear" id="clear">clear</a></h3>
<div class="level3">

<p>

Clears the state of an object, making it empty for reuse.
</p>
<pre class="code php"><span class="re1">$article</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'article'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Article is now empty</span>
<span class="re1">$article</span><span class="sy0">-&gt;</span><span class="me1">clear</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<a href="http://www.php.net/var_dump"><span class="kw3">var_dump</span></a><span class="br0">&#40;</span><span class="re1">$article</span><span class="sy0">-&gt;</span><span class="me1">loaded</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// returns FALSE</span></pre>
</div>

<h3><a name="reload" id="reload">reload</a></h3>
<div class="level3">

<p>

Reloads the ORM object from the database. If <code>$this→reload_on_wakeup</code> is enabled, <a href="http://php.net/unserialize" class="urlextern" title="http://php.net/unserialize"  rel="nofollow">unserializing</a> an object will cause it to be reloaded.
</p>
<pre class="code php"><span class="re1">$article</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'article'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$article</span><span class="sy0">-&gt;</span><span class="me1">title</span> <span class="sy0">=</span> <span class="st0">'A different title'</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Article title will be reset to the saved state</span>
<span class="re1">$article</span><span class="sy0">-&gt;</span><span class="me1">reload</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<a href="http://www.php.net/var_dump"><span class="kw3">var_dump</span></a><span class="br0">&#40;</span><span class="re1">$article</span><span class="sy0">-&gt;</span><span class="me1">title</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// returns the original title</span></pre>
</div>

<h3><a name="delete" id="delete">delete</a></h3>
<div class="level3">

<p>

Delete deletes current object or object with the given id.

</p>
<pre class="code php"><span class="re1">$article</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'article'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$article</span><span class="sy0">-&gt;</span><span class="me1">delete</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// OR</span>
ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'article'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">delete</span><span class="br0">&#40;</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// Only uses one query instead of two</span></pre>
</div>

<h3><a name="delete_all" id="delete_all">delete_all</a></h3>
<div class="level3">

<p>

Delete_all deletes multiple objects. Will delete all objects of this type with no arguments, or an array can be used to specify the IDs to delete.
</p>
<pre class="code php"><span class="co1">// Deletes all records</span>
ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'article'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">delete_all</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Deletes records with ID 1, 2, 4, and 5</span>
ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'article'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">delete_all</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="nu0">1</span><span class="sy0">,</span><span class="nu0">2</span><span class="sy0">,</span><span class="nu0">4</span><span class="sy0">,</span><span class="nu0">5</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Delete_all can also be used to delete records based on a where clause.
</p>
<pre class="code php"><span class="co1">//Delete all records that are part of the category of id 1</span>
ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'article'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'category_id'</span> <span class="sy0">=&gt;</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">delete_all</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="as_array" id="as_array">as_array</a></h3>
<div class="level3">

<p>

Returns the current object in array format.
</p>
<pre class="code php"><span class="re1">$article</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'article'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">as_array</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$article</span><span class="br0">&#91;</span><span class="st0">'title'</span><span class="br0">&#93;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="select_list" id="select_list">select_list</a></h3>
<div class="level3">

<p>

Generates a key/value pair array of all the objects.  The function accepts two column names as parameters: the first column is the value and the second column is the name or description.  This is especially useful when used in conjunction with the form helper to automatically build and populate selection menus.
</p>

<p>
The following example generates links to all articles followed by an <acronym title="HyperText Markup Language">HTML</acronym> select form element pre-populated with all articles.
</p>
<pre class="code php"><span class="re1">$articles</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'article'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">select_list</span><span class="br0">&#40;</span><span class="st0">'id'</span><span class="sy0">,</span> <span class="st0">'title'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$articles</span> <span class="kw1">as</span> <span class="re1">$id</span> <span class="sy0">=&gt;</span> <span class="re1">$title</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <span class="co1">// Display a list of links</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">anchor</span><span class="br0">&#40;</span><span class="st0">'articles/'</span><span class="sy0">.</span><span class="re1">$id</span><span class="sy0">,</span> <span class="re1">$title</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="co1">// Display a dropdown list</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">dropdown</span><span class="br0">&#40;</span><span class="st0">'articles'</span><span class="sy0">,</span> <span class="re1">$articles</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="has" id="has">has</a></h3>
<div class="level3">

<p>

Tests if an object has a many-to-many relationship with another object. The following code will test if the user has the <code>login</code> role. This method always returns a boolean. 
</p>
<pre class="code php"><span class="re1">$user</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'user'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">//either retrieve relationship by primary primary key</span>
<span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">has</span><span class="br0">&#40;</span>ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'role'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// or if you have overloaded the ORM::unique_key() method in your model to allow retrieval by other unique columns</span>
<span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">has</span><span class="br0">&#40;</span>ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'role'</span><span class="sy0">,</span> <span class="st0">'login'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="add" id="add">add</a></h3>
<div class="level3">

<p>

Adds a relationship to an object that has a many-to-many relationship. The following code will add the admin role to a user. Note that you need to call the <strong>save()</strong> method to add the relationship and related records.  ORM does not automatically save your changes.
</p>
<pre class="code php"><span class="re1">$user</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'user'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">add</span><span class="br0">&#40;</span>ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'role'</span><span class="sy0">,</span> <span class="st0">'admin'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">save</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
<a href="orm/starting.php#has_and_belongs_to_many" class="wikilink1" title="libraries:orm:starting">Alternative syntax</a> is also available to add multiple relationships in a many-to-many pivot table using <code>array(id, id)</code> syntax.
</p>

</div>

<h3><a name="remove" id="remove">remove</a></h3>
<div class="level3">

<p>

Remove a relationship from an object that has a many-to-many relationship. The following code will remove the <code>login</code> role from the user. Note that you need to call the <strong>save()</strong> method to remove the relationship and related records.  ORM does not automatically save your changes.
</p>
<pre class="code php"><span class="re1">$user</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'user'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">remove</span><span class="br0">&#40;</span>ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'role'</span><span class="sy0">,</span> <span class="st0">'login'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">save</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
<span class="curid"><a href="orm.php#has_and_belongs_to_many" class="wikilink1" title="libraries:orm">Alternative syntax</a></span> is also available to add/update multiple relationships in a many-to-many pivot table using <code>array(id, id)</code> syntax.  Id&#039;s excluded from the array will be removed.
</p>

</div>

<h3><a name="with" id="with">with</a></h3>
<div class="level3">

<p>

Binds a one-to-one relationship using a JOIN.  This is useful in situations where you do not want to use lazy-loading, thus improving performance.  You can also bind nested one-to-one relationships using a colon.
</p>
<pre class="code php"><span class="co1">// This uses 1 SQL query to fetch the user, associated city, and associated country.</span>
<span class="re1">$users</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'user'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">with</span><span class="br0">&#40;</span><span class="st0">'city'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">with</span><span class="br0">&#40;</span><span class="st0">'city:country'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">find_all</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">foreach</span><span class="br0">&#40;</span><span class="re1">$users</span> <span class="kw1">as</span> <span class="re1">$user</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
  <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">city</span><span class="sy0">-&gt;</span><span class="me1">country</span><span class="sy0">-&gt;</span><span class="me1">name</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
You can also set the <code>$load_with</code> property of the ORM model to bind automatically.
</p>

</div>

<h3><a name="foreign_key" id="foreign_key">foreign_key()</a></h3>
<div class="level3">

<p>

<code>public function foreign_key($table = NULL, $prefix_table = NULL)</code>
</p>

<p>
Determines the name of a foreign key for a specific table.
</p>

<p>
Parameters:
</p>
<ol>
<li class="level1"><div class="li"> string|bool|null Related table name, null or (bool) true</div>
</li>
<li class="level1"><div class="li"> string|null  The prefix table name (used for JOINs) or null</div>
</li>
</ol>
<pre class="code php"><span class="co1">// Sets $model-&gt;object_name.'_'.$model-&gt;primary_key, ie user_id</span>
<span class="re1">$join_col</span> <span class="sy0">=</span> <span class="re1">$model</span><span class="sy0">-&gt;</span><span class="me1">foreign_key</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// Sets $model-&gt;table_name.'.'.$model-&gt;primary_key, ie users.id</span>
<span class="re1">$join_col</span> <span class="sy0">=</span> <span class="re1">$model</span><span class="sy0">-&gt;</span><span class="me1">foreign_key</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// Sets $join_table.'.'.$model-&gt;object_name.'_'.$model-&gt;primary_key, ie blogs_users.user_id</span>
<span class="re1">$join_col</span> <span class="sy0">=</span> <span class="re1">$model</span><span class="sy0">-&gt;</span><span class="me1">foreign_key</span><span class="br0">&#40;</span><span class="kw2">NULL</span><span class="sy0">,</span><span class="re1">$join_table</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
See also the protected property $foreign_key.
</p>

</div>

<h3><a name="join_table" id="join_table">join_table()</a></h3>
<div class="level3">

<p>

<code>public function join_table($table)</code>
</p>

<p>
This uses alphabetical comparison to choose the name of the join table.
</p>

<p>
Parameters:
</p>
<ol>
<li class="level1"><div class="li"> string The name of the table to join with.</div>
</li>
</ol>

<p>

This creates either <code>$model→table_name&#039;_&#039;.$table</code> or <code>$table.&#039;_&#039;.$model→table_name</code>
</p>

<p>
Example: The joining table of users and roles would be roles_users, because “r” comes before “u”. Joining products and categories would result in categories_products, because “c” comes before “p”.
</p>
<pre class="code php"><span class="re1">$user</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'user'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">join_table</span><span class="br0">&#40;</span><span class="st0">'roles'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// roles_users</span></pre>
<p>
The order is standard English order: zoo &gt; zebra &gt; robber &gt; ocean &gt; angel &gt; aardvark
</p>

</div>

<h3><a name="count_all" id="count_all">count_all()</a></h3>
<div class="level3">

<p>
Count all results found.
</p>

<p>
<strong>Example:</strong>

</p>
<pre class="code php"><span class="re1">$db</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'article'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><span class="st0">'tags'</span><span class="sy0">,</span> <span class="st0">'bali'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">count_all</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="count_last_query" id="count_last_query">count_last_query()</a></h3>
<div class="level3">

<p>
Count how many results found on last query.
</p>

<p>
<strong>Example:</strong>

</p>
<pre class="code php"><span class="re1">$db</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'user'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><span class="st0">'hometown'</span><span class="sy0">,</span> <span class="st0">'bali'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">count_last_query</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="properties" id="properties">Properties</a></h2>
<div class="level2">

<p>

ORM has several public object properties which can be used for various purposes. By default, all of these properties are managed by ORM and will change dynamically based on object. They should never be manually set in a model.

</p>

</div>

<h3><a name="loaded" id="loaded">loaded</a></h3>
<div class="level3">

<p>

Boolean for seeing whether the current object has been loaded from the database. This can be used to test if an object has been successfully loaded.
</p>
<pre class="code php"><span class="re1">$article</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'article'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$article</span><span class="sy0">-&gt;</span><span class="me1">loaded</span><span class="sy0">==</span><span class="kw2">TRUE</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'loaded article '</span><span class="sy0">,</span> <span class="re1">$article</span><span class="sy0">-&gt;</span><span class="me1">id</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
<span class="kw1">else</span>
<span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'no article by that id exists'</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="changed" id="changed">changed</a></h3>
<div class="level3">

<p>
Array used by ORM to keep track of changes made to columns in an ORM model prior to saving.  You can check the status of a specific column by using <code>isset($this→changed[&#039;name&#039;])</code>.
</p>

<p>
The <code>changed</code> property is very useful within the context of an overloaded save() method in your ORM Model.  Overloading the save() method allows you to perform extra processing, filtering or data integrity checks prior to saving any new/updated data for your ORM Model.
</p>
<pre class="code php"><span class="co1">// overload the save method in your ORM Model</span>
&nbsp;
<span class="kw2">public</span> <span class="kw2">function</span> save<span class="br0">&#40;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <span class="kw1">if</span> <span class="br0">&#40;</span><a href="http://www.php.net/isset"><span class="kw3">isset</span></a><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">changed</span><span class="br0">&#91;</span><span class="st0">'name'</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
        <span class="co1">// set the slug when the name changes -- 'my-post-name'</span>
	<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">slug</span> <span class="sy0">=</span> url<span class="sy0">::</span><span class="me2">title</span><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">name</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="saved" id="saved">saved</a></h3>
<div class="level3">

<p>

Boolean for checking whether the current object is saved.

</p>
<pre class="code php"><span class="re1">$article</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'article'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">if</span><span class="br0">&#40;</span><span class="re1">$article</span><span class="sy0">-&gt;</span><span class="me1">saved</span><span class="sy0">==</span><span class="kw2">FALSE</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'not saved'</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="re1">$article</span><span class="sy0">-&gt;</span><span class="me1">save</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">if</span><span class="br0">&#40;</span><span class="re1">$article</span><span class="sy0">-&gt;</span><span class="me1">saved</span><span class="sy0">==</span><span class="kw2">TRUE</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'saved'</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="object_name" id="object_name">object_name</a></h3>
<div class="level3">

<p>

The simple name of the object. If my class is named <code>Blog_Post_Model</code>, then <code>blog_post</code> is the <code>object_name</code>.
</p>

</div>

<h3><a name="primary_key" id="primary_key">primary_key</a></h3>
<div class="level3">

<p>

The column name of the primary key. If your primary key is a foreign key, then you specify that as your primary key.

</p>
<pre class="code php"><span class="co1">// This example uses field 'usercode' as primary key</span>
<span class="kw2">class</span> User_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
&nbsp;
    protected <span class="re1">$primary_key</span> <span class="sy0">=</span> <span class="st0">'usercode'</span><span class="sy0">;</span>
&nbsp;
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="primary_val" id="primary_val">primary_val</a></h3>
<div class="level3">

<p>

A convenience value corresponding to a column in the table. By default it is set to <code>name.</code> It can be used as a more human-friendly identifier for table rows. For instance, if you had a <code>users</code> table, you might set it to <code>username.</code> 
</p>
<pre class="code php"><span class="kw2">class</span> User_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
&nbsp;
    protected <span class="re1">$primary_val</span> <span class="sy0">=</span> <span class="st0">'username'</span><span class="sy0">;</span>
&nbsp;
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="table_name" id="table_name">table_name</a></h3>
<div class="level3">

<p>

The name of the database table that holds the records.

</p>
<pre class="code php"><span class="co1">// This example use 'usuarios' table for User_Model</span>
<span class="kw2">class</span> User_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
&nbsp;
    protected <span class="re1">$table_name</span> <span class="sy0">=</span> <span class="st0">'usuarios'</span><span class="sy0">;</span>
&nbsp;
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="table_columns" id="table_columns">table_columns</a></h3>
<div class="level3">

<p>

The database table column information that is being used.
</p>
<pre class="code php"><span class="kw2">class</span> User_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
&nbsp;
    protected <span class="re1">$table_columns</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id'</span><span class="sy0">,</span><span class="st0">'username'</span><span class="sy0">,</span><span class="st0">'last_login'</span><span class="sy0">,</span><span class="st0">'anotherfield'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="sorting" id="sorting">sorting</a></h3>
<div class="level3">

<p>

An array of sorting parameters that should be applied to queries. By default, results are sorted by <code>id ASC</code>. You can add multiple columns and directions to this property.
</p>
<pre class="code php"><span class="kw2">class</span> User_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
&nbsp;
    protected <span class="re1">$sorting</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'last_login'</span> <span class="sy0">=&gt;</span> <span class="st0">'desc'</span><span class="sy0">,</span> <span class="st0">'username'</span> <span class="sy0">=&gt;</span> <span class="st0">'asc'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="load_with" id="load_with">load_with</a></h3>
<div class="level3">

<p>

Allows you to specify which relations should always be joined. 
</p>
<pre class="code php"><span class="kw2">class</span> Blog_Post_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
&nbsp;
    protected <span class="re1">$load_with</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'user'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="br0">&#125;</span></pre>
<p>
<strong><a href="orm/starting.php" class="wikilink1" title="libraries:orm:starting">Continue to the next section: Getting Started &gt;&gt;</a></strong>

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer31b1.gif?id=libraries%3Aorm&amp;1324588200" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/orm by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


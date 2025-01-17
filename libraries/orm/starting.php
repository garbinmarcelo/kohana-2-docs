<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/orm/starting by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:16:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:orm:starting    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-08-18T09:56:12-0500" />
<meta name="keywords" content="libraries,orm,starting" />
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
<li class="level1"><div class="li"><span class="li"><a href="#getting_started_with_orm" class="toc">Getting Started with ORM</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#should_i_use_orm" class="toc">Should I Use ORM?</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#choosing_a_database" class="toc">Choosing A Database</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#orm_conventions" class="toc">ORM Conventions</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#creating_an_orm_model" class="toc">Creating an ORM Model</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#defining_relationships_in_orm" class="toc">Defining Relationships in ORM</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#has_one" class="toc">has_one</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#has_many_belongs_to" class="toc">has_many, belongs_to</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#has_and_belongs_to_many" class="toc">has_and_belongs_to_many</a></span></div></li></ul>
</li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->

<p>
<strong><a href="../orm.php" class="wikilink1" title="libraries:orm">&lt;&lt; Back to ORM Main Page</a></strong>
</p>



<h1><a name="getting_started_with_orm" id="getting_started_with_orm">Getting Started with ORM</a></h1>
<div class="level1">

</div>

<h2><a name="should_i_use_orm" id="should_i_use_orm">Should I Use ORM?</a></h2>
<div class="level2">

<p>
The decision to use ORM depends on your development needs and preferences.  Kohana&#039;s ORM is great for reducing the total lines of code required for most common create, read, update and delete tasks (especially when working with forms).  It can also greatly enhance your development speed and reduce potential bugs introduced by writing custom code.  However, ORM may not always produce the most efficient <acronym title="Structured Query Language">SQL</acronym> code for all situations.
</p>

<p>
Although there are ways to fine tune ORM queries, developers that require total control over generated <acronym title="Structured Query Language">SQL</acronym> should leverage Kohana&#039;s fully-featured <a href="../database.php" class="wikilink1" title="libraries:database">database</a> and <a href="../database/builder.php" class="wikilink1" title="libraries:database:builder">query builder</a> libraries to write custom queries with the benefit of auto-escaping.  Since ORM integrates with the database library, you also have the option of writing custom methods to handle specific queries within your ORM models.  There is also a third-party module called <a href="http://projects.kohanaphp.com/projects/show/automodeler" class="urlextern" title="http://projects.kohanaphp.com/projects/show/automodeler"  rel="nofollow">Auto Modeler</a>. As with most things in Kohana, the choice is yours!
</p>

</div>

<h2><a name="choosing_a_database" id="choosing_a_database">Choosing A Database</a></h2>
<div class="level2">

<p>
Although not required, to obtain the most benefits from ORM, it is highly-recommended to use a <a href="http://en.wikipedia.org/wiki/Relational%20Database" class="interwiki iw_wp" title="http://en.wikipedia.org/wiki/Relational%20Database">Relational Database</a> that supports true <a href="http://en.wikipedia.org/wiki/Foreign%20Key" class="interwiki iw_wp" title="http://en.wikipedia.org/wiki/Foreign%20Key">Foreign Key</a>s. Kohana has drivers for the following databases with foreign key support: PostgreSQL, MySQL (using <a href="http://dev.mysql.com/doc/mysql/en/innodb.php" class="urlextern" title="http://dev.mysql.com/doc/mysql/en/innodb.php"  rel="nofollow">InnoDB</a> tables) and MSSQL. By using one of these databases, <a href="http://en.wikipedia.org/wiki/Referential%20Integrity" class="interwiki iw_wp" title="http://en.wikipedia.org/wiki/Referential%20Integrity">Referential Integrity</a> is enforced at the the database level.  <em>You can still use <code>MyISAM</code> tables in MySQL, but you will need to manually delete rows in related tables when foreign keys are removed.</em>
</p>

<p>
For example, you can create a table that will automatically delete rows when a foreign key is deleted:
</p>
<pre class="code sql"><span class="co1">-- roles_users joining table (MySQL)</span>
<span class="kw1">CREATE</span> <span class="kw1">TABLE</span> roles_users <span class="br0">&#40;</span>
  user_id smallint<span class="br0">&#40;</span><span class="nu0">5</span><span class="br0">&#41;</span> <span class="kw1">UNSIGNED</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  role_id tinyint<span class="br0">&#40;</span><span class="nu0">3</span><span class="br0">&#41;</span> <span class="kw1">UNSIGNED</span> <span class="kw1">NOT</span> <span class="kw1">NULL</span>,
  <span class="kw1">PRIMARY</span> <span class="kw1">KEY</span>  <span class="br0">&#40;</span>user_id,role_id<span class="br0">&#41;</span>,
  <span class="kw1">KEY</span> fk_role_id <span class="br0">&#40;</span>role_id<span class="br0">&#41;</span>
<span class="br0">&#41;</span> ENGINE<span class="sy0">=</span>InnoDB <span class="kw1">DEFAULT</span> CHARSET<span class="sy0">=</span>utf8;
&nbsp;
<span class="kw1">ALTER</span> <span class="kw1">TABLE</span> <span class="st0">`roles_users`</span>
  <span class="kw1">ADD</span> CONSTRAINT roles_users_idfk_1 <span class="kw1">FOREIGN</span> <span class="kw1">KEY</span> <span class="br0">&#40;</span>user_id<span class="br0">&#41;</span> <span class="kw1">REFERENCES</span> users <span class="br0">&#40;</span>id<span class="br0">&#41;</span> <span class="kw1">ON</span> <span class="kw1">DELETE</span> CASCADE,
  <span class="kw1">ADD</span> CONSTRAINT roles_users_idfk_2 <span class="kw1">FOREIGN</span> <span class="kw1">KEY</span> <span class="br0">&#40;</span>role_id<span class="br0">&#41;</span> <span class="kw1">REFERENCES</span> roles <span class="br0">&#40;</span>id<span class="br0">&#41;</span> <span class="kw1">ON</span> <span class="kw1">DELETE</span> CASCADE;</pre>
<p>
The use of constraints (as shown above) will automatically delete the relationship between the user or role objects when either is deleted.
</p>

</div>

<h2><a name="orm_conventions" id="orm_conventions">ORM Conventions</a></h2>
<div class="level2">

<p>
To get the most value out of the ORM library, you should adhere to the conventions outlined below. However, it is possible to override most default conventions via ORM object properties.
</p>
<ul>
<li class="level1"><div class="li"> <strong>Table names are plural</strong>, e.g. <code>users</code> (override by setting <code>$table_names_plural</code> to FALSE).  ORM utilizes the  <a href="../../helpers/inflector.php" class="wikilink1" title="helpers:inflector">inflector helper</a> to determine table names.  Note: If your table name does not follow standard pluralization, copy <code>system/config/inflector.php</code> to your <code>application/config</code> directory and add your table to the irregular array (e.g. <code>$config[&#039;irregular&#039;] = array(&#039;mytable&#039; ⇒ &#039;mytableplural&#039;);</code>).</div>
</li>
</ul>
<ul>
<li class="level1"><div class="li"> <strong>Model names are singular</strong> (e.g. <code>user</code>) with _Model appended to the model name, e.g. <code>User_Model</code> (override by setting  <code>$table_name</code> in your model)</div>
</li>
<li class="level1"><div class="li"> <strong>Each table should have an auto_incrementing column named &#039;id&#039; as its primary key</strong> (override by setting <code>$primary_key</code> in your model)</div>
</li>
<li class="level1"><div class="li"> <strong>Foreign keys should be named using the &#039;modelname_id&#039;</strong> (e.g. user_id)</div>
</li>
<li class="level1"><div class="li"> <strong>Pivot tables should use the parent table names in alphabetical order</strong> in the form <code>table1_table2</code>.  For example: If you have a many-to-many relationship between <code>users</code> and <code>roles</code> tables, the join table should be named <code>roles_users</code>.</div>
</li>
</ul>

</div>

<h2><a name="creating_an_orm_model" id="creating_an_orm_model">Creating an ORM Model</a></h2>
<div class="level2">

<p>
To use ORM, you must first create a <a href="../../general/models.php" class="wikilink1" title="general:models">Model</a> that extends the ORM library.  Each model represents the database table and each object created by the model represents <a href="#finding_rows" title="libraries:orm:starting &crarr;" class="wikilink1">one or more rows</a> from that table.  A model should be created for each table that is part of a relationship (excluding pivot tables).
</p>

<p>
The syntax for creating an ORM model is as follows:
</p>
<pre class="code php"><span class="kw2">class</span> User_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span><span class="br0">&#125;</span></pre>
</div>

<h2><a name="defining_relationships_in_orm" id="defining_relationships_in_orm">Defining Relationships in ORM</a></h2>
<div class="level2">

<p>
Understanding relationships is essential to effectively using ORM, as properly defining relationships between your models enables the ORM library to perform its magic.  Before defining relationships, it is a good idea to <a href="http://en.wikipedia.org/wiki/Er_diagram" class="urlextern" title="http://en.wikipedia.org/wiki/Er_diagram"  rel="nofollow">document your current database model</a> to get a clear understanding of the various relationships between your tables.  If your database is well documented, it is much easier to properly define the relationships between your ORM models.
</p>

<p>
The ORM library supports the following relationships in your model:

</p>
<ul>
<li class="level1"><div class="li">  <strong><code><a href="#has_one" title="libraries:orm:starting &crarr;" class="wikilink1">has_one</a></code></strong> for one-to-one relationships</div>
</li>
<li class="level1"><div class="li">  <strong><code><a href="#has_many" title="libraries:orm:starting &crarr;" class="wikilink1">has_many</a></code></strong> for the parent side of a one-to-many relationship</div>
</li>
<li class="level1"><div class="li">  <strong><code><a href="#belongs_to" title="libraries:orm:starting &crarr;" class="wikilink1">belongs_to</a></code></strong> for the child side of a one-to-many or one-to-one relationship</div>
</li>
<li class="level1"><div class="li">  <strong><code><a href="#has_and_belongs_to_many" title="libraries:orm:starting &crarr;" class="wikilink1">has_and_belongs_to_many</a></code></strong> for many-to-many relationships</div>
</li>
</ul>

<p>

In the examples that follow, we refer to a <code>Blog</code> database – where a <code>post</code> may have an <code>author</code> and an <code>editor</code> (both of which have user accounts in our database). A blog post may be associated with many <code>categories</code> and may have many <code>comments</code>.
</p>

<p>
It&#039;s also important to note that the referenced models have to be pluralized correctly:

</p>
<ul>
<li class="level1"><div class="li">  <strong><code><a href="#has_one" title="libraries:orm:starting &crarr;" class="wikilink1">has_one</a></code></strong> Singular, e.g. <code>category</code></div>
</li>
<li class="level1"><div class="li">  <strong><code><a href="#has_many" title="libraries:orm:starting &crarr;" class="wikilink1">has_many</a></code></strong> Plural, e.g. <code>categories</code></div>
</li>
<li class="level1"><div class="li">  <strong><code><a href="#belongs_to" title="libraries:orm:starting &crarr;" class="wikilink1">belongs_to</a></code></strong> Singular, e.g. <code>category</code></div>
</li>
<li class="level1"><div class="li">  <strong><code><a href="#has_and_belongs_to_many" title="libraries:orm:starting &crarr;" class="wikilink1">has_and_belongs_to_many</a></code></strong> Plural, e.g. <code>categories</code></div>
</li>
</ul>

</div>

<h3><a name="has_one" id="has_one">has_one</a></h3>
<div class="level3">

<p>
The <code>has_one</code> relationship allows you to define a one-to-one relationship between two models.  For example, a blog post has one user.  The foreign key <code>user_id</code> should be defined in your <code>blog_posts</code> table.
</p>
<pre class="code php"><span class="kw2">class</span> Blog_Post_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
&nbsp;
    protected <span class="re1">$has_one</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'user'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="br0">&#125;</span></pre>
<p>
Now we can access the user from the blog post like this:

</p>
<pre class="code php"><span class="re1">$post</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'blog_post'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">user</span><span class="sy0">-&gt;</span><span class="me1">username</span><span class="sy0">;</span></pre>
</div>

<h3><a name="has_many_belongs_to" id="has_many_belongs_to">has_many, belongs_to</a></h3>
<div class="level3">

<p>
The <code>has_many</code> relationship is used in conjunction with <code>belongs_to</code> to define a one-to-many relationship between two models.  Define <code>has_many</code> on the parent side (plural) and <code>belongs_to</code> on the child side (singular).  For example, in a Blog database, each post will have many comments and each comment is associated with one blog post.  The foreign key <code>blog_post_id</code> should be defined in your <code>comments</code> table.  
</p>

<p>
<strong>Note:</strong> Defining a <code>belongs_to</code> relationship in the child model is optional and only required if you need to look up information in the parent model that is associated with the current child model.
</p>
<pre class="code php"><span class="kw2">class</span> Blog_Post_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
&nbsp;
    protected <span class="re1">$has_one</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'user'</span><span class="br0">&#41;</span><span class="sy0">;</span>
    protected <span class="re1">$has_many</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'comments'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="br0">&#125;</span></pre><pre class="code php"><span class="kw2">class</span> Comment_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
&nbsp;
    <span class="co1">// This is only required if need to find the post by a comment</span>
    protected <span class="re1">$belongs_to</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'blog_post'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="br0">&#125;</span></pre>
<p>
This allows us to do the following:

</p>
<pre class="code php"><span class="re1">$post</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'blog_post'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">comments</span> <span class="kw1">as</span> <span class="re1">$comment</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$comment</span><span class="sy0">-&gt;</span><span class="me1">name</span><span class="sy0">,</span> <span class="re1">$comment</span><span class="sy0">-&gt;</span><span class="me1">body</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="co1">// We can also load a post via a comment</span>
<span class="re1">$comment</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'comment'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$post</span> <span class="sy0">=</span> <span class="re1">$comment</span><span class="sy0">-&gt;</span><span class="me1">blog_post</span><span class="sy0">;</span></pre>
</div>

<h3><a name="has_and_belongs_to_many" id="has_and_belongs_to_many">has_and_belongs_to_many</a></h3>
<div class="level3">

<p>
The <code>has_and_belongs_to_many</code> relationship allows you to define a many-to-many relationship between two tables.  It is important to note that many-to-many relationships require a “pivot table” that minimally contains the primary keys of both tables.  The pivot table should be named in alphabetical order, such as <code>roles_users</code>.  Once defined, <code>has_and_belongs_to_many</code> relationships allow multiple objects to be associated with many other objects, such as relating a blog post to many categories.  The <code>has_and_belongs_to_many</code> relationship must be defined in both models.
</p>

<p>
For example, in a Blog database, blog_posts can be associated with many categories and categories can be associated with many different blog posts.  A table called <code>blog_posts_categories</code> with the columns <code>blog_post_id</code> and <code>category_id</code> is required to establish the relationship between blog posts and categories (defining which categories are associated with various blog posts and vice versa).
</p>
<pre class="code php"><span class="kw2">class</span> Blog_Post_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
&nbsp;
    protected <span class="re1">$has_and_belongs_to_many</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'categories'</span><span class="br0">&#41;</span><span class="sy0">;</span>
    protected <span class="re1">$has_one</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'user'</span><span class="br0">&#41;</span><span class="sy0">;</span>
    protected <span class="re1">$has_many</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'comments'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="br0">&#125;</span></pre><pre class="code php"><span class="kw2">class</span> Category_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
&nbsp;
    protected <span class="re1">$has_and_belongs_to_many</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'blog_posts'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="br0">&#125;</span></pre>
<p>
Data is accessed from this relationship using a foreach loop the same way as is done with a <code>has_many</code> relationship:
</p>
<pre class="code php"><span class="re1">$post</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'blog_post'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">categories</span> <span class="kw1">as</span> <span class="re1">$category</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$category</span><span class="sy0">-&gt;</span><span class="me1">name</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
A more useful example may be finding all of the blog posts that belong to a particular category:
</p>
<pre class="code php"><span class="re1">$category</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'category'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$category</span><span class="sy0">-&gt;</span><span class="me1">blog_posts</span> <span class="kw1">as</span> <span class="re1">$post</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">title</span><span class="sy0">,</span> <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">author</span><span class="sy0">-&gt;</span><span class="me1">username</span><span class="sy0">,</span> <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">body</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>

<strong><a href="working.php" class="wikilink1" title="libraries:orm:working">Continue to the next section: Working with ORM &gt;&gt;</a></strong>

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../../lib/exe/indexerffb9.gif?id=libraries%3Aorm%3Astarting&amp;1324588290" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/orm/starting by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:16:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/orm/advanced by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:16:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:orm:advanced    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-02-18T18:27:17-0600" />
<meta name="keywords" content="libraries,orm,advanced" />
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
<li class="level1"><div class="li"><span class="li"><a href="#advanced_topics" class="toc">Advanced Topics</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#clarification_on_differences_between_has_one_and_belongs_to" class="toc">Clarification on differences between has_one and belongs_to</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#aliasingenhancing_the_meaning_of_your_relationships" class="toc">Aliasing: Enhancing the meaning of your relationships</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#has_many_through_relationships" class="toc">has_many &#039;&#039;through&#039;&#039; relationships</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#multiple_has_and_belongs_to_many_relationships_between_the_same_two_tables" class="toc">Multiple has_and_belongs_to_many relationships between the same two tables</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#optimizing_one-to-one_relationships_using_with" class="toc">Optimizing One-to-One Relationships using with()</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#using_different_unique_keys_to_load_orm_models" class="toc">Using different unique keys to load ORM models</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#simple_method_to_use_a_different_primary_key" class="toc">Simple method to use a different primary key</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#orm_tree" class="toc">ORM Tree</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#validation_using_orm" class="toc">Validation using ORM</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Todo</th>
	</tr>
</table>

<p>

<strong><a href="../orm.php" class="wikilink1" title="libraries:orm">&lt;&lt; Back to ORM Main Page</a></strong>
</p>



<h1><a name="advanced_topics" id="advanced_topics">Advanced Topics</a></h1>
<div class="level1">

</div>

<h2><a name="clarification_on_differences_between_has_one_and_belongs_to" id="clarification_on_differences_between_has_one_and_belongs_to">Clarification on differences between has_one and belongs_to</a></h2>
<div class="level2">

<p>
At first glance it may seem as though <code>has_one</code> and <code>belongs_to</code> serve the same purpose and can be used interchangeably - this is not the case.  The difference between the two is in the location of the foreign key.
</p>
<pre class="code php"><span class="kw2">class</span> User_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
    protected <span class="re1">$has_one</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'portrait'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="kw2">class</span> Portrait_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
    protected <span class="re1">$belongs_to</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'user'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
In the above example, each user has one (and only 1) portrait.  Each portrait belongs to only 1 user.  The portraits table should contain the foreign key referencing the user, <code>user_id</code>.  In a <code>has_one</code> and <code>belongs_to</code> 1-to-1 relationship, the foreign key always lies in the model containing the belongs_to declaration (in this case, the Portrait_Model&#039;s table).

</p>

</div>

<h2><a name="aliasingenhancing_the_meaning_of_your_relationships" id="aliasingenhancing_the_meaning_of_your_relationships">Aliasing: Enhancing the meaning of your relationships</a></h2>
<div class="level2">

<p>
Many times the default relationships used within ORM do not effectively communicate the true meaning.  In the example used previously in the Getting Started section, users can be related to blog posts as both authors and editors.  To define this dual-relationship an <code>alias</code> can be used to allow multiple users to have relationships to the post.  Aliasing allows multiple objects of the same type to be related to another object. Aliasing can also be used to change the name of the related object in order to more effectively communicate the purpose of the relationship more clearly.
</p>

<p>
The array key is the alias name and the array value, the model name that it maps to.
</p>
<pre class="code php"><span class="kw2">class</span> Blog_Post_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
&nbsp;
    protected <span class="re1">$belongs_to</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'author'</span> <span class="sy0">=&gt;</span> <span class="st0">'user'</span><span class="sy0">,</span> <span class="st0">'editor'</span> <span class="sy0">=&gt;</span> <span class="st0">'user'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="br0">&#125;</span></pre>
<p>
Now we can access both the author and the editor of the blog post like this:

</p>
<pre class="code php"><span class="re1">$post</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'blog_post'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">author</span><span class="sy0">-&gt;</span><span class="me1">username</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">editor</span><span class="sy0">-&gt;</span><span class="me1">username</span><span class="sy0">;</span></pre>
<p>
The <code>blog_posts</code> database table would have 2 columns now, <code>blog_posts.author_id</code> and <code>blog_posts.editor_id</code>, and both would have values that exist in <code>users.id</code>.
</p>

<p>
<strong>Note</strong>: Aliases can also be used in reverse within the <code>has_one</code> relationship as well.
</p>

</div>

<h2><a name="has_many_through_relationships" id="has_many_through_relationships">has_many &#039;&#039;through&#039;&#039; relationships</a></h2>
<div class="level2">

<p>
If you want similar functionality to has_and_belongs_to_many, but want to have additional data/columns stored in the pivot table for the relationships, you can use a <code>has_many through</code> relationship.  This looks similar to aliasing:
</p>
<pre class="code php"><span class="kw2">class</span> Post_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
&nbsp;
    protected <span class="re1">$has_many</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'categories'</span><span class="sy0">=&gt;</span><span class="st0">'posts_categories'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="kw2">class</span> Posts_Category_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
&nbsp;
<span class="br0">&#125;</span></pre>
<p>
Above the <code>Post_Model</code> is linked to different categories through the <code>posts_categories</code> pivot table.  You must also create a model for the pivot table <code>Posts_Category_Model</code>. You can now access both the categories and the pivot table by using the following:
</p>
<pre class="code php"><span class="re1">$post</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'post'</span><span class="sy0">,</span> <span class="re1">$post_id</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">categories</span> <span class="kw1">as</span> <span class="re1">$category</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span> <span class="sy0">...</span> <span class="br0">&#125;</span>
&nbsp;
<span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">posts_categories</span> <span class="kw1">as</span> <span class="re1">$pivot</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span> <span class="sy0">...</span> <span class="br0">&#125;</span></pre>
<p>
<strong>Note: You should have an ID column for the pivot table (which, unlike <code>has_and_belongs_to_many</code>, doesn&#039;t require one)</strong>
</p>

</div>

<h2><a name="multiple_has_and_belongs_to_many_relationships_between_the_same_two_tables" id="multiple_has_and_belongs_to_many_relationships_between_the_same_two_tables">Multiple has_and_belongs_to_many relationships between the same two tables</a></h2>
<div class="level2">

<p>
Consider this scenario. You have a system that stores articles, each article can have multiple authors and contributors. Authors and contributors are the same type of object, just a different association to an article. To accomplish this sort of functionality, you would have the core two tables; articles and authors. You would also have TWO pivot tables titled authors_articles and contributors_articles. Each pivot table would contain the columns; id, article_id and author_id.
</p>

<p>
Your <code>Article_Model</code> would look something like this:

</p>
<pre class="code php"><span class="kw2">class</span> Article_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
    protected <span class="re1">$has_and_belongs_to_many</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'authors_articles'</span> <span class="sy0">=&gt;</span> <span class="st0">'authors'</span><span class="sy0">,</span><span class="st0">'contributors_articles'</span> <span class="sy0">=&gt;</span> <span class="st0">'contributors'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
In the <code>Author_Model</code> and <code>Contributor_Model</code> you will need to override the $table_name value, so both point to the author table.

</p>
<pre class="code php"><span class="kw2">class</span> Author_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
	protected <span class="re1">$table_name</span> <span class="sy0">=</span> <span class="st0">'authors'</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="kw2">class</span> Contributor_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
	protected <span class="re1">$table_name</span> <span class="sy0">=</span> <span class="st0">'authors'</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
</div>

<h2><a name="optimizing_one-to-one_relationships_using_with" id="optimizing_one-to-one_relationships_using_with">Optimizing One-to-One Relationships using with()</a></h2>
<div class="level2">

<p>
ORM uses <a href="http://en.wikipedia.org/wiki/lazy%20loading" class="interwiki iw_wp" title="http://en.wikipedia.org/wiki/lazy%20loading">lazy loading</a> by default, which defers initialization of an object until it is needed.  This typically results in an additional query when related data is requested in a one-to-one relationship.  The <code>with()</code> method in ORM can be used to force the use of a JOIN in a one-to-one relationship, resulting in only one query being called.  You can also bind nested one-to-one relationships using a colon.
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
<pre class="code php"><span class="kw2">class</span> User_Model <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
    protected <span class="re1">$load_with</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'city'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
</div>

<h2><a name="using_different_unique_keys_to_load_orm_models" id="using_different_unique_keys_to_load_orm_models">Using different unique keys to load ORM models</a></h2>
<div class="level2">

<p>
By default, ORM uses the <strong>id</strong> column as the identifier for the unique row within the database.  However it is possible for ORM to load an object using a different unique key from your table. ORM uses a method called <strong><code>unique_key</code></strong> to load data and this method can be overloaded within your ORM model to allow other columns to be used.
</p>

<p>
The example demonstrates the use of <code>unique_key</code> within an ORM model. The <strong>id</strong> is checked for data type. If the datatype is not a digit and is a string, the column <strong>shortname</strong> will be used to load the model.
</p>
<pre class="code php"><span class="kw2">public</span> <span class="kw2">function</span> unique_key<span class="br0">&#40;</span><span class="re1">$id</span> <span class="sy0">=</span> <span class="kw2">NULL</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
	<span class="kw1">if</span> <span class="br0">&#40;</span> <span class="sy0">!</span> <a href="http://www.php.net/empty"><span class="kw3">empty</span></a><span class="br0">&#40;</span><span class="re1">$id</span><span class="br0">&#41;</span> AND <a href="http://www.php.net/is_string"><span class="kw3">is_string</span></a><span class="br0">&#40;</span><span class="re1">$id</span><span class="br0">&#41;</span> AND <span class="sy0">!</span> <a href="http://www.php.net/ctype_digit"><span class="kw3">ctype_digit</span></a><span class="br0">&#40;</span><span class="re1">$id</span><span class="br0">&#41;</span> <span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="kw1">return</span> <span class="st0">'shortname'</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
&nbsp;
&nbsp;
	<span class="kw1">return</span> parent<span class="sy0">::</span><span class="me2">unique_key</span><span class="br0">&#40;</span><span class="re1">$id</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
If you intend to you use custom unique keys within your application, it is a good idea to ensure you correctly index all columns being used as a unique identifier. This will ensure that as your application scales, performance is not adversely effected.
</p>

<p>
Assuming the <strong>homepage</strong> record has an ID of 1, including the <strong>unique_key</strong> method within your ORM model allows the following constructor methods in your code.
</p>
<pre class="code php"><span class="co1">// Using the ORM::factory method</span>
<span class="re1">$my_page</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span> <span class="st0">'Page'</span><span class="sy0">,</span> <span class="st0">'homepage'</span> <span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Using the standard constructor</span>
<span class="re1">$my_other_page</span> <span class="sy0">=</span> <span class="kw2">new</span> Page_Model<span class="br0">&#40;</span> <span class="st0">'homepage'</span> <span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$my_old_method</span> <span class="sy0">=</span> <span class="kw2">new</span> Page_Model<span class="br0">&#40;</span> <span class="nu0">1</span> <span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
<code>$my_page</code>, <code>$my_other_page</code> and <code>$my_old_method</code> will all contain the same record.
</p>

</div>

<h3><a name="simple_method_to_use_a_different_primary_key" id="simple_method_to_use_a_different_primary_key">Simple method to use a different primary key</a></h3>
<div class="level3">

<p>
If you have a table that uses a primary key other than <code>id</code>, you can simply override the <code>$primary_key</code> property in your model to have ORM use your custom primary key to load your model.
</p>

<p>
In the following example, a Geo model is defined with a primary key of <code>zip</code> as opposed to the standard ORM <code>id</code>. 
</p>
<pre class="code php"><span class="kw2">class</span> Geo <span class="kw2">extends</span> ORM <span class="br0">&#123;</span>
    protected <span class="re1">$primary_key</span> <span class="sy0">=</span> <span class="st0">'zip'</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
</div>

<h2><a name="orm_tree" id="orm_tree">ORM Tree</a></h2>
<div class="level2">

<p>

ORM tree is an ORM extension that allows creating an object relationship with itself. Typical use of this library can be a category hierarchy, in other words parent ↔ childrens link.
</p>

<p>
Your database schema will need to include a parent ID column. 
</p>
<pre class="code php"><span class="kw2">class</span> Category_Model <span class="kw2">extends</span> ORM_Tree
<span class="br0">&#123;</span>
    protected <span class="re1">$ORM_Tree_children</span> <span class="sy0">=</span> <span class="st0">'categories'</span><span class="sy0">;</span>
&nbsp;
    <span class="co1">// Set the column which holds this models parent</span>
    <span class="co1">// Default is parent_id</span>
    protected <span class="re1">$ORM_Tree_parent_key</span> <span class="sy0">=</span> <span class="st0">'parent_id'</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre><pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span>ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">&quot;Category&quot;</span><span class="sy0">,</span> <span class="nu0">42</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">children</span><span class="sy0">-&gt;</span><span class="me1">as_array</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">//returns the children for the category with id 42</span></pre><pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span>ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">&quot;Category&quot;</span><span class="sy0">,</span> <span class="nu0">4</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">parent</span><span class="sy0">-&gt;</span><span class="me1">name</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">//returns the parent name of the category with ID 4</span></pre>
</div>

<h2><a name="validation_using_orm" id="validation_using_orm">Validation using ORM</a></h2>
<div class="level2">

<p>

ORM has the ability to validate and save data automatically. Any errors encountered during validation can be used to feedback to the view using the standard <a href="../validation.php" class="wikilink1" title="libraries:validation">Validation Library</a> error reporting method.
</p>

<p>
To use Validation in an ORM model a set of validation rules and filters must be defined within a public method called <strong>validate</strong>, which overloads the <strong>ORM::validate()</strong> method. See <a href="examples.php#combining_orm_and_validation" class="wikilink1" title="libraries:orm:examples">Examples: Combining ORM and Validation</a> for further details and code samples.
</p>

<p>
<strong><a href="../orm.php" class="wikilink1" title="libraries:orm">&lt;&lt; Back to ORM Main Page</a></strong>
</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../../lib/exe/indexera073.gif?id=libraries%3Aorm%3Aadvanced&amp;1324588291" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/orm/advanced by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:16:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


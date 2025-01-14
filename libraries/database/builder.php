<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/database/builder by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:16:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:database:builder    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-06-20T17:38:12-0500" />
<meta name="keywords" content="libraries,database,builder" />
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
<li class="level1"><div class="li"><span class="li"><a href="#database_query_builder" class="toc">Database Query Builder</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#usage" class="toc">Usage</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#limitations" class="toc">Limitations</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#select" class="toc">select()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#from" class="toc">from()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#where" class="toc">where()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#orwhere" class="toc">orwhere()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#like" class="toc">like()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#orlike" class="toc">orlike()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#notlike" class="toc">notlike()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#ornotlike" class="toc">ornotlike()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#in" class="toc">in()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#notin" class="toc">notin()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#regex" class="toc">regex()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#orregex" class="toc">orregex()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#notregex" class="toc">notregex()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#ornotregex" class="toc">ornotregex()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#groupby" class="toc">groupby()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#having" class="toc">having()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#orhaving" class="toc">orhaving()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#get" class="toc">get()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#getwhere" class="toc">getwhere()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#set" class="toc">set()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#merge" class="toc">merge()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#insert" class="toc">insert()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#update" class="toc">update()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#delete" class="toc">delete()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#offset" class="toc">offset()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#limit" class="toc">limit()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#orderby" class="toc">orderby()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#join" class="toc">join()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#count_records" class="toc">count_records()</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">Expand, check database.php to see if everything is documented</td>
	</tr>
</table>

<p>

<strong><a href="../database.php" class="wikilink1" title="libraries:database">&lt;&lt; Back to Database Main Page</a></strong>
</p>



<h1><a name="database_query_builder" id="database_query_builder">Database Query Builder</a></h1>
<div class="level1">

<p>

Use the query builder methods to make database agnostic queries and data manipulation.
</p>

</div>

<h2><a name="usage" id="usage">Usage</a></h2>
<div class="level2">

<p>

First build your query, like:

</p>
<pre class="code php"><span class="co1">//if your class extended from Model, $this-&gt;db is already declared</span>
<span class="co1">//so this row isn't necessary</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span> <span class="sy0">=</span> <span class="kw2">new</span> Database<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">//build the query:</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">from</span><span class="br0">&#40;</span><span class="st0">'users'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">select</span><span class="br0">&#40;</span><span class="st0">'username'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><span class="st0">'id'</span><span class="sy0">,</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">//this will build the SQL: 'SELECT username FROM users WHERE id = 1'</span></pre>
<p>
Then execute the query with the get(), insert(), update(), delete() method:
</p>
<pre class="code php"><span class="re1">$result</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">//$result the same as if you had written:</span>
<span class="re1">$result</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">query</span><span class="br0">&#40;</span><span class="st0">'SELECT username FROM users WHERE id = 1'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

All query builder methods return the database class, so they can be chained like this:

</p>
<pre class="code php"><span class="re1">$result</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">from</span><span class="br0">&#40;</span><span class="st0">'users'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">select</span><span class="br0">&#40;</span><span class="st0">'username'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><span class="st0">'id'</span><span class="sy0">,</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="limitations" id="limitations">Limitations</a></h2>
<div class="level2">

<p>

While the query builder portion of the database library is very powerful and easy to use, it does have some inherent limitations. This is mainly due to the fact it escapes everything you give it. Therefore the following things won&#039;t work as expected:

</p>
<ol>
<li class="level1"><div class="li"> Database arithmetic: <code>$db→update(&#039;pages&#039;, array(&#039;views&#039; ⇒ &#039;views+1&#039;))</code>. This will get escaped and not work as expected.</div>
</li>
<li class="level1"><div class="li"> Parenthesis support: queries like <code>SELECT * FROM pages WHERE (id = 5) OR (title = &#039;BLAH&#039; AND id = 15)</code> won&#039;t work properly, because the query builder doesn&#039;t yet have the capability to add parentheses. This is a planned addition in a future release.</div>
</li>
<li class="level1"><div class="li"> Any database specific functions: things like MySQL&#039;s <code>NOW()</code> function will get escaped and not work properly. In future releases there may be an option to turn off automatic query escaping, which will solve this problem. The are a couple reasons we won&#039;t support this right now:</div>
</li>
</ol>
<ul>
<li class="level1"><div class="li"> The query builder is supposed to provide server agnostic database access. Putting DB specific functions in your query builder statement completely destroys this.</div>
</li>
<li class="level1"><div class="li"> There are entirely too many functions to support for every database server, and check every call against all these possible functions. We focus on speed, sometimes at the cost of functionality.</div>
</li>
<li class="level1"><div class="li"> Quoting is necessary to allow maximum flexibility for table/column names</div>
</li>
</ul>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="select" id="select">select()</a></h3>
<div class="level3">

<p>

The select() method set the table column names you want to SELECT with your query.
</p>
<pre class="code php"><span class="re1">$db</span> <span class="sy0">=</span> <span class="kw2">new</span> Database<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">select</span><span class="br0">&#40;</span><span class="st0">'id, title'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">//OR</span>
&nbsp;
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">select</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id'</span><span class="sy0">,</span> <span class="st0">'title'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
This will set the SELECT part of your query to `id`, `title`. Note that the query builder automatically escapes column names for you, and if you leave this method out, your query will automatically be set to <code>SELECT *</code>. You can also specify cross table columns:
</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">select</span><span class="br0">&#40;</span><span class="st0">'users.id, pages.title'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
And it will generate <code>SELECT `users`.`id`, `pages`.`title`</code>.
</p>

<p>
You can also specify column aliases:

</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">select</span><span class="br0">&#40;</span><span class="st0">'id as page_id'</span><span class="sy0">,</span> <span class="st0">'title as page_title'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Will generate <code>SELECT `id` AS `page_id`, `title` AS `page_title`</code>.
</p>

<p>
For getting DISTINCT data:

</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">select</span><span class="br0">&#40;</span><span class="st0">'DISTINCT user'</span><span class="br0">&#41;</span></pre>
<p>

Will generate <code>SELECT DISTINCT `user`</code>.
</p>

</div>

<h3><a name="from" id="from">from()</a></h3>
<div class="level3">

<p>

The <code>from()</code> method sets the table(s) you want to SELECT from. You can use an array or comma separated list of table names.
</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">from</span><span class="br0">&#40;</span><span class="st0">'pages'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// OR</span>
&nbsp;
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">from</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'pages'</span><span class="sy0">,</span> <span class="st0">'users'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

This will produce <code>FROM `pages`, `users`</code>. Note that the query builder automatically escapes your input.
</p>

<p>
You can also specify table aliases like with <code>select()</code> above. This way you can write less:

</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">from</span><span class="br0">&#40;</span><span class="st0">'pages as p'</span><span class="sy0">,</span> <span class="st0">'users as u'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">select</span><span class="br0">&#40;</span><span class="st0">'u.id'</span><span class="sy0">,</span> <span class="st0">'p.title'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="where" id="where">where()</a></h3>
<div class="level3">

<p>

The <code>where()</code> method sets the where conditions of your query. You can pass it a key string along with a value string, or an array containing multiple key/value pairs. It will join them with AND
</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><span class="st0">'id'</span><span class="sy0">,</span> <span class="nu0">5</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id'</span> <span class="sy0">=&gt;</span> <span class="nu0">5</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id'</span> <span class="sy0">=&gt;</span> <span class="nu0">5</span><span class="sy0">,</span> <span class="st0">'title'</span> <span class="sy0">=&gt;</span> <span class="st0">'Demo'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
The last line will generate <code>WHERE `id` = 5 AND `title` = &#039;Demo</code>&#039;.
</p>

</div>

<h4><a name="where_not" id="where_not">where not</a></h4>
<div class="level4">
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id !='</span> <span class="sy0">=&gt;</span> <span class="re1">$some_id</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h4><a name="additional_operators" id="additional_operators">additional operators</a></h4>
<div class="level4">
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id &gt;='</span> <span class="sy0">=&gt;</span> <span class="re1">$some_id</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id &lt;'</span> <span class="sy0">=&gt;</span> <span class="re1">$some_id</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// ... etc</span></pre>
</div>

<h4><a name="is_null" id="is_null">is null</a></h4>
<div class="level4">
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><span class="st0">'colname IS NULL'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// OR...</span>
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'colname'</span> <span class="sy0">=&gt;</span> <span class="kw2">null</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="orwhere" id="orwhere">orwhere()</a></h3>
<div class="level3">

<p>

Identical to the above method, except it joins multiple parts with OR.
</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">orwhere</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id'</span> <span class="sy0">=&gt;</span> <span class="nu0">5</span><span class="sy0">,</span> <span class="st0">'title'</span> <span class="sy0">=&gt;</span> <span class="st0">'Demo'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
The last line will generate <code>WHERE `id` = 5 OR `title` = &#039;Demo</code>&#039;.
</p>

</div>

<h3><a name="like" id="like">like()</a></h3>
<div class="level3">

<p>

Identical to where(), except it makes a LIKE string:
</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">like</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="sy0">,</span> <span class="st0">'Demo'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
This generates <code>WHERE `title` LIKE &#039;%Demo%</code>&#039;; You can manually specify %&#039;s to do the query you want. For this don&#039;t forget to specify FALSE as a third parameter:
</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">like</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="sy0">,</span> <span class="st0">'%Demo'</span><span class="sy0">,</span> <span class="kw2">FALSE</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">like</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="sy0">,</span> <span class="st0">'Demo%'</span><span class="sy0">,</span> <span class="kw2">FALSE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
You can also pass an array containing multiple key/value pairs. It will join them with AND:
</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">like</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'title'</span> <span class="sy0">=&gt;</span> <span class="st0">'Demo'</span><span class="sy0">,</span> <span class="st0">'subtitle'</span> <span class="sy0">=&gt;</span> <span class="st0">'Start'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
This generates <code>WHERE `title` LIKE &#039;%Demo%&#039; AND `subtitle` LIKE &#039;%Start%</code>&#039;.
</p>

</div>

<h3><a name="orlike" id="orlike">orlike()</a></h3>
<div class="level3">

<p>

Identical to like(), except it joins multiple parts with OR:
</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">orlike</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'title'</span> <span class="sy0">=&gt;</span> <span class="st0">'Demo'</span><span class="sy0">,</span> <span class="st0">'subtitle'</span> <span class="sy0">=&gt;</span> <span class="st0">'Start'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
This generates “WHERE `title` LIKE ”%Demo%” OR `subtitle` LIKE ”%Start%””.
</p>

</div>

<h3><a name="notlike" id="notlike">notlike()</a></h3>
<div class="level3">

<p>

Identical to like(), except it generates a NOT LIKE clause.
</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">notlike</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="sy0">,</span> <span class="st0">'Demo'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// generates &quot;WHERE `title` NOT LIKE &quot;%Demo%&quot;&quot;</span>
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">notlike</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'title'</span> <span class="sy0">=&gt;</span> <span class="st0">'Demo'</span><span class="sy0">,</span> <span class="st0">'subtitle'</span> <span class="sy0">=&gt;</span> <span class="st0">'Start'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// generates &quot;WHERE `title` NOT LIKE &quot;%Demo%&quot; AND `subtitle` NOT LIKE &quot;%Start%&quot;&quot;</span></pre>
</div>

<h3><a name="ornotlike" id="ornotlike">ornotlike()</a></h3>
<div class="level3">

<p>

Identical to like(), except it generates an OR NOT LIKE clause.
</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">ornotlike</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'title'</span> <span class="sy0">=&gt;</span> <span class="st0">'Demo'</span><span class="sy0">,</span> <span class="st0">'subtitle'</span> <span class="sy0">=&gt;</span> <span class="st0">'Start'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// generates &quot;WHERE `title` NOT LIKE &quot;%Demo%&quot; OR `subtitle` NOT LIKE &quot;%Start%&quot;&quot;</span></pre>
</div>

<h3><a name="in" id="in">in()</a></h3>
<div class="level3">

<p>

Creates an IN portion of a query. It has three parameters:

</p>
<ol>
<li class="level1"><div class="li"> the column to match</div>
</li>
<li class="level1"><div class="li"> an array or string of values to match against</div>
</li>
<li class="level1"><div class="li"> (boolean), to create a NOT clause instead</div>
</li>
</ol>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">in</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="nu0">1</span><span class="sy0">,</span><span class="nu0">2</span><span class="sy0">,</span><span class="nu0">3</span><span class="sy0">,</span><span class="nu0">4</span><span class="sy0">,</span><span class="nu0">5</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
This generates “`title` IN (&#039;1&#039;,&#039;2&#039;,&#039;3&#039;,&#039;4&#039;,&#039;5&#039;)”
</p>

</div>

<h3><a name="notin" id="notin">notin()</a></h3>
<div class="level3">

<p>

Identical to in(), except it generates a NOT IN clause. You can either use this method (two parameters), or in() with the third parameter as TRUE.
</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">notin</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="nu0">1</span><span class="sy0">,</span><span class="nu0">2</span><span class="sy0">,</span><span class="nu0">3</span><span class="sy0">,</span><span class="nu0">4</span><span class="sy0">,</span><span class="nu0">5</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// or</span>
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">in</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="nu0">1</span><span class="sy0">,</span><span class="nu0">2</span><span class="sy0">,</span><span class="nu0">3</span><span class="sy0">,</span><span class="nu0">4</span><span class="sy0">,</span><span class="nu0">5</span><span class="br0">&#41;</span><span class="sy0">,</span> <span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
This generates “`title` NOT IN (&#039;1&#039;,&#039;2&#039;,&#039;3&#039;,&#039;4&#039;,&#039;5&#039;)”
</p>

</div>

<h3><a name="regex" id="regex">regex()</a></h3>
<div class="level3">

<p>

This method allows you to search based on a regular expression. It&#039;s syntax is identical to like().
</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">regex</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="sy0">,</span> <span class="st0">'Demo|Sample'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">regex</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'title'</span> <span class="sy0">=&gt;</span> <span class="st0">'Demo|Sample'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="orregex" id="orregex">orregex()</a></h3>
<div class="level3">

<p>

Identical to regex() except it joins multiple statements with OR.
</p>

</div>

<h3><a name="notregex" id="notregex">notregex()</a></h3>
<div class="level3">

<p>

Identical to regex() expect it generates a NOT REGEX clause.
</p>

</div>

<h3><a name="ornotregex" id="ornotregex">ornotregex()</a></h3>
<div class="level3">

<p>

Identical to regex() except it generates an OR NOT REGEX clause.
</p>

</div>

<h3><a name="groupby" id="groupby">groupby()</a></h3>
<div class="level3">

<p>

Sets the GROUP BY part of a query. You can pass it a string, or an array.
</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">groupby</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">groupby</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'title'</span><span class="sy0">,</span> <span class="st0">'id'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="having" id="having">having()</a></h3>
<div class="level3">

<p>

Generates a HAVING clause for a query. Syntax is similar to like().
</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">having</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="sy0">,</span> <span class="st0">'Demo'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="orhaving" id="orhaving">orhaving()</a></h3>
<div class="level3">

<p>

Identical to having(), except it puts an OR in between multiples.
</p>

</div>

<h3><a name="get" id="get">get()</a></h3>
<div class="level3">

<p>

Executes the current query builder statement. This methods has 3 parameters:

</p>
<ol>
<li class="level1"><div class="li"> the table to use</div>
</li>
<li class="level1"><div class="li"> the limit to use</div>
</li>
<li class="level1"><div class="li"> the offset to use if the limit is set</div>
</li>
</ol>

<p>

This returns a Database <a href="result.php" class="wikilink1" title="libraries:database:result">Result</a> object that you can then work on the results of your query with.
</p>
<pre class="code php"><span class="re1">$query</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">from</span><span class="br0">&#40;</span><span class="st0">'pages'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id &gt;='</span> <span class="sy0">=&gt;</span> <span class="nu0">5</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// This is the same as</span>
<span class="re1">$query</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id &gt;='</span> <span class="sy0">=&gt;</span> <span class="nu0">5</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'pages'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="getwhere" id="getwhere">getwhere()</a></h3>
<div class="level3">

<p>

Same as above, except the parameters are as follows:

</p>
<ol>
<li class="level1"><div class="li"> the table to use</div>
</li>
<li class="level1"><div class="li"> the where clause to use</div>
</li>
<li class="level1"><div class="li"> the limit to use</div>
</li>
<li class="level1"><div class="li"> the offset to use if the limit is set</div>
</li>
</ol>

<p>

So our query from above can be simplified into:

</p>
<pre class="code php"><span class="re1">$query</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">getwhere</span><span class="br0">&#40;</span><span class="st0">'pages'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id &gt;='</span> <span class="sy0">=&gt;</span> <span class="nu0">5</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="set" id="set">set()</a></h3>
<div class="level3">

<p>

Creates a SET portion of a query for your inserts. You can pass it either one parameter or two parameters:
</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><span class="st0">'column'</span><span class="sy0">,</span> <span class="st0">'value'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// OR</span>
&nbsp;
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'column'</span> <span class="sy0">=&gt;</span> <span class="st0">'value'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="merge" id="merge">merge()</a></h3>
<div class="level3">

<p>

Performs a merge query. The behavior of this method will change depending on which backend database you are using. In MySQL, for example, the database will search for an existing key, delete that row if it exists, then insert a new row. The syntax is similar to <span class="curid"><a href="builder.php#update" class="wikilink1" title="libraries:database:builder">update</a></span>.
</p>

</div>

<h3><a name="insert" id="insert">insert()</a></h3>
<div class="level3">

<p>

Performs a database insert query. This method has 2 parameters:

</p>
<ol>
<li class="level1"><div class="li"> The table to do the insert on</div>
</li>
<li class="level1"><div class="li"> An associative array of columns and their values</div>
</li>
</ol>
<pre class="code php"><span class="re1">$status</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">insert</span><span class="br0">&#40;</span><span class="st0">'pages'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'title'</span> <span class="sy0">=&gt;</span> <span class="st0">'My new title'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// count how many rows were inserted</span>
<span class="re1">$rows</span> <span class="sy0">=</span> <a href="http://www.php.net/count"><span class="kw3">count</span></a><span class="br0">&#40;</span><span class="re1">$status</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Returns a query result (the same object you get back from <code>Database::query()</code>).
</p>

<p>
You can also omit any parameter if you have set it with another query builder method:
</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">from</span><span class="br0">&#40;</span><span class="st0">'pages'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'title'</span> <span class="sy0">=&gt;</span> <span class="st0">'My new title'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">insert</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="update" id="update">update()</a></h3>
<div class="level3">

<p>

Performs a database update query. This method has 3 parameters:

</p>
<ol>
<li class="level1"><div class="li"> The table to do the update on</div>
</li>
<li class="level1"><div class="li"> An associative array of columns and their new values</div>
</li>
<li class="level1"><div class="li"> The where clause to update on. This can either be a string or an associative array. See the where() method for details.</div>
</li>
</ol>
<pre class="code php"><span class="re1">$status</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">update</span><span class="br0">&#40;</span><span class="st0">'pages'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'title'</span> <span class="sy0">=&gt;</span> <span class="st0">'My new title'</span><span class="br0">&#41;</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id'</span> <span class="sy0">=&gt;</span> <span class="nu0">5</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// count how many rows were updated</span>
<span class="re1">$rows</span> <span class="sy0">=</span> <a href="http://www.php.net/count"><span class="kw3">count</span></a><span class="br0">&#40;</span><span class="re1">$status</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
You can also omit any parameter if you have set it with another query builder method:
</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">from</span><span class="br0">&#40;</span><span class="st0">'pages'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'title'</span> <span class="sy0">=&gt;</span> <span class="st0">'My new title'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id'</span> <span class="sy0">=&gt;</span> <span class="nu0">5</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">update</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="delete" id="delete">delete()</a></h3>
<div class="level3">

<p>

Performs a database delete query. This method has 2 parameters:

</p>
<ol>
<li class="level1"><div class="li"> The table to do the delete on</div>
</li>
<li class="level1"><div class="li"> The where clause to delete on. This can either be a string or an associative array. See the <code>where()</code> method for details.</div>
</li>
</ol>
<pre class="code php"><span class="re1">$status</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">delete</span><span class="br0">&#40;</span><span class="st0">'pages'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id'</span> <span class="sy0">=&gt;</span> <span class="nu0">5</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// count how many rows were deleted</span>
<span class="re1">$rows</span> <span class="sy0">=</span> <a href="http://www.php.net/count"><span class="kw3">count</span></a><span class="br0">&#40;</span><span class="re1">$status</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
You can also set the table and where portions with query builder methods as described in <code>insert()</code> and <code>update()</code>.
</p>

</div>

<h3><a name="offset" id="offset">offset()</a></h3>
<div class="level3">

<p>

Creates the offset portion of a query. This causes your result set to start at a different starting point.
</p>
<pre class="code php"><span class="co1">// Start the results at position 10</span>
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">offset</span><span class="br0">&#40;</span><span class="nu0">10</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="limit" id="limit">limit()</a></h3>
<div class="level3">

<p>

Creates the limit section of a query. The first parameter is the number of results you want your query to limit to.
</p>

<p>
You can also set the offset with this method as well with the second parameter.
</p>
<pre class="code php"><span class="co1">// Limit the query to 15 results</span>
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">limit</span><span class="br0">&#40;</span><span class="nu0">15</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// OR</span>
&nbsp;
<span class="co1">// Limit the query to 15 results starting at position 10</span>
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">limit</span><span class="br0">&#40;</span><span class="nu0">15</span><span class="sy0">,</span> <span class="nu0">10</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="orderby" id="orderby">orderby()</a></h3>
<div class="level3">

<p>

Specifies the return order of your query. Has two parameters:

</p>
<ol>
<li class="level1"><div class="li"> The column(s) to order by (use an array for multiple columns)</div>
</li>
<li class="level1"><div class="li"> The direction to order the column by (defaults to ASC)</div>
</li>
</ol>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">orderby</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="sy0">,</span> <span class="st0">'ASC'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
You can also return randomly ordered results in MySql for example using the following arguments.
</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">orderby</span><span class="br0">&#40;</span><span class="kw2">NULL</span><span class="sy0">,</span> <span class="st0">'RAND()'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
The <code>orderby()</code> method also supports ordering by multiple columns if you use an associative array as the argument.
</p>
<pre class="code php"><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">orderby</span><span class="br0">&#40;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span> <span class="st0">'id'</span> <span class="sy0">=&gt;</span> <span class="st0">'ASC'</span><span class="sy0">,</span> <span class="st0">'date_created'</span> <span class="sy0">=&gt;</span> <span class="st0">'ASC'</span><span class="br0">&#41;</span> <span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="join" id="join">join()</a></h3>
<div class="level3">

<p>

Joins two tables together.

</p>
<ol>
<li class="level1"><div class="li"> string - table name to join</div>
</li>
<li class="level1"><div class="li"> string/array - where key or array of key ⇒ value pairs</div>
</li>
<li class="level1"><div class="li"> string - where value</div>
</li>
<li class="level1"><div class="li"> string - type of join - LEFT, RIGHT, OUTER, INNER, LEFT OUTER, RIGHT OUTER</div>
</li>
</ol>
<pre class="code php"><span class="co1">// Run query against the (user_roles) table.</span>
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">from</span><span class="br0">&#40;</span><span class="st0">'users_roles'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Join the roles with (user_roles)</span>
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">join</span><span class="br0">&#40;</span><span class="st0">'roles'</span><span class="sy0">,</span> <span class="st0">'roles.id'</span><span class="sy0">,</span> <span class="st0">'users_roles.role_id'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Execute the query.</span>
<span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
The same join using array syntax:

</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span><span class="sy0">-&gt;</span><span class="me1">join</span><span class="br0">&#40;</span><span class="st0">'roles'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'roles.id'</span> <span class="sy0">=&gt;</span> <span class="st0">'users_roles.role_id'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="count_records" id="count_records">count_records()</a></h3>
<div class="level3">

<p>

Count query records.

</p>
<ol>
<li class="level1"><div class="li"> string - table name</div>
</li>
<li class="level1"><div class="li"> array  - where clause</div>
</li>
</ol>
<pre class="code php"><span class="co1">// Count all the users</span>
<span class="re1">$count</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">count_records</span><span class="br0">&#40;</span><span class="st0">'users'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Count banned users</span>
<span class="re1">$banned_users_count</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">count_records</span><span class="br0">&#40;</span><span class="st0">'users'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'banned'</span> <span class="sy0">=&gt;</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Or like this</span>
<span class="re1">$banned_users_count</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><span class="st0">'banned'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">count_records</span><span class="br0">&#40;</span><span class="st0">'users'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

<strong><a href="result.php" class="wikilink1" title="libraries:database:result">Continue to the next section: Database Query Result &gt;&gt;</a></strong>

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../../lib/exe/indexeraa06.gif?id=libraries%3Adatabase%3Abuilder&amp;1324588285" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/database/builder by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:16:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/database/query by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:16:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:database:query    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-06-20T17:51:46-0500" />
<meta name="keywords" content="libraries,database,query" />
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
<li class="level1"><div class="li"><span class="li"><a href="#querying_a_database" class="toc">Querying a database</a></span></div>
<ul class="toc">
<li class="clear">

<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#query" class="toc">query()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#last_query" class="toc">last_query()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#escape" class="toc">escape()</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#basic_example" class="toc">Basic Example</a></span></div></li>
</ul>
</li>
<li class="level1"><div class="li"><span class="li"><a href="#query_binding" class="toc">Query Binding</a></span></div></li>
<li class="level1"><div class="li"><span class="li"><a href="#database_expression" class="toc">Database Expression</a></span></div></li>
<li class="level1"><div class="li"><span class="li"><a href="#complete_examples" class="toc">Complete Examples</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#complete_example_1" class="toc">Complete Example 1</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#complete_example_2" class="toc">Complete Example 2</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">escaping data, prepared statements when they&#039;re finished</td>
	</tr>
</table>

<p>

<strong><a href="../database.php" class="wikilink1" title="libraries:database">&lt;&lt; Back to Database Main Page</a></strong>
</p>



<h1><a name="querying_a_database" id="querying_a_database">Querying a database</a></h1>
<div class="level1">

</div>

<h3><a name="query" id="query">query()</a></h3>
<div class="level3">

<p>

<code>$db→query($sql)</code> carries out the sql given. Will also connect to the database if it wasn&#039;t connected before. Returns a <a href="result.php" class="wikilink1" title="libraries:database:result">result</a> object. <strong>Does not escape  table names or anything. </strong>

</p>

</div>

<h5><a name="for_example_in_applicationsunspecified_pathunspecified_filename.php" id="for_example_in_applicationsunspecified_pathunspecified_filename.php">for example, in (?) applications/unspecified_path/unspecified_filename.php</a></h5>
<div class="level5">
<pre class="code php"><span class="re1">$query</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">query</span><span class="br0">&#40;</span><span class="st0">'SELECT username FROM users'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="last_query" id="last_query">last_query()</a></h3>
<div class="level3">

<p>

<code>$db→last_query($sql)</code> returns a string containing the last run query.

</p>

</div>

<h5><a name="for_example_in_applicationsunspecified_pathunspecified_filename.php1" id="for_example_in_applicationsunspecified_pathunspecified_filename.php1">for example, in (?) applications/unspecified_path/unspecified_filename.php</a></h5>
<div class="level5">
<pre class="code php"><span class="re1">$last_query</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">last_query</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="escape" id="escape">escape()</a></h3>
<div class="level3">

<p>

<code>$db→escape( $value )</code> returns a string which is the escaped version of the $value. This escaped string is suitable (and safe) to be used in an <acronym title="Structured Query Language">SQL</acronym> statement.
</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> a value to escape.</div>
</li>
</ul>

</div>

<h2><a name="basic_example" id="basic_example">Basic Example</a></h2>
<div class="level2">

<p>
In the following example we&#039;ll show how to query a database and retrieve all usernames from the users table.
</p>

</div>

<h5><a name="for_example_in_applicationscontrollersusers.php" id="for_example_in_applicationscontrollersusers.php">for example, in (?) applications/controllers/users.php (?)</a></h5>
<div class="level5">
<pre class="code php"><span class="kw2">class</span> User_Controller <span class="kw2">extends</span> Controller <span class="br0">&#123;</span>
&nbsp;
    <span class="kw2">public</span> <span class="kw2">function</span> listusers<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
&nbsp;
        <span class="re1">$db</span><span class="sy0">=</span><span class="kw2">new</span> Database<span class="sy0">;</span>
        <span class="re1">$result</span><span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">query</span><span class="br0">&#40;</span><span class="st0">'SELECT username FROM users'</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;h2&gt;'</span><span class="sy0">.</span><span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">last_query</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="st0">'&lt;/h2&gt;'</span><span class="sy0">;</span>
        <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;ul&gt;'</span><span class="sy0">;</span>
        <span class="kw1">foreach</span><span class="br0">&#40;</span><span class="re1">$result</span> <span class="kw1">as</span> <span class="re1">$row</span><span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;li&gt;'</span><span class="sy0">.</span><span class="re1">$row</span><span class="sy0">-&gt;</span><span class="me1">username</span><span class="sy0">.</span><span class="st0">'&lt;/li&gt;'</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
        <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;/ul&gt;'</span><span class="sy0">;</span>
&nbsp;
&nbsp;
&nbsp;
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
<p>

Now if you enter <a href="http://www.yoursite.com/user/listusers" class="urlextern" title="http://www.yoursite.com/user/listusers"  rel="nofollow">www.yoursite.com/user/listusers</a> you&#039;ll see a list of users with a heading of the query above it.

</p>

</div>

<h5><a name="for_example_in_applicationsunspecified_pathunspecified_filename.php2" id="for_example_in_applicationsunspecified_pathunspecified_filename.php2">for example, in (?) applications/unspecified_path/unspecified_filename.php</a></h5>
<div class="level5">
<pre class="code">
&#60;h2&#62;SELECT username FROM users&#60;/h2&#62;
&#60;ul&#62;
&#60;li&#62;John&#60;/li&#62;
&#60;li&#62;Michael&#60;/li&#62;
&#60;/ul&#62;</pre>
</div>

<h1><a name="query_binding" id="query_binding">Query Binding</a></h1>
<div class="level1">

<p>
The database library has support for query binding. It allows you to create custom built queries and have the library escape your input values for you.

</p>

</div>

<h5><a name="for_example_in_applicationsunspecified_pathunspecified_filename.php3" id="for_example_in_applicationsunspecified_pathunspecified_filename.php3">for example, in (?) applications/unspecified_path/unspecified_filename.php</a></h5>
<div class="level5">
<pre class="code php"><span class="re1">$query</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">query</span><span class="br0">&#40;</span><span class="st0">'SELECT `username` FROM `users` where `id` = ?'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="nu0">12</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// OR</span>
<span class="re1">$query</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">query</span><span class="br0">&#40;</span><span class="st0">'SELECT `username` FROM `users` where `id` = ? and `foo` = ?'</span><span class="sy0">,</span> <span class="nu0">12</span><span class="sy0">,</span> <span class="st0">'bar'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
In addition you can use the Query <a href="builder.php" class="wikilink1" title="libraries:database:builder">Builder</a> portion of the database library to create database agnostic access.
</p>

<p>
After you perform your query, you get a Query <a href="result.php" class="wikilink1" title="libraries:database:result">Result</a> object back.
</p>

</div>

<h1><a name="database_expression" id="database_expression">Database Expression</a></h1>
<div class="level1">

<p>
In case you need to do a where or join (or other) clause to be taken literally, you can use a database expression. For example:
</p>
<pre class="code php"><span class="re1">$query</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">set</span><span class="br0">&#40;</span><span class="st0">'number'</span><span class="sy0">,</span> <span class="kw2">new</span> Database_Expression<span class="br0">&#40;</span><span class="st0">'number+1'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h1><a name="complete_examples" id="complete_examples">Complete Examples</a></h1>
<div class="level1">

<p>
This section contains some queries along with other supporting code you might need in your application.
</p>

</div>

<h2><a name="complete_example_1" id="complete_example_1">Complete Example 1</a></h2>
<div class="level2">

</div>

<h4><a name="initializing_the_database" id="initializing_the_database">Initializing the database</a></h4>
<div class="level4">

</div>

<h5><a name="applicationsunspecified_pathunspecified_filename.php" id="applicationsunspecified_pathunspecified_filename.php">applications/unspecified_path/unspecified_filename.php (?)</a></h5>
<div class="level5">
<pre class="code php"><span class="re1">$db</span> <span class="sy0">=</span> Database<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// or</span>
&nbsp;
<span class="re1">$db</span> <span class="sy0">=</span> Database<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="st0">'groupname'</span><span class="br0">&#41;</span><span class="sy0">;</span>  <span class="co1">// &quot;default&quot; is assumed if groupname is not given</span></pre>
</div>

<h4><a name="simple_query" id="simple_query">Simple Query</a></h4>
<div class="level4">

</div>

<h5><a name="applicationsunspecified_pathunspecified_filename.php1" id="applicationsunspecified_pathunspecified_filename.php1">applications/unspecified_path/unspecified_filename.php (?)</a></h5>
<div class="level5">
<pre class="code php"><span class="re1">$result</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">query</span><span class="br0">&#40;</span><span class="st0">'SELECT username,password,email FROM users'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$result</span> <span class="kw1">as</span> <span class="re1">$row</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$row</span><span class="sy0">-&gt;</span><span class="me1">username</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$row</span><span class="sy0">-&gt;</span><span class="me1">password</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$row</span><span class="sy0">-&gt;</span><span class="me1">email</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
</div>

<h2><a name="complete_example_2" id="complete_example_2">Complete Example 2</a></h2>
<div class="level2">

<p>

This demonstrates using the query results in a template.
</p>

</div>

<h4><a name="query1" id="query1">Query</a></h4>
<div class="level4">

</div>

<h5><a name="applicationscontrollersclients.php" id="applicationscontrollersclients.php">applications/controllers/clients.php</a></h5>
<div class="level5">
<pre class="code php"><span class="kw2">class</span> Clients_Controller <span class="kw2">extends</span> Controller <span class="br0">&#123;</span>
&nbsp;
  <span class="kw2">public</span> <span class="kw2">function</span> index<span class="br0">&#40;</span><span class="br0">&#41;</span>
  <span class="br0">&#123;</span>
&nbsp;
    <span class="re1">$db</span> <span class="sy0">=</span> Database<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="re1">$result</span> <span class="sy0">=</span> <span class="re1">$db</span><span class="sy0">-&gt;</span><span class="me1">query</span><span class="br0">&#40;</span><span class="st0">'SELECT name, code FROM clients'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
    View<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'clients'</span><span class="br0">&#41;</span>
    <span class="sy0">-&gt;</span><span class="me1">bind</span><span class="br0">&#40;</span><span class="st0">'result'</span><span class="sy0">,</span> <span class="re1">$result</span><span class="br0">&#41;</span>
    <span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
</div>

<h4><a name="template" id="template">Template</a></h4>
<div class="level4">

</div>

<h5><a name="applicationsviewsclients_content.php" id="applicationsviewsclients_content.php">applications/views/clients_content.php</a></h5>
<div class="level5">
<pre class="code php"><span class="sy0">&lt;</span>html<span class="sy0">&gt;</span>
<span class="sy0">&lt;</span>head<span class="sy0">&gt;</span>
<span class="sy0">&lt;</span>style<span class="sy0">&gt;</span>
<span class="coMULTI">/*
 * Zebra rows: When CSS3 is done we could simply use:
 *   tr :nth-child(odd) { background-color: #D0D0D0; }
 * but for now we use PHP and CSS
 */</span>
&nbsp;
table<span class="sy0">.</span>db tr <span class="br0">&#123;</span> background<span class="sy0">-</span>color<span class="sy0">:</span> <span class="co2">#F0F0F0; }</span>
table<span class="sy0">.</span>db tr<span class="sy0">.</span>odd <span class="br0">&#123;</span> background<span class="sy0">-</span>color<span class="sy0">:</span> <span class="co2">#D0D0D0; }</span>
table<span class="sy0">.</span>db th <span class="br0">&#123;</span> color<span class="sy0">:</span> <span class="co2">#f0f0f0; background-color: #303030; }</span>
&nbsp;
<span class="sy0">&lt;/</span>style<span class="sy0">&gt;</span>
<span class="sy0">&lt;/</span>head<span class="sy0">&gt;</span>
<span class="sy0">&lt;</span>body<span class="sy0">&gt;</span>
&nbsp;
<span class="sy0">&lt;</span>h2<span class="sy0">&gt;</span>Client List<span class="sy0">&lt;/</span>h2<span class="sy0">&gt;</span>
<span class="sy0">&lt;</span>hr<span class="sy0">/&gt;</span>
&nbsp;
<span class="sy0">&lt;</span>table <span class="kw2">class</span><span class="sy0">=</span><span class="st0">&quot;db&quot;</span><span class="sy0">&gt;</span>
<span class="sy0">&lt;</span>tr<span class="sy0">&gt;</span>
	<span class="sy0">&lt;</span>th<span class="sy0">&gt;</span>Client<span class="sy0">&lt;/</span>th<span class="sy0">&gt;</span>
	<span class="sy0">&lt;</span>th<span class="sy0">&gt;</span>ID<span class="sy0">&lt;/</span>th<span class="sy0">&gt;</span>
<span class="sy0">&lt;/</span>tr<span class="sy0">&gt;</span>
<span class="kw2">&lt;?php</span> <span class="kw1">foreach</span><span class="br0">&#40;</span> <span class="re1">$result</span> <span class="kw1">as</span> <span class="re1">$row</span> <span class="br0">&#41;</span><span class="sy0">:</span><span class="kw2">?&gt;</span>
<span class="sy0">&lt;</span>tr <span class="kw2">&lt;?</span><span class="sy0">=</span> text<span class="sy0">::</span><span class="me2">alternate</span><span class="br0">&#40;</span> <span class="st0">''</span><span class="sy0">,</span> <span class="st0">' class=&quot;odd&quot;'</span> <span class="br0">&#41;</span> ?<span class="sy0">&gt;&gt;</span>
	<span class="sy0">&lt;</span>td<span class="sy0">&gt;&lt;</span>?<span class="sy0">=</span> <span class="re1">$row</span><span class="sy0">-&gt;</span><span class="me1">name</span> <span class="kw2">?&gt;</span> <span class="sy0">&lt;/</span>td<span class="sy0">&gt;</span>
	<span class="sy0">&lt;</span>td<span class="sy0">&gt;&lt;</span>?<span class="sy0">=</span> <span class="re1">$row</span><span class="sy0">-&gt;</span><span class="me1">code</span> <span class="kw2">?&gt;</span> <span class="sy0">&lt;/</span>td<span class="sy0">&gt;</span>
<span class="sy0">&lt;/</span>tr<span class="sy0">&gt;</span>
<span class="kw2">&lt;?php</span> <span class="kw1">endforeach</span><span class="sy0">;</span> <span class="kw2">?&gt;</span>
<span class="sy0">&lt;/</span>table<span class="sy0">&gt;</span>
&nbsp;
<span class="sy0">&lt;/</span>body<span class="sy0">&gt;</span></pre>
<p>
<strong><a href="builder.php" class="wikilink1" title="libraries:database:builder">Continue to the next section: Database Query Builder &gt;&gt;</a></strong>

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../../lib/exe/indexered9c.gif?id=libraries%3Adatabase%3Aquery&amp;1324588285" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/database/query by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:16:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


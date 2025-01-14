<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/orm/examples by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:16:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:orm:examples    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-10-02T03:58:57-0500" />
<meta name="keywords" content="libraries,orm,examples" />
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
<li class="level1"><div class="li"><span class="li"><a href="#examples_of_using_orm" class="toc">Examples of Using ORM</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#combining_orm_and_pagination" class="toc">Combining ORM and Pagination</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#combining_orm_and_validation" class="toc">Combining ORM and Validation</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#setting_up_the_orm_model" class="toc">Setting up the ORM model</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#using_validation_in_your_controller" class="toc">Using Validation in your controller</a></span></div></li></ul>
</li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Todo</th><td class="col1">Proof read this page, add many more examples .. validation </td>
	</tr>
</table>

<p>

<strong><a href="../orm.php" class="wikilink1" title="libraries:orm">&lt;&lt; Back to ORM Main Page</a></strong>
</p>



<h1><a name="examples_of_using_orm" id="examples_of_using_orm">Examples of Using ORM</a></h1>
<div class="level1">

</div>

<h2><a name="combining_orm_and_pagination" id="combining_orm_and_pagination">Combining ORM and Pagination</a></h2>
<div class="level2">

<p>
ORM and Pagination can be combined quickly by using the <code>count_last_query</code> method that just executes the original query again without limit and offset. The following example would be used in a controller.
</p>
<pre class="code php"><span class="re1">$per_page</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'limit'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$page_num</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'page'</span><span class="sy0">,</span> <span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$offset</span>   <span class="sy0">=</span> <span class="br0">&#40;</span><span class="re1">$page_num</span> <span class="sy0">-</span> <span class="nu0">1</span><span class="br0">&#41;</span> <span class="sy0">*</span> <span class="re1">$per_page</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$user</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'user'</span><span class="sy0">,</span> <span class="st0">'john.smith'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$posts</span> <span class="sy0">=</span> <span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">limit</span><span class="br0">&#40;</span><span class="re1">$per_page</span><span class="sy0">,</span> <span class="re1">$offset</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">blog_posts</span><span class="sy0">;</span>
<span class="re1">$pages</span> <span class="sy0">=</span> Pagination<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
    <span class="st0">'style'</span> <span class="sy0">=&gt;</span> <span class="st0">'digg'</span><span class="sy0">,</span>
    <span class="st0">'items_per_page'</span> <span class="sy0">=&gt;</span> <span class="re1">$per_page</span><span class="sy0">,</span>
    <span class="st0">'query_string'</span> <span class="sy0">=&gt;</span> <span class="st0">'page'</span><span class="sy0">,</span>
    <span class="st0">'total_items'</span> <span class="sy0">=&gt;</span> <span class="re1">$user</span><span class="sy0">-&gt;</span><span class="me1">count_last_query</span><span class="br0">&#40;</span><span class="br0">&#41;</span>
<span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$posts</span> <span class="kw1">as</span> <span class="re1">$post</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">title</span><span class="sy0">,</span> <span class="st0">' by '</span><span class="sy0">,</span> <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">author</span><span class="sy0">-&gt;</span><span class="me1">username</span><span class="sy0">,</span> <span class="st0">'&lt;br/&gt;'</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$pages</span><span class="sy0">;</span></pre>
<p>

Here is another example of pagination that comes from Oscar Bajner&#039;s Kohana 101 guide after being adapted to ORM.  This example uses the count_all() method to find the total number of items.  

</p>
<pre class="code php">	<span class="kw2">public</span> <span class="kw2">function</span> page<span class="br0">&#40;</span><span class="re1">$pagenum</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">title</span> <span class="sy0">=</span> <span class="st0">'L33t Str33t::Products'</span><span class="sy0">;</span>
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">content</span> <span class="sy0">=</span> <span class="kw2">new</span> View<span class="br0">&#40;</span><span class="st0">'pages/products'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
		<span class="co1">// Instantiate Pagination, passing it the total number of product rows.</span>
		<span class="re1">$paging</span> <span class="sy0">=</span> <span class="kw2">new</span> Pagination<span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a>
			<span class="br0">&#40;</span>
			<span class="st0">'total_items'</span> <span class="sy0">=&gt;</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'product'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">with</span><span class="br0">&#40;</span><span class="st0">'category'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">count_all</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">,</span>
			<span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
		<span class="co1">// render the page links</span>
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">content</span><span class="sy0">-&gt;</span><span class="me1">pagination</span> <span class="sy0">=</span> <span class="re1">$paging</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
		<span class="co1">// Display X items per page, from offset = page number</span>
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">template</span><span class="sy0">-&gt;</span><span class="me1">content</span><span class="sy0">-&gt;</span><span class="me1">products</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'product'</span><span class="br0">&#41;</span>
			<span class="sy0">-&gt;</span><span class="me1">with</span><span class="br0">&#40;</span><span class="st0">'category'</span><span class="br0">&#41;</span>
			<span class="sy0">-&gt;</span><span class="me1">orderby</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'category:description'</span> <span class="sy0">=&gt;</span> <span class="st0">'ASC'</span><span class="sy0">,</span> <span class="st0">'code'</span> <span class="sy0">=&gt;</span> <span class="st0">'ASC'</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
			<span class="sy0">-&gt;</span><span class="me1">limit</span><span class="br0">&#40;</span><span class="re1">$paging</span><span class="sy0">-&gt;</span><span class="me1">items_per_page</span><span class="sy0">,</span> <span class="re1">$paging</span><span class="sy0">-&gt;</span><span class="me1">sql_offset</span><span class="br0">&#41;</span>
			<span class="sy0">-&gt;</span><span class="me1">find_all</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span></pre>
</div>

<h2><a name="combining_orm_and_validation" id="combining_orm_and_validation">Combining ORM and Validation</a></h2>
<div class="level2">

<p>

ORM has the ability to validate and save data automatically. Any errors encountered during validation can be used to feedback to the view using the standard <a href="../validation.php" class="wikilink1" title="libraries:validation">Validation Library</a> error reporting method.
</p>

<p>
To use Validation in an ORM model a set of validation rules and filters must be defined within a public method called <strong>validate</strong>, which overloads the <strong>ORM::validate()</strong> method.

</p>

</div>

<h3><a name="setting_up_the_orm_model" id="setting_up_the_orm_model">Setting up the ORM model</a></h3>
<div class="level3">
<pre class="code php"><span class="kw2">class</span> Person_Model <span class="kw2">extends</span> ORM
<span class="br0">&#123;</span>
	<span class="coMULTI">/**
	 * Validates and optionally saves a new user record from an array.
	 *
	 * @param  array    values to check
	 * @param  boolean  save[Optional] the record when validation succeeds
	 * @return boolean
	 */</span>
	<span class="kw2">public</span> <span class="kw2">function</span> validate<span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a> <span class="sy0">&amp;</span> <span class="re1">$array</span><span class="sy0">,</span> <span class="re1">$save</span> <span class="sy0">=</span> <span class="kw2">FALSE</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="co1">// Initialise the validation library and setup some rules</span>
		<span class="re1">$array</span> <span class="sy0">=</span> Validation<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="re1">$array</span><span class="br0">&#41;</span>
				<span class="sy0">-&gt;</span><span class="me1">pre_filter</span><span class="br0">&#40;</span><span class="st0">'trim'</span><span class="br0">&#41;</span>
				<span class="sy0">-&gt;</span><span class="me1">add_rules</span><span class="br0">&#40;</span><span class="st0">'tel'</span><span class="sy0">,</span> <span class="st0">'required'</span><span class="sy0">,</span> <span class="st0">'phone[7,10,11,14]'</span><span class="br0">&#41;</span>
				<span class="sy0">-&gt;</span><span class="me1">add_rules</span><span class="br0">&#40;</span><span class="st0">'name'</span><span class="sy0">,</span> <span class="st0">'required'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">,</span> <span class="st0">'_name_exists'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
		<span class="kw1">return</span> parent<span class="sy0">::</span><span class="me2">validate</span><span class="br0">&#40;</span><span class="re1">$array</span><span class="sy0">,</span> <span class="re1">$save</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
&nbsp;
	<span class="coMULTI">/**
	 * Tests if a username exists in the database. This can be used as a
	 * Validation rule.
	 *
	 * @param   mixed    name to check
	 * @return  boolean
	 */</span>
	<span class="kw2">public</span> <span class="kw2">function</span> _name_exists<span class="br0">&#40;</span><span class="re1">$name</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="co1">// Uses a ternary operator to ensure that no records returns as TRUE, some records as FALSE</span>
		<span class="kw1">return</span> <span class="br0">&#40;</span>bool<span class="br0">&#41;</span> <span class="sy0">!</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">db</span>
			<span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'name'</span> <span class="sy0">=&gt;</span> <span class="re1">$name</span><span class="sy0">,</span> <span class="st0">'id !='</span> <span class="sy0">=&gt;</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">id</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
			<span class="sy0">-&gt;</span><span class="me1">count_records</span><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">table_name</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
	<span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
<p>
The Validation library is used to validate the data using the rules supplied. For this reason, if using custom rules, callbacks or filters they must be publicly accessible. If a callback method is not required elsewhere, it is sensible to prefix the method name with an underscore as shown above.
</p>

</div>

<h3><a name="using_validation_in_your_controller" id="using_validation_in_your_controller">Using Validation in your controller</a></h3>
<div class="level3">

<p>

Using ORM validation within controllers is simple. The <strong>ORM::validate()</strong> method will only ever return a boolean <strong>TRUE</strong> or <strong>FALSE</strong>. The array supplied to the ORM::validate() method is symbolically linked and will be transformed into a Validation object. You can also pass <strong>TRUE</strong> or a string as second parameter to save automatically the data (this means that if validation was successful, the <strong>save</strong> method will be called right after). If <strong>a string</strong> is passed, the validate() method will then perform a <strong>redirection</strong> (url::redirect($string_passed)). <em>Note that the validate() method only populates your model with fields that actually have validation rules, so if you have fields that aren&#039;t being validated, you need to explicitly set the model values to the form fields <strong>before</strong> saving (or before calling validate with the auto-save option) – see <a href="http://forum.kohanaphp.com/comments.php?DiscussionID=2101" class="urlextern" title="http://forum.kohanaphp.com/comments.php?DiscussionID=2101"  rel="nofollow">http://forum.kohanaphp.com/comments.php?DiscussionID=2101</a> and <a href="http://forum.kohanaphp.com/comments.php?DiscussionID=1426" class="urlextern" title="http://forum.kohanaphp.com/comments.php?DiscussionID=1426"  rel="nofollow">http://forum.kohanaphp.com/comments.php?DiscussionID=1426</a> for more details.</em>
</p>
<pre class="code php"><span class="kw2">class</span> Person_Controller <span class="kw2">extends</span> Controller
<span class="br0">&#123;</span>
	<span class="kw2">public</span> <span class="kw2">function</span> index<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="co1">// Create a new person</span>
		<span class="re1">$person</span> <span class="sy0">=</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'person'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
		<span class="co1">// If there is a post and $_POST is not empty</span>
		<span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">post</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
		<span class="br0">&#123;</span>
			<span class="co1">//Pull out fields we want from POST. We do this for 2 reasons:</span>
			<span class="co1">// 1) Manually set non-validated fields (address1 and address2) because validate() won't do it for us.</span>
			<span class="co1">// 2) Safety precaution -- only set fields we're expecting (otherwise someone could inject a different &quot;id&quot; into the POST data, for example).</span>
			<span class="re1">$data</span> <span class="sy0">=</span> arr<span class="sy0">::</span><a href="http://www.php.net/extract"><span class="kw3">extract</span></a><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">post</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">,</span> <span class="st0">'name'</span><span class="sy0">,</span> <span class="st0">'tel'</span><span class="sy0">,</span> <span class="st0">'address1'</span><span class="sy0">,</span> <span class="st0">'address2'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
			<span class="co1">// If the post data validates using the rules setup in the person model</span>
			<span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$person</span><span class="sy0">-&gt;</span><span class="me1">validate</span><span class="br0">&#40;</span><span class="re1">$data</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
			<span class="br0">&#123;</span>
				<span class="co1">//Successfully validated!</span>
				<span class="re1">$person</span><span class="sy0">-&gt;</span><span class="me1">save</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
				url<span class="sy0">::</span><span class="me2">redirect</span><span class="br0">&#40;</span><span class="st0">'some/other/page'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
				<span class="co1">//Note that we could have passed TRUE to validate() to auto-save, or we could pass the redirect path to auto-save-and-redirect.</span>
			<span class="br0">&#125;</span>
			<span class="kw1">else</span>
			<span class="br0">&#123;</span>
			<span class="co1">// Otherwise use the $data-&gt;errors() array to output the errors</span>
				<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;h1&gt;Submitted data had errors&lt;/h1&gt;&lt;ul&gt;'</span><span class="sy0">;</span>
				<span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$data</span><span class="sy0">-&gt;</span><span class="me1">errors</span><span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="kw1">as</span> <span class="re1">$key</span> <span class="sy0">=&gt;</span> <span class="re1">$value</span><span class="br0">&#41;</span>
					<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;li&gt;&lt;strong&gt;'</span><span class="sy0">.</span><span class="re1">$key</span><span class="sy0">.</span><span class="st0">' :&lt;/strong&gt; '</span><span class="sy0">.</span><span class="re1">$value</span><span class="sy0">.</span><span class="st0">'&lt;/li&gt;'</span><span class="sy0">;</span>
&nbsp;
				<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;/ul&gt;'</span><span class="sy0">;</span>
			<span class="br0">&#125;</span>
		<span class="br0">&#125;</span>
		<span class="co1">// Create an input form (and populate the fields with last submitted values if there were errors)</span>
		<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">open</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
		<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">input</span><span class="br0">&#40;</span><span class="st0">'name'</span><span class="sy0">,</span> <span class="re1">$person</span><span class="sy0">-&gt;</span><span class="me1">name</span><span class="br0">&#41;</span><span class="sy0">;</span>
		<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">input</span><span class="br0">&#40;</span><span class="st0">'tel'</span><span class="sy0">,</span> <span class="re1">$person</span><span class="sy0">-&gt;</span><span class="me1">tel</span><span class="br0">&#41;</span><span class="sy0">;</span>
		<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">input</span><span class="br0">&#40;</span><span class="st0">'address1'</span><span class="sy0">,</span> <span class="re1">$person</span><span class="sy0">-&gt;</span><span class="me1">address1</span><span class="br0">&#41;</span><span class="sy0">;</span>
		<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">input</span><span class="br0">&#40;</span><span class="st0">'address2'</span><span class="sy0">,</span> <span class="re1">$person</span><span class="sy0">-&gt;</span><span class="me1">address2</span><span class="br0">&#41;</span><span class="sy0">;</span>
		<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">submit</span><span class="br0">&#40;</span><span class="st0">'submit'</span><span class="sy0">,</span> <span class="st0">'Save'</span><span class="br0">&#41;</span><span class="sy0">;</span>
		<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">close</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
<p>
<strong><a href="advanced.php" class="wikilink1" title="libraries:orm:advanced">Continue to the next section: Advanced Topics &gt;&gt;</a></strong>

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../../lib/exe/indexerd7d9.gif?id=libraries%3Aorm%3Aexamples&amp;1324588290" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/orm/examples by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:16:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


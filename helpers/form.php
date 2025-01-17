<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/helpers/form by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    helpers:form    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-04-22T11:01:18-0500" />
<meta name="keywords" content="helpers,form" />
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
<li class="level1"><div class="li"><span class="li"><a href="#form_helper" class="toc">Form Helper</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#getting_started" class="toc">Getting Started</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#adding_fields" class="toc">Adding Fields</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#open" class="toc">open()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#open_multipart" class="toc">open_multipart()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#input" class="toc">input()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#hidden" class="toc">hidden()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#password" class="toc">password()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#upload" class="toc">upload()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#textarea" class="toc">textarea()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#dropdown" class="toc">dropdown()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#checkbox" class="toc">checkbox()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#radio" class="toc">radio()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#submit" class="toc">submit()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#button" class="toc">button()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#label" class="toc">label()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#attributes" class="toc">attributes()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#open_fieldset" class="toc">open_fieldset()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#close_fieldset" class="toc">close_fieldset()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#legend" class="toc">legend()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#close" class="toc">close()</a></span></div></li></ul>
</li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Final Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Proof read</td>
	</tr>
</table>



<h1><a name="form_helper" id="form_helper">Form Helper</a></h1>
<div class="level1">

<p>

The Form helper provides methods to assist you in creating forms. It does not do validation or filtering. If you want to generate your forms with validation and filtering you can do so with the <a href="../addons/forge.php" class="wikilink1" title="addons:forge">Forge library</a> 
</p>

</div>

<h2><a name="getting_started" id="getting_started">Getting Started</a></h2>
<div class="level2">

<p>

You&#039;ll need to use a line like this to begin the form.
</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">open</span><span class="br0">&#40;</span>string <span class="re1">$submit</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a> <span class="re1">$attr</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a> <span class="re1">$hidden</span> <span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Where $submit is a relative <acronym title="Uniform Resource Locator">URL</acronym> like &#039;/class/method&#039; and $attr is an array with attributes, like array(&#039;id&#039; ⇒ &#039;forumid&#039;, &#039;class&#039;⇒&#039;login_form&#039;). All three can be left blank. If you leave the first blank, the submission <acronym title="Uniform Resource Locator">URL</acronym> will be assumed to be the page being submitted from. $hidden is an array of hidden form fields.
</p>

</div>

<h2><a name="adding_fields" id="adding_fields">Adding Fields</a></h2>
<div class="level2">

<p>

You may add form fields as you would in straight <acronym title="HyperText Markup Language">HTML</acronym>, but the option exists to create them using php. Here are some examples.
</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">dropdown</span><span class="br0">&#40;</span><span class="re1">$data</span><span class="sy0">,</span> <span class="re1">$options</span><span class="sy0">,</span> <span class="re1">$selected</span><span class="br0">&#41;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">textarea</span><span class="br0">&#40;</span><span class="re1">$data</span><span class="br0">&#41;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">input</span><span class="br0">&#40;</span><span class="re1">$data</span><span class="br0">&#41;</span></pre>
</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="open" id="open">open()</a></h3>
<div class="level3">

<p>

Opens a form for submitting data.
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> [string] (optional) <acronym title="Uniform Resource Identifier">URI</acronym> of a form processing agent (defaults to current <acronym title="Uniform Resource Locator">URL</acronym>)</div>
</li>
<li class="level1"><div class="li"> [array] (optional) array of <acronym title="HyperText Markup Language">HTML</acronym> attributes (defaults to method=post)</div>
</li>
<li class="level1"><div class="li"> [array] (optional) parameters for hidden fields to be created immediately after the form tag</div>
</li>
</ul>

<p>

In order to open the form, you simply need to:
</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">open</span><span class="br0">&#40;</span><span class="br0">&#41;</span></pre>
<p>

This uses the default values, using POST to submit the form to the current page.
</p>

<p>

To add attributes:
</p>
<pre class="code php"><span class="co1">// Submits the page to: domain.tld/products/search.php</span>
<span class="co1">// CSS class 'search_form' is applied</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">open</span><span class="br0">&#40;</span><span class="st0">'products/search'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'class'</span><span class="sy0">=&gt;</span><span class="st0">'search_form'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Stay on the current page, and add a hidden input field named 'type' with value: 'product'</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">open</span><span class="br0">&#40;</span><span class="kw2">NULL</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'type'</span><span class="sy0">=&gt;</span><span class="st0">'product'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Sending a form to the current page using GET</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">open</span><span class="br0">&#40;</span><span class="kw2">NULL</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'method'</span><span class="sy0">=&gt;</span><span class="st0">'get'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="open_multipart" id="open_multipart">open_multipart()</a></h3>
<div class="level3">

<p>

Opens a form for submitting binary data via POST.
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> [string] (optional) <acronym title="Uniform Resource Identifier">URI</acronym> of a form processing agent (defaults to current <acronym title="Uniform Resource Locator">URL</acronym>)</div>
</li>
<li class="level1"><div class="li"> [array] (optional) array of <acronym title="HyperText Markup Language">HTML</acronym> attributes (defaults to method=post)</div>
</li>
<li class="level1"><div class="li"> [array] (optional) parameters for hidden fields to be created immediately after the form tag</div>
</li>
</ul>

<p>

<strong>Examples:</strong>

</p>
<pre class="code php"><span class="co1">// Opens multipart form with action set to current url</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">open_multipart</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

Results in <acronym title="HyperText Markup Language">HTML</acronym>

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/form.php"><span class="kw2">&lt;form</span></a> <span class="kw3">action</span><span class="sy0">=</span><span class="st0">&quot;http://localhost/index.php/welcome&quot;</span> <span class="kw3">enctype</span><span class="sy0">=</span><span class="st0">&quot;multipart/form-data&quot;</span> <span class="kw3">method</span><span class="sy0">=</span><span class="st0">&quot;post&quot;</span><span class="kw2">&gt;</span></span></pre>
</div>

<h3><a name="input" id="input">input()</a></h3>
<div class="level3">

<p>

Creates an <acronym title="HyperText Markup Language">HTML</acronym> form input tag.  Defaults to a text type.
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> [string]/[array] data input name and id or an array of <acronym title="HyperText Markup Language">HTML</acronym> attributes</div>
</li>
<li class="level1"><div class="li"> [string] input value, when using a name</div>
</li>
<li class="level1"><div class="li"> [string] extra string  attached to the end of the attributes</div>
</li>
<li class="level1"><div class="li"> [bool] encode existing html entities (default TRUE)</div>
</li>
</ul>

<p>

<strong>Example:</strong>
</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">input</span><span class="br0">&#40;</span><span class="st0">'field_name'</span><span class="sy0">,</span> <span class="st0">'field_value'</span><span class="sy0">,</span> <span class="st0">' style=&quot;text-align: right;&quot;'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Result in <acronym title="HyperText Markup Language">HTML</acronym>:
</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/input.php"><span class="kw2">&lt;input</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;text&quot;</span> <span class="kw3">id</span><span class="sy0">=</span><span class="st0">&quot;field_name&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;field_name&quot;</span> <span class="kw3">value</span><span class="sy0">=</span><span class="st0">&quot;field_value&quot;</span> <span class="kw3">style</span><span class="sy0">=</span><span class="st0">&quot;text-align: right;&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span></pre>
<p>

It&#039;s not necessary to use all parameters.
</p>

<p>
<strong>Example:</strong>
</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">input</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// don't use parameters</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">input</span><span class="br0">&#40;</span><span class="st0">'field_name'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// use only 1 parametr - for name and id</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">input</span><span class="br0">&#40;</span><span class="st0">'field_name'</span><span class="sy0">,</span> <span class="st0">'field_value'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// use only 2 parameters - for name, id and value</span></pre>
<p>
Result in <acronym title="HyperText Markup Language">HTML</acronym>:

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/input.php"><span class="kw2">&lt;input</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;text&quot;</span> <span class="kw3">id</span><span class="sy0">=</span><span class="st0">&quot;&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;&quot;</span> <span class="kw3">value</span><span class="sy0">=</span><span class="st0">&quot;&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span>
<span class="sc2"><a href="http://december.com/html/4/element/input.php"><span class="kw2">&lt;input</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;text&quot;</span> <span class="kw3">id</span><span class="sy0">=</span><span class="st0">&quot;field_name&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;field_name&quot;</span> <span class="kw3">value</span><span class="sy0">=</span><span class="st0">&quot;&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span>
<span class="sc2"><a href="http://december.com/html/4/element/input.php"><span class="kw2">&lt;input</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;text&quot;</span> <span class="kw3">id</span><span class="sy0">=</span><span class="st0">&quot;field_name&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;field_name&quot;</span> <span class="kw3">value</span><span class="sy0">=</span><span class="st0">&quot;field_value&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span></pre>
<p>
To create a form reset button, add the attribute of “type” set to “reset”.
</p>

<p>
<strong>Example:</strong>
</p>
<pre class="code php">form<span class="sy0">::</span><span class="me2">input</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'type'</span><span class="sy0">=&gt;</span><span class="st0">'reset'</span><span class="sy0">,</span><span class="st0">'name'</span><span class="sy0">=&gt;</span><span class="st0">'reset'</span><span class="br0">&#41;</span><span class="sy0">,</span><span class="st0">&quot;Clear Form&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

Result in <acronym title="HyperText Markup Language">HTML</acronym>:

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/input.php"><span class="kw2">&lt;input</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;reset&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;reset&quot;</span> <span class="kw3">value</span><span class="sy0">=</span><span class="st0">&quot;Clear Form&quot;</span>  <span class="sy0">/</span><span class="kw2">&gt;</span></span></pre>
</div>

<h3><a name="hidden" id="hidden">hidden()</a></h3>
<div class="level3">

<p>

&#039;hidden&#039; generates a hidden form field. 
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> [string]/[array] data for key attributes</div>
</li>
<li class="level1"><div class="li"> [string] value of the field – default = ”” </div>
</li>
</ul>

<p>

<strong>Example:</strong>
</p>
<pre class="code php"><span class="co1">// Please note that the print() statements are for display purposes only</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">hidden</span><span class="br0">&#40;</span><span class="st0">&quot;fieldName&quot;</span><span class="sy0">,</span><span class="st0">&quot;fieldValue&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$array</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'field1'</span> <span class="sy0">=&gt;</span> <span class="st0">'value1'</span><span class="sy0">,</span> <span class="st0">'field2'</span> <span class="sy0">=&gt;</span> <span class="st0">'value2'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">hidden</span><span class="br0">&#40;</span><span class="re1">$array</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:
</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/input.php"><span class="kw2">&lt;input</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;hidden&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;fieldName&quot;</span> <span class="kw3">value</span><span class="sy0">=</span><span class="st0">&quot;fieldValue&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span>
&nbsp;
<span class="sc2"><a href="http://december.com/html/4/element/input.php"><span class="kw2">&lt;input</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;hidden&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;field1&quot;</span> <span class="kw3">value</span><span class="sy0">=</span><span class="st0">&quot;value1&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span>
<span class="sc2"><a href="http://december.com/html/4/element/input.php"><span class="kw2">&lt;input</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;hidden&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;field2&quot;</span> <span class="kw3">value</span><span class="sy0">=</span><span class="st0">&quot;value2&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span></pre>
</div>

<h3><a name="password" id="password">password()</a></h3>
<div class="level3">

<p>

&#039;password&#039; generates a password form field. 
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> [string]/[array] data for key attributes</div>
</li>
<li class="level1"><div class="li"> [string] value of the field – default = ””</div>
</li>
<li class="level1"><div class="li"> [string] extra string to be added to the end of the attributes – default = ””</div>
</li>
</ul>

<p>

<strong>Example:</strong>
</p>
<pre class="code php"><span class="co1">// Please note that the print() statements are for display purposes only</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span>form<span class="sy0">::</span><span class="me2">password</span><span class="br0">&#40;</span><span class="st0">&quot;fieldName&quot;</span><span class="sy0">,</span><span class="st0">&quot;fieldValue&quot;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span>form<span class="sy0">::</span><span class="me2">password</span><span class="br0">&#40;</span><span class="st0">&quot;fieldName&quot;</span><span class="sy0">,</span><span class="st0">&quot;fieldValue&quot;</span><span class="sy0">,</span><span class="st0">' id=&quot;fieldId&quot;'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$array</span><span class="sy0">=</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'name'</span><span class="sy0">=&gt;</span><span class="st0">'fieldName'</span><span class="sy0">,</span><span class="st0">'value'</span><span class="sy0">=&gt;</span><span class="st0">'fieldValue'</span><span class="sy0">,</span><span class="st0">'id'</span><span class="sy0">=&gt;</span><span class="st0">'fieldId'</span><span class="sy0">,</span><span class="st0">'class'</span><span class="sy0">=&gt;</span><span class="st0">'formField'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span>form<span class="sy0">::</span><span class="me2">password</span><span class="br0">&#40;</span><span class="re1">$array</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:
</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/input.php"><span class="kw2">&lt;input</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;password&quot;</span> <span class="kw3">id</span><span class="sy0">=</span><span class="st0">&quot;fieldName&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;fieldName&quot;</span> <span class="kw3">value</span><span class="sy0">=</span><span class="st0">&quot;fieldValue&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span>
&nbsp;
<span class="sc2"><a href="http://december.com/html/4/element/input.php"><span class="kw2">&lt;input</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;password&quot;</span> <span class="kw3">id</span><span class="sy0">=</span><span class="st0">&quot;fieldName&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;fieldName&quot;</span> <span class="kw3">value</span><span class="sy0">=</span><span class="st0">&quot;fieldValue&quot;</span><span class="kw3">id</span><span class="sy0">=</span><span class="st0">&quot;fieldId&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span>
&nbsp;
<span class="sc2"><a href="http://december.com/html/4/element/input.php"><span class="kw2">&lt;input</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;password&quot;</span> <span class="kw3">id</span><span class="sy0">=</span><span class="st0">&quot;fieldId&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;fieldName&quot;</span> <span class="kw3">value</span><span class="sy0">=</span><span class="st0">&quot;fieldValue&quot;</span> <span class="kw3">class</span><span class="sy0">=</span><span class="st0">&quot;formField&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span></pre>
</div>

<h3><a name="upload" id="upload">upload()</a></h3>
<div class="level3">

<p>

Generate <acronym title="HyperText Markup Language">HTML</acronym> form input tag type “file” for upload files:
</p>

<p>
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> [string]/[array] - attribute name or array of attributes</div>
</li>
<li class="level1"><div class="li"> [string] - attribute value [optional]</div>
</li>
<li class="level1"><div class="li"> [string] - extra additional [optional]</div>
</li>
</ul>

<p>

<strong>Example</strong>

</p>
<pre class="code php"><span class="re1">$attributes</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'name'</span> <span class="sy0">=&gt;</span> <span class="st0">'file_1'</span><span class="sy0">,</span> <span class="st0">'class'</span> <span class="sy0">=&gt;</span> <span class="st0">'your-class'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">upload</span><span class="br0">&#40;</span><span class="re1">$attributes</span><span class="sy0">,</span> <span class="st0">'path/to/local/file'</span><span class="br0">&#41;</span></pre>
<p>
Result in <acronym title="HyperText Markup Language">HTML</acronym>:
</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/input.php"><span class="kw2">&lt;input</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;file&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;file_1&quot;</span> <span class="kw3">value</span><span class="sy0">=</span><span class="st0">&quot;path/to/local/file&quot;</span> <span class="kw3">class</span><span class="sy0">=</span><span class="st0">&quot;your-class&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span></pre>
</div>

<h3><a name="textarea" id="textarea">textarea()</a></h3>
<div class="level3">

<p>

Creates an <acronym title="HyperText Markup Language">HTML</acronym> form textarea tag.
</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">textarea</span><span class="br0">&#40;</span>string<span class="sy0">/</span><a href="http://www.php.net/array"><span class="kw3">array</span></a> <span class="re1">$data</span><span class="sy0">,</span> string <span class="re1">$value</span><span class="br0">&#41;</span></pre>
<p>
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> [string]/[array] textarea name or an array of <acronym title="HyperText Markup Language">HTML</acronym> attributes </div>
</li>
<li class="level1"><div class="li"> [string] textarea value, when using a name</div>
</li>
<li class="level1"><div class="li"> [string] extra string  attached to the end of the attributes</div>
</li>
<li class="level1"><div class="li"> [bool] encode existing html entities (default TRUE)</div>
</li>
</ul>

<p>

<strong>Example</strong>

</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">textarea</span><span class="br0">&#40;</span><span class="st0">'field_name'</span><span class="sy0">,</span> <span class="st0">'field_value'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Result in <acronym title="HyperText Markup Language">HTML</acronym>:

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/textarea.php"><span class="kw2">&lt;textarea</span></a> <span class="kw3">id</span><span class="sy0">=</span><span class="st0">&quot;field_name&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;field_name&quot;</span><span class="kw2">&gt;</span></span>field_value<span class="sc2"><span class="kw2">&lt;/textarea&gt;</span></span></pre>
<p>
We can also use array for the first parameter. Look at this example:

</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">textarea</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'name'</span> <span class="sy0">=&gt;</span> <span class="st0">'field_name'</span><span class="sy0">,</span> <span class="st0">'value'</span> <span class="sy0">=&gt;</span> <span class="st0">'field_value'</span><span class="sy0">,</span> <span class="st0">'class'</span> <span class="sy0">=&gt;</span> <span class="st0">'our_class'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Result in <acronym title="HyperText Markup Language">HTML</acronym>:

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/textarea.php"><span class="kw2">&lt;textarea</span></a> <span class="kw3">id</span><span class="sy0">=</span><span class="st0">&quot;field_name&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;field_name&quot;</span> <span class="kw3">class</span><span class="sy0">=</span><span class="st0">&quot;our_class&quot;</span><span class="kw2">&gt;</span></span>field_value<span class="sc2"><span class="kw2">&lt;/textarea&gt;</span></span></pre>
</div>

<h3><a name="dropdown" id="dropdown">dropdown()</a></h3>
<div class="level3">

<p>
Creates a drop down selection box.
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> <strong>[string|array]</strong> input name or array of <acronym title="HyperText Markup Language">HTML</acronym> attributes</div>
</li>
<li class="level1"><div class="li"> <strong>[array]</strong> the select options, when using input name</div>
</li>
<li class="level1"><div class="li"> <strong>[string|array]</strong> the option or an array of options to be selected by default  </div>
</li>
<li class="level1"><div class="li"> <strong>[string]</strong> extra string to be added to the end of the attributes – default = ””</div>
</li>
</ul>

<p>
<strong>Example:</strong>

</p>
<pre class="code php"><span class="re1">$selection</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'basic'</span> <span class="sy0">=&gt;</span><span class="st0">'Basic'</span><span class="sy0">,</span> <span class="st0">'standard'</span> <span class="sy0">=&gt;</span> <span class="st0">'Standard'</span><span class="sy0">,</span> <span class="st0">'custom'</span> <span class="sy0">=&gt;</span> <span class="st0">'Custom'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// The 'standard' option will be the default selection</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">dropdown</span><span class="br0">&#40;</span><span class="st0">'input_dropdown'</span><span class="sy0">,</span><span class="re1">$selection</span><span class="sy0">,</span><span class="st0">'standard'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$selection</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'basic'</span> <span class="sy0">=&gt;</span><span class="st0">'Basic'</span><span class="sy0">,</span> <span class="st0">'standard'</span> <span class="sy0">=&gt;</span> <span class="st0">'Standard'</span><span class="sy0">,</span> <span class="st0">'custom'</span> <span class="sy0">=&gt;</span> <span class="st0">'Custom'</span><span class="sy0">,</span> <span class="st0">'something'</span> <span class="sy0">=&gt;</span> <span class="st0">'Something'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">dropdown</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'name'</span> <span class="sy0">=&gt;</span> <span class="st0">'input_dropdown[]'</span><span class="sy0">,</span> <span class="st0">'multiple'</span> <span class="sy0">=&gt;</span> <span class="st0">'multiple'</span><span class="sy0">,</span> <span class="st0">'size'</span> <span class="sy0">=&gt;</span> <span class="nu0">4</span><span class="br0">&#41;</span><span class="sy0">,</span> <span class="re1">$selection</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'standard'</span><span class="sy0">,</span> <span class="st0">'basic'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$selection</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'basic'</span> <span class="sy0">=&gt;</span>array<span class="br0">&#40;</span><span class="st0">'basic1'</span> <span class="sy0">=&gt;</span> <span class="st0">'Basic1'</span><span class="sy0">,</span> <span class="st0">'basic2'</span> <span class="sy0">=&gt;</span> <span class="st0">'Basic2'</span><span class="br0">&#41;</span><span class="sy0">,</span> <span class="st0">'standard'</span> <span class="sy0">=&gt;</span> <span class="st0">'Standard'</span><span class="sy0">,</span> <span class="st0">'custom'</span> <span class="sy0">=&gt;</span> <span class="st0">'Custom'</span><span class="sy0">,</span> <span class="st0">'something'</span> <span class="sy0">=&gt;</span> <span class="st0">'Something'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">dropdown</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'name'</span> <span class="sy0">=&gt;</span> <span class="st0">'input_dropdown[]'</span><span class="sy0">,</span> <span class="st0">'multiple'</span> <span class="sy0">=&gt;</span> <span class="st0">'multiple'</span><span class="sy0">,</span> <span class="st0">'size'</span> <span class="sy0">=&gt;</span> <span class="nu0">6</span><span class="br0">&#41;</span><span class="sy0">,</span> <span class="re1">$selection</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'standard'</span><span class="sy0">,</span> <span class="st0">'basic1'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

<strong>Browser output:</strong>

<select id="input_dropdown" name="input_dropdown">
<option value="basic">Basic</option>
<option selected="selected" value="standard">Standard</option>
<option value="custom">Custom</option>
</select>

<select id="input_dropdown[]" multiple="multiple" size="4" name="input_dropdown[]">
<option selected="selected" value="basic">Basic</option>
<option selected="selected" value="standard">Standard</option>
<option value="custom">Custom</option>
<option value="something">Something</option>
</select>

<select id="input_dropdown[]" multiple="multiple" size="6" name="input_dropdown[]">
<optgroup label="basic">
<option selected="selected" value="basic1">Basic1</option>
<option value="basic2">Basic2</option>
</optgroup>
<option selected="selected" value="standard">Standard</option>
<option value="custom">Custom</option>
<option value="something">Something</option>
</select>

</p>

</div>

<h3><a name="checkbox" id="checkbox">checkbox()</a></h3>
<div class="level3">

<p>
Creates a &#039;tick box&#039; type selection box.
</p>

<p>
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> [string/array] input name or an array of <acronym title="HyperText Markup Language">HTML</acronym> attributes</div>
</li>
<li class="level1"><div class="li"> [string] input value, when using a name</div>
</li>
<li class="level1"><div class="li"> [boolean] make the checkbox checked by default</div>
</li>
<li class="level1"><div class="li"> [string] a string to be attached to the end of the attributes</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">label</span><span class="br0">&#40;</span><span class="st0">'check_spam_box'</span><span class="sy0">,</span> <span class="st0">'Always send me Spam (Opt in): '</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">checkbox</span><span class="br0">&#40;</span><span class="st0">'check_spam_box'</span><span class="sy0">,</span> <span class="st0">'send_spam'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">label</span><span class="br0">&#40;</span><span class="st0">'check_money_box'</span><span class="sy0">,</span> <span class="st0">'Never send me Money (Opt out): '</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">checkbox</span><span class="br0">&#40;</span><span class="st0">'check_money_box'</span><span class="sy0">,</span> <span class="st0">'send_no_money'</span><span class="sy0">,</span> <span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

Results in <acronym title="HyperText Markup Language">HTML</acronym>

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/label.php"><span class="kw2">&lt;label</span></a> <span class="kw3">for</span><span class="sy0">=</span><span class="st0">&quot;check_spam_box&quot;</span><span class="kw2">&gt;</span></span>Always send me Spam (Opt in): <span class="sc2"><span class="kw2">&lt;/label&gt;</span></span>
<span class="sc2"><a href="http://december.com/html/4/element/input.php"><span class="kw2">&lt;input</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;checkbox&quot;</span> <span class="kw3">id</span><span class="sy0">=</span><span class="st0">&quot;check_spam_box&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;check_spam_box&quot;</span> <span class="kw3">value</span><span class="sy0">=</span><span class="st0">&quot;send_spam&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span>
<span class="sc2"><a href="http://december.com/html/4/element/label.php"><span class="kw2">&lt;label</span></a> <span class="kw3">for</span><span class="sy0">=</span><span class="st0">&quot;check_money_box&quot;</span><span class="kw2">&gt;</span></span>Never send me Money (Opt out): <span class="sc2"><span class="kw2">&lt;/label&gt;</span></span>
<span class="sc2"><a href="http://december.com/html/4/element/input.php"><span class="kw2">&lt;input</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;checkbox&quot;</span> <span class="kw3">id</span><span class="sy0">=</span><span class="st0">&quot;check_money_box&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;check_money_box&quot;</span> <span class="kw3">value</span><span class="sy0">=</span><span class="st0">&quot;send_no_money&quot;</span> <span class="kw3">checked</span><span class="sy0">=</span><span class="st0">&quot;checked&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span></pre>
<p>

<strong>Browser output:</strong>
</p>

<p>

<label for="check_spam_box">Always send me Spam (Opt in): </label>
<input type="checkbox" id="check_spam_box" name="check_spam_box" value="send_spam" />
<label for="check_money_box">Never send me Money (Opt out): </label>
<input type="checkbox" id="check_money_box" name="check_money_box" value="send_no_money" checked="checked" />

</p>

</div>

<h3><a name="radio" id="radio">radio()</a></h3>
<div class="level3">

<p>
Generates a &#039;radio&#039; type selection box, similar to checkbox, but allows for easier multiple selections.
</p>

<p>
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> [string/array] input name or an array of <acronym title="HyperText Markup Language">HTML</acronym> attributes</div>
</li>
<li class="level1"><div class="li"> [string] input value, when using a name</div>
</li>
<li class="level1"><div class="li"> [boolean] make the radio selected by default</div>
</li>
<li class="level1"><div class="li"> [string] a string to be attached to the end of the attributes</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">label</span><span class="br0">&#40;</span><span class="st0">'radio_cute_box'</span><span class="sy0">,</span> <span class="st0">'I am cute: '</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">radio</span><span class="br0">&#40;</span><span class="st0">'radio_cute_box'</span><span class="sy0">,</span> <span class="st0">'is_cute'</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="st0">'&lt;br /&gt;'</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">label</span><span class="br0">&#40;</span><span class="st0">'radio_single_box'</span><span class="sy0">,</span> <span class="st0">'I am single: '</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">radio</span><span class="br0">&#40;</span><span class="st0">'radio_single_box'</span><span class="sy0">,</span> <span class="st0">'is_single'</span><span class="sy0">,</span> <span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="st0">'&lt;br /&gt;'</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">label</span><span class="br0">&#40;</span><span class="st0">'radio_rich_box'</span><span class="sy0">,</span> <span class="st0">'I am rich: '</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">radio</span><span class="br0">&#40;</span><span class="st0">'radio_rich_box'</span><span class="sy0">,</span> <span class="st0">'is_rich'</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="st0">'&lt;br /&gt;'</span><span class="sy0">;</span></pre>
<p>

Results in <acronym title="HyperText Markup Language">HTML</acronym>
</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/label.php"><span class="kw2">&lt;label</span></a> <span class="kw3">for</span><span class="sy0">=</span><span class="st0">&quot;radio_cute_box&quot;</span><span class="kw2">&gt;</span></span>I am cute: <span class="sc2"><span class="kw2">&lt;/label&gt;</span></span>
<span class="sc2"><a href="http://december.com/html/4/element/input.php"><span class="kw2">&lt;input</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;radio&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;radio_cute_box&quot;</span> <span class="kw3">value</span><span class="sy0">=</span><span class="st0">&quot;is_cute&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span><span class="sc2"><a href="http://december.com/html/4/element/br.php"><span class="kw2">&lt;br</span></a> <span class="sy0">/</span><span class="kw2">&gt;</span></span>
<span class="sc2"><a href="http://december.com/html/4/element/label.php"><span class="kw2">&lt;label</span></a> <span class="kw3">for</span><span class="sy0">=</span><span class="st0">&quot;radio_single_box&quot;</span><span class="kw2">&gt;</span></span>I am single: <span class="sc2"><span class="kw2">&lt;/label&gt;</span></span>
<span class="sc2"><a href="http://december.com/html/4/element/input.php"><span class="kw2">&lt;input</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;radio&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;radio_single_box&quot;</span> <span class="kw3">value</span><span class="sy0">=</span><span class="st0">&quot;is_single&quot;</span> <span class="kw3">checked</span><span class="sy0">=</span><span class="st0">&quot;checked&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span><span class="sc2"><a href="http://december.com/html/4/element/br.php"><span class="kw2">&lt;br</span></a> <span class="sy0">/</span><span class="kw2">&gt;</span></span>
<span class="sc2"><a href="http://december.com/html/4/element/label.php"><span class="kw2">&lt;label</span></a> <span class="kw3">for</span><span class="sy0">=</span><span class="st0">&quot;radio_rich_box&quot;</span><span class="kw2">&gt;</span></span>I am rich: <span class="sc2"><span class="kw2">&lt;/label&gt;</span></span>
<span class="sc2"><a href="http://december.com/html/4/element/input.php"><span class="kw2">&lt;input</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;radio&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;radio_rich_box&quot;</span> <span class="kw3">value</span><span class="sy0">=</span><span class="st0">&quot;is_rich&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span><span class="sc2"><a href="http://december.com/html/4/element/br.php"><span class="kw2">&lt;br</span></a> <span class="sy0">/</span><span class="kw2">&gt;</span></span></pre>
<p>

<strong>Browser output</strong>
</p>

<p>

<label for="radio_cute_box">I am cute: </label>
<input type="radio" id="radio_cute_box" name="radio_cute_box" value="is_cute" /><br />
<label for="radio_single_box">I am single: </label>
<input type="radio" id="radio_single_box" name="radio_single_box" value="is_single" checked="checked" /><br />
<label for="radio_rich_box">I am rich: </label>
<input type="radio" id="radio_rich_box" name="radio_rich_box" value="is_rich" /><br />

</p>

</div>

<h3><a name="submit" id="submit">submit()</a></h3>
<div class="level3">

<p>
Creates a &#039;submit&#039; type button for the form.
</p>

<p>
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> [string/array] input name or an array of <acronym title="HyperText Markup Language">HTML</acronym> attributes</div>
</li>
<li class="level1"><div class="li"> [string] input value, when using a name</div>
</li>
<li class="level1"><div class="li"> [string] a string to be attached to the end of the attributes</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">submit</span><span class="br0">&#40;</span><span class="st0">'submit'</span><span class="sy0">,</span> <span class="st0">'Send'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Results in <acronym title="HyperText Markup Language">HTML</acronym>

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/input.php"><span class="kw2">&lt;input</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;submit&quot;</span> <span class="kw3">id</span><span class="sy0">=</span><span class="st0">&quot;submit&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;submit&quot;</span> <span class="kw3">value</span><span class="sy0">=</span><span class="st0">&quot;Send&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span></pre>
</div>

<h3><a name="button" id="button">button()</a></h3>
<div class="level3">

<p>
Creates a button for the form. Note this is not the same as the button associated with input type &#039;submit&#039; or &#039;reset&#039;.
</p>

<p>
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> [string/array] input name or an array of <acronym title="HyperText Markup Language">HTML</acronym> attributes</div>
</li>
<li class="level1"><div class="li"> [string] input value, when using a name</div>
</li>
<li class="level1"><div class="li"> [string] a string to be attached to the end of the attributes</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">button</span><span class="br0">&#40;</span><span class="st0">'button'</span><span class="sy0">,</span> <span class="st0">'Does not do Much'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Results in <acronym title="HyperText Markup Language">HTML</acronym>

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/button.php"><span class="kw2">&lt;button</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;button&quot;</span> <span class="kw3">id</span><span class="sy0">=</span><span class="st0">&quot;button&quot;</span> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;button&quot;</span><span class="kw2">&gt;</span></span>Does not do Much<span class="sc2"><span class="kw2">&lt;/button&gt;</span></span></pre>
</div>

<h3><a name="label" id="label">label()</a></h3>
<div class="level3">

<p>
Creates a label for a form entry field.
</p>

<p>
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> [string/array] label “for” name or an array of <acronym title="HyperText Markup Language">HTML</acronym> attributes</div>
</li>
<li class="level1"><div class="li"> [string] label text or <acronym title="HyperText Markup Language">HTML</acronym></div>
</li>
<li class="level1"><div class="li"> [string] a string to be attached to the end of the attributes</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">label</span><span class="br0">&#40;</span><span class="st0">'imageup'</span><span class="sy0">,</span> <span class="st0">'Image Uploads'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Results in <acronym title="HyperText Markup Language">HTML</acronym>

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/label.php"><span class="kw2">&lt;label</span></a> <span class="kw3">for</span><span class="sy0">=</span><span class="st0">&quot;imageup&quot;</span><span class="kw2">&gt;</span></span>Image Uploads<span class="sc2"><span class="kw2">&lt;/label&gt;</span></span></pre>
</div>

<h3><a name="attributes" id="attributes">attributes()</a></h3>
<div class="level3">

<p>

Returns an attribute string, from an array of <acronym title="HyperText Markup Language">HTML</acronym> attributes in key/value format, sorted by form attributes first.
</p>

<p>
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> [array] <acronym title="HyperText Markup Language">HTML</acronym> attributes array</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">attributes</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id'</span> <span class="sy0">=&gt;</span> <span class="st0">'input_name'</span><span class="sy0">,</span> <span class="st0">'class'</span> <span class="sy0">=&gt;</span> <span class="st0">'submission'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Outputs 

</p>
<pre class="code html4strict">id=&quot;input_name&quot; class=&quot;submission&quot;</pre>
</div>

<h3><a name="open_fieldset" id="open_fieldset">open_fieldset()</a></h3>
<div class="level3">

<p>
Creates a fieldset opening tag. The fieldset <acronym title="HyperText Markup Language">HTML</acronym> element is used to logically group together elements in a form, and draw a box around them.
</p>

<p>
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> [array] an array of <acronym title="HyperText Markup Language">HTML</acronym> attributes</div>
</li>
<li class="level1"><div class="li"> [string] a string to be attached to the end of the attributes</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">open_fieldset</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'class'</span> <span class="sy0">=&gt;</span> <span class="st0">'important'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Results in <acronym title="HyperText Markup Language">HTML</acronym>

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/fieldset.php"><span class="kw2">&lt;fieldset</span></a> <span class="kw3">class</span><span class="sy0">=</span><span class="st0">&quot;important&quot;</span><span class="kw2">&gt;</span></span></pre>
</div>

<h3><a name="close_fieldset" id="close_fieldset">close_fieldset()</a></h3>
<div class="level3">

<p>

Generates a fieldset closing tag
</p>

<p>
<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">close_fieldset</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Results in <acronym title="HyperText Markup Language">HTML</acronym>

</p>
<pre class="code html4strict"><span class="sc2"><span class="kw2">&lt;/fieldset&gt;</span></span></pre>
</div>

<h3><a name="legend" id="legend">legend()</a></h3>
<div class="level3">

<p>
Creates a legend for describing a fieldset.
</p>

<p>
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> [string] legend text or <acronym title="HyperText Markup Language">HTML</acronym></div>
</li>
<li class="level1"><div class="li"> [array] an array of <acronym title="HyperText Markup Language">HTML</acronym> attributes</div>
</li>
<li class="level1"><div class="li"> [string] a string to be attached to the end of the attributes</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">legend</span><span class="br0">&#40;</span><span class="st0">'More about you'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id'</span> <span class="sy0">=&gt;</span> <span class="st0">'more_infos'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Results in <acronym title="HyperText Markup Language">HTML</acronym>

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/legend.php"><span class="kw2">&lt;legend</span></a> <span class="kw3">id</span><span class="sy0">=</span><span class="st0">&quot;more_infos&quot;</span><span class="kw2">&gt;</span></span>More about you<span class="sc2"><span class="kw2">&lt;/legend&gt;</span></span></pre>
</div>

<h3><a name="close" id="close">close()</a></h3>
<div class="level3">

<p>

In order to close the form, you simply need to:
</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">close</span><span class="br0">&#40;</span><span class="br0">&#41;</span></pre>
<p>
Or you can set parameter:
</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> form<span class="sy0">::</span><span class="me2">close</span><span class="br0">&#40;</span><span class="st0">'&lt;/div&gt;'</span><span class="br0">&#41;</span></pre>
<p>
Result in <acronym title="HyperText Markup Language">HTML</acronym>:
</p>
<pre class="code html4strict"><span class="sc2"><span class="kw2">&lt;/form&gt;</span></span><span class="sc2"><span class="kw2">&lt;/div&gt;</span></span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer14b5.gif?id=helpers%3Aform&amp;1324588205" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/helpers/form by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


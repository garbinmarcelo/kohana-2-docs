<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/validation by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:validation    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-03-10T12:40:51-0500" />
<meta name="keywords" content="libraries,validation" />
<link rel="alternate" type="application/rss+xml" title="Recent Changes" href="../feed.php" />
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
<li class="level1"><div class="li"><span class="li"><a href="#validation_library" class="toc">Validation Library</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#getting_started" class="toc">Getting started</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#load_the_library" class="toc">Load the Library</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#adding_rules_required" class="toc">Adding rules (required)</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#adding_filters_optional" class="toc">Adding filters (optional)</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#adding_callbacks_optional" class="toc">Adding callbacks (optional)</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#validating" class="toc">Validating</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#adding_errors" class="toc">Adding Errors</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#define_error_messages" class="toc">Define Error Messages</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#retrieve_error_messages" class="toc">Retrieve Error Messages</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#retrieve_input_data" class="toc">Retrieve Input Data</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#rules" class="toc">Rules</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#rules_specific_to_validation_library" class="toc">Rules Specific to Validation Library</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#rules_made_available_by_valid_helper" class="toc">Rules Made Available by Valid Helper</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#examples" class="toc">Examples</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#building_and_validating_a_form" class="toc">Building and Validating a Form</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#validating_file_uploads" class="toc">Validating File Uploads</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">Add all methods, example form</td>
	</tr>
</table>



<h1><a name="validation_library" id="validation_library">Validation Library</a></h1>
<div class="level1">

<p>

The Kohana Validation library is extremely flexible, allowing you to validate any arbitrary <code>array</code> of data fields, including <code>$_POST</code> data populated by forms.  The library includes <span class="curid"><a href="validation.php#rules_specific_to_validation_library" class="wikilink1" title="libraries:validation">built-in rules</a></span> for frequently required validations and allows you to easily apply custom callback functions or pre-made functions from the Kohana <span class="curid"><a href="validation.php#rules_made_available_by_valid_helper" class="wikilink1" title="libraries:validation">validation helper</a></span>.  The library also enables you to define and apply custom error messages for each field.
</p>

<p>
The Validation library always processes data in the following order: pre-filters, rules, callbacks then post-filters.
</p>

<p>
Additional information:
<a href="http://learn.kohanaphp.com/2008/02/23/a-peek-at-kohanas-new-validation-library/" class="urlextern" title="http://learn.kohanaphp.com/2008/02/23/a-peek-at-kohanas-new-validation-library/"  rel="nofollow">Article</a>
<a href="http://forum.kohanaphp.com/comments.php?DiscussionID=872&amp;page=1#Item_0" class="urlextern" title="http://forum.kohanaphp.com/comments.php?DiscussionID=872&amp;page=1#Item_0"  rel="nofollow"> Tutorial</a>
<a href="http://forum.kohanaphp.com/comments.php?DiscussionID=1339&amp;page=1" class="urlextern" title="http://forum.kohanaphp.com/comments.php?DiscussionID=1339&amp;page=1"  rel="nofollow"> Tutorial with Captcha</a>
</p>

</div>

<h2><a name="getting_started" id="getting_started">Getting started</a></h2>
<div class="level2">

</div>

<h3><a name="load_the_library" id="load_the_library">Load the Library</a></h3>
<div class="level3">

<p>

The most common data array to validate is <code>$_POST</code>. Data arrays may be merged and validated as one entity.
</p>
<pre class="code php"><span class="co1">// create a new Validation object using the $_POST variable</span>
<span class="re1">$post</span> <span class="sy0">=</span> <span class="kw2">new</span> Validation<span class="br0">&#40;</span><span class="re1">$_POST</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// combine different arrays</span>
<span class="re1">$post</span> <span class="sy0">=</span> <span class="kw2">new</span> Validation<span class="br0">&#40;</span><a href="http://www.php.net/array_merge"><span class="kw3">array_merge</span></a><span class="br0">&#40;</span><span class="re1">$_POST</span><span class="sy0">,</span> <span class="re1">$_FILES</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// using the factory enables method chaining</span>
<span class="re1">$post</span> <span class="sy0">=</span> Validation<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="re1">$_POST</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">add_rules</span><span class="br0">&#40;</span><span class="st0">'field_name'</span><span class="sy0">,</span> <span class="st0">'required'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// you can also use the $_POST array directly (not recommended)</span>
<span class="re1">$_POST</span> <span class="sy0">=</span> <span class="kw2">new</span> Validation<span class="br0">&#40;</span><span class="re1">$_POST</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="adding_rules_required" id="adding_rules_required">Adding rules (required)</a></h3>
<div class="level3">

<p>
After you instantiate the Validation object you need to add rules to fields. Common rules such as <code>required</code> are defined by the library. The library is designed to work seamlessly with the <a href="../helpers/valid.php" class="wikilink1" title="helpers:valid">valid helper</a>.
</p>

<p>
Example: These are all equivalent:

</p>
<pre class="code php"><span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">add_rules</span><span class="br0">&#40;</span><span class="st0">'email'</span><span class="sy0">,</span> <span class="st0">'required'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'valid'</span><span class="sy0">,</span><span class="st0">'email'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">add_rules</span><span class="br0">&#40;</span><span class="st0">'email'</span><span class="sy0">,</span> <span class="st0">'required'</span><span class="sy0">,</span> <span class="st0">'valid::email'</span><span class="br0">&#41;</span><span class="sy0">;</span> 
<span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">add_rules</span><span class="br0">&#40;</span><span class="st0">'email'</span><span class="sy0">,</span> <span class="st0">'required'</span><span class="sy0">,</span> <span class="st0">'email'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

All rules are callbacks to functions, the first rule &#039;required&#039; tests whether the field is required. The second rule tests whether the email address is valid.
</p>

<p>
Also you can use wildcard or TRUE (rules will apply to all fields):

</p>
<pre class="code php"><span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">add_rules</span><span class="br0">&#40;</span><span class="st0">'*'</span><span class="sy0">,</span> <span class="st0">'required'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Note that if you use a wildcard (&#039;*&#039;), the wildcard validation by itself will not work. Working with the first example, you would have to do the following to make the wildcard rule aware of the email field:

</p>
<pre class="code php"><span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">add_rules</span><span class="br0">&#40;</span><span class="st0">'email'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'valid'</span><span class="sy0">,</span> <span class="st0">'email'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">add_rules</span><span class="br0">&#40;</span><span class="st0">'*'</span><span class="sy0">,</span> <span class="st0">'required'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="adding_filters_optional" id="adding_filters_optional">Adding filters (optional)</a></h3>
<div class="level3">

<p>
Filters enable processing of data fields before and after actual validation.  By default, a filter is applied to all fields in your data array, but you have the option to specify any number of specific fields for filtering. Any <acronym title="Hypertext Preprocessor">PHP</acronym> function that accepts and returns a string can be used as a filter.  Functions that require additional parameters can not be used as filters.
</p>
<pre class="code php"><span class="co1">// uses PHP trim() to remove whitespace from beginning and end of all fields before validation</span>
<span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">pre_filter</span><span class="br0">&#40;</span><span class="st0">'trim'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// runs PHP trim() on just the &quot;title&quot; field</span>
<span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">pre_filter</span><span class="br0">&#40;</span><span class="st0">'trim'</span><span class="sy0">,</span> <span class="st0">'title'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// runs PHP trim() on &quot;title&quot; and &quot;email&quot; fields</span>
<span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">pre_filter</span><span class="br0">&#40;</span><span class="st0">'trim'</span><span class="sy0">,</span> <span class="st0">'title'</span><span class="sy0">,</span> <span class="st0">'email'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// runs a callback on just the &quot;title&quot; field</span>
<span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">pre_filter</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">,</span> <span class="st0">'a_custom_filter'</span><span class="br0">&#41;</span><span class="sy0">,</span> <span class="st0">'title'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// runs PHP ucfirst() on just the &quot;title&quot; field after validation</span>
<span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">post_filter</span><span class="br0">&#40;</span><span class="st0">'ucfirst'</span><span class="sy0">,</span> <span class="st0">'title'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="adding_callbacks_optional" id="adding_callbacks_optional">Adding callbacks (optional)</a></h3>
<div class="level3">

<p>
In addition to rules, you can also add your own <a href="http://us.php.net/manual/en/language.pseudo-types.php#language.types.callback" class="urlextern" title="http://us.php.net/manual/en/language.pseudo-types.php#language.types.callback"  rel="nofollow">callbacks</a>. A callback is simply a method you define to do some custom check on a field. Pass the Validation object to the callback as an argument. The callback should add an error using the <code>add_error()</code> method if the custom checking fails.
</p>
<pre class="code php"><span class="co1">// In this example, we are creating a custom callback function that validates the uniqueness of an email address in the database.</span>
&nbsp;
<span class="co1">// Add the callback, we assume $array is the validation object and the callback is defined in the same controller, hence we use, $this</span>
<span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">add_callbacks</span><span class="br0">&#40;</span><span class="st0">'email'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">,</span> <span class="st0">'_unique_email'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Define the callback method</span>
<span class="coMULTI">/*
 * Callback method that checks for uniqueness of email
 *
 * @param  Validation  $array   Validation object
 * @param  string      $field   name of field being validated
 */</span>
<span class="kw2">public</span> <span class="kw2">function</span> _unique_email<span class="br0">&#40;</span>Validation <span class="re1">$array</span><span class="sy0">,</span> <span class="re1">$field</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
   <span class="co1">// check the database for existing records</span>
   <span class="re1">$email_exists</span> <span class="sy0">=</span> <span class="br0">&#40;</span>bool<span class="br0">&#41;</span> ORM<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="st0">'user'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">where</span><span class="br0">&#40;</span><span class="st0">'email'</span><span class="sy0">,</span> <span class="re1">$array</span><span class="br0">&#91;</span><span class="re1">$field</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">count_all</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
   <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$email_exists</span><span class="br0">&#41;</span>
   <span class="br0">&#123;</span>
       <span class="co1">// add error to validation object</span>
       <span class="re1">$array</span><span class="sy0">-&gt;</span><span class="me1">add_error</span><span class="br0">&#40;</span><span class="re1">$field</span><span class="sy0">,</span> <span class="st0">'email_exists'</span><span class="br0">&#41;</span><span class="sy0">;</span>
   <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="validating" id="validating">Validating</a></h3>
<div class="level3">

<p>
Validating is done with the <code>validate()</code> method. It first process the pre-filters, then the rules, callbacks and last the post_filters. 
</p>

<p>
If it encounters any errors on an input field, it adds the field name as an array key to the Validation errors array.
</p>

<p>
If any error was found, boolean <code>FALSE</code> is returned. if there are no errors, returns <code>TRUE</code>. 

</p>
<pre class="code php"><span class="kw1">if</span><span class="br0">&#40;</span><span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">validate</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
   <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'No validation errors found '</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
<span class="kw1">else</span>
<span class="br0">&#123;</span>
   <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'Validation errors were found '</span><span class="sy0">.</span><span class="st0">'&lt;br /&gt;'</span><span class="sy0">;</span>
   <span class="re1">$errors</span> <span class="sy0">=</span> <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">errors</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
   <span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$errors</span> <span class="kw1">as</span> <span class="re1">$key</span> <span class="sy0">=&gt;</span> <span class="re1">$val</span><span class="br0">&#41;</span>
   <span class="br0">&#123;</span>
       <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$key</span><span class="sy0">.</span><span class="st0">' failed rule '</span><span class="sy0">.</span><span class="re1">$val</span><span class="sy0">.</span><span class="st0">'&lt;br /&gt;'</span><span class="sy0">;</span>
   <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="adding_errors" id="adding_errors">Adding Errors</a></h3>
<div class="level3">

<p>

You can use method <code>add_error()</code> to add an error to the Validation error array. 
</p>
<pre class="code php"><span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">add_error</span><span class="br0">&#40;</span> <span class="st0">'password'</span><span class="sy0">,</span> <span class="st0">'pwd_check'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="define_error_messages" id="define_error_messages">Define Error Messages</a></h3>
<div class="level3">

<p>
Kohana does not define generic error messages for validation. Error messages should be defined in custom files, created in the <code>application/i18n</code> folder. 
</p>

<p>
Example: <code>application/i18n/en_US/form_errors.php</code> A default error condition may also be defined.
</p>
<pre class="code php"><span class="re1">$lang</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
        <span class="co1">// Change 'field' to the name of the actual field (e.g., 'email').</span>
	<span class="st0">'field'</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
		<span class="br0">&#40;</span>
                    <span class="st0">'required'</span> <span class="sy0">=&gt;</span> <span class="st0">'The name cannot be blank.'</span><span class="sy0">,</span>
                    <span class="st0">'alpha'</span>    <span class="sy0">=&gt;</span> <span class="st0">'Only alphabetic characters are allowed.'</span><span class="sy0">,</span>
                    <span class="st0">'default'</span>  <span class="sy0">=&gt;</span> <span class="st0">'Invalid Input.'</span><span class="sy0">,</span>
		<span class="br0">&#41;</span><span class="sy0">,</span>
<span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="retrieve_error_messages" id="retrieve_error_messages">Retrieve Error Messages</a></h3>
<div class="level3">

<p>
Error messages are retrieved with the <code>errors()</code> method. By default an array is returned, with the field name as key, and the defined rule as value.
</p>

<p>
To retrieve customized error messages, an error messages file must be passed to the <code>errors()</code> method.

</p>
<pre class="code php"><span class="re1">$errors</span> <span class="sy0">=</span> <span class="re1">$validation</span><span class="sy0">-&gt;</span><span class="me1">errors</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// Assuming one rule defined, add_rules('field', 'required') $errors array contains ('field' =&gt; 'required')</span>
<span class="co1">//</span>
<span class="co1">// Fetch errors using an error messages file</span>
<span class="re1">$errors</span> <span class="sy0">=</span> <span class="re1">$validation</span><span class="sy0">-&gt;</span><span class="me1">errors</span><span class="br0">&#40;</span><span class="st0">'form_errors'</span><span class="br0">&#41;</span>
<span class="co1">// Assuming a $lang array was created containing $lang = array('field' =&gt; array('required' =&gt; 'field may not be blank'))</span>
<span class="co1">// Then $errors will contain an array of ('field' =&gt; 'field may not be blank')</span></pre>
</div>

<h3><a name="retrieve_input_data" id="retrieve_input_data">Retrieve Input Data</a></h3>
<div class="level3">

<p>
Validation input data is accessible via the <code>as_array()</code> method. This is very useful for re-populating form fields, for example:
</p>
<pre class="code php"><span class="co1">// Assume form fields were previously defined in an array eg. $form = array('field_one' =&gt; '', 'field_two' =&gt; '')</span>
<span class="co1">// After validation, if errors occurred, we need to re-populate the previously entered information in the form fields.</span>
<span class="co1">// We use the array helper to overwrite the the original array</span>
<span class="re1">$form</span> <span class="sy0">=</span> arr<span class="sy0">::</span><span class="me2">overwrite</span><span class="br0">&#40;</span><span class="re1">$form</span><span class="sy0">,</span> <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">as_array</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="rules" id="rules">Rules</a></h2>
<div class="level2">

</div>

<h3><a name="rules_specific_to_validation_library" id="rules_specific_to_validation_library">Rules Specific to Validation Library</a></h3>
<div class="level3">
<table class="inline">
	<tr class="row0">
		<th class="col0 leftalign"> Rule      </th><th class="col1 leftalign"> Parameter       </th><th class="col2 leftalign"> Description         </th><th class="col3"> Example </th>
	</tr>
	<tr class="row1">
		<td class="col0 leftalign"> required   </td><td class="col1 leftalign"> No    </td><td class="col2"> Returns FALSE if form field is empty</td><td class="col3"> </td>
	</tr>
	<tr class="row2">
		<td class="col0"> length </td><td class="col1"> Yes </td><td class="col2"> Returns FALSE if the field is too long or too short </td><td class="col3"> <strong><code>length[1,30]</code></strong> - between 1 and 30 characters long<br/>
 or <strong><code>length[30]</code></strong> - exactly 30 characters long </td>
	</tr>
	<tr class="row3">
		<td class="col0"> depends_on </td><td class="col1">Yes </td><td class="col2 leftalign"> Returns FALSE if form field(s) defined in parameter are not filled in  </td><td class="col3"> <strong><code>depends_on[field_name]</code></strong> </td>
	</tr>
	<tr class="row4">
		<td class="col0"> matches </td><td class="col1"> Yes </td><td class="col2"> Returns FALSE if field does not match field(s) in parameter </td><td class="col3"> <strong><code>matches[password_again]</code></strong> </td>
	</tr>
	<tr class="row5">
		<td class="col0"> chars </td><td class="col1"> Yes </td><td class="col2"> Returns FALSE if field contains characters not in the parameter </td><td class="col3"> <strong><code>chars[a,b,c,d,1,2,3,4]</code></strong> </td>
	</tr>
</table>

<p>

<br/>

</p>

</div>

<h3><a name="rules_made_available_by_valid_helper" id="rules_made_available_by_valid_helper">Rules Made Available by Valid Helper</a></h3>
<div class="level3">

<p>
See <a href="../helpers/valid.php" class="wikilink1" title="helpers:valid">valid helper</a> for full descriptions and examples.
</p>
<table class="inline">
	<tr class="row0">
		<th class="col0 leftalign"> Rule      </th><th class="col1 leftalign"> Parameter       </th><th class="col2 leftalign"> Description         </th><th class="col3"> Example </th>
	</tr>
	<tr class="row1">
		<td class="col0"> email </td><td class="col1 leftalign"> No    </td><td class="col2 leftalign"> Returns FALSE if email is not <a href="../helpers/valid.php#email" class="urlextern" title="http://docs.kohanaphp.com/helpers/valid#email"  rel="nofollow">valid</a>       </td><td class="col3"> </td>
	</tr>
	<tr class="row2">
		<td class="col0"> email_domain </td><td class="col1 leftalign"> No    </td><td class="col2 leftalign"> Returns FALSE if domain of an email does not have valid MX record       </td><td class="col3"> </td>
	</tr>
	<tr class="row3">
		<td class="col0"> email_rfc </td><td class="col1 leftalign"> No    </td><td class="col2 leftalign"> Returns FALSE if email is not <a href="http://www.w3.org/Protocols/rfc822/" class="urlextern" title="http://www.w3.org/Protocols/rfc822/"  rel="nofollow">rfc822</a> valid       </td><td class="col3"> </td>
	</tr>
	<tr class="row4">
		<td class="col0"> url </td><td class="col1 leftalign"> No    </td><td class="col2 leftalign"> Returns FALSE if url is not valid      </td><td class="col3"> </td>
	</tr>
	<tr class="row5">
		<td class="col0"> ip </td><td class="col1 leftalign"> Optional  </td><td class="col2 leftalign"> Returns FALSE if ip is not valid      </td><td class="col3 rightalign">  </td>
	</tr>
	<tr class="row6">
		<td class="col0"> credit_card </td><td class="col1 leftalign"> Yes  </td><td class="col2 leftalign"> Returns FALSE if credit card is not valid      </td><td class="col3"> <strong><code>credit_card[mastercard]</code></strong> </td>
	</tr>
	<tr class="row7">
		<td class="col0"> phone </td><td class="col1 leftalign"> Optional  </td><td class="col2 leftalign"> Returns FALSE if phone number is not a valid length      </td><td class="col3"> <strong><code>phone[7,10,11,14]</code></strong> - either 7, 10, 11 or 14 digits long (default is 7, 10 and 11) </td>
	</tr>
	<tr class="row8">
		<td class="col0"> alpha_numeric </td><td class="col1 leftalign"> Optional    </td><td class="col2 leftalign"> Returns FALSE if form field does not consist only of alphabetical or numeric characters     </td><td class="col3"> </td>
	</tr>
	<tr class="row9">
		<td class="col0"> alpha_dash </td><td class="col1 leftalign"> Optional    </td><td class="col2"> Returns FALSE if form field does not consist only of alphabetical, numeric, underscore and dash characters </td><td class="col3"> </td>
	</tr>
	<tr class="row10">
		<td class="col0"> digit </td><td class="col1 leftalign"> Optional    </td><td class="col2"> Returns FALSE if form field does not consist only of digit characters </td><td class="col3"> </td>
	</tr>
	<tr class="row11">
		<td class="col0"> numeric </td><td class="col1"> No </td><td class="col2"> Returns FALSE if form field is not a valid number (positive, negative or decimal) </td><td class="col3"> </td>
	</tr>
	<tr class="row12">
		<td class="col0"> standard_text </td><td class="col1"> No </td><td class="col2"> Returns FALSE if form field is not valid text<br/>
 (letters, numbers, whitespace, dashes, periods and underscores are allowed) </td><td class="col3"> </td>
	</tr>
	<tr class="row13">
		<td class="col0"> decimal </td><td class="col1"> Optional </td><td class="col2"> Returns FALSE if form field is not in proper decimal format<br/>
 Optional parameter is for a specific decimal format </td><td class="col3"> <strong><code>decimal</code></strong> - is any valid decimal format<br/>
 <strong><code>decimal[4,2]</code></strong> - is 4 digits and 2 decimal places </td>
	</tr>
</table>

</div>

<h2><a name="examples" id="examples">Examples</a></h2>
<div class="level2">

</div>

<h3><a name="building_and_validating_a_form" id="building_and_validating_a_form">Building and Validating a Form</a></h3>
<div class="level3">

<p>
Validate your form in your Controller (<code>application/controllers/welcome.php</code>):  Note: this example uses the <a href="../helpers/form.php" class="wikilink1" title="helpers:form">Kohana form helper </a> to build the form, but you could also build the form using plain <acronym title="HyperText Markup Language">HTML</acronym> in a separate view and render the form as part of your view.  <a href="http://forum.kohanaphp.com/comments.php?DiscussionID=872&amp;page=1#Item_0" class="urlextern" title="http://forum.kohanaphp.com/comments.php?DiscussionID=872&amp;page=1#Item_0"  rel="nofollow"> More information about this example.</a>
</p>
<pre class="code php"><span class="kw2">public</span> <span class="kw2">function</span> testform<span class="br0">&#40;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <span class="co1">// setup and initialize your form field names</span>
    <span class="re1">$form</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
    <span class="br0">&#40;</span>
        <span class="st0">'name'</span>      <span class="sy0">=&gt;</span> <span class="st0">''</span><span class="sy0">,</span>
        <span class="st0">'number'</span>    <span class="sy0">=&gt;</span> <span class="st0">''</span><span class="sy0">,</span>
        <span class="st0">'password'</span>  <span class="sy0">=&gt;</span> <span class="st0">''</span><span class="sy0">,</span>
        <span class="st0">'code'</span>      <span class="sy0">=&gt;</span> <span class="st0">''</span><span class="sy0">,</span>
    <span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
    <span class="co1">//  copy the form as errors, so the errors will be stored with keys corresponding to the form field names</span>
    <span class="re1">$errors</span> <span class="sy0">=</span> <span class="re1">$form</span><span class="sy0">;</span>
&nbsp;
    <span class="co1">// check, has the form been submitted, if so, setup validation</span>
    <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$_POST</span><span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
         <span class="co1">// Instantiate Validation, use $post, so we don't overwrite $_POST fields with our own things</span>
        <span class="re1">$post</span> <span class="sy0">=</span> <span class="kw2">new</span> Validation<span class="br0">&#40;</span><span class="re1">$_POST</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
         <span class="co1">//  Add some filters</span>
        <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">pre_filter</span><span class="br0">&#40;</span><span class="st0">'trim'</span><span class="sy0">,</span> <span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">pre_filter</span><span class="br0">&#40;</span><span class="st0">'ucfirst'</span><span class="sy0">,</span> <span class="st0">'name'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
        <span class="co1">// Add some rules, the input field, followed by a list of checks, carried out in order</span>
        <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">add_rules</span><span class="br0">&#40;</span><span class="st0">'name'</span><span class="sy0">,</span><span class="st0">'required'</span><span class="sy0">,</span> <span class="st0">'length[3,20]'</span><span class="sy0">,</span> <span class="st0">'alpha'</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">add_rules</span><span class="br0">&#40;</span><span class="st0">'number'</span><span class="sy0">,</span> <span class="st0">'required'</span><span class="sy0">,</span> <span class="st0">'numeric'</span><span class="sy0">,</span> <span class="st0">'length[3,5]'</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">add_rules</span><span class="br0">&#40;</span><span class="st0">'password'</span><span class="sy0">,</span> <span class="st0">'required'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
        <span class="co1">// We can write the rules with different syntax, in a line, or individually</span>
        <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">add_rules</span><span class="br0">&#40;</span><span class="st0">'code'</span><span class="sy0">,</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'valid'</span><span class="sy0">,</span> <span class="st0">'numeric'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">add_rules</span><span class="br0">&#40;</span><span class="st0">'code'</span><span class="sy0">,</span><span class="st0">'length[3]'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
        <span class="co1">// Add a callback, to validate the password. This is here a method declared in the same controller</span>
        <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">add_callbacks</span><span class="br0">&#40;</span><span class="st0">'password'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">,</span> <span class="st0">'pwd_check'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
        <span class="co1">// Test to see if things passed the rule checks</span>
        <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">validate</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
        <span class="br0">&#123;</span>
            <span class="co1">// Yes! everything is valid</span>
            <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'Form validated and submitted correctly. &lt;br /&gt;'</span><span class="sy0">;</span>
            <span class="co1">// ok, do whatever ...</span>
            <a href="http://www.php.net/die"><span class="kw3">die</span></a><span class="br0">&#40;</span>html<span class="sy0">::</span><span class="me2">anchor</span><span class="br0">&#40;</span><span class="st0">'welcome/testform'</span><span class="sy0">,</span> <span class="st0">'try it again'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
        <span class="co1">// No! We have validation errors, we need to show the form again, with the errors</span>
        <span class="kw1">else</span>
        <span class="br0">&#123;</span>
            <span class="co1">// repopulate the form fields</span>
            <span class="re1">$form</span> <span class="sy0">=</span> arr<span class="sy0">::</span><span class="me2">overwrite</span><span class="br0">&#40;</span><span class="re1">$form</span><span class="sy0">,</span> <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">as_array</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
            <span class="co1">// populate the error fields, if any</span>
    		<span class="co1">// We need to already have created an error message file, for Kohana to use</span>
            <span class="co1">// Pass the error message file name to the errors() method</span>
            <span class="re1">$errors</span> <span class="sy0">=</span> arr<span class="sy0">::</span><span class="me2">overwrite</span><span class="br0">&#40;</span><span class="re1">$errors</span><span class="sy0">,</span> <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">errors</span><span class="br0">&#40;</span><span class="st0">'form_error_messages'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
        <span class="br0">&#125;</span>
    <span class="br0">&#125;</span>
&nbsp;
    <span class="co1">// Display the Form, if there are any errors, they are displayed next to the input field.  Uses the Kohana form helper.</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">open</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">label</span><span class="br0">&#40;</span><span class="st0">'name'</span><span class="sy0">,</span> <span class="st0">'Your Name'</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">input</span><span class="br0">&#40;</span><span class="st0">'name'</span><span class="sy0">,</span> <span class="br0">&#40;</span><span class="re1">$form</span><span class="br0">&#91;</span><span class="st0">'name'</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="br0">&#40;</span><a href="http://www.php.net/empty"><span class="kw3">empty</span></a> <span class="br0">&#40;</span><span class="re1">$errors</span><span class="br0">&#91;</span><span class="st0">'name'</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> ? <span class="st0">''</span> <span class="sy0">:</span> <span class="re1">$errors</span><span class="br0">&#91;</span><span class="st0">'name'</span><span class="br0">&#93;</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;br /&gt;'</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">label</span><span class="br0">&#40;</span><span class="st0">'number'</span><span class="sy0">,</span> <span class="st0">'Your Number'</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">input</span><span class="br0">&#40;</span><span class="st0">'number'</span><span class="sy0">,</span> <span class="re1">$form</span><span class="br0">&#91;</span><span class="st0">'number'</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="br0">&#40;</span><a href="http://www.php.net/empty"><span class="kw3">empty</span></a> <span class="br0">&#40;</span><span class="re1">$errors</span><span class="br0">&#91;</span><span class="st0">'number'</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> ? <span class="st0">''</span> <span class="sy0">:</span> <span class="re1">$errors</span><span class="br0">&#91;</span><span class="st0">'number'</span><span class="br0">&#93;</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;br /&gt;'</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">label</span><span class="br0">&#40;</span><span class="st0">'password'</span><span class="sy0">,</span> <span class="st0">'Password'</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">input</span><span class="br0">&#40;</span><span class="st0">'password'</span><span class="sy0">,</span> <span class="re1">$form</span><span class="br0">&#91;</span><span class="st0">'password'</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="br0">&#40;</span><a href="http://www.php.net/empty"><span class="kw3">empty</span></a> <span class="br0">&#40;</span><span class="re1">$errors</span><span class="br0">&#91;</span><span class="st0">'password'</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> ? <span class="st0">''</span> <span class="sy0">:</span> <span class="re1">$errors</span><span class="br0">&#91;</span><span class="st0">'password'</span><span class="br0">&#93;</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;br /&gt;'</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">label</span><span class="br0">&#40;</span><span class="st0">'code'</span><span class="sy0">,</span> <span class="st0">'Your code'</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">input</span><span class="br0">&#40;</span><span class="st0">'code'</span><span class="sy0">,</span> <span class="re1">$form</span><span class="br0">&#91;</span><span class="st0">'code'</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="br0">&#40;</span><a href="http://www.php.net/empty"><span class="kw3">empty</span></a> <span class="br0">&#40;</span><span class="re1">$errors</span><span class="br0">&#91;</span><span class="st0">'code'</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> ? <span class="st0">''</span> <span class="sy0">:</span> <span class="re1">$errors</span><span class="br0">&#91;</span><span class="st0">'code'</span><span class="br0">&#93;</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;br /&gt;'</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">submit</span><span class="br0">&#40;</span><span class="st0">'submit'</span><span class="sy0">,</span> <span class="st0">'Send'</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;br /&gt;'</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">close</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
Custom callback function in your Controller (<code>application/controllers/welcome.php</code>):

</p>
<pre class="code php"><span class="kw2">public</span> <span class="kw2">function</span> pwd_check<span class="br0">&#40;</span>Validation <span class="re1">$post</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <span class="co1">// If add-&gt;rules validation found any errors, get me out of here!</span>
    <span class="kw1">if</span> <span class="br0">&#40;</span><a href="http://www.php.net/array_key_exists"><span class="kw3">array_key_exists</span></a><span class="br0">&#40;</span><span class="st0">'password'</span><span class="sy0">,</span> <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">errors</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
        <span class="kw1">return</span><span class="sy0">;</span>
&nbsp;
    <span class="co1">// only valid password is '123'</span>
    <span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">password</span> <span class="sy0">!=</span> <span class="st0">'123'</span><span class="br0">&#41;</span>
    <span class="br0">&#123;</span>
        <span class="co1">// Add a validation error, this will cause $post-&gt;validate() to return FALSE</span>
        <span class="re1">$post</span><span class="sy0">-&gt;</span><span class="me1">add_error</span><span class="br0">&#40;</span> <span class="st0">'password'</span><span class="sy0">,</span> <span class="st0">'pwd_check'</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
<p>

Error messages defined in <code>application/i18n/en_US/form_error_messages.php</code>
</p>
<pre class="code php"><span class="kw2">&lt;?php</span> <a href="http://www.php.net/defined"><span class="kw3">defined</span></a><span class="br0">&#40;</span><span class="st0">'SYSPATH'</span><span class="br0">&#41;</span> or <a href="http://www.php.net/die"><span class="kw3">die</span></a><span class="br0">&#40;</span><span class="st0">'No direct access allowed.'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$lang</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
<span class="st0">'name'</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">Array</span></a>
    <span class="br0">&#40;</span>
        <span class="st0">'required'</span> <span class="sy0">=&gt;</span> <span class="st0">'The name cannot be blank.'</span><span class="sy0">,</span>
        <span class="st0">'alpha'</span> <span class="sy0">=&gt;</span> <span class="st0">'Only alphabetic characters are allowed.'</span><span class="sy0">,</span>
        <span class="st0">'length'</span> <span class="sy0">=&gt;</span> <span class="st0">'The name must be between three and twenty letters.'</span><span class="sy0">,</span>
        <span class="st0">'default'</span> <span class="sy0">=&gt;</span> <span class="st0">'Invalid Input.'</span><span class="sy0">,</span>
    <span class="br0">&#41;</span><span class="sy0">,</span>
<span class="st0">'number'</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">Array</span></a>
    <span class="br0">&#40;</span>
        <span class="st0">'required'</span> <span class="sy0">=&gt;</span> <span class="st0">'The number cannot be blank.'</span><span class="sy0">,</span>
        <span class="st0">'numeric'</span> <span class="sy0">=&gt;</span> <span class="st0">'Only numbers are allowed.'</span><span class="sy0">,</span>
        <span class="st0">'length'</span> <span class="sy0">=&gt;</span> <span class="st0">'The number must be between three and five numerals.'</span><span class="sy0">,</span>
        <span class="st0">'default'</span> <span class="sy0">=&gt;</span> <span class="st0">'Invalid Input.'</span><span class="sy0">,</span>
    <span class="br0">&#41;</span><span class="sy0">,</span>
<span class="st0">'code'</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">Array</span></a>
    <span class="br0">&#40;</span>
        <span class="st0">'numeric'</span> <span class="sy0">=&gt;</span> <span class="st0">'Only numbers are allowed.'</span><span class="sy0">,</span>
        <span class="st0">'length'</span> <span class="sy0">=&gt;</span> <span class="st0">'The code must be exactly three numerals.'</span><span class="sy0">,</span>
        <span class="st0">'default'</span> <span class="sy0">=&gt;</span> <span class="st0">'Invalid Input.'</span><span class="sy0">,</span>
    <span class="br0">&#41;</span><span class="sy0">,</span>
<span class="st0">'password'</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">Array</span></a>
    <span class="br0">&#40;</span>
        <span class="st0">'required'</span> <span class="sy0">=&gt;</span> <span class="st0">'You must supply a password.'</span><span class="sy0">,</span>
        <span class="st0">'pwd_check'</span> <span class="sy0">=&gt;</span> <span class="st0">'The password is not correct.'</span><span class="sy0">,</span>
        <span class="st0">'default'</span> <span class="sy0">=&gt;</span> <span class="st0">'Invalid Input.'</span><span class="sy0">,</span>
    <span class="br0">&#41;</span><span class="sy0">,</span>
<span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="validating_file_uploads" id="validating_file_uploads">Validating File Uploads</a></h3>
<div class="level3">

<p>
In your controller:

</p>
<pre class="code php"><span class="co1">// uses Kohana upload helper</span>
<span class="re1">$_FILES</span> <span class="sy0">=</span> Validation<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="re1">$_FILES</span><span class="br0">&#41;</span>
	<span class="sy0">-&gt;</span><span class="me1">add_rules</span><span class="br0">&#40;</span><span class="st0">'picture'</span><span class="sy0">,</span> <span class="st0">'upload::valid'</span><span class="sy0">,</span> <span class="st0">'upload::type[gif,jpg,png]'</span><span class="sy0">,</span> <span class="st0">'upload::size[1M]'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$_FILES</span><span class="sy0">-&gt;</span><span class="me1">validate</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
	<span class="co1">// Temporary file name</span>
	<span class="re1">$filename</span> <span class="sy0">=</span> upload<span class="sy0">::</span><span class="me2">save</span><span class="br0">&#40;</span><span class="st0">'picture'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
	<span class="co1">// Resize, sharpen, and save the image</span>
	Image<span class="sy0">::</span><span class="me2">factory</span><span class="br0">&#40;</span><span class="re1">$filename</span><span class="br0">&#41;</span>
		<span class="sy0">-&gt;</span><span class="me1">resize</span><span class="br0">&#40;</span><span class="nu0">100</span><span class="sy0">,</span> <span class="nu0">100</span><span class="sy0">,</span> Image<span class="sy0">::</span><span class="me2">WIDTH</span><span class="br0">&#41;</span>
		<span class="sy0">-&gt;</span><span class="me1">save</span><span class="br0">&#40;</span>DOCROOT<span class="sy0">.</span><span class="st0">'media/pictures/'</span><span class="sy0">.</span><a href="http://www.php.net/basename"><span class="kw3">basename</span></a><span class="br0">&#40;</span><span class="re1">$filename</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="st0">'.jpg'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
	<span class="co1">// Remove the temporary file</span>
	<a href="http://www.php.net/unlink"><span class="kw3">unlink</span></a><span class="br0">&#40;</span><span class="re1">$filename</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
	<span class="co1">// Redirect back to the account page</span>
	url<span class="sy0">::</span><span class="me2">redirect</span><span class="br0">&#40;</span><span class="st0">'account/information'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexera4c8.gif?id=libraries%3Avalidation&amp;1324588202" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/validation by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


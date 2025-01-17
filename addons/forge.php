<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/addons/forge by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:17:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    addons:forge    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2008-12-11T08:46:04-0600" />
<meta name="keywords" content="addons,forge" />
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
<li class="level1"><div class="li"><span class="li"><a href="#forge_module_form_generation" class="toc">Forge Module (Form Generation)</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#creating_a_form" class="toc">Creating a form</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#adding_elements" class="toc">Adding elements</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#a_complete_form" class="toc">A complete form</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#form_methods" class="toc">Form methods</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#form_elements" class="toc">Form Elements</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#form_input" class="toc">Form_Input</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#form_checkbox" class="toc">Form_Checkbox</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#form_checklist" class="toc">Form_Checklist</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#form_dateselect" class="toc">Form_Dateselect</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#form_dropdown" class="toc">Form_Dropdown</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#form_group" class="toc">Form_Group</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#form_hidden" class="toc">Form_Hidden</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#form_password" class="toc">Form_Password</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#form_submit" class="toc">Form_Submit</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#form_textarea" class="toc">Form_Textarea</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#form_upload" class="toc">Form_Upload</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#using_custom_form_templates" class="toc">Using Custom Form Templates</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#saving_forms_as_a_library" class="toc">Saving forms as a library</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Fill in missing parts, Form_Group! </td>
	</tr>
</table>



<h1><a name="forge_module_form_generation" id="forge_module_form_generation">Forge Module (Form Generation)</a></h1>
<div class="level1">

<p>

<strong>This module is no longer distributed with Kohana versions 2.2 or later. This page will be left intact as a courtesy to existing Forge users.</strong>
</p>

<p>
The Forge module is a module to easily create and manage forms. You can create forms with built-in validation in one go. Forge coexists with the Form helpers, it doesn&#039;t replace it. Forge provides help with rendering, validating and filtering forms, the form helper provides methods to create forms.
</p>

</div>

<h2><a name="creating_a_form" id="creating_a_form">Creating a form</a></h2>
<div class="level2">

<p>

Creating a form is done by instantiating the Forge class
</p>
<pre class="code php"><span class="re1">$form</span> <span class="sy0">=</span> <span class="kw2">new</span> Forge<span class="br0">&#40;</span><span class="st0">''</span><span class="sy0">,</span> <span class="st0">'Add article'</span><span class="sy0">,</span> <span class="st0">'POST'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id'</span> <span class="sy0">=&gt;</span> <span class="st0">'article_form'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
This is the start of each form. The Forge class will accept up to four arguments, all of which are optional. The first argument is the form action, the second is the form title, the third argument is the form submittal method, and the last argument is an array of attributes. 
</p>

<p>
Here you see only three arguments being used, the last of which is obviously the attribute array. You can also set any of these attributes after the fact or on the fly by using the method below. 
</p>

<p>
Say we want to change the class and method attribute of the form.
</p>
<pre class="code php"><span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">set_attr</span><span class="br0">&#40;</span><span class="st0">'class'</span><span class="sy0">,</span> <span class="st0">'form_class'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">set_attr</span><span class="br0">&#40;</span><span class="st0">'method'</span><span class="sy0">,</span> <span class="st0">'post'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="adding_elements" id="adding_elements">Adding elements</a></h3>
<div class="level3">

<p>

Next step is adding elements.

</p>
<pre class="code php"><span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

This is the basis of adding elements. Now we set a label and add rules.
</p>
<pre class="code php"><span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="kw2">true</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">rules</span><span class="br0">&#40;</span><span class="st0">'required|length[3,40]|valid_alpha_numeric'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">value</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="a_complete_form" id="a_complete_form">A complete form</a></h3>
<div class="level3">
<pre class="code php"><span class="re1">$form</span> <span class="sy0">=</span> <span class="kw2">new</span> Forge<span class="br0">&#40;</span><span class="st0">''</span><span class="sy0">,</span> <span class="st0">'Add article'</span><span class="sy0">,</span><span class="st0">'POST'</span><span class="sy0">,</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id'</span> <span class="sy0">=&gt;</span> <span class="st0">'article_form'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">set_attr</span><span class="br0">&#40;</span><span class="st0">'class'</span><span class="sy0">,</span> <span class="st0">'form_class'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">set_attr</span><span class="br0">&#40;</span><span class="st0">'method'</span><span class="sy0">,</span> <span class="st0">'post'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="kw2">true</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">rules</span><span class="br0">&#40;</span><span class="st0">'required|length[3,40]|valid_alpha_numeric'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="br0">&#40;</span><span class="st0">'article'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="st0">'Article text'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">rules</span><span class="br0">&#40;</span><span class="st0">'required||valid_alpha_numeric'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">submit</span><span class="br0">&#40;</span><span class="st0">'submit'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">if</span><span class="br0">&#40;</span><span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">validate</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">title</span><span class="sy0">-&gt;</span><span class="me1">value</span><span class="sy0">;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">article</span><span class="sy0">-&gt;</span><span class="me1">value</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
<span class="kw1">else</span>
<span class="br0">&#123;</span>
    <span class="co1">// in Kohana &lt; 2.2</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">html</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
    <span class="co1">// in Kohana 2.2</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="form_methods" id="form_methods">Form methods</a></h3>
<div class="level3">

</div>

<h4><a name="set_attr" id="set_attr">set_attr()</a></h4>
<div class="level4">

<p>

<code>set_attr()</code> set an attribute of the &lt;form&gt; element.
There are two parameters:
</p>
<ul>
<li class="level1"><div class="li"> <strong>[array]/[string]</strong> Either the attribute name or an array of attribute names and values</div>
</li>
<li class="level1"><div class="li"> <strong>[string]</strong> Attribute value (Default NULL)</div>
</li>
</ul>
<pre class="code php"><span class="re1">$form</span> <span class="sy0">=</span> <span class="kw2">new</span> Forge<span class="br0">&#40;</span><span class="st0">''</span><span class="sy0">,</span> <span class="st0">'Add article'</span><span class="sy0">,</span> <span class="st0">'post'</span><span class="sy0">,</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id'</span><span class="sy0">,</span> <span class="st0">'article_form'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">set_attr</span><span class="br0">&#40;</span><span class="st0">'class'</span><span class="sy0">,</span> <span class="st0">'form_class'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">set_attr</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'class'</span> <span class="sy0">=&gt;</span> <span class="st0">'form_class'</span><span class="sy0">,</span><span class="st0">'id'</span> <span class="sy0">=&gt;</span> <span class="st0">'article_form'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h4><a name="validate" id="validate">validate()</a></h4>
<div class="level4">

<p>

<code>validate()</code> validates a form, takes no arguments. Returns boolean.
</p>

</div>

<h4><a name="as_array" id="as_array">as_array()</a></h4>
<div class="level4">

<p>

<code>as_array()</code> returns an array with input names and values. Useful for putting your form values into the database.
</p>

</div>

<h4><a name="error_format" id="error_format">error_format()</a></h4>
<div class="level4">

</div>

<h4><a name="html" id="html">html()</a></h4>
<div class="level4">

<p>

Returns a rendered form as a string.
</p>
<div class='box red'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<div class='box_content'><p>
In Kohana 2.2 changed to render()
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


</div>

<h2><a name="form_elements" id="form_elements">Form Elements</a></h2>
<div class="level2">

<p>

Note that all elements except for Form_Group inherit from Form_Input so methods below apply to all of them.
</p>

</div>

<h3><a name="form_input" id="form_input">Form_Input</a></h3>
<div class="level3">

</div>

<h4><a name="create_input" id="create_input">Create input</a></h4>
<div class="level4">

<p>

Create an input. Method is chainable.

</p>
<pre class="code php"><span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="br0">&#40;</span><span class="st0">'input_name'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h4><a name="input_label" id="input_label">Input label</a></h4>
<div class="level4">

<p>

Show the field label or not. If the argument is boolean the input label will be based on the input name. Also you can pass the custom label name. Method is chainable.

</p>
<pre class="code php"><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
 or

</p>
<pre class="code php"><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="st0">'Custom input name'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h4><a name="input_validation" id="input_validation">Input validation</a></h4>
<div class="level4">

<p>

Set the validation rules for the field. Method is chainable.

</p>
<pre class="code php"><span class="sy0">-&gt;</span><span class="me1">rules</span><span class="br0">&#40;</span><span class="st0">'list|of|validation|rules'</span><span class="br0">&#41;</span></pre>
</div>

<h4><a name="input_validation_using_kohana_validation_helper" id="input_validation_using_kohana_validation_helper">Input validation using Kohana Validation helper</a></h4>
<div class="level4">

<p>

You can utlize rules from <a href="../helpers/valid.php" class="wikilink1" title="helpers:valid">Validation helper</a> by prefixing the rule with valid_.  Thus, a rule normally accessible by calling valid::ip would be utilized as: 

</p>
<pre class="code php"><span class="sy0">-&gt;</span><span class="me1">rules</span><span class="br0">&#40;</span><span class="st0">'valid_ip'</span><span class="br0">&#41;</span></pre>
</div>

<h4><a name="input_value" id="input_value">Input value</a></h4>
<div class="level4">

<p>

Set the default value for the element. Method is chainable.

</p>
<pre class="code php"><span class="sy0">-&gt;</span><span class="me1">value</span><span class="br0">&#40;</span><span class="st0">'input_value'</span><span class="br0">&#41;</span></pre>
</div>

<h4><a name="extra_attributes" id="extra_attributes">Extra Attributes</a></h4>
<div class="level4">

<p>

You can add extra attributes to input and all other form elements by using attribute name.
</p>

<p>
<strong>example</strong>

</p>
<pre class="code php"><span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">class</span><span class="br0">&#40;</span><span class="st0">'input_size'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h4><a name="example" id="example">Example</a></h4>
<div class="level4">
<pre class="code php"><span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="br0">&#40;</span><span class="st0">'title'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">rules</span><span class="br0">&#40;</span><span class="st0">'required|length[0,255]'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">value</span><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">page</span><span class="sy0">-&gt;</span><span class="me1">title</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="form_checkbox" id="form_checkbox">Form_Checkbox</a></h3>
<div class="level3">

<p>
By default a checkbox checked status is off to turn on just call the checked method and set to true.
</p>

</div>

<h4><a name="example1" id="example1">Example</a></h4>
<div class="level4">
<pre class="code php"><span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">checkbox</span><span class="br0">&#40;</span><span class="st0">'test'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">value</span><span class="br0">&#40;</span><span class="st0">'1'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">checked</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="form_checklist" id="form_checklist">Form_Checklist</a></h3>
<div class="level3">

</div>

<h4><a name="example2" id="example2">Example</a></h4>
<div class="level4">
<pre class="code php"><span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">checklist</span><span class="br0">&#40;</span><span class="st0">'blocks'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="st0">'Blocks available'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">options</span><span class="br0">&#40;</span><span class="re1">$option</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">rules</span><span class="br0">&#40;</span><span class="st0">'required'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
* $option should be sent as an array with each value in the format {&#039;value&#039; = array(&#039;label&#039;, true|false)} where &#039;value&#039; will be the value of the checkbox, &#039;label&#039; will be used as the label and the true|false indicates if the item is checked by default.
</p>

</div>

<h3><a name="form_dateselect" id="form_dateselect">Form_Dateselect</a></h3>
<div class="level3">

</div>

<h4><a name="example3" id="example3">Example</a></h4>
<div class="level4">
<pre class="code php"><span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">dateselect</span><span class="br0">&#40;</span><span class="st0">'date'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">years</span><span class="br0">&#40;</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="br0">&#40;</span><span class="st0">'Y'</span><span class="br0">&#41;</span><span class="nu0">-3</span><span class="sy0">,</span> <a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="br0">&#40;</span><span class="st0">'Y'</span><span class="br0">&#41;</span><span class="nu0">+5</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">value</span><span class="br0">&#40;</span><a href="http://www.php.net/strtotime"><span class="kw3">strtotime</span></a><span class="br0">&#40;</span><span class="re1">$your_date_var</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
* In the above example we are instructing Forge to generate years ranging from 3 years prior and 5 years after the current year.
</p>

<p>
* Dateselect uses Unix timestamp format internally to calculate dates.  To pass a MySQL date field to the <em>value()</em> method, wrap it in the <acronym title="Hypertext Preprocessor">PHP</acronym> <em>strtotime</em> function.
</p>

</div>

<h3><a name="form_dropdown" id="form_dropdown">Form_Dropdown</a></h3>
<div class="level3">

<p>
You can set dropdown with single array or with two-dimensional array. The key will be the option value and the value will be the option text.
</p>

</div>

<h4><a name="example4" id="example4">Example</a></h4>
<div class="level4">
<pre class="code php"><span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">dropdown</span><span class="br0">&#40;</span><span class="st0">'pizzas'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">options</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'Hawaiian'</span><span class="sy0">,</span> <span class="st0">'Margarita'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">selected</span><span class="br0">&#40;</span><span class="st0">'1'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre><pre class="code php"><span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">dropdown</span><span class="br0">&#40;</span><span class="st0">'pizzas'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">options</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'HA'</span><span class="sy0">=&gt;</span><span class="st0">'Hawaiian'</span><span class="sy0">,</span> <span class="st0">'MA'</span><span class="sy0">=&gt;</span><span class="st0">'Margarita'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">selected</span><span class="br0">&#40;</span><span class="st0">'MA'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="form_group" id="form_group">Form_Group</a></h3>
<div class="level3">

<p>

Is an instance of the Forge class so you can have groups in your forms. All methods of the Forge class are available save html(). 
</p>

</div>

<h4><a name="example5" id="example5">Example</a></h4>
<div class="level4">
<pre class="code php"><span class="re1">$group</span> <span class="sy0">=</span> <span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">group</span><span class="br0">&#40;</span><span class="st0">'pizzas'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$group</span><span class="sy0">-&gt;</span><span class="me1">dropdown</span><span class="br0">&#40;</span><span class="st0">'pizzas'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">options</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'Hawaiian'</span><span class="sy0">,</span> <span class="st0">'Margarita'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">selected</span><span class="br0">&#40;</span><span class="st0">'1'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$group</span><span class="sy0">-&gt;</span><span class="me1">dropdown</span><span class="br0">&#40;</span><span class="st0">'bases'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">options</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'Thin'</span><span class="sy0">,</span> <span class="st0">'Pan'</span><span class="sy0">,</span> <span class="st0">'Stuffed'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">selected</span><span class="br0">&#40;</span><span class="st0">'2'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
In the view groups get special attention and are rendered differently. You can use groups for example when you need to group some form elements within a `&lt;fieldset&gt;` tag.
</p>

</div>

<h3><a name="form_hidden" id="form_hidden">Form_Hidden</a></h3>
<div class="level3">

<p>

In the default template hidden forms are added straight after the &lt;form&gt; tag.
</p>

</div>

<h4><a name="example6" id="example6">Example</a></h4>
<div class="level4">
<pre class="code php"><span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">hidden</span><span class="br0">&#40;</span><span class="st0">'id'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">value</span><span class="br0">&#40;</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="form_password" id="form_password">Form_Password</a></h3>
<div class="level3">

<p>

The method &#039;matches&#039; matches a form field with another form field.
</p>

</div>

<h4><a name="example7" id="example7">Example</a></h4>
<div class="level4">
<pre class="code php"><span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">password</span><span class="br0">&#40;</span><span class="st0">'password'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">password</span><span class="br0">&#40;</span><span class="st0">'passconf'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="st0">'Password Confirmation'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">rules</span><span class="br0">&#40;</span><span class="st0">'required|length[5,32]'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">matches</span><span class="br0">&#40;</span><span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">password</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="form_submit" id="form_submit">Form_Submit</a></h3>
<div class="level3">

</div>

<h4><a name="example8" id="example8">Example</a></h4>
<div class="level4">
<pre class="code php"><span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">submit</span><span class="br0">&#40;</span><span class="st0">'Submit Button Name'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="form_textarea" id="form_textarea">Form_Textarea</a></h3>
<div class="level3">

</div>

<h4><a name="example9" id="example9">Example</a></h4>
<div class="level4">
<pre class="code php"><span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">textarea</span><span class="br0">&#40;</span><span class="st0">'description'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">rules</span><span class="br0">&#40;</span><span class="st0">'length[0,255]'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">value</span><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">page</span><span class="sy0">-&gt;</span><span class="me1">description</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="form_upload" id="form_upload">Form_Upload</a></h3>
<div class="level3">

</div>

<h4><a name="example10" id="example10">Example</a></h4>
<div class="level4">

<p>

If the file exists and the second argument of <code>upload()</code> method is TRUE, it will overwrite this file. Otherwise it will create an unique name.

</p>
<pre class="code php"><span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">upload</span><span class="br0">&#40;</span><span class="st0">'file'</span><span class="sy0">,</span> <span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">rules</span><span class="br0">&#40;</span><span class="st0">'required|size[200KB]|allow[jpg,png,gif]'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

The default upload path is configured your upload.php config file (system/config/upload.php).
</p>

</div>

<h2><a name="using_custom_form_templates" id="using_custom_form_templates">Using Custom Form Templates</a></h2>
<div class="level2">

<p>
If you need more control over your form, but still want to take advantage of the automated validation and field re-population provided by the Forge library, you can utilize a custom form template.  This allows you to design the form however you want using <acronym title="HyperText Markup Language">HTML</acronym>.
</p>

<p>
from: <a href="http://forumarchive.kohanaphp.com/index.php/topic,616.msg3841.php#msg3841" class="urlextern" title="http://forumarchive.kohanaphp.com/index.php/topic,616.msg3841.php#msg3841"  rel="nofollow">http://forumarchive.kohanaphp.com/index.php/topic,616.msg3841.php#msg3841</a>
</p>

</div>

<h4><a name="example11" id="example11">Example</a></h4>
<div class="level4">

<p>
<strong>Controller:</strong> application/controllers/your_controller.php
</p>
<pre class="code php"><span class="re1">$form</span> <span class="sy0">=</span> <span class="kw2">new</span> Forge<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="br0">&#40;</span><span class="st0">'username'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">rules</span><span class="br0">&#40;</span><span class="st0">'required'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">password</span><span class="br0">&#40;</span><span class="st0">'password'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">rules</span><span class="br0">&#40;</span><span class="st0">'required'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">validate</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <span class="co1">// Do stuff</span>
<span class="br0">&#125;</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$form</span><span class="sy0">-&gt;</span><span class="me1">html</span><span class="br0">&#40;</span><span class="st0">'login_form'</span><span class="sy0">,</span> <span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span>  <span class="co1">// Only this is different, specifies to use a custom form</span></pre>
<p>
<strong>View:</strong> application/views/login_form.php
</p>
<pre class="code php"><span class="sy0">&lt;</span>form method<span class="sy0">=</span><span class="st0">&quot;post&quot;</span> action<span class="sy0">=</span><span class="st0">&quot;&lt;?= url::site('login') ?&gt;&quot;</span><span class="sy0">&gt;</span>
    <span class="kw2">&lt;?</span><span class="sy0">=</span> <span class="re1">$username</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="kw2">?&gt;</span>
    <span class="sy0">&lt;</span>br <span class="sy0">/&gt;</span>
    <span class="kw2">&lt;?</span><span class="sy0">=</span> <span class="re1">$username</span><span class="sy0">-&gt;</span><span class="me1">html</span><span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="kw2">?&gt;</span>
    <span class="sy0">&lt;</span>br <span class="sy0">/&gt;</span>
    <span class="kw2">&lt;?</span><span class="sy0">=</span> <span class="re1">$username_errors</span> <span class="kw2">?&gt;</span>
    <span class="sy0">&lt;</span>br <span class="sy0">/&gt;&lt;</span>br <span class="sy0">/&gt;</span>
    <span class="kw2">&lt;?</span><span class="sy0">=</span> <span class="re1">$password</span><span class="sy0">-&gt;</span><span class="me1">label</span><span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="kw2">?&gt;</span>
    <span class="sy0">&lt;</span>br <span class="sy0">/&gt;</span>
    <span class="kw2">&lt;?</span><span class="sy0">=</span> <span class="re1">$password</span><span class="sy0">-&gt;</span><span class="me1">html</span><span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="kw2">?&gt;</span>
    <span class="sy0">&lt;</span>br <span class="sy0">/&gt;</span>
    <span class="kw2">&lt;?</span><span class="sy0">=</span> <span class="re1">$password_errors</span> <span class="kw2">?&gt;</span>
    <span class="sy0">&lt;</span>br <span class="sy0">/&gt;</span>
    <span class="sy0">&lt;</span>input type<span class="sy0">=</span><span class="st0">&quot;submit&quot;</span> value<span class="sy0">=</span><span class="st0">&quot;Login&quot;</span> <span class="sy0">/&gt;</span>
<span class="sy0">&lt;/</span>form<span class="sy0">&gt;</span></pre>
<p>
<strong>Note:</strong> You don&#039;t have to use <code>→label()</code>. You can write the <acronym title="HyperText Markup Language">HTML</acronym> for label or form input fields directly into your form view (e.g. <code>&lt;label for=”…”&gt;</code>). Use <code>$username→value</code> to fill in the values for input fields.
</p>

</div>

<h2><a name="saving_forms_as_a_library" id="saving_forms_as_a_library">Saving forms as a library</a></h2>
<div class="level2">

<p>
Using Forge you can save forms as a library and thus have access to your form throughout your application. See <a href="http://learn.kohanaphp.com/2008/03/13/saving-forms-as-libraries/" class="urlextern" title="http://learn.kohanaphp.com/2008/03/13/saving-forms-as-libraries/"  rel="nofollow">http://learn.kohanaphp.com/2008/03/13/saving-forms-as-libraries/</a> for a short tutorial.

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer6b40.gif?id=addons%3Aforge&amp;1324588306" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/addons/forge by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:17:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


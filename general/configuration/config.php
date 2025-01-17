<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/general/configuration/config by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:15:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    general:configuration:config    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-06-19T11:55:17-0500" />
<meta name="keywords" content="general,configuration,config" />
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
<li class="level1"><div class="li"><span class="li"><a href="#core_configuration" class="toc">Core Configuration</a></span></div>
<ul class="toc">
<li class="clear">

<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#site_domain" class="toc">site_domain</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#site_protocol" class="toc">site_protocol</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#index_page" class="toc">index_page</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#url_suffix" class="toc">url_suffix</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#internal_cache" class="toc">internal_cache</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#output_compression" class="toc">output_compression</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#global_xss_filtering" class="toc">global_xss_filtering</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#enable_hooks" class="toc">enable_hooks</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#log_threshold" class="toc">log_threshold</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#log_directory" class="toc">log_directory</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#display_errors" class="toc">display_errors</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#render_stats" class="toc">render_stats</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#extension_prefix" class="toc">extension_prefix</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#modules" class="toc">modules</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">Create the rest of the config option descriptions.</td>
	</tr>
</table>



<h1><a name="core_configuration" id="core_configuration">Core Configuration</a></h1>
<div class="level1">

<p>
These are the options available in the core configuration file <code>config.php</code>.

</p>
<ul>
<li class="level1"><div class="li"> site_domain</div>
</li>
<li class="level1"><div class="li"> site_protocol</div>
</li>
<li class="level1"><div class="li"> index_page</div>
</li>
<li class="level1"><div class="li"> url_suffix</div>
</li>
<li class="level1"><div class="li"> internal_cache</div>
</li>
<li class="level1"><div class="li"> output_compression</div>
</li>
<li class="level1"><div class="li"> global_xss_filtering</div>
</li>
<li class="level1"><div class="li"> enable_hooks</div>
</li>
<li class="level1"><div class="li"> log_threshold</div>
</li>
<li class="level1"><div class="li"> log_directory </div>
</li>
<li class="level1"><div class="li"> display_errors</div>
</li>
<li class="level1"><div class="li"> render_stats</div>
</li>
<li class="level1"><div class="li"> extension_prefix</div>
</li>
<li class="level1"><div class="li"> modules</div>
</li>
</ul>

</div>

<h3><a name="site_domain" id="site_domain">site_domain</a></h3>
<div class="level3">

<p>
Either the domain, domain+path, or just path of the site.
</p>
<pre class="code php"><span class="co1">// All are valid values</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'site_domain'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'example.com/'</span><span class="sy0">;</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'site_domain'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'example.com/kohana/'</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Using this option requires that you have $config['site_protocol'] set.</span>
<span class="co1">// The domain will automatically be detected in this case.</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'site_domain'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'kohana/'</span><span class="sy0">;</span></pre>
</div>

<h3><a name="site_protocol" id="site_protocol">site_protocol</a></h3>
<div class="level3">

<p>
The default protocol to be used in URIs throughout your application.
</p>

<p>
This option can be left blank, and whatever is currently in use will be used.
</p>
<pre class="code php"><span class="co1">// Given the current URI for the request is &quot;http://example.com/&quot;, the protocol will default to &quot;http&quot;.</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'site_protocol'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">''</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Unless specified otherwise, URIs will use the https protocol.</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'site_protocol'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'https'</span><span class="sy0">;</span></pre>
</div>

<h3><a name="index_page" id="index_page">index_page</a></h3>
<div class="level3">

<p>
The name of the front controller, which, unless you&#039;re swapping stuff around, will be <code>index.php</code>.
</p>

<p>
The whole point of <acronym title="Uniform Resource Identifier">URI</acronym> segments is to avoid stuff like this and improve your SEO. <acronym title="Uniform Resource Locator">URL</acronym> rewriting should be used to this can be left blank.
</p>
<pre class="code php"><span class="co1">// Will yield page links like: http://example.com/page/link</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'index_page'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">''</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// If you're not using URL rewriting, you need to have the front controller specified.</span>
<span class="co1">// Will yield page links like: http://example.com/index.php/page/link &lt;-- fugly.</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'index_page'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'index.php'</span><span class="sy0">;</span></pre>
</div>

<h3><a name="url_suffix" id="url_suffix">url_suffix</a></h3>
<div class="level3">

<p>
A file suffix to append to all URLs. Used to “fake” a file extension.
The purpose is to allow dynamic pages to appear to be static pages.
</p>

<p>
A more esoteric usage could be to confuse bots, by appending ”.asp” for example. 
</p>
<pre class="code php"><span class="co1">// Will yield page links like: http://example.com/articles/my_first_article.php</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'url_suffix'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'.php'</span><span class="sy0">;</span></pre>
</div>

<h3><a name="internal_cache" id="internal_cache">internal_cache</a></h3>
<div class="level3">

<p>
Enables the store of filepaths and config entries across requests so Kohana doesn&#039;t need to update every request. Set this to the number of seconds you want to cache  file paths and config entries. This eliminates the need to search for file and module paths, significantly speeding up your application – especially when using multiple modules.

</p>
<pre class="code php"><span class="co1">// Will enable the cache for 60 seconds.</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'internal_cache'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="nu0">60</span><span class="sy0">;</span></pre>
</div>

<h3><a name="output_compression" id="output_compression">output_compression</a></h3>
<div class="level3">

<p>
Enables compression of data sent to the browser. To work, the browser must be able to handle the compressed format - (All modern browsers do, <acronym title="Internet Explorer 6">IE6</acronym> may barf).
</p>

<p>
Enabling this option can greatly reduce bandwidth. Especially for pages which are mostly <acronym title="HyperText Markup Language">HTML</acronym> text.
</p>

<p>
Note: <acronym title="Hypertext Preprocessor">PHP</acronym> can be automatically configured to do the same thing, by setting &#039;zlib.output_compression&#039;, &#039;On&#039; in <acronym title="Hypertext Preprocessor">PHP</acronym>.ini.
If you cannot change your server <acronym title="Hypertext Preprocessor">PHP</acronym>.ini, then you should use Kohana&#039;s output compression.
</p>

<p>
DO NOT use both at the same time, the output data will be corrupted.
</p>
<pre class="code php"><span class="co1">// FALSE to disable, 1 - 9 for desired compression level, 9 is the maximum and may chew CPU.</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'output_compression'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="nu0">5</span><span class="sy0">;</span></pre>
</div>

<h3><a name="global_xss_filtering" id="global_xss_filtering">global_xss_filtering</a></h3>
<div class="level3">

<p>
By default, site-wide global xss filtering is enabled, and all user inputs will be sanitized using the Input library&#039;s xss_clean() method.

</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'global_xss_filtering'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="kw2">TRUE</span><span class="sy0">;</span></pre>
<p>
To disable global_xss_filtering, simply set it to FALSE.
</p>

<p>
If, when you downloaded Kohana, you selected the optional HTMLPurifier vendor tool, then you can use it instead of the default xss_clean() method: 

</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'global_xss_filtering'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'htmlpurifier'</span><span class="sy0">;</span></pre>
</div>

<h3><a name="enable_hooks" id="enable_hooks">enable_hooks</a></h3>
<div class="level3">

<p>
Enabling this option will either include all files in the <code>hooks</code> directory or if specified with an array - specific files.

</p>
<pre class="code php"><span class="co1">// Will include power.php only</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'enable_hooks'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'power.php'</span><span class="br0">&#41;</span></pre>
</div>

<h3><a name="log_threshold" id="log_threshold">log_threshold</a></h3>
<div class="level3">

<p>
Sets the logging level within Kohana.
 *  0 - Disable logging
 *  1 - Errors and exceptions
 *  2 - Warnings
 *  3 - Notices
 *  4 - Debugging

</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'log_threshold'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="nu0">1</span><span class="sy0">;</span></pre>
</div>

<h3><a name="log_directory" id="log_directory">log_directory</a></h3>
<div class="level3">

<p>
Specifies where to store application logs.

</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'log_directory'</span><span class="br0">&#93;</span> <span class="sy0">=</span> APPPATH<span class="sy0">.</span><span class="st0">'logs'</span><span class="sy0">;</span></pre>
</div>

<h3><a name="display_errors" id="display_errors">display_errors</a></h3>
<div class="level3">

<p>
Turning this off will disable all outputting of errors to the user. It will however be logged to the log directory.

</p>

</div>

<h3><a name="render_stats" id="render_stats">render_stats</a></h3>
<div class="level3">

<p>
Whether or not to render the statistics information in the final page output.
</p>

<p>
<strong>Example</strong>

</p>
<pre class="code php"><span class="co1">// TRUE is default, set to FALSE to disable it.</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'render_stats'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="kw2">TRUE</span><span class="sy0">;</span></pre>
<p>
The following items are normally replaced in <code><a href="http://doc.kohanaphp.com/core/kohana" class="urlextern" title="http://doc.kohanaphp.com/core/kohana"  rel="nofollow">Kohana</a>::render()</code>.

</p>
<pre class="code php"><a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
	<span class="st0">'{kohana_version}'</span><span class="sy0">,</span>
	<span class="st0">'{kohana_codename}'</span><span class="sy0">,</span>
	<span class="st0">'{execution_time}'</span><span class="sy0">,</span>
	<span class="st0">'{memory_usage}'</span><span class="sy0">,</span>
	<span class="st0">'{included_files}'</span><span class="sy0">,</span>
<span class="br0">&#41;</span></pre>

<div class='box red'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<div class='box_content'><p>
Keep in mind; having <code>render_stats</code> set to false <strong>will leave the raw replacement strings in your page</strong>, visible to all. It does not replace them with empty strings—it just disables the replacement. So take them out if you&#039;re not using them!
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


<p>
As an aside, if you still want some string replacements, but either want just a sub-selection of these, or to use your own, an option would be to create a hook using <code><a href="http://doc.kohanaphp.com/core/event" class="urlextern" title="http://doc.kohanaphp.com/core/event"  rel="nofollow">Event</a>::<a href="http://doc.kohanaphp.com/core/event#add_before" class="urlextern" title="http://doc.kohanaphp.com/core/event#add_before"  rel="nofollow">add_before()</a></code> on <code><a href="http://doc.kohanaphp.com/general/events" class="urlextern" title="http://doc.kohanaphp.com/general/events"  rel="nofollow">system.display</a></code>.
</p>

</div>

<h3><a name="extension_prefix" id="extension_prefix">extension_prefix</a></h3>
<div class="level3">

<p>
When extending a core component, i.e. <a href="http://doc.kohanaphp.com/general/libraries" class="urlextern" title="http://doc.kohanaphp.com/general/libraries"  rel="nofollow">libraries</a> or <a href="http://doc.kohanaphp.com/general/helpers" class="urlextern" title="http://doc.kohanaphp.com/general/helpers"  rel="nofollow">helpers</a>, this will be used as the prefix for the file names.
</p>

<p>
For example, if you want to extend <code>Controller_Core</code>:

</p>
<pre class="code php"><span class="co1">// This is the default</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'extension_prefix'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'MY_'</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// But you could set it to this</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'extension_prefix'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'Ext_'</span><span class="sy0">;</span></pre>
<p>
Given you decide to leave your prefix at the default, you would put the following code into <code>MY_Controller.php</code> under the <code><a href="http://doc.kohanaphp.com/general/filesystem" class="urlextern" title="http://doc.kohanaphp.com/general/filesystem"  rel="nofollow">libraries</a></code> folder in your <code><a href="http://doc.kohanaphp.com/general/filesystem" class="urlextern" title="http://doc.kohanaphp.com/general/filesystem"  rel="nofollow">application</a></code> directory:

</p>
<pre class="code php"><span class="kw2">&lt;?php</span> <a href="http://www.php.net/defined"><span class="kw3">defined</span></a><span class="br0">&#40;</span><span class="st0">'SYSPATH'</span><span class="br0">&#41;</span> or <a href="http://www.php.net/die"><span class="kw3">die</span></a><span class="br0">&#40;</span><span class="st0">'No direct script access.'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="coMULTI">/**
 * This is my custom controller with awesome stuff that I need.
 *   File name: MY_Controller.php
 */</span>
<span class="kw2">class</span> Controller <span class="kw2">extends</span> Controller_Core <span class="br0">&#123;</span>
    <span class="co1">// Blah</span>
<span class="br0">&#125;</span></pre>
</div>

<h3><a name="modules" id="modules">modules</a></h3>
<div class="level3">

<p>
Additional resource paths, or “modules”.

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../../lib/exe/indexer52c0.gif?id=general%3Aconfiguration%3Aconfig&amp;1324588250" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/general/configuration/config by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:15:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


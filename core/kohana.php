<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/core/kohana by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    core:kohana    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-08-21T07:21:43-0500" />
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
<li class="level1"><div class="li"><span class="li"><a href="#kohana_class" class="toc">Kohana Class</a></span></div>
<ul class="toc">
<li class="clear">

<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#character_set" class="toc">Character set</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#methods_config" class="toc">Methods (Config)</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#retrieve_config_item" class="toc">Retrieve config item</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#set_config_item" class="toc">Set config item</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#load_a_config_file" class="toc">Load a config file</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#clear_cached_config" class="toc">Clear cached config</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#get_include_paths" class="toc">Get include paths</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#methods_log" class="toc">Methods (Log)</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#write_a_log_message" class="toc">Write a log message</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#save_all_log_entries" class="toc">Save all log entries</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#log_directory" class="toc">Log directory</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#methods_other" class="toc">Methods (Other)</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#initialize_and_load_kohana_superobject" class="toc">Initialize and Load Kohana superobject</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#debugging_information" class="toc">Debugging information</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#backtrace" class="toc">backtrace</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#use_language_strings" class="toc">Use language strings</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#find_key_strings" class="toc">find key strings</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#listing_files" class="toc">Listing files</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#finding_files" class="toc">finding files</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#user_agent_info" class="toc">user agent info</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">Update for 2.2 proofread </td>
	</tr>
</table>



<h1><a name="kohana_class" id="kohana_class">Kohana Class</a></h1>
<div class="level1">

<p>

The Kohana class is at the center of Kohana. It loads up the Router, dispatches to the controller and does the final output.
</p>


<div class='box'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<div class='box_content'><p>
This class provides static methods for retrieving or setting items related to: <strong>Configuration</strong>, <strong>Logging</strong>, <strong>User Agent</strong>
</p>

<p>
This functionality <strong>was previously provided</strong> by the Config, Log and User_Agent Libraries respectively.
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


</div>

<h3><a name="character_set" id="character_set">Character set</a></h3>
<div class="level3">

<p>

The class also sets a utf-8 header. If you want a different charset you can override it by placing this in for example your controller. The browser will interpret the page with the new charset.
</p>
<pre class="code php"><a href="http://www.php.net/header"><span class="kw3">header</span></a><span class="br0">&#40;</span><span class="st0">'Content-type: text/html; charset=iso-8859-1'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="methods_config" id="methods_config">Methods (Config)</a></h2>
<div class="level2">

<p>

For working with <a href="../general/configuration.php" class="wikilink1" title="general:configuration">Config</a> files. You can retrieve and set configuration items at run-time.
</p>

<p>
Configuration items are entries in the main <code>config</code> array and are referenced by; &#039;group.key&#039; a dotted key notation. 
</p>

</div>

<h3><a name="retrieve_config_item" id="retrieve_config_item">Retrieve config item</a></h3>
<div class="level3">

<p>

<code>config($key, $slash = FALSE, $required = TRUE)</code> retrieves a configuration item.
</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$key</code> specifies the item to fetch. A dot notation is used &#039;group_name.key_name&#039; </div>
</li>
<li class="level1"><div class="li"> <strong>[boolean]</strong> <code>$slash</code> specifies if a <code>/</code> must be added to the end of the item. Default is <code>FALSE</code></div>
</li>
<li class="level1"><div class="li"> <strong>[boolean]</strong> <code>$required</code> specifies if an item is required or not. Default is <code>TRUE</code></div>
</li>
<li class="level1"><div class="li"> returns <strong>[mixed]</strong> The value of the configuration item for <code>$key</code>. May be <code>string</code>, <code>boolean</code> or <code>array</code></div>
</li>
</ul>
<pre class="code php">Kohana<span class="sy0">::</span><span class="me2">config</span><span class="br0">&#40;</span><span class="st0">'core.output_compression'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns boolean TRUE if output compression is enabled in the main application config file.</span>
<span class="co1">//</span>
Kohana<span class="sy0">::</span><span class="me2">config</span><span class="br0">&#40;</span><span class="st0">'session.driver'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns the string value for the current driver of the loaded Session.</span></pre>
</div>

<h3><a name="set_config_item" id="set_config_item">Set config item</a></h3>
<div class="level3">

<p>

<code>config_set($key, $value)</code> sets a configuration item.
</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$key</code> Specifies the key of the item to set. A dot notation is used &#039;group_name.key_name&#039; </div>
</li>
<li class="level1"><div class="li"> <strong>[mixed]</strong> <code>$value</code> specifies the value of the item to set. May be <code>string</code> or <code>array</code></div>
</li>
<li class="level1"><div class="li"> returns <strong>[boolean]</strong> <code>TRUE</code> if setting item succeeded, <code>FALSE</code> if it failed.</div>
</li>
</ul>
<pre class="code php">Kohana<span class="sy0">::</span><span class="me2">config_set</span><span class="br0">&#40;</span><span class="st0">'core.output_compression'</span><span class="sy0">,</span> <span class="kw2">FALSE</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns boolean TRUE if output compression is disabled in core config.</span>
<span class="co1">//</span>
Kohana<span class="sy0">::</span><span class="me2">config_set</span><span class="br0">&#40;</span><span class="st0">'session.driver'</span><span class="sy0">,</span> <span class="st0">'cookie'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//returns FALSE if session driver config could not be set to ''cookie''</span></pre>
</div>

<h3><a name="load_a_config_file" id="load_a_config_file">Load a config file</a></h3>
<div class="level3">

<p>

<code>config_load($name, $required = TRUE)</code> loads a configuration file from disk.
</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$name</code> Specifies the name of the config file (without any path information)</div>
</li>
<li class="level1"><div class="li"> <strong>[boolean]</strong> <code>$required</code> Specifies if the file to be loaded is required, default is <code>TRUE</code></div>
</li>
<li class="level1"><div class="li"> returns <strong>[array]</strong> The specified config file data.</div>
</li>
</ul>
<pre class="code php">Kohana<span class="sy0">::</span><span class="me2">config_load</span><span class="br0">&#40;</span><span class="st0">'locale'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="clear_cached_config" id="clear_cached_config">Clear cached config</a></h3>
<div class="level3">

<p>
<code>config_clear($group)</code> clears a config group from the cached configuration
</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$group</code> Specifies the name of the configuration group</div>
</li>
<li class="level1"><div class="li"> returns <strong>[void]</strong></div>
</li>
</ul>
<pre class="code php">Kohana<span class="sy0">::</span><span class="me2">config_clear</span><span class="br0">&#40;</span><span class="st0">'locale'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="get_include_paths" id="get_include_paths">Get include paths</a></h3>
<div class="level3">

<p>
<code>include_paths($process = FALSE)</code> Retrieves the included file paths. 
</p>
<ul>
<li class="level1"><div class="li"> <strong>[boolean]</strong> <code>$process</code> Specifies if the <code>include_paths</code> should be re-processed. Default is <code>FALSE</code></div>
</li>
<li class="level1"><div class="li"> returns <strong>[array]</strong> File paths. <code>APPPATH</code> first, all <code>MODPATH</code> in the order configured, <code>SYSPATH</code> last.</div>
</li>
</ul>
<pre class="code php"><span class="re1">$ipaths</span> <span class="sy0">=</span> Kohana<span class="sy0">::</span><span class="me2">include_paths</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="methods_log" id="methods_log">Methods (Log)</a></h2>
<div class="level2">

<p>

For customizing your applications logging. You can write errors or notices to the system log at run-time.
</p>

</div>

<h3><a name="write_a_log_message" id="write_a_log_message">Write a log message</a></h3>
<div class="level3">

<p>

<code>log($type, $message)</code> writes a formatted text message to the configured application log file.
</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$type</code> specifies the type of error to log. One of <code>error</code>, <code>alert</code>, <code>info</code>, <code>debug</code> </div>
</li>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$message</code> The message to be logged. </div>
</li>
<li class="level1"><div class="li"> returns <strong>[void]</strong> </div>
</li>
</ul>
<pre class="code php">Kohana<span class="sy0">::</span><a href="http://www.php.net/log"><span class="kw3">log</span></a><span class="br0">&#40;</span><span class="st0">'error'</span><span class="sy0">,</span> <span class="st0">&quot;email $email_id could not be sent&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">//</span>
Kohana<span class="sy0">::</span><a href="http://www.php.net/log"><span class="kw3">log</span></a><span class="br0">&#40;</span><span class="st0">'info'</span><span class="sy0">,</span> <span class="st0">'Admin logged in successfully'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="save_all_log_entries" id="save_all_log_entries">Save all log entries</a></h3>
<div class="level3">

<p>
<code>log_save()</code> Writes all current entries to the configured application log file. Typically there is no need to call this manually.

</p>
<ul>
<li class="level1"><div class="li"> returns <strong>[void]</strong> </div>
</li>
</ul>
<pre class="code php">Kohana<span class="sy0">::</span><span class="me2">log_save</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="log_directory" id="log_directory">Log directory</a></h3>
<div class="level3">

<p>
<code>log_directory($dir = NULL)</code> Sets or retrieves the application logging directory.
</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$dir</code> Specifies the new directory to write log files to. Default is <code>NULL</code> </div>
</li>
<li class="level1"><div class="li"> returns <strong>[string]</strong>  If <code>$dir</code> is <code>NULL</code> the current log directory is returned, otherwise the directory specified in <code>$dir</code> is returned.</div>
</li>
</ul>
<pre class="code php">Kohana<span class="sy0">::</span><span class="me2">log_directory</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="methods_other" id="methods_other">Methods (Other)</a></h2>
<div class="level2">

</div>

<h3><a name="initialize_and_load_kohana_superobject" id="initialize_and_load_kohana_superobject">Initialize and Load Kohana superobject</a></h3>
<div class="level3">

<p>

Loads the controller and initializes it. Runs the pre_controller,post_controller_constructor, and post_controller events. Triggers a system.404 event when the route cannot be mapped to a controller.
</p>
<pre class="code php">Kohana<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">//Example to load the input-&gt;get() method</span>
Kohana<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'id'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="debugging_information" id="debugging_information">Debugging information</a></h3>
<div class="level3">

<p>

Returns <acronym title="HyperText Markup Language">HTML</acronym> formatted strings of variables that can be echoed to screen nicely.
</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">post</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

Prints out the POST variable
</p>

</div>

<h3><a name="backtrace" id="backtrace">backtrace</a></h3>
<div class="level3">

<p>

Will be called when an error occurs. It displays an overview of files and functions called so you can spot the source of the error. Very useful for debugging.
</p>

</div>

<h3><a name="use_language_strings" id="use_language_strings">Use language strings</a></h3>
<div class="level3">

<p>

Using Kohana::lang() languages strings can be retrieved. 
</p>

<p>
<strong>Example </strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">lang</span><span class="br0">&#40;</span><span class="st0">'cache.resources'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">//outputs is locale is set to en_US</span>
&nbsp;
<span class="co1">//  Caching of resources is impossible, because resources cannot be serialized.</span>
&nbsp;
<span class="co1">//If locale is set to de_DE</span>
&nbsp;
<span class="co1">//  Das Cachen von Ressourcen ist nicht möglich, da diese nicht serialisiert werden können.</span></pre>
<p>
In the case of <code>en_US</code>, <code>Kohana::lang(&#039;cache.resources&#039;)</code> maps to i18n/en_US/cache.php and within this file to <code>$lang[&#039;resources&#039;]</code> 
</p>

<p>
Kohana also allows to give extra arguments to <code>Kohana::lang()</code>, allowing us to use a formatted string (using the format specified in <a href="http://es.php.net/manual/en/function.sprintf.php" class="urlextern" title="http://es.php.net/manual/en/function.sprintf.php"  rel="nofollow">php sprintf function</a> 
</p>

<p>
<strong> Example </strong>
In myapp.php i18n lang file:

</p>
<pre class="code php"><span class="re1">$lang</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
  <span class="st0">'kohana_release'</span> <span class="sy0">=&gt;</span> <span class="st0">'The last stable release of Kohana is %s'</span>
<span class="br0">&#41;</span></pre>
<p>
In our controller, view, model…
</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">lang</span><span class="br0">&#40;</span><span class="st0">'myapp.kohana_release'</span><span class="sy0">,</span> <span class="st0">'2.3.1'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">//OR</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">lang</span><span class="br0">&#40;</span><span class="st0">'example.kohana_release'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'2.3.1'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="find_key_strings" id="find_key_strings">find key strings</a></h3>
<div class="level3">

<p>

Searches for given key in a nested array. It takes:
</p>
<ul>
<li class="level1"><div class="li"> [string] Key to search for. Should be in form of &#039;rootnode.childnode.anothernode&#039;</div>
</li>
<li class="level1"><div class="li"> [array] Array to search in. Should be an array of values and/or another arrays to represent nodes</div>
</li>
</ul>

<p>

<strong>Example</strong>

</p>
<pre class="code php"><span class="re1">$a</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
    <span class="st0">'levelone1'</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
    <span class="br0">&#40;</span>
        <span class="st0">'leveltwo1'</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
        <span class="br0">&#40;</span>
            <span class="st0">'a'</span> <span class="sy0">=&gt;</span> <span class="st0">'aaa'</span><span class="sy0">,</span>
            <span class="st0">'b'</span> <span class="sy0">=&gt;</span> <span class="st0">'aab'</span><span class="sy0">,</span>
            <span class="st0">'c'</span> <span class="sy0">=&gt;</span> <span class="st0">'aac'</span>
        <span class="br0">&#41;</span><span class="sy0">,</span>
        <span class="st0">'leveltwo2'</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
        <span class="br0">&#40;</span>
            <span class="st0">'a'</span> <span class="sy0">=&gt;</span> <span class="st0">'aba'</span><span class="sy0">,</span>
            <span class="st0">'b'</span> <span class="sy0">=&gt;</span> <span class="st0">'abb'</span><span class="sy0">,</span>
            <span class="st0">'c'</span> <span class="sy0">=&gt;</span> <span class="st0">'abc'</span>
        <span class="br0">&#41;</span>
    <span class="br0">&#41;</span><span class="sy0">,</span>
    <span class="st0">'levelone2'</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
    <span class="br0">&#40;</span>
        <span class="st0">'a'</span> <span class="sy0">=&gt;</span> <span class="st0">'ba'</span><span class="sy0">,</span>
        <span class="st0">'b'</span> <span class="sy0">=&gt;</span> <span class="st0">'bb'</span><span class="sy0">,</span>
        <span class="st0">'foo'</span> <span class="sy0">=&gt;</span> <span class="st0">'bar'</span>
    <span class="br0">&#41;</span>
<span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
Kohana<span class="sy0">::</span><span class="me2">key_string</span><span class="br0">&#40;</span><span class="st0">'levelone1.leveltwo1.b'</span><span class="sy0">,</span> <span class="re1">$a</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">//Returns 'aab'</span>
Kohana<span class="sy0">::</span><span class="me2">key_string</span><span class="br0">&#40;</span><span class="st0">'levelone1.leveltwo2.c'</span><span class="sy0">,</span> <span class="re1">$a</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">//Returns 'abc'</span>
Kohana<span class="sy0">::</span><span class="me2">key_string</span><span class="br0">&#40;</span><span class="st0">'levelone2.foo'</span><span class="sy0">,</span> <span class="re1">$a</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">//Returns 'bar'</span></pre>
</div>

<h3><a name="listing_files" id="listing_files">Listing files</a></h3>
<div class="level3">

<p>

Iterates through all directories of a given name and returns found files. It takes two parameters:
</p>
<ul>
<li class="level1"><div class="li"> [string] In which directory to search in</div>
</li>
<li class="level1"><div class="li"> [bool] Should find_files be recursive? (TRUE or FALSE, defaults to FALSE)</div>
</li>
</ul>

<p>

It returns array of file paths to found files.
</p>

<p>
<strong>Example</strong>

</p>
<pre class="code php"><span class="re1">$controllers</span> <span class="sy0">=</span> Kohana<span class="sy0">::</span><span class="me2">list_files</span><span class="br0">&#40;</span><span class="st0">'controllers'</span><span class="sy0">,</span> <span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// Now $controllers is an array containing paths to all controllers in your Kohana installation</span></pre>
</div>

<h3><a name="finding_files" id="finding_files">finding files</a></h3>
<div class="level3">

<p>

Find a resource file in a given directory using Kohana&#039;s cascading filesystem. 
</p>
<ul>
<li class="level1"><div class="li"> [string] Directory to search in</div>
</li>
<li class="level1"><div class="li"> [string] Filename to look for (excluding extension)</div>
</li>
<li class="level1"><div class="li"> [bool] Is the file required, throws an error if this is true and the file cannot be found (defaults to FALSE)</div>
</li>
<li class="level1"><div class="li"> [mixed] Custom file extension as string or FALSE to use default extension (defaults to FALSE)</div>
</li>
</ul>

<p>

Returns an array if the type is i18n or a configuration file. When file is found it returns a string with the path to the file. It will return FALSE if the file is not found.
</p>

<p>
This method uses the cascading <a href="../general/filesystem.php" class="wikilink1" title="general:filesystem">filesystem</a> of Kohana, this means it will first look in the application directory to see if a file exists, then any module that exists in order they are supplied in the config.php file and then the system directory. Exception to this is the i18n files and the config files. They are loaded from the system directory upwards. Result is that you can copy half a language file from the system directory and place it in the application directory, variables declared in the system directory will be supplanted by the one in the application directory. 
</p>

<p>
<strong>Example</strong>

</p>
<pre class="code php"><span class="co1">// find a file named 'article.php' in the 'controllers' directory.</span>
<span class="kw1">include</span> Kohana<span class="sy0">::</span><span class="me2">find_file</span><span class="br0">&#40;</span><span class="st0">'controllers'</span><span class="sy0">,</span><span class="st0">'article'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
<strong>Example</strong>

</p>
<pre class="code php"><span class="co1">// find a file named 'database.php' in the 'config' directory.</span>
<span class="kw1">include</span> Kohana<span class="sy0">::</span><span class="me2">find_file</span><span class="br0">&#40;</span><span class="st0">'config'</span><span class="sy0">,</span><span class="st0">'database'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
<strong>Example</strong>

</p>
<pre class="code php"><span class="co1">// find a file named 'Swift.php' in the 'vendor' directory, sub-directory 'swift'.</span>
<span class="kw1">include</span> Kohana<span class="sy0">::</span><span class="me2">find_file</span><span class="br0">&#40;</span><span class="st0">'vendor'</span><span class="sy0">,</span><span class="st0">'swift/Swift'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="user_agent_info" id="user_agent_info">user agent info</a></h3>
<div class="level3">

<p>

&#039;user_agent&#039; returns information on the user agent of the current request. It takes:

</p>
<ul>
<li class="level1"><div class="li"> [string] key or test name, default &#039;agent&#039;. </div>
</li>
</ul>

<p>
<em class="u">Available keys</em>: <code>agent, browser, version, platform, mobile, robot, referrer, languages, charsets</code>.
</p>

<p>
<em class="u">Available tests</em>: <code>is_browser, is_mobile, is_robot, accept_lang, accept_charset</code>.
</p>
<ul>
<li class="level1"><div class="li"> [string] used with “accept” tests and contains the string to compare: user_agent(&#039;accept_lang&#039;, &#039;en)</div>
</li>
</ul>

<p>

Be careful! Even if global XSS filtering is on, the data returned by this function will not be filtered!
</p>

<p>
<strong>Example</strong>
</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">user_agent</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">user_agent</span><span class="br0">&#40;</span><span class="st0">'browser'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">user_agent</span><span class="br0">&#40;</span><span class="st0">'version'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">user_agent</span><span class="br0">&#40;</span><span class="st0">'platform'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">user_agent</span><span class="br0">&#40;</span><span class="st0">'is_browser'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">user_agent</span><span class="br0">&#40;</span><span class="st0">'accept_lang'</span><span class="sy0">,</span> <span class="st0">'en'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

This <em>could</em> result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.9) Gecko/2008052906 Firefox/3.0
Firefox
3.0
Windows XP
&nbsp;
1 // (bool) true
1 // (bool) true</pre>
<p>
<p style="text-align:center">« <a href="event.php" class="wikilink1" title="core:event">Event</a> : Previous | Next : <a href="utf8.php" class="wikilink1" title="core:utf8">Unicode</a> »</p>

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexerb9a2.gif?id=core%3Akohana&amp;1324588195" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/core/kohana by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


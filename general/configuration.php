<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/general/configuration by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    general:configuration    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-04-14T21:48:36-0500" />
<meta name="keywords" content="general,configuration" />
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
<li class="level1"><div class="li"><span class="li"><a href="#configuration" class="toc">Configuration</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#structure_of_config_files" class="toc">Structure of config files</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#file_structure_of_config_files" class="toc">File structure of config files</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#config.php" class="toc">config.php</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#configuration_files" class="toc">Configuration files</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#how_to_dynamically_set_and_retrieve_config_items" class="toc">How to dynamically set and retrieve config items</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">How config entries merge, Proof read</td>
	</tr>
</table>



<h1><a name="configuration" id="configuration">Configuration</a></h1>
<div class="level1">

<p>

Information on retrieving and setting configuration items can be found on the <a href="../core/kohana.php#methods_config" class="wikilink1" title="core:kohana">kohana</a> page.
</p>

</div>

<h2><a name="structure_of_config_files" id="structure_of_config_files">Structure of config files</a></h2>
<div class="level2">

<p>
Configuration files contain an array named <code>$config</code>. Keys of this array are the actual configuration items e.g.
</p>

<p>
<strong>Example</strong>

</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'site_domain'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'localhost/'</span><span class="sy0">;</span></pre>
</div>

<h2><a name="file_structure_of_config_files" id="file_structure_of_config_files">File structure of config files</a></h2>
<div class="level2">

<p>
The file structure of config files follows Kohana&#039;s file structure. 
</p>
<pre class="code">
application &gt; modules &gt; system</pre>

<p>

Meaning that configuration files in the application directory take precedence over those in modules which take precedence over those in the system directory. The one exception is <code>config.php</code> which is hardcoded into the <code>application/config</code> directory and cannot be moved elsewhere.

</p>

</div>

<h2><a name="config.php" id="config.php">config.php</a></h2>
<div class="level2">

<p>
The file <a href="configuration/config.php" class="wikilink1" title="general:configuration:config">config.php</a> is hardcoded into Kohana, meaning it <strong>has to be</strong> in the <code>application/config</code> directory.

</p>
<pre class="code php"><span class="coMULTI">/*
 * Options:
 *  site_domain          - domain and installation directory
 *  site_protocol        - protocol used to access the site, usually HTTP
 *  index_page           - name of the front controller, can be removed with URL rewriting
 *  url_suffix           - an extension that will be added to all generated URLs
 *  internal_cache       - whether to store file paths and config entries across requests
 *  output_compression   - enable or disable GZIP output compression
 *  global_xss_filtering - enable or disable XSS attack filtering on all user input
 *  enable_hooks         - enable or disable hooks.
 *  log_threshold        - sets the logging threshold
 *  log_directory        - directory to save logs to
 *  display_errors       - whether to show Kohana error pages or not
 *  render_stats         - render the statistics information in the final page output
 *  extension_prefix     - filename prefix for library extensions
 *  modules              - extra Kohana resource paths,
 */</span></pre>
</div>

<h2><a name="configuration_files" id="configuration_files">Configuration files</a></h2>
<div class="level2">

</div>

<h4><a name="cache.php" id="cache.php">cache.php</a></h4>
<div class="level4">

<p>
Sets the cache driver, cache lifetime and garbage collection. For more information see the <a href="../libraries/cache.php" class="wikilink1" title="libraries:cache">Cache</a> library.
</p>

</div>

<h4><a name="captcha.php" id="captcha.php">captcha.php</a></h4>
<div class="level4">

<p>
Sets defaults for captcha images. For more information see the <a href="../libraries/captcha.php" class="wikilink1" title="libraries:captcha">Captcha</a> library.
</p>

</div>

<h4><a name="cookie.php" id="cookie.php">cookie.php</a></h4>
<div class="level4">

<p>
Sets defaults for cookies. For more information see the <a href="../helpers/cookie.php" class="wikilink1" title="helpers:cookie">Cookie</a> helper.
</p>

</div>

<h4><a name="credit_cards.php" id="credit_cards.php">credit_cards.php</a></h4>
<div class="level4">

<p>
Validation options for various credit cards.
</p>

</div>

<h4><a name="database.php" id="database.php">database.php</a></h4>
<div class="level4">

<p>
Sets database connection settings. Multiple configurations are possbile. For more information see the database <a href="../libraries/database/configuration.php" class="wikilink1" title="libraries:database:configuration">configuration</a> library.
</p>

</div>

<h4><a name="email.php" id="email.php">email.php</a></h4>
<div class="level4">

<p>
Sets email sending options. For more information see the <a href="../helpers/email.php" class="wikilink1" title="helpers:email">Email</a> helper.
</p>

</div>

<h4><a name="encryption.php" id="encryption.php">encryption.php</a></h4>
<div class="level4">

<p>
Sets encryption options such as key, mode and cipher. For more information see the <a href="../libraries/encrypt.php" class="wikilink1" title="libraries:encrypt">Encrypt</a> library.
</p>

</div>

<h4><a name="http.php" id="http.php">http.php</a></h4>
<div class="level4">

<p>
Sets <acronym title="Hyper Text Transfer Protocol">HTTP</acronym>-EQUIV type meta tags.
</p>

</div>

<h4><a name="image.php" id="image.php">image.php</a></h4>
<div class="level4">

<p>
Sets the image driver - GD or ImageMagick directory
</p>

</div>

<h4><a name="inflector.php" id="inflector.php">inflector.php</a></h4>
<div class="level4">

<p>
For more information see the <a href="../helpers/inflector.php" class="wikilink1" title="helpers:inflector">Inflector</a> helper.
</p>

</div>

<h4><a name="locale.php" id="locale.php">locale.php</a></h4>
<div class="level4">

<p>
Sets the locale and timezone of an application. For more information see the <a href="i18n.php" class="wikilink1" title="general:i18n">Internationalization</a> page.
</p>

</div>

<h4><a name="mimes.php" id="mimes.php">mimes.php</a></h4>
<div class="level4">

<p>
Sets the available mime-types. (See the validation/upload page?)
</p>

</div>

<h4><a name="pagination.php" id="pagination.php">pagination.php</a></h4>
<div class="level4">

<p>
Sets pagination settings. For more information see the <a href="../libraries/pagination.php" class="wikilink1" title="libraries:pagination">Pagination</a> page.
</p>

</div>

<h4><a name="payment.php" id="payment.php">payment.php</a></h4>
<div class="level4">

<p>
Sets payment settings. 
</p>

</div>

<h4><a name="profiler.php" id="profiler.php">profiler.php</a></h4>
<div class="level4">

<p>
Sets the information the profiler should show. For more information see the <a href="../libraries/profiler.php" class="wikilink1" title="libraries:profiler">Profiler</a> library.
</p>

</div>

<h4><a name="routes.php" id="routes.php">routes.php</a></h4>
<div class="level4">

<p>
Sets the routes Kohana should use. Includes <code>_default</code> and <code>_allowed</code>. For more infromation see the <a href="routing.php" class="wikilink1" title="general:routing">Routing</a> page.
</p>

</div>

<h4><a name="session.php" id="session.php">session.php</a></h4>
<div class="level4">

<p>
Sets session settings including the session driver. For more information see the <a href="../libraries/session.php" class="wikilink1" title="libraries:session">Session</a> library.
</p>

</div>

<h4><a name="sql_types.php" id="sql_types.php">sql_types.php</a></h4>
<div class="level4">

<p>
Sets <acronym title="Structured Query Language">SQL</acronym> data types.
</p>

</div>

<h4><a name="upload.php" id="upload.php">upload.php</a></h4>
<div class="level4">

<p>
Sets upload directory.
</p>

</div>

<h4><a name="user_agents.php" id="user_agents.php">user_agents.php</a></h4>
<div class="level4">

<p>
Sets available user agents including robots and mobile browsers. For more information see the <a href="../libraries/user_agent.php" class="wikilink2" title="libraries:user_agent" rel="nofollow">User Agent</a> library.
</p>

</div>

<h4><a name="view.php" id="view.php">view.php</a></h4>
<div class="level4">

<p>
Allowed file types (deprecated?)
</p>

</div>

<h2><a name="how_to_dynamically_set_and_retrieve_config_items" id="how_to_dynamically_set_and_retrieve_config_items">How to dynamically set and retrieve config items</a></h2>
<div class="level2">

<p>
Information for this topic is located at <a href="../core/kohana.php" class="wikilink1" title="core:kohana">kohana</a>.

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer2d8a.gif?id=general%3Aconfiguration&amp;1324588189" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/general/configuration by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


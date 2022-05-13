<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/installation/deployment by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    installation:deployment    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2011-01-16T18:15:27-0600" />
<meta name="keywords" content="installation,deployment" />
<link rel="stylesheet" media="all" type="text/css" href="../lib/exe/cssbd55.css?s=all&amp;t=kohana" />
<link rel="stylesheet" media="screen" type="text/css" href="./../lib/exe/css56d3.css?t=kohana" />
<link rel="stylesheet" media="print" type="text/css" href="./../lib/exe/css97ef.css?s=print&amp;t=kohana" />
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
<li class="level1"><div class="li"><span class="li"><a href="#deploying_kohana_to_production" class="toc">Deploying Kohana to Production:</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#remove_the_demo_and_example_controllers" class="toc">1. Remove the demo and example controllers</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#modify_your_configuration_files" class="toc">2. Modify your configuration files</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#move_kohana_core_directories_outside_of_the_document_root" class="toc">3. Move Kohana core directories outside of the document root</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Content Review and additions</td>
	</tr>
</table>



<h1><a name="deploying_kohana_to_production" id="deploying_kohana_to_production">Deploying Kohana to Production:</a></h1>
<div class="level1">

<p>
Here are a few items you should keep in mind before deploying your Kohana application to a production environment.
</p>

</div>

<h2><a name="remove_the_demo_and_example_controllers" id="remove_the_demo_and_example_controllers">1. Remove the demo and example controllers</a></h2>
<div class="level2">

<p>
Kohana comes with various demos and example controllers to help users when getting started.  Here are a few that should be removed:
</p>
<ul>
<li class="level1"><div class="li"> <code>application/controllers/examples.php</code></div>
</li>
<li class="level2"><div class="li"> <code>application/controllers/welcome.php</code> (if it is not used)</div>
</li>
<li class="level2"><div class="li"> <code>modules/auth/controllers/auth.php</code> (if enabled in $config[&#039;modules&#039;])</div>
</li>
</ul>

</div>

<h2><a name="modify_your_configuration_files" id="modify_your_configuration_files">2. Modify your configuration files</a></h2>
<div class="level2">

<p>
Kohana provides various default configuration files in the <code>system/config</code> directory.  Since Kohana utilizes a <a href="../general/filesystem.php" class="wikilink1" title="general:filesystem">cascading file system</a>, you have the option to either utilize the default configuration file versions or override these files with your own custom versions by creating a copy in the <code>application/config</code> directory.
</p>

<p>
Modify your <code>application/config/config.php</code>:
</p>
<ul>
<li class="level1"><div class="li"> change <code>$config[&#039;site_domain&#039;]</code> from your development setting to the production domain.</div>
</li>
<li class="level2"><div class="li"> set <code>$config[&#039;display_errors&#039;] = FALSE;</code> to disable error messages from being displayed.  You can still check error messages in your log file. Check your settings in <code>config/log.php</code> to be sure.</div>
</li>
<li class="level2"><div class="li"> set your <code>$config[&#039;threshold&#039;] = 1;</code>.  This sets your log threshold to a suitable level for production.  Higher threshold levels will log less critical notices and information, but can slow down your application.</div>
</li>
<li class="level2"><div class="li"> set <code>config[&#039;internal_cache&#039;]</code> to the number of seconds you want to cache file paths and config entries.  This eliminates the need to search for file and module paths, significantly speeding up your application – especially when using multiple modules.</div>
</li>
</ul>

<p>

Modify your <code>index.php</code> (in the root directory of your site):
</p>
<ul>
<li class="level1"><div class="li"> change the constant <code>IN_PRODUCTION</code> value from <code>FALSE</code> to <code>TRUE</code> (so that any controllers with <code>const ALLOW_PRODUCTION = FALSE;</code> defined will be inaccessible).</div>
</li>
</ul>

<p>

You should always try to create custom versions of the following files:
</p>
<ul>
<li class="level1"><div class="li"> <code>system/config/routes.php</code> - set your <code>$config[&#039;_default&#039;]</code> to your default controller</div>
</li>
<li class="level2"><div class="li"> <code>system/config/encryption.php</code> - change the default <code>$config[&#039;key&#039;]</code></div>
</li>
<li class="level2"><div class="li"> <code>modules/auth/config/auth.php</code> - change the default salt offsets in <code>$config[&#039;salt_pattern&#039;]</code> <em>(if you use the Auth module)</em></div>
</li>
<li class="level2"><div class="li"> <code>system/config/cookie.php</code> - set your <code>$config[&#039;domain&#039;]</code></div>
</li>
<li class="level2"><div class="li"> <code>system/config/session.php</code> - set or verify <code>$config[&#039;driver&#039;]</code>, <code>$config[&#039;name&#039;]</code>, <code>$config[&#039;encryption&#039;]</code>, <code>$config[&#039;expiration&#039;]</code></div>
</li>
</ul>

<p>

You should also consider creating custom versions of the following files:
</p>
<ul>
<li class="level1"><div class="li"> <code>system/config/database.php</code> - configure your custom database connections (if required)</div>
</li>
</ul>

</div>

<h2><a name="move_kohana_core_directories_outside_of_the_document_root" id="move_kohana_core_directories_outside_of_the_document_root">3. Move Kohana core directories outside of the document root</a></h2>
<div class="level2">


<div class='box round'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<div class='box_content'><p>
If your host does not allow this structure, <a href="http://kohanaphp.com/tutorials/remove_index.php" class="urlextern" title="http://kohanaphp.com/tutorials/remove_index.php"  rel="nofollow">use an .htaccess file to protect the core directories</a>.
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>
<p>
Although this is an optional step and not required by Kohana, it is considered a good security practice to place as few files as possible in your public web server document root directory.  Since most web hosts give you access to at least one level above the web server document root, this should not be a problem.
</p>

<p>
Moving your core Kohana directories also gives you the ability to utilize one central Kohana codebase on your server that can be shared by multiple websites.  You could also create a set of common modules used across all of your web sites.
</p>

<p>
To accomplish this in Kohana, do the following:

</p>
<ol>
<li class="level1"><div class="li"> move your Kohana <code>system</code>, <code>application</code>, and <code>modules</code> directories at least one level above your document root directory (typically <code>public_html</code> or <code>www</code>).</div>
</li>
<li class="level2"><div class="li"> modify the following lines in your <code>index.php</code> file:   </div>
<ul>
<li class="level4"><div class="li"> <code>$kohana_application = &#039;../application&#039;;</code></div>
</li>
<li class="level4"><div class="li"> <code>$kohana_modules = &#039;../modules&#039;;</code></div>
</li>
<li class="level4"><div class="li"> <code>$kohana_system = &#039;../system&#039;;</code></div>
</li>
</ul>
</li>
</ol>

<p>

<strong>Note:</strong> This example assumes one-level above <code>public_html</code>, however, you can use relative or absolute directories when specifying directory locations.
</p>

<p>
Your final directory structure will look similar to this:

</p>
<pre class="code">   yourdomain_root_directory
   +- application
   +- system
   +- modules
   +- public_html (web server document root)
    |    - index.php
    |    - .htaccess</pre>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer3b38.gif?id=installation%3Adeployment&amp;1324588186" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/installation/deployment by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


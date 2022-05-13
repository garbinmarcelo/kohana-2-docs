<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/installation by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    installation    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-05-28T23:28:24-0500" />
<meta name="keywords" content="installation" />
<link rel="stylesheet" media="all" type="text/css" href="lib/exe/cssbd55.css?s=all&amp;t=kohana" />
<link rel="stylesheet" media="screen" type="text/css" href="lib/exe/css56d3.css?t=kohana" />
<link rel="stylesheet" media="print" type="text/css" href="lib/exe/css97ef.css?s=print&amp;t=kohana" />
<script type="text/javascript" charset="utf-8" src="lib/exe/jsb5bc.php?edit=0&amp;write=0" ></script>
<link rel="shortcut icon" href="lib/tpl/kohana/images/favicon.ico" />
</head>
<body>
<!-- Start Header -->
<div id="header">

<!-- Start Logo -->
<a id="logo" href="/<?php echo explode('/', $_SERVER['REQUEST_URI'])[1]; ?>">
    <img src="./lib/images/kohana-logo.png" alt="Kohana" />
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
<li class="clear">

<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#removing_index.php_from_url_s" class="toc">Removing index.php from URL&#039;s</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#additional_configuration" class="toc">Additional Configuration</a></span></div></li>
</ul>
</li>
<li class="level1"><div class="li"><span class="li"><a href="#after_installation" class="toc">After installation</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#experiencing_problems" class="toc">Experiencing Problems?</a></span></div></li>
</ul>
</li>
<li class="level1"><div class="li"><span class="li"><a href="#for_experienced_users" class="toc">For Experienced Users</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#moving_system_and_application_directory_out_of_webroot" class="toc">Moving system and application directory out of webroot</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Proof read</td>
	</tr>
</table>

<p>

Kohana is installed in several easy steps:

</p>
<ol>
<li class="level1"><div class="li"> <a href="http://kohanaphp.com/download" class="urlextern" title="http://kohanaphp.com/download"  rel="nofollow">Download</a> a copy of Kohana.</div>
</li>
<li class="level1"><div class="li"> Unzip the downloaded package. This should create a <code>Kohana_v[version#]</code> directory.</div>
</li>
<li class="level1"><div class="li"> Upload the folder contents to your webserver.</div>
</li>
<li class="level1"><div class="li"> Edit the <a href="general/configuration.php" class="wikilink1" title="general:configuration">global configuration</a> file <code>application/config/config.php</code> to reflect the base path or domain of your site.</div>
</li>
<li class="level1"><div class="li"> Depending on your platform, the installation&#039;s subdirs may have lost their permissions thanks to zip extraction.  Chmod them all to 755 by running <code>find . -type d -exec chmod 755 {} \;</code> from the root of your Kohana installation.</div>
</li>
<li class="level1"><div class="li"> Make sure the <code>application/logs</code> and <code>application/cache</code> directories are writeable. Chmod to 666.</div>
</li>
<li class="level1"><div class="li"> Test your installation by opening the <acronym title="Uniform Resource Locator">URL</acronym> you set as the <code>base_url</code> in your favorite browser</div>
</li>
</ol>

<p>

If you see the <strong>Welcome</strong> page, your Kohana installation is complete!

</p>

<h2><a name="removing_index.php_from_url_s" id="removing_index.php_from_url_s">Removing index.php from URL&#039;s</a></h2>
<div class="level2">

<p>
If you want really clean <acronym title="Uniform Resource Locator">URL</acronym>&#039;s and therefore remove the index.php in each <acronym title="Uniform Resource Locator">URL</acronym> this is possible. 
</p>
<ul>
<li class="level1"><div class="li"> <a href="http://kohanaphp.com/tutorials/remove_index" class="urlextern" title="http://kohanaphp.com/tutorials/remove_index"  rel="nofollow">Tutorial - Remove index.php for Apache webserver</a></div>
</li>
</ul>

</div>

<h2><a name="additional_configuration" id="additional_configuration">Additional Configuration</a></h2>
<div class="level2">

<p>
You can provide your installation with additional configuration by copying files from the <code>system/config</code> directory to the <code>application/config</code> directory.  For example if you want to <a href="libraries/database/configuration.php" class="wikilink1" title="libraries:database:configuration">configure a database connection</a>, you can copy over <code>system/config/database.php</code> to <code>application/config/database.php</code> and edit the database connection details.
</p>

</div>

<h1><a name="after_installation" id="after_installation">After installation</a></h1>
<div class="level1">

<p>
After installation you&#039;re ready to build your first web application with Kohana. If you&#039;re new to Kohana you should first read all articles in the user guide under the &#039;General&#039; section. 
</p>

</div>

<h2><a name="experiencing_problems" id="experiencing_problems">Experiencing Problems?</a></h2>
<div class="level2">

<p>

If you were not able to view the Kohana <strong>Welcome</strong> page on your server after installing, please read the <a href="installation/troubleshooting.php" class="wikilink1" title="installation:troubleshooting">Troubleshooting</a> page of the user guide, visit the <a href="http://dev.kohanaphp.com/wiki/kohana2" class="urlextern" title="http://dev.kohanaphp.com/wiki/kohana2"  rel="nofollow">Kohana Wiki</a>, or ask for assistance in the <a href="http://forum.kohanaphp.com/" class="urlextern" title="http://forum.kohanaphp.com"  rel="nofollow">community forums</a>.
</p>

<p>
[moveTo: Troubleshooting] The Kohana Team tries to make sure that Kohana is as free from bugs as possible. If you have found a bug, please <a href="http://dev.kohanaphp.com/projects/kohana2/issues" class="urlextern" title="http://dev.kohanaphp.com/projects/kohana2/issues"  rel="nofollow">report it</a>.
</p>

</div>

<h1><a name="for_experienced_users" id="for_experienced_users">For Experienced Users</a></h1>
<div class="level1">

<p>
To use a multi-site Kohana install, simply follow these steps.

</p>
<ol>
<li class="level1"><div class="li"> <a href="http://kohanaphp.com/download.php" class="urlextern" title="http://kohanaphp.com/download.php"  rel="nofollow">Download</a> a copy of Kohana.</div>
</li>
<li class="level1"><div class="li"> Put the <code>system</code> folder somewhere on your server, preferably outside of your webserver&#039;s document root.</div>
</li>
<li class="level1"><div class="li"> Delete the <code>system</code> folder in your current application.</div>
</li>
<li class="level1"><div class="li"> For your application&#039;s <code>index.php</code> file, change the <code>$kohana_system</code> variable to the relative or absolute path of where you put the <code>system</code> folder.</div>
</li>
<li class="level1"><div class="li"> You can now point <strong>all</strong> of your applications to this one system folder for easy upgrades. This makes your life a whole lot easier when you have 10+ kohana sites on your server.</div>
</li>
</ol>

</div>

<h2><a name="moving_system_and_application_directory_out_of_webroot" id="moving_system_and_application_directory_out_of_webroot">Moving system and application directory out of webroot</a></h2>
<div class="level2">

<p>
&#039;webroot&#039; is defined as the top level directory to which a webserver will allow public access. A correctly configured server will not allow public access to files or directories above webroot in the directory tree. 
</p>

<p>
It is considered a good security practice to move <code>application</code>, <code>system</code> and <code>modules</code> out of the webroot, to prevent potential public access, should <acronym title="Hypertext Preprocessor">PHP</acronym> be disabled, or your webserver is compromised. Kohana enables you to place the index.php in the webroot, and all other files outside of it. Static content, such as stylesheet, image and javascript files, are typically placed within webroot. 
</p>

<p>
In a few steps this can be accomplished
</p>
<ol>
<li class="level1"><div class="li"> Move the directories out of the webroot but leave index.php in</div>
</li>
<li class="level1"><div class="li"> Open <strong>index.php</strong> file in an editor</div>
</li>
<li class="level1"><div class="li"> Set the variable <strong>$kohana_application</strong> to the application directory you&#039;re using (must contain <code>config/config.php</code> file)</div>
</li>
<li class="level1"><div class="li"> Set the variable <strong>$kohana_system</strong> to the system directory you&#039;re using</div>
</li>
</ol>

<p>
Note that moving the <code>system</code> directory out of webroot, also makes it more easily accessible by multiple Kohana applications. So you can use the same <code>system</code> for multiple applications. This allows for easy upgrades. Simply refer to the same <code>system</code> in the <strong>$kohana_system</strong> in  application A, B etc.

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="lib/exe/indexer4763.gif?id=installation&amp;1324588185" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/installation by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


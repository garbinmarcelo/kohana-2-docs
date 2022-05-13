<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/installation/upgrading by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    installation:upgrading    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-04-10T14:29:02-0500" />
<meta name="keywords" content="installation,upgrading" />
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
<li class="level1"><div class="li"><span class="li"><a href="#upgrading" class="toc">Upgrading</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#basic_instructions" class="toc">Basic Instructions</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#advanced_instructions" class="toc">Advanced Instructions</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Proof</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">expand</td>
	</tr>
</table>



<h1><a name="upgrading" id="upgrading">Upgrading</a></h1>
<div class="level1">
<ul>
<li class="level1"><div class="li"> <a href="../upgrading/2.php" class="wikilink1" title="upgrading:2.3">2.2 to 2.3</a></div>
</li>
<li class="level1"><div class="li"> <a href="../upgrading/2-2.php" class="wikilink1" title="upgrading:2.2">2.1 to 2.2</a></div>
</li>
<li class="level1"><div class="li"> <a href="../upgrading/2-3.php" class="wikilink1" title="upgrading:2.1">2.0 to 2.1</a></div>
</li>
</ul>

</div>

<h2><a name="basic_instructions" id="basic_instructions">Basic Instructions</a></h2>
<div class="level2">


<div class='box red'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<div class='box_content'><p>
These instructions assume that you have not edited your system folder in any way. If you have then you will need to apply your changes again after upgrading if you use this method.
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>

<ol>
<li class="level1"><div class="li"> Delete the contents of your <code>system</code> folder.</div>
</li>
<li class="level1"><div class="li"> Replace it with the <code>system</code> folder from the version you wish to upgrade to.</div>
</li>
<li class="level1"><div class="li"> Follow the instructions from the relevant pages for your upgrade in the list above.</div>
</li>
</ol>

</div>

<h2><a name="advanced_instructions" id="advanced_instructions">Advanced Instructions</a></h2>
<div class="level2">

<p>

Some find it valuable to upgrade side-by-side instead of replacing the system directory completely.  This allows for easy downgrading should anything break due to the changes in the new version.  In order for this to work, it is suggested that you move your application directory.  Your directory structure might look something like this <strong>(assume we are starting at your website&#039;s root directory, not the web root)</strong>:
</p>


<div class='box'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<div class='box_content'>
<ul>
<li class="level1"><div class="li"> /</div>
<ul>
<li class="level2"><div class="li"> Kohana-old.version.number/ </div>
<ul>
<li class="level3"><div class="li"> Default modules, system, and application directories</div>
</li>
</ul>
</li>
<li class="level2"><div class="li"> Kohana-new.version.number/ </div>
<ul>
<li class="level3"><div class="li"> Same as above, only newer!</div>
</li>
</ul>
</li>
<li class="level2"><div class="li"> application/</div>
<ul>
<li class="level3"><div class="li"> A copy of the application directory from your original install that you actually use</div>
</li>
</ul>
</li>
<li class="level2"><div class="li"> modules/ </div>
<ul>
<li class="level3"><div class="li"> Modules that you install from <a href="http://projects.kohanaphp.com/" class="urlextern" title="http://projects.kohanaphp.com"  rel="nofollow">Kohana Projects</a></div>
</li>
</ul>
</li>
<li class="level2"><div class="li"> httpdocs/ (or www or htdocs or whatever it is you call your web root directory for your domain)</div>
<ul>
<li class="level3"><div class="li"> index.php</div>
</li>
<li class="level3"><div class="li"> .htaccess</div>
</li>
<li class="level3"><div class="li"> etc.</div>
</li>
</ul>
</li>
</ul>
</li>
</ul>

</div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


<p>
From this setup, you are able to simply extract the new version of Kohana in your domain&#039;s root directory and then make a change to your index.php to target the new version.  If anything goes wrong simply change the $kohana_system variable back to the old version.
</p>
<pre class="code php"><span class="re1">$kohana_application</span> <span class="sy0">=</span> <span class="st0">'../application'</span><span class="sy0">;</span>
<span class="re1">$kohana_modules</span> <span class="sy0">=</span> <span class="st0">'../modules'</span><span class="sy0">;</span>
<span class="re1">$kohana_system</span> <span class="sy0">=</span> <span class="st0">'../Kohana-new.version.number/system'</span><span class="sy0">;</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer0ffa.gif?id=installation%3Aupgrading&amp;1324588185" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/installation/upgrading by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


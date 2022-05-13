<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/general/hooks by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    general:hooks    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-07-30T12:04:38-0500" />
<meta name="keywords" content="general,hooks" />
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
<li class="level1"><div class="li"><span class="li"><a href="#hooks" class="toc">Hooks</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#configuring_hooks" class="toc">Configuring hooks</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#hooks_and_events" class="toc">Hooks and events</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#constants" class="toc">Constants</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">More examples, proof read</td>
	</tr>
</table>



<h1><a name="hooks" id="hooks">Hooks</a></h1>
<div class="level1">

<p>
Hooks are basically files included at the start of Kohana, to be more specific they are loaded in the Kohana::setup() method. At this time these files are loaded, so their methods can be used
</p>
<ul>
<li class="level1"><div class="li"> index.php</div>
</li>
<li class="level1"><div class="li"> core/Bootstrap.php</div>
</li>
<li class="level1"><div class="li"> core/Benchmark.php </div>
</li>
<li class="level1"><div class="li"> core/utf8.php </div>
</li>
<li class="level1"><div class="li"> core/Event.php </div>
</li>
<li class="level1"><div class="li"> core/Kohana.php </div>
</li>
</ul>

<p>

No <strong>event</strong> has been started yet, the first to be started is <strong>system.ready</strong>
</p>

<p>
Hook files should be put in <code>application/hooks</code> or similarly in a module folder.
</p>

</div>

<h2><a name="configuring_hooks" id="configuring_hooks">Configuring hooks</a></h2>
<div class="level2">

<p>
To configure hooks edit <code>config.php</code> in your application/config directory.
Look the option like this:
</p>

<p>
<strong>File: config.php</strong>

</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'enable_hooks'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="kw2">FALSE</span><span class="sy0">;</span></pre>
<p>
Set <code>$config[&#039;enable_hooks&#039;]</code> to <code>TRUE</code> and all files in the hooks directory (<code>application/hooks</code>) will be included and the code will be executed.
</p>

<p>
<strong>Example</strong> config.php

</p>
<pre class="code php"><span class="co1">//To include all files in application/hooks</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'enable_hooks'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="kw2">TRUE</span><span class="sy0">;</span></pre>
</div>

<h2><a name="hooks_and_events" id="hooks_and_events">Hooks and events</a></h2>
<div class="level2">

<p>
The power of hooks mainly comes from the <a href="../core/event.php" class="wikilink1" title="core:event">Events</a> class. Hooks are loaded before any of the events are started. This means you can use a hook to modify an event&#039;s callbacks. For example you could load the following file as a hook
</p>

<p>
<strong>Example</strong> hooks/power.php

</p>
<pre class="code php"><span class="kw2">class</span> Power <span class="br0">&#123;</span>
 <span class="kw2">public</span> <span class="kw2">function</span> Kohana<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
   Event<span class="sy0">::</span><span class="re1">$data</span> <span class="sy0">=</span> Event<span class="sy0">::</span><span class="re1">$data</span><span class="sy0">.</span><span class="st0">'&lt;!-- Powered by Kohana--&gt;'</span><span class="sy0">;</span>
 <span class="br0">&#125;</span>
&nbsp;
<span class="br0">&#125;</span>
Event<span class="sy0">::</span><span class="me2">add</span><span class="br0">&#40;</span><span class="st0">'system.display'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'Power'</span><span class="sy0">,</span> <span class="st0">'Kohana'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
This will add a callback to the the system.display event. The callback is to the method Power::Kohana. Power::Kohana adds a small notice to the bottom of each page (&lt;!– Powered by Kohana–&gt;). It utilizes the Event::$data to manipulate the final output. See <a href="../core/event.php#data" class="wikilink1" title="core:event">Events</a> for details.
</p>

</div>

<h2><a name="constants" id="constants">Constants</a></h2>
<div class="level2">

<p>
When using hooks you might need to get under the hood of Kohana. When the hooks are loaded these constants are set in index.php

</p>
<ul>
<li class="level1"><div class="li"> EXT - contains the default file extension used for files in Kohana. Defaults to &#039;.php&#039;</div>
</li>
<li class="level1"><div class="li"> KOHANA - basename</div>
</li>
<li class="level1"><div class="li"> DOCROOT - dirname</div>
</li>
<li class="level1"><div class="li"> APPPATH - path to the application directory</div>
</li>
<li class="level1"><div class="li"> SYSPATH - path to the system directory</div>
</li>
<li class="level1"><div class="li"> MODPATH - path to the modules directory</div>
</li>
</ul>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer608f.gif?id=general%3Ahooks&amp;1324588192" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/general/hooks by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


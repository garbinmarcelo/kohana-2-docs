<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/general/events by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    general:events    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-09-04T02:33:32-0500" />
<meta name="keywords" content="general,events" />
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
<li class="level1"><div class="li"><span class="li"><a href="#events" class="toc">Events</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#system_events" class="toc">System Events</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#events_sequence" class="toc">Events Sequence</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#hooks" class="toc">Hooks</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Stub</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">What events are, how events work, running, adding, using custom</td>
	</tr>
	<tr class="row2">
		<th class="col0">Todo</th><td class="col1">Move stuff from core:event </td>
	</tr>
</table>



<h1><a name="events" id="events">Events</a></h1>
<div class="level1">

<p>
See <a href="../core/event.php" class="wikilink1" title="core:event">Event</a> for information on adding, running, removing and using custom events.
</p>

<p>
Kohana events consist of a <strong>name</strong> and <a href="http://php.net/manual/en/language.pseudo-types.php#language.types.callback" class="urlextern" title="http://php.net/manual/en/language.pseudo-types.php#language.types.callback"  rel="nofollow">callback</a>. Names usually include a prefix with the name <sup><a href="#fn__1" name="fnt__1" id="fnt__1" class="fn_top">1)</a></sup>, but are not required to. All of the core events are prefixed as <code>system.name</code>.
</p>

</div>

<h2><a name="system_events" id="system_events">System Events</a></h2>
<div class="level2">

<p>

The following events are defined in the Kohana core files. The pre-defined actions for these events are added in <a href="../core/kohana.php#setup" class="wikilink1" title="core:kohana">Kohana::setup</a>.
</p>

</div>

<h4><a name="system.ready" id="system.ready">system.ready</a></h4>
<div class="level4">

<p>

Called immediately after hooks are loaded. This is the earliest attachable event. Nothing is attached to this event by default. Hooks are loaded before  this point.
</p>

</div>

<h4><a name="system.routing" id="system.routing">system.routing</a></h4>
<div class="level4">

<p>

Processes the <acronym title="Uniform Resource Locator">URL</acronym> and does routing. Calls <a href="../libraries/router.php#setup" class="wikilink2" title="libraries:router" rel="nofollow">Router::find_uri</a> and <a href="../libraries/router.php#setup" class="wikilink2" title="libraries:router" rel="nofollow">Router::setup</a> by default.
</p>

</div>

<h4><a name="system.execute" id="system.execute">system.execute</a></h4>
<div class="level4">

<p>

Controller locating and initialization. A controller object will be created, as an instance of Kohana. Calls <a href="../core/kohana.php#instance" class="wikilink1" title="core:kohana">Kohana::instance</a> by default.
</p>

</div>

<h4><a name="system.post_routing" id="system.post_routing">system.post_routing</a></h4>
<div class="level4">

<p>

Triggered after all routing is done so interventions in routing can be done here. If Router::$controller is empty after this event a 404 is triggered.
</p>

</div>

<h4><a name="system.404" id="system.404">system.404</a></h4>
<div class="level4">

<p>

Called when a page cannot be found. Calls <a href="../core/kohana.php#show_404" class="wikilink1" title="core:kohana">Kohana::show_404</a> by default.
</p>

</div>

<h4><a name="system.pre_controller" id="system.pre_controller">system.pre_controller</a></h4>
<div class="level4">

<p>

Called within system.execute, after the controller file is loaded, but before an object is created.
</p>

</div>

<h4><a name="system.post_controller_constructor" id="system.post_controller_constructor">system.post_controller_constructor</a></h4>
<div class="level4">

<p>

Called within <a href="#system.execute" title="general:events &crarr;" class="wikilink1">system.execute</a>, after the controller constructor has been called. <a href="../core/kohana.php#instance" class="wikilink1" title="core:kohana">Kohana::instance</a> will return the controller at this point, and views can be loaded. Controller methods have not been called yet.
</p>

</div>

<h4><a name="system.post_controller" id="system.post_controller">system.post_controller</a></h4>
<div class="level4">

<p>

Called within <a href="#system.execute" title="general:events &crarr;" class="wikilink1">system.execute</a>, after the controller object is created. <a href="../core/kohana.php#instance" class="wikilink1" title="core:kohana">Kohana::instance</a> will return the controller at this point, and views can be loaded.
</p>

</div>

<h4><a name="system.send_headers" id="system.send_headers">system.send_headers</a></h4>
<div class="level4">

<p>

Called just before the global output buffer is closed, before any content is displayed. Writing cookies is not possible after this point, and <a href="../libraries/session.php" class="wikilink1" title="libraries:session">Session</a> data will not be saved.
</p>

</div>

<h4><a name="system.display" id="system.display">system.display</a></h4>
<div class="level4">

<p>

Displays the output that Kohana has generated. Views can be loaded, but headers have already been sent. The rendered output can be manipulated as <a href="../core/event.php#data" class="wikilink1" title="core:event">Event::$data</a>.
</p>

</div>

<h4><a name="system.shutdown" id="system.shutdown">system.shutdown</a></h4>
<div class="level4">

<p>

Last event to run, just before <acronym title="Hypertext Preprocessor">PHP</acronym> starts to shut down. Runs the Kohana::shutdown method by default.
</p>

</div>

<h4><a name="system.log" id="system.log">system.log</a></h4>
<div class="level4">

<p>
Called within <a href="../core/kohana.php#methods_log" class="wikilink1" title="core:kohana">Kohana::log</a>, useful if you want to send an email when certain events are logged or store log messages in a different location.
</p>

</div>

<h4><a name="system.redirect" id="system.redirect">system.redirect</a></h4>
<div class="level4">

<p>
Called within <a href="../helpers/url.php#redirect" class="wikilink1" title="helpers:url">url::redirect</a>, useful to detect that the system is about to perform a redirect.
</p>

</div>

<h2><a name="events_sequence" id="events_sequence">Events Sequence</a></h2>
<div class="level2">

<p>

<a href="../lib/images/kohana_sequences_eng.png" class="media" title="kohana_sequences_eng.png" rel="nofollow">
	<img src="../lib/images/kohana_sequences_eng.png" class="media" alt="" />
</a>
</p>

</div>

<h2><a name="hooks" id="hooks">Hooks</a></h2>
<div class="level2">

<p>
Hooks are included early in Kohana and can be used, e.g., to execute code before controllers are loaded so you can check for authentication early on in processing and thereby reduce server resources. Events and hooks go hand in hand: hooks allow you to attach code to events. See for more information the <a href="hooks.php" class="wikilink1" title="general:hooks">Hooks</a> page.

</p>

</div>
<div class="footnotes">
<div class="fn"><sup><a href="#fnt__1" id="fn__1" name="fn__1" class="fn_bot">1)</a></sup> 
An example of a “prefix” is prefix.name</div>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexerc106.gif?id=general%3Aevents&amp;1324588192" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/general/events by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


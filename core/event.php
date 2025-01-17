<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/core/event by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    core:event    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-05-09T01:30:58-0500" />
<meta name="keywords" content="core,event" />
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
<li class="level1"><div class="li"><span class="li"><a href="#event_class" class="toc">Event Class</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#what_is_an_event" class="toc">What is an Event?</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#add" class="toc">add</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#add_before" class="toc">add_before</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#add_after" class="toc">add_after</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#replace" class="toc">replace</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#get" class="toc">get</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#clear" class="toc">clear</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#run" class="toc">run</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#has_run" class="toc">has_run</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#data" class="toc">Data</a></span></div></li></ul>
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



<h1><a name="event_class" id="event_class">Event Class</a></h1>
<div class="level1">

<p>

For a programming overview of events, please see <a href="http://en.wikipedia.org/wiki/Event_handler" class="interwiki iw_wp" title="http://en.wikipedia.org/wiki/Event_handler">Event_handler</a> and <a href="http://en.wikipedia.org/wiki/Event_loop" class="interwiki iw_wp" title="http://en.wikipedia.org/wiki/Event_loop">Event_loop</a>. Kohana stores events in queues, as opposed to stacks. This simply means that, by default, new events will be processed <strong>after</strong> existing events.
</p>

</div>

<h2><a name="what_is_an_event" id="what_is_an_event">What is an Event?</a></h2>
<div class="level2">

<p>

Kohana events consist of a unique name and a <a href="http://php.net/manual/en/language.pseudo-types.php#language.types.callback" class="urlextern" title="http://php.net/manual/en/language.pseudo-types.php#language.types.callback"  rel="nofollow">callback</a>. By default, there are several <a href="../general/events.php" class="wikilink1" title="general:events">events defined by Kohana</a>. Names are completely freeform, but the convention is to use a <code>prefix.name</code> to make event names more unique. All pre-defined events are prefixed as <code>system.name</code>, eg: <code>system.post_controller</code>.
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

<p>

All Event methods are <a href="http://php.net/manual/en/language.oop5.static.php" class="urlextern" title="http://php.net/manual/en/language.oop5.static.php"  rel="nofollow">static</a>, and Event should never be instanced.
</p>

</div>

<h3><a name="add" id="add">add</a></h3>
<div class="level3">

<p>

Used to add a new <a href="http://php.net/manual/en/language.pseudo-types.php#language.types.callback" class="urlextern" title="http://php.net/manual/en/language.pseudo-types.php#language.types.callback"  rel="nofollow">callback</a> to an event. If the event does not already exist, it will be created.
</p>
<pre class="code php"><span class="co1">// Calls the function &quot;foo&quot; after the controller method is executed</span>
Event<span class="sy0">::</span><span class="me2">add</span><span class="br0">&#40;</span><span class="st0">'system.post_controller'</span><span class="sy0">,</span> <span class="st0">'foo'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Calls the static method &quot;Foo::bar&quot; after the controller method is executed</span>
Event<span class="sy0">::</span><span class="me2">add</span><span class="br0">&#40;</span><span class="st0">'system.post_controller'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'foo'</span><span class="sy0">,</span> <span class="st0">'bar'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Calls the &quot;bar&quot; method in the &quot;$foo&quot; object when the output is rendered</span>
Event<span class="sy0">::</span><span class="me2">add</span><span class="br0">&#40;</span><span class="st0">'system.display'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="re1">$foo</span><span class="sy0">,</span> <span class="st0">'bar'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
You can also create entirely new events this way:
</p>
<pre class="code php"><span class="co1">// Creates a custom user.login event</span>
Event<span class="sy0">::</span><span class="me2">add</span><span class="br0">&#40;</span><span class="st0">'user.login'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="re1">$user</span><span class="sy0">,</span> <span class="st0">'login'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="add_before" id="add_before">add_before</a></h3>
<div class="level3">

<p>

Used to add a callback immediately before another callback in an event.
</p>
<pre class="code php"><span class="co1">// Add the function &quot;faa&quot; to be executed before &quot;foo&quot;</span>
Event<span class="sy0">::</span><span class="me2">add_before</span><span class="br0">&#40;</span><span class="st0">'system.post_controller'</span><span class="sy0">,</span> <span class="st0">'foo'</span><span class="sy0">,</span> <span class="st0">'faa'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
If the event you are inserting before does not exist, <code>add_before</code> will function exactly the same as <code>add</code>.
</p>

</div>

<h3><a name="add_after" id="add_after">add_after</a></h3>
<div class="level3">

<p>

Used to add a callback immediately after another callback in an event.
</p>
<pre class="code php"><span class="co1">// Add the function &quot;fzz&quot; to be after &quot;foo&quot;</span>
Event<span class="sy0">::</span><span class="me2">add_after</span><span class="br0">&#40;</span><span class="st0">'system.post_controller'</span><span class="sy0">,</span> <span class="st0">'foo'</span><span class="sy0">,</span> <span class="st0">'fzz'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
If the event you are inserting after does not exist, <code>add_after</code> will function exactly the same as <code>add</code>.
</p>

</div>

<h3><a name="replace" id="replace">replace</a></h3>
<div class="level3">

<p>

Used to replace a callback with another callback in an event.
</p>
<pre class="code php"><span class="co1">// Replace the &quot;foo&quot; function with the &quot;oof&quot; function</span>
Event<span class="sy0">::</span><span class="me2">replace</span><span class="br0">&#40;</span><span class="st0">'system.post_controller'</span><span class="sy0">,</span> <span class="st0">'foo'</span><span class="sy0">,</span> <span class="st0">'oof'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
If the event you are replacing does not exist, no event will be added.
</p>

</div>

<h3><a name="get" id="get">get</a></h3>
<div class="level3">

<p>

Returns of the callbacks as a simple array.
</p>
<pre class="code php"><span class="co1">// Returns of the callbacks for system.post_controller</span>
<span class="re1">$events</span> <span class="sy0">=</span> Event<span class="sy0">::</span><span class="me2">get</span><span class="br0">&#40;</span><span class="st0">'system.post_controller'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Loop through each event and call it</span>
<span class="kw1">foreach</span> <span class="br0">&#40;</span><span class="re1">$events</span> <span class="kw1">as</span> <span class="re1">$event</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <span class="re1">$return_value</span> <span class="sy0">=</span> <a href="http://www.php.net/call_user_func"><span class="kw3">call_user_func</span></a><span class="br0">&#40;</span><span class="re1">$event</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
If no events exist, and empty array will be returned. It is recommended to use <a href="http://php.net/empty" class="urlextern" title="http://php.net/empty"  rel="nofollow">empty</a> if you need to validate that events exist.
</p>

</div>

<h3><a name="clear" id="clear">clear</a></h3>
<div class="level3">

<p>

Clear one or all callbacks from an event.
</p>
<pre class="code php"><span class="co1">// Clears the &quot;oof&quot; function from system.post_controller</span>
Event<span class="sy0">::</span><span class="me2">clear</span><span class="br0">&#40;</span><span class="st0">'system.post_controller'</span><span class="sy0">,</span> <span class="st0">'oof'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
If this method is called without a second argument, it will clear the entire queue for the given event.
</p>

</div>

<h3><a name="run" id="run">run</a></h3>
<div class="level3">

<p>

Execute all of the callbacks attached to an event.
</p>
<pre class="code php"><span class="co1">// Run the system.post_controller event</span>
Event<span class="sy0">::</span><span class="me2">run</span><span class="br0">&#40;</span><span class="st0">'system.post_controller'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="has_run" id="has_run">has_run</a></h3>
<div class="level3">

<p>

Checks if an event has already been run. This can is useful to make an event run only once.
</p>
<pre class="code php"><span class="co1">// Test if the event has already run</span>
<span class="kw1">if</span> <span class="br0">&#40;</span>Event<span class="sy0">::</span><span class="me2">has_run</span><span class="br0">&#40;</span><span class="st0">'system.post_controller'</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
	<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'post_controller has been run.'</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="co1">// Run the post controller event if it has not already been run</span>
Event<span class="sy0">::</span><span class="me2">has_run</span><span class="br0">&#40;</span><span class="st0">'system.post_controller'</span><span class="br0">&#41;</span> or Event<span class="sy0">::</span><span class="me2">run</span><span class="br0">&#40;</span><span class="st0">'system.post_controller'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="data" id="data">Data</a></h2>
<div class="level2">

<p>

<code>Event::$data</code> is a special variable that can be set when using <a href="#run" title="core:event &crarr;" class="wikilink1">Event::run</a>. The data is assigned by reference, and can be manipulated by all of the callbacks.
</p>
<pre class="code php"><span class="re1">$data</span> <span class="sy0">=</span> Event<span class="sy0">::</span><span class="re1">$data</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Debug the data</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$data</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Run the post_controller event with data</span>
Event<span class="sy0">::</span><span class="me2">run</span><span class="br0">&#40;</span><span class="st0">'system.post_controller'</span><span class="sy0">,</span> <span class="re1">$data</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Display the changed data</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$data</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Event data is cleared immediately after all of the callbacks are run, and can only be accessed during callback execution.
</p>

<p>
<p style="text-align:center">« <a href="benchmark.php" class="wikilink1" title="core:benchmark">Benchmark</a> : Previous | Next : <a href="kohana.php" class="wikilink1" title="core:kohana">Kohana</a> »</p>

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer7df0.gif?id=core%3Aevent&amp;1324588194" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/core/event by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


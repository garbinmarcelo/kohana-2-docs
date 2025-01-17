<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/overview by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    overview    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2011-01-21T23:40:42-0600" />
<meta name="keywords" content="overview" />
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
<li class="level1"><div class="li"><span class="li"><a href="#what_is_kohana" class="toc">What is Kohana?</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#features" class="toc">Features</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#goals" class="toc">Goals</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#mvc" class="toc">MVC</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Expand MVC a bit</td>
	</tr>
</table>



<h1><a name="what_is_kohana" id="what_is_kohana">What is Kohana?</a></h1>
<div class="level1">

<p>

Kohana is a PHP5 framework that uses the Model View Controller architectural pattern. It aims to be secure, lightweight, and easy to use.
</p>

</div>

<h2><a name="features" id="features">Features</a></h2>
<div class="level2">
<ol>
<li class="level1"><div class="li"> <strong>Strict PHP5 OOP.</strong> Offers many benefits: visibility protection, automatic class loading, overloading, interfaces, abstracts, singletons, etc.</div>
</li>
<li class="level1"><div class="li"> <strong>Community, not company, driven.</strong> Kohana is driven by community discussion, ideas, and code. Kohana developers are from all around the world, each with their own talents. This allows a rapid and flexible development cycle that can respond to new bugs and requests within hours.</div>
</li>
<li class="level1"><div class="li"> <strong>GET, POST, COOKIE, and SESSION arrays all work as expected.</strong> Kohana does not limit your access to global data, but provides XSS filtering and sanity checking of all global data.</div>
</li>
<li class="level1"><div class="li"> <strong>Cascading resources, modules, and inheritance.</strong> Controllers, models, libraries, helpers, and views can be loaded from any location within your system, application, or module paths. Configuration options are inherited and can by dynamically overwritten by each application.</div>
</li>
<li class="level1"><div class="li"> <strong>No namespace conflicts.</strong> Class suffixes and prefixes are used to prevent namespace conflicts.</div>
</li>
<li class="level1"><div class="li"> <strong>Auto-loading of classes.</strong> All classes in Kohana are automatically loaded by the framework, and never have to be manually included.</div>
</li>
<li class="level1"><div class="li"> <strong><acronym title="Application Programming Interface">API</acronym> consistency.</strong> Classes that require access to different protocols use “drivers” to keep the the visible <acronym title="Application Programming Interface">API</acronym> completely consistent, even when the back-end changes.</div>
</li>
<li class="level1"><div class="li"> <strong>Powerful event handler.</strong> Kohana events can transparently be: added, replaced, or even removed completely.</div>
</li>
</ol>

</div>

<h2><a name="goals" id="goals">Goals</a></h2>
<div class="level2">

<p>

<strong>To be secure</strong> means to use best practices regarding security, at all times: 

</p>
<ul>
<li class="level1"><div class="li"> Kohana comes with built-in XSS protection, and can also use <a href="http://htmlpurifier.org/" class="urlextern" title="http://htmlpurifier.org"  rel="nofollow">HTMLPurifier</a> as an XSS filter.</div>
</li>
<li class="level1"><div class="li"> All data inserted into the database is escaped using database-specific functions, like <a href="http://php.net/mysql_real_escape_string" class="urlextern" title="http://php.net/mysql_real_escape_string"  rel="nofollow">mysql_real_escape_string</a>, to protect against <a href="http://en.wikipedia.org/wiki/SQL_injection" class="interwiki iw_wp" title="http://en.wikipedia.org/wiki/SQL_injection">SQL injection</a> attacks. <a href="http://php.net/magic_quotes" class="urlextern" title="http://php.net/magic_quotes"  rel="nofollow">magic quotes</a> are disabled by Kohana.</div>
</li>
<li class="level1"><div class="li"> All POST, GET, and COOKIE data is sanitized to prevent malicious behavior.</div>
</li>
</ul>

<p>

<strong>To be lightweight</strong> means to provide the highest amount of flexibility in the most efficient manner:

</p>
<ul>
<li class="level1"><div class="li"> Kohana uses <a href="http://en.wikipedia.org/wiki/Convention_over_Configuration" class="interwiki iw_wp" title="http://en.wikipedia.org/wiki/Convention_over_Configuration">convention over configuration</a> as much as possible.</div>
</li>
<li class="level1"><div class="li"> Sane defaults and highly optimized environment detection routines allow Kohana to run in almost any PHP5 environment.</div>
</li>
<li class="level1"><div class="li"> <a href="http://en.wikipedia.org/wiki/Loose_coupling%23Loose_coupling_in_computing" class="interwiki iw_wp" title="http://en.wikipedia.org/wiki/Loose_coupling%23Loose_coupling_in_computing">Loose coupling</a> is used to always load the minimum number of files, reducing resource usage.</div>
</li>
<li class="level1"><div class="li"> A clean <acronym title="Application Programming Interface">API</acronym> and using native functions whenever possible makes Kohana one of the fastest PHP5 frameworks available.</div>
</li>
</ul>

<p>

<strong>To be easy to use</strong> means to provide understandable <acronym title="Application Programming Interface">API</acronym> and usage documentation, based on community feedback.
</p>

</div>

<h2><a name="mvc" id="mvc">MVC</a></h2>
<div class="level2">

<p>

Kohana uses the <a href="http://en.wikipedia.org/wiki/Model-View-Controller" class="interwiki iw_wp" title="http://en.wikipedia.org/wiki/Model-View-Controller">Model View Controller</a> architectural pattern. This keeps application logic separate from the presentation and allows for cleaner and easier to work with code.
</p>

<p>
In Kohana this means:
</p>
<ul>
<li class="level1"><div class="li"> A <strong>Model</strong> represents a data structure, usually this is a table in a database.</div>
</li>
<li class="level1"><div class="li"> A <strong>View</strong> contains presentation code such as <acronym title="HyperText Markup Language">HTML</acronym>, <acronym title="Cascading Style Sheets">CSS</acronym> and JavaScript.</div>
</li>
<li class="level1"><div class="li"> A <strong>Controller</strong> contains the page logic to tie everything together and generate the page the user sees.</div>
</li>
</ul>

<p>
Credit: <a href="http://teknoid.wordpress.com/2009/01/06/another-way-to-think-about-mvc/" class="urlextern" title="http://teknoid.wordpress.com/2009/01/06/another-way-to-think-about-mvc/"  rel="nofollow">External Link</a>
</p>

<p>
This is just a simple intro post to the concepts of MVC. It is intended for those who are starting to grasp the basics, but are having a bit of a hard time understanding some of the rules and concepts.
</p>

<p>
We’ll use this interesting analogy that I thought works quite well to further clarify some things…
</p>

<p>
<em class="u">So, let’s imagine a bank.</em>
</p>

<p>
The safe is the <strong>Database</strong> this is where all the most important goodies are stored, and are nicely protected from the outside world.
</p>

<p>
Then we have the bankers or in programmatic terms the <strong>Models</strong>. The bankers are the only ones who have access to the safe (the DB). They are generally fat, old and lazy, which follows quite nicely with one of the rules of MVC: <strong>*fat models, skinny controllers</strong>*. We’ll see why and how this analogy applies a little later.
</p>

<p>
Now we’ve got our average bank workers, the gophers, the runners, the <strong>Controllers</strong>. Controllers or gophers do all the running around, that’s why they have to be fit and skinny. They take the loot or information from the bankers (the Models) and bring it to the bank customers the <strong>Views</strong>.
</p>

<p>
The bankers (<strong>Models</strong>) have been at the job for a while, therefore they make all the important decisions. Which brings us to another rule: *keep as much business logic in the model as possible*. The controllers, our average workers, should not be making such decisions, they ask the banker for details, get the info, and pass it on to the customer (<strong>the View</strong>). Hence, we continue to follow the rule of *fat models, skinny controllers*. The gophers do not make important decisions, but they cannot be plain dumb (thus a little business logic in the controller is OK). However, as soon as the gopher begins to think too much the banker gets upset and your bank (or you app) goes out of business. So again, always remember to offload as much business logic (or decision making) to the model.
</p>

<p>
Now, the bankers sure as hell aren’t going to talk to the customers (the <strong>View</strong>) directly, they are way too important in their cushy chairs for that. Thus another rule is followed:   <strong>*Models should not talk to Views</strong>*. This communication between the banker and the customer (the <strong>Model</strong> and the <strong>View</strong>) is always handled by the gopher (the <strong>Controller</strong>).
(Yes, there are some exception to this rule for super VIP customers, but let’s stick to basics for the time being).
</p>

<p>
It also happens that a single worker (Controller) has to get information from more than one banker, and that’s perfectly acceptable. However, if the bankers are related (otherwise how else would they land such nice jobs?)… the bankers (Models) will communicate with each other first, and then pass cumulative information to their gopher, who will happily deliver it to the customer (View). So here’s another rule: <strong>*Related models provide information to the controller via their association (relation)</strong>*. 
</p>

<p>
In our bank it would look something like this:<br/>
 
</p>
<ul>
<li class="level1"><div class="li">Worker Andy → asks banker Bob Buzzkillington → who asks another banker Jim Buzzdickenson → who gets the loot from the safe (the DB).</div>
</li>
</ul>

<p>

So what about our customer (the View)? Well, banks do make mistakes and the customer should be smart enough to balance their own account and make some decisions. In MVC terms we get another simple rule: <strong>*it’s quite alright for the views to contain some logic, which deals with the view or presentation</strong>*. 
</p>

<p>
Following our analogy, the customer will make sure not forget to wear pants while they go to the bank, but they are not going to tell the bankers how to process the transactions.
</p>

<p>
Well, that about covers most of the basics. I hope this analogy helps somebody rather than confuses them even further…
</p>

<p>
Let’s just summarize some rules and concepts:

</p>
<pre class="code"> 1. Fat models, skinny controllers!
 2. Keep as much business logic in the model as possible.
 3. If you see your controller getting “fat”, consider offloading some of the logic to the relevant model (or else bad things will start happening!).
 4. Models should not talk to the views directly (and vice versa).
 5. Related models provide information to the controller via their association (relation).
 6. It’s quite alright for the views to contain some logic, which deals with the view or presentation.</pre>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="lib/exe/indexer489d.gif?id=overview&amp;1324588183" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/overview by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


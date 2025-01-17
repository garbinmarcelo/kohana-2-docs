<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/userguide/todo2.3 by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    userguide:todo2.3    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-09-12T14:48:47-0500" />
<meta name="keywords" content="userguide,todo2.3" />
<link rel="alternate" type="application/rss+xml" title="Current Namespace" href="../feeda2c0.php?mode=list&amp;ns=userguide" />
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
<li class="level1"><div class="li"><span class="li"><a href="#documentation_updates" class="toc">2.3 Documentation Updates</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#to_do_list" class="toc">To Do List</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#these_entries_require_updating" class="toc">These entries require updating</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#these_entries_require_re-writing" class="toc">These entries require re-writing</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#these_entries_are_new_and_require_writing" class="toc">These entries are new and require writing</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#these_entries_are_obsolete_and_will_be_removed" class="toc">These entries are obsolete and will be removed</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#miscellaneous" class="toc">Miscellaneous</a></span></div></li></ul>
</li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->



<h1><a name="documentation_updates" id="documentation_updates">2.3 Documentation Updates</a></h1>
<div class="level1">

<p>

(In progress) All the documentation listed here requires attention. Anyone is welcome to provide the updates.
</p>

<p>
If you are making extensive changes to a page, <strong>please indicate</strong> this by placing your username next to the todo item, until you have finished, to avoid mixups.
</p>

<p>
Once you have finished, <strong>please indicate</strong> this by putting a <del>strike</del> through the item. And remove your username from the item.
</p>

<p>
The ToDo entry on individual pages should be updated, and then the article can be proofed.
</p>

<p>
Please ensure that the style <a href="../userguide.php" class="wikilink1" title="userguide">Guidelines</a> are adhered to. Use the <a href="guidelines/sample.php" class="wikilink1" title="userguide:guidelines:sample">Sample Page</a> as authoritative reference.
</p>

<p>
<strong>NB! This list may be incomplete. Please add any missing items you are aware of which need attention.</strong>
</p>

<p>
The <a href="../changelog/2-2.php" class="wikilink1" title="changelog:2.3">2.3 Changelog</a> also provides update information.
</p>

<p>
The todo items reflect <strong>only</strong> the documentation that must be updated to bring it <strong>up to date.</strong>
</p>

<p>
This list will be merged with outstanding items from the 2.2 todo.
</p>

</div>

<h2><a name="to_do_list" id="to_do_list">To Do List</a></h2>
<div class="level2">

</div>

<h3><a name="these_entries_require_updating" id="these_entries_require_updating">These entries require updating</a></h3>
<div class="level3">

<p>
<strong>Core</strong>
</p>
<ul>
<li class="level1"><div class="li"> <del><a href="../general/events.php#system_events" class="wikilink1" title="general:events">events</a> Created system.log event <a href="http://dev.kohanaphp.com/issues/875" class="urlextern" title="http://dev.kohanaphp.com/issues/875"  rel="nofollow">#875</a></del></div>
</li>
<li class="level1"><div class="li"> <del><a href="../general/events.php#system_events" class="wikilink1" title="general:events">events</a> Added system.redirect event <a href="http://dev.kohanaphp.com/issues/868" class="urlextern" title="http://dev.kohanaphp.com/issues/868"  rel="nofollow">#868</a> (spirit)</del></div>
</li>
</ul>

<p>

<strong>Helpers</strong>
</p>
<ul>
<li class="level1"><div class="li"> <del><a href="../helpers/valid.php#standard_text" class="wikilink1" title="helpers:valid">valid</a> Allows normal punctuation in <code>standard_text</code> <a href="http://dev.kohanaphp.com/issues/807" class="urlextern" title="http://dev.kohanaphp.com/issues/807"  rel="nofollow">#807</a> (spirit)</del></div>
</li>
<li class="level1"><div class="li"> <del><a href="../helpers/valid.php#numeric" class="wikilink1" title="helpers:valid">valid</a> Changed <code>valid::numeric()</code> to allow international formats <a href="http://dev.kohanaphp.com/issues/851" class="urlextern" title="http://dev.kohanaphp.com/issues/851"  rel="nofollow">#851</a> (spirit)</del></div>
</li>
<li class="level1"><div class="li"> <del><a href="../helpers/valid.php#ip" class="wikilink1" title="helpers:valid">valid</a> Changed <code>valid::ip()</code> to allow for private IP networks <a href="http://dev.kohanaphp.com/issues/936" class="urlextern" title="http://dev.kohanaphp.com/issues/936"  rel="nofollow">#936</a> (spirit)</del></div>
</li>
<li class="level1"><div class="li"> <del><a href="../helpers/form.php#dropdown" class="wikilink1" title="helpers:form">form</a> Changed <code>form::dropdown(</code>) to allow for multiple default selected values <a href="http://dev.kohanaphp.com/issues/881" class="urlextern" title="http://dev.kohanaphp.com/issues/881"  rel="nofollow">#881</a> (spirit)</del></div>
</li>
<li class="level1"><div class="li"> <del><a href="../helpers/html.php#stylesheet" class="wikilink1" title="helpers:html">stylesheet</a> Changed <code>html::stylesheet()</code>  to allow full URLs <a href="http://dev.kohanaphp.com/issues/773" class="urlextern" title="http://dev.kohanaphp.com/issues/773"  rel="nofollow">#773</a> (spirit)</del></div>
</li>
<li class="level1"><div class="li"> <del><a href="../helpers/html.php#script" class="wikilink1" title="helpers:html">script</a> Changed <code>html::script()</code>  to allow full URLs <a href="http://dev.kohanaphp.com/issues/773" class="urlextern" title="http://dev.kohanaphp.com/issues/773"  rel="nofollow">#773</a> (spirit)</del></div>
</li>
<li class="level1"><div class="li"> <del><a href="../helpers/html.php#specialchars" class="wikilink1" title="helpers:html">html</a> Export $double_encode parameter from <code>html::specialchars</code> as function parameter to avoid double encoded strings. Add double_encode doc for form::input and form::textarea <a href="http://dev.kohanaphp.com/issues/848" class="urlextern" title="http://dev.kohanaphp.com/issues/848"  rel="nofollow">#848</a> (spirit)</del></div>
</li>
<li class="level1"><div class="li"> <del><a href="../helpers/arr.php" class="wikilink1" title="helpers:arr">arr</a>  Added <code>arr:to_object()</code> <a href="http://dev.kohanaphp.com/issues/772" class="urlextern" title="http://dev.kohanaphp.com/issues/772"  rel="nofollow">#772</a> (spirit)</del></div>
</li>
</ul>

<p>
<strong>Libraries</strong>
</p>
<ul>
<li class="level1"><div class="li"> <del><a href="../libraries/database.php" class="wikilink1" title="libraries:database">database</a> Changed database result object to allow chaining <a href="http://dev.kohanaphp.com/issues/758" class="urlextern" title="http://dev.kohanaphp.com/issues/758"  rel="nofollow">#758</a> (spirit)</del></div>
</li>
<li class="level1"><div class="li"> <del><a href="../libraries/orm.php" class="wikilink1" title="libraries:orm">orm</a> Added “with” functionality <a href="http://dev.kohanaphp.com/issues/856" class="urlextern" title="http://dev.kohanaphp.com/issues/856"  rel="nofollow">#856</a></del></div>
</li>
<li class="level1"><div class="li"> <del><a href="../libraries/orm.php" class="wikilink1" title="libraries:orm">orm</a> Added versioning to ORM with ORM_Versioned <a href="http://dev.kohanaphp.com/issues/812" class="urlextern" title="http://dev.kohanaphp.com/issues/812"  rel="nofollow">#812</a></del></div>
</li>
<li class="level1"><div class="li"> <del><a href="../libraries/orm.php" class="wikilink1" title="libraries:orm">orm</a> Added support for changing <code>has_and_belongs_to_many</code> relationships via <code>$model→relations = array(1, 2, 3)</code> <a href="http://dev.kohanaphp.com/projects/kohana2/repository/revisions/3636" class="urlextern" title="http://dev.kohanaphp.com/projects/kohana2/repository/revisions/3636"  rel="nofollow">revision 3636</a></del></div>
</li>
<li class="level1"><div class="li"> <del><a href="../libraries/image.php" class="wikilink1" title="libraries:image">image</a> Added Graphicsmagic driver <a href="http://dev.kohanaphp.com/issues/920" class="urlextern" title="http://dev.kohanaphp.com/issues/920"  rel="nofollow">#920</a></del></div>
</li>
<li class="level1"><div class="li"> <del><a href="../libraries/image.php" class="wikilink1" title="libraries:image">image</a> Added keep_actions parameter to <code>save()</code> and <code>render()</code> <a href="http://dev.kohanaphp.com/issues/915" class="urlextern" title="http://dev.kohanaphp.com/issues/915"  rel="nofollow">#915</a> (spirit)</del></div>
</li>
<li class="level1"><div class="li"> <del><a href="../addons/auth.php" class="wikilink1" title="addons:auth">auth</a> Added <code>Auth→get_user()</code> <a href="http://dev.kohanaphp.com/issues/842" class="urlextern" title="http://dev.kohanaphp.com/issues/842"  rel="nofollow">#842</a> (spirit)</del></div>
</li>
</ul>

<p>

<strong>Addons</strong>
</p>
<ul>
<li class="level1"><div class="li"> <del><a href="../addons/auth.php" class="wikilink1" title="addons:auth">auth</a> Added config variable to allow configurable session names <a href="http://dev.kohanaphp.com/issues/844" class="urlextern" title="http://dev.kohanaphp.com/issues/844"  rel="nofollow">#844</a> (spirit)</del></div>
</li>
<li class="level1"><div class="li"> <del><a href="../addons/auth.php" class="wikilink1" title="addons:auth">auth</a> Changed Auth ORM driver to allow checking of multiple roles against logged in user <a href="http://dev.kohanaphp.com/issues/932" class="urlextern" title="http://dev.kohanaphp.com/issues/932"  rel="nofollow">#932</a> (spirit)</del></div>
</li>
<li class="level1"><div class="li"> <del><a href="../addons/payment.php" class="wikilink1" title="addons:payment">payment</a> Added Google Checkout driver <a href="http://dev.kohanaphp.com/issues/789" class="urlextern" title="http://dev.kohanaphp.com/issues/789"  rel="nofollow">#789</a></del></div>
</li>
<li class="level1"><div class="li"> <del><a href="../addons/payment.php" class="wikilink1" title="addons:payment">payment</a> Added Moneybookers.com driver <a href="http://dev.kohanaphp.com/issues/571" class="urlextern" title="http://dev.kohanaphp.com/issues/571"  rel="nofollow">#571</a></del></div>
</li>
</ul>

</div>

<h3><a name="these_entries_require_re-writing" id="these_entries_require_re-writing">These entries require re-writing</a></h3>
<div class="level3">

</div>

<h3><a name="these_entries_are_new_and_require_writing" id="these_entries_are_new_and_require_writing">These entries are new and require writing</a></h3>
<div class="level3">

<p>

<strong>Addons</strong>
</p>
<ul>
<li class="level1"><div class="li"> <a href="../addons/gmaps.php" class="wikilink1" title="addons:gmaps">gmaps</a> Currently an article stub, needs to be written.</div>
</li>
</ul>

</div>

<h3><a name="these_entries_are_obsolete_and_will_be_removed" id="these_entries_are_obsolete_and_will_be_removed">These entries are obsolete and will be removed</a></h3>
<div class="level3">

</div>

<h3><a name="miscellaneous" id="miscellaneous">Miscellaneous</a></h3>
<div class="level3">
<ul>
<li class="level1"><div class="li"> <del>Added ability to transparently extend Controllers and Models <a href="http://dev.kohanaphp.com/issues/981" class="urlextern" title="http://dev.kohanaphp.com/issues/981"  rel="nofollow">#981</a></del></div>
</li>
<li class="level1"><div class="li"> Currently, documentation of class extension is in <a href="../general/libraries.php" class="wikilink1" title="general:libraries">libraries</a> and <a href="../general/helpers.php" class="wikilink1" title="general:helpers">helpers</a> This should be moved and expanded into a separate entry <a href="../general/extending.php" class="wikilink2" title="general:extending" rel="nofollow">Extending</a></div>
</li>
</ul>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer0a34.gif?id=userguide%3Atodo2.3&amp;1324588188" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/userguide/todo2.3 by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/calendar by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:calendar    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-04-21T17:23:06-0500" />
<meta name="keywords" content="libraries,calendar" />
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
<li class="level1"><div class="li"><span class="li"><a href="#calendar_library" class="toc">Calendar Library</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#overview" class="toc">Overview</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#loading_the_calendar_library" class="toc">Loading the calendar library</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#example" class="toc">Example</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#adjusting_the_calendar" class="toc">Adjusting the calendar</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#adding_events_to_calendar" class="toc">Adding events to calendar</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#example1" class="toc">Example</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#condition_syntax" class="toc">Condition syntax</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#list_of_conditions" class="toc">List of conditions</a></span></div></li></ul>
</li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">First Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Expand on Start-of-week-day, add all methods</td>
	</tr>
</table>



<h1><a name="calendar_library" id="calendar_library">Calendar Library</a></h1>
<div class="level1">

</div>

<h2><a name="overview" id="overview">Overview</a></h2>
<div class="level2">

<p>

Provides methods for generating and working with a calendar. The library outputs a calendar month in <acronym title="HyperText Markup Language">HTML</acronym>, for use in the system view <code>system/views/kohana_calendar.php</code>
</p>

</div>

<h2><a name="loading_the_calendar_library" id="loading_the_calendar_library">Loading the calendar library</a></h2>
<div class="level2">

<p>
The Calendar class is loaded into your controller using:
</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">calendar</span> <span class="sy0">=</span> <span class="kw2">new</span> Calendar<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

Access to the library is available through $this→calendar
</p>

<p>
The parameters of this constructor are:
</p>
<ul>
<li class="level1"><div class="li"> [integer] month</div>
</li>
<li class="level1"><div class="li"> [integer] year</div>
</li>
<li class="level1"><div class="li"> [boolean] put this argument on TRUE if you want weeks to start on monday (depends of your localization)</div>
</li>
</ul>

</div>

<h3><a name="example" id="example">Example</a></h3>
<div class="level3">
<pre class="code php"><span class="re1">$cal</span> <span class="sy0">=</span> <span class="kw2">new</span> Calendar<span class="br0">&#40;</span><span class="nu0">1</span><span class="sy0">,</span><span class="nu0">2008</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// January, 2008. The default is current month and year</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$cal</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// the view is automatically rendered from the library</span></pre>
<p>

Produces an <acronym title="HyperText Markup Language">HTML</acronym> calendar 

<style type="text/css">
table.calendar { text-align: right; }
table.calendar caption { font-size: 1.5em; padding: 0.2em; }
table.calendar th, table.calendar td { padding: 0.2em; background: #fff; border: 0; }
table.calendar td:hover { background: #ddf; }
table.calendar td.prev-next { background: #ccc; color: #999; }
table.calendar td.today { color: #800; }
</style>

<table class="calendar">
<caption>January 2008</caption>
<tr>
<th>Sun</th>
<th>Mon</th>
<th>Tue</th>
<th>Wed</th>
<th>Thu</th>

<th>Fri</th>
<th>Sat</th>
</tr>
<tr>
<td class="prev-next">28</td>
<td class="prev-next">29</td>
<td>1</td>
<td>2</td>
<td>3</td>
<td>4</td>

<td>5</td>
</tr>
<tr>
<td>6</td>
<td>7</td>
<td>8</td>
<td>9</td>
<td>10</td>
<td>11</td>
<td>12</td>

</tr>
<tr>
<td>13</td>
<td>14</td>
<td>15</td>
<td>16</td>
<td>17</td>
<td>18</td>
<td>19</td>
</tr>

<tr>
<td>20</td>
<td>21</td>
<td>22</td>
<td>23</td>
<td>24</td>
<td>25</td>
<td>26</td>
</tr>
<tr>

<td class="today">27</td>
<td>28</td>
<td>29</td>
<td>30</td>
<td>31</td>
<td class="prev-next">1</td>
<td class="prev-next">2</td>
</tr>
</table>


</p>

</div>

<h3><a name="adjusting_the_calendar" id="adjusting_the_calendar">Adjusting the calendar</a></h3>
<div class="level3">

<p>
The layout of the calendar can be adjusted by creating the following file: <code>application/views/kohana_calendar.php</code> The native Kohana calendar file can be copied from <code>system/views/kohana_calendar.php</code> to have template to start working from.
</p>

</div>

<h2><a name="adding_events_to_calendar" id="adding_events_to_calendar">Adding events to calendar</a></h2>
<div class="level2">

<p>
Kohana Calendar allow us to add events.
</p>

</div>

<h3><a name="example1" id="example1">Example</a></h3>
<div class="level3">
<pre class="code php"><span class="re1">$calendar</span> <span class="sy0">=</span> <span class="kw2">new</span> Calendar<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$calendar</span> <span class="sy0">-&gt;</span> <span class="me1">attach</span><span class="br0">&#40;</span><span class="re1">$calendar</span> <span class="sy0">-&gt;</span> <span class="me1">event</span><span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="sy0">-&gt;</span> <span class="me1">condition</span><span class="br0">&#40;</span><span class="st0">'year'</span><span class="sy0">,</span> <span class="st0">'2008'</span><span class="br0">&#41;</span> <span class="sy0">-&gt;</span> <span class="me1">condition</span><span class="br0">&#40;</span><span class="st0">'month'</span><span class="sy0">,</span> <span class="st0">'5'</span><span class="br0">&#41;</span> <span class="sy0">-&gt;</span> <span class="me1">condition</span><span class="br0">&#40;</span><span class="st0">'day'</span><span class="sy0">,</span> <span class="st0">'23'</span><span class="br0">&#41;</span>  <span class="sy0">-&gt;</span> <span class="me1">output</span><span class="br0">&#40;</span>html<span class="sy0">::</span><span class="me2">anchor</span><span class="br0">&#40;</span><span class="st0">'http://kohanaphp.com'</span><span class="sy0">,</span> <span class="st0">'Click here!'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$calendar</span> <span class="sy0">-&gt;</span> <span class="me1">render</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="condition_syntax" id="condition_syntax">Condition syntax</a></h3>
<div class="level3">
<pre class="code php"><span class="kw2">function</span> condition<span class="br0">&#40;</span><span class="re1">$key</span><span class="sy0">,</span> <span class="re1">$value</span><span class="br0">&#41;</span></pre><ul>
<li class="level1"><div class="li"> @chainable</div>
</li>
<li class="level1"><div class="li"> @param   string  condition key</div>
</li>
<li class="level1"><div class="li"> @param   mixed   condition value</div>
</li>
<li class="level1"><div class="li"> @return  object</div>
</li>
</ul>

</div>

<h3><a name="list_of_conditions" id="list_of_conditions">List of conditions</a></h3>
<div class="level3">
<ul>
<li class="level1"><div class="li"> timestamp       - UNIX timestamp</div>
</li>
<li class="level1"><div class="li"> day             - day number (1-31)</div>
</li>
<li class="level1"><div class="li"> week            - week number (1-5)</div>
</li>
<li class="level1"><div class="li"> month           - month number (1-12)</div>
</li>
<li class="level1"><div class="li"> year            - year number (4 digits)</div>
</li>
<li class="level1"><div class="li"> day_of_week     - day of week (1-7)</div>
</li>
<li class="level1"><div class="li"> current         - active month (boolean) (only show data for the month being rendered)</div>
</li>
<li class="level1"><div class="li"> weekend         - weekend day (boolean)</div>
</li>
<li class="level1"><div class="li"> first_day       - first day of month (boolean)</div>
</li>
<li class="level1"><div class="li"> last_day        - last day of month (boolean)</div>
</li>
<li class="level1"><div class="li"> occurrence      - occurrence of the week day (1-5) (use with “day_of_week”)</div>
</li>
<li class="level1"><div class="li"> last_occurrence - last occurrence of week day (boolean) (use with “day_of_week”)</div>
</li>
<li class="level1"><div class="li"> easter          - Easter day (boolean)</div>
</li>
<li class="level1"><div class="li"> callback        - callback test (boolean)</div>
</li>
</ul>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer8efa.gif?id=libraries%3Acalendar&amp;1324588199" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/calendar by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


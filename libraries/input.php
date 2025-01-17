<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/input by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:input    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-03-11T12:53:26-0600" />
<meta name="keywords" content="libraries,input" />
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
<li class="level1"><div class="li"><span class="li"><a href="#input_library" class="toc">Input Library</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#loading_the_library" class="toc">Loading the library</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#get" class="toc">get()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#post" class="toc">post()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#cookie" class="toc">cookie()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#server" class="toc">server()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#ip_address" class="toc">ip_address()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#valid_ip" class="toc">valid_ip()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#xss_clean" class="toc">xss_clean()</a></span></div></li></ul>
</li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">document xss_clean</td>
	</tr>
</table>



<h1><a name="input_library" id="input_library">Input Library</a></h1>
<div class="level1">

<p>

The input library is useful for two things:
- pre-process global input for security
- provide some useful functions for retrieving input data
</p>

<p>
<strong>Note</strong>:
</p>
<ul>
<li class="level1"><div class="li"> The <strong>$_REQUEST</strong> and <strong>$_GLOBAL</strong> variables are not available within Kohana. </div>
</li>
<li class="level1"><div class="li"> $_POST, $_GET, $_COOKIE and $_SERVER are all converted to utf-8.</div>
</li>
<li class="level1"><div class="li"> Global GET, POST and COOKIE data are sanitized when the Input library is loaded</div>
</li>
</ul>

</div>

<h2><a name="loading_the_library" id="loading_the_library">Loading the library</a></h2>
<div class="level2">

<p>

This library is automatically loaded by the controller so you don&#039;t need to load it yourself.
It is accessed by <code>$this→input</code> in the controller scope.
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="get" id="get">get()</a></h3>
<div class="level3">

<p>
allows you to retrieve GET variables. if global XSS filtering is on (config) then data returned by this function will be filtered.
</p>

<p>
<code>$this→input→get($key = array(), $default = NULL, $xss_clean = FALSE)</code>
</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$key</code> variable to retrieve – default = empty array (returns all variables)</div>
</li>
<li class="level1"><div class="li"> <strong>[mixed]</strong> <code>$default</code> default value if the variable isn&#039;t set</div>
</li>
<li class="level1"><div class="li"> <strong>[boolean]</strong> <code>$xss_clean</code> whether or not to manually apply xss clean</div>
</li>
</ul>
<pre class="code php"><span class="co1">//URL is http://www.example.com/index.php?articleId=123&amp;file=text.txt</span>
<span class="co1">//Note that print statements are for documentation purpose only</span>
&nbsp;
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'file'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">Array
(
    [articleId] =&gt; 123
    [file] =&gt; text.txt
)
&nbsp;
text.txt</pre>
<p>
You can also pass a default value and manually XSS clean the request by passing parameters.
</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'file'</span><span class="sy0">,</span><span class="st0">'default_value'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//'default_value' is the default value if the key doesn't exist.</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'file'</span><span class="sy0">,</span><span class="kw2">null</span><span class="sy0">,</span><span class="kw2">true</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//manually apply XSS clean</span></pre>
</div>

<h3><a name="post" id="post">post()</a></h3>
<div class="level3">

<p>
allows you to retrieve POST variables. if global XSS filtering is on (config) then data returned by this function will be filtered.
</p>

<p>
<code>$this→input→post($key = array(), $default = NULL, $xss_clean = FALSE)</code>
</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$key</code> variable to retrieve – default = empty array (returns all variables)</div>
</li>
<li class="level1"><div class="li"> <strong>[mixed]</strong> <code>$default</code> default value if the variable isn&#039;t set</div>
</li>
<li class="level1"><div class="li"> <strong>[boolean]</strong> <code>$xss_clean</code> whether or not to manually apply xss clean</div>
</li>
</ul>
<pre class="code php"><span class="co1">//POST variables are articleId=123 and file=text.txt</span>
<span class="co1">//Note that print statements are for documentation purpose only</span>
&nbsp;
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">post</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">post</span><span class="br0">&#40;</span><span class="st0">'file'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">Array
(
    [articleId] =&gt; 123
    [file] =&gt; text.txt
)
&nbsp;
text.txt</pre>
<p>
You can also pass a default value and manually XSS clean the request by passing parameters.
</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">post</span><span class="br0">&#40;</span><span class="st0">'file'</span><span class="sy0">,</span><span class="st0">'default_value'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//'default_value' is the default value if the key doesn't exist.</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">post</span><span class="br0">&#40;</span><span class="st0">'file'</span><span class="sy0">,</span><span class="kw2">null</span><span class="sy0">,</span><span class="kw2">true</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//manually apply XSS clean</span></pre>
</div>

<h3><a name="cookie" id="cookie">cookie()</a></h3>
<div class="level3">

<p>
allows you to retrieve COOKIE variables. if global XSS filtering is on (config) then data returned by this function will be filtered.
</p>
<ul>
<li class="level1"><div class="li"> [string] variable to retrieve – default = empty array (returns all variables)</div>
</li>
</ul>
<pre class="code php"><span class="co1">//COOKIE name is &quot;username&quot; and the contents of this cookie is &quot;aart-jan&quot;.</span>
<span class="co1">//Note that print statements are for documentation purpose only</span>
&nbsp;
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">cookie</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">cookie</span><span class="br0">&#40;</span><span class="st0">'username'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">Array
(
    [username] =&gt; aart-jan
)
aart-jan</pre>
<p>
You can also pass a default value and manually XSS clean the request by passing parameters.
</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">cookie</span><span class="br0">&#40;</span><span class="st0">'username'</span><span class="sy0">,</span><span class="st0">'default_value'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//'default_value' is the default value if the key doesn't exist.</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">cookie</span><span class="br0">&#40;</span><span class="st0">'username'</span><span class="sy0">,</span><span class="kw2">null</span><span class="sy0">,</span><span class="kw2">true</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//manually apply XSS clean</span></pre>
</div>

<h3><a name="server" id="server">server()</a></h3>
<div class="level3">

<p>
allows you to retrieve SERVER variables. if global XSS filtering is on (config) then data returned by this function will be filtered. An overview of these variables can be found in the <a href="http://nl2.php.net/manual/en/reserved.variables.server.php" class="urlextern" title="http://nl2.php.net/manual/en/reserved.variables.server.php"  rel="nofollow">php documentation</a>
</p>
<ul>
<li class="level1"><div class="li"> [string] variable to retrieve – default = empty array (returns all variables)</div>
</li>
</ul>
<pre class="code php"><span class="co1">//Note that print statements are for documentation purpose only</span>
<a href="http://www.php.net/print"><span class="kw3">print</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">server</span><span class="br0">&#40;</span><span class="st0">'HTTP_HOST'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//this example ran on a local server</span></pre>
<p>

It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">localhost</pre>
<p>
You can also pass a default value and manually XSS clean the request by passing parameters.
</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">server</span><span class="br0">&#40;</span><span class="st0">'HTTP_HOST'</span><span class="sy0">,</span><span class="st0">'default_value'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//'default_value' is the default value if the key doesn't exist.</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">server</span><span class="br0">&#40;</span><span class="st0">'HTTP_HOST'</span><span class="sy0">,</span><span class="kw2">null</span><span class="sy0">,</span><span class="kw2">true</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//manually apply XSS clean</span></pre>
</div>

<h3><a name="ip_address" id="ip_address">ip_address()</a></h3>
<div class="level3">

<p>
&#039;ip_address&#039; returns the IP-address of the user visiting using your webapplication. 
It returns &#039;0.0.0.0&#039; if there&#039;s no IP.

</p>
<pre class="code php"><a href="http://www.php.net/print"><span class="kw3">print</span></a> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">ip_address</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">//this example ran on a local server</span></pre>
<p>

It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">127.0.0.1</pre>
</div>

<h3><a name="valid_ip" id="valid_ip">valid_ip()</a></h3>
<div class="level3">

<p>
&#039;valid_ip&#039; will check whether the specified IP is a valid IPV4 ip-address according to the RFC specifications.
</p>
<ul>
<li class="level1"><div class="li"> [string] IP address to be validated</div>
</li>
</ul>

<p>
This function is identical to the <a href="../helpers/valid.php#ip" class="wikilink1" title="helpers:valid">IP address validation helper</a>.
</p>

</div>

<h3><a name="xss_clean" id="xss_clean">xss_clean()</a></h3>
<div class="level3">

<p>

allows you to clean a string to make sure it is safe.

</p>
<ul>
<li class="level1"><div class="li"> [string/array] The string or the array of strings to clean</div>
</li>
</ul>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">xss_clean</span><span class="br0">&#40;</span><span class="re1">$suspect_input</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexerf9cb.gif?id=libraries%3Ainput&amp;1324588200" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/input by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:17 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


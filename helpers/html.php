<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/helpers/html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:36 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    helpers:html    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-04-18T15:07:56-0500" />
<meta name="keywords" content="helpers,html" />
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
<li class="level1"><div class="li"><span class="li"><a href="#html_helper" class="toc">HTML Helper</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#specialchars" class="toc">specialchars()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#anchor" class="toc">anchor()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#file_anchor" class="toc">file_anchor()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#panchor" class="toc">panchor()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#anchor_array" class="toc">anchor_array()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#email" class="toc">email()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#mailto" class="toc">mailto()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#meta" class="toc">meta()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#stylesheet" class="toc">stylesheet()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#link" class="toc">link()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#script" class="toc">script()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#image" class="toc">image()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#attributes" class="toc">attributes()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#breadcrumb" class="toc">breadcrumb()</a></span></div></li></ul>
</li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->



<h1><a name="html_helper" id="html_helper">HTML Helper</a></h1>
<div class="level1">

<p>
The <acronym title="HyperText Markup Language">HTML</acronym> helper assists in calling various elements such as stylesheet, javascript, image links and anchor links into position.
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="specialchars" id="specialchars">specialchars()</a></h3>
<div class="level3">

<p>
&#039;specialchars&#039; is similar to <acronym title="Hypertext Preprocessor">PHP</acronym>&#039;s <a href="http://php.net/htmlspecialchars" class="urlextern" title="http://php.net/htmlspecialchars"  rel="nofollow">htmlspecialchars()</a> function. However, there are some small differences:
</p>
<ul>
<li class="level1"><div class="li"> It will automatically use the UTF-8 character set in conversion (instead of <acronym title="International Organization for Standardization">ISO</acronym>-8859-1).</div>
</li>
<li class="level1"><div class="li"> It will automatically translate both single and double quotes to <acronym title="HyperText Markup Language">HTML</acronym> entities (instead of only double quotes).</div>
</li>
<li class="level1"><div class="li"> It provides built-in fallback functionality for not double encoding existing <acronym title="HyperText Markup Language">HTML</acronym> entities (for <acronym title="Hypertext Preprocessor">PHP</acronym> versions older than 5.2.3).</div>
</li>
</ul>

<p>

The two arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [string] The string you want to encode</div>
</li>
<li class="level1"><div class="li"> [boolean] Do you want to encode existing <acronym title="HyperText Markup Language">HTML</acronym> entities? – TRUE by default</div>
</li>
</ul>

<p>
<strong>Example:</strong>

</p>
<pre class="code php"><span class="re1">$string</span> <span class="sy0">=</span> <span class="st0">'&lt;p&gt;&quot;I<span class="es0">\'</span>m hungry&quot;&amp;mdash;Cookie Monster said.&lt;/p&gt;'</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">specialchars</span><span class="br0">&#40;</span><span class="re1">$string</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in the following <acronym title="HyperText Markup Language">HTML</acronym>:

</p>
<pre class="code html4strict"><span class="sc1">&amp;lt;</span>p<span class="sc1">&amp;gt;</span><span class="sc1">&amp;quot;</span>I<span class="sc1">&amp;#039;</span>m hungry<span class="sc1">&amp;quot;</span><span class="sc1">&amp;amp;</span>mdash;Cookie Monster said.<span class="sc1">&amp;lt;</span>/p<span class="sc1">&amp;gt;</span></pre>
<p>
When setting the second parameter to FALSE, existing <acronym title="HyperText Markup Language">HTML</acronym> entities are preserved. Look closely at <code>&amp;mdash;</code>.

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">specialchars</span><span class="br0">&#40;</span><span class="re1">$string</span><span class="sy0">,</span> <span class="kw2">FALSE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre><pre class="code html4strict"><span class="sc1">&amp;lt;</span>p<span class="sc1">&amp;gt;</span><span class="sc1">&amp;quot;</span>I<span class="sc1">&amp;#39;</span>m hungry<span class="sc1">&amp;quot;</span><span class="sc1">&amp;mdash;</span>Cookie Monster said.<span class="sc1">&amp;lt;</span>/p<span class="sc1">&amp;gt;</span></pre>
</div>

<h3><a name="anchor" id="anchor">anchor()</a></h3>
<div class="level3">

<p>

&#039;anchor&#039; creates a <acronym title="HyperText Markup Language">HTML</acronym> anchor (&lt;a href=””&gt;&lt;/a&gt;), linking an internal page or external site automatically.
</p>

<p>
The four arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [string] An internal or external page that you would like to link to</div>
</li>
<li class="level1"><div class="li"> [string] The title you would like to have show up as the hyperlink</div>
</li>
<li class="level1"><div class="li"> [array] Attributes to add to your anchor</div>
</li>
<li class="level1"><div class="li"> [string] The protocol your link will use: &#039;ftp&#039;, &#039;irc&#039;, etc. – This is only necessary if it&#039;s an internal page with a non-absolute link for the first argument and you need to change the protocol from &#039;http&#039;</div>
</li>
</ul>

<p>

<strong>Example 1:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">anchor</span><span class="br0">&#40;</span><span class="st0">'home/news'</span><span class="sy0">,</span> <span class="st0">'Go to our news section!'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/a.php"><span class="kw2">&lt;a</span></a> <span class="kw3">href</span><span class="sy0">=</span><span class="st0">&quot;http://localhost/home/news&quot;</span><span class="kw2">&gt;</span></span>Go to our news section!<span class="sc2"><span class="kw2">&lt;/a&gt;</span></span></pre>
<p>
<strong>Example 2:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">anchor</span><span class="br0">&#40;</span><span class="st0">'irc://irc.freenode.net/kohana'</span><span class="sy0">,</span> <span class="st0">'Join us on IRC!'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'style'</span><span class="sy0">=&gt;</span><span class="st0">'font-size: 20px;'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/a.php"><span class="kw2">&lt;a</span></a> <span class="kw3">href</span><span class="sy0">=</span><span class="st0">&quot;irc://irc.freenode.net/kohana&quot;</span> <span class="kw3">style</span><span class="sy0">=</span><span class="st0">&quot;font-size: 20px;&quot;</span><span class="kw2">&gt;</span></span>Join us on IRC!<span class="sc2"><span class="kw2">&lt;/a&gt;</span></span></pre>
</div>

<h3><a name="file_anchor" id="file_anchor">file_anchor()</a></h3>
<div class="level3">

<p>

Similar to &#039;anchor&#039;, &#039;file_anchor&#039; creates a <acronym title="HyperText Markup Language">HTML</acronym> anchor (&lt;a href=””&gt;&lt;/a&gt;) linking to non-Kohana resources. Therefore, it will always prefix the site&#039;s <acronym title="Uniform Resource Locator">URL</acronym> to the path of your file.
</p>

<p>
The four arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [string] An internal file that you would like to link to</div>
</li>
<li class="level1"><div class="li"> [string] The title you would like to have show up as the hyperlink</div>
</li>
<li class="level1"><div class="li"> [array] Attributes to add to your anchor</div>
</li>
<li class="level1"><div class="li"> [string] The protocol your link will use: &#039;ftp&#039;, &#039;irc&#039;, etc. – This is only necessary if you need to change the protocol from &#039;http&#039;</div>
</li>
</ul>

<p>

<strong>Example 1:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">file_anchor</span><span class="br0">&#40;</span><span class="st0">'media/files/2007-12-magazine.pdf'</span><span class="sy0">,</span> <span class="st0">'Check out our latest magazine!'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/a.php"><span class="kw2">&lt;a</span></a> <span class="kw3">href</span><span class="sy0">=</span><span class="st0">&quot;http://localhost/media/files/2007-12-magazine.pdf&quot;</span><span class="kw2">&gt;</span></span>Check out our latest magazine!<span class="sc2"><span class="kw2">&lt;/a&gt;</span></span></pre>
<p>

<strong>Example 2:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">file_anchor</span><span class="br0">&#40;</span><span class="st0">'pub/index.php'</span><span class="sy0">,</span> <span class="st0">'The Public Linux Archive'</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'id'</span><span class="sy0">=&gt;</span><span class="st0">'id432'</span><span class="br0">&#41;</span><span class="sy0">,</span> <span class="st0">'ftp'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/a.php"><span class="kw2">&lt;a</span></a> <span class="kw3">href</span><span class="sy0">=</span><span class="st0">&quot;ftp://localhost/pub/index.php&quot;</span> <span class="kw3">id</span><span class="sy0">=</span><span class="st0">&quot;id432&quot;</span><span class="kw2">&gt;</span></span>The Public Linux Archive<span class="sc2"><span class="kw2">&lt;/a&gt;</span></span></pre>
</div>

<h3><a name="panchor" id="panchor">panchor()</a></h3>
<div class="level3">

<p>

Similar to &#039;anchor&#039;, but accepts the protocol attribute first instead of last.
</p>

<p>
The four arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [string] The protocol your link will use: &#039;ftp&#039;, &#039;irc&#039;, etc. This is only necessary if it&#039;s an internal page with a non-absolute link for the first argument and you need to change the protocol from &#039;http&#039;</div>
</li>
<li class="level1"><div class="li"> [string] An internal or external page that you would like to link to</div>
</li>
<li class="level1"><div class="li"> [string] The title you would like to have show up as the hyperlink</div>
</li>
<li class="level1"><div class="li"> [array] Attributes to add to your anchor</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">panchor</span><span class="br0">&#40;</span><span class="st0">'irc'</span><span class="sy0">,</span> <span class="st0">'/kohana'</span><span class="sy0">,</span> <span class="st0">'Join us on our custom IRC!'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/a.php"><span class="kw2">&lt;a</span></a> <span class="kw3">href</span><span class="sy0">=</span><span class="st0">&quot;irc://localhost/kohana&quot;</span><span class="kw2">&gt;</span></span>Join us on our custom IRC!<span class="sc2"><span class="kw2">&lt;/a&gt;</span></span></pre>
</div>

<h3><a name="anchor_array" id="anchor_array">anchor_array()</a></h3>
<div class="level3">

<p>
<code>anchor_array($array)</code> create an array of anchors from an array of link/title pairs. It takes:

</p>
<ul>
<li class="level1"><div class="li"> [array] link/title pairs</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span>html<span class="sy0">::</span><span class="me2">anchor_array</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'home/news'</span> <span class="sy0">=&gt;</span> <span class="st0">'Go to our news section!'</span><span class="sy0">,</span> <span class="st0">'home/about'</span> <span class="sy0">=&gt;</span> <span class="st0">'Go to the about page'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result as:
</p>
<pre class="code php"><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#41;</span> <a href="http://www.php.net/array"><span class="kw3">Array</span></a>
<span class="br0">&#40;</span>
    <span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="sy0">&lt;</span>a href<span class="sy0">=</span><span class="st0">&quot;/kohana/index.php/home/news&quot;</span><span class="sy0">&gt;</span>Go to our news section<span class="sy0">!&lt;/</span>a<span class="sy0">&gt;</span>
    <span class="br0">&#91;</span><span class="nu0">1</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="sy0">&lt;</span>a href<span class="sy0">=</span><span class="st0">&quot;/kohana/index.php/home/about&quot;</span><span class="sy0">&gt;</span>Go to the about page<span class="sy0">&lt;/</span>a<span class="sy0">&gt;</span>
<span class="br0">&#41;</span></pre>
</div>

<h3><a name="email" id="email">email()</a></h3>
<div class="level3">

<p>

&#039;email($email)&#039; generates an obfuscated version of an email address. It escapes all characters of the e-mail address into <acronym title="HyperText Markup Language">HTML</acronym>, hex or raw randomly to help prevent spam and e-mail harvesting. It takes:

</p>
<ul>
<li class="level1"><div class="li"> [string] E-mail address</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span>html<span class="sy0">::</span><span class="me2">email</span><span class="br0">&#40;</span><span class="st0">'test@mydomain.com'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It could result as:

</p>
<pre class="code html4strict">(string) t<span class="sc1">&amp;#101;</span><span class="sc1">&amp;#x73;</span><span class="sc1">&amp;#116;</span><span class="sc1">&amp;#x40;</span>m<span class="sc1">&amp;#121;</span><span class="sc1">&amp;#x64;</span>o<span class="sc1">&amp;#109;</span><span class="sc1">&amp;#x61;</span><span class="sc1">&amp;#105;</span>n<span class="sc1">&amp;#46;</span><span class="sc1">&amp;#x63;</span>o<span class="sc1">&amp;#109;</span></pre>
</div>

<h3><a name="mailto" id="mailto">mailto()</a></h3>
<div class="level3">

<p>

&#039;mailto&#039; prints a &lt;a href=“mailto:”&gt;&lt;/a&gt; tag but escapes all characters of the e-mail with the above method.
</p>

<p>
The three arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [string] E-mail address</div>
</li>
<li class="level1"><div class="li"> [string] The title you would like to have show up as the hyperlink</div>
</li>
<li class="level1"><div class="li"> [string or array] Attributes to add to your anchor</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">mailto</span><span class="br0">&#40;</span><span class="st0">'info@example.com'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/a.php"><span class="kw2">&lt;a</span></a> <span class="kw3">href</span><span class="sy0">=</span><span class="st0">&quot;&amp;#109;&amp;#097;&amp;#105;&amp;#108;&amp;#116;&amp;#111;&amp;#058;i&amp;#x6e;fo&amp;#x40;&amp;#101;&amp;#x78;&amp;#x61;mp&amp;#108;e&amp;#x2e;&amp;#x63;&amp;#x6f;&amp;#109;&quot;</span><span class="kw2">&gt;</span></span>i<span class="sc1">&amp;#x6e;</span>fo<span class="sc1">&amp;#x40;</span><span class="sc1">&amp;#101;</span><span class="sc1">&amp;#x78;</span><span class="sc1">&amp;#x61;</span>mp<span class="sc1">&amp;#108;</span>e<span class="sc1">&amp;#x2e;</span><span class="sc1">&amp;#x63;</span><span class="sc1">&amp;#x6f;</span><span class="sc1">&amp;#109;</span><span class="sc2"><span class="kw2">&lt;/a&gt;</span></span></pre>
</div>

<h3><a name="meta" id="meta">meta()</a></h3>
<div class="level3">

<p>

&#039;meta($tag, $value = NULL)&#039; creates a meta tag.
</p>

<p>
The two arguments are:
</p>
<ul>
<li class="level1"><div class="li"> <strong>[string|array]</strong> tag name, or an array of tags</div>
</li>
<li class="level1"><div class="li"> <strong>[string]</strong> tag “content” value - default NULL</div>
</li>
<li class="level1"><div class="li"> returns <strong>[string]</strong> the meta tag(s)</div>
</li>
</ul>

<p>
<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">meta</span><span class="br0">&#40;</span><span class="st0">'generator'</span><span class="sy0">,</span> <span class="st0">'Kohana 2.2'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">meta</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'generator'</span> <span class="sy0">=&gt;</span> <span class="st0">'Kohana 2.2'</span><span class="sy0">,</span> <span class="st0">'robots'</span> <span class="sy0">=&gt;</span> <span class="st0">'noindex,nofollow'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/meta.php"><span class="kw2">&lt;meta</span></a> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;generator&quot;</span> <span class="kw3">content</span><span class="sy0">=</span><span class="st0">&quot;Kohana 2.2&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span>
&nbsp;
<span class="sc2"><a href="http://december.com/html/4/element/meta.php"><span class="kw2">&lt;meta</span></a> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;generator&quot;</span> <span class="kw3">content</span><span class="sy0">=</span><span class="st0">&quot;Kohana 2.2&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span>
<span class="sc2"><a href="http://december.com/html/4/element/meta.php"><span class="kw2">&lt;meta</span></a> <span class="kw3">name</span><span class="sy0">=</span><span class="st0">&quot;robots&quot;</span> <span class="kw3">content</span><span class="sy0">=</span><span class="st0">&quot;noindex,nofollow&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span></pre>
</div>

<h3><a name="stylesheet" id="stylesheet">stylesheet()</a></h3>
<div class="level3">

<p>

&#039;stylesheet&#039; calls <acronym title="Cascading Style Sheets">CSS</acronym> files internally and will suffix .css if it is not already present. It supports full absolute <acronym title="Uniform Resource Locator">URL</acronym>.
</p>

<p>
The three arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [string or array] Either a string with the file&#039;s location or an array of files</div>
</li>
<li class="level1"><div class="li"> [string or array] Media type such as &#039;screen&#039;, &#039;print&#039; or &#039;aural&#039;</div>
</li>
<li class="level1"><div class="li"> [boolean] Set to TRUE if you want to have the index.php file included in the link – This makes the difference between processing the request through Kohana (usually a media controller) or simply calling the file with an absolute path</div>
</li>
</ul>

<p>
<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">stylesheet</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
    <span class="st0">'media/css/default'</span><span class="sy0">,</span>
    <span class="st0">'media/css/menu'</span><span class="sy0">,</span>
    <span class="st0">'http://developer.yahoo.com/yui/build/reset-fonts-grids/reset-fonts-grids.css'</span>
<span class="br0">&#41;</span><span class="sy0">,</span>
<a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
    <span class="st0">'screen'</span><span class="sy0">,</span>
    <span class="st0">'print'</span><span class="sy0">,</span>
    <span class="st0">'print'</span>
<span class="br0">&#41;</span><span class="sy0">,</span> <span class="kw2">FALSE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/link.php"><span class="kw2">&lt;link</span></a> <span class="kw3">rel</span><span class="sy0">=</span><span class="st0">&quot;stylesheet&quot;</span> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;text/css&quot;</span> <span class="kw3">href</span><span class="sy0">=</span><span class="st0">&quot;http://localhost/media/css/default.css&quot;</span> <span class="kw3">media</span><span class="sy0">=</span><span class="st0">&quot;screen&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span>
<span class="sc2"><a href="http://december.com/html/4/element/link.php"><span class="kw2">&lt;link</span></a> <span class="kw3">rel</span><span class="sy0">=</span><span class="st0">&quot;stylesheet&quot;</span> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;text/css&quot;</span> <span class="kw3">href</span><span class="sy0">=</span><span class="st0">&quot;http://localhost/media/css/menu.css&quot;</span> <span class="kw3">media</span><span class="sy0">=</span><span class="st0">&quot;print&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span>
<span class="sc2"><a href="http://december.com/html/4/element/link.php"><span class="kw2">&lt;link</span></a> <span class="kw3">rel</span><span class="sy0">=</span><span class="st0">&quot;stylesheet&quot;</span> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;text/css&quot;</span> <span class="kw3">href</span><span class="sy0">=</span><span class="st0">&quot;http://developer.yahoo.com/yui/build/reset-fonts-grids/reset-fonts-grids.css&quot;</span> <span class="kw3">media</span><span class="sy0">=</span><span class="st0">&quot;print&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span></pre>

<div class='box red'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<p class='box_title'><strong>Important</strong></p>
<div class='box_content'><p>
Don&#039;t forget to add a final TRUE parameter if your Kohana frameworks still need “index.php” in the <acronym title="Uniform Resource Locator">URL</acronym> (this will be the case until you modify this setting as explained in the tutorial from Christophe <a href="http://kohanaphp.com/tutorials/video/working_with_media_files.php" class="urlextern" title="http://kohanaphp.com/tutorials/video/working_with_media_files.php"  rel="nofollow">http://kohanaphp.com/tutorials/video/working_with_media_files.php</a>).
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


</div>

<h3><a name="link" id="link">link()</a></h3>
<div class="level3">

<p>

&#039;link&#039; calls files such as feeds internally. Will render the &lt;link&gt; tag. Linking to stylesheets also uses the &lt;link&gt; tag but the html::stylesheet() helper can be used for those.
</p>

<p>
Arguments:
</p>
<ul>
<li class="level1"><div class="li"> [string or array] Either a string with the file&#039;s location or an array of files</div>
</li>
<li class="level1"><div class="li"> [string or array] Either a string or array with values for the &#039;rel&#039; attribute (e.g. stylesheet, alternate)</div>
</li>
<li class="level1"><div class="li"> [string or array] Either a string or array with values for the &#039;type&#039; attribute (application/rss+xml etc.)</div>
</li>
<li class="level1"><div class="li"> [boolean] set to TRUE to specify the suffix of the file, defaults to FALSE</div>
</li>
<li class="level1"><div class="li"> [string or array] Either a string or array with values for the &#039;media&#039; attribute (print, screen etc.)</div>
</li>
<li class="level1"><div class="li"> [boolean] Set to TRUE if you want to have the index.php file included in the link – This makes the difference between processing the request through Kohana (usually a media controller) or simply calling the file with an absolute path</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><a href="http://www.php.net/link"><span class="kw3">link</span></a><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
    <span class="st0">'welcome/home/rss'</span><span class="sy0">,</span>
    <span class="st0">'welcome/home/atom'</span>
<span class="br0">&#41;</span><span class="sy0">,</span>
<span class="st0">'alternate'</span><span class="sy0">,</span>
<a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'application/rss+xml'</span><span class="sy0">,</span><span class="st0">'application/atom+xml'</span><span class="br0">&#41;</span>
<span class="sy0">,</span> <span class="kw2">FALSE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/link.php"><span class="kw2">&lt;link</span></a> <span class="kw3">rel</span><span class="sy0">=</span><span class="st0">&quot;alternate&quot;</span> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;application/rss+xml&quot;</span> <span class="kw3">href</span><span class="sy0">=</span><span class="st0">&quot;http://localhost/welcome/home/rss&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span>
<span class="sc2"><a href="http://december.com/html/4/element/link.php"><span class="kw2">&lt;link</span></a> <span class="kw3">rel</span><span class="sy0">=</span><span class="st0">&quot;alternate&quot;</span> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;application/atom+xml&quot;</span> <span class="kw3">href</span><span class="sy0">=</span><span class="st0">&quot;http://localhost/welcome/home/atom&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span></pre>

<div class='box red'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<p class='box_title'><strong>Important</strong></p>
<div class='box_content'><p>
Don&#039;t forget to add a final TRUE parameter if your Kohana frameworks still need “index.php” in the <acronym title="Uniform Resource Locator">URL</acronym> (this will be the case until you modify this setting as explained in the tutorial from Christophe <a href="http://kohanaphp.com/tutorials/video/working_with_media_files.php" class="urlextern" title="http://kohanaphp.com/tutorials/video/working_with_media_files.php"  rel="nofollow">http://kohanaphp.com/tutorials/video/working_with_media_files.php</a>).
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


</div>

<h3><a name="script" id="script">script()</a></h3>
<div class="level3">

<p>

&#039;script&#039; calls JavaScript files internally and will suffix .js if not present in your file call. It supports full absolute <acronym title="Uniform Resource Locator">URL</acronym>.
</p>

<p>
The two arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [string or array] Either a string with the file&#039;s location or an array of files</div>
</li>
<li class="level1"><div class="li"> [boolean] Set to TRUE if you want to have the index.php file included in the link – This makes the difference between processing the request through Kohana (usually a media controller) or simply calling the file with an absolute path</div>
</li>
</ul>

<p>
<strong>Example:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">script</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
    <span class="st0">'media/js/login'</span><span class="sy0">,</span>
    <span class="st0">'media/js/iefixes.js'</span><span class="sy0">,</span>
    <span class="st0">'http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js'</span>
<span class="br0">&#41;</span><span class="sy0">,</span> <span class="kw2">FALSE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/script.php"><span class="kw2">&lt;script</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;text/javascript&quot;</span> <span class="kw3">src</span><span class="sy0">=</span><span class="st0">&quot;http://localhost/media/js/login.js&quot;</span><span class="kw2">&gt;</span></span><span class="sc2"><span class="kw2">&lt;/script&gt;</span></span>
<span class="sc2"><a href="http://december.com/html/4/element/script.php"><span class="kw2">&lt;script</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;text/javascript&quot;</span> <span class="kw3">src</span><span class="sy0">=</span><span class="st0">&quot;http://localhost/media/js/iefixes.js&quot;</span><span class="kw2">&gt;</span></span><span class="sc2"><span class="kw2">&lt;/script&gt;</span></span>
<span class="sc2"><a href="http://december.com/html/4/element/script.php"><span class="kw2">&lt;script</span></a> <span class="kw3">type</span><span class="sy0">=</span><span class="st0">&quot;text/javascript&quot;</span> <span class="kw3">src</span><span class="sy0">=</span><span class="st0">&quot;http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js&quot;</span><span class="kw2">&gt;</span></span><span class="sc2"><span class="kw2">&lt;/script&gt;</span></span></pre>

<div class='box red'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<p class='box_title'><strong>Important</strong></p>
<div class='box_content'><p>
Don&#039;t forget to add a final TRUE parameter if your Kohana frameworks still need “index.php” in the <acronym title="Uniform Resource Locator">URL</acronym> (this will be the case until you modify this setting as explained in the tutorial from Christophe <a href="http://kohanaphp.com/tutorials/video/working_with_media_files.php" class="urlextern" title="http://kohanaphp.com/tutorials/video/working_with_media_files.php"  rel="nofollow">http://kohanaphp.com/tutorials/video/working_with_media_files.php</a>).
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


</div>

<h3><a name="image" id="image">image()</a></h3>
<div class="level3">

<p>

&#039;image&#039; creates a &#039;img&#039; <acronym title="HyperText Markup Language">HTML</acronym> tag.
</p>

<p>
There are three arguments:
</p>
<ul>
<li class="level1"><div class="li"> [string or array] A string to specify the image &#039;src&#039; attribute or an array of attributes</div>
</li>
<li class="level1"><div class="li"> [string or array] A string to specify the &#039;alt&#039; attribute or an array of attributes</div>
</li>
<li class="level1"><div class="li"> [boolean] Set to TRUE if you want to have &#039;/index.php/&#039; included in the link (to use views to serve images using Kohana)</div>
</li>
</ul>

<p>

<strong>Example 1:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">image</span><span class="br0">&#40;</span><span class="st0">'media/images/thumbs/01.png'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/img.php"><span class="kw2">&lt;img</span></a> <span class="kw3">src</span><span class="sy0">=</span><span class="st0">&quot;http://localhost/media/images/thumbs/01.png&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span></pre><pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">image</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'src'</span> <span class="sy0">=&gt;</span> <span class="st0">'media/images/thumbs/01.png'</span><span class="sy0">,</span> <span class="st0">'width'</span> <span class="sy0">=&gt;</span> <span class="st0">'100'</span><span class="sy0">,</span> <span class="st0">'height'</span> <span class="sy0">=&gt;</span> <span class="nu0">100</span><span class="br0">&#41;</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'alt'</span> <span class="sy0">=&gt;</span> <span class="st0">'Thumbnail'</span><span class="sy0">,</span> <span class="st0">'class'</span> <span class="sy0">=&gt;</span> <span class="st0">'noborder'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre><pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/img.php"><span class="kw2">&lt;img</span></a> <span class="kw3">src</span><span class="sy0">=</span><span class="st0">&quot;http://localhost/media/images/thumbs/01.png&quot;</span> <span class="kw3">width</span><span class="sy0">=</span><span class="st0">&quot;100&quot;</span> <span class="kw3">height</span><span class="sy0">=</span><span class="st0">&quot;100&quot;</span> <span class="kw3">alt</span><span class="sy0">=</span><span class="st0">&quot;Thumbnail&quot;</span> <span class="kw3">class</span><span class="sy0">=</span><span class="st0">&quot;noborder&quot;</span><span class="sy0">/</span><span class="kw2">&gt;</span></span></pre>
<p>
<strong>Example 2 (with html::anchor and lightbox):</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">file_anchor</span><span class="br0">&#40;</span><span class="st0">'media/images/01.png'</span><span class="sy0">,</span> html<span class="sy0">::</span><span class="me2">image</span><span class="br0">&#40;</span><span class="st0">'media/images/thumbs/01.png'</span><span class="br0">&#41;</span><span class="sy0">,</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'rel'</span><span class="sy0">=&gt;</span><span class="st0">'lightbox'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/a.php"><span class="kw2">&lt;a</span></a> <span class="kw3">href</span><span class="sy0">=</span><span class="st0">&quot;http://localhost/media/images/01.png&quot;</span> <span class="kw3">rel</span><span class="sy0">=</span><span class="st0">&quot;lightbox&quot;</span><span class="kw2">&gt;</span></span><span class="sc2"><a href="http://december.com/html/4/element/img.php"><span class="kw2">&lt;img</span></a> <span class="kw3">src</span><span class="sy0">=</span><span class="st0">&quot;http://localhost/media/images/thumbs/01.png&quot;</span> <span class="sy0">/</span><span class="kw2">&gt;</span></span><span class="sc2"><span class="kw2">&lt;/a&gt;</span></span></pre>

<div class='box red'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<p class='box_title'><strong>Important</strong></p>
<div class='box_content'><p>
Don&#039;t forget to add a final TRUE parameter if your Kohana frameworks still need “index.php” in the <acronym title="Uniform Resource Locator">URL</acronym> (this will be the case until you modify this setting as explained in the tutorial from Christophe <a href="http://kohanaphp.com/tutorials/video/working_with_media_files.php" class="urlextern" title="http://kohanaphp.com/tutorials/video/working_with_media_files.php"  rel="nofollow">http://kohanaphp.com/tutorials/video/working_with_media_files.php</a>).
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


</div>

<h3><a name="attributes" id="attributes">attributes()</a></h3>
<div class="level3">

<p>

&#039;attributes&#039; parses attributes for a <acronym title="HyperText Markup Language">HTML</acronym> tag from an array.
</p>

<p>
There are two arguments are:
</p>
<ul>
<li class="level1"><div class="li"> [array] An array of attributes you&#039;d like to add to a <acronym title="HyperText Markup Language">HTML</acronym> tag</div>
</li>
</ul>

<p>

<strong>Example 1:</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">attributes</span><span class="br0">&#40;</span>
	<a href="http://www.php.net/array"><span class="kw3">array</span></a>
	<span class="br0">&#40;</span>
		<span class="st0">'style'</span> <span class="sy0">=&gt;</span> <span class="st0">'font-size: 20px; border-bottom: 1px solid #000;'</span><span class="sy0">,</span>
		<span class="st0">'rel'</span> <span class="sy0">=&gt;</span> <span class="st0">'lightbox'</span><span class="sy0">,</span>
		<span class="st0">'class'</span> <span class="sy0">=&gt;</span> <span class="st0">'image'</span>
	<span class="br0">&#41;</span>
<span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">style=&quot;font-size: 20px; border-bottom: 1px solid #000;&quot; rel=&quot;lightbox&quot; class=&quot;image&quot;</pre>
<p>
<strong>Example 2 (with html::anchor):</strong>

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">file_anchor</span><span class="br0">&#40;</span><span class="st0">'home/images/01.png'</span><span class="sy0">,</span> <span class="st0">'See my picture!'</span><span class="sy0">,</span>
html<span class="sy0">::</span><span class="me2">attributes</span><span class="br0">&#40;</span>
	<a href="http://www.php.net/array"><span class="kw3">array</span></a>
	<span class="br0">&#40;</span>
		<span class="st0">'style'</span> <span class="sy0">=&gt;</span> <span class="st0">'font-size: 20px; border-bottom: 4px solid #000;'</span><span class="sy0">,</span>
		<span class="st0">'rel'</span> <span class="sy0">=&gt;</span> <span class="st0">'lightbox'</span><span class="sy0">,</span>
		<span class="st0">'class'</span> <span class="sy0">=&gt;</span> <span class="st0">'image'</span>
	<span class="br0">&#41;</span>
<span class="br0">&#41;</span>
<span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict"><span class="sc2"><a href="http://december.com/html/4/element/a.php"><span class="kw2">&lt;a</span></a> <span class="kw3">href</span><span class="sy0">=</span><span class="st0">&quot;http://localhost/home/images/01.png&quot;</span>  <span class="kw3">style</span><span class="sy0">=</span><span class="st0">&quot;font-size: 20px; border-bottom: 4px solid #000;&quot;</span> <span class="kw3">rel</span><span class="sy0">=</span><span class="st0">&quot;lightbox&quot;</span> <span class="kw3">class</span><span class="sy0">=</span><span class="st0">&quot;image&quot;</span><span class="kw2">&gt;</span></span>See my picture!<span class="sc2"><span class="kw2">&lt;/a&gt;</span></span></pre>
</div>

<h3><a name="breadcrumb" id="breadcrumb">breadcrumb()</a></h3>
<div class="level3">

<p>

The function returns an array of links for each segment.
</p>

<p>
Arguments:
</p>
<ul>
<li class="level1"><div class="li"> [array] segments to use as breadcrumbs, defaults to using Router::$segments</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php">  <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span>html<span class="sy0">::</span><span class="me2">breadcrumb</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>

will produce the following output:

</p>
<pre class="code php"> <a href="http://www.php.net/array"><span class="kw3">Array</span></a>
 <span class="br0">&#40;</span>
    <span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="sy0">&lt;</span>a href<span class="sy0">=</span><span class="st0">&quot;http://localhost/ajax&quot;</span><span class="sy0">&gt;</span>Ajax<span class="sy0">&lt;/</span>a<span class="sy0">&gt;</span>
    <span class="br0">&#91;</span><span class="nu0">1</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="sy0">&lt;</span>a href<span class="sy0">=</span><span class="st0">&quot;http://localhost/ajax/welcome&quot;</span><span class="sy0">&gt;</span>Welcome<span class="sy0">&lt;/</span>a<span class="sy0">&gt;</span>
    <span class="br0">&#91;</span><span class="nu0">2</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <span class="sy0">&lt;</span>a href<span class="sy0">=</span><span class="st0">&quot;http://localhost/welcome/text&quot;</span><span class="sy0">&gt;</span>Text<span class="sy0">&lt;/</span>a<span class="sy0">&gt;</span>
 <span class="br0">&#41;</span></pre>
<p>
<strong>Creating Breadcrumbs</strong>
</p>

<p>
Creating breadcrumbs is easy; use the following code as an example:
</p>
<pre class="code php"><span class="kw2">public</span> <span class="kw2">function</span> get_breadcrumbs<span class="br0">&#40;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
	<a href="http://www.php.net/global"><span class="kw3">global</span></a> <span class="re1">$breadcrumbs</span><span class="sy0">;</span>
&nbsp;
	<span class="re1">$get_breadcrumbs</span> <span class="sy0">=</span> html<span class="sy0">::</span><span class="me2">breadcrumb</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="kw1">while</span> <span class="br0">&#40;</span><a href="http://www.php.net/current"><span class="kw3">current</span></a><span class="br0">&#40;</span><span class="re1">$get_breadcrumbs</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="re1">$breadcrumbs</span> <span class="sy0">.=</span> <a href="http://www.php.net/current"><span class="kw3">current</span></a><span class="br0">&#40;</span><span class="re1">$get_breadcrumbs</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
		<span class="co1">// Check if we have reached the last crumb</span>
		<span class="kw1">if</span> <span class="br0">&#40;</span><a href="http://www.php.net/key"><span class="kw3">key</span></a><span class="br0">&#40;</span><span class="re1">$get_breadcrumbs</span><span class="br0">&#41;</span> <span class="sy0">&lt;</span> <span class="br0">&#40;</span><a href="http://www.php.net/count"><span class="kw3">count</span></a><span class="br0">&#40;</span><span class="re1">$get_breadcrumbs</span><span class="br0">&#41;</span><span class="nu0">-1</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
		<span class="br0">&#123;</span>
			<span class="co1">// If we haven't, add a breadcrumb separator</span>
			<span class="re1">$breadcrumbs</span> <span class="sy0">.=</span> <span class="st0">' / '</span><span class="sy0">;</span>
		<span class="br0">&#125;</span>
		<a href="http://www.php.net/next"><span class="kw3">next</span></a><span class="br0">&#40;</span><span class="re1">$get_breadcrumbs</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
		<span class="kw1">return</span> <span class="re1">$breadcrumbs</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
A function like this could be included in your &#039;MY_Controller&#039; library and made available to every page. Displaying the breadcrumb (ie. from a view) is as easy as:

</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">get_breadcrumbs</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
This function will display each breadcrumb as a hyper-link. However, we may want the hyper-link removed from the last link (as we are currently on that page) and have it bold instead. This can be achieved by using this code:
</p>
<pre class="code php"><span class="kw2">public</span> <span class="kw2">function</span> get_breadcrumbs<span class="br0">&#40;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
	<a href="http://www.php.net/global"><span class="kw3">global</span></a> <span class="re1">$breadcrumbs</span><span class="sy0">;</span>
&nbsp;
	<span class="re1">$get_breadcrumbs</span> <span class="sy0">=</span> html<span class="sy0">::</span><span class="me2">breadcrumb</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="kw1">while</span><span class="br0">&#40;</span><a href="http://www.php.net/current"><span class="kw3">current</span></a><span class="br0">&#40;</span><span class="re1">$get_breadcrumbs</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="co1">// Check if we have reached the last crumb</span>
		<span class="kw1">if</span><span class="br0">&#40;</span><a href="http://www.php.net/key"><span class="kw3">key</span></a><span class="br0">&#40;</span><span class="re1">$get_breadcrumbs</span><span class="br0">&#41;</span> <span class="sy0">&lt;</span> <span class="br0">&#40;</span><a href="http://www.php.net/count"><span class="kw3">count</span></a><span class="br0">&#40;</span><span class="re1">$get_breadcrumbs</span><span class="br0">&#41;</span><span class="nu0">-1</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
		<span class="br0">&#123;</span>
			<span class="co1">// If we haven't, add a breadcrumb separator</span>
			<span class="re1">$breadcrumbs</span> <span class="sy0">.=</span> <a href="http://www.php.net/current"><span class="kw3">current</span></a><span class="br0">&#40;</span><span class="re1">$get_breadcrumbs</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="st0">' / '</span><span class="sy0">;</span>
		<span class="br0">&#125;</span>
		<span class="kw1">else</span>
		<span class="br0">&#123;</span>
			<span class="co1">// If we have, remove the anchor from the breadcrumb and make it bold</span>
			<span class="re1">$breadcrumbs</span> <span class="sy0">.=</span> <a href="http://www.php.net/strip_tags"><span class="kw3">strip_tags</span></a><span class="br0">&#40;</span><span class="st0">&quot;&lt;strong&gt;&quot;</span><span class="sy0">.</span><a href="http://www.php.net/current"><span class="kw3">current</span></a><span class="br0">&#40;</span><span class="re1">$get_breadcrumbs</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="st0">&quot;&lt;/strong&gt;&quot;</span><span class="sy0">,</span> <span class="st0">&quot;&lt;strong&gt;&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
		<span class="br0">&#125;</span>
		<a href="http://www.php.net/next"><span class="kw3">next</span></a><span class="br0">&#40;</span><span class="re1">$get_breadcrumbs</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
		<span class="kw1">return</span> <span class="re1">$breadcrumbs</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>

<div class='box'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<div class='box_content'><p>
<strong>Note:</strong> For simplification, the above code includes html (&lt;strong&gt; tags) in a library file. When implementing code like this it is best to follow conventional guidelines, such as creating &lt;spans&gt; and using css for styling.
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexerb251.gif?id=helpers%3Ahtml&amp;1324588205" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/helpers/html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


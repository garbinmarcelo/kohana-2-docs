<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/helpers/valid by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    helpers:valid    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-09-04T01:32:41-0500" />
<meta name="keywords" content="helpers,valid" />
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
<li class="level1"><div class="li"><span class="li"><a href="#valid_helper" class="toc">Valid Helper</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#email" class="toc">email()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#email_domain" class="toc">email_domain()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#email_rfc" class="toc">email_rfc()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#url" class="toc">url()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#ip" class="toc">ip()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#credit_card" class="toc">credit_card()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#phone" class="toc">phone()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#date" class="toc">date()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#alpha" class="toc">alpha()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#alpha_numeric" class="toc">alpha_numeric()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#alpha_dash" class="toc">alpha_dash()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#digit" class="toc">digit()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#numeric" class="toc">numeric()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#standard_text" class="toc">standard_text()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#decimal" class="toc">decimal()</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">check grammar, enhance explanations and layout</td>
	</tr>
</table>



<h1><a name="valid_helper" id="valid_helper">Valid Helper</a></h1>
<div class="level1">

<p>
Provides methods for validating inputs. It currently features validation for email-addresses, ip&#039;s, url&#039;s, digits/numbers and text. 
</p>

<p>
This helper provides functions for doing validation using the <a href="../libraries/validation.php" class="wikilink1" title="libraries:validation">validation library</a>.
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="email" id="email">email()</a></h3>
<div class="level3">

<p>

&#039;email&#039; checks whether an email address is valid. 
It is more strict than the valid::email_rfc() method.  
</p>
<ul>
<li class="level1"><div class="li"> [string] Email address to validate</div>
</li>
</ul>
<pre class="code php">    <span class="re1">$email</span> <span class="sy0">=</span> <span class="st0">'bill@gates.com'</span><span class="sy0">;</span>
    <span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">email</span><span class="br0">&#40;</span><span class="re1">$email</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
         <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid email&quot;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
         <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid email&quot;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span></pre>
<p>

It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">Valid email</pre>
</div>

<h3><a name="email_domain" id="email_domain">email_domain()</a></h3>
<div class="level3">

<p>

&#039;email_domain&#039; validates the domain part of an email address by checking if the domain has a valid MX record.
</p>
<ul>
<li class="level1"><div class="li"> [string] Email address to validate</div>
</li>
</ul>
<pre class="code php">    <span class="re1">$email</span> <span class="sy0">=</span> <span class="st0">'bill@gates.com'</span><span class="sy0">;</span>
    <span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">email_domain</span><span class="br0">&#40;</span><span class="re1">$email</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
         <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid email domain&quot;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
         <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid email domain&quot;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span></pre>
<p>

It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">Valid email domain</pre>

<div class='box red'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<div class='box_content'><p>
This function uses <a href="http://www.php.net/checkdnsrr" class="urlextern" title="http://www.php.net/checkdnsrr"  rel="nofollow">http://www.php.net/checkdnsrr</a> which is not implemented on Windows platforms. So if your Kohana installation is running in Windows this function will return true no matter if the domain is valid or not.
A solution for this is to write your own checkdnsrr function. You can find an implementation here: <a href="http://www.php.net/manual/en/function.checkdnsrr.php#82701" class="urlextern" title="http://www.php.net/manual/en/function.checkdnsrr.php#82701"  rel="nofollow">http://www.php.net/manual/en/function.checkdnsrr.php#82701</a>
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


</div>

<h3><a name="email_rfc" id="email_rfc">email_rfc()</a></h3>
<div class="level3">

<p>

&#039;email_rfc&#039; validates an emailaddress based on the RFC specifications (<a href="http://www.w3.org/Protocols/rfc822/" class="urlextern" title="http://www.w3.org/Protocols/rfc822/"  rel="nofollow">http://www.w3.org/Protocols/rfc822/</a>). 
This validation is <strong>less</strong> strict than the valid::email() function. 
</p>
<ul>
<li class="level1"><div class="li"> [string] Email address to validate</div>
</li>
</ul>
<pre class="code php">    <span class="re1">$email</span> <span class="sy0">=</span> <span class="st0">'bill@gates.com'</span><span class="sy0">;</span>
    <span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">email_rfc</span><span class="br0">&#40;</span><span class="re1">$email</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
         <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid email&quot;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
         <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid email&quot;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span></pre>
<p>

It will result in <acronym title="HyperText Markup Language">HTML</acronym> as: 

</p>
<pre class="code html4strict">Valid email</pre>
</div>

<h3><a name="url" id="url">url()</a></h3>
<div class="level3">

<p>

<code>url($url)</code> does some simple validation on an <acronym title="Uniform Resource Locator">URL</acronym> to find out it if it <em>could</em> be existing. 
</p>
<ul>
<li class="level1"><div class="li"> [string] <acronym title="Uniform Resource Locator">URL</acronym> to be validated</div>
</li>
</ul>
<pre class="code php">    <span class="re1">$url</span> <span class="sy0">=</span> <span class="st0">'http://www.kohanaphp.com'</span><span class="sy0">;</span>
    <span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">url</span><span class="br0">&#40;</span><span class="re1">$url</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
         <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid URL&quot;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
         <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid URL&quot;</span><span class="sy0">;</span>
    <span class="br0">&#125;</span></pre>
<p>

It will result in <acronym title="HyperText Markup Language">HTML</acronym> as: 

</p>
<pre class="code html4strict">Valid URL</pre>
</div>

<h3><a name="ip" id="ip">ip()</a></h3>
<div class="level3">

<p>

<code>ip($ip, $ipv6 = FALSE, $allow_private = TRUE)</code> validates an IP-address to make sure it <em>could</em> exist, but does not guarantee it actually does. 
</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <em>$ip</em> IP-address to be validated</div>
</li>
<li class="level1"><div class="li"> <strong>[bool]</strong> <em>$ipv6</em> allow IPv6 addresses (default FALSE)</div>
</li>
<li class="level1"><div class="li"> <strong>[bool]</strong> <em>$allow_private</em> allow <a href="http://en.wikipedia.org/wiki/IP_address#IPv4_private_addresses" class="urlextern" title="http://en.wikipedia.org/wiki/IP_address#IPv4_private_addresses"  rel="nofollow">private addresses</a> (default TRUE)</div>
</li>
</ul>
<pre class="code php"><span class="re1">$ip</span><span class="sy0">=</span><span class="st0">&quot;65.181.130.41&quot;</span><span class="sy0">;</span>
<span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">ip</span><span class="br0">&#40;</span><span class="re1">$ip</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid IP&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid IP&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="re1">$ip</span><span class="sy0">=</span><span class="st0">&quot;123.456.678.912&quot;</span><span class="sy0">;</span>
<span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">ip</span><span class="br0">&#40;</span><span class="re1">$ip</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid IP&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid IP&quot;</span><span class="sy0">;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as: 

</p>
<pre class="code html4strict">Valid IP
Invalid IP</pre>
</div>

<h3><a name="credit_card" id="credit_card">credit_card()</a></h3>
<div class="level3">

<p>

&#039;credit_card&#039; checks if a credit card number is valid or not depending on the configuration defined on your credit_cards.php config file.
</p>
<ul>
<li class="level1"><div class="li"> [string] Card number to be validated</div>
</li>
<li class="level1"><div class="li"> [string|array] Card type, or an array of card types – default = NULL</div>
</li>
</ul>

<p>
This method will check if the credit card number is valid taking into account the settings defined in the credits_cards.php config file. If nothing is passed as second parameter then the default type of the credits_cards.php config file will be used.

</p>
<pre class="code php"><span class="re1">$number</span> <span class="sy0">=</span> <span class="st0">&quot;4992739871600&quot;</span><span class="sy0">;</span>
<span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">credit_card</span><span class="br0">&#40;</span><span class="re1">$number</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid credit card number&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span> <span class="kw1">else</span> <span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid credit card number&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>

It will result in <acronym title="HyperText Markup Language">HTML</acronym> as: 

</p>
<pre class="code html4strict">Valid credit card number</pre>
<p>
This method allows to pass as second argument an array of credit_cards type (which you define in the credit_cards.php config file). If you do so, the number will be considered valid if it matches with the specifications of at least one of the types added in the array.
</p>

<p>
Consider the following example:

</p>
<pre class="code php"><span class="re1">$number</span> <span class="sy0">=</span> <span class="st0">&quot;4992739871600&quot;</span><span class="sy0">;</span>
<span class="re1">$types</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span>
    <span class="st0">'default'</span><span class="sy0">,</span>
    <span class="st0">'american express'</span>
<span class="br0">&#41;</span><span class="sy0">;</span>
<span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">credit_card</span><span class="br0">&#40;</span><span class="re1">$number</span><span class="sy0">,</span> <span class="re1">$types</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid credit card number&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span> <span class="kw1">else</span> <span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid credit card number&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>

It will result in <acronym title="HyperText Markup Language">HTML</acronym> as: 

</p>
<pre class="code html4strict">Valid credit card number</pre>
<p>

Since the credit number passed as first argument matches at least the rules defined for the default type.
</p>

</div>

<h3><a name="phone" id="phone">phone()</a></h3>
<div class="level3">

<p>

&#039;phone&#039; checks whether a phone number is valid or not. It strips all the characters which are not a digit from the string at the moment of the validation.
</p>
<ul>
<li class="level1"><div class="li"> [string] The phone number to check</div>
</li>
<li class="level1"><div class="li"> [array] Optional array containing the allowed lengths – defaults = array(7,10,11)</div>
</li>
</ul>
<pre class="code php"><span class="re1">$phone</span> <span class="sy0">=</span> <span class="st0">'+54 123-456 789'</span><span class="sy0">;</span>
<span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">phone</span><span class="br0">&#40;</span><span class="re1">$phone</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid phone number&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid phone number&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>

It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code html4strict">Valid phone number</pre>
</div>

<h3><a name="date" id="date">date()</a></h3>
<div class="level3">

<p>
&#039;date&#039; checks whether a string is a valid date string.
</p>
<ul>
<li class="level1"><div class="li"> [string] The date string to check.</div>
</li>
</ul>
<pre class="code php"><span class="re1">$date</span> <span class="sy0">=</span> <span class="st0">'19th February 2009'</span><span class="sy0">;</span>
<span class="kw1">if</span> <span class="br0">&#40;</span>valid<span class="sy0">::</span><a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="br0">&#40;</span><span class="re1">$date</span><span class="br0">&#41;</span><span class="br0">&#41;</span> <span class="br0">&#123;</span>
	<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid date&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span> <span class="kw1">else</span> <span class="br0">&#123;</span>
	<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid date&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as:

</p>
<pre class="code">
Valid date</pre>
</div>

<h3><a name="alpha" id="alpha">alpha()</a></h3>
<div class="level3">

<p>

&#039;alpha&#039; checks whether a string consists of alphabetical characters only
</p>
<ul>
<li class="level1"><div class="li"> [string] String to be validated</div>
</li>
<li class="level1"><div class="li"> [boolean] If true UTF-8 mode will be used – default = FALSE</div>
</li>
</ul>
<pre class="code php"><span class="re1">$string</span><span class="sy0">=</span><span class="st0">&quot;KohanaPHP is cool&quot;</span><span class="sy0">;</span>
<span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">alpha</span><span class="br0">&#40;</span><span class="re1">$string</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid string&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid string&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as: 

</p>
<pre class="code html4strict">Invalid string</pre><pre class="code php"><span class="re1">$string</span><span class="sy0">=</span><span class="st0">&quot;KohanaPHPiscool&quot;</span><span class="sy0">;</span>
<span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">alpha</span><span class="br0">&#40;</span><span class="re1">$string</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid string&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid string&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as: 

</p>
<pre class="code html4strict">Valid string</pre>
</div>

<h3><a name="alpha_numeric" id="alpha_numeric">alpha_numeric()</a></h3>
<div class="level3">

<p>

&#039;alpha_numeric&#039; checks whether a string consists of alphabetical characters and numbers only
</p>
<ul>
<li class="level1"><div class="li"> [string] String to be validated</div>
</li>
<li class="level1"><div class="li"> [boolean] If true UTF-8 mode will be used – default = FALSE</div>
</li>
</ul>
<pre class="code php"><span class="re1">$string</span><span class="sy0">=</span><span class="st0">&quot;KohanaPHP Version 3 is cool&quot;</span><span class="sy0">;</span>
<span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">alpha_numeric</span><span class="br0">&#40;</span><span class="re1">$string</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid string&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid string&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as: 

</p>
<pre class="code html4strict">Invalid string</pre><pre class="code php"><span class="re1">$string</span><span class="sy0">=</span><span class="st0">&quot;KohanaPHPVersion2iscool&quot;</span><span class="sy0">;</span>
<span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">alpha_numeric</span><span class="br0">&#40;</span><span class="re1">$string</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid string&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid string&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as: 

</p>
<pre class="code html4strict">Valid string</pre>
</div>

<h3><a name="alpha_dash" id="alpha_dash">alpha_dash()</a></h3>
<div class="level3">

<p>

&#039;alpha_dash&#039; checks whether a string consists of alphabetical characters, numbers, underscores and dashes only
</p>
<ul>
<li class="level1"><div class="li"> [string] String to be validated</div>
</li>
<li class="level1"><div class="li"> [boolean] If true UTF-8 mode will be used – default = FALSE</div>
</li>
</ul>
<pre class="code php"><span class="re1">$string</span><span class="sy0">=</span><span class="st0">&quot;KohanaPHP Version 2 is cool&quot;</span><span class="sy0">;</span>
<span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">alpha_dash</span><span class="br0">&#40;</span><span class="re1">$string</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid string&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid string&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as: 

</p>
<pre class="code html4strict">Invalid string</pre><pre class="code php"><span class="re1">$string</span><span class="sy0">=</span><span class="st0">&quot;KohanaPHP_Version-2-is_cool&quot;</span><span class="sy0">;</span>
<span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">alpha_dash</span><span class="br0">&#40;</span><span class="re1">$string</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid string&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid string&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as: 

</p>
<pre class="code html4strict">Valid string</pre>
</div>

<h3><a name="digit" id="digit">digit()</a></h3>
<div class="level3">

<p>

&#039;digit&#039; checks whether a string consists of digits only (no dots or dashes)
</p>
<ul>
<li class="level1"><div class="li"> [string] String to be validated</div>
</li>
<li class="level1"><div class="li"> [boolean] If true UTF-8 mode will be used – default = FALSE</div>
</li>
</ul>
<pre class="code php"><span class="re1">$digits</span> <span class="sy0">=</span> <span class="st0">&quot;23424.32&quot;</span><span class="sy0">;</span>
<span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">digit</span><span class="br0">&#40;</span><span class="re1">$digits</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as: 

</p>
<pre class="code html4strict">Invalid</pre><pre class="code php"><span class="re1">$digits</span> <span class="sy0">=</span> <span class="st0">&quot;2342432&quot;</span><span class="sy0">;</span>
<span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">digit</span><span class="br0">&#40;</span><span class="re1">$digits</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as: 

</p>
<pre class="code html4strict">Valid</pre>
</div>

<h3><a name="numeric" id="numeric">numeric()</a></h3>
<div class="level3">

<p>

&#039;numeric&#039; checks whether a string is a valid number (negative and decimal numbers allowed). It supports international formats (ex. Spanish decimal format uses comma as separator). 

</p>
<ul>
<li class="level1"><div class="li"> [string] the input string</div>
</li>
</ul>
<pre class="code php"><span class="re1">$number</span> <span class="sy0">=</span> <span class="st0">&quot;-23424.32&quot;</span><span class="sy0">;</span>
<span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">numeric</span><span class="br0">&#40;</span><span class="re1">$number</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as: 

</p>
<pre class="code html4strict">Valid</pre>
</div>

<h3><a name="standard_text" id="standard_text">standard_text()</a></h3>
<div class="level3">

<p>

&#039;standard_text&#039; checks whether a string is a valid text. Letters, numbers, whitespace, dashes (-), periods (.), underscores (_) and normal punctuation  are allowed.
</p>
<ul>
<li class="level1"><div class="li"> [string] Text to be validated</div>
</li>
</ul>
<pre class="code php"><span class="re1">$text</span> <span class="sy0">=</span> <span class="st0">'this is not a valid text because of the : character'</span><span class="sy0">;</span>
<span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">standard_text</span><span class="br0">&#40;</span><span class="re1">$text</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid standard text&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid standard text&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as: 

</p>
<pre class="code html4strict">Invalid standard text</pre>
</div>

<h3><a name="decimal" id="decimal">decimal()</a></h3>
<div class="level3">

<p>

&#039;decimal&#039; Checks if a string is a proper decimal format. The format array can be used to specify a decimal length, or a number and decimal length, eg:
</p>
<pre class="code"> * array(2) would force the number to have 2 decimal places, array(4,2)
 * would force the number to have 4 digits and 2 decimal places.</pre>
<ul>
<li class="level1"><div class="li"> [string] string to be validated</div>
</li>
<li class="level1"><div class="li"> [array] decimal format: array(y) or array(x,y) - default NULL</div>
</li>
</ul>
<pre class="code php"><span class="re1">$decimal</span> <span class="sy0">=</span> <span class="st0">'4.5'</span><span class="sy0">;</span>
<span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">decimal</span><span class="br0">&#40;</span><span class="re1">$decimal</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid decimal&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid decimal&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>
It will result in <acronym title="HyperText Markup Language">HTML</acronym> as: 

</p>
<pre class="code html4strict">Valid decimal</pre><pre class="code php"><span class="re1">$decimal</span> <span class="sy0">=</span> <span class="st0">'4.5'</span><span class="sy0">;</span>
<span class="re1">$format</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="nu0">2</span><span class="sy0">,</span><span class="nu0">1</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="kw1">if</span><span class="br0">&#40;</span>valid<span class="sy0">::</span><span class="me2">decimal</span><span class="br0">&#40;</span><span class="re1">$decimal</span><span class="sy0">,</span><span class="re1">$format</span><span class="br0">&#41;</span> <span class="sy0">==</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Valid decimal&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span><span class="kw1">else</span><span class="br0">&#123;</span>
    <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">&quot;Invalid decimal&quot;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>

It will result in <acronym title="HyperText Markup Language">HTML</acronym> as: 
</p>
<pre class="code html4strict">Invalid decimal</pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexerf0a2.gif?id=helpers%3Avalid&amp;1324588208" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/helpers/valid by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


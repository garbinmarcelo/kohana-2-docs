<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/general/security by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    general:security    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-09-16T22:27:51-0500" />
<meta name="keywords" content="general,security" />
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
<li class="level1"><div class="li"><span class="li"><a href="#security_considerations" class="toc">Security considerations</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#server_configuration" class="toc">Server configuration</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#cross_site_request_forgery_csrf" class="toc">Cross Site Request Forgery (CSRF)</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#random_tokens" class="toc">Random Tokens</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#example_1random_token_in_session" class="toc">Example 1: Random Token in Session</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#cross_site_scripting_xss" class="toc">Cross Site Scripting (XSS)</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#escaping_and_filtering_user_input" class="toc">Escaping and Filtering User Input</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#validating_user_input" class="toc">Validating User Input</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#securing_cookies" class="toc">Securing Cookies</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#remote_file_inclusion_rfi" class="toc">Remote File Inclusion (RFI)</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#local_file_inclusion_lfi" class="toc">Local File Inclusion (LFI)</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#session_hijacking" class="toc">Session hijacking</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#session_fixation" class="toc">Session fixation</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#best_practice" class="toc">Best practice</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Complete this document</td>
	</tr>
</table>



<h1><a name="security_considerations" id="security_considerations">Security considerations</a></h1>
<div class="level1">

<p>

This section will contain brief security considerations covering the following topics
</p>

</div>

<h2><a name="server_configuration" id="server_configuration">Server configuration</a></h2>
<div class="level2">

</div>

<h2><a name="cross_site_request_forgery_csrf" id="cross_site_request_forgery_csrf">Cross Site Request Forgery (CSRF)</a></h2>
<div class="level2">

<p>

<a href="http://en.wikipedia.org/wiki/CSRF" class="interwiki iw_wp" title="http://en.wikipedia.org/wiki/CSRF">CSRF</a> vulnerabilities allow attackers to remotely target specific url&#039;s (typically form submission scripts), enabling them to send arbitrary <acronym title="Hyper Text Transfer Protocol">HTTP</acronym> requests that appear to be coming from a trusted user.  For more information on CSRF visit: <a href="http://shiflett.org/articles/cross-site-request-forgeries" class="urlextern" title="http://shiflett.org/articles/cross-site-request-forgeries"  rel="nofollow">Shifflet.org</a>
</p>

<p>
Some methods to defend against CSRF vulnerabilities include: limiting the lifetime of cookies used for authentication, checking <acronym title="Hyper Text Transfer Protocol">HTTP</acronym> Referer headers, using POST instead of GET to submit forms that require verification, and implementing validation tests to deter automated form submissions (including <a href="../libraries/captcha.php" class="wikilink1" title="libraries:captcha">CAPTCHA</a> tests and random tokens).
</p>

</div>

<h3><a name="random_tokens" id="random_tokens">Random Tokens</a></h3>
<div class="level3">

<p>

Tokens are randomly generated values that are unique to each form and typically exist within a user&#039;s session.  By modifying sensitive forms to check for a valid token, it is more difficult for an attacker to target individual users, since a valid token is required.
</p>

<p>
Random tokens are easy to generate.  Here are some typical functions:

</p>
<ul>
<li class="level1"><div class="li"><code><a href="http://php.net/uniqid" class="urlextern" title="http://php.net/uniqid"  rel="nofollow">uniqid()</a></code>: <acronym title="Hypertext Preprocessor">PHP</acronym> function to generate a unique identifier based on the current time in microseconds</div>
</li>
</ul>
<ul>
<li class="level1"><div class="li"><code><a href="../helpers/text.php#random" class="wikilink1" title="helpers:text">text::random()</a></code>: Kohana helper to generate random text strings</div>
</li>
</ul>

</div>

<h3><a name="example_1random_token_in_session" id="example_1random_token_in_session">Example 1: Random Token in Session</a></h3>
<div class="level3">
<pre class="code php"><span class="coMULTI">/** View **/</span>
<span class="co1">// include the random token in your form view and add it to the user's session</span>
&nbsp;
<span class="kw2">&lt;?php</span> <a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">hidden</span><span class="br0">&#40;</span><span class="st0">'token'</span><span class="sy0">,</span> <span class="re1">$_SESSION</span><span class="br0">&#91;</span><span class="st0">'token'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <a href="http://www.php.net/uniqid"><span class="kw3">uniqid</span></a><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="kw2">?&gt;</span></pre><pre class="code php"><span class="coMULTI">/** Controller **/</span>
<span class="co1">// This check would typically occur at the start of your validation logic.  Since the form should not be processed if the token test fails.</span>
&nbsp;
<span class="co1">// ensure that a token was submitted and matches the token in the session</span>
<span class="kw1">if</span> <span class="br0">&#40;</span><a href="http://www.php.net/empty"><span class="kw3">empty</span></a><span class="br0">&#40;</span><span class="re1">$_POST</span><span class="br0">&#91;</span><span class="st0">'token'</span><span class="br0">&#93;</span><span class="br0">&#41;</span> OR <span class="br0">&#40;</span><a href="http://www.php.net/empty"><span class="kw3">empty</span></a><span class="br0">&#40;</span><span class="re1">$_SESSION</span><span class="br0">&#91;</span><span class="st0">'token'</span><span class="br0">&#93;</span><span class="br0">&#41;</span> OR <span class="re1">$_POST</span><span class="br0">&#91;</span><span class="st0">'token'</span><span class="br0">&#93;</span> <span class="sy0">!==</span> <span class="re1">$_SESSION</span><span class="br0">&#91;</span><span class="st0">'token'</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
    <span class="co1">// do something here such as redirect the user or stop the script.</span>
    url<span class="sy0">::</span><span class="me2">redirect</span><span class="br0">&#40;</span>Router<span class="sy0">::</span><span class="re1">$current_uri</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre>
<p>

<strong>Using a token validation function:</strong>
</p>

<p>
If you need to do CSRF token validation on multiple forms, you could simplify your code by creating a validation function in your template controller [<a href="../addons/template.php" class="urlextern" title="http://docs.kohanaphp.com/addons/template"  rel="nofollow">http://docs.kohanaphp.com/addons/template</a>].  As long as your form handling controller extends the template controller (e.g. Website_Controller), your check_token function will be available.
</p>
<pre class="code php"><span class="co1">// Add the following function to your template controller:</span>
&nbsp;
protected <span class="kw2">function</span> check_token<span class="br0">&#40;</span><span class="re1">$redirect</span> <span class="sy0">=</span> <span class="kw2">NULL</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
	<span class="kw1">if</span> <span class="br0">&#40;</span> <span class="sy0">!</span> <a href="http://www.php.net/empty"><span class="kw3">empty</span></a><span class="br0">&#40;</span><span class="re1">$_POST</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="kw1">if</span> <span class="br0">&#40;</span><a href="http://www.php.net/empty"><span class="kw3">empty</span></a><span class="br0">&#40;</span><span class="re1">$_POST</span><span class="br0">&#91;</span><span class="st0">'token'</span><span class="br0">&#93;</span><span class="br0">&#41;</span> OR <a href="http://www.php.net/empty"><span class="kw3">empty</span></a><span class="br0">&#40;</span><span class="re1">$_SESSION</span><span class="br0">&#91;</span><span class="st0">'token'</span><span class="br0">&#93;</span><span class="br0">&#41;</span> OR <span class="br0">&#40;</span><span class="re1">$_POST</span><span class="br0">&#91;</span><span class="st0">'token'</span><span class="br0">&#93;</span> <span class="sy0">!==</span> <span class="re1">$_SESSION</span><span class="br0">&#91;</span><span class="st0">'token'</span><span class="br0">&#93;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
		<span class="br0">&#123;</span>
			url<span class="sy0">::</span><span class="me2">redirect</span><span class="br0">&#40;</span><span class="re1">$redirect</span> ? <span class="re1">$redirect</span> <span class="sy0">:</span> Router<span class="sy0">::</span><span class="re1">$current_uri</span><span class="br0">&#41;</span><span class="sy0">;</span>
		<span class="br0">&#125;</span>
	<span class="br0">&#125;</span>
&nbsp;
	<span class="kw1">return</span> <span class="kw2">TRUE</span><span class="sy0">;</span>
<span class="br0">&#125;</span></pre><pre class="code php"><span class="co1">// Call the function at the start of your validation logic:</span>
&nbsp;
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">check_token</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="cross_site_scripting_xss" id="cross_site_scripting_xss">Cross Site Scripting (XSS)</a></h2>
<div class="level2">

<p>

<a href="http://en.wikipedia.org/wiki/Cross-site_scripting" class="interwiki iw_wp" title="http://en.wikipedia.org/wiki/Cross-site_scripting">Cross-site_scripting</a> (XSS) vulnerabilities allow attackers to insert malicious <acronym title="HyperText Markup Language">HTML</acronym>/Javascript content into a website; potentially allowing them to bypass access controls, gain access to private cookie and sessions and obtain escalated privileges.
</p>

<p>
Some methods to defend against XSS vulnerabilities include: escaping and filtering user input, validating user input and securing cookies.  Kohana has built-in features to help you reduce the risk of XSS in your applications. <a href="http://kohanaphp.com/tutorials/xss" class="urlextern" title="http://kohanaphp.com/tutorials/xss"  rel="nofollow">Kohana XSS Tutorial</a>

</p>

</div>

<h3><a name="escaping_and_filtering_user_input" id="escaping_and_filtering_user_input">Escaping and Filtering User Input</a></h3>
<div class="level3">

<p>
Kohana offers the following built-in escaping and filtering functionality:
</p>

</div>

<h4><a name="global_xss_filtering" id="global_xss_filtering">Global XSS filtering</a></h4>
<div class="level4">

<p>
You can enable XSS filtering on all user input globally by setting <code>$config[&#039;global_xss_filtering&#039;] = TRUE;</code> in <code>application/config.php</code>.  This is recommended for most applications, but does incur a slight overhead.  The global XSS filter will sanitize the $_GET, $_POST and $_COOKIE global arrays. It also removes the $_REQUEST array.
</p>

</div>

<h4><a name="input_library" id="input_library">Input Library</a></h4>
<div class="level4">

<p>
The Kohana <a href="../libraries/input.php" class="wikilink1" title="libraries:input">Input library</a> is the recommended way to access user input from the $_POST, $_GET, $_COOKIE and $_SERVER global arrays. If global XSS filtering is disabled, using the Input library allows you retrieve a sanitized version of the variable by setting xss_clean argument (3rd argument) to TRUE.
</p>
<pre class="code php"><span class="co1">// retrieve a get variable, set a default value, enable xss_filtering</span>
<span class="re1">$my_var</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'my_var'</span><span class="sy0">,</span><span class="st0">'default_value'</span><span class="sy0">,</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// retrieve a post variable, no default value, enable xss_filtering</span>
<span class="re1">$my_var</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">post</span><span class="br0">&#40;</span><span class="st0">'my_var'</span><span class="sy0">,</span> <span class="kw2">null</span><span class="sy0">,</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h4><a name="integrating_html_purifier" id="integrating_html_purifier">Integrating HTML Purifier</a></h4>
<div class="level4">

<p>
<a href="http://htmlpurifier.org/" class="urlextern" title="http://htmlpurifier.org/"  rel="nofollow">HTML Purifier</a> is a third-party library that offers a higher-level of filtering than Kohana&#039;s built-in functions.  It also offers the ability to convert invalid markup into standards-compliant markup.  Kohana gives you the option of using <acronym title="HyperText Markup Language">HTML</acronym> Purifier for data filtering.  Keep in mind that using <acronym title="HyperText Markup Language">HTML</acronym> Purifier will require some additional processing and memory usage.
</p>

<p>
<strong>Installing <acronym title="HyperText Markup Language">HTML</acronym> Purifier in your Kohana application:</strong>
</p>
<ul>
<li class="level1"><div class="li"> <a href="http://htmlpurifier.org/download.php" class="urlextern" title="http://htmlpurifier.org/download.php"  rel="nofollow">Download HTML Purifier</a> </div>
</li>
<li class="level1"><div class="li"> Extract the archive and move the contents of the <code>htmlpurifier-x.x/library</code> directory to your Kohana <code>system/vendor/htmlpurifier</code> directory.</div>
</li>
</ul>

<p>

<strong>Using <acronym title="HyperText Markup Language">HTML</acronym> Purifier in your Kohana application</strong>
</p>
<ul>
<li class="level1"><div class="li"> You can enable <acronym title="HyperText Markup Language">HTML</acronym> Purifier globally by setting <code>$config[&#039;global_xss_filtering&#039;] = &#039;htmlpurifier&#039;;</code> in your <code>application/config/config.php</code>.</div>
</li>
<li class="level1"><div class="li"> You can also use <acronym title="HyperText Markup Language">HTML</acronym> Purifier for filtering specific variables:</div>
</li>
</ul>
<pre class="code php"><span class="co1">// from within your controller</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">xss_clean</span><span class="br0">&#40;</span><span class="re1">$var</span><span class="sy0">,</span> <span class="st0">'htmlpurifier'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// from outside your controller</span>
<span class="re1">$var</span> <span class="sy0">=</span> Input<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">xss_clean</span><span class="br0">&#40;</span><span class="re1">$var</span><span class="sy0">,</span> <span class="st0">'htmlpurifier'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h4><a name="security_helper" id="security_helper">Security Helper</a></h4>
<div class="level4">

<p>
The Kohana <a href="../helpers/security.php" class="wikilink1" title="helpers:security">Security Helper</a> offers various methods that assist with input filtering.
</p>

</div>

<h4><a name="htmlspecialchars" id="htmlspecialchars">html::specialchars()</a></h4>
<div class="level4">

<p>
The Kohana <a href="../helpers/html.php#specialchars" class="wikilink1" title="helpers:html">html::specialchars()</a> method is part of the <acronym title="HyperText Markup Language">HTML</acronym> helper.  It is advisable to run all user input that is displayed on a web page through html:specialchars() to convert special characters and quotes to <acronym title="HyperText Markup Language">HTML</acronym> entities.
</p>
<pre class="code php"><a href="http://www.php.net/echo"><span class="kw3">echo</span></a> html<span class="sy0">::</span><span class="me2">specialchars</span><span class="br0">&#40;</span><span class="re1">$string</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="validating_user_input" id="validating_user_input">Validating User Input</a></h3>
<div class="level3">

<p>
Beyond escaping and filtering, validation is critical for all applications that enable users to input data via forms.  Kohana includes a very powerful and flexible <a href="../libraries/validation.php" class="wikilink1" title="libraries:validation">Validation libary</a> along with a <a href="../helpers/valid.php" class="wikilink1" title="helpers:valid">valid helper</a>.  
 
The <a href="../libraries/validation.php" class="wikilink1" title="libraries:validation">Validation libary</a> allows you to validate any arbitrary array of data fields, including user submitted data in $_POST and $_GET.  It also allows you to run pre- and post-filters on data.
 
The <a href="../helpers/valid.php" class="wikilink1" title="helpers:valid">valid helper</a> includes methods for many common data validations including email-addresses, dates, phone numbers, ip&#039;s, url&#039;s, digits/numbers and text.  It easily integrates with the Validation library.
 
 

</p>

</div>

<h3><a name="securing_cookies" id="securing_cookies">Securing Cookies</a></h3>
<div class="level3">

<p>
You should always ensure that your cookies are only usable by your website domain.  To do this in Kohana, copy <code>system/config/cookie.php</code> to your local <code>application/config</code> directory and set <code>$config[&#039;domain&#039;]</code> to your domain when you move to production.
 
Also refer to the <a href="../helpers/cookie.php" class="wikilink1" title="helpers:cookie">cookie helper</a> for simple methods to create, retrieve and delete cookies.
</p>

</div>

<h2><a name="remote_file_inclusion_rfi" id="remote_file_inclusion_rfi">Remote File Inclusion (RFI)</a></h2>
<div class="level2">

<p>
<a href="http://en.wikipedia.org/wiki/Remote_File_Inclusion" class="urlextern" title="http://en.wikipedia.org/wiki/Remote_File_Inclusion"  rel="nofollow">http://en.wikipedia.org/wiki/Remote_File_Inclusion</a>

</p>

</div>

<h2><a name="local_file_inclusion_lfi" id="local_file_inclusion_lfi">Local File Inclusion (LFI)</a></h2>
<div class="level2">

<p>
Same as the RFI, but requires the malicious file to be present in the targeted server.

</p>

</div>

<h2><a name="session_hijacking" id="session_hijacking">Session hijacking</a></h2>
<div class="level2">

<p>
<a href="http://en.wikipedia.org/wiki/Session_hijacking" class="urlextern" title="http://en.wikipedia.org/wiki/Session_hijacking"  rel="nofollow">http://en.wikipedia.org/wiki/Session_hijacking</a>

</p>

</div>

<h2><a name="session_fixation" id="session_fixation">Session fixation</a></h2>
<div class="level2">

<p>
<a href="http://en.wikipedia.org/wiki/Session_fixation" class="urlextern" title="http://en.wikipedia.org/wiki/Session_fixation"  rel="nofollow">http://en.wikipedia.org/wiki/Session_fixation</a>

</p>

</div>

<h2><a name="best_practice" id="best_practice">Best practice</a></h2>
<div class="level2">

</div>

<h4><a name="installation" id="installation">Installation</a></h4>
<div class="level4">

<p>
Refer to the <a href="../installation.php" class="urlextern" title="http://docs.kohanaphp.com/installation"  rel="nofollow">Installation</a> page.
</p>

</div>

<h4><a name="deployment" id="deployment">Deployment</a></h4>
<div class="level4">

<p>
Refer to the <a href="../installation/deployment.php" class="wikilink1" title="installation:deployment">Deployment</a> page.

</p>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexerb96b.gif?id=general%3Asecurity&amp;1324588189" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/general/security by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:13:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


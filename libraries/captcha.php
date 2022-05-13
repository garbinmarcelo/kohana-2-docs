<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/captcha by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:captcha    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-02-04T08:46:30-0600" />
<meta name="keywords" content="libraries,captcha" />
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
<li class="level1"><div class="li"><span class="li"><a href="#captcha_library" class="toc">Captcha Library</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#configuration" class="toc">Configuration</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#valid" class="toc">valid()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#valid_count" class="toc">valid_count()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#invalid_count" class="toc">invalid_count()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#reset_count" class="toc">reset_count()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#promoted" class="toc">promoted()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#render" class="toc">render()</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#usage_example" class="toc">Usage example</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">stub</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Write me</td>
	</tr>
</table>



<h1><a name="captcha_library" id="captcha_library">Captcha Library</a></h1>
<div class="level1">

<p>

Captchas are used to protect your site by showing something that a computer can&#039;t recognize but a human can. They are usually placed on your registration page but they can be placed anywhere you want to make reasonably sure you are dealing with a person and not a bot.
</p>

<p>
Kohana&#039;s Captcha library can currently generates basic, alpha, word, math, riddle captchas. Captcha configuration is defined in groups which allows you to easily switch between different Captcha settings for different forms on your website.
</p>

</div>

<h2><a name="configuration" id="configuration">Configuration</a></h2>
<div class="level2">

<p>

Configuration is done in the <code>application/config/captcha.php</code> file, if it&#039;s not there take the one from <code>system/config</code> and copy it to the application folder (see <a href="../general/filesystem.php#cascading" class="urlextern" title="http://docs.kohanaphp.com/general/filesystem#cascading"  rel="nofollow">cascading filesystem</a>):
</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'default'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
    <span class="st0">'style'</span>      <span class="sy0">=&gt;</span> <span class="st0">'basic'</span><span class="sy0">,</span>
    <span class="st0">'width'</span>      <span class="sy0">=&gt;</span> <span class="nu0">150</span><span class="sy0">,</span>
    <span class="st0">'height'</span>     <span class="sy0">=&gt;</span> <span class="nu0">50</span><span class="sy0">,</span>
    <span class="st0">'complexity'</span> <span class="sy0">=&gt;</span> <span class="nu0">4</span><span class="sy0">,</span>
    <span class="st0">'background'</span> <span class="sy0">=&gt;</span> <span class="st0">''</span><span class="sy0">,</span>
    <span class="st0">'fontpath'</span>   <span class="sy0">=&gt;</span> SYSPATH<span class="sy0">.</span><span class="st0">'fonts/'</span><span class="sy0">,</span>
    <span class="st0">'fonts'</span>      <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'DejaVuSerif.ttf'</span><span class="br0">&#41;</span><span class="sy0">,</span>
    <span class="st0">'promote'</span>    <span class="sy0">=&gt;</span> <span class="kw2">FALSE</span><span class="sy0">,</span>
<span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
<em class="u">Note</em>: all groups inherit and overwrite the default group.
</p>

</div>

<h4><a name="styles" id="styles">Styles</a></h4>
<div class="level4">

<p>

<code>style</code> defines the captcha type, e.g. basic, alpha, word, math, riddle. There are 5 different drivers: 

</p>
<ul>
<li class="level1"><div class="li"> <code>basic</code> - draws a picture with a random text (only distinct alpha numeric characters that can&#039;t be mistaken for others)</div>
</li>
<li class="level1"><div class="li"> <code>alpha</code> - draws a picture with a random text (only distinct alpha characters)</div>
</li>
<li class="level1"><div class="li"> <code>word</code>  - ask for a random word loaded  from the current language (i18n/xx_XX/captcha.php)</div>
</li>
<li class="level1"><div class="li"> <code>math</code>  - generates a mathematic challenge such as <code>2 + 8 = ?</code></div>
</li>
<li class="level1"><div class="li"> <code>riddle</code> - asks for a riddle such as <code>Fire is... (hot or cold)</code> (loaded from i18n/xx_XX/captcha.php)</div>
</li>
</ul>

</div>

<h4><a name="picture_height_and_width" id="picture_height_and_width">Picture height and width</a></h4>
<div class="level4">

<p>

For basic and alpha styles drawing a picture, <code>height</code> and <code>width</code> define the size of the picture.
</p>

</div>

<h4><a name="complexity" id="complexity">Complexity</a></h4>
<div class="level4">

<p>

It defines the difficulty level of the generated captcha. Usage depends on chosen style:

</p>
<ul>
<li class="level1"><div class="li"> <code>basic</code> - [1:10] complexity setting is used as character count</div>
</li>
<li class="level1"><div class="li"> <code>alpha</code> - [1:10] complexity setting is used as character count</div>
</li>
<li class="level1"><div class="li"> <code>word</code>  - [2:9] complexity setting is used as word length</div>
</li>
<li class="level1"><div class="li"> <code>math</code>  - [0;4;8], higher the complexity is, harder is the challenge</div>
</li>
</ul>

</div>

<h4><a name="background" id="background">Background</a></h4>
<div class="level4">

<p>

<code>background</code> is the path to background image file used for basic and alpha Captcha
</p>

</div>

<h4><a name="fonts" id="fonts">Fonts</a></h4>
<div class="level4">

<p>

<code>fontpath</code> is the font file used for basic and alpha Captcha. <code>fonts</code> is an array of font files. Several fonts means that characters have randomized fonts choosen in the array.
</p>

</div>

<h4><a name="promote" id="promote">Promote</a></h4>
<div class="level4">

<p>

<code>promote</code> is a valid response count threshold to promote user (FALSE to disable). This means , in a particular session, if user answers captcha correctly <code>count</code> times already, promote user to human, and don&#039;t annoy him any more.
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="valid" id="valid">valid()</a></h3>
<div class="level3">

<p>
<code>valid($response)</code> validates a Captcha response and updates response counter. It&#039;s a static method that can be used as a Validation rule also. It takes:

</p>
<ul>
<li class="level1"><div class="li"> <strong>[string]</strong> <code>$response</code> the captcha response</div>
</li>
</ul>

</div>

<h3><a name="valid_count" id="valid_count">valid_count()</a></h3>
<div class="level3">

<p>
<code>valid_count($new_count = NULL, $invalid = FALSE)</code> gets or sets the number of valid Captcha responses for this session. It takes:

</p>
<ul>
<li class="level1"><div class="li"> <strong>[integer]</strong> <code>$new_count</code> new counter value (default NULL)</div>
</li>
<li class="level1"><div class="li"> <strong>[boolean]</strong> <code>$invalid</code> trigger invalid counter (for internal use only) (default FALSE)</div>
</li>
<li class="level1"><div class="li"> returns <strong>[integer]</strong> counter value</div>
</li>
</ul>

</div>

<h3><a name="invalid_count" id="invalid_count">invalid_count()</a></h3>
<div class="level3">

<p>
<code>invalid_count($new_count = NULL)</code> gets or sets the number of invalid Captcha responses for this session. It takes:

</p>
<ul>
<li class="level1"><div class="li"> <strong>[integer]</strong> <code>$new_count</code> new counter value (default NULL)</div>
</li>
</ul>

</div>

<h3><a name="reset_count" id="reset_count">reset_count()</a></h3>
<div class="level3">

<p>
<code>reset_count()</code> resets the Captcha response counters and removes the count sessions.
</p>

</div>

<h3><a name="promoted" id="promoted">promoted()</a></h3>
<div class="level3">

<p>
<code>promoted($threshold = NULL)</code> resets the Captcha response counters and removes the count sessions. It takes:

</p>
<ul>
<li class="level1"><div class="li"> <strong>[integer]</strong> <code>$threshold</code> valid response count threshold (default NULL)</div>
</li>
</ul>

</div>

<h3><a name="render" id="render">render()</a></h3>
<div class="level3">

<p>
<code>render($html = TRUE)</code> returns or outputs the Captcha challenge.. It takes:

</p>
<ul>
<li class="level1"><div class="li"> <strong>[boolean]</strong> <code>$html</code> TRUE to output html, e.g. &lt;img src=”#” /&gt; (default TRUE)</div>
</li>
</ul>

</div>

<h2><a name="usage_example" id="usage_example">Usage example</a></h2>
<div class="level2">

<p>

The code below demonstrates how to use captcha on a form. In your controller:
</p>
<pre class="code php"><span class="co1">// Load Captcha library, you can supply the name of the config group you would like to use.</span>
<span class="re1">$captcha</span> <span class="sy0">=</span> <span class="kw2">new</span> Captcha<span class="sy0">;</span>
&nbsp;
<span class="co1">// Ban bots (that accept session cookies) after 50 invalid responses.</span>
<span class="co1">// Be careful not to ban real people though! Set the threshold high enough.</span>
<span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$captcha</span><span class="sy0">-&gt;</span><span class="me1">invalid_count</span><span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="sy0">&gt;</span> <span class="nu0">49</span><span class="br0">&#41;</span>
	<a href="http://www.php.net/exit"><span class="kw3">exit</span></a><span class="br0">&#40;</span><span class="st0">'Bye! Stupid bot.'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Form submitted</span>
<span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$_POST</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
	<span class="co1">// Captcha::valid() is a static method that can be used as a Validation rule also.</span>
	<span class="kw1">if</span> <span class="br0">&#40;</span>Captcha<span class="sy0">::</span><span class="me2">valid</span><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">post</span><span class="br0">&#40;</span><span class="st0">'captcha_response'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;p style=&quot;color:green&quot;&gt;Good answer!&lt;/p&gt;'</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
	<span class="kw1">else</span>
	<span class="br0">&#123;</span>
		<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;p style=&quot;color:red&quot;&gt;Wrong answer!&lt;/p&gt;'</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
&nbsp;
	<span class="co1">// Validate other fields here</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="co1">// Show form</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">open</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;p&gt;Other form fields here...&lt;/p&gt;'</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Don't show Captcha anymore after the user has given enough valid</span>
<span class="co1">// responses. The &quot;enough&quot; count is set in the captcha config.</span>
<span class="kw1">if</span> <span class="br0">&#40;</span> <span class="sy0">!</span> <span class="re1">$captcha</span><span class="sy0">-&gt;</span><span class="me1">promoted</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
	<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;p&gt;'</span><span class="sy0">;</span>
	<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$captcha</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// Shows the Captcha challenge (image/riddle/etc)</span>
	<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;/p&gt;'</span><span class="sy0">;</span>
	<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">input</span><span class="br0">&#40;</span><span class="st0">'captcha_response'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
<span class="kw1">else</span>
<span class="br0">&#123;</span>
	<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;p&gt;You have been promoted to human.&lt;/p&gt;'</span><span class="sy0">;</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="co1">// Close form</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">submit</span><span class="br0">&#40;</span><a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'value'</span> <span class="sy0">=&gt;</span> <span class="st0">'Check'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> form<span class="sy0">::</span><span class="me2">close</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer4ca1.gif?id=libraries%3Acaptcha&amp;1324588199" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/captcha by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


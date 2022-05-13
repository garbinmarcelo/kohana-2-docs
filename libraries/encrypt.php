<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/encrypt by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:encrypt    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-05-29T09:17:32-0500" />
<meta name="keywords" content="libraries,encrypt" />
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
<li class="level1"><div class="li"><span class="li"><a href="#encrypt_library" class="toc">Encrypt Library</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#overview" class="toc">Overview</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#loading_the_encryption_library" class="toc">Loading the encryption library</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#configuration" class="toc">Configuration</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#encode_data" class="toc">encode($data)</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#decode_encrypted" class="toc">decode($encrypted)</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">Check styling consistent, Proofread</td>
	</tr>
</table>



<h1><a name="encrypt_library" id="encrypt_library">Encrypt Library</a></h1>
<div class="level1">

</div>

<h2><a name="overview" id="overview">Overview</a></h2>
<div class="level2">

<p>

The Encrypt Library provides an easy way to encrypt and decrypt data using symmetric keys.
</p>

<p>
You can choose what cypher you&#039;d like the algorithm to use and you can specify your own key for the encryption.
</p>

</div>

<h2><a name="loading_the_encryption_library" id="loading_the_encryption_library">Loading the encryption library</a></h2>
<div class="level2">

<p>
The Encryption class is loaded into your controller by making a new instance of the Encrypt class:
</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">encrypt</span><span class="sy0">=</span><span class="kw2">new</span> Encrypt<span class="sy0">;</span></pre>
<p>

Access to the library is available through $this→encrypt
</p>

</div>

<h2><a name="configuration" id="configuration">Configuration</a></h2>
<div class="level2">

<p>
Configuration is done in <code>application/config/encryption.php</code>  if it&#039;s not there take the one from <code>system/config</code> and copy it. 

</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'key'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'YOUR CYPHER KEY'</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'mode'</span><span class="br0">&#93;</span> <span class="sy0">=</span> MCRYPT_MODE_NOFB<span class="sy0">;</span>
&nbsp;
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'cipher'</span><span class="br0">&#93;</span> <span class="sy0">=</span> MCRYPT_RIJNDAEL_128<span class="sy0">;</span></pre>
<p>
<code>config[&#039;key&#039;]</code> sets the key used for encryption.  It should be at least 16 characters long and contain letters, numbers, and symbols.
<code>$config[&#039;mode&#039;]</code> the MCrypt encryption mode to use.  See <a href="http://php.net/mcrypt" class="urlextern" title="http://php.net/mcrypt"  rel="nofollow">http://php.net/mcrypt</a> for more information, but you probably won&#039;t need to change this.
<code>$config[&#039;cipher&#039;]</code> sets the cipher to be used for encryption.
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="encode_data" id="encode_data">encode($data)</a></h3>
<div class="level3">

<p>

<code>$this→encrypt→encode($data)</code> returns an encrypted version of <code>$data</code> using the cipher and key specified in the configuration file.
</p>
<pre class="code php"><span class="re1">$encrypted_text</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">encrypt</span><span class="sy0">-&gt;</span><span class="me1">encode</span><span class="br0">&#40;</span><span class="st0">'The Answer is 42'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$encrypted_text</span><span class="sy0">;</span></pre>
</div>

<h3><a name="decode_encrypted" id="decode_encrypted">decode($encrypted)</a></h3>
<div class="level3">

<p>

<code>$this→encrypt→decode($encrypted)</code> returns a decrypted version of <code>$encrypted</code> using the cipher and key specified in the configuration file.
</p>
<pre class="code php"><span class="re1">$encrypted_text</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">encrypt</span><span class="sy0">-&gt;</span><span class="me1">encode</span><span class="br0">&#40;</span><span class="st0">'The Answer is 42'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">encrypt</span><span class="sy0">-&gt;</span><span class="me1">decode</span><span class="br0">&#40;</span><span class="re1">$encrypted_text</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer6ffa.gif?id=libraries%3Aencrypt&amp;1324588199" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/encrypt by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


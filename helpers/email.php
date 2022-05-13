<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/helpers/email by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    helpers:email    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-02-27T14:26:09-0600" />
<meta name="keywords" content="helpers,email" />
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
<li class="level1"><div class="li"><span class="li"><a href="#email_helper" class="toc">Email Helper</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#configuration" class="toc">Configuration</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#usage_examples" class="toc">Usage examples</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#sending_a_basic_email" class="toc">Sending a basic email</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#sending_advanced_emails" class="toc">Sending advanced emails</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#connect" class="toc">connect()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#send" class="toc">send()</a></span></div></li></ul>
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
		<th class="col0">Todo</th><td class="col1">fuller description of driver (when to use one over another). Test attachment example fully</td>
	</tr>
</table>



<h1><a name="email_helper" id="email_helper">Email Helper</a></h1>
<div class="level1">

<p>

An Email helper to work with the Swift email library. You <strong>need to</strong> have the Swiftmailer library in the vendor directory if you want the helper to work. The directory structure must be:

</p>
<pre class="code">vendor
 +- swift
 |    +- Swift
 |        |  ...
 |        |  ...
 |    -- Swift.php
 |    -- EasySwift.php</pre>
<ul>
<li class="level1"><div class="li"> You can choose to download Swiftmailer along with your Kohana archive in the <a href="http://kohanaphp.com/download" class="urlextern" title="http://kohanaphp.com/download"  rel="nofollow">download page</a></div>
</li>
<li class="level1"><div class="li"> Or you can manually <a href="http://www.swiftmailer.org/download/" class="urlextern" title="http://www.swiftmailer.org/download/"  rel="nofollow">download</a> and extract it in the vendor directory.</div>
</li>
</ul>

</div>

<h2><a name="configuration" id="configuration">Configuration</a></h2>
<div class="level2">

<p>

The swiftmailer configuration is done in the application/config/email.php file, if it&#039;s not there take the one from system/config and copy it to the application folder (see <a href="../general/filesystem.php" class="urlextern" title="http://docs.kohanaphp.com/general/filesystem"  rel="nofollow">cascading filesystem</a>): 
</p>
<pre class="code php"><span class="co1">// Valid drivers are: native, sendmail, smtp</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'driver'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'native'</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Driver options:</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'options'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="kw2">NULL</span><span class="sy0">;</span></pre>
</div>

<h4><a name="drivers" id="drivers">Drivers</a></h4>
<div class="level4">

<p>

<code>config[&#039;driver&#039;]</code> sets the SwiftMailer driver. Valid drivers are: 

</p>
<ul>
<li class="level1"><div class="li"> native</div>
</li>
<li class="level1"><div class="li"> sendmail</div>
</li>
<li class="level1"><div class="li"> smtp</div>
</li>
</ul>

</div>

<h4><a name="drivers_options" id="drivers_options">Drivers options</a></h4>
<div class="level4">

<p>

$config[&#039;options&#039;] contains driver specific parameters.

</p>
<ul>
<li class="level1"><div class="li"> smtp: hostname, port, username, password, encryption</div>
<ul>
<li class="level2"><div class="li"> <em>Note: Do <strong>not</strong> use the “auth” parameter if you&#039;re providing a name and password with smtp as it will cause a runtime error – the auth parameter is only for special authentication methods like POPb4SMTP (see <a href="http://forum.kohanaphp.com/comments.php?DiscussionID=1881" class="urlextern" title="http://forum.kohanaphp.com/comments.php?DiscussionID=1881"  rel="nofollow">http://forum.kohanaphp.com/comments.php?DiscussionID=1881</a> for more details).</em></div>
</li>
</ul>
</li>
</ul>
<pre class="code php"><span class="co1">// Standard smtp connection</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'options'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'hostname'</span><span class="sy0">=&gt;</span><span class="st0">'yourhostname'</span><span class="sy0">,</span> <span class="st0">'port'</span><span class="sy0">=&gt;</span><span class="st0">'25'</span><span class="sy0">,</span> <span class="st0">'username'</span><span class="sy0">=&gt;</span><span class="st0">'yourusername'</span><span class="sy0">,</span> <span class="st0">'password'</span><span class="sy0">=&gt;</span><span class="st0">'yourpassword'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Secure SMTP connections</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'options'</span><span class="br0">&#93;</span> <span class="sy0">=</span>  <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'hostname'</span><span class="sy0">=&gt;</span><span class="st0">'smtp.gmail.com'</span><span class="sy0">,</span> <span class="st0">'port'</span><span class="sy0">=&gt;</span><span class="st0">'465'</span><span class="sy0">,</span> <span class="st0">'username'</span><span class="sy0">=&gt;</span><span class="st0">'yourusername'</span><span class="sy0">,</span> <span class="st0">'password'</span><span class="sy0">=&gt;</span><span class="st0">'yourpassword'</span><span class="sy0">,</span> <span class="st0">'encryption'</span> <span class="sy0">=&gt;</span> <span class="st0">'tls'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre><ul>
<li class="level1"><div class="li"> sendmail: executable path or leave empty if you want Swift to auto detect sendmail path.</div>
</li>
</ul>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'options'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'/path/to/sendmail'</span><span class="sy0">;</span></pre>
</div>

<h2><a name="usage_examples" id="usage_examples">Usage examples</a></h2>
<div class="level2">

</div>

<h3><a name="sending_a_basic_email" id="sending_a_basic_email">Sending a basic email</a></h3>
<div class="level3">

<p>

To send a basic <acronym title="HyperText Markup Language">HTML</acronym> email, use the code below:
</p>
<pre class="code php"><span class="re1">$to</span>      <span class="sy0">=</span> <span class="st0">'to@example.com'</span><span class="sy0">;</span>  <span class="co1">// Address can also be array('to@example.com', 'Name')</span>
<span class="re1">$from</span>    <span class="sy0">=</span> <span class="st0">'from@example.com'</span><span class="sy0">;</span>
<span class="re1">$subject</span> <span class="sy0">=</span> <span class="st0">'This is an example subject'</span><span class="sy0">;</span>
<span class="re1">$message</span> <span class="sy0">=</span> <span class="st0">'This is an &lt;strong&gt;example&lt;/strong&gt; message'</span><span class="sy0">;</span>
&nbsp;
email<span class="sy0">::</span><span class="me2">send</span><span class="br0">&#40;</span><span class="re1">$to</span><span class="sy0">,</span> <span class="re1">$from</span><span class="sy0">,</span> <span class="re1">$subject</span><span class="sy0">,</span> <span class="re1">$message</span><span class="sy0">,</span> <span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="sending_advanced_emails" id="sending_advanced_emails">Sending advanced emails</a></h3>
<div class="level3">

<p>

To send advanced emails you need to use <a href="http://www.swiftmailer.org/wikidocs/" class="urlextern" title="http://www.swiftmailer.org/wikidocs/"  rel="nofollow">Swift mailer methods</a>. The code below show how to send an email with an attachment and multiple recipients. For advanced emails, Swiftmailer methods and classes will be directly used. <code>email::connect</code> can still be used to load Swiftmailer library and set the appropriate settings made in the config file config/email.php.
</p>

<p>
This example will not work correctly anymore due to a Swift Mailer bug.
</p>
<pre class="code php"><span class="co1">// Use connect() method to load Swiftmailer and connect using the parameters set in the email config file</span>
<span class="re1">$swift</span> <span class="sy0">=</span> email<span class="sy0">::</span><span class="me2">connect</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// From, subject and HTML message</span>
<span class="re1">$from</span> <span class="sy0">=</span> <span class="st0">'from@example.com'</span><span class="sy0">;</span>
<span class="re1">$subject</span> <span class="sy0">=</span> <span class="st0">'Backup: '</span> <span class="sy0">.</span> <a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="br0">&#40;</span><span class="st0">&quot;d/m/Y&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$message</span> <span class="sy0">=</span> <span class="st0">'This is the &lt;b&gt;backup&lt;/b&gt; for '</span> <span class="sy0">.</span> <a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="br0">&#40;</span><span class="st0">&quot;d/m/Y&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Build recipient lists</span>
<span class="re1">$recipients</span> <span class="sy0">=</span> <span class="kw2">new</span> Swift_RecipientList<span class="sy0">;</span>
<span class="re1">$recipients</span><span class="sy0">-&gt;</span><span class="me1">addTo</span><span class="br0">&#40;</span><span class="st0">'to1@example.com'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$recipients</span><span class="sy0">-&gt;</span><span class="me1">addTo</span><span class="br0">&#40;</span><span class="st0">'to2@example.com'</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Build the HTML message</span>
<span class="re1">$message</span> <span class="sy0">=</span> <span class="kw2">new</span> Swift_Message<span class="br0">&#40;</span><span class="re1">$subject</span><span class="sy0">,</span> <span class="re1">$message</span><span class="sy0">,</span> <span class="st0">&quot;text/html&quot;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="co1">// Attachment</span>
<span class="re1">$swiftfile</span> <span class="sy0">=</span> <span class="kw2">new</span> Swift_File<span class="br0">&#40;</span><span class="st0">'/backups/dump-'</span> <span class="sy0">.</span> <a href="http://www.php.net/date"><span class="kw3">date</span></a><span class="br0">&#40;</span><span class="st0">&quot;d-m-Y&quot;</span><span class="br0">&#41;</span> <span class="sy0">.</span> <span class="st0">'.tar.gz'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$attachment</span> <span class="sy0">=</span> <span class="kw2">new</span> Swift_Message_Attachment<span class="br0">&#40;</span><span class="re1">$swiftfile</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$message</span><span class="sy0">-&gt;</span><span class="me1">attach</span><span class="br0">&#40;</span><span class="re1">$attachment</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$swift</span><span class="sy0">-&gt;</span><span class="me1">send</span><span class="br0">&#40;</span><span class="re1">$message</span><span class="sy0">,</span> <span class="re1">$recipients</span><span class="sy0">,</span> <span class="re1">$from</span><span class="br0">&#41;</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
  <span class="co1">// Success</span>
<span class="br0">&#125;</span>
<span class="kw1">else</span>
<span class="br0">&#123;</span>
  <span class="co1">// Failure</span>
<span class="br0">&#125;</span>
&nbsp;
<span class="co1">// Disconnect</span>
<span class="re1">$swift</span><span class="sy0">-&gt;</span><span class="me1">disconnect</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="connect" id="connect">connect()</a></h3>
<div class="level3">

<p>

&#039;connect&#039; creates a SwiftMailer instance according to the driver and parameters set in the config file. 
</p>

</div>

<h3><a name="send" id="send">send()</a></h3>
<div class="level3">

<p>

&#039;send&#039; sends an e-mail using the specified information. 
The parameters are:
</p>
<ul>
<li class="level1"><div class="li"> [string|array] recipient email (and name), or an array of To, Cc, Bcc names</div>
</li>
<li class="level1"><div class="li"> [string|array] sender email (and name)</div>
</li>
<li class="level1"><div class="li"> [string] message subject</div>
</li>
<li class="level1"><div class="li"> [string] message body</div>
</li>
<li class="level1"><div class="li"> [boolean] send email as <acronym title="HyperText Markup Language">HTML</acronym> (defaults to false)</div>
</li>
<li class="level1"><div class="li"> return [integer] number of emails sent</div>
</li>
</ul>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer58c3.gif?id=helpers%3Aemail&amp;1324588203" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/helpers/email by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:31 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


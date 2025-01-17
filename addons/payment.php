<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/addons/payment by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    addons:payment    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2010-02-14T22:51:07-0600" />
<meta name="keywords" content="addons,payment" />
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
<li class="level1"><div class="li"><span class="li"><a href="#payment_module" class="toc">Payment Module</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#overview" class="toc">Overview</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#loading_the_payment_module" class="toc">Loading the payment module</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#usage_example" class="toc">Usage example</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#configuration" class="toc">Configuration</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#attributes" class="toc">Attributes</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#set_fields" class="toc">set_fields()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#process" class="toc">process()</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#drivers" class="toc">Drivers</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#authorize.net" class="toc">Authorize.net</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#trident_gateway" class="toc">Trident Gateway</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#trustcommerce" class="toc">TrustCommerce</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#yourpay.net" class="toc">YourPay.net</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#paypal" class="toc">PayPal</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#writing_your_own_driver" class="toc">Writing Your Own Driver</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Needs updating from library to module</td>
	</tr>
</table>



<h1><a name="payment_module" id="payment_module">Payment Module</a></h1>
<div class="level1">

</div>

<h2><a name="overview" id="overview">Overview</a></h2>
<div class="level2">

<p>

The payment module allows you to easily process e-commerce transactions without having to worry about all the backend details of connecting and setting up the cURL options. It has many features:

</p>
<ol>
<li class="level1"><div class="li"> An extremely easy <acronym title="Application Programming Interface">API</acronym> (only one method required to process a transaction!)</div>
</li>
<li class="level1"><div class="li"> Detailed error reporting</div>
</li>
<li class="level1"><div class="li"> Extensible with backend drivers to connect to many different payment gateways</div>
</li>
<li class="level1"><div class="li"> Support for credit card gateways as well as PayPal-like gateways</div>
</li>
</ol>

</div>

<h2><a name="loading_the_payment_module" id="loading_the_payment_module">Loading the payment module</a></h2>
<div class="level2">

<p>

This can be done in the application/config/config.php file using the &#039;modules&#039; setting.
</p>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'modules'</span><span class="br0">&#93;</span> <span class="sy0">=&gt;</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
    <span class="st0">'modules/auth'</span><span class="sy0">,</span>
    <span class="st0">'modules/payment'</span>
<span class="br0">&#41;</span></pre>
<p>
Then you just have to instantiate the module to use it. For example:
</p>
<pre class="code php"><span class="re1">$payment</span> <span class="sy0">=</span> <span class="kw2">new</span> Payment<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="usage_example" id="usage_example">Usage example</a></h2>
<div class="level2">

<p>

Using it is very simple. The code below shows how to use the payment module, just set the fields required by your driver, and process().
</p>
<pre class="code php"><span class="re1">$payment</span> <span class="sy0">=</span> <span class="kw2">new</span> Payment<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$payment</span><span class="sy0">-&gt;</span><span class="me1">card_num</span> <span class="sy0">=</span> <span class="st0">'1234567890123456'</span><span class="sy0">;</span>
<span class="re1">$payment</span><span class="sy0">-&gt;</span><span class="me1">exp_date</span> <span class="sy0">=</span> <span class="st0">'0510'</span><span class="sy0">;</span>
&nbsp;
<span class="kw1">if</span> <span class="br0">&#40;</span><span class="re1">$status</span> <span class="sy0">=</span> <span class="re1">$payment</span><span class="sy0">-&gt;</span><span class="me1">process</span><span class="br0">&#40;</span><span class="br0">&#41;</span> <span class="sy0">===</span> <span class="kw2">TRUE</span><span class="br0">&#41;</span>
<span class="br0">&#123;</span>
     <span class="co1">// Report successful transaction</span>
<span class="br0">&#125;</span>
<span class="kw1">else</span>
<span class="br0">&#123;</span>
    <span class="co1">// $status has the error message, so display an error page based on it</span>
<span class="br0">&#125;</span></pre>
</div>

<h2><a name="configuration" id="configuration">Configuration</a></h2>
<div class="level2">

<p>

In system/config/payment.php there is a sample config for each payment gateway we support. Simply copy this file to your application directory, and remove the drivers you are not using. The module can support using more than one driver per application by passing the driver name to the constructor:
</p>
<pre class="code php"><span class="re1">$paypal_payment</span> <span class="sy0">=</span> <span class="kw2">new</span> Payment<span class="br0">&#40;</span><span class="st0">'Paypal'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="re1">$authorize_payment</span> <span class="sy0">=</span> <span class="kw2">new</span> Payment<span class="br0">&#40;</span><span class="st0">'Authorize'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
After you remove the non-required config lines, modify your driver config as needed. Usually this will include some sort of <acronym title="Application Programming Interface">API</acronym> username/password combination, but it differs for each driver.
</p>

</div>

<h2><a name="attributes" id="attributes">Attributes</a></h2>
<div class="level2">

<p>

The payment module has a set of default attributes it uses to send payments to the gateway. These attributes are fairly self explanatory and are listed below.

</p>
<ul>
<li class="level1"><div class="li">  card_num</div>
</li>
<li class="level1"><div class="li">  exp_date</div>
</li>
<li class="level1"><div class="li">  cvv</div>
</li>
<li class="level1"><div class="li">  description</div>
</li>
<li class="level1"><div class="li">  amount</div>
</li>
<li class="level1"><div class="li">  tax</div>
</li>
<li class="level1"><div class="li">  shipping</div>
</li>
<li class="level1"><div class="li">  first_name</div>
</li>
<li class="level1"><div class="li">  last_name</div>
</li>
<li class="level1"><div class="li">  company</div>
</li>
<li class="level1"><div class="li">  address</div>
</li>
<li class="level1"><div class="li">  city</div>
</li>
<li class="level1"><div class="li">  state</div>
</li>
<li class="level1"><div class="li">  zip</div>
</li>
<li class="level1"><div class="li">  email</div>
</li>
<li class="level1"><div class="li">  phone</div>
</li>
<li class="level1"><div class="li">  fax	</div>
</li>
<li class="level1"><div class="li">  ship_to_first_name</div>
</li>
<li class="level1"><div class="li">  ship_to_last_name</div>
</li>
<li class="level1"><div class="li">  ship_to_company</div>
</li>
<li class="level1"><div class="li">  ship_to_address</div>
</li>
<li class="level1"><div class="li">  ship_to_city</div>
</li>
<li class="level1"><div class="li">  ship_to_state</div>
</li>
<li class="level1"><div class="li">  ship_to_zip</div>
</li>
</ul>

<p>

Specific drivers may require some or all of these fields. They may also have driver specific fields that are noted in the Driver section.
</p>

</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

<p>

The payment module has a minimal set of methods to use:
</p>

</div>

<h3><a name="set_fields" id="set_fields">set_fields()</a></h3>
<div class="level3">

<p>

This method allows you to set bulk payment attributes with an array.
</p>
<pre class="code php"><span class="re1">$payment</span> <span class="sy0">=</span> <span class="kw2">new</span> Payment<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$attributes</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a>
<span class="br0">&#40;</span>
    <span class="st0">'card_num'</span> <span class="sy0">=&gt;</span> <span class="st0">'1234567890123456'</span><span class="sy0">,</span>
    <span class="st0">'exp_date'</span> <span class="sy0">=&gt;</span> <span class="st0">'0510'</span>
<span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$payment</span><span class="sy0">-&gt;</span><span class="me1">set_fields</span><span class="br0">&#40;</span><span class="re1">$attributes</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="process" id="process">process()</a></h3>
<div class="level3">

<p>

This method does the magic. After you set your attributes, simply call this method in an if test. The method returns TRUE on successful payment transaction or an error string on failure. It is up to you how to handle the failure.
</p>

</div>

<h2><a name="drivers" id="drivers">Drivers</a></h2>
<div class="level2">

<p>

The payment module uses drivers much like the Database library does in order to keep the <acronym title="Application Programming Interface">API</acronym> consistent between payment gateways. It currently supports the following gateways:

</p>
<ol>
<li class="level1"><div class="li"> <a href="http://www.authorize.net/" class="urlextern" title="http://www.authorize.net/"  rel="nofollow">Authorize.net</a></div>
</li>
<li class="level1"><div class="li"> <a href="http://checkout.google.com/" class="urlextern" title="http://checkout.google.com"  rel="nofollow">Google Checkout</a></div>
</li>
<li class="level1"><div class="li"> <a href="http://www.moneybookers.com/" class="urlextern" title="http://www.moneybookers.com/"  rel="nofollow">Moneybookers</a></div>
</li>
<li class="level1"><div class="li"> Trident Gateway</div>
</li>
<li class="level1"><div class="li"> <a href="http://www.trustcommerce.com/" class="urlextern" title="http://www.trustcommerce.com/"  rel="nofollow">TrustCommerce</a></div>
</li>
<li class="level1"><div class="li"> <a href="http://yourpay.net/" class="urlextern" title="http://YourPay.net"  rel="nofollow">YourPay.net</a></div>
</li>
<li class="level1"><div class="li"> <a href="http://www.paypal.com/" class="urlextern" title="http://www.paypal.com"  rel="nofollow">PayPal/Paypal Pro</a></div>
</li>
</ol>

</div>

<h3><a name="authorize.net" id="authorize.net">Authorize.net</a></h3>
<div class="level3">

</div>

<h4><a name="required_fields" id="required_fields">Required Fields</a></h4>
<div class="level4">
<ol>
<li class="level1"><div class="li"> card_num</div>
</li>
<li class="level1"><div class="li"> exp_date</div>
</li>
<li class="level1"><div class="li"> amount</div>
</li>
</ol>

</div>

<h4><a name="note" id="note">Note</a></h4>
<div class="level4">

<p>

Only enable test_mode in the config if you have a Authorize.net developer test account. If you have a regular account that is in test mode (set on your Authorize.net web portal) then disable test mode.
</p>

</div>

<h3><a name="trident_gateway" id="trident_gateway">Trident Gateway</a></h3>
<div class="level3">

</div>

<h4><a name="required_fields1" id="required_fields1">Required Fields</a></h4>
<div class="level4">
<ol>
<li class="level1"><div class="li"> card_num</div>
</li>
<li class="level1"><div class="li"> exp_date</div>
</li>
<li class="level1"><div class="li"> amount</div>
</li>
</ol>

</div>

<h3><a name="trustcommerce" id="trustcommerce">TrustCommerce</a></h3>
<div class="level3">

</div>

<h4><a name="required_fields2" id="required_fields2">Required Fields</a></h4>
<div class="level4">
<ol>
<li class="level1"><div class="li"> card_num</div>
</li>
<li class="level1"><div class="li"> exp_date</div>
</li>
<li class="level1"><div class="li"> amount</div>
</li>
</ol>

</div>

<h3><a name="yourpay.net" id="yourpay.net">YourPay.net</a></h3>
<div class="level3">

</div>

<h4><a name="required_fields3" id="required_fields3">Required Fields</a></h4>
<div class="level4">
<ol>
<li class="level1"><div class="li"> card_num</div>
</li>
<li class="level1"><div class="li"> exp_date</div>
</li>
<li class="level1"><div class="li"> amount</div>
</li>
<li class="level1"><div class="li"> tax</div>
</li>
<li class="level1"><div class="li"> shipping</div>
</li>
<li class="level1"><div class="li"> cvv</div>
</li>
</ol>

</div>

<h4><a name="driver_specific_details" id="driver_specific_details">Driver Specific Details</a></h4>
<div class="level4">

<p>
The amount above is the subtotal. Tax and Shipping get added to the amount to form the grand total inside the driver.

</p>

</div>

<h3><a name="paypal" id="paypal">PayPal</a></h3>
<div class="level3">

</div>

<h4><a name="required_fields4" id="required_fields4">Required Fields</a></h4>
<div class="level4">
<ol>
<li class="level1"><div class="li"> amount</div>
</li>
<li class="level1"><div class="li"> payerid (after paypal authentication)</div>
</li>
</ol>

</div>

<h4><a name="driver_specific_details1" id="driver_specific_details1">Driver Specific Details</a></h4>
<div class="level4">

<p>

Using the PayPal driver is a little different than a normal credit card transaction. It requires two process() commands to be run. The first one will send the user to PayPal to authenticate, and the second one will actually run the transaction. Below is an example of this.
</p>
<pre class="code php"><span class="kw2">class</span> Paypal_Controller <span class="kw2">extends</span> Controller <span class="br0">&#123;</span>
&nbsp;
	<span class="co1">// This will demo a simple paypal transaction. It really only comes down to two steps.</span>
	<span class="kw2">function</span> __construct<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		parent<span class="sy0">::</span>__construct<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
&nbsp;
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">paypal</span> <span class="sy0">=</span> <span class="kw2">new</span> Payment<span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
&nbsp;
	<span class="co1">// This will set up the transaction and redirect the user to paypal to login</span>
	<span class="kw2">function</span> index<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="co1">// Delete any existing payment attempts</span>
		Session<span class="sy0">::</span><span class="me2">instance</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">delete</span><span class="br0">&#40;</span><span class="st0">'paypal_token'</span><span class="br0">&#41;</span><span class="sy0">;</span>
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">paypal</span><span class="sy0">-&gt;</span><span class="me1">amount</span> <span class="sy0">=</span> <span class="nu0">5</span><span class="sy0">;</span>
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">paypal</span><span class="sy0">-&gt;</span><span class="me1">process</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
&nbsp;
	<span class="co1">// Once the user logs in, paypal redirects them here (set in the config file), which processes the payment</span>
	<span class="kw2">function</span> return_test<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">paypal</span><span class="sy0">-&gt;</span><span class="me1">amount</span> <span class="sy0">=</span> <span class="nu0">5</span><span class="sy0">;</span>
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">paypal</span><span class="sy0">-&gt;</span><span class="me1">payerid</span> <span class="sy0">=</span> <span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">input</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="st0">'payerid'</span><span class="br0">&#41;</span><span class="sy0">;</span>
		<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">paypal</span><span class="sy0">-&gt;</span><span class="me1">process</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> ? <span class="st0">&quot;WORKED&quot;</span> <span class="sy0">:</span> <span class="st0">&quot;FAILED&quot;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
&nbsp;
	<span class="co1">// This is the cancel URL (set from the config file)</span>
	<span class="kw2">function</span> cancel_test<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'cancelled'</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
&nbsp;
	<span class="co1">// Just some utility functions.</span>
	<span class="kw2">function</span> reset_session<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">destroy</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
		url<span class="sy0">::</span><span class="me2">redirect</span><span class="br0">&#40;</span><span class="st0">'paypal/index'</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
&nbsp;
	<span class="kw2">function</span> session_status<span class="br0">&#40;</span><span class="br0">&#41;</span>
	<span class="br0">&#123;</span>
		<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> <span class="st0">'&lt;pre&gt;'</span><span class="sy0">.</span><a href="http://www.php.net/print_r"><span class="kw3">print_r</span></a><span class="br0">&#40;</span><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">session</span><span class="sy0">-&gt;</span><span class="me1">get</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">,</span> <span class="kw2">true</span><span class="br0">&#41;</span><span class="sy0">;</span>
	<span class="br0">&#125;</span>
<span class="br0">&#125;</span></pre>
</div>

<h2><a name="writing_your_own_driver" id="writing_your_own_driver">Writing Your Own Driver</a></h2>
<div class="level2">

<p>

There are many more payment gateways than there are drivers provided by Kohana. We encourage you to write your own when you encounter a gateway not supported by the module. An easy way to do it is like so:

</p>
<ol>
<li class="level1"><div class="li"> Add a new entry in config/payment.php with your driver details. Use the previous entries as an example.</div>
</li>
<li class="level1"><div class="li"> Copy the Trident Gateway driver and rename it to *Gateway Name*.php</div>
</li>
<li class="level1"><div class="li"> Alter the required fields array as instructed in the gateway&#039;s <acronym title="Application Programming Interface">API</acronym> manual (You have this, right? ;)</div>
</li>
<li class="level1"><div class="li"> Modify the fields array to include all the available relevant fields for the gateway</div>
</li>
<li class="level1"><div class="li"> Modify the constructor to set default values from the config file (<acronym title="Application Programming Interface">API</acronym> username/password for example)</div>
</li>
<li class="level1"><div class="li"> Modify the set_fields() method to do variable translation (for example if your gateway names cc_num something different. Look in your <acronym title="Application Programming Interface">API</acronym> manual for details.)</div>
</li>
<li class="level1"><div class="li"> Modify the $post_url ternary statement to include the correct test and live mode <acronym title="Application Programming Interface">API</acronym> URLs</div>
</li>
<li class="level1"><div class="li"> Modify how the return statement handles success and error based on what the specific gateway status message is (Look in you <acronym title="Application Programming Interface">API</acronym> manual)</div>
</li>
</ol>

</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexer132b.gif?id=addons%3Apayment&amp;1324588197" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/addons/payment by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


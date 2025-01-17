<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<!-- Mirrored from docs.kohanaphp.com/libraries/image by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    libraries:image    [Kohana User Guide]
</title>
<meta name="generator" content="DokuWiki Release 2008-05-05" />
<meta name="robots" content="index,follow" />
<meta name="date" content="2009-01-28T04:55:22-0600" />
<meta name="keywords" content="libraries,image" />
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
<li class="level1"><div class="li"><span class="li"><a href="#image_library" class="toc">Image Library</a></span></div>
<ul class="toc">
<li class="level2"><div class="li"><span class="li"><a href="#loading_the_image_library" class="toc">Loading the Image library</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#configuring_the_library" class="toc">Configuring the library</a></span></div></li>
<li class="level2"><div class="li"><span class="li"><a href="#methods" class="toc">Methods</a></span></div>
<ul class="toc">
<li class="level3"><div class="li"><span class="li"><a href="#resize" class="toc">resize()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#crop" class="toc">crop()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#rotate" class="toc">rotate()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#flip" class="toc">flip()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#sharpen" class="toc">sharpen()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#quality" class="toc">quality()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#save" class="toc">save()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#render" class="toc">render()</a></span></div></li>
<li class="level3"><div class="li"><span class="li"><a href="#get" class="toc">__get()</a></span></div></li>
</ul>
</li>
<li class="level2"><div class="li"><span class="li"><a href="#full_example" class="toc">Full Example</a></span></div></li></ul>
</li></ul>
</div>
</div>
<!-- TOC END -->
<table class="inline">
	<tr class="row0">
		<th class="col0">Status</th><td class="col1">Final Draft</td>
	</tr>
	<tr class="row1">
		<th class="col0">Todo</th><td class="col1">Proofread</td>
	</tr>
</table>



<h1><a name="image_library" id="image_library">Image Library</a></h1>
<div class="level1">

<p>

Provides methods for the dynamic manipulation of images. Various image formats such as <acronym title="Joint Photographics Experts Group">JPEG</acronym>, <acronym title="Portable Network Graphics">PNG</acronym>, and <acronym title="Graphics Interchange Format">GIF</acronym> can be resized, cropped, rotated and sharpened.
</p>

<p>
All image manipulations are applied to a <strong>temporary</strong> image. Only the <code>save()</code> method is permanent, the temporary image being written to a specified image file.
</p>


<div class='box blue'>
  <b class='xtop'><b class='xb1'></b><b class='xb2'></b><b class='xb3'></b><b class='xb4'></b></b>
  <div class='xbox'>
<div class='box_content'><p>
Image manipulation methods can be chained efficiently. Recommended order: <code>resize</code>, <code>crop</code>, <code>sharpen</code>, <code>quality</code> and <code>rotate</code> or <code>flip</code> 
</p></div>
  </div>
  <b class='xbottom'><b class='xb4'></b><b class='xb3'></b><b class='xb2'></b><b class='xb1'></b></b>
</div>


</div>

<h2><a name="loading_the_image_library" id="loading_the_image_library">Loading the Image library</a></h2>
<div class="level2">

<p>

Uses a driver, configured in <code>config/image.php</code>. The default driver uses the GD2 library, bundled with <acronym title="Hypertext Preprocessor">PHP</acronym>. ImageMagick may be used if available.
</p>

<p>
When loading the library, a path to the image file, (relative or absolute) must be passed as a parameter.
</p>

<p>
Load the Image Library in your controller using the <strong>new</strong> keyword:

</p>
<pre class="code php"><span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">image</span> <span class="sy0">=</span> <span class="kw2">new</span> Image<span class="br0">&#40;</span><span class="st0">'./photo.jpg'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
<p>
Access to the library is available through <code>$this→image</code> Some methods are chainable.
</p>

</div>

<h2><a name="configuring_the_library" id="configuring_the_library">Configuring the library</a></h2>
<div class="level2">

<p>

To change default settings, edit <code>application/config/image.php</code>
</p>

<p>
Drivers available:

</p>
<ul>
<li class="level1"><div class="li"> <strong>GD</strong> - The default driver, requires GD2 version &gt;= 2.0.34 (Debian / Ubuntu users note: Some functions, eg. <code>sharpen</code> may not be available)</div>
</li>
<li class="level1"><div class="li"> <strong>ImageMagick</strong> - Windows users <strong>must</strong> specify a path to the binary. Unix versions will attempt to auto-locate.</div>
</li>
<li class="level1"><div class="li"> <strong>GraphicsMagick</strong> - Windows users <strong>must</strong> specify a path to the binary. Unix versions will attempt to auto-locate.</div>
</li>
</ul>
<pre class="code php"><span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'driver'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <span class="st0">'GD'</span><span class="sy0">;</span>
<span class="co1">// For Windows</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'params'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'directory'</span> <span class="sy0">=&gt;</span> <span class="st0">'C:/ImageMagick'</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">// For Un*x assuming the binary is in usr/local/bin</span>
<span class="re1">$config</span><span class="br0">&#91;</span><span class="st0">'params'</span><span class="br0">&#93;</span> <span class="sy0">=</span> <a href="http://www.php.net/array"><span class="kw3">array</span></a><span class="br0">&#40;</span><span class="st0">'directory'</span> <span class="sy0">=&gt;</span> <span class="st0">'/usr/local/bin'</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h2><a name="methods" id="methods">Methods</a></h2>
<div class="level2">

</div>

<h3><a name="resize" id="resize">resize()</a></h3>
<div class="level3">

<p>

<code>resize()</code> is used to resize an image. This method is chainable. By default, the aspect ratio will be maintained automatically. 

</p>
<ul>
<li class="level1"><div class="li">[integer] Width in pixels of the resized image.</div>
</li>
<li class="level1"><div class="li">[integer] Height in pixels of the resized image.</div>
</li>
<li class="level1"><div class="li">[integer] Master dimension, default is Auto.  Options : Image::NONE, Image::AUTO, Image::HEIGHT, Image::WIDTH</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Resize original image to width of 400 and height of 200 pixels without maintaining the aspect ratio.</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">image</span><span class="sy0">-&gt;</span><span class="me1">resize</span><span class="br0">&#40;</span><span class="nu0">400</span><span class="sy0">,</span> <span class="nu0">200</span><span class="sy0">,</span> Image<span class="sy0">::</span><span class="me2">NONE</span><span class="br0">&#41;</span>
<span class="co1">//Note: The output image is resized to width of 400 and height of 200, without maintaining the aspect ratio</span>
&nbsp;
<span class="co1">// Resize original image to Height of 200 pixels, using height to maintain aspect ratio.</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">image</span><span class="sy0">-&gt;</span><span class="me1">resize</span><span class="br0">&#40;</span><span class="nu0">400</span><span class="sy0">,</span> <span class="nu0">200</span><span class="sy0">,</span> Image<span class="sy0">::</span><span class="me2">HEIGHT</span><span class="br0">&#41;</span>
<span class="co1">// Note: Passing width = 400 has no effect on the resized width, which is controlled by the 3rd argument, maintain aspect ratio on height</span>
&nbsp;
<span class="co1">// Resize original image (800x600) using automatic aspect ratio calculation</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">image</span><span class="sy0">-&gt;</span><span class="me1">resize</span><span class="br0">&#40;</span><span class="nu0">740</span><span class="sy0">,</span><span class="nu0">400</span><span class="sy0">,</span>Image<span class="sy0">::</span><span class="me2">AUTO</span><span class="br0">&#41;</span>
<span class="co1">// the resulting resized image is 533x400 because Kohana determines the master dimension to be height 800/740 &lt; 600/400</span></pre>
</div>

<h3><a name="crop" id="crop">crop()</a></h3>
<div class="level3">

<p>

<code>crop()</code> is used to crop an image to a specific width and height. This method is chainable. 
</p>

<p>
The <strong>top</strong> and <strong>left</strong> offsets may be specified. By default &#039;top&#039; and &#039;left&#039; use the &#039;center&#039; offset. 

</p>
<ul>
<li class="level1"><div class="li">[integer] Width in pixels of the cropped image.</div>
</li>
<li class="level1"><div class="li">[integer] Height in pixels of the cropped image.</div>
</li>
<li class="level1"><div class="li">[integer] Top offset of input image, pixel value or one of &#039;top&#039;, &#039;center&#039;, &#039;bottom&#039;.</div>
</li>
<li class="level1"><div class="li">[integer] Left offset of input image, pixel value or one of &#039;left&#039;, &#039;center&#039;, &#039;right&#039;.</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Crop from the original image, starting from the 'center' of the image from the 'top' and the 'center' of the image from the 'left'</span>
<span class="co1">// to a width of 400 and height of 350.</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">image</span><span class="sy0">-&gt;</span><span class="me1">crop</span><span class="br0">&#40;</span><span class="nu0">400</span><span class="sy0">,</span> <span class="nu0">350</span><span class="br0">&#41;</span></pre>
</div>

<h3><a name="rotate" id="rotate">rotate()</a></h3>
<div class="level3">

<p>

<code>rotate()</code> is used to rotate an image by a specified number of degrees. This method is chainable. The image may be rotated clockwise or anti-clockwise, by a maximum of 180 degrees.

</p>
<ul>
<li class="level1"><div class="li">[integer] Degrees to rotate. (negative rotates anti-clockwise) There is no default.</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Rotate the image by 45 degrees to the 'left' or anti-clockwise.</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">image</span><span class="sy0">-&gt;</span><span class="me1">rotate</span><span class="br0">&#40;</span><span class="nu0">-45</span><span class="br0">&#41;</span></pre>
</div>

<h3><a name="flip" id="flip">flip()</a></h3>
<div class="level3">

<p>

<code>flip()</code> is used to rotate an image along the horizontal or vertical axis. The method is chainable.

</p>
<ul>
<li class="level1"><div class="li">[integer] Direction. Horizontal = 5, Vertical = 6</div>
</li>
</ul>

<p>
<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Rotate the image along the vertical access.</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">image</span><span class="sy0">-&gt;</span><span class="me1">flip</span><span class="br0">&#40;</span><span class="nu0">6</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="sharpen" id="sharpen">sharpen()</a></h3>
<div class="level3">

<p>

<code>sharpen()</code> Is used to sharpen an image by a specified amount. This method is chainable. 

</p>
<ul>
<li class="level1"><div class="li">[integer] Sharpen amount to apply to image. Range is between 1 and 100. Optimal amount is about 20. There is no default.</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Sharpen the image by an amount of 15.</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">image</span><span class="sy0">-&gt;</span><span class="me1">sharpen</span><span class="br0">&#40;</span><span class="nu0">15</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="quality" id="quality">quality()</a></h3>
<div class="level3">

<p>

<code>quality()</code> Is used to adjust the image quality by a specified percentage.  This method is chainable. 
</p>

<p>
Note: The method is for reducing the quality of an image, in order to reduce the file size of the image, saving bandwidth and load time. It cannot be used to actually improve the quality of an input image. 

</p>
<ul>
<li class="level1"><div class="li">[integer] Percentage amount to adjust quality. Range is between 1 and 100. Optimal percentage is from 75 to 85. There is no default.</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Reduce image quality to 75 percent of original</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">image</span><span class="sy0">-&gt;</span><span class="me1">quality</span><span class="br0">&#40;</span><span class="nu0">75</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="save" id="save">save()</a></h3>
<div class="level3">

<p>

<code>save($new_image = FALSE, $chmod = 0644, $keep_actions = FALSE)</code> Is used to save the image to a file on disk.  This method is NOT chainable. The default is to overwrite the input image file. Accepts a relative or absolute file path. 
</p>
<ul>
<li class="level1"><div class="li"><strong>[string]</strong> <em>$new_image</em> The file path and output image file name. Default is to overwrite input file. </div>
</li>
<li class="level1"><div class="li"><strong>[integer]</strong> <em>$chmod</em> permissions for new image (default 0644)</div>
</li>
<li class="level1"><div class="li"><strong>[bool]</strong> <em>$keep_actions</em> keep or discard image process actions (default FALSE).</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="co1">// Save image and overwrite the input image file</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">image</span><span class="sy0">-&gt;</span><span class="me1">save</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span>
<span class="co1">//</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">image</span><span class="sy0">-&gt;</span><span class="me1">save</span><span class="br0">&#40;</span><span class="st0">'./new-image.jpg'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// Save image to a new file.</span></pre>
</div>

<h3><a name="render" id="render">render()</a></h3>
<div class="level3">

<p>

<code>render($keep_actions = FALSE) </code> is used to output the image to the browser. This method is NOT chainable. It means that the headers corresponding to the image format are sent and the raw image stream with manipulation applied will be outputted directly to the browser. Returns TRUE on success or FALSE on failure. 

</p>
<ul>
<li class="level1"><div class="li"><strong>[bool]</strong> <em>$keep_actions</em> keep or discard image process actions (default FALSE)</div>
</li>
</ul>

<p>

<strong>Example:</strong>

</p>
<pre class="code php"><span class="re1">$image</span> <span class="sy0">=</span> <span class="kw2">new</span> Image<span class="br0">&#40;</span><span class="re1">$dir</span><span class="sy0">.</span><span class="st0">'moo.jpg'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// Instantiate the library</span>
<span class="re1">$image</span><span class="sy0">-&gt;</span><span class="me1">resize</span><span class="br0">&#40;</span><span class="nu0">400</span><span class="sy0">,</span> <span class="kw2">NULL</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">crop</span><span class="br0">&#40;</span><span class="nu0">400</span><span class="sy0">,</span> <span class="nu0">350</span><span class="sy0">,</span> <span class="st0">'top'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">sharpen</span><span class="br0">&#40;</span><span class="nu0">20</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">quality</span><span class="br0">&#40;</span><span class="nu0">75</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// apply image manipulations</span>
&nbsp;
<span class="co1">// Output the image directly to the browser</span>
<span class="re1">$this</span><span class="sy0">-&gt;</span><span class="me1">image</span><span class="sy0">-&gt;</span><span class="me1">render</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="sy0">;</span></pre>
</div>

<h3><a name="get" id="get">__get()</a></h3>
<div class="level3">

<p>

<code>__get()</code> is used to handle retrieval of pre-save image properties. Properties available are:

</p>
<ul>
<li class="level1"><div class="li"> &#039;file&#039;</div>
</li>
<li class="level1"><div class="li"> &#039;width&#039;</div>
</li>
<li class="level1"><div class="li"> &#039;height&#039;</div>
</li>
<li class="level1"><div class="li"> &#039;type&#039;</div>
</li>
<li class="level1"><div class="li"> &#039;ext&#039;</div>
</li>
<li class="level1"><div class="li"> &#039;mime&#039;</div>
</li>
</ul>

</div>

<h2><a name="full_example" id="full_example">Full Example</a></h2>
<div class="level2">

<p>

Place this code into a controller:
</p>
<pre class="code php"><span class="co1">// The original image is located in folder /application/upload.</span>
<span class="re1">$dir</span> <span class="sy0">=</span> <a href="http://www.php.net/str_replace"><span class="kw3">str_replace</span></a><span class="br0">&#40;</span><span class="st0">'<span class="es0">\\</span>'</span><span class="sy0">,</span> <span class="st0">'/'</span><span class="sy0">,</span> <a href="http://www.php.net/realpath"><span class="kw3">realpath</span></a><span class="br0">&#40;</span><a href="http://www.php.net/dirname"><span class="kw3">dirname</span></a><span class="br0">&#40;</span><span class="kw2">__FILE__</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="st0">'/../upload'</span><span class="br0">&#41;</span><span class="br0">&#41;</span><span class="sy0">.</span><span class="st0">'/'</span><span class="sy0">;</span>
&nbsp;
<span class="re1">$image</span> <span class="sy0">=</span> <span class="kw2">new</span> Image<span class="br0">&#40;</span><span class="re1">$dir</span><span class="sy0">.</span><span class="st0">'moo.jpg'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// Instantiate the library</span>
&nbsp;
<span class="re1">$image</span><span class="sy0">-&gt;</span><span class="me1">resize</span><span class="br0">&#40;</span><span class="nu0">400</span><span class="sy0">,</span> <span class="kw2">NULL</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">crop</span><span class="br0">&#40;</span><span class="nu0">400</span><span class="sy0">,</span> <span class="nu0">350</span><span class="sy0">,</span> <span class="st0">'top'</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">sharpen</span><span class="br0">&#40;</span><span class="nu0">20</span><span class="br0">&#41;</span><span class="sy0">-&gt;</span><span class="me1">quality</span><span class="br0">&#40;</span><span class="nu0">75</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// apply image manipulations</span>
&nbsp;
<span class="re1">$image</span><span class="sy0">-&gt;</span><span class="me1">save</span><span class="br0">&#40;</span><span class="re1">$dir</span><span class="sy0">.</span><span class="st0">'super-cow-crop.jpg'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// Write the changed image to a new file in the original input folder. Manipulations are discarded after the save call ($keep_action default TRUE).</span>
&nbsp;
<a href="http://www.php.net/echo"><span class="kw3">echo</span></a> Kohana<span class="sy0">::</span><span class="me2">debug</span><span class="br0">&#40;</span><span class="re1">$image</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// Display some useful info about the operation **for debugging only**.</span>
&nbsp;
<span class="re1">$image</span><span class="sy0">-&gt;</span><span class="me1">resize</span><span class="br0">&#40;</span><span class="nu0">300</span><span class="sy0">,</span> <span class="kw2">NULL</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// Resize the original image</span>
&nbsp;
<span class="re1">$image</span><span class="sy0">-&gt;</span><span class="me1">save</span><span class="br0">&#40;</span><span class="re1">$dir</span><span class="sy0">.</span><span class="st0">'super-cow-resize.jpg'</span><span class="sy0">,</span> <span class="kw2">TRUE</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// Write the changed image to a new file in the original input folder</span>
&nbsp;
<span class="re1">$image</span><span class="sy0">-&gt;</span><span class="me1">crop</span><span class="br0">&#40;</span><span class="nu0">300</span><span class="sy0">,</span> <span class="nu0">250</span><span class="sy0">,</span> <span class="st0">'top'</span><span class="br0">&#41;</span><span class="sy0">;</span> <span class="co1">// Resize and crop the original image ($keep_action set to TRUE means that resize manipulation has been kept after the save method call).</span></pre>
</div>

<!-- wikipage stop -->

</div>
<!-- End Body -->

<div id="footer"><strong>&copy;2007-2008 Kohana Team. All rights reserved.</strong></div>

</div>
<div class="no"><img src="../lib/exe/indexeraf57.gif?id=libraries%3Aimage&amp;1324588200" width="1" height="1" alt=""  /></div>
</body>

<!-- Mirrored from docs.kohanaphp.com/libraries/image by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 22 Dec 2011 21:14:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
</html>


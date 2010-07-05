#!/usr/bin/php
<?php

/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

BuildProjects By Christopher Hein 

• Site:         http://christopherhein.com
• Version:      0.1
• Author:       Christopher Hein
• Author URL:   http://www.christopherhein.com
• Author Email: me@christopherhein.com

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/


//setting the local path
$localpath = getenv('CODA_SITE_LOCAL_PATH');
$supportpath = getenv('CODA_BUNDLE_SUPPORT');


// Create Assets Folder
	if( is_dir( $localpath."/_assets" ) ) {} else 
	{
		mkdir($localpath."/_assets");
	}

// Creating CSS Folder
	if( is_dir( $localpath."/_assets/css" ) ) {}else
	{
		mkdir($localpath."/_assets/css");
	}

// Creating Data Folder
	if( is_dir( $localpath."/_assets/data" ) ) {}else
	{
		mkdir($localpath."/_assets/data");
	}

// Creating Downloads Folder
	if( is_dir( $localpath."/_assets/downloads" ) ) {}else
	{
		mkdir($localpath."/_assets/downloads");
	}

// Creating FLV Folder
	if( is_dir( $localpath."/_assets/flv" ) ) {}else
	{
		mkdir($localpath."/_assets/flv");
	}

// Creating Images Folder
	if( is_dir( $localpath."/_assets/images" ) ) {}else
	{
		mkdir($localpath."/_assets/images");
	}

// Creating Images/Global Folder
	if( is_dir( $localpath."/_assets/images/global" ) ) {}else
	{
		mkdir($localpath."/_assets/images/global");
	}

// Creating Includes Folder
	if( is_dir( $localpath."/_assets/includes" ) ) {}else
	{
		mkdir($localpath."/_assets/includes");
	}

// Creating Includes/Resources Folder
	if( is_dir( $localpath."/_assets/includes/resources" ) ) {}else
	{
		mkdir($localpath."/_assets/includes/resources");
	}

// Creating Scripts Folder
	if( is_dir( $localpath."/_assets/scripts" ) ) {}else
	{
		mkdir($localpath."/_assets/scripts");
	}

// Creating Scripts/Javascript Folder
	if( is_dir( $localpath."/_assets/scripts/javascript" ) ) {}else
	{
		mkdir($localpath."/_assets/scripts/javascript");
	}

// Creating Scripts/Javascript/jQuery Folder
	if( is_dir( $localpath."/_assets/scripts/javascript/jquery" ) ) {}else
	{
		mkdir($localpath."/_assets/scripts/javascript/jquery");
	}

// Creating Scripts/Htc Folder
	if( is_dir( $localpath."/_assets/scripts/htc" ) ) {}else
	{
		mkdir($localpath."/_assets/scripts/htc");
	}

// Creating Swfs Folder
	if( is_dir( $localpath."/_assets/swfs" ) ) {}else
	{
		mkdir($localpath."/_assets/swfs");
	}

//Create the howto file
	if(is_file($localpath."/howto.txt")){
		//unlink($localpath."/index.html");
	}
	$file_txt = fopen($localpath."/README", "a+");
	$content_txt = '
//-----------------------------------------------------------\\
	Thank you for using my Site Structure Plugin for Coda
		
		If you have any suggestions for further development
		please contact me: 
			
			• Name: 		Start Projects Plugin
			• Version:      0.1.2
			• Author:       Christopher Hein
			• Author URL:   http://www.christopherhein.com
			• Author Email: me@christopherhein.com
			
		Thank you again,
			
		Christopher
			
//-----------------------------------------------------------\\';
	
	fwrite($file_txt, $content_txt);
	fclose($file_txt);


//Create the html file
	if(is_file($localpath."/index.html")){
		//unlink($localpath."/index.html");
	}
	
	$file_html = fopen($localpath."/index.html", "a+");
	$content_html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<!-- Meta Tags for SEO -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="language" content="en-us, english" /> 
	<meta name="classification" content="<!-- Classification -->" /> 
	<meta name="copyright" content="<!-- Copyright Nnformation -->" /> 
	<meta name="author" content="<!-- Authors Name -->" />
	<meta name="designer" content="<!-- Designers Name -->" />
	<meta name="developer" content="<!-- Developers Name -->" />
	<meta name="generator" content="Christopher Hein\'s Build Sites Coda Plugin" />
	<meta name="description" content="<!-- put your description here-->" />
	<meta name="keywords" content="<!-- put your keywords here -->" />
		<!-- Favicon Link -->
	<link type="image/x-icon" rel="icon" href="<!-- Path to favicon.ico -->"/>
		<!-- Title Tag -->
	<title>Enter a New Title</title>
	
		<!-- Style Sheet Links -->
	<link href="_assets/css/GlobalStyles.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="_assets/css/GlobalReset.css" media="screen" rel="stylesheet" type="text/css" />
	<!--[if IE 6]>
		<link href="_assets/css/ie6Styles.css" media="screen" rel="stylesheet" type="text/css" />
	<![endif]-->
	
		<!-- Javascript Links -->
	<script src="http://www.google.com/jsapi"></script> <!-- For Googles CDN -->
	<script src="_assets/scripts/javascript/GlobalScripts.js" type="text/javascript"></script>
	<script src="_assets/scripts/javascript/jquery/Blend-1.2.min.js" type="text/javascript"></script>
	<script src="_assets/scripts/javascript/jquery/Corners-2.02.min.js" type="text/javascript"></script>
	<script src="_assets/scripts/javascript/jquery/Cufon-1.09.min.js" type="text/javascript"></script>
	<script src="_assets/scripts/javascript/jquery/Cycle.all-2.73.min.js" type="text/javascript"></script>
	<script src="_assets/scripts/javascript/jquery/Corners-2.02.min.js" type="text/javascript"></script>
	<script src="_assets/scripts/javascript/jquery/Easing-1.3.min.js" type="text/javascript"></script>
	<script type="text-javascript">
		google.load("jquery", "1.4.1");
		google.load("swfobject", "2.2");
	</script>
</head>
	<body id="home">
	
	<div class="container">
		<!-- put your content here -->
	</div>
	
	</body>
</html>';

	fwrite($file_html, $content_html);
	fclose($file_html);

	
//Create the GlobalStyles.css file
	if(is_file($localpath."/_assets/css/GlobalStyles.css")) {}
	$file_gcss = fopen($localpath."/_assets/css/GlobalStyles.css", "a+");
	$content_gcss = '
/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	
	GlobalStyles.css
	
	• Generator: 	Build Projects Plugin
	• Version:      0.1
	• Author:       Christopher Hein
	• Author URL:   http://www.christopherhein.com
	• Author Email: me@christopherhein.com
	
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
@charset "UTF-8";
	
	/* Import The Global Reset */
@import url( GlobalReset.css );
	
.container
{
	position: relative;
	width: 960px;
	height: 100%;
	margin: 0px auto;
	text-align: center;
}
';
	
	fwrite($file_gcss, $content_gss);
	fclose($file_gcss);

	
//Create the GlobalStyles.css file
	if(is_file($localpath."/_assets/css/ie6Styles.css")) {}
	$file_icss = fopen($localpath."/_assets/css/ie6Styles.css", "a+");
	$content_icss = "
/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	
	ie6Styles.css
	
	• Generator: 	Build Projects Plugin
	• Version:      0.1
	• Author:       Christopher Hein
	• Author URL:   http://www.christopherhein.com
	• Author Email: me@christopherhein.com
	
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
@charset \"UTF-8\";

	/* PNG Fix */
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td, input, textarea
{
	behavior: url(_assets/includes/resources/IEPNGFix.php);
}";
	
	fwrite($file_icss, $content_iss);
	fclose($file_icss);
	
//Create the GlobalReset.css file
	if(is_file($localpath."/_assets/css/GlobalReset.css")) {}
	$file_rcss = fopen($localpath."/_assets/css/GlobalReset.css", "a+");
	$content_rcss = "
/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	
	GlobalReset.css
	
	• Generator: 	Build Projects Plugin
	• Version:      0.1
	• Author:       Christopher Hein
	• Author URL:   http://www.christopherhein.com
	• Author Email: me@christopherhein.com
	
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
@charset \"UTF-8\";
	
	/* Main Reset Document */
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td, input, textarea
{
	padding: 0;
	margin: 0;
	border: 0;
	outline: none;
	vertical-align: baseline;
	text-decoration: none;
	list-style: none;
	list-style-type: none;
}";
	
	fwrite($file_rcss, $content_rcss);
	fclose($file_rcss);
	
//Create the GlobalScripts.js file
	if(is_file($localpath."/_assets/scripts/javascript/GlobalScripts.js")) {}
	$file_js = fopen($localpath."/_assets/scripts/javascript/GlobalScripts.js", "a+");
	$content_js = "
/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	
	GlobalScripts.css
	
	• Generator: 	Build Projects Plugin
	• Version:      0.1
	• Author:       Christopher Hein
	• Author URL:   http://www.christopherhein.com
	• Author Email: me@christopherhein.com
	
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
		
	// Initializing with the page has loaded
$(document).ready(function()
{
		
	// Some javascript goes here.
		
});
	
	";
	
	fwrite($file_js, $content_js);
	fclose($file_js);


// Path Variables
	$endscripts = $localpath."/_assets/scripts/javascript/jquery/";
	$endhtc = $localpath."/_assets/scripts/htc/";
	$endimages = $localpath."/_assets/images/global/";
	$endresources = $localpath."/_assets/includes/resources/";
	
// Files Paths Variables
	$blend = $supportpath . "/Blend-1.2.min.js"; 
	$corners = $supportpath . "/Corners-2.02.min.js"; 
	$cufon = $supportpath . "/Cufon-1.09.min.js";
	$cycle = $supportpath . "/Cycle.all-2.73.min.js";
	$easing = $supportpath . "/Easing-1.3.min.js";
	$jquery = $supportpath . "/jQuery-1.4.1.min.js";
	$htc = $supportpath . "/IEPNGFix.htc";
	$iephp = $supportpath . "/IEPNGFix.php";
	$blank = $supportpath . "/blank.gif";
	
	
// Copy Javascript Files
	copy( $blend, $endscripts . "Blend-1.2.min.js" );
	copy( $corners, $endscripts . "Corners-2.02.min.js" );
	copy( $cufon, $endscripts . "Cufon-1.09.min.js" );
	copy( $cycle, $endscripts . "Cycle.all-2.73.min.js" );
	copy( $easing, $endscripts . "Easing-1.3.min.js" );
	copy( $jquery, $endscripts . "jQuery-1.4.1.min.js" );
	
// Copy HTC
	copy( $htc, $endhtc . "IEPNGFix.htc" );

// Copy IE PHP file	
	copy( $iephp, $endresources . "IEPNGFix.php" );

// Copy IE blank.gif file	
	copy( $blank, $endimages . "blank.gif" );





?>
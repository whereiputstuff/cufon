<?php if (!defined('CUFON_VALID')) exit(0) ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="imagetoolbar" content="no" />
	
		<title>cufón - fonts for the people</title>
		
		<meta name="description" content="Fast text replacement with canvas and VML - no Flash or images required." />
		
		<style type="text/css"> @import url(css/style.css); </style>
		
		<script src="../js/cufon.js" type="text/javascript"></script>
		<script src="../fonts/Frutiger_LT_Std.font.js" type="text/javascript"></script>
		
		<script type="text/javascript"> Cufon.replace([ 'h1', 'h3' ]); </script>
	
	</head>
	
	<body>
	
		<div id="doc">

			<div id="page">
			
				<div id="head">
				
					<h1><a href="/">cufón - fonts for the people</a></h1>
					
				</div>
				
				<div id="nav">
				
					<ul class="nav">
						<li><a href="http://cufon.shoqolate.com/js/cufon-yui.js">Download</a></li>
						<li class="current"><a href=".">Generator</a></li>
						<li><a href="http://github.com/sorccu/cufon/wikis" class="external">Documentation</a></li>
						<li><a href="http://groups.google.com/group/cufon" class="external">Community</a></li>
						<li><a href="http://github.com/sorccu/cufon/tree/master">Source</a></li>
					</ul>
					
				</div>
				
				<div id="content">
				
					<div class="section">
					
						<h3>Sorry!</h3>
						
						<p>The file you uploaded could not be converted. Currently only TrueType (TTF), OpenType (OTF) and Printer Font Binary (PFB) fonts are supported.</p>
						
						<p class="info"><strong>Tip:</strong> did you upload an AFM or a PFM file? They only contain font metrics information which is not quite
						what we need. There should be a PFA or a PFB file with the same name in the same folder, which contains the actual glyph data. If there isn't, your font manager
						probably stashed it away somewhere, in which case you're going to have to hunt it down yourself. Once you've found the correct file you should be able to convert it with no trouble at all.</p>
						
					</div>
										
					<div class="actions">
					
						<a href="./">Back to the generator</a>
						
					</div>
					
				</div>
				
				<div id="foot">
					
					<p>Idea and implementation by Simo Kinnunen, 2008-. Bugs by nature.</p>
					
				</div>
				
			</div>
				
		</div>
	
	</body>
	
</html>
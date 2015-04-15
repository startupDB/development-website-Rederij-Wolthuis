<body style="font-family: monospace;">
<?php
	include_once("minifier.php");
	
	/* FILES ARRAYs
	 * Keys as input, Values as output */ 
	
	$js = array(
		"js/webflow.js" 	=> "js/webflow.min.js",
		"js/rederij-extra.js" 			=> "js/rederij-extra.min.js",
        "js/modernizr.js"   => "js/modernizr.min.js"
	);
	
	$css = array(
		"css/rederij-wolthuis.webflow.css"	=> "css/rederij-wolthuis.webflow.min.css",
		"css/flex_style_alt.css"			=> "css/flex_style_alt.min.css",
        "css/normalize.css"  =>  "css/normalize.min.css",
        "css/webflow.css"  => "css/webflow.min.css"
	);
	
	minifyJS($js);
	minifyCSS($css);
?>
</body>

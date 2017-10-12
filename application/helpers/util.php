<?php 
function importJS($path, $extra = '')
{
	if(!empty($extra)){
		$extra = " ".$extra;
	}
	echo '<script type="text/javascript" charset="utf-8" src="'.$path.'"></script>' ;
	echo "\r\n";
}
function importJSX($path, $extra = '')
{
	if(!empty($extra)){
		$extra = " ".$extra;
	}
	echo '<script type="text/jsx" charset="utf-8" src="'.$path.'"></script>' ;
	echo "\r\n";
}
function importBABEL($path, $extra = ''){
	if(!empty($extra)){
		$extra = " ".$extra;
	}
	echo '<script type="text/babel" charset="utf-8" src="'.$path.'"></script>' ;
	echo "\r\n";
}
function importCSS($path, $extra = '')
{
	echo '<link rel="stylesheet" href="'.$path.'" type="text/css" />' ;
	echo "\r\n";
}
?>
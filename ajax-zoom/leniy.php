<?php
/*
	Plugin Name: 自动调用ajax-zoom
	Plugin URI: http://blog.leniy.org/
	Description: 短代码形式
	Version: 0.0.1
	Author: leniy
	Author URI: http://blog.leniy.org/
*/




if (!function_exists('leniy_az')) {
	function leniy_az($atts,$content=null){
		extract(shortcode_atts(array("dir" => 'trasportation'),$atts));

		//这儿请填写你的ajax-zoom的安装域名。例如，如果
		$maindir = "http://huanli.leniy.org/az";

		$massage = "
<link rel=\"stylesheet\" href=\"" . $maindir . "/axZm/plugins/demo/jquery.fancybox/jquery.fancybox-1.2.6.css\" media=\"screen\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"" . $maindir . "/axZm/plugins/demo/colorbox/example4/colorbox.css\" media=\"screen\" type=\"text/css\">

<script type=\"text/javascript\" src=\"" . $maindir . "/axZm/plugins/jquery-1.8.3.min.js\"></script>

<script type=\"text/javascript\" src=\"" . $maindir . "/axZm/plugins/demo/jquery.fancybox/jquery.easing.1.3.js\"></script>
<script type=\"text/javascript\" src=\"" . $maindir . "/axZm/plugins/demo/jquery.fancybox/jquery.fancybox-1.2.6.js\"></script>
<script type=\"text/javascript\" src=\"" . $maindir . "/axZm/plugins/demo/colorbox/jquery.colorbox.js\"></script>

<link href=\"" . $maindir . "/axZm/plugins/demo/syntaxhighlighter/styles/shCore.css\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"" . $maindir . "/axZm/plugins/demo/syntaxhighlighter/styles/shThemeCustom.css\" type=\"text/css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"" . $maindir . "/axZm/plugins/demo/syntaxhighlighter/src/shCore.js\"></script>
<script type=\"text/javascript\" src=\"" . $maindir . "/axZm/plugins/demo/syntaxhighlighter/scripts/shBrushJScript.js\"></script>
<script type=\"text/javascript\" src=\"" . $maindir . "/axZm/plugins/demo/syntaxhighlighter/scripts/shBrushPhp.js\"></script>
<script type=\"text/javascript\" src=\"" . $maindir . "/axZm/plugins/demo/syntaxhighlighter/scripts/shBrushCss.js\"></script>
<script type=\"text/javascript\" src=\"" . $maindir . "/axZm/plugins/demo/syntaxhighlighter/scripts/shBrushXml.js\"></script>
";
		$massageold = '
<link type="text/css" rel="stylesheet" href="' . plugins_url('az/leniy.css') . '" />
<script type="text/javascript" src="' . plugins_url('az/leniy.js') . '"></script>
';
		$massage .= '
<script type="text/javascript">
jQuery(document).ready(function() {
	SyntaxHighlighter.all();
	jQuery("#leniytest").colorbox({
		width: 992, 
		height: 528, 
		iframe: true,
		scrolling: false
	});
});
</script>
<a class="cboxElement" id="leniytest" href="' . $maindir . '/examples/example1.php?zoomDir=' . $dir . '&example=3&iframe=1">
<img src="' . plugins_url('ajax-zoom/leniy.png') . '" />
</a>';
		return $massage;
	}
}
add_shortcode('az', 'leniy_az');

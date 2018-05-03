<?php

namespace Zotlabs\Widget;

class Iframe {

	function widget($arr) {
		if(intval($arr['height']))
			$height = ' height="' . intval($arr['height']) . 'px" ';
		$o = '<div class="widget">';
		$o .= "<iframe width=\"100%\" $height src=\"" . $arr['url'] . '"></iframe>';
		$o .= '</div>';

		return $o;
	}

}


<?php

/**
 * Author: Mike Macgirvin
 * args:
 * url (required if you want it to work at all)
 * height (integer - hardwired to 'px' and optional ) *
 * The width is automatically set to 100% so it will work in sidebars or in the main content area 
 */

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


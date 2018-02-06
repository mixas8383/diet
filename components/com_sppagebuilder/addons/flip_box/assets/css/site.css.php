<?php

/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined('_JEXEC') or die('restricted aceess');

$addon_id = '#sppb-addon-' . $id;

//flip style
$flip_syles = '';
//$flip_syles .= (isset($settings->text_align) && $settings->text_align) ? "text-align: " . $settings->text_align  . ";" : "text-align: center";
$flip_syles .= (isset($settings->height) && $settings->height) ? "height: " . $settings->height  . "px;" : "";

$border_styles = (isset($settings->border_styles) && $settings->border_styles) ? $settings->border_styles : "";
if(is_array($border_styles) && count($border_styles)) {
	if(in_array('border_radius', $border_styles)) {
		$flip_syles .= 'border-radius: 8px;';
	}
	if(in_array('dashed', $border_styles)) {
		$flip_syles .= 'border-style: dashed;';
	} else if(in_array('solid', $border_styles)) {
		$flip_syles .= 'border-style: solid;';
	} else if(in_array('dotted', $border_styles)) {
		$flip_syles .= 'border-style: dotted;';
	}

	if( in_array('dashed', $border_styles) || in_array('solid', $border_styles) || in_array('dotted', $border_styles) ) {
		$flip_syles .= 'border-width: 2px;';
		$flip_syles .= 'border-color:'. $settings->border_color .';';
	}

}

//front style
$front_style  = '';
$front_style .= (isset($settings->front_bgcolor) && $settings->front_bgcolor) ? "background-color: " . $settings->front_bgcolor  . ";" : "";
$front_style .= (isset($settings->front_bgimg) && $settings->front_bgimg) ? "background: url(" . $settings->front_bgimg  . ") 0% 0% / cover no-repeat;" : "";
$front_style .= (isset($settings->front_textcolor) && $settings->front_textcolor) ? "color: " . $settings->front_textcolor  . ";" : "";

//back style
$back_style  = '';
$back_style .= (isset($settings->back_bgcolor) && $settings->back_bgcolor) ? "background-color: " . $settings->back_bgcolor  . ";" : "";
$back_style .= (isset($settings->back_bgimg) && $settings->back_bgimg) ? "background: url(" . $settings->back_bgimg  . ") 0% 0% / cover no-repeat;" : "";
$back_style .= (isset($settings->back_textcolor) && $settings->back_textcolor) ? "color: " . $settings->back_textcolor  . ";" : "";

$css = '';

if($flip_syles) {
	$css .= $addon_id . ' .flip-box {';
	$css .= $flip_syles;
	$css .= '}';
}

if($front_style) {
	$css .= $addon_id . ' .sppb-flipbox-front {';
	$css .= $front_style;
	$css .= '}';
}

if($back_style) {
	$css .= $addon_id . ' .sppb-flipbox-back {';
	$css .= $back_style;
	$css .= '}';
}

echo $css;

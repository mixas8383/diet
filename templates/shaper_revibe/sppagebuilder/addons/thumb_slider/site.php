<?php

/**
 * @package Onepage
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2015 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined('_JEXEC') or die('resticted aceess');

class SppagebuilderAddonThumb_slider extends SppagebuilderAddons {

    public function render() {
        $class = (isset($this->addon->settings->class) && $this->addon->settings->class) ? $this->addon->settings->class : '';
        $title = (isset($this->addon->settings->title) && $this->addon->settings->title) ? $this->addon->settings->title : '';
        $heading_selector = (isset($this->addon->settings->heading_selector) && $this->addon->settings->heading_selector) ? $this->addon->settings->heading_selector : 'h3';

        $slide_height = (isset($this->addon->settings->slide_height) && $this->addon->settings->slide_height) ? $this->addon->settings->slide_height : '';
        $autoplay = (isset($this->addon->settings->autoplay) && $this->addon->settings->autoplay) ? $this->addon->settings->autoplay : '';
        $arrows = (isset($this->addon->settings->arrows) && $this->addon->settings->arrows) ? $this->addon->settings->arrows : 'true';

        //output start
        //autoplay, controllers & arrow
        $slide_autoplay = ($autoplay) ? 'data-sppb-tg-autoplay="true"' : 'data-sppb-tg-autoplay="false"';
        $slide_arrows = ($arrows) ? 'data-sppb-tg-arrows="true"' : 'data-sppb-tg-arrows="false"';

        //slide height
        $doc = JFactory::getDocument();
        $slide_height_style = '.sppb-addon-thumb-gallery #slider .slides > li .thumb-slider-bg{ height: ' . $slide_height . 'px; }';
        $doc->addStyleDeclaration($slide_height_style);


        $output = '<div class="sppb-addon sppb-thumb-gallery-wrapper sppb-addon-thumb-gallery ' . $class . '">';

        if ($title) {
            $output .= '<' . $heading_selector . ' class="sppb-addon-title">' . $title . '</' . $heading_selector . '>';
        }
        $output .= '<div id="slider" class="flexslider sppb-tg-slider" ' . $slide_autoplay . ' ' . $slide_arrows . '>';
        $output .= '<ul class="slides">';

        foreach ($this->addon->settings->sp_thumb_slider_item as $slideItem) {

            // slide image
            $bg_image = ($slideItem->image) ? 'style="background-image: url(' . JURI::base() . $slideItem->image . ');"' : '';

            // *** animation *** //
            // Title animation
            $title_animation = '';
            if (isset($slideItem->title_animation) && $slideItem->title_animation) {
                $title_animation = ' sppb-wow ' . $slideItem->title_animation;
            }
            // title attr
            $title_data_attr = '';
            if (isset($slideItem->title_animationduration) && $slideItem->title_animationduration)
                $title_data_attr .= ' data-sppb-wow-duration="' . $slideItem->title_animationduration . 'ms"';
            if (isset($slideItem->title_animationdelay) && $slideItem->title_animationdelay)
                $title_data_attr .= ' data-sppb-wow-delay="' . $slideItem->title_animationdelay . 'ms"';

            // sub title animation
            $subtitle_animation = '';
            if (isset($slideItem->subtitle_animation) && $slideItem->subtitle_animation) {
                $subtitle_animation = ' sppb-wow ' . $slideItem->subtitle_animation;
            }
            // subtitle attr
            $subtitle_data_attr = '';
            if (isset($slideItem->subtitle_animationduration) && $slideItem->subtitle_animationduration)
                $subtitle_data_attr .= ' data-sppb-wow-duration="' . $slideItem->subtitle_animationduration . 'ms"';
            if (isset($slideItem->subtitle_animationdelay) && $slideItem->subtitle_animationdelay)
                $subtitle_data_attr .= ' data-sppb-wow-delay="' . $slideItem->subtitle_animationdelay . 'ms"';

            // button animation
            $button_animation = '';
            if (isset($slideItem->button_animation) && $slideItem->button_animation) {
                $button_animation = ' sppb-wow ' . $slideItem->button_animation;
            }

            // button attr
            $button_data_attr = '';
            if (isset($slideItem->subtitle_animationduration) && $slideItem->subtitle_animationduration)
                $button_data_attr .= ' data-sppb-wow-duration="' . $slideItem->subtitle_animationduration . 'ms"';
            if (isset($slideItem->subtitle_animationdelay) && $slideItem->subtitle_animationdelay)
                $button_data_attr .= ' data-sppb-wow-delay="' . $slideItem->subtitle_animationdelay . 'ms"';

            $output .= '<li>';
            $output .= '<div class="thumb-slider-bg" ' . $bg_image . '>';
            //$output .= '<img src="' . $slideItem->image . '" alt="' . $slideItem->title . '"/>';
            $output .= '<div class="slider-title-wrap">';
            
            if($slideItem->button_url)
            {
                $output .= '<a class="' . $title_animation . '"  href="' . $slideItem->button_url . '"><h1 class="slider-title " ' . $title_data_attr . '>' . $slideItem->title . '</h1></a>';
            }else{
                $output .= '<h1 class="slider-title ' . $title_animation . '" ' . $title_data_attr . '>' . $slideItem->title . '</h1>';
            }
            
            
            
            
            $output .= '<p class="slider-sub-title ' . $subtitle_animation . '" ' . $subtitle_data_attr . '>' . $slideItem->sub_title . '</p>';
//            if ($slideItem->button_url) {
//                $output .= '<a class="btn btn-primary btn-sm ' . $button_animation . '" href="' . $slideItem->button_url . '" ' . $button_data_attr . '>' . $slideItem->button_text . '</a>';
//            }
            $output .= '</div>'; //.slider-title-wrap
            $output .= '</div>'; //.thumb-slider-bg
            $output .= '</li>';
//            echo '<pre>';
//            print_r($slideItem);
//            echo '</pre>';
        }

        $output .= '</ul>'; //ul.slides
        $output .= '</div>'; // END /#slider

        $output .= '<div class="container">';
        $output .= '<div class="slide_thumb_wrap">';
        $output .= '<div id="carousel" class="flexslider">';
        $output .= '<ul class="slides">'; // END /#slider
        foreach ($this->addon->settings->sp_thumb_slider_item as $slideItem) {
            $output .= '<li>';
//            $output .= '<div class="thumb-wrap">';
//            $output .= '<div class="thumb-text">';
//            $output .= '<h4 class="slider-title" ' . $title_data_attr . '>' . $slideItem->title . '</h4>';
//            $output .= '</div>';
            $output .= '<img src="' . JUri::root() . $slideItem->image . '"  alt="' . $slideItem->title . '"/>';
//            $output .= '</div>';
            $output .= '</li>';
        }
        $output .= '</ul>'; // END /.slides
        $output .= '</div>'; // END /#carousel
        $output .= '</div>'; // END /.slide_thumb_wrap
        $output .= '</div>'; // END /.container

        $output .= '</div>'; // END /.flexslider

        return $output;
    }

    public function scripts() {
        $app = JFactory::getApplication();
        return array(JURI::base() . '/templates/' . $app->getTemplate() . '/js/jquery.flexslider-min.js');
    }

    public function stylesheets() {
        $app = JFactory::getApplication();
        return array(JURI::base() . '/templates/' . $app->getTemplate() . '/css/flexslider.css');
    }

}

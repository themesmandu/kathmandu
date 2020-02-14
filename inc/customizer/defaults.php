<?php
/**
 * Customizer default options
 *
 * @package Kathmandu
 * @return array An array of default values
 */

if ( ! function_exists( 'kathmandu_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function kathmandu_get_default_theme_options() {

		$defaults = array();

		$defaults['menu_bar_bgcolor']                = 'rgba(255,255,255,.07)';        //Main Menu Bar Background.
		$defaults['menu_bar_scroll_bgcolor']         = 'rgba(0,0,0,1)';        //Main Menu Bar Fixed Scroll Background.
		$defaults['menu_color']                      = 'rgba(255,255,255,1)';        //Main Menu Color.
		$defaults['menu_hover_color']                = 'rgba(243,202,122,1)';      //Main Menu Hover Color.
		$defaults['site_title_color']                = 'rgba(255,255,255,1)';      //Site Title Color.
		$defaults['title_color']                     = '#31396b';       //Entry/Post/Page Title Color
		$defaults['content_color']                   = '#3f3f45';       //Entry/Post/Page content Color
		$defaults['entry_bgcolor']                   = 'rgba(255,255,255,1)';     //Entry Card Background.
		$defaults['entry_footer_bgcolor']            = '#ffffff';      //Entry Card: Footer Background.
		$defaults['wgt_title_color']                 = '#020407';       //Widget Title Color.
		$defaults['link_color']                      = 'rgba(247,99,27,0.7)';        //Text Link Color.
		$defaults['link_hover_color']                = '#0056b3';      //Text Link Hover Color.
		$defaults['meta_color']                      = '#777777';        //Meta Text Color.
		$defaults['kathmandu_btn_color']             = '#cb0000';     //kathmandu Button Background Color.
		$defaults['kathmandu_btn_hover_color']       = 'rgba(251,58,102,0.7)';      //kathmandu Button Background: Hover Color.
		$defaults['kathmandu_btn_text_color']        = 'rgba(255, 255, 255, 1)';       //kathmandu Button Text Color.
		$defaults['kathmandu_player_now_playing_bg'] = '#cb0000';       //kathmandu Highlight Color
		$defaults['kathmandu_btn_text_hover_color']  = 'rgba(255, 255, 255, 1)';     //kathmandu Button Text: Hover Color.
		$defaults['footer_overlay']                  = 'rgba(0, 0, 0, 1)';      //Footer Background.
		$defaults['footer_color']                    = 'rgba(255, 255, 255, 1)';       //Footer Text Color.

		//blog defaults

		$defaults['blog_sortable_content_sandard'] = array( 'title', 'thumbnail', 'meta', 'content' );   //blod content sortable defaults standard
		$defaults['blog_sortable_content_list']    = array( 'image', 'content-all' );   //blod content sortable defaults list
		$defaults['blog_sortable_content_list2']   = array( 'title', 'meta', 'content' );   //blod content sortable defaults list secontd

		//slider defaults

		$defaults['slider_animations'] = array( 'linear' );   //blod content sortable defaults list secontd
		$defaults['slide_duration']    = 2;   //slide duration.
		$defaults['slide_delay']       = 5;   //slide delay.
		$defaults['slide_autoplay']    = true;   //slide autoplay.
		$defaults['slide_pauseplay']   = true;   //slide playpause.
		$defaults['slide_hover']       = false;   //slide hover.
		$defaults['slide_loop']        = true;   //slide repeat.
		$defaults['slide_caption']     = true;   //slide caption.
		$defaults['slide_control']     = true;   //slide caption.
		$defaults['slide_bullet']      = true;   //slide caption.
		$defaults['slide_gesture']     = false;   //slide caption.

		// Pass through filter.
		$defaults = apply_filters( 'kathmandu_get_default_theme_options', $defaults );
		return $defaults;
	}

endif;

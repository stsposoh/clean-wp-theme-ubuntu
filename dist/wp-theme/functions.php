<?php
/**
 * Functions (function.php)
 * @package WordPress
 * @subpackage WP_Theme
 * @since 1.0.0
 */

register_nav_menus(array(
	'top' => 'Top',
	'bottom' => 'Bottom'
));

add_theme_support('title-tag');

//function testate(){
//	global $wp_themes;
//	$tema = wp_get_theme();
//	echo '<pre>';
//	print_r($tema);
//	die;
//}
//
//add_action('init', 'testate' );

add_theme_support('post-thumbnails');
////set_post_thumbnail_size(250, 150);
////add_image_size('big-thumb', 400, 400, true);

add_filter('excerpt_more', function($more) {
	return '...';
});


//function my_class_names( $classes ) {
//	$classes[] = 'js-show-page';
//	return $classes;
//}
//add_filter('body_class','my_class_names');

if (!class_exists('clean_comments_constructor')) {
	class clean_comments_constructor extends Walker_Comment {
		public function start_lvl( &$output, $depth = 0, $args = array()) {
			$output .= '<ul class="children">' . "\n";
		}
		public function end_lvl( &$output, $depth = 0, $args = array()) {
			$output .= "</ul><!-- .children -->\n";
		}
		protected function comment( $comment, $depth, $args ) {
			$classes = implode(' ', get_comment_class()).($comment->comment_author_email == get_the_author_meta('email') ? ' author-comment' : '');
			echo '<li id="comment-'.get_comment_ID().'" class="'.$classes.' media">'."\n";
			echo '<div class="media-left">'.get_avatar($comment, 64, '', get_comment_author(), array('class' => 'media-object'))."</div>\n";
			echo '<div class="media-body">';
			echo '<span class="meta media-heading">Автор: '.get_comment_author()."\n";
			echo ' '.get_comment_author_email();
			echo ' '.get_comment_author_url();
			echo ' Добавлено '.get_comment_date('F j, Y в H:i')."\n";
			if ( '0' == $comment->comment_approved ) echo '<br><em class="comment-awaiting-moderation">Ваш комментарий будет опубликован после проверки модератором.</em>'."\n";
			echo "</span>";
			comment_text()."\n";
			$reply_link_args = array(
				'depth' => $depth,
				'reply_text' => 'Ответить',
				'login_text' => 'Вы должны быть залогинены'
			);
			echo get_comment_reply_link(array_merge($args, $reply_link_args));
			echo '</div>'."\n";
		}
		public function end_el( &$output, $comment, $depth = 0, $args = array() ) {
		$output .= "</li><!-- #comment-## -->\n";
		}
	}
}

if (!function_exists('pagination')) {
	function pagination() {
		global $wp_query;
		$big = 999999999;
		$links = paginate_links(array(
			'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))),
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var('paged')),
			'type' => 'array',
			'prev_text'    => 'Назад',
			'next_text'    => 'Вперед',
			'total' => $wp_query->max_num_pages,
			'show_all'     => false,
			'end_size'     => 15,
			'mid_size'     => 15,
			'add_args'     => false,
			'add_fragment' => '',
			'before_page_number' => '',
			'after_page_number' => ''
		));
	 	if( is_array( $links ) ) {
			echo '<ul class="pagination">';
			foreach ( $links as $link ) {
				if ( strpos( $link, 'current' ) !== false ) echo "<li class='active'>$link</li>";
				else echo "<li>$link</li>";
			}
			echo '</ul>';
		}
	}
}

add_action('wp_footer', 'add_scripts');
if (!function_exists('add_scripts')) {
	function add_scripts() {
		if(is_admin()) return false;
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js','','',true);
		wp_enqueue_script('custom-libs', get_template_directory_uri().'/js/libs.min.js','','',true);
		wp_enqueue_script('main', get_template_directory_uri().'/js/bundle.js','','',true);
	}
}

add_action('wp_print_styles', 'add_styles');
if (!function_exists('add_styles')) {
	function add_styles() {
		if(is_admin()) return false;
		wp_enqueue_style( 'custom-libs', get_template_directory_uri().'/css/libs.css' );
		wp_enqueue_style( 'base', get_template_directory_uri().'/css/base.css' );
		wp_enqueue_style( 'core', get_template_directory_uri().'/css/the-core-style.css' );
		wp_enqueue_style( 'main', get_template_directory_uri().'/css/main.css' );
		wp_enqueue_style( 'style', get_template_directory_uri().'/style.css' );
	}
}

/* функция необходима для кастомизации колонок unyson  */
if (!function_exists( 'the_core_translate' )) :
	/**
	 * Return the content for translations plugins
	 *
	 * @param string $content
	 */
	function the_core_translate( $content ) {
		$content = html_entity_decode( $content, ENT_QUOTES, 'UTF-8' );

		if ( function_exists( 'icl_object_id' ) && strpos( $content, 'wpml_translate' ) == true ) {
			$content = do_shortcode( $content );
		} elseif ( function_exists( 'qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage' ) ) {
			$content = qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage( $content );
		} elseif ( function_exists('ppqtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage' ) ) {
			$content = ppqtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage($content);
		}
		return $content;
	}
endif;

//функция удаляет версии файлов стилей и скриптов после ?
function _remove_script_version( $src ){
	$parts = explode( '?', $src );
	return $parts[0];
}

//function _action_theme_wp_print_styles() {
//	if (!defined('FW')) return; // prevent fatal error when the framework is not active
//
//	$option_value = fw_get_db_settings_option('body-color');
//
//	echo '<style type="text/css">'
//			 . 'body { '
//			 . 'background-color:'. esc_html($option_value) .'; '
//			 . '}'
//			 . '</style>';
//}
//add_action('wp_print_styles', '_action_theme_wp_print_styles');





function moi_novii_style() {
	print '<style>
		/*Стили в админку*/
		.img-prev-unyson {display: inline-block; font-size: 0; line-height: 0; width: 40px;}
	</style>';
}
add_action('admin_head', 'moi_novii_style');




//Убирает версию файла для js
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
//Убирает версию файла для css
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
show_admin_bar(false);
?>

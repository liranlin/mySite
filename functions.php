<?php


/*----------------------adding jquary---------------------*/
?>
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>

<script type="text/javascript"
   src="<?php bloginfo("template_url"); ?>/js/yourScript.js"></script>

<?php




//
//  Custom Child Theme Functions
//

// I've included a "commented out" sample function below that'll add a home link to your menu
// More ideas can be found on "A Guide To Customizing The Thematic Theme Framework"
// http://themeshaper.com/thematic-for-wordpress/guide-customizing-thematic-theme-framework/

// Adds a home link to your menu
// http://codex.wordpress.org/Template_Tags/wp_page_menu
//function childtheme_menu_args($args) {
//    $args = array(
//        'show_home' => 'Home',
//        'sort_column' => 'menu_order',
//        'menu_class' => 'menu',
//        'echo' => true
//    );
//	return $args;
//}
//add_filter('wp_page_menu_args','childtheme_menu_args');

// Unleash the power of Thematic's dynamic classes
//
// define('THEMATIC_COMPATIBLE_BODY_CLASS', true);
// define('THEMATIC_COMPATIBLE_POST_CLASS', true);

// Unleash the power of Thematic's comment form
//
// define('THEMATIC_COMPATIBLE_COMMENT_FORM', true);

// Unleash the power of Thematic's feed link functions
//
// define('THEMATIC_COMPATIBLE_FEEDLINKS', true);

// Output the new 3.0 menu to the thematic header

/*-------------------------------creating a div for the main wrap----------------------*/
/*
function open_wrap(){
	?>
<div id="main_wrap" class="span-21">
<?php
}
add_action('thematic_belowheader', 'open_wrap' ) ;

function close_wrap(){
	?>
<div/><!--#main_warp-->
<?php
}
add_action('thematic_belowfooter', 'close_wrap') ;
*/


/*-------------------------------creating a div for the content wrap----------------------*/
/*
function open_content(){
	?>
<div id="main_content" class="span-21">
<?php
}
add_action('thematic_belowheader', 'open_content' ) ;

function close_content(){
	?>
<div/><!--#main_content-->
<?php
}
add_action('thematic_abovefooter', 'close_content') ;

*/

/*---------------------------- Remove default Thematic actions-----------------------------*/
/*
function remove_postheader() {
remove_action('thematic_postheader','remove_postheader()');
}
add_filter('thematic_postheader','remove_postheader');

function remove_postfooter() {
remove_action('thematic_postfooter','remove_postfooter()');
}
add_filter('thematic_postfooter','remove_postfooter');

function remove_sidebar() {
remove_action('thematic_sidebar','remove_sidebar()');
}
add_filter('thematic_sidebar','remove_sidebar');
*/
/*
// Add a custom post footer
function childtheme_postfooter() {
    global $post;
 
    if (is_single()) { ?>
        <div class="entry-utility">
            <?php printf(__('Bookmark the <a href="%1$s" title="Permalink to %2$s" rel="bookmark">permalink</a>.', 'thematic'),
                get_permalink(),
                wp_specialchars(get_the_title(), 'double') ) ?>
 
    <?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) : // Comments and trackbacks open ?>
            <?php printf(__('<a class="comment-link" href="#respond" title="Post a comment">Post a comment</a> or leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'thematic'), get_trackback_url()) ?>
    <?php elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) : // Only trackbacks open ?>
            <?php printf(__('Comments are closed, but you can leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'thematic'), get_trackback_url()) ?>
    <?php elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) : // Only comments open ?>
            <?php printf(__('Trackbacks are closed, but you can <a class="comment-link" href="#respond" title="Post a comment">post a comment</a>.', 'thematic')) ?>
    <?php elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) : // Comments and trackbacks closed ?>
            <?php _e('Both comments and trackbacks are currently closed.') ?>
    <?php endif; ?>
    <?php edit_post_link(__('Edit', 'thematic'), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>"); ?>
 
        </div><!-- .entry-utility -->
    <?php } else { ?>
        <?php if ( $post->post_type == 'post' ) { // Hide entry utility on searches ?>
            <div class="entry-utility">
                <span class="comments-link"><?php comments_popup_link(__('Leave a comment', 'thematic'), __('1 Comment', 'thematic'), __('% Comments', 'thematic')) ?></span>
                <?php edit_post_link(__('Edit', 'thematic'), "\t\t\t\t\t<span class=\"meta-sep\">|</span>\n<span class=\"edit-link\">", "</span>\t\t\t\t\t"); ?>
            </div><!-- .entry-utility -->
        <?php } ?>
    <?php }
}
add_filter ('thematic_postfooter', 'childtheme_postfooter');
*/


/*----------------------------------Supporting thumbnails in WP:------------------------------*/
/*
if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}
function childtheme_content($unfiltered) { //pass the original unfiltered content
  if (is_home()){ // if this is the home page
    ?>
    <a href="<?php the_permalink(); ?>"><?php //call the link to the post
      if ( has_post_thumbnail() ) { // if the post has a Post Thumbnail
        the_post_thumbnail(array(100,100)); //use it in 100px maximum
      } else { 
        the_title(); //use the title of the post
      }
    ?></a><?php //close the link
  } else { //if it's not the homepage
    echo $unfiltered; //forget about it, use the original content
  }
}
add_filter('the_content','childtheme_content'); //filter the_content with our function
*/
?>

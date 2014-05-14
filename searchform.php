<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * The template for displaying search forms
 *
 * @package Sampression-Lite
 * @since Sampression Lite 1.0
 */
?>
<form method="get" class="search-form clearfix" id="searchform" class="clearfix" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label class="hidden" for="s"><?php _e( 'Busca para:', 'sampression' ); ?></label>
    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="search-field text-field" placeholder="<?php _e( 'digite sua busca aqui...', 'sampression' ); ?>" />
    <input type="submit" id="searchsubmit" class="search-submit" value="<?php _e( 'Search', 'sampression' ); ?>" />
</form>

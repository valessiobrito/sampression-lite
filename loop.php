<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * The loop that displays posts.
 *
 * @package Sampression-Lite
 * @since Sampression Lite 1.0
 */
?>
<style>
.post-ratings {
position: absolute;
right: -5px;
top: 5px;
width: 25px;
}
.post-ratings-text {
position: absolute;
left: -80px;
width: 60px;
border: 1px solid #dfdfdf;
text-align: center;
background-color: white;
border-radius: 5px;
margin-top: -25px;
}
</style>
<article id="post-<?php the_ID(); ?>" class="post columns four <?php echo sampression_cat_slug(); ?> <?php if ( is_sticky() && is_home() ) { echo 'corner-stamp'; } else { echo 'item'; } ?> ">
      <?php if(function_exists('the_ratings')) { the_ratings(); } ?><h3 class="post-title"><a href="<?php the_permalink() ?>" title="<?php echo esc_attr( get_the_title() ); ?>" rel="bookmark" ><?php the_title(); ?></a></h3>
      
      <?php if ( comments_open() ) : ?>
            <span class="col count-comment">
            <span class="pointer"></span>
            <?php comments_popup_link(__('0', 'sampression'), __('1', 'sampression'), __('%', 'sampression')); ?>
            </span>
     <?php endif; ?>
      
      <?php if ( has_post_thumbnail() ) { ?>
        <div class="featured-img">
        <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" ><?php the_post_thumbnail( 'large' ); ?></a>
        </div>
		<!-- .featured-img -->
      <?php } ?>
      
      <div class="entry clearfix">
	<?php limitaContent(60); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Páginas:', 'sampression' ) . '</span>', 'after' => '</div>' ) ); ?>
      </div>
      <!-- .entry -->

      <div class="meta clearfix">
			<?php 
                printf( __( '%3$s <time class="col" datetime="2011-09-28"><span class="ico">Publicado em</span>%2$s</time> ', 'sampression' ),'meta-prep meta-prep-author',
					sprintf( '<a href="%1$s" title="%2$s" rel="bookmark">%3$s</a>',
						get_permalink(),
						esc_attr( get_the_time() ),
						get_the_date('d M Y')
					),
					sprintf( '<div class="post-author col"><span class="ico hello">Autor</span><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></div>',
						get_author_posts_url( get_the_author_meta( 'ID' ) ),
					sprintf( esc_attr__( 'Ver todos posts por %s', 'sampression' ), get_the_author() ),
						get_the_author()
						)
                );
            ?>
      </div>
      <div class="meta">
        <div class="cats"><?php printf(__('<span class="ico">Categorias</span><div class="overflow-hidden cat-listing">%s</div>', 'sampression'), get_the_category_list(', ')); ?></div>
      </div>
      <?php if(has_tag()) {?>
      <div class="meta">
        <div class="tags"><span class="ico">Tags</span><div class="overflow-hidden tag-listing"><?php the_tags(' ', ', ', '<br />'); ?></div> </div>
      </div>
      <?php } ?>
      
      <?php if(is_user_logged_in()){ ?>
      <div class="meta">
      	<div class="edit"><span class="ico">Editar</span> <?php edit_post_link( __( 'Editar este post', 'sampression' ) ); ?> </div>
      </div>
	  <?php } ?>
         
    </article>
<?php
/**
 * @package WordPress
 * Template Name: About
 */
?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

  <?php if($post->post_content=="") : ?>

<?php else : ?>

  <!-- +++++ Welcome Section +++++ -->
  <div id="ww">
      <div class="container pt">
      <div class="row">
        <div class="col-lg-12">
        <?php if ( has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                  <?php endif; ?>
 <!--          <?php if( rwmb_meta( 'wtf_about_title' ) !== '' ) { ?>
          <?php echo rwmb_meta( 'wtf_about_title' ); ?> -->
          <?php } ?>  
           <?php the_content(); ?>
        
        </div><!-- /col-lg-8 -->
      </div><!-- /row -->
      </div> <!-- /container -->
  </div><!-- /ww -->

<?php endif; ?>

<?php wp_reset_postdata(); ?>

<?php endwhile; ?>	








<?php get_footer(); ?>
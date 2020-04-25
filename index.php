

  



<?php get_header(); ?>


<div class="container content-area">
<?php while ( have_posts() ) : the_post(); ?>

  <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">

    <h2 class="entry-title"><?php the_title(); ?></h2>

    <?php if ( !is_page() ):?>

      <section class="entry-meta">

        <p>Posted on <?php the_date();?> by <?php the_author();?></p>

      </section>

    <?php endif; ?>

    <section class="entry-content">

      <?php the_content(); ?>

    </section>

    <section class="entry-meta"><?php if ( count( get_the_category() ) ) : ?>

      <span class="category-links">

        Posted under: <?php echo get_the_category_list( ', ' ); ?>

      </span>

        <?php endif; ?>
      
        <?php comment_form(); ?>
        <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
        <?php wp_list_comments( $args ); ?>
        <?php wp_link_pages( $args ); ?>
        <?php comments_template( $file, $separate_comments ); ?>
        <?php add_theme_support( $feature ); ?>
	  </section>

  </article>
 
<?php endwhile; ?>
</div>


<?php get_sidebar(); ?>



<?php get_footer(); ?>
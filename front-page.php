<?php get_header(); ?>



<div class="container-fluid  church-bg">

    <?php while ( have_posts() ) : the_post(); ?>

    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

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

        <?php endif; ?></section>

    </article>

    <?php endwhile; ?>

</div>





<?php get_sidebar(); ?>

<div class="jumbotron-fluid front-page">

        <!-- <div class="container"> -->

          <div class="row" style="width: 100vw;">

                <div class="col-sm-12 col-md-6">

                      <div class="card pl-4" style="background-color: #fff;">

                        <h1>Hours</h1>

                        <p>Sunday School 9:45 am</p>

                        <p>Sunday Morning Worship 10:45 am</p>

                        <p>Sunday Evening Ladies Bible Study 5 PM</p>

                        <p>Sunday Evening Worship Service 6 pm</p>

                        <p>Wednesday Bible Study and Prayer meeting 6 pm</p>

                        <!-- <p>Church Address 813 Reynolds Street, Springhill La 71075</p> -->

                      </div>

                </div>

                <div class="col-sm-12 col-md-6">

                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3346.14452489992!2d-93.45248018621518!3d32.999964979894145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86315fa52efc965f%3A0x3f571b0734ab5b72!2s813%20Reynolds%20St%2C%20Springhill%2C%20LA%2071075!5e0!3m2!1sen!2sus!4v1586630936460!5m2!1sen!2sus" class="iframe-map" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                </div>

          </div>

        <!-- </div> -->



      </div>

<?php get_footer(); ?>


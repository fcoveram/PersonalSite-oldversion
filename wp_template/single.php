<?php get_header();
if (have_posts()) : while (have_posts()) : the_post();
    $id = get_the_ID(); ?>
    <header class="row header-post">
        <div class="medium-10 medium-offset-1 large-10 large-centered columns">
            <h1><?php the_title(); ?></h1>
            <time><?php the_time( get_option( 'date_format' ) ); ?> - <?php the_time(); ?></time>
        </div>
    </header>

    <article class="row content-post">
        <div class="medium-10 medium-offset-1 large-10 large-centered columns">
            <?php the_content(); ?>
        </div>
    </article>
<?php endwhile;
endif;
get_footer(); ?>
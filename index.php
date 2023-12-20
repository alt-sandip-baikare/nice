
get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>

<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

		?>
        <div class="">
            <h2> <?php the_title(); ?> </h2>
            <?php the_content(); ?>
        </div>
        <?php
	}

} else {

	?>
    <p> No posts found. </p>
    <?php

}

get_footer();
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lastOne
 */

get_header(); ?>
<?php wp_enqueue_script("jquery"); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
		<div>

			<h1>TALKING</h1>

<?php
	$title = "SOMETHING U SHOULD KNOW";
	echo '<h1>'.$title.'</h1>';

?>

		</div>


		<?php

		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>


		<?php rewind_posts(); ?>

		<?php

		$args = array( 'post_type' => 'haha_item', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();

		the_title();
		echo '<div class="entry-content">';
		the_content();
		echo '</div>';

		endwhile;

		?>



		<div id="haha" style="background-color: lightblue;">
		<h2>I'm Code</h2>
		<h3>hide me</h3>
		</div>
		<script type="text/javascript">
		jQuery( "#haha" ).click(function() {
  		jQuery( "h3" ).hide( "slow", function() {
    alert( "Im Here." );
  });
});




		</script>


		</main><!-- #main -->
	</div><!-- #primary -->



<?php
get_sidebar();
get_footer();

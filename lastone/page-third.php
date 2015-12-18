<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hunry
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			<div id="haha">
				<h1>dont ask me what is this but no.3</h1>
				<p>third</p>

			<h1><?php the_title(); ?></h1>
			<h2>
			<?php the_content(); ?>
			</h2>
			</div>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>


<style>
body{
	background-color: #555;
}

#haha{
	margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
	background-color:red;
}

h1{	
	text-align: center;
	color:white;
}
p{	
	text-align: center;
	color:white;
}
h2{

	color:white;
}

</style>
<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */

get_header();



?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">
       
			<header class="page-header">

            <h1>Question 2</h1>
 
                <?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
                   
                 // The Loop
                 while (have_posts() ) {
                 the_post();
                 echo '<h4>' . get_the_title() . '</h4>';
          
 
                }
 
                ?>
                
                
			</header><!-- .page-header -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

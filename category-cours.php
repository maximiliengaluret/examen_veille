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

            <h1>Question 3</h1>
 
                <?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
                echo '<ol>';
                 // The Loop
                 while (have_posts() ) {
                 the_post();
               
                 echo '<li>';
                 echo '<a href=http://localhost/2020-maximilien/2011/11/01/tim-'. substr(get_the_title(),4,7) . '>' . get_the_title().' - <span class="sess">session :</span>'. substr(get_the_title(),4,1)  .' - <span class=dom>domaine :</span>'. substr(get_the_title(),5,1) .  '</a>';
                 echo '</li>';
                
                
             


                }
                echo '</ol>';
                ?>
                
                
			</header><!-- .page-header -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

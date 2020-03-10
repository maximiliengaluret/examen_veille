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

            <h1 >Question </h1>
            <h2 class="titre">Les cours du programme de techniques d'integration multimedia du collège de maisonneuve</h2>
 
                <?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
              
              
                 echo '<div class="grid-container">';
                 // The Loop
                 $valeur ="";
                 $aTab = ['Environnement', 'Animation', 'Design', 'programmation', 'Intégration'];                           
                 for ($i = 0; $i <= 4; $i++) {
                      
                  $valeur = $aTab[$i];
                  /*echo '<div style="grid-area:'.$grid_area.'>' . $valeur. '</div>';*/

                }


                 while (have_posts() ) {
                 the_post();
                 
                 $session = substr(get_the_title(),4,1);
                 $domaine = substr(get_the_title(),5,1);
                 $grid_area = $session . "/" . $domaine;

               
    
                
                 echo '<a style="grid-area:'.$grid_area.'" href=http://localhost/2020-maximilien/2011/11/01/tim-'. substr(get_the_title(),4,7) . '>' . substr(get_the_title(),0,7).  '</a>';
                 
            
                }
                echo '</div>';
                ?>
                
                
			</header><!-- .page-header -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<div id="main" class="site-main" role="main">

		<?php
		    while ( have_posts() ) : the_post();
            
			get_template_part( 'template-parts/content', get_post_format() );
            if (in_category('4')) {
                ?>
                 <p>Anul lansării: 
                <?php
                    the_field('anul_lansarii');
                ?>
                 </p>

                 <p> Regizor: 
                <?php
                    the_field('regizor');
                ?>
                 </p>

                 <p> Distribuție:
                <?php
                   the_field('distribuție');
                ?>
                </p>
                <?php
                 }
            if (in_category('3')) {
                    ?>
                     <p>Titlul cărții: 
                    <?php
                        the_field('titlu_carte');
                    ?>
                     </p>
    
                     <p>Autor: 
                    <?php
                        the_field('autor');
                    ?>
                     </p>
    
                     <p>Editura:
                    <?php
                       the_field('editura');
                    ?>
                    </p>
                    <?php
                     }
			    the_post_navigation();
                

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
            $format = get_post_format();
            echo $format;
		    endwhile; // End of the loop.
		?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();

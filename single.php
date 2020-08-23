<?php get_header();?>

	<!-- Main -->
			<section id="main">
				<div class="inner">
					<header class="major special">
						<h2><?php wp_title(''); ?></h2>
						<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
					</header>
                        
                    <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post(); ?>

                                
                                <?php 
                                    $content = get_the_content();
                                    echo $content;

                                ?>

                            <?php endwhile;

                        else :
                            echo '<p> No content found</p>';

                        endif;
                    ?>
				</div>
			</section>

<?php get_footer();?>
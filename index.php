<?php get_header();?>

	<!-- Main -->
		<section id="main" >
			<div class="inner">
				<header class="major special">
					<h2><?php wp_title(''); ?></h2>
					<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
				</header>

				<?php 
					if (have_posts()): 
						while (have_posts()) :  the_post(); ?>
							<h3><?php the_title(); ?></h3>
							<a href="#" class="image fit"><img src="<?php echo(get_template_directory_uri()."/images/pic11.jpg") ?>" alt="" /></a>
							<?php 
                                $content = get_the_excerpt();
                                $resumo = substr($content, 0, 450);
                                echo '<p>'.$resumo.'</p>';

                            ?>
                            <a href="<?php the_permalink();?>" class="button">Saiba mais</a>
                            <br><?php

                    	endwhile;

                    else :
                        echo '<p> No content found</p>';

                    endif;  ?>
			</div>
		</section>

<?php get_footer(); ?>
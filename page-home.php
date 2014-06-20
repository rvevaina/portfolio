<?php 
/*
Template Name: Home Page
*/
get_header() ?>



<main role="main">
	<!-- section -->
	<section>
	
   
  <div class="headwrap full-height" id="home"> 
  	<div class="headwrapContainer full-height">		  
		<div class="head">
			<h1>RAYHAN VEVAINA</h1>
			<h2>Front-End Web Developer</h2>	
	    </div>
    </div> 
  </div>
  
  <div class="main">
  
   
 
 <?php $allpages = new WP_Query(
 	array (
 		// "page_id" => 50
 		"posts_per_page" => -1,
 		"post_type" => 'page',
 		"order" => 'ASC',
 		"orderby" => "menu_order", 
 		"post__not_in" =>array(17,2,7,93),
 		 ) 
 	); ?>

   
	<?php if ($allpages->have_posts()): while ($allpages->have_posts()) : $allpages->the_post(); ?>

		<!-- article -->
		<div id="about" class="clearfix">
			<div class="aboutContainer">
				<div class="titlecontainer">
					<h2 class="leftTitle"><?php the_title(); ?></h2>
				</div>
				

				<div class="content">
					<h2>ABOUT</h2>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							
					
				
						<?php the_content(); ?>

						
						<?php edit_post_link(); ?>

					</article>
				</div>
		</div>
			</div>
		<!-- /article -->


   <?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

		</article>
		<!-- /article -->

	<?php endif; ?>

	<div id="skills"> 
   		<h2 class="rightTitle">SKILLS</h2>
   	  	
   	  	<div class="skillscontainer">

			<div class="skillsicons">
				<h2>SKILLS</h2>
		   	  	<div class="front-end">
		   	  		<img src="<?php echo get_template_directory_uri(); ?>/img/front end.png" alt="">
					
					<ul>
						<h3>Front-End Development</h3>
						<li>HTML5 & CSS3</li>
						<li>JavaScript</li>
						<li>jQuery</li>
					</ul>
					
				</div>

				<div class="design">
					<img src="<?php echo get_template_directory_uri(); ?>/img/responsive1.png" alt="">
		          
					<ul>
						<h3>Responsive Design</h3>
						<li>Cross browser compatibility</li>
						<li>WordPress CMS Design</li>
						<li>User Experience</li>
					</ul>
				</div>

				<div class="writing">
					<img src="<?php echo get_template_directory_uri(); ?>/img/writing.png" alt="">
									
					<ul>
						<h3>Copywriting</h3>
						<li>Proofreading and editing</li>
						<li>Managing content</li>
						<li>Website copy</li>
					</ul>
				</div>
			</div>
   	  </div>
   </div>

	</section>
	<!-- /section -->
	

<?php $portfolio = new WP_Query(
 	array (
 		"post_type" => 'portfolio',
 		"order" => 'ascending',
 		"orderby" => "menu_order", 
 		 )
 	); ?>
	

	<div id="portfolio">	
   	  	<div class="portfolioSectionContainer">
   		
	   		<div class="portfolioTitleContainer">
	   			<h2 class="leftTitle">PROJECTS</h2>
	   		</div>

	   		<h2 class="main">PROJECTS</h2>
		
			<div class="portfoliocontainer clearfix">
				<!-- <div class="portfoliothumbs"> -->

			<?php if ($portfolio->have_posts()): while ($portfolio->have_posts()) : $portfolio->the_post(); ?>

					<div class="thumbnails">
						<div id="post-<?php the_ID(); ?>" <?php post_class('projects'); ?>>
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

								<a href="<?php the_field('link'); ?>">
								<?php the_post_thumbnail('medium', array('class'=>"thumbnailSize") ); ?>
								
								<div class="mask">
									<img class="link" src="<?php echo get_template_directory_uri(); ?>/img/link-icon.png" alt="">
								
								</div>
								</a>
					     	</div>	
				     	</div>
						<h3><?php the_field('client_name');?></h3>
						<p><?php the_field('short_description');?></p>
				    </div>
		<!-- 	</div> -->


	<?php endwhile; ?>


	<?php else: ?>
	   
		<!-- article -->
		<article>

			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

		</article>
		<!-- /article -->

	<?php endif; ?>
	 		</div>
		</div>
	</div>

	</section>
	<!-- /section -->

	<?php $contact = new WP_Query(
 	array (
 		"post_type" => 'page',
 		"order" => 'ascending',
 		"orderby" => "menu_order", 
 		"post__not_in" =>array(17,2,7,50),
 		 )
 	); ?>
	

		<div id="contact">	
		  <div class="contactcontainer clearfix">
   			<div class="tittleWrap">
   				<h2>CONTACT</h2>
   			</div>
	<?php if ($contact->have_posts()): while ($contact->have_posts()) : $contact->the_post(); ?>

	
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  


			<?php the_content(); ?>

			<div class="email">
			<a href="mailto:rayhan_v@me.com"><i class="fa fa-envelope fa-5x"></i></a>
			</div>

			<p>or find me online at any of the places below</p>

			<ul class="contactSocial">
				<li><a href="https://twitter.com/ray_vevaina"><i class="fa fa-twitter fa-5x"></i></a></li> 
				<li><a href="https://linkedin.com/in/rayhanv"><i class="fa fa-linkedin fa-5x"></i></a></li>
				<li><a href="https://github.com/rvevaina"><i class="fa fa-github fa-5x"></i></a></li>
			</ul>

			<?php edit_post_link(); ?>

	      </div>
	    </div>
		</article>

	<?php endwhile; ?>


	<?php else: ?>

		<!-- article -->
		<article>

			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>


</div> <!-- End of div class 'main' -->

</main>

   
 
<?php get_footer(); ?>


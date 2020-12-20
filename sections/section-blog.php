<?php 
	$blog_section_title = '';
	$blog_section_subtitle = '';
	$blog_per_page = '';
	$Blog_angular_switch = '';
	
	
  	if( function_exists('cs_get_option')){
		$blog_section_title = cs_get_option('blog_section_title');
		$blog_section_subtitle = cs_get_option('blog_section_subtitle');
		$blog_per_page = cs_get_option('blog_per_page');
		$Blog_angular_switch = cs_get_option('Blog_angular_switch');
		
	}

//Blog post Query
	$appos_blog_post = new WP_Query(array(
		'post_type'=> 'post',
		'posts_per_page'=> $blog_per_page,
	));



if( $appos_blog_post->have_posts()) : ?>
<?php if( $Blog_angular_switch == true ) :?>
<section class="recent section-heading angular" id="recent">
	<div class="angle-top"></div>
<?php else : ?>
	<section class="recent section-heading" id="recent">
<?php endif; ?> 

	<div class="container">
		<div class="row">
			<?php if(!empty($blog_section_title)) : ?>
			<div class="section-header">
				<?php echo (!empty($blog_section_title)) ? '<h2>' . esc_html($blog_section_title). '</h2>' : ''; ?>
				<?php echo (!empty($blog_section_subtitle)) ? '<p>' . esc_html($blog_section_subtitle). '</p>' : ''; ?>
			</div>
			<?php endif; ?>
			
			<div class="section-wrapper row">
				<?php
					$count = 1;
					if( $appos_blog_post->have_posts()) : while( $appos_blog_post->have_posts()) : $appos_blog_post->the_post();  ?>
					<?php if($count === 1) : ?>

				<div class="col-md-6">
					<div class="recent-item-left">
						<div class="recent-img">
							<a href="<?php the_permalink();?>"><?php the_post_thumbnail('appos-570-331'); ?></a>
						</div>
						
						<div class="recent-content">
							<ul class="meta-post">
								<?php meta_post_one(); ?>
							</ul>
							<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
							<a href="<?php the_permalink(); ?>" class="recent-btn"><?php esc_html_e('Read more', 'appos'); ?></a>
						</div>
					</div>
					<?php $count ++; ?>
				</div>
				<?php endif; endwhile; endif; ?>
				<div class="col-md-6">
					<div class="recent-item-right">
						<?php
							if( $appos_blog_post->have_posts()) : $count_mini = 1; while( $appos_blog_post->have_posts()) : $appos_blog_post->the_post(); ?>
							<?php if(  $count_mini >1 && $count_mini != 1) : ?>
						<div class="recent-item-right-top">
							<div class="recent-img">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail('appos-210-260'); ?></a>
							</div>
							
							<div class="recent-content">
								<ul class="meta-post">
									<?php meta_post_one(); ?>
								</ul>
								<h6><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h6>
							<a href="<?php the_permalink(); ?>" class="recent-btn"><?php esc_html_e('Read more', 'appos'); ?></a>
							</div>
						</div>
						<?php  ?>
						<?php endif; $count_mini ++; endwhile; endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>	
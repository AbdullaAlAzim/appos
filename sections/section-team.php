<?php
	$appos_team_heading = '' ;
	$appos_team_subheading = '' ;
	$Team_angular_switch = '' ;
	if( function_exists('cs_get_option')){
		$appos_team_heading = cs_get_option('appos_team_heading');
		$appos_team_subheading = cs_get_option('appos_team_subheading');
		$Team_angular_switch = cs_get_option('Team_angular_switch');
	}

	// Team Post Query				
	$team_member = new WP_Query(array(
			'post_type'		=> 'appos_team',
			'posts_per_page'		=> 4,
		)
	);
	
if($team_member->have_posts()): ?>
<!--  Our Team Start -->

<?php if( $Team_angular_switch == true ) :?>
<section class="team section-heading angular">
	<div class="angle-top"></div>
<?php else : ?>
	<section class="team section-heading">
<?php endif; ?>
	<div class="container">
		<div class="row">
			<?php if(!empty($appos_team_heading)) : ?>
			<div class="section-header">
				<?php echo (!empty($appos_team_heading)) ? '<h2>' . esc_html($appos_team_heading). '</h2>' : ''; ?>
				<?php echo (!empty($appos_team_subheading)) ? '<p>' . esc_html($appos_team_subheading). '</p>' : ''; ?>
			</div>
			<?php endif; ?>
			
			<div class="section-wrapper">
			<?php if($team_member->have_posts()) : while($team_member->have_posts()) : $team_member->the_post(); ?>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="single-member">
						<div class="member-img">
							<?php the_post_thumbnail(); ?>
							<ul class="member-social-link">
								<!--Metabox DATA Receiving-->
								<?php 
									$appos_member_data = get_post_meta(get_the_ID(),'_custom_member_options',true);
									$appos_members_social_data = isset($appos_member_data['appos_team_social_prifile']) ? $appos_member_data['appos_team_social_prifile'] : '';
								?>
								<?php if($appos_members_social_data) : foreach( $appos_members_social_data as $appos_member_social_data):?>
									<li><a  href="<?php echo esc_url($appos_member_social_data['appos_team_social_link']);?>" target="_blank"><i class="<?php echo esc_html($appos_member_social_data['appos_team_social_icon']);?>"></i></a></li>
								<?php endforeach; endif; ?>
							</ul>
						</div>
						
						<div class="member-info">
							<a href="<?php the_permalink(); ?>"><?php the_title('<h5>', '</h5>'); ?></a>
							<?php
								
								$appos_member_designation = isset($appos_member_data['appos_member_desi']) ? $appos_member_data['appos_member_desi'] : '';
							?>
							<p><?php if($appos_member_designation){ echo esc_html($appos_member_designation);}?></p>
						</div>
					</div>
				</div>
			<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</section>  
<?php endif; ?>	
    <!--  Our Team End -->
<?php
/* ==========================================================================
Custom Widget Register- Popular Post
======================================================================== */
class popularpost extends WP_Widget {
	public function __construct(){
		parent::__construct(
			'popularpost',__('Appos::Tranding Post','appos'),
			array(
				'description' => __('You can select how many popular post show in your widget area','appos')
			)
		);
	}
	
	public function form($instance){
		$title = $instance['title'];
		?>
		<p>
		<label for="<?php echo $this->get_field_id('title');?>">Title</label>
		<input class="widefat" type="text" name="<?php echo $this->get_field_name('title');?>"id="<?php echo $this->get_field_id('title');?>" value="<?php echo $title;?>"/>
		</p>
	
		<?php
	}
	public function widget($a,$b){
		$title = $b['title'];
		echo $a['before_widget'];
		echo $a['before_title'];
		echo $title;
		echo $a['after_title'];
		echo '<div class="small-post-list">';
		$postcount =new WP_Query(
			array(
				
				'meta_key' =>'wpb_post_views_count',
				'orderby' => 'meta_value_num',
				'order' => 'DESC'
			)
		);
		while ( $postcount->have_posts() ) : $postcount->the_post();
		?>
		<div class="post-item">
			<?php if(has_post_thumbnail()) {?>
			<div class="post-thumb">
				<a href="<?php the_permalink();?>"><?php the_post_thumbnail('appos-70-60'); ?></a>
			</div>
			<?php } ?>
			<div class="post-content">
				<h6><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h6>
				<span class="post-date"><?php appos_post_date(); ?></span>
			</div>
		</div>
		<?php
		
		endwhile;
		echo "</div>";
		echo $a['after_widget'];
	}
	
	
}

function sidebar_popular_post() {
    register_widget('popularpost');
}
add_action( 'widgets_init', 'sidebar_popular_post' );

